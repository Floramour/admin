<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends SB_Controller 
{

	protected $layout 	= "layouts/main";
	public $module 		= 'orders';
	public $per_page	= '10';

	function __construct() {
		parent::__construct();
		
		$this->load->model('ordersmodel');
		$this->load->model('clientmodel');
		$this->load->model('productsmodel');
		$this->load->model('products_colorsmodel');
		$this->model = $this->ordersmodel;
		
		$this->info = $this->model->makeInfo( $this->module);
		$this->access = $this->model->validAccess($this->info['id']);	
		$this->data = array_merge( $this->data, array(
			'pageTitle'	=> 	$this->info['title'],
			'pageNote'	=>  $this->info['note'],
			'pageModule'	=> 'orders',
		));
		
		if(!$this->session->userdata('logged_in')) redirect('user/login',301);
		
	}
	
	function index() 
	{
		if($this->access['is_view'] ==0)
		{ 
			$this->session->set_flashdata('error',SiteHelpers::alert('error','Your are not allowed to access the page'));
			redirect('dashboard',301);
		}	
		  
		// Filter sort and order for query 
		$sort = (!is_null($this->input->get('sort', true)) ? $this->input->get('sort', true) : 'id_orden'); 
		$order = (!is_null($this->input->get('order', true)) ? $this->input->get('order', true) : 'asc');
		// End Filter sort and order for query 
		// Filter Search for query		
		$filter = (!is_null($this->input->get('search', true)) ? $this->buildSearch() : '');
		// End Filter Search for query 
		
		$page = max(1, (int) $this->input->get('page', 1));
		$params = array(
			'page'		=> $page ,
			'limit'		=> ($this->input->get('rows', true) !='' ? filter_var($this->input->get('rows', true),FILTER_VALIDATE_INT) : $this->per_page ) ,
			'sort'		=> $sort ,
			'order'		=> $order,
			'params'	=> $filter,
			'global'	=> (isset($this->access['is_global']) ? $this->access['is_global'] : 0 )
		);
		// Get Query 
		$results = $this->model->getRows( $params );		
		
		// Build pagination setting
		$page = $page >= 1 && filter_var($page, FILTER_VALIDATE_INT) !== false ? $page : 1;	
		#$pagination = Paginator::make($results['rows'], $results['total'],$params['limit']);		
		$this->data['rowData']		= $results['rows'];
		// Build Pagination
		
		$pagination = $this->paginator( array(
			'total_rows' => $results['total'] ,
			'per_page'	 => $params['limit']
		));
		$this->data['pagination']	= $pagination;
		// Row grid Number 
		$this->data['i']			= ($page * $params['limit'])- $params['limit']; 
		// Grid Configuration 
		$this->data['tableGrid'] 	= $this->info['config']['grid'];
		$this->data['tableForm'] 	= $this->info['config']['forms'];
		$this->data['colspan'] 		= SiteHelpers::viewColSpan($this->info['config']['grid']);		
		// Group users permission
		$this->data['access']		= $this->access;
		// Render into template
		
		$this->data['content'] = $this->load->view('orders/index',$this->data, true );
		
    	$this->load->view('layouts/main', $this->data );
    
	  
	}
	
	function show( $id = null) 
	{
		if($this->access['is_detail'] ==0)
		{ 
			$this->session->set_flashdata('error',SiteHelpers::alert('error','Your are not allowed to access the page'));
			redirect('dashboard',301);
	  	}		

		$row = $this->model->getRow($id);
		if($row)
		{
			$this->data['row'] =  $row;
		} else {
			$this->data['row'] = $this->model->getColumnTable('ordenes'); 
		}
		
		$this->data['id'] = $id;
		$this->data['content'] =  $this->load->view('orders/view', $this->data ,true);	  
		$this->load->view('layouts/main',$this->data);
	}
  
	function add( $id = null ) 
	{
		if($id =='')
			if($this->access['is_add'] ==0) redirect('dashboard',301);

		if($id !='')
			if($this->access['is_edit'] ==0) redirect('dashboard',301);	

		$row = $this->model->getRow( $id );
		if($row)
		{
			$this->data['row'] =  $row;
		} else {
			$this->data['row'] = $this->model->getColumnTable('ordenes'); 
		}
	
		$this->data['id'] = $id;
		$this->data['operadores'] = $this->db->get_where('tb_users', array('group_id' => '5'));
		
		$this->data['content'] = $this->load->view('orders/form',$this->data, true );		
	  	$this->load->view('layouts/main', $this->data );
	
	}
	
	function save() {
		
		$rules = $this->validateForm();

		$this->form_validation->set_rules( $rules );
		if( $this->form_validation->run() )
		{
			$data = $this->validatePost();
			$ID = $this->model->insertRow($data , $this->input->get_post( 'id_orden' , true ));
			// Input logs
			if( $this->input->get( 'id_orden' , true ) =='')
			{
				$this->inputLogs("New Entry row with ID : $ID  , Has Been Save Successfull");
			} else {
				$this->inputLogs(" ID : $ID  , Has Been Changed Successfull");
			}
			// Redirect after save	
			$this->session->set_flashdata('message',SiteHelpers::alert('success'," Data has been saved succesfuly !"));
			if($this->input->post('apply'))
			{
				redirect( 'orders/add/'.$ID,301);
			} else {
				redirect( 'orders',301);
			}			
			
			
		} else {
			$data =	array(
					'message'	=> 'Ops , The following errors occurred',
					'errors'	=> validation_errors('<li>', '</li>')
					);			
			$this->displayError($data);
		}
	}

	function destroy()
	{
		if($this->access['is_remove'] ==0)
		{ 
			$this->session->set_flashdata('error',SiteHelpers::alert('error','Your are not allowed to access the page'));
			redirect('dashboard',301);
	  	}
			
		$this->model->destroy($this->input->post( 'id' , true ));
		$this->inputLogs("ID : ".implode(",",$this->input->post( 'id' , true ))."  , Has Been Removed Successfull");
		$this->session->set_flashdata('message',
			SiteHelpers::alert('success',"ID : ".implode(",",$this->input->post( 'id' , true ))."  , Has Been Removed Successfull"));
		Redirect('orders',301);
	}

	public function client_lookup(){  
        // process posted form data  
        $keyword = $this->input->post('term');  
        $data['response'] = 'false'; //Set default response  
        $query = $this->clientmodel->client_lookup($keyword); //Search DB  
        if( ! empty($query) )  
        {  
            $data['response'] = 'true'; //Set response  
            $data['message'] = array(); //Create array  
            foreach( $query as $row )  
            {  
                $data['message'][] = array(   
                                        'id'=>$row->id_cliente,  
                                        'value' => $row->id_cliente.', '.$row->nombre.', '.$row->fono_fijo.', '.$row->celular.', '.$row->email.', '.$row->direccion.', '.$row->comuna.', '.$row->direccion_cobro,  
                                        ''  
                                     );  //Add a row to array  
            }  
        }  
        if('IS_AJAX')
        {
            echo json_encode($data); //echo json string if ajax request
               
        }
        else
        {  
            $data['content'] = $this->load->view('orders/index',$data, true );
    		$this->load->view('layouts/main', $data );
        }
    }

    public function product_lookup(){  
        // process posted form data  
        $keyword = $this->input->post('term');  
        $data['response'] = 'false'; //Set default response  
        $query = $this->productsmodel->product_lookup($keyword); //Search DB  
        if( ! empty($query) )  
        {  
            $data['response'] = 'true'; //Set response  
            $data['message'] = array(); //Create array  
            foreach( $query as $row )  
            {
            	$data['message'][] = array(   
                                        'id'=>$row->id_producto,  
                                        'value' => $row->id_producto.', '.$row->codigo_mall.', '.$row->nombre.', '.$row->descripcion.', '.$row->precio.', '.base_url().'uploads/products/'.$row->foto_chica,
                                        ''  
                                     );  //Add a row to array  
            }  
        }  
        if('IS_AJAX')  
        {  
            echo json_encode($data); //echo json string if ajax request  
               
        }  
        else  
        {  
            $data['content'] = $this->load->view('orders/index',$data, true );		
    		$this->load->view('layouts/main', $data );
        }  
    }

    public function get_product_colors($product_id) {
    	$query = $this->products_colorsmodel->get_product_colors($product_id); // search product colors
        $return = "<option value=''>-- Please Select --</option>\n";	
        foreach( $query as $row ) {
        	$value = $row->id_color;
    		$text  = $row->color;
    		$return .= "<option value='$value'>$text</option>\n";
        }
        print $return;
    }

     /*public function get_shipping_zones_prices($product_id) {
    	$query = $this->products_colorsmodel->get_product_colors($product_id); // search product colors
        $return = "<option value=''>-- Please Select --</option>\n";	
        foreach( $query as $row ) {
        	$value = $row->id_color;
    		$text  = $row->color;
    		$return .= "<option value='$value'>$text</option>\n";
        }
        print $return;
    }

    /*function precio_dolar($precio) {

    	$flores_db = $this->load->database('800flores', TRUE);
	   	$query = $flores_db->query("SELECT T16_precio_dolar FROM T16_parametros");

		$ret=0;
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row)
		    {
		        $tmp = $row->T16_precio_dolar;
				if ($tmp!=0) {
					$ret = ($precio / $tmp);
					$ret = round($ret, 2);
				}
		    }		
		}
		return $ret;
	}

    function destinos_costos($CHILE='SI',$id_localidad=0,$id_zona=0){
	    if($CHILE!='SI' && $CHILE!='NO'){
	    	$CHILE='SI';		
	   	}
	   	$Select="<select name=\"T20_id_localidad".$CHILE."\" class=\"TextField\" onChange=\"javascript:CambiaDestino(this.form)\"  >";

	   	$flores_db = $this->load->database('800flores', TRUE);
	   	$query = $flores_db->query("SELECT T22_id_zona, T22_zona, T22_chile, T22_precio FROM T22_zona ORDER BY T22_id_zona");		
       
	    $Selected='';
	    if($CHILE=='NO') $blanco1=true; else $blanco1=false;
	    $blanco="";

	    foreach ($query->result() as $row) {	    	

		    $precio2 = $row->T22_precio;
			$precio = "$" . number_format($row->T22_precio,0,",",".");
			$query2 = $flores_db->query("SELECT T20_id_localidad, T22_id_zona, T20_localidad FROM T20_localidades WHERE T22_id_zona='$row->T22_id_zona' ORDER BY T20_localidad ASC");		
			 
			$num_rows = $query2->num_rows();
			$Selected='';
			$blanco='';
			
			if ($num_rows==0) {
				$row->T22_zona = strtoupper($row->T22_zona);
				$row->T22_zona.=" ($precio US\$".$this->precio_dolar($precio2).")";
				$value = $row->T22_precio;
				if ($id_zona == $row->T22_id_zona) { $Selected = 'selected'; }
			 } else {
			 	$blanco = "<option value=\"\"></option>";
				$row->T22_zona = "*-------- ".strtoupper($row->T22_zona)." --------*";
				$value='';				
			 }
			 if ($row->T22_chile == $CHILE) {
			 	if ($blanco1) {
				$Select.="<option value=\"\"></option>
						 <option value=\"$value\" $Selected>$row->T22_zona</option>";
				$blanco1 = FALSE;
				} else {
					$Select.=$blanco."
						 <option value=\"$value\" $Selected>$row->T22_zona</option>";				
				}
			 } else {
			 	continue;
			 }
			  
			foreach ($query2->result() as $row2) { 
				$Select.="<option value=\"".$row->T22_precio."\"";
				 
				 if ($id_localidad == $row2->T20_id_localidad){ 
					$Select.=" selected "; 
				 }
				 $Select.=">";

				 $Select.="$row2->T20_localidad&nbsp;($precio US\$".$this->precio_dolar($precio2).")</option> ";
			}

			if ($blanco != '') {
				$Select.=$blanco;
			}
		}
	   
		$Select.="</select>";

		//return $Select;
		echo $Select;
		/*$data['content'] = $this->load->view('orders/index',$data, true );		
    	$this->load->view('layouts/main', $data );*/
	/*}	*/
}

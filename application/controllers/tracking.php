<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tracking extends SB_Controller 
{

	protected $layout 	= "layouts/main";
	public $module 		= 'tracking';
	public $per_page	= '10';

	function __construct() {
		parent::__construct();
		
		$this->load->model('trackingmodel');
		$this->model = $this->trackingmodel;
		
		$this->info = $this->model->makeInfo( $this->module);
		$this->access = $this->model->validAccess($this->info['id']);	
		$this->data = array_merge( $this->data, array(
			'pageTitle'	=> 	$this->info['title'],
			'pageNote'	=>  $this->info['note'],
			'pageModule'	=> 'tracking',
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
		
		$this->data['content'] = $this->load->view('tracking/index',$this->data, true );
		
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
		$this->data['content'] =  $this->load->view('tracking/view', $this->data ,true);	  
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
		$this->data['despachadores'] = $this->db->get_where('tb_users', array('group_id' => '6'));
		$this->data['content'] = $this->load->view('tracking/form',$this->data, true );		
	  	$this->load->view('layouts/main', $this->data );
	
	}
	
	function save() {

		$rules = $this->validateForm();

		$this->form_validation->set_rules( $rules );
		if( $this->form_validation->run() )
		{
			$data = $this->validatePost();		

			# Send confirmation e-mail
			if (is_array($this->input->get_post('confirmacionentrega')) && in_array("OK", $this->input->get_post('confirmacionentrega')))
			{
			 	$this->load->library('email');

				$this->email->from('floramour@gmail.com', 'Florerías Floramour');
				$this->email->to('davidmorenoazua@gmail.com'); 
				$this->email->cc('davidmorenoazua@hotmail.com'); 
				$this->email->bcc('davidmorenoazua@yahoo.es'); 

				$this->email->subject('Email de confirmación orden de compra: ' . $this->input->get_post( 'id_orden' ));
				$this->email->message('<p><a href="http://www.floramour.cl"><img title="Florer&iacute;as Floramour" src="http://admin.800flores.cl/ordenes/img/logos_guia_floramour.jpg" alt="Florer&iacute;as Floramour" width="101" height="37" border="0" /></a><br />Estimado Cliente: <br /><br />Nos complace informarle que la orden dirigida a <strong>{Nombre_destinatario}</strong>, ha sido entregada.<br />&nbsp;&nbsp;&nbsp;- Firma la guia de despacho: <strong><em>{Nombre_receptor}</em></strong><br />&nbsp;&nbsp;&nbsp;- <em>Hora de entrega: <strong>{Hora_entrega}</strong> </em><br />&nbsp;&nbsp;&nbsp;- <em>Observaciones: <strong>{Observaciones}</strong></em><br /><br />Agradecemos su preferencia<br /><br />Atte.<br /><br /><strong>Dpto. de Despachos<br />Florerias Floramour Ltda.<br /><a href="http://www.floramour.cl">www.Floramour.cl</a><br />Tel:562 2234 1793 (24 Hrs)<br /></strong><br /><span style="color: red;"><strong>Importante:</strong></span><br />&nbsp;&nbsp;&nbsp;- Para su mayor comodidad, guarde nuestro numero telefonico en su celular.<br />&nbsp;&nbsp;&nbsp;- Atencion 24 horas todo el a&ntilde;o Tel: (562) 2234 1793</p>');	

				$this->email->send();

				$data2 = array('confirmacionemail' => 'OK');
				$data = array_merge($data, $data2);
			}

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
				redirect( 'tracking/add/'.$ID,301);
			} else {
				redirect( 'tracking',301);
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
		Redirect('tracking',301);
	}


}

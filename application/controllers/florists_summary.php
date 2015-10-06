<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Florists_summary extends SB_Controller 
{

	protected $layout 	= "layouts/main";
	public $module 		= 'florists_summary';
	public $per_page	= '10';

	function __construct() {
		parent::__construct();
		
		$this->load->model('florists_summarymodel');
		$this->model = $this->florists_summarymodel;
		
		$this->info = $this->model->makeInfo( $this->module);
		$this->access = $this->model->validAccess($this->info['id']);	
		$this->data = array_merge( $this->data, array(
			'pageTitle'	=> 	$this->info['title'],
			'pageNote'	=>  $this->info['note'],
			'pageModule'	=> 'florists_summary',
		));
		
		if(!$this->session->userdata('logged_in')) redirect('user/login',301);
		
	}
	
	function index() 
	{
		# Check if date inputs are empty
		if (empty($this->input->post( 'desde' , true )) || empty($this->input->post( 'hasta' , true ))) {
			$query_from = date("Y-m-d", strtotime(date("Y-m-d").' -1 month'));
			$query_to = date("Y-m-d");
		} else {
			$query_from = $this->input->post( 'desde' , true );
			$query_to = $this->input->post( 'hasta' , true );
		}

		# Chech if florist input is empty
		if (empty($this->input->post( 'florista' , true )))
			$query_florista = '';
		else {
			//$query_florista = ' AND op.id_florista = ' . $this->input->post( 'florista' , true );
			$query_florista = ' WHERE op.id_florista = ' . $this->input->post( 'florista' , true );
			$query_florista2 = ' WHERE op.id_florista = ' . $this->input->post( 'florista' , true );
		}	

		$this->data['from'] = $query_from;
		$this->data['to'] = $query_to;
		$this->data['florista'] = $this->input->post('florista');

		/*$query = $this->db->query("
			SELECT CONCAT(tb_users.first_name, ' ', tb_users.last_name) AS nombre, 
			op.id_florista, 
			(SELECT COUNT(ordenes_producto.id_florista) FROM ordenes_producto WHERE ordenes_producto.id_florista = op.id_florista) AS arreglos, 
			(SELECT SUM(ordenes_producto.precio) FROM ordenes_producto WHERE ordenes_producto.id_florista = op.id_florista) AS valor,
			(SELECT COUNT(ordenes_producto.id_orden) FROM ordenes_producto WHERE ordenes_producto.id_florista IS NOT NULL AND ordenes_producto.id_florista <> 0) AS totalasignados
			FROM ordenes 
			INNER JOIN ordenes_producto op ON ordenes.id_orden = op.id_orden 
			INNER JOIN tb_users ON tb_users.id = op.id_florista
			WHERE fecha_orden BETWEEN '" . $query_from . "' AND '" . $query_to . "' " . $query_florista . "
			GROUP BY op.id_florista"
		); 
		$this->data['results'] = $query->result();*/


		$newFlorista3 = new Florista($_SESSION['ddlMaestro'],$_SESSION['txtFrom'],$_SESSION['txtTo']);
		// TOTAL PERIODO 
		$totalPeriodoCantArreglos   = $newFlorista3->getCantArreglosByDate();	
		$totalPeriodoCantArreglos = $this->db->count_all_results('ordenes_producto')->where_in();
		

		$totalPeriodoValorArreglos  = $newFlorista3->getValorArreglosByDate();	
		if(empty($totalPeriodoValorArreglos[0][0]) && !isset($totalPeriodoValorArreglos[0][0])){ 
			$totalPeriodoValorArreglos[0][0] = 0;
		}
		$totalPeriodoFloramurines   = number_format($newFlorista3->getFloramurines($totalPeriodoCantArreglos[0][0],$totalPeriodoValorArreglos[0][0]),3,'.','');	
		if($totalPeriodoFloramurines == 0){ 
			$totalPeriodoParticipacion = 0;
		}else{
			$totalPeriodoParticipacion  = number_format(($totalPeriodoFloramurines*100)/$totalPeriodoFloramurines,3,'.','');		
		}
		$totalPeriodoFloramurinPeso = number_format($totalPeriodoParticipacion * 1000,3,'.','');	
		$totalPeriodoBono           = number_format($totalPeriodoFloramurines / 100,3,'.','');	
		// TOTAL ASIGNADOS
		$totalAsignCantArreglos     = $newFlorista3->getCantArreglosAsignadosByDate();	
		$totalAsignValorArreglos    = $newFlorista3->getValorArreglosAsignadosByDate();
		if(empty($totalAsignValorArreglos[0][0]) && !isset($totalAsignValorArreglos[0][0])){ 
			$totalAsignValorArreglos[0][0] = 0;
		}
		$totalAsignFloramurines     = number_format($newFlorista3->getFloramurines($totalAsignCantArreglos[0][0],$totalAsignValorArreglos[0][0]),3,'.','');	
		if($totalAsignFloramurines == 0){ 
			$totalAsignParticipacion = 0;
		}else{
			$totalAsignParticipacion    = number_format(($totalAsignFloramurines*100)/$totalPeriodoFloramurines,3,'.','');	
		}	
		$totalAsignFloramurinPeso   = number_format($totalAsignParticipacion * 1000,3,'.','');	
		$totalAsignBono             = number_format($totalAsignFloramurines / 100,3,'.','');	
		// TOTAL NO ASIGNADOS
		$totalNoAsignCantArreglos   = $newFlorista3->getCantArreglosNoAsignadosByDate();	
		$totalNoAsignValorArreglos  = $newFlorista3->getValorArreglosNoAsignadosByDate();
		if(empty($totalNoAsignValorArreglos[0][0]) && !isset($totalNoAsignValorArreglos[0][0])){ 
			$totalNoAsignValorArreglos[0][0] = 0;
		}
		$totalNoAsignFloramurines   = number_format($newFlorista3->getFloramurines($totalNoAsignCantArreglos[0][0],$totalNoAsignValorArreglos[0][0]),3,'.','');	
		if($totalNoAsignFloramurines == 0){ 
			$totalNoAsignParticipacion = 0;
		}else{
			$totalNoAsignParticipacion  = number_format(($totalNoAsignFloramurines*100)/$totalPeriodoFloramurines,3,'.','');		
		}	
		$totalNoAsignFloramurinPeso = number_format($totalNoAsignParticipacion * 1000,3,'.','');	
		$totalNoAsignBono           = number_format($totalNoAsignFloramurines / 100,3,'.','');		
			
			
		if($_SESSION['ddlMaestro'] == NULL){
			$newFlorista = new Florista();
			$resultMatrix = $newFlorista->getActiveFloristas();
		}else{
			$newFlorista = new Florista($_SESSION['ddlMaestro']);
			$resultMatrix = $newFlorista->getActiveFloristaById();
		}
		
		$this->data['floristas'] = $this->db->get_where('tb_users', array('group_id' => '4'));
		$this->data['content'] = $this->load->view('florists_summary/index',$this->data, true );
		
    	$this->load->view('layouts/main', $this->data );   
	  
	}
}

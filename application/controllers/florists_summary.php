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
		else
			$query_florista = ' AND op.id_florista = ' . $this->input->post( 'florista' , true );

		$this->data['from'] = $query_from;
		$this->data['to'] = $query_to;
		$this->data['florista'] = $this->input->post('florista');

		$query = $this->db->query("
			SELECT CONCAT(tb_users.first_name, ' ', tb_users.last_name) AS nombre, op.id_florista, 
			(SELECT COUNT(ordenes_producto.id_florista) FROM ordenes_producto WHERE ordenes_producto.id_florista = op.id_florista) AS arreglos, 
			(SELECT SUM(ordenes_producto.precio) FROM ordenes_producto WHERE ordenes_producto.id_florista = op.id_florista) AS valor,
			(SELECT COUNT(ordenes_producto.id_orden) FROM ordenes_producto WHERE ordenes_producto.id_florista IS NOT NULL AND ordenes_producto.id_florista <> 0) AS totalasignados
			FROM ordenes 
			INNER JOIN ordenes_producto op ON ordenes.id_orden = op.id_orden 
			INNER JOIN tb_users ON tb_users.id = op.id_florista
			WHERE fecha_orden BETWEEN '" . $query_from . "' AND '" . $query_to . "' " . $query_florista . "
			GROUP BY op.id_florista"
		); echo $this->db->last_query();

		$this->data['results'] = $query->result();
		
		$this->data['floristas'] = $this->db->get_where('tb_users', array('group_id' => '4'));
		$this->data['content'] = $this->load->view('florists_summary/index',$this->data, true );
		
    	//$this->load->view('layouts/main', $this->data );   
	  
	}
}

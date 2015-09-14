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
		
		

		if (empty($this->input->post( 'desde' , true )) || empty($this->input->post( 'hasta' , true ))) {
			$query_from = date("Y-m-d");
			$query_to = date("Y-m-d", strtotime(date("Y-m-d").' -1 year'));
		} else {
			$query_from = $this->input->post( 'desde' , true );
			$query_to = $this->input->post( 'hasta' , true );
		}

		$query = $this->db->query("
			SELECT CONCAT(tb_users.first_name, ' ', tb_users.last_name) AS nombre, op.id_florista, 
			(SELECT COUNT(ordenes_producto.id_florista) FROM ordenes_producto WHERE ordenes_producto.id_florista = op.id_florista) AS arreglos, 
			(SELECT SUM(ordenes_producto.precio) FROM ordenes_producto WHERE ordenes_producto.id_florista = op.id_florista) AS valor, 
			(SELECT (arreglos * 0.6) + (valor * 1.4)) AS floramurines 
			FROM ordenes 
			INNER JOIN ordenes_producto op ON ordenes.id_orden = op.id_orden 
			INNER JOIN tb_users ON tb_users.id = op.id_florista
			GROUP BY op.id_florista"
		);
		$this->data['results'] = $query->result();
		
		$this->data['floristas'] = $this->db->get_where('tb_users', array('group_id' => '4'));
		$this->data['content'] = $this->load->view('florists_summary/index',$this->data, true );
		
    	$this->load->view('layouts/main', $this->data );
    
	  
	}
}

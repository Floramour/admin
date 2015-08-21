<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Clientmodel extends SB_Model 
{

	public $table = 'clientes';
	public $primaryKey = 'id_cliente';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT clientes.* FROM clientes   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE clientes.id_cliente IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}

	function client_lookup($keyword){  
        $this->db->select('*')->from('clientes');  
        $this->db->like('nombre',$keyword,'both');
        $this->db->or_like('email',$keyword,'both');
        $this->db->or_like('id_cliente',$keyword,'both');
        $query = $this->db->get();      
           
        return $query->result();  
    }
}

?>

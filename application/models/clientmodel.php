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

	function lookup($keyword){  
        $this->db->select('*')->from('clientes');  
        $this->db->like('nombre',$keyword,'after');  
        $query = $this->db->get();      
           
        return $query->result();  
    }
}

?>

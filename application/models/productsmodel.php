<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Productsmodel extends SB_Model 
{

	public $table = 'productos';
	public $primaryKey = 'id_producto';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT productos.* FROM productos   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE productos.id_producto IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return " ORDER BY productos.id_producto DESC  ";
	}

	function product_lookup($keyword){  
        $this->db->select('*')->from('productos');  
        $this->db->like('nombre',$keyword,'both');
        $query = $this->db->get();      
           
        return $query->result();  
    } 
}

?>

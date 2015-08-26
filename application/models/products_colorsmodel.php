<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products_colorsmodel extends SB_Model 
{

	public $table = 'productos_color';
	public $primaryKey = 'id_producto';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT productos_color.* FROM productos_color   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE productos_color.id_producto IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}

    function get_product_colors($product_id){  
        $this->db->select('*')->from('productos_color');
        $this->db->where('id_producto', $product_id); 
        $query = $this->db->get();      
           
        return $query->result();  
    }	
}

?>

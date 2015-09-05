<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Floristsmodel extends SB_Model 
{

	public $table = 'ordenes';
	public $primaryKey = 'id_orden';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT ordenes.* FROM ordenes   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE ordenes.id_orden IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>

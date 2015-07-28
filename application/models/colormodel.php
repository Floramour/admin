<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Colormodel extends SB_Model 
{

	public $table = 'colores';
	public $primaryKey = 'id_color';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT colores.* FROM colores   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE colores.id_color IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>

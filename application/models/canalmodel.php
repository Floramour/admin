<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Canalmodel extends SB_Model 
{

	public $table = 'canales';
	public $primaryKey = 'id_canal';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT canales.* FROM canales   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE canales.id_canal IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>

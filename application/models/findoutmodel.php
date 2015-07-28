<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Findoutmodel extends SB_Model 
{

	public $table = 'como_ubico';
	public $primaryKey = 'id_como_ubico';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT como_ubico.* FROM como_ubico   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE como_ubico.id_como_ubico IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>

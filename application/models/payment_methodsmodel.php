<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Payment_methodsmodel extends SB_Model 
{

	public $table = 'formas_pago';
	public $primaryKey = 'id_forma_pago';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "   SELECT formas_pago.* FROM formas_pago   ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE formas_pago.id_forma_pago IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "   ";
	}
	
}

?>

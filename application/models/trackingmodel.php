<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Trackingmodel extends SB_Model 
{

	public $table = 'ordenes';
	public $primaryKey = 'id_orden';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "  SELECT `id_orden`, `numero_orden`, `guia`, `des_nombre`, `des_fono`, `des_comuna`,`seg_despachador`, `seg_salida`, `seg_entrega`, `seg_firmante_guia`, `seg_observaciones`, `confirmacionentrega` FROM ordenes  ";
	}
	public static function queryWhere(  ){
		
		return " WHERE (ordenes.id_orden IS NOT NULL) AND (ordenes.confirmacionentrega is null)   ";
	}
	
	public static function queryGroup(){
		return " ORDER BY ordenes.id_orden DESC  ";
	}
	
}

?>

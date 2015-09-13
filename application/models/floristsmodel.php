<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Floristsmodel extends SB_Model 
{

	public $table = 'ordenes';
	public $primaryKey = 'id_orden';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "  SELECT `id_orden`, `id_canal`, `numero_orden`, `destino`, `fecha_orden`, `boleta`, `guia`, `factura`, `operador`, `cli_nombre`, `des_fecha_entrega`, `des_nombre`, `pro_valor_total` FROM `ordenes`  ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE ordenes.id_orden IS NOT NULL AND `id_orden` IN (SELECT `ordenes`.`id_orden` FROM `ordenes` LEFT JOIN `ordenes_producto` ON `ordenes`.`id_orden` = `ordenes_producto`.`id_orden` GROUP by `ordenes_producto`.`id_orden` HAVING SUM(`ordenes_producto`.`id_florista`) > 0)   ";
	}
	
	public static function queryGroup(){
		return " ORDER BY `id_orden` DESC  ";
	}
	
}

?>

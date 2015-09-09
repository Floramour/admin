<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Floristsmodel extends SB_Model 
{

	public $table = 'ordenes';
	public $primaryKey = 'id_orden';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "  SELECT `ordenes`.`id_orden`, `pro_firma`, `id_canal`, `numero_orden`, `destino`, `fecha_orden`, `boleta`, `guia`, `factura`, `operador`, `cli_nombre`, `des_fecha_entrega`, `des_nombre`, `pro_valor_total`, (SELECT IF(SUM(`ordenes_producto`.`id_florista`) > 0, 1, 0) AS 'Florista Asignado') FROM `ordenes` LEFT JOIN `ordenes_producto` ON `ordenes`.`id_orden` = `ordenes_producto`.`id_orden`  ";
	}
	public static function queryWhere(  ){
		
		return "  WHERE ordenes.id_orden IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "  GROUP by `ordenes_producto`.`id_orden` ORDER BY `ordenes_producto`.`id_orden` DESC  ";
	}
	
}

?>

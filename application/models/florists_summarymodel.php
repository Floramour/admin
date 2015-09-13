<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Florists_summarymodel extends SB_Model 
{

	public $table = 'ordenes';
	public $primaryKey = 'id_orden';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "  SELECT CONCAT(tb_users.first_name, ' ', tb_users.last_name) AS nombre, op.id_florista, (SELECT COUNT(ordenes_producto.id_florista) FROM ordenes_producto WHERE ordenes_producto.id_florista = op.id_florista) AS arreglos, (SELECT SUM(ordenes_producto.precio) FROM ordenes_producto WHERE ordenes_producto.id_florista = op.id_florista) AS valor, (SELECT (arreglos * 0.6) + (valor * 1.4)) AS floramurines FROM ordenes INNER JOIN ordenes_producto op ON ordenes.id_orden = op.id_orden INNER JOIN tb_users ON tb_users.id = op.id_florista  ";
	}
	public static function queryWhere(  ){
		
		return " WHERE ordenes.fecha_orden BETWEEN '2014-09-01' AND '2015-09-30'    ";
	}
	
	public static function queryGroup(){
		return " GROUP BY op.id_florista  ";
	}
	
}

?>

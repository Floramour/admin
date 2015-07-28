<div class="page-content row">
	<!-- Page header -->
	<div class="page-header">
		<div class="page-title">
			<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
		</div>
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('orders') ?>"><?php echo $pageTitle ?></a></li>
			<li class="active"> Detail </li>
		</ul>
	</div>  
	
 	<div class="page-content-wrapper m-t">   
		<div class="sbox animated fadeInRight">
			<div class="sbox-title"> <h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small><?php echo $pageNote ;?></small></h4></div>
			<div class="sbox-content"> 		
				<div class="table-responsive">
					<table class="table table-striped table-bordered" >
						<tbody>	
					
					<tr>
						<td width='30%' class='label-view text-right'>Id</td>
						<td><?php echo SiteHelpers::gridDisplayView($row['id_orden'],'id_orden','1:ordenes:id_orden:id_orden') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Canal</td>
						<td><?php echo SiteHelpers::gridDisplayView($row['id_canal'],'id_canal','1:canales:id_canal:canal') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Orden</td>
						<td><?php echo $row['numero_orden'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Destino</td>
						<td><?php echo $row['destino'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pedido</td>
						<td><?php echo $row['fecha_orden'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>¿Cómo nos ubicó?</td>
						<td><?php echo $row['id_como_ubico'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Boleta</td>
						<td><?php echo $row['boleta'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Guía</td>
						<td><?php echo $row['guia'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Factura</td>
						<td><?php echo $row['factura'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Operador</td>
						<td><?php echo $row['operador'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Forma de Pago</td>
						<td><?php echo $row['forma_pago'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Seguimiento</td>
						<td><?php echo $row['estado'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cobranza</td>
						<td><?php echo $row['fecha_cobranza'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Observacion</td>
						<td><?php echo $row['observacion_cobranza'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cli Id Cliente</td>
						<td><?php echo $row['cli_id_cliente'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cliente</td>
						<td><?php echo $row['cli_nombre'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cli Fono Fijo</td>
						<td><?php echo $row['cli_fono_fijo'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cli Celular</td>
						<td><?php echo $row['cli_celular'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cli Email</td>
						<td><?php echo $row['cli_email'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cli Codigo Postal</td>
						<td><?php echo $row['cli_codigo_postal'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cli Direccion</td>
						<td><?php echo $row['cli_direccion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cli Direccion Cobro</td>
						<td><?php echo $row['cli_direccion_cobro'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cli Comuna</td>
						<td><?php echo $row['cli_comuna'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cli Ciudad</td>
						<td><?php echo $row['cli_ciudad'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cli Pais</td>
						<td><?php echo $row['cli_pais'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Cli Promedio Compra</td>
						<td><?php echo $row['cli_promedio_compra'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Des Ante Nombre</td>
						<td><?php echo $row['des_ante_nombre'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Destinatario</td>
						<td><?php echo $row['des_nombre'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Entrega</td>
						<td><?php echo $row['des_fecha_entrega'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Des Hora Entrega</td>
						<td><?php echo $row['des_hora_entrega'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Des Codigo Postal</td>
						<td><?php echo $row['des_codigo_postal'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Des Direccion</td>
						<td><?php echo $row['des_direccion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Des Calles Referencia</td>
						<td><?php echo $row['des_calles_referencia'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Des Comuna</td>
						<td><?php echo $row['des_comuna'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Des Ciudad</td>
						<td><?php echo $row['des_ciudad'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Des Pais</td>
						<td><?php echo $row['des_pais'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Des Fono</td>
						<td><?php echo $row['des_fono'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pro Descripcion</td>
						<td><?php echo $row['pro_descripcion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pro Codigo Mall</td>
						<td><?php echo $row['pro_codigo_mall'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pro Valor Flores</td>
						<td><?php echo $row['pro_valor_flores'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pro Accesorios</td>
						<td><?php echo $row['pro_accesorios'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pro Conduccion</td>
						<td><?php echo $row['pro_conduccion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pro Convenio</td>
						<td><?php echo $row['pro_convenio'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pro Porcentaje</td>
						<td><?php echo $row['pro_porcentaje'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Total</td>
						<td><?php echo $row['pro_valor_total'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pro Dedicatoria</td>
						<td><?php echo $row['pro_dedicatoria'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pro Firma</td>
						<td><?php echo $row['pro_firma'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Seg Despachador</td>
						<td><?php echo $row['seg_despachador'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Seg Salida</td>
						<td><?php echo $row['seg_salida'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Seg Entrega</td>
						<td><?php echo $row['seg_entrega'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Seg Llegada</td>
						<td><?php echo $row['seg_llegada'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Seg Firmante Guia</td>
						<td><?php echo $row['seg_firmante_guia'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Seg Observaciones</td>
						<td><?php echo $row['seg_observaciones'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tar Tipo Tarjeta</td>
						<td><?php echo $row['tar_tipo_tarjeta'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tar Numero Tarjeta</td>
						<td><?php echo $row['tar_numero_tarjeta'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tar Vencimiento Mes</td>
						<td><?php echo $row['tar_vencimiento_mes'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tar Vencimiento Ano</td>
						<td><?php echo $row['tar_vencimiento_ano'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tar Nombre Titular</td>
						<td><?php echo $row['tar_nombre_titular'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tar Codigo Seguimiento</td>
						<td><?php echo $row['tar_codigo_seguimiento'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Tar Codigo Autorizacion</td>
						<td><?php echo $row['tar_codigo_autorizacion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fac Razon Social</td>
						<td><?php echo $row['fac_razon_social'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fac Direccion</td>
						<td><?php echo $row['fac_direccion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fac Giro</td>
						<td><?php echo $row['fac_giro'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fac Comuna</td>
						<td><?php echo $row['fac_comuna'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fac Rut</td>
						<td><?php echo $row['fac_rut'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fac Telefono</td>
						<td><?php echo $row['fac_telefono'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fac Fax</td>
						<td><?php echo $row['fac_fax'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fac Contacto</td>
						<td><?php echo $row['fac_contacto'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Orden Observaciones</td>
						<td><?php echo $row['orden_observaciones'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Direccion Donde Enviar</td>
						<td><?php echo $row['direccion_donde_enviar'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sis Comision Pagada</td>
						<td><?php echo $row['sis_comision_pagada'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sis Usuario Comision</td>
						<td><?php echo $row['sis_usuario_comision'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Sis Fecha Comision</td>
						<td><?php echo $row['sis_fecha_comision'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Usuario Creación</td>
						<td><?php echo $row['usuario_creacion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha Creación</td>
						<td><?php echo $row['fecha_creacion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Usuario Modificacion</td>
						<td><?php echo $row['usuario_modificacion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha Modificacion</td>
						<td><?php echo $row['fecha_modificacion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>User ImpresionOC</td>
						<td><?php echo $row['user_impresionOC'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Horafecha ImpresionOC</td>
						<td><?php echo $row['horafecha_impresionOC'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>User ImpresionV</td>
						<td><?php echo $row['user_impresionV'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Horafecha ImpresionV</td>
						<td><?php echo $row['horafecha_impresionV'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>User ImpresionGE</td>
						<td><?php echo $row['user_impresionGE'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Horafecha ImpresionGE</td>
						<td><?php echo $row['horafecha_impresionGE'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>User ImpresionST</td>
						<td><?php echo $row['user_impresionST'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Horafecha ImpresionST</td>
						<td><?php echo $row['horafecha_impresionST'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Confirmacionentrega</td>
						<td><?php echo $row['confirmacionentrega'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Confirmacionemail</td>
						<td><?php echo $row['confirmacionemail'] ;?> </td>
						
					</tr>
				
						</tbody>	
					</table>    
				</div>
			</div>
		</div>		
	

	</div>
</div>
	  
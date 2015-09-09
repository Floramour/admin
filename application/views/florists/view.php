<div class="page-content row">
	<!-- Page header -->
	<div class="page-header">
		<div class="page-title">
			<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
		</div>
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('florists') ?>"><?php echo $pageTitle ?></a></li>
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
						<td><?php echo $row['id_orden'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pro Firma</td>
						<td><?php echo $row['pro_firma'] ;?> </td>
						
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
						<td width='30%' class='label-view text-right'>Fecha pedido</td>
						<td><?php echo $row['fecha_orden'] ;?> </td>
						
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
						<td width='30%' class='label-view text-right'>Cliente</td>
						<td><?php echo $row['cli_nombre'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha de Entrega</td>
						<td><?php echo $row['des_fecha_entrega'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Destinatario</td>
						<td><?php echo $row['des_nombre'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Total</td>
						<td><?php echo $row['pro_valor_total'] ;?> </td>
						
					</tr>
				
						</tbody>	
					</table>    
				</div>
			</div>
		</div>		
	

	</div>
</div>
	  
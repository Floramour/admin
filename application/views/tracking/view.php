<div class="page-content row">
	<!-- Page header -->
	<div class="page-header">
		<div class="page-title">
			<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
		</div>
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('tracking') ?>"><?php echo $pageTitle ?></a></li>
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
						<td width='30%' class='label-view text-right'>Id Orden</td>
						<td><?php echo $row['id_orden'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Número Orden</td>
						<td><?php echo $row['numero_orden'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Guía</td>
						<td><?php echo $row['guia'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Destinatario</td>
						<td><?php echo $row['des_nombre'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Comuna</td>
						<td><?php echo $row['des_comuna'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Despachador</td>
						<td><?php echo $row['seg_despachador'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Salida</td>
						<td><?php echo $row['seg_salida'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Entrega</td>
						<td><?php echo $row['seg_entrega'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Recibe</td>
						<td><?php echo $row['seg_firmante_guia'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Teléfono</td>
						<td><?php echo $row['des_fono'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Observaciones</td>
						<td><?php echo $row['seg_observaciones'] ;?> </td>
						
					</tr>
				
						</tbody>	
					</table>    
				</div>
			</div>
		</div>		
	

	</div>
</div>
	  
<div class="page-content row">
	<!-- Page header -->
	<div class="page-header">
		<div class="page-title">
			<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
		</div>
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('client') ?>"><?php echo $pageTitle ?></a></li>
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
						<td width='30%' class='label-view text-right'>Id Cliente</td>
						<td><?php echo $row['id_cliente'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nombre</td>
						<td><?php echo $row['nombre'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fono Fijo</td>
						<td><?php echo $row['fono_fijo'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Celular</td>
						<td><?php echo $row['celular'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Email</td>
						<td><?php echo $row['email'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Direccion</td>
						<td><?php echo $row['direccion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Comuna</td>
						<td><?php echo $row['comuna'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Direccion Cobro</td>
						<td><?php echo $row['direccion_cobro'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Usuario Creacion</td>
						<td><?php echo $row['usuario_creacion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha Creacion</td>
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
				
						</tbody>	
					</table>    
				</div>
			</div>
		</div>		
	

	</div>
</div>
	  
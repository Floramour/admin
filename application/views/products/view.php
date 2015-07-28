<div class="page-content row">
	<!-- Page header -->
	<div class="page-header">
		<div class="page-title">
			<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
		</div>
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('products') ?>"><?php echo $pageTitle ?></a></li>
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
						<td><?php echo $row['id_producto'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Id Catálogo</td>
						<td><?php echo $row['id_catalogo'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Id Producto Old</td>
						<td><?php echo $row['id_producto_old'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Código Mall</td>
						<td><?php echo $row['codigo_mall'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Nombre</td>
						<td><?php echo $row['nombre'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Descripción</td>
						<td><?php echo $row['descripcion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Precio</td>
						<td><?php echo $row['precio'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Foto</td>
						<td><?php echo SiteHelpers::showUploadedFile($row['foto_chica'],'uploads/products/') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Foto Grande</td>
						<td><?php echo SiteHelpers::showUploadedFile($row['foto_grande'],'uploads/products/') ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Activo</td>
						<td><?php echo $row['activo'] ;?> </td>
						
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
						<td width='30%' class='label-view text-right'>Usuario Modificación</td>
						<td><?php echo $row['usuario_modificacion'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Fecha Modificación</td>
						<td><?php echo $row['fecha_modificacion'] ;?> </td>
						
					</tr>
				
						</tbody>	
					</table>    
				</div>
			</div>
		</div>		
	

	</div>
</div>
	  
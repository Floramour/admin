<div class="page-content row">
	<!-- Page header -->
	<div class="page-header">
		<div class="page-title">
			<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
		</div>
		<ul class="breadcrumb">
			<li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
			<li><a href="<?php echo site_url('florists_summary') ?>"><?php echo $pageTitle ?></a></li>
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
						<td width='30%' class='label-view text-right'>Nombre</td>
						<td><?php echo $row['nombre'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Id Florista</td>
						<td><?php echo $row['id_florista'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Arreglos</td>
						<td><?php echo $row['arreglos'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Valor</td>
						<td><?php echo $row['valor'] ;?> </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Floramurines</td>
						<td><?php echo $row['floramurines'] ;?> </td>
						
					</tr>
				
						</tbody>	
					</table>    
				</div>
			</div>
		</div>		
	

	</div>
</div>
	  
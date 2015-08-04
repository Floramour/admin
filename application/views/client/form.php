<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
	<div class="page-title">
	<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
	</div>
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
		<li><a href="<?php echo site_url('client') ?>"><?php echo $pageTitle ?></a></li>
		<li class="active"> Form </li>
	</ul>  	  
</div>
 
 	<div class="page-content-wrapper m-t">
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small><?php echo $pageNote ;?></small></h4></div>
	<div class="sbox-content"> 	


		<?php echo $this->session->flashdata('message');?>
			<ul class="parsley-error-list">
				<?php echo $this->session->flashdata('errors');?>
			</ul>
		 <form action="<?php echo site_url('client/save/'.$row['id_cliente']); ?>" class='form-horizontal' 
		 parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 


<div class="col-md-12">
						<fieldset><legend> Clientes</legend>
									
								  <div class="form-group  " >
									<label for="Id Cliente" class=" control-label col-md-4 text-left"> Id Cliente </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['id_cliente'];?>' name='id_cliente'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Nombre" class=" control-label col-md-4 text-left"> Nombre </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['nombre'];?>' name='nombre'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fono Fijo" class=" control-label col-md-4 text-left"> Fono Fijo </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fono_fijo'];?>' name='fono_fijo'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Celular" class=" control-label col-md-4 text-left"> Celular </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['celular'];?>' name='celular'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Email" class=" control-label col-md-4 text-left"> Email </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['email'];?>' name='email'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Direccion" class=" control-label col-md-4 text-left"> Direccion </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['direccion'];?>' name='direccion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Comuna" class=" control-label col-md-4 text-left"> Comuna </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['comuna'];?>' name='comuna'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Direccion Cobro" class=" control-label col-md-4 text-left"> Direccion Cobro </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['direccion_cobro'];?>' name='direccion_cobro'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Usuario Creacion" class=" control-label col-md-4 text-left"> Usuario Creacion </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['usuario_creacion'];?>' name='usuario_creacion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fecha Creacion" class=" control-label col-md-4 text-left"> Fecha Creacion </label>
									<div class="col-md-8">
									  
				<input type='text' class='form-control datetime' placeholder='' value='<?php echo $row['fecha_creacion'];?>' name='fecha_creacion'
				style='width:150px !important;'	   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Usuario Modificacion" class=" control-label col-md-4 text-left"> Usuario Modificacion </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['usuario_modificacion'];?>' name='usuario_modificacion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fecha Modificacion" class=" control-label col-md-4 text-left"> Fecha Modificacion </label>
									<div class="col-md-8">
									  
				<input type='text' class='form-control datetime' placeholder='' value='<?php echo $row['fecha_modificacion'];?>' name='fecha_modificacion'
				style='width:150px !important;'	   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> </fieldset>
			</div>
			
			
		
			<div style="clear:both"></div>	
				
 		<div class="toolbar-line text-center">		
			<input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
			<input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.sb_submit'); ?>" />
			<a href="<?php echo site_url('client');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.sb_cancel'); ?> </a>
 		</div>
			  		
		</form>

	</div>
	</div>
</div>		
</div>	
</div>
			 
<script type="text/javascript">
$(document).ready(function() { 
 	 
});
</script>		 
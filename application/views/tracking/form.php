<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
	<div class="page-title">
	<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
	</div>
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
		<li><a href="<?php echo site_url('tracking') ?>"><?php echo $pageTitle ?></a></li>
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
		 <form action="<?php echo site_url('tracking/save/'.$row['id_orden']); ?>" class='form-horizontal' 
		 parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 


<div class="col-md-12">
						<fieldset><legend> Confirmación de Entregas</legend>
									
								  <div class="form-group  " >
									<label for="Id Orden" class=" control-label col-md-4 text-left"> Id Orden </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['id_orden'];?>' name='id_orden'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Numero Orden" class=" control-label col-md-4 text-left"> Numero Orden </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['numero_orden'];?>' name='numero_orden'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Guia" class=" control-label col-md-4 text-left"> Guia </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['guia'];?>' name='guia'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Des Nombre" class=" control-label col-md-4 text-left"> Des Nombre </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_nombre'];?>' name='des_nombre'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Des Fono" class=" control-label col-md-4 text-left"> Des Fono </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_fono'];?>' name='des_fono'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Des Comuna" class=" control-label col-md-4 text-left"> Des Comuna </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_comuna'];?>' name='des_comuna'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Seg Despachador" class=" control-label col-md-4 text-left"> Seg Despachador </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['seg_despachador'];?>' name='seg_despachador'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Seg Salida" class=" control-label col-md-4 text-left"> Seg Salida </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['seg_salida'];?>' name='seg_salida'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Seg Entrega" class=" control-label col-md-4 text-left"> Seg Entrega </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['seg_entrega'];?>' name='seg_entrega'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Seg Firmante Guia" class=" control-label col-md-4 text-left"> Seg Firmante Guia </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['seg_firmante_guia'];?>' name='seg_firmante_guia'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Seg Observaciones" class=" control-label col-md-4 text-left"> Seg Observaciones </label>
									<div class="col-md-8">
									  <textarea name='seg_observaciones' rows='2' id='editor' class='form-control markItUp '  
						 ><?php echo $row['seg_observaciones'] ;?></textarea> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Confirmacionentrega" class=" control-label col-md-4 text-left"> Confirmacionentrega </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['confirmacionentrega'];?>' name='confirmacionentrega'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> </fieldset>
			</div>
			
			
		
			<div style="clear:both"></div>	
				
 		<div class="toolbar-line text-center">		
			<input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
			<input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.sb_submit'); ?>" />
			<a href="<?php echo site_url('tracking');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.sb_cancel'); ?> </a>
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
<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
	<div class="page-title">
	<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
	</div>
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
		<li><a href="<?php echo site_url('products') ?>"><?php echo $pageTitle ?></a></li>
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
		 <form action="<?php echo site_url('products/save/'.$row['id_producto']); ?>" class='form-horizontal' 
		 parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 


<div class="col-md-6">
						<fieldset><legend> Producto</legend>
									
								  <div class="form-group hidethis " style="display:none;">
									<label for="Id" class=" control-label col-md-4 text-left"> Id </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['id_producto'];?>' name='id_producto'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Catálogo" class=" control-label col-md-4 text-left"> Catálogo </label>
									<div class="col-md-8">
									  <select name='id_catalogo' rows='5' id='id_catalogo' code='{$id_catalogo}' 
							class='select2 '    ></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Codigo Mall" class=" control-label col-md-4 text-left"> Codigo Mall <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['codigo_mall'];?>' name='codigo_mall'  required parsley-type='number'  /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Nombre" class=" control-label col-md-4 text-left"> Nombre <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['nombre'];?>' name='nombre'  required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Descripción" class=" control-label col-md-4 text-left"> Descripción <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <textarea name='descripcion' rows='2' id='editor' class='form-control markItUp '  
						required ><?php echo $row['descripcion'] ;?></textarea> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Precio" class=" control-label col-md-4 text-left"> Precio <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['precio'];?>' name='precio'  required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Activo" class=" control-label col-md-4 text-left"> Activo <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  
					<?php $activo = explode(',',$row['activo']);
					$activo_opt = array( 'SI' => 'Activo' ,  'NO' => 'Inactivo' , ); ?>
					<select name='activo' rows='5' required  class='select2 '  > 
						<?php 
						foreach($activo_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['activo'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> </fieldset>
			</div>
			
			<div class="col-md-6">
						<fieldset><legend> Foto</legend>
									
								  <div class="form-group  " >
									<label for="Foto Chica" class=" control-label col-md-4 text-left"> Foto Chica </label>
									<div class="col-md-8">
									  <input  type='file' name='foto_chica' id='foto_chica' <?php if($row['foto_chica'] =='') echo 'class="required"' ;?> style='width:150px !important;'  />
					<?php echo SiteHelpers::showUploadedFile($row['foto_chica'],'/uploads/products/') ;?>
				 <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Foto Grande" class=" control-label col-md-4 text-left"> Foto Grande </label>
									<div class="col-md-8">
									  <input  type='file' name='foto_grande' id='foto_grande' <?php if($row['foto_grande'] =='') echo 'class="required"' ;?> style='width:150px !important;'  />
					<?php echo SiteHelpers::showUploadedFile($row['foto_grande'],'/uploads/products/') ;?>
				 <br />
									  <i> <small></small></i>
									 </div> 
								  </div> </fieldset>
			</div>
			
			
		
			<div style="clear:both"></div>	
				
 		<div class="toolbar-line text-center">		
			<input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
			<input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.sb_submit'); ?>" />
			<a href="<?php echo site_url('products');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.sb_cancel'); ?> </a>
 		</div>
			  		
		</form>

	</div>
	</div>
</div>		
</div>	
</div>
			 
<script type="text/javascript">
$(document).ready(function() { 

		$("#id_catalogo").jCombo("<?php echo site_url('products/comboselect?filter=catalogos:id_catalogo:catalogo') ?>",
		{  selected_value : '<?php echo $row["id_catalogo"] ?>' });
		 	 
});
</script>		 
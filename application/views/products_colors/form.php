<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
	<div class="page-title">
	<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
	</div>
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
		<li><a href="<?php echo site_url('products_colors') ?>"><?php echo $pageTitle ?></a></li>
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
		 <form action="<?php echo site_url('products_colors/save/'.$row['id_producto']); ?>" class='form-horizontal' 
		 parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 


<div class="col-md-12">
						<fieldset><legend> Product Colors</legend>
									
								  <div class="form-group  " >
									<label for="Id Producto" class=" control-label col-md-4 text-left"> Nombre Producto </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $producto->nombre; ?>' name='nombre' required readonly /> <br />
									  <input type='hidden' value='<?php echo $producto->id_producto; ?>' name='id_producto' />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group">
									<label for="Id Color" class="control-label col-md-4 text-left"> Colores </label>
									<div class="col-md-8">
										<select multiple name='id_color[]' rows='20' id='id_color[]' class='form-control ' code='{$id_color}' required style="height: 300px;">
											<?php foreach($colores->result() as $color) {?>
											<option value="<?php echo $color->id_color ;?>"
												<?php foreach ($colores_producto->result() as $item) { ?>
	    											<?php if ($item->id_color == $color->id_color ) { echo 'selected'; } ?>
												<?php } ?>	
												><?php echo $color->color ;?></option>									
											<?php } ?>
										</select>
									  <!--select name='id_color' rows='5' id='id_color' code='{$id_color}' 
							class='select2 '    ></select--> <br />
									  <i> <small>Presione tecla CTRL+Click para seleccionar más de un color.</small></i>
									 </div> 
								  </div> 					
								  <!--div class="form-group  " >
									<label for="Orden" class=" control-label col-md-4 text-left"> Orden </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php //echo $row['orden'];?>' name='orden'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div--> </fieldset>
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

		$("#id_color").jCombo("<?php echo site_url('products_colors/comboselect?filter=colores::') ?>",
		{  selected_value : '<?php echo $row["id_color"] ?>' });
		 	 
});
</script>
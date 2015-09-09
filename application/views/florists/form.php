<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
	<div class="page-title">
	<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
	</div>
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
		<li><a href="<?php echo site_url('florists') ?>"><?php echo $pageTitle ?></a></li>
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
		 <form action="<?php echo site_url('florists/save/'.$row['id_orden']); ?>" class='form-horizontal' 
		 parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 


<div class="col-md-12">
						<fieldset><legend> Floristas</legend>
									
								  <div class="form-group  " >
									<label for="Id Orden" class=" control-label col-md-4 text-left"> Id Orden </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['id_orden'];?>' name='id_orden'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Pro Firma" class=" control-label col-md-4 text-left"> Pro Firma </label>
									<div class="col-md-8">
									  <textarea name='pro_firma' rows='2' id='pro_firma' class='form-control '  
				           ><?php echo $row['pro_firma'] ;?></textarea> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Id Canal" class=" control-label col-md-4 text-left"> Id Canal </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['id_canal'];?>' name='id_canal'   /> <br />
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
									<label for="Destino" class=" control-label col-md-4 text-left"> Destino </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['destino'];?>' name='destino'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fecha Orden" class=" control-label col-md-4 text-left"> Fecha Orden </label>
									<div class="col-md-8">
									  
				<input type='text' class='form-control datetime' placeholder='' value='<?php echo $row['fecha_orden'];?>' name='fecha_orden'
				style='width:150px !important;'	   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Boleta" class=" control-label col-md-4 text-left"> Boleta </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['boleta'];?>' name='boleta'   /> <br />
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
									<label for="Factura" class=" control-label col-md-4 text-left"> Factura </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['factura'];?>' name='factura'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Operador" class=" control-label col-md-4 text-left"> Operador </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['operador'];?>' name='operador'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Cli Nombre" class=" control-label col-md-4 text-left"> Cli Nombre </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_nombre'];?>' name='cli_nombre'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Des Fecha Entrega" class=" control-label col-md-4 text-left"> Des Fecha Entrega </label>
									<div class="col-md-8">
									  
				<input type='text' class='form-control datetime' placeholder='' value='<?php echo $row['des_fecha_entrega'];?>' name='des_fecha_entrega'
				style='width:150px !important;'	   /> <br />
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
									<label for="Pro Valor Total" class=" control-label col-md-4 text-left"> Pro Valor Total </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_valor_total'];?>' name='pro_valor_total'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> </fieldset>
			</div>
			
			
		
			<div style="clear:both"></div>	
				
 		<div class="toolbar-line text-center">		
			<input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
			<input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.sb_submit'); ?>" />
			<a href="<?php echo site_url('florists');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.sb_cancel'); ?> </a>
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
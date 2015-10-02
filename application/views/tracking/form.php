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
									
								  <div class="form-group  "  >
									<label for="Id Orden" class=" control-label col-md-4 text-left"> Id Orden </label>
									<div class="col-md-8">
									  <input type='number' class='form-control' placeholder='' value='<?php echo $row['id_orden'];?>' name='id_orden'  readonly /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Número Orden" class=" control-label col-md-4 text-left"> Número Orden </label>
									<div class="col-md-8">
									  <input type='number' class='form-control' placeholder='' value='<?php echo $row['numero_orden'];?>' name='numero_orden' readonly  /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 
								  <div class="form-group  " >
									<label for="Guía" class=" control-label col-md-4 text-left"> Guía </label>
									<div class="col-md-8">
									  <input type='number' class='form-control' placeholder='' value='<?php echo $row['guia'];?>' name='guia' readonly /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div>
								  <div class="form-group  " >
									<label for="Destinatario" class=" control-label col-md-4 text-left"> Destinatario </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_nombre'];?>' name='des_nombre' readonly /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div>
								  <div class="form-group  " >
									<label for="Comuna" class=" control-label col-md-4 text-left"> Comuna </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_comuna'];?>' name='des_comuna' readonly /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div>
								  <div class="form-group  " >
									<label for="Despachador" class=" control-label col-md-4 text-left"> Despachador </label>
									<div class="col-md-8">
									  <select name='seg_despachador' rows='5' id='seg_despachador' class='form-control '>
									  	<option value="">-- Please Select --</option>
										<?php foreach($despachadores->result() as $despachador) {?>
										<option value="<?php echo $despachador->id; ?>"
										 <?php if($row['seg_despachador'] == $despachador->id ) echo 'selected';?>><?php echo $despachador->first_name ." ". $despachador->last_name; ?></option>
										<?php } ?>
									  </select><br />
									  <i> <small></small></i>
									 </div> 
								  </div>					
								  <div class="form-group  " >
									<label for="Hora de Salida" class=" control-label col-md-4 text-left"> Hora de Salida </label>
									<div class="col-md-8">
									  <input type='time' class='form-control' placeholder='' value='<?php echo $row['seg_salida'] != "00:00:00" ? $row['seg_salida'] : "";?>' name='seg_salida' /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Hora de Entrega" class=" control-label col-md-4 text-left"> Hora de Entrega </label>
									<div class="col-md-8">
									  <input type='time' class='form-control' placeholder='' value='<?php echo $row['seg_entrega'] != "00:00:00" ? $row['seg_entrega'] : "";?>' name='seg_entrega' /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Recibe" class=" control-label col-md-4 text-left"> Recibe </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['seg_firmante_guia'];?>' name='seg_firmante_guia'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div>
								  <div class="form-group  " >
									<label for="Teléfono" class=" control-label col-md-4 text-left"> Teléfono </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_fono'];?>' name='des_fono'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div>			
								  <div class="form-group  " >
									<label for="Observaciones" class=" control-label col-md-4 text-left"> Observaciones </label>
									<div class="col-md-8">
									  <textarea name='seg_observaciones' rows='2' id='editor' class='form-control markItUp '  
						 ><?php echo $row['seg_observaciones'] ;?></textarea> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Confirmar Orden" class=" control-label col-md-4 text-left"> Confirmar Orden </label>
									<div class="col-md-8">
									  <?php $confirmacionentrega = explode(",",$row['confirmacionentrega']); ?>
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='confirmacionentrega[]' value ='OK'   class='' 
					<?php if(in_array('OK',$confirmacionentrega)) echo 'checked';?> 
					 /> Confirmar </label>  <br />
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
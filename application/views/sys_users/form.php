<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
	<div class="page-title">
	<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
	</div>
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
		<li><a href="<?php echo site_url('sys_users') ?>"><?php echo $pageTitle ?></a></li>
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
		 <form action="<?php echo site_url('sys_users/save/'.$row['id']); ?>" class='form-horizontal' 
		 parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 


<div class="col-md-12">
						<fieldset><legend> Usuarios</legend>
									
								  <div class="form-group hidethis " style="display:none;">
									<label for="Id" class=" control-label col-md-4 text-left"> Id </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['id'];?>' name='id'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Grupo" class=" control-label col-md-4 text-left"> Grupo <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  
					<?php $group_id = explode(',',$row['group_id']);
					$group_id_opt = array( '2' => 'Administrator' ,  '3' => 'Digitador' ,  '4' => 'Florista' ,  '5' => 'Operador' ,  '6' => 'Despachador' , ); ?>
					<select name='group_id' rows='5' required  class='select2 '  > 
						<?php 
						foreach($group_id_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['group_id'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Username" class=" control-label col-md-4 text-left"> Username </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['username'];?>' name='username'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Email" class=" control-label col-md-4 text-left"> Email <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['email'];?>' name='email'  required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Nombre" class=" control-label col-md-4 text-left"> Nombre <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['first_name'];?>' name='first_name'  required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Apellidos" class=" control-label col-md-4 text-left"> Apellidos <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['last_name'];?>' name='last_name'  required /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Estado" class=" control-label col-md-4 text-left"> Estado <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  
					<label class='radio radio-inline'>
					<input type='radio' name='active' value ='1' requred <?php if($row['active'] == '1') echo 'checked="checked"';?> > Activo </label>
					<label class='radio radio-inline'>
					<input type='radio' name='active' value ='0' requred <?php if($row['active'] == '0') echo 'checked="checked"';?> > Inactivo </label> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> </fieldset>
								  <fieldset>
				<legend><?php echo $this->lang->line('core.password'); ?> </legend>
				  <div class="form-group">
					<label for="ipt" class=" control-label col-md-4"><?php echo $this->lang->line('core.password'); ?> </label>
					<div class="col-md-8">
					<input name="password" type="password" id="password" class="form-control input-sm" value="" style="width:50% !important;"
					<?php if($row['id'] =='')echo 'required'; ?>/>   
					 </div> 
				  </div>  
				  
				  <div class="form-group">
					<label for="ipt" class=" control-label col-md-4"><?php echo $this->lang->line('core.repassword'); ?> </label>
					<div class="col-md-8">
					<input name="password_confirmation" type="password" id="password_confirmation" class="form-control input-sm" style="width:50% !important;"
					<?php if($row['id'] =='')echo 'required'; ?>/>  
					 </div> 
				  </div>				
			
			</fieldset>		
			</div>
			
			
		
			<div style="clear:both"></div>	
				
 		<div class="toolbar-line text-center">		
			<input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
			<input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.sb_submit'); ?>" />
			<a href="<?php echo site_url('sys_users');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.sb_cancel'); ?> </a>
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
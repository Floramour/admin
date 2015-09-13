  <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
      </div>

      <ul class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard') ?>">Dashboard</a></li>
        <li class="active"><?php echo $pageTitle ?></li>
      </ul>

    </div>


	<div class="page-content-wrapper m-t">
    <div class="toolbar-line ">		
		<?php if($this->session->userdata('gid') ==1) : ?>	
		<a href="<?php echo site_url('sximo/module/config/florists_summary') ?>" class="tips btn btn-xs btn-default"  title="<?php echo $this->lang->line('core.btn_config'); ?>">
		<i class="fa fa-cog"></i>&nbsp;<?php echo $this->lang->line('core.btn_config'); ?></a>
		<?php endif; ?>		

	</div>

<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small><?php echo $pageNote ;?></small></h4></div>
	<div class="sbox-content"> 	

	<?php echo $this->session->flashdata('message');?>
	<form action='<?php echo site_url('florists_summary/index') ?>' class='form-horizontal' id ='SximoTable' method="post" >
		<div class="form-group  " >
			<label for="Desde" class=" control-label col-md-4 text-left"> Desde </label>
				<div class="col-md-8">									  
					<input type='text' class='form-control date' placeholder='' value='' name='desde' style='width:150px !important;' /> <br />									  
				</div> 
		</div>
		<div class="form-group  " >
			<label for="Hasta" class=" control-label col-md-4 text-left"> Hasta </label>
				<div class="col-md-8">									  
					<input type='text' class='form-control date' placeholder='' value='' name='hasta' style='width:150px !important;' /> <br />									  
				</div> 
		</div>
		<div class="form-group  " >
			<label for="Florista" class=" control-label col-md-4 text-left"> Florista </label>
				<div class="col-md-8">
				  <select name='florista' rows='5' id='florista' class='form-control '  required>
						<option value="">-- Please Select --</option>
						<?php foreach($floristas->result() as $florista) {?>
							<option value="<?php echo $florista->first_name ." ". $florista->last_name; ?>"
							 <?php //if($row['florista'] == $operador->id ) echo 'selected';?>><?php echo $florista->first_name ." ". $florista->last_name; ?></option>
							<?php } ?>
					</select>					
				</div> 
		</div>
	<div class="table-responsive">
    <table class="table table-striped ">
        <thead>
			<tr>
				<th> Maestro </th>
				<th> Arreglos </th>
				<th> Valor arreglos (CLP) </th>
				<th> Floramurines </th>
				<th> Participación (%) </th>
				<th> Floramurines (CLP) </th>
				<th> Bono (CLP)</th>				
			  </tr>
        </thead>

        <tbody>
			<?php foreach ($results as $i => $maestro) { ?>
			<tr>				
				<td> <?php echo $maestro->nombre; ?> </td>
				<td> <?php echo $maestro->arreglos; ?> </td>
				<td> <?php echo $maestro->valor; ?> </td>
			</tr>
			<?php } ?>
        </tbody>

    </table>
	</div>
	</form>
	
	</div>
</div>


	</div>
</div>
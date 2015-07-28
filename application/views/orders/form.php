<div class="page-content row">
    <!-- Page header -->
<div class="page-header">
	<div class="page-title">
	<h3> <?php echo $pageTitle ?> <small><?php echo $pageNote ?></small></h3>
	</div>
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('dashboard') ?>"> Dashboard </a></li>
		<li><a href="<?php echo site_url('orders') ?>"><?php echo $pageTitle ?></a></li>
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
		 <form action="<?php echo site_url('orders/save/'.$row['id_orden']); ?>" class='form-horizontal' 
		 parsley-validate='true' novalidate='true' method="post" enctype="multipart/form-data" > 


<ul class="nav nav-tabs"><li class="active"><a href="#Orden" data-toggle="tab">Orden</a></li>
				<li class=""><a href="#Cliente-Destinatario" data-toggle="tab">Cliente - Destinatario</a></li>
				<li class=""><a href="#Productos" data-toggle="tab">Productos</a></li>
				<li class=""><a href="#Facturación" data-toggle="tab">Facturación</a></li>
				</ul><div class="tab-content"><div class="tab-pane m-t active" id="Orden"> 
									
								  <div class="form-group  " >
									<label for="Fecha de Pago" class=" control-label col-md-4 text-left"> Fecha de Pago </label>
									<div class="col-md-8">
									  
				<input type='text' class='form-control date' placeholder='' value='<?php echo $row['fecha_cobranza'];?>' name='fecha_cobranza'
				style='width:150px !important;'	   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Estado" class=" control-label col-md-4 text-left"> Estado </label>
									<div class="col-md-8">
									  
					<?php $estado = explode(',',$row['estado']);
					$estado_opt = array( 'PAGADO' => 'PAGADO' ,  'PENDIENTE' => 'PENDIENTE' ,  'NULA' => 'NULA' , ); ?>
					<select name='estado' rows='5'   class='select2 '  > 
						<?php 
						foreach($estado_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['estado'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Observacion Cobranza" class=" control-label col-md-4 text-left"> Observacion Cobranza </label>
									<div class="col-md-8">
									  <textarea name='observacion_cobranza' rows='2' id='editor' class='form-control markItUp '  
						 ><?php echo $row['observacion_cobranza'] ;?></textarea> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Canal" class=" control-label col-md-4 text-left"> Canal <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <select name='id_canal' rows='5' id='id_canal' code='{$id_canal}' 
							class='select2 '  required  ></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Número de Orden" class=" control-label col-md-4 text-left"> Número de Orden <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['numero_orden'];?>' name='numero_orden'  required parsley-type='number'  /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Destino" class=" control-label col-md-4 text-left"> Destino </label>
									<div class="col-md-8">
									  
					<?php $destino = explode(',',$row['destino']);
					$destino_opt = array( 'GRAN SANTIAGO' => 'GRAN SANTIAGO' ,  'PROVINCIA' => 'PROVINCIA' ,  'EXTRANJERO' => 'EXTRANJERO' , ); ?>
					<select name='destino' rows='5'   class='select2 '  > 
						<?php 
						foreach($destino_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['destino'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fecha Orden" class=" control-label col-md-4 text-left"> Fecha Orden </label>
									<div class="col-md-8">
									  
				<input type='text' class='form-control date' placeholder='' value='<?php echo $row['fecha_orden'];?>' name='fecha_orden'
				style='width:150px !important;'	   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="¿Como nos ubicó?" class=" control-label col-md-4 text-left"> ¿Como nos ubicó? </label>
									<div class="col-md-8">
									  <select name='id_como_ubico' rows='5' id='id_como_ubico' code='{$id_como_ubico}' 
							class='select2 '    ></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="# Guía" class=" control-label col-md-4 text-left"> # Guía <span class="asterix"> * </span></label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['guia'];?>' name='guia'  required parsley-type='number'  /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="# Factura" class=" control-label col-md-4 text-left"> # Factura </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['factura'];?>' name='factura'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="# Boleta" class=" control-label col-md-4 text-left"> # Boleta </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['boleta'];?>' name='boleta'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Operador" class=" control-label col-md-4 text-left"> Operador </label>
									<div class="col-md-8">
									  <select name='operador' rows='5' id='operador' code='{$operador}' 
							class='select2 '    ></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Forma de Pago" class=" control-label col-md-4 text-left"> Forma de Pago </label>
									<div class="col-md-8">
									  <select name='forma_pago' rows='5' id='forma_pago' code='{$forma_pago}' 
							class='select2 '    ></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group hidethis " style="display:none;">
									<label for="Id Orden" class=" control-label col-md-4 text-left"> Id Orden </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['id_orden'];?>' name='id_orden'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Observaciones" class=" control-label col-md-4 text-left"> Observaciones </label>
									<div class="col-md-8">
									  <textarea name='orden_observaciones' rows='2' id='editor' class='form-control markItUp '  
						 ><?php echo $row['orden_observaciones'] ;?></textarea> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Dirección donde enviar" class=" control-label col-md-4 text-left"> Dirección donde enviar </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['direccion_donde_enviar'];?>' name='direccion_donde_enviar'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 
			</div>
			
			<div class="tab-pane m-t " id="Cliente-Destinatario"> 
									
								  <div class="form-group  " >
									<label for="Fecha de Entrega" class=" control-label col-md-4 text-left"> Fecha de Entrega </label>
									<div class="col-md-8">
									  
				<input type='text' class='form-control date' placeholder='' value='<?php echo $row['des_fecha_entrega'];?>' name='des_fecha_entrega'
				style='width:150px !important;'	   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Horario de Entrega" class=" control-label col-md-4 text-left"> Horario de Entrega </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_hora_entrega'];?>' name='des_hora_entrega'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Id Cliente" class=" control-label col-md-4 text-left"> Id Cliente </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_id_cliente'];?>' name='cli_id_cliente'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Nombre" class=" control-label col-md-4 text-left"> Nombre </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_nombre'];?>' name='cli_nombre'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="E-mail" class=" control-label col-md-4 text-left"> E-mail </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_email'];?>' name='cli_email'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Teléfono fijo" class=" control-label col-md-4 text-left"> Teléfono fijo </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_fono_fijo'];?>' name='cli_fono_fijo'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Teléfono celular" class=" control-label col-md-4 text-left"> Teléfono celular </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_celular'];?>' name='cli_celular'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Comuna" class=" control-label col-md-4 text-left"> Comuna </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_comuna'];?>' name='cli_comuna'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Dirección" class=" control-label col-md-4 text-left"> Dirección </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_direccion'];?>' name='cli_direccion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Dirección de cobro" class=" control-label col-md-4 text-left"> Dirección de cobro </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_direccion_cobro'];?>' name='cli_direccion_cobro'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Ante Nombre" class=" control-label col-md-4 text-left"> Ante Nombre </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_ante_nombre'];?>' name='des_ante_nombre'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Nombre" class=" control-label col-md-4 text-left"> Nombre </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_nombre'];?>' name='des_nombre'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Dirección" class=" control-label col-md-4 text-left"> Dirección </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_direccion'];?>' name='des_direccion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Calles de referencia" class=" control-label col-md-4 text-left"> Calles de referencia </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_calles_referencia'];?>' name='des_calles_referencia'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Ciudad" class=" control-label col-md-4 text-left"> Ciudad </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_ciudad'];?>' name='des_ciudad'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Comuna" class=" control-label col-md-4 text-left"> Comuna </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_comuna'];?>' name='des_comuna'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="País" class=" control-label col-md-4 text-left"> País </label>
									<div class="col-md-8">
									  <select name='des_pais' rows='5' id='des_pais' code='{$des_pais}' 
							class='select2 '    ></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Teléfonos" class=" control-label col-md-4 text-left"> Teléfonos </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_fono'];?>' name='des_fono'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Código postal" class=" control-label col-md-4 text-left"> Código postal </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_codigo_postal'];?>' name='des_codigo_postal'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 
			</div>
			
			<div class="tab-pane m-t " id="Productos"> 
									
								  <div class="form-group  " >
									<label for="Pro Descripcion" class=" control-label col-md-4 text-left"> Pro Descripcion </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_descripcion'];?>' name='pro_descripcion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Pro Codigo Mall" class=" control-label col-md-4 text-left"> Pro Codigo Mall </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_codigo_mall'];?>' name='pro_codigo_mall'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Pro Valor Flores" class=" control-label col-md-4 text-left"> Pro Valor Flores </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_valor_flores'];?>' name='pro_valor_flores'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Pro Accesorios" class=" control-label col-md-4 text-left"> Pro Accesorios </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_accesorios'];?>' name='pro_accesorios'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Conducción" class=" control-label col-md-4 text-left"> Conducción </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_conduccion'];?>' name='pro_conduccion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Convenio" class=" control-label col-md-4 text-left"> Convenio </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_convenio'];?>' name='pro_convenio'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="" class=" control-label col-md-4 text-left">  </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_porcentaje'];?>' name='pro_porcentaje'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Total" class=" control-label col-md-4 text-left"> Total </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_valor_total'];?>' name='pro_valor_total'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Dedicatoria" class=" control-label col-md-4 text-left"> Dedicatoria </label>
									<div class="col-md-8">
									  <textarea name='pro_dedicatoria' rows='2' id='pro_dedicatoria' class='form-control '  
				           ><?php echo $row['pro_dedicatoria'] ;?></textarea> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Firma" class=" control-label col-md-4 text-left"> Firma </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_firma'];?>' name='pro_firma'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 
			</div>
			
			<div class="tab-pane m-t " id="Facturación"> 
									
								  <div class="form-group  " >
									<label for="Tipo" class=" control-label col-md-4 text-left"> Tipo </label>
									<div class="col-md-8">
									  
					<label class='radio radio-inline'>
					<input type='radio' name='tar_tipo_tarjeta' value =''  <?php if($row['tar_tipo_tarjeta'] == '') echo 'checked="checked"';?> > Ninguna </label>
					<label class='radio radio-inline'>
					<input type='radio' name='tar_tipo_tarjeta' value ='VISA'  <?php if($row['tar_tipo_tarjeta'] == 'VISA') echo 'checked="checked"';?> > VISA </label>
					<label class='radio radio-inline'>
					<input type='radio' name='tar_tipo_tarjeta' value ='MAGNA'  <?php if($row['tar_tipo_tarjeta'] == 'MAGNA') echo 'checked="checked"';?> > MAGNA </label>
					<label class='radio radio-inline'>
					<input type='radio' name='tar_tipo_tarjeta' value ='DINERS CLUB'  <?php if($row['tar_tipo_tarjeta'] == 'DINERS CLUB') echo 'checked="checked"';?> > DINERS CLUB </label>
					<label class='radio radio-inline'>
					<input type='radio' name='tar_tipo_tarjeta' value ='AMERICAN EXPRESS'  <?php if($row['tar_tipo_tarjeta'] == 'AMERICAN EXPRESS') echo 'checked="checked"';?> > AMERICAN EXPRESS </label>
					<label class='radio radio-inline'>
					<input type='radio' name='tar_tipo_tarjeta' value ='MASTERCARD'  <?php if($row['tar_tipo_tarjeta'] == 'MASTERCARD') echo 'checked="checked"';?> > MASTERCARD </label> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="# Tarjeta" class=" control-label col-md-4 text-left"> # Tarjeta </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['tar_numero_tarjeta'];?>' name='tar_numero_tarjeta'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Mes de vencimiento" class=" control-label col-md-4 text-left"> Mes de vencimiento </label>
									<div class="col-md-8">
									  
					<?php $tar_vencimiento_mes = explode(',',$row['tar_vencimiento_mes']);
					$tar_vencimiento_mes_opt = array( '01' => 'Enero' ,  '02' => 'Febrero' ,  '03' => 'Marzo' ,  '04' => 'Abril' ,  '05' => 'Mayo' ,  '06' => 'Junio' ,  '07' => 'Julio' ,  '08' => 'Agosto' ,  '09' => 'Septiembre' ,  '10' => 'Octubre' , ); ?>
					<select name='tar_vencimiento_mes' rows='5'   class='select2 '  > 
						<?php 
						foreach($tar_vencimiento_mes_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['tar_vencimiento_mes'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Año de vencimiento" class=" control-label col-md-4 text-left"> Año de vencimiento </label>
									<div class="col-md-8">
									  
					<?php $tar_vencimiento_ano = explode(',',$row['tar_vencimiento_ano']);
					$tar_vencimiento_ano_opt = array( '2000' => '2000' ,  '2001' => '2001' , ); ?>
					<select name='tar_vencimiento_ano' rows='5'   class='select2 '  > 
						<?php 
						foreach($tar_vencimiento_ano_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['tar_vencimiento_ano'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Nombre Titular" class=" control-label col-md-4 text-left"> Nombre Titular </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['tar_nombre_titular'];?>' name='tar_nombre_titular'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Código de autorización" class=" control-label col-md-4 text-left"> Código de autorización </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['tar_codigo_autorizacion'];?>' name='tar_codigo_autorizacion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Código de seguimiento" class=" control-label col-md-4 text-left"> Código de seguimiento </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['tar_codigo_seguimiento'];?>' name='tar_codigo_seguimiento'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Razón social" class=" control-label col-md-4 text-left"> Razón social </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_razon_social'];?>' name='fac_razon_social'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Dirección" class=" control-label col-md-4 text-left"> Dirección </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_direccion'];?>' name='fac_direccion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Giro" class=" control-label col-md-4 text-left"> Giro </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_giro'];?>' name='fac_giro'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Comuna" class=" control-label col-md-4 text-left"> Comuna </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_comuna'];?>' name='fac_comuna'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Rut" class=" control-label col-md-4 text-left"> Rut </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_rut'];?>' name='fac_rut'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Teléfono" class=" control-label col-md-4 text-left"> Teléfono </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_telefono'];?>' name='fac_telefono'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fax" class=" control-label col-md-4 text-left"> Fax </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_fax'];?>' name='fac_fax'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Contacto" class=" control-label col-md-4 text-left"> Contacto </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_contacto'];?>' name='fac_contacto'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 
			</div>
			
			
		
			<div style="clear:both"></div>	
				
 		<div class="toolbar-line text-center">		
			<input type="submit" name="apply" class="btn btn-info btn-sm" value="<?php echo $this->lang->line('core.btn_apply'); ?>" />
			<input type="submit" name="submit" class="btn btn-primary btn-sm" value="<?php echo $this->lang->line('core.sb_submit'); ?>" />
			<a href="<?php echo site_url('orders');?>" class="btn btn-sm btn-warning"><?php echo $this->lang->line('core.sb_cancel'); ?> </a>
 		</div>
			  		
		</form>

	</div>
	</div>
</div>		
</div>	
</div>
			 
<script type="text/javascript">
$(document).ready(function() { 

		$("#id_canal").jCombo("<?php echo site_url('orders/comboselect?filter=canales:id_canal:canal') ?>",
		{  selected_value : '<?php echo $row["id_canal"] ?>' });
		
		$("#id_como_ubico").jCombo("<?php echo site_url('orders/comboselect?filter=como_ubico:id_como_ubico:como_ubico') ?>",
		{  selected_value : '<?php echo $row["id_como_ubico"] ?>' });
		
		$("#operador").jCombo("<?php echo site_url('orders/comboselect?filter=tb_users:id:first_name|last_name') ?>",
		{  selected_value : '<?php echo $row["operador"] ?>' });
		
		$("#forma_pago").jCombo("<?php echo site_url('orders/comboselect?filter=formas_pago:id_forma_pago:forma_pago') ?>",
		{  selected_value : '<?php echo $row["forma_pago"] ?>' });
		
		$("#des_pais").jCombo("<?php echo site_url('orders/comboselect?filter=countries:id:countryName') ?>",
		{  selected_value : '<?php echo $row["des_pais"] ?>' });
		 	 
});
</script>		 
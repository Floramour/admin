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
									<label for="Id Canal" class=" control-label col-md-4 text-left"> Id Canal </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['id_canal'];?>' name='id_canal'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Canal" class=" control-label col-md-4 text-left"> Canal </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['canal'];?>' name='canal'   /> <br />
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
									<label for="Id Como Ubico" class=" control-label col-md-4 text-left"> Id Como Ubico </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['id_como_ubico'];?>' name='id_como_ubico'   /> <br />
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
									<label for="Forma Pago" class=" control-label col-md-4 text-left"> Forma Pago </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['forma_pago'];?>' name='forma_pago'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Estado" class=" control-label col-md-4 text-left"> Estado </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['estado'];?>' name='estado'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fecha Cobranza" class=" control-label col-md-4 text-left"> Fecha Cobranza </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fecha_cobranza'];?>' name='fecha_cobranza'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Observacion Cobranza" class=" control-label col-md-4 text-left"> Observacion Cobranza </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['observacion_cobranza'];?>' name='observacion_cobranza'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Cli Id Cliente" class=" control-label col-md-4 text-left"> Cli Id Cliente </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_id_cliente'];?>' name='cli_id_cliente'   /> <br />
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
									<label for="Cli Fono Fijo" class=" control-label col-md-4 text-left"> Cli Fono Fijo </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_fono_fijo'];?>' name='cli_fono_fijo'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Cli Celular" class=" control-label col-md-4 text-left"> Cli Celular </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_celular'];?>' name='cli_celular'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Cli Email" class=" control-label col-md-4 text-left"> Cli Email </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_email'];?>' name='cli_email'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Cli Codigo Postal" class=" control-label col-md-4 text-left"> Cli Codigo Postal </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_codigo_postal'];?>' name='cli_codigo_postal'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Cli Direccion" class=" control-label col-md-4 text-left"> Cli Direccion </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_direccion'];?>' name='cli_direccion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Cli Direccion Cobro" class=" control-label col-md-4 text-left"> Cli Direccion Cobro </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_direccion_cobro'];?>' name='cli_direccion_cobro'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Cli Comuna" class=" control-label col-md-4 text-left"> Cli Comuna </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_comuna'];?>' name='cli_comuna'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Cli Ciudad" class=" control-label col-md-4 text-left"> Cli Ciudad </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_ciudad'];?>' name='cli_ciudad'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Cli Pais" class=" control-label col-md-4 text-left"> Cli Pais </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_pais'];?>' name='cli_pais'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Cli Promedio Compra" class=" control-label col-md-4 text-left"> Cli Promedio Compra </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_promedio_compra'];?>' name='cli_promedio_compra'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Des Ante Nombre" class=" control-label col-md-4 text-left"> Des Ante Nombre </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_ante_nombre'];?>' name='des_ante_nombre'   /> <br />
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
									<label for="Des Fecha Entrega" class=" control-label col-md-4 text-left"> Des Fecha Entrega </label>
									<div class="col-md-8">
									  
				<input type='text' class='form-control datetime' placeholder='' value='<?php echo $row['des_fecha_entrega'];?>' name='des_fecha_entrega'
				style='width:150px !important;'	   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Des Hora Entrega" class=" control-label col-md-4 text-left"> Des Hora Entrega </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_hora_entrega'];?>' name='des_hora_entrega'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Des Codigo Postal" class=" control-label col-md-4 text-left"> Des Codigo Postal </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_codigo_postal'];?>' name='des_codigo_postal'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Des Direccion" class=" control-label col-md-4 text-left"> Des Direccion </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_direccion'];?>' name='des_direccion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Des Calles Referencia" class=" control-label col-md-4 text-left"> Des Calles Referencia </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_calles_referencia'];?>' name='des_calles_referencia'   /> <br />
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
									<label for="Des Ciudad" class=" control-label col-md-4 text-left"> Des Ciudad </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_ciudad'];?>' name='des_ciudad'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Des Pais" class=" control-label col-md-4 text-left"> Des Pais </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['des_pais'];?>' name='des_pais'   /> <br />
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
									<label for="Pro Conduccion" class=" control-label col-md-4 text-left"> Pro Conduccion </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_conduccion'];?>' name='pro_conduccion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Pro Convenio" class=" control-label col-md-4 text-left"> Pro Convenio </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_convenio'];?>' name='pro_convenio'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Pro Porcentaje" class=" control-label col-md-4 text-left"> Pro Porcentaje </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_porcentaje'];?>' name='pro_porcentaje'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Pro Valor Total" class=" control-label col-md-4 text-left"> Pro Valor Total </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_valor_total'];?>' name='pro_valor_total'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Pro Dedicatoria" class=" control-label col-md-4 text-left"> Pro Dedicatoria </label>
									<div class="col-md-8">
									  <textarea name='pro_dedicatoria' rows='2' id='pro_dedicatoria' class='form-control '  
				           ><?php echo $row['pro_dedicatoria'] ;?></textarea> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Pro Firma" class=" control-label col-md-4 text-left"> Pro Firma </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['pro_firma'];?>' name='pro_firma'   /> <br />
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
									<label for="Seg Llegada" class=" control-label col-md-4 text-left"> Seg Llegada </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['seg_llegada'];?>' name='seg_llegada'   /> <br />
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
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['seg_observaciones'];?>' name='seg_observaciones'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tar Tipo Tarjeta" class=" control-label col-md-4 text-left"> Tar Tipo Tarjeta </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['tar_tipo_tarjeta'];?>' name='tar_tipo_tarjeta'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tar Numero Tarjeta" class=" control-label col-md-4 text-left"> Tar Numero Tarjeta </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['tar_numero_tarjeta'];?>' name='tar_numero_tarjeta'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tar Vencimiento Mes" class=" control-label col-md-4 text-left"> Tar Vencimiento Mes </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['tar_vencimiento_mes'];?>' name='tar_vencimiento_mes'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tar Vencimiento Ano" class=" control-label col-md-4 text-left"> Tar Vencimiento Ano </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['tar_vencimiento_ano'];?>' name='tar_vencimiento_ano'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tar Nombre Titular" class=" control-label col-md-4 text-left"> Tar Nombre Titular </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['tar_nombre_titular'];?>' name='tar_nombre_titular'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tar Codigo Seguimiento" class=" control-label col-md-4 text-left"> Tar Codigo Seguimiento </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['tar_codigo_seguimiento'];?>' name='tar_codigo_seguimiento'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Tar Codigo Autorizacion" class=" control-label col-md-4 text-left"> Tar Codigo Autorizacion </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['tar_codigo_autorizacion'];?>' name='tar_codigo_autorizacion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fac Razon Social" class=" control-label col-md-4 text-left"> Fac Razon Social </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_razon_social'];?>' name='fac_razon_social'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fac Direccion" class=" control-label col-md-4 text-left"> Fac Direccion </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_direccion'];?>' name='fac_direccion'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fac Giro" class=" control-label col-md-4 text-left"> Fac Giro </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_giro'];?>' name='fac_giro'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fac Comuna" class=" control-label col-md-4 text-left"> Fac Comuna </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_comuna'];?>' name='fac_comuna'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fac Rut" class=" control-label col-md-4 text-left"> Fac Rut </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_rut'];?>' name='fac_rut'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fac Telefono" class=" control-label col-md-4 text-left"> Fac Telefono </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_telefono'];?>' name='fac_telefono'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fac Fax" class=" control-label col-md-4 text-left"> Fac Fax </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_fax'];?>' name='fac_fax'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Fac Contacto" class=" control-label col-md-4 text-left"> Fac Contacto </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['fac_contacto'];?>' name='fac_contacto'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Orden Observaciones" class=" control-label col-md-4 text-left"> Orden Observaciones </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['orden_observaciones'];?>' name='orden_observaciones'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Direccion Donde Enviar" class=" control-label col-md-4 text-left"> Direccion Donde Enviar </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['direccion_donde_enviar'];?>' name='direccion_donde_enviar'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Sis Comision Pagada" class=" control-label col-md-4 text-left"> Sis Comision Pagada </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['sis_comision_pagada'];?>' name='sis_comision_pagada'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Sis Usuario Comision" class=" control-label col-md-4 text-left"> Sis Usuario Comision </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['sis_usuario_comision'];?>' name='sis_usuario_comision'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Sis Fecha Comision" class=" control-label col-md-4 text-left"> Sis Fecha Comision </label>
									<div class="col-md-8">
									  
				<input type='text' class='form-control datetime' placeholder='' value='<?php echo $row['sis_fecha_comision'];?>' name='sis_fecha_comision'
				style='width:150px !important;'	   /> <br />
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
								  </div> 					
								  <div class="form-group  " >
									<label for="User ImpresionOC" class=" control-label col-md-4 text-left"> User ImpresionOC </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['user_impresionOC'];?>' name='user_impresionOC'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Horafecha ImpresionOC" class=" control-label col-md-4 text-left"> Horafecha ImpresionOC </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['horafecha_impresionOC'];?>' name='horafecha_impresionOC'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="User ImpresionV" class=" control-label col-md-4 text-left"> User ImpresionV </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['user_impresionV'];?>' name='user_impresionV'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Horafecha ImpresionV" class=" control-label col-md-4 text-left"> Horafecha ImpresionV </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['horafecha_impresionV'];?>' name='horafecha_impresionV'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="User ImpresionGE" class=" control-label col-md-4 text-left"> User ImpresionGE </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['user_impresionGE'];?>' name='user_impresionGE'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Horafecha ImpresionGE" class=" control-label col-md-4 text-left"> Horafecha ImpresionGE </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['horafecha_impresionGE'];?>' name='horafecha_impresionGE'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="User ImpresionST" class=" control-label col-md-4 text-left"> User ImpresionST </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['user_impresionST'];?>' name='user_impresionST'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Horafecha ImpresionST" class=" control-label col-md-4 text-left"> Horafecha ImpresionST </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['horafecha_impresionST'];?>' name='horafecha_impresionST'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Confirmacionentrega" class=" control-label col-md-4 text-left"> Confirmacionentrega </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['confirmacionentrega'];?>' name='confirmacionentrega'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Confirmacionemail" class=" control-label col-md-4 text-left"> Confirmacionemail </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['confirmacionemail'];?>' name='confirmacionemail'   /> <br />
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
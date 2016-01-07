<style> 
.form-horizontal .form-group {
	margin-right: 400px;
	margin-left: none;
}
</style>
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
				<li class=""><a href="#Productos" data-toggle="tab">Listado de productos - Conducción </a></li>
				<li class=""><a href="#Facturación" data-toggle="tab">Facturación</a></li>
				</ul><div class="tab-content"><div class="tab-pane m-t active" id="Orden"> 
        <style>  
            /* Autocomplete 
            ----------------------------------*/  
            .ui-autocomplete { position: absolute; cursor: default; }     
            .ui-autocomplete-loading { background: white url('http://jquery-ui.googlecode.com/svn/tags/1.8.2/themes/flick/images/ui-anim_basic_16x16.gif') right center no-repeat; }*/  
   
            /* workarounds */  
            * html .ui-autocomplete { width:1px; } /* without this, the menu expands to 100% in IE6 */  
   
            /* Menu 
            ----------------------------------*/  
            .ui-menu {  
                list-style:none;  
                padding: 2px;  
                margin: 0;  
                display:block;  
            }  
            .ui-menu .ui-menu {  
                margin-top: -3px;  
            }  
            .ui-menu .ui-menu-item {  
                margin:0;  
                padding: 0;  
                zoom: 1;  
                float: left;  
                clear: left;  
                width: 100%;  
                font-size:80%;  
            }  
            .ui-menu .ui-menu-item a {  
                text-decoration:none;  
                display:block;  
                padding:.2em .4em;  
                line-height:1.5;  
                zoom:1;  
            }  
            .ui-menu .ui-menu-item a.ui-state-hover,  
            .ui-menu .ui-menu-item a.ui-state-active {  
                font-weight: normal;  
                margin: -1px;  
            }  
            span[role=status] {
    			display: none;
}
        </style>  
           
        <script type="text/javascript">  



        $(this).ready( function() {  
            $("#cli_search").autocomplete({  
                minLength: 1,  
                source:   
                function(req, add){  
                    $.ajax({  
                        url: "<?php echo base_url(); ?>orders/client_lookup",  
                        dataType: 'json',  
                        type: 'POST',  
                        data: req,  
                        success:      
                        function(data){  
                            if(data.response =="true"){  
                               add(data.message);                                 
                            }  
                        },  
                    });  
                },  
	            select:   
	                function(event, ui) {
	                	var fields = ui.item.value.split(/,/);
						var cli_id_cliente = fields[0];
						var cli_nombre = fields[1];
						var cli_fono_fijo = fields[2];
						var cli_celular = fields[3];
						var cli_email = fields[4];
						var cli_direccion = fields[5];
						var cli_comuna = fields[6];
						var cli_direccion_cobro = fields[7];
	                	$('#cli_id_cliente').val(cli_id_cliente);
	                	$('#cli_nombre').val(cli_nombre);
	                	$('#cli_fono_fijo').val(cli_fono_fijo);
	                	$('#cli_celular').val(cli_celular);
	                	$('#cli_email').val(cli_email);
	                	$('#cli_direccion').val(cli_direccion);
	                	$('#cli_comuna').val(cli_comuna);
	                	$('#cli_direccion_cobro').val(cli_direccion_cobro);
	                },    
	            change:function(event){
				   $("#cli_search").val("");  
				   return false;
				}
            }); 

         });

		$(this).ready( function() {  
            $("#des_chile").click(function(){  
                alert('hola');
            }); 

         });


		 /* jQuery that loads shipping zones and prices */
/*$('#des_chile').live('click', function() {
       		
    		alert('Máximmoasdasdasd de 10 productos para la orden.');    		
		});
/*$(document).ready(function() {
  $("#checkbox_div input:radio").click(function() {

    alert("clicked");
    
   });
  
  $("input:radio:first").prop("checked", true).trigger("click");
  
})*/

        /*$(this).ready( function() {  
            $("#pro_search_1").autocomplete({  
                minLength: 1,  
                source:   
                function(req, add){  
                    $.ajax({  
                        url: "<?php echo base_url(); ?>orders/product_lookup",  
                        dataType: 'json',  
                        type: 'POST',  
                        data: req,  
                        success:      
                        function(data){  
                            if(data.response =="true"){
                            	add(data.message);                            	
                            }  

                        },  
                    });  
                },  
	            select:   
	                function(event, ui) {
	                	var fields = ui.item.value.split(/,/);
	                	var pro_pro_id_1 = fields[0];
	                	var pro_codigo_mall_1 = fields[1];
	                	var pro_nombre_1 = fields[2];
	                	var pro_descripcion_1 = fields[3];
	                	var pro_valor_flores_1 = fields[4];
	                	var pro_img_1 = fields[5];
	                	$('#pro_pro_id_1').val(pro_pro_id_1);
	                	$('#pro_codigo_mall_1').val(pro_codigo_mall_1);
	                	$('#pro_nombre_1').val(pro_nombre_1);
	                	$('#pro_descripcion_1').val(pro_descripcion_1);
	                	$('#pro_valor_flores_1').val(pro_valor_flores_1);
	                	$('#pro_img_1').attr("src",pro_img_1);	                	
	                	$('#pro_color_1').load("<?=base_url()?>orders/get_product_colors/" + pro_pro_id_1);
	                },
	            change:function(event){
				   $("#pro_search_1").val("");
				   return false;
				}
            }); 

         });*/                 
        </script>        
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
									  <input type='number' class='form-control' placeholder='' value='<?php echo $row['numero_orden'];?>' name='numero_orden'  required parsley-type='number'  /> <br />
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
									  
				<input type='text' class='form-control date' placeholder='' value='<?php echo empty($row['fecha_orden']) ? getdate() : $row['fecha_orden'];?>' name='fecha_orden'
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
									  <input type='number' class='form-control' placeholder='' value='<?php echo $row['guia'];?>' name='guia'  required parsley-type='number'  /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="# Factura" class=" control-label col-md-4 text-left"> # Factura </label>
									<div class="col-md-8">
									  <input type='number' class='form-control' placeholder='' value='<?php echo $row['factura'];?>' name='factura'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="# Boleta" class=" control-label col-md-4 text-left"> # Boleta </label>
									<div class="col-md-8">
									  <input type='number' class='form-control' placeholder='' value='<?php echo $row['boleta'];?>' name='boleta'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div>
								  <div class="form-group  " >
									<label for="Operador" class=" control-label col-md-4 text-left"> Operador </label>
									<div class="col-md-8">
									  <select name='operador' rows='5' id='operador' class='form-control '  required>
									  	<option value="">-- Please Select --</option>
							<?php foreach($operadores->result() as $operador) {?>
							<option value="<?php echo $operador->first_name ." ". $operador->last_name; ?>"
							 <?php if($row['operador'] == $operador->id ) echo 'selected';?>><?php echo $operador->first_name ." ". $operador->last_name; ?></option>
							<?php } ?>
						</select><br />
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
									  
										<input type='date' class='form-control date' placeholder='' value='<?php echo $row['des_fecha_entrega'];?>' name='des_fecha_entrega'
				style='width:150px !important;'	   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Horario de Entrega" class=" control-label col-md-4 text-left"> Horario de Entrega </label>
									<div class="col-md-8">
									  <input type='time' class='form-control' placeholder='' step=900 value='<?php echo $row['des_hora_entrega'];?>' name='des_hora_entrega'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 
				<ul class="nav nav-tabs">
			        <li class="active"><a data-toggle="tab" href="#client">Cliente</a></li>
			        <li><a data-toggle="tab" href="#receiver">Destinatario</a></li>			        
			    </ul>

			    <div class="tab-content">
			        <div id="client" class="tab-pane fade in active" style="margin-top:15px;">			            		  
								  <div class="form-group">
									<label for="cli_search" class=" control-label col-md-4 text-left"> Buscar <i class="fa fa-search"></i> </label>
									<div class="col-md-8">
									  <input type='search' class='form-control' placeholder='Búsqueda por nombre, email o id del cliente' value='' name='cli_search'  id='cli_search'/><br />
									  <i> <small></small></i>
									 </div> 
								  </div>	
								  <div class="form-group">
									<label for="Id Cliente" class=" control-label col-md-4 text-left"> Id </label>
									<div class="col-md-8">
									  <input type='number' class='form-control' placeholder='' value='<?php echo $row['cli_id_cliente'];?>' name='cli_id_cliente'  id='cli_id_cliente'/><br />
									  <i> <small></small></i>
									 </div> 
								  </div>
								  <div class="form-group  " >
									<label for="Nombre" class=" control-label col-md-4 text-left"> Nombre </label>
									<div class="col-md-8">										
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_nombre'];?>' name='cli_nombre' id='cli_nombre'  /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 				
								  
							      <ul>  
							          <div id="result"></div>  
							       </ul>				
								  <div class="form-group  " >
									<label for="E-mail" class=" control-label col-md-4 text-left"> E-mail </label>
									<div class="col-md-8">
									  <input type='email' class='form-control' placeholder='' value='<?php echo $row['cli_email'];?>' name='cli_email' id='cli_email'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Teléfono fijo" class=" control-label col-md-4 text-left"> Teléfono fijo </label>
									<div class="col-md-8">
									  <input type='tel' class='form-control' placeholder='' value='<?php echo $row['cli_fono_fijo'];?>' name='cli_fono_fijo'  id='cli_fono_fijo' /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Teléfono celular" class=" control-label col-md-4 text-left"> Teléfono celular </label>
									<div class="col-md-8">
									  <input type='tel' class='form-control' placeholder='' value='<?php echo $row['cli_celular'];?>' name='cli_celular'  id='cli_celular' /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Comuna" class=" control-label col-md-4 text-left"> Comuna </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_comuna'];?>' name='cli_comuna'  id='cli_comuna' /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Dirección" class=" control-label col-md-4 text-left"> Dirección </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_direccion'];?>' name='cli_direccion'  id='cli_direccion' /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Dirección de cobro" class=" control-label col-md-4 text-left"> Dirección de cobro </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='' value='<?php echo $row['cli_direccion_cobro'];?>' name='cli_direccion_cobro'  id='cli_direccion_cobro' /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div>
			        </div>
			        <div id="receiver" class="tab-pane fade" style="margin-top:15px;">
			        			  <div class="form-group  " >
									<label for="Dirección" class=" control-label col-md-4 text-left"> Ante </label>
									<div class="col-md-8">
									  <?php $des_ante_nombre = explode(',',$row['des_ante_nombre']);
										$des_ante_nombre_opt = array( 'Srta.'=>'Srta.','Sra.'=>'Sra.','Sr.'=>'Sr.','Flia.'=>'Flia.','Sres.'=>'Sres.','RETIRA'=>'RETIRA','Dra.'=>'Dra.','Mrs.'=>'Mrs.','Mr.'=>'Mr.','MATRIMONIO'=>'MATRIMONIO','Dr.'=>'Dr.','Familia'=>'Familia','Mrs. & Mr.'=>'Mrs. & Mr.','Srtas.'=>'Srtas.','Miss'=>'Miss','Ms.'=>'Ms.','Mr. & Mrs.'=>'Mr. & Mrs.','Párvulo'=>'Párvulo','Niño'=>'Niño','Sras.'=>'Sras.','Prvl.'=>'Prvl.','S.'=>'S.','Don'=>'Don','Cabo 1°'=>'Cabo 1°','RETIRAN'=>'RETIRAN','Sra. y Sr.'=>'Sra. y Sr.','Profesora'=>'Profesora','Madre'=>'Madre','Tía'=>'Tía','Family'=>'Family','Reverendo'=>'Reverendo','Tías'=>'Tías','Novia'=>'Novia','Señor'=>'Señor','Lic.'=>'Lic.','Mmes.'=>'Mmes.'); ?>
										<select name='des_ante_nombre' rows='5'   class='select2 '> 
											<?php 
											foreach($des_ante_nombre_opt as $key=>$val)
											{
												echo "<option  value ='$key' ".($row['des_ante_nombre'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
											}						
											?>
										</select><br>
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
										<input type='text' class='form-control' placeholder='' value='<?php echo $row['des_pais'];?>' name='des_pais'   /> <br />									  
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Teléfonos" class=" control-label col-md-4 text-left"> Teléfonos </label>
									<div class="col-md-8">
									  <input type='tel' class='form-control' placeholder='' value='<?php echo $row['des_fono'];?>' name='des_fono'   /> <br />
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
			    </div>	
			</div>
			
			<div class="tab-pane m-t " id="Productos">
				<ul class="nav nav-tabs">
			        <li class="active"><a data-toggle="tab" href="#products">Listado de productos</a></li>
			        <li><a data-toggle="tab" href="#shipping">Conducción</a></li>
			        
			    </ul>
			    <div class="tab-content">
			        <div id="products" class="tab-pane fade in active" style="margin-top:15px;">

			        	<ul class="nav nav-tabs" id="products_tab">
			        		<li><a data-toggle="tab" href="#" id="add_product">+</a></li>
			        		<li class="active" id="tab_product_1"><a data-toggle="tab" href="#product_1">Producto 1</a></li>
			        		<li class="active" id="tab_product_2" style="display: none;"><a data-toggle="tab" href="#product_2" >Producto 2</a></li>
			        		<li class="active" id="tab_product_3" style="display: none;"><a data-toggle="tab" href="#product_3" >Producto 3</a></li>
			        		<li class="active" id="tab_product_4" style="display: none;"><a data-toggle="tab" href="#product_4" >Producto 4</a></li>
			        		<li class="active" id="tab_product_5" style="display: none;"><a data-toggle="tab" href="#product_5" >Producto 5</a></li>
			        		<li class="active" id="tab_product_6" style="display: none;"><a data-toggle="tab" href="#product_6" >Producto 6</a></li>
			        		<li class="active" id="tab_product_7" style="display: none;"><a data-toggle="tab" href="#product_7" >Producto 7</a></li>
			        		<li class="active" id="tab_product_8" style="display: none;"><a data-toggle="tab" href="#product_8" >Producto 8</a></li>
			        		<li class="active" id="tab_product_9" style="display: none;"><a data-toggle="tab" href="#product_9" >Producto 9</a></li>
			        		<li class="active" id="tab_product_10" style="display: none;"><a data-toggle="tab" href="#product_10" >Producto 10</a></li>
			        		<li><a data-toggle="tab" href="#" id="remove_product">-</a></li>
					    </ul>

					    <div class="tab-content" id="products_form">					    	
					        <div id="product_1" class="tab-pane fade in active" style="margin-top:15px;">
					              <div class="form-group">
									<label for="pro_search_1" class=" control-label col-md-4 text-left"> Buscar <i class="fa fa-search"></i> </label>
									<div class="col-md-8">
									  <input type='search' class='form-control' placeholder='Búsqueda por ' value='' name='pro_search_1'  id='pro_search_1'/><br />
									  <i> <small></small></i>
									 </div> 
								  </div>
								  <div class="form-group">
									<label for="pro_img_1" class="control-label col-md-4 text-left"> Image </label>
									<div class="col-md-8">
									  <img id="pro_img_1" name="pro_img_1" width="80" height="80" border="0" class="img-thumbnail">
									  <i> <small></small></i>
									 </div> 
								  </div>
								  
					              <div class="form-group">
									<label for="Pro Id Producto" class="control-label col-md-4 text-left"> Id </label>
									<div class="col-md-8">
									  <input type="number" class="form-control" placeholder="Id único del producto" value="" name="pro_pro_id_1" id="pro_pro_id_1" /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div>
								  <div class="form-group">
									<label for="Pro Codigo Mall" class="control-label col-md-4 text-left"> Código mall </label>
									<div class="col-md-8">
									  <input type="text" class="form-control" placeholder="" value="<?php echo $row['pro_codigo_mall'];?>" name="pro_codigo_mall_1" id="pro_codigo_mall_1" /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div>
								  <div class="form-group">
									<label for="Pro Nombre" class="control-label col-md-4 text-left"> Nombre </label>
									<div class="col-md-8">
									  <input type="text" class="form-control" placeholder="Nombre del producto" value="" name="pro_nombre_1" id="pro_nombre_1" /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div>
								  <div class="form-group  " >
									<label for="Pro Descripcion" class=" control-label col-md-4 text-left"> Descripción </label>
									<div class="col-md-8">
									  <textarea name="pro_descripcion_1" id="pro_descripcion_1" rows="2" id="editor" class="form-control markItUp"><?php echo $row['pro_descripcion'] ;?></textarea>									  
									  <i> <small></small></i>
									 </div> 
								  </div>
								  <div class="form-group  " >
									<label for="Pro Observacion" class=" control-label col-md-4 text-left"> Observaciones </label>
									<div class="col-md-8">
									  <textarea name="pro_observaciones_1" rows="2" id="editor" class="form-control markItUp"></textarea>
									  <i> <small></small></i>
									 </div> 
								  </div>	
								  <div class="form-group  " >
									<label for="Pro Valor Flores" class=" control-label col-md-4 text-left"> Valor </label>
									<div class="col-md-8">
									  <input type="text" class="form-control" placeholder="0" value="<?php echo $row['pro_valor_flores'];?>" name="pro_valor_flores_1" id="pro_valor_flores_1"   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div>
								  <div class="form-group  " >
									<label for="Color" class=" control-label col-md-4 text-left"> Color </label>
									<div class="col-md-8">
									  <select name="pro_color_1" rows="5" id="pro_color_1" class="form-control">
									  	<option value="">-- Please Select --</option>										
									</select><br />
									  <i> <small></small></i>
									 </div> 
								  </div>					        
					        </div>
					    </div>		    
			        </div>
<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script-->
			        <script type="text/javascript">
       
			        </script>
			        <div id="shipping" class="tab-pane fade" style="margin-top:15px;">
			            		
			            		<div class="form-group  " >
									<label for="Destino" class=" control-label col-md-4 text-left"> Destino </label>
									<div class="col-md-8" id="checkbox_div">
									  <!--label class='radio radio-inline'-->
										<!--input type='radio' name='conduccion_chile' value ='Chile' -->
										<input name="des_chile" checked="checked" type="radio" value="SI"/> Chile<!--/label>
										<label class='radio radio-inline' -->
										<!--input type='radio' name='conduccion_extranjero' value ='Extranjero'-->
										<input name="des_chile" type="radio" value="NO" /> Extranjero<!--/label--><br /><br />
										
									  <i> <small></small></i>
									 </div> 
								  </div>
								  <script>
				  /*function fncMustraDes(valor){
				  	if(valor=='SI'){
						alert('si');
					}else{
						alert('no');
					}
				  }*/
				  </script>
								  <div class="form-group">
									<label for="Conducción" class=" control-label col-md-4 text-left"> Conducción </label>
									<div class="input-group" style="padding-left: 16px;">
									  <div class="input-group-addon">$</div>	
									  <input type='text' class='form-control' placeholder='$' value='<?php echo $row['pro_conduccion'];?>' name='pro_conduccion'  style="max-width: 100px;" /> <br />
									  <select name='operador' rows='5' id='operador' class='form-control '  required>
										  	<option value="">-- Please Select --</option>
											<?php //foreach($localidades->result() as $operador) {?>
											<option value="<?php //echo $operador->T20_localidad; ?>"
											<?php //if($row['operador'] == $operador->T20_id_localidad ) echo 'selected';?>><?php //echo $operador->T20_localidad; ?></option>
											<?php //} ?>
										</select>
									</div>
								  </div> 	

								  <div class="form-group">
								  	<label for="Convenio" class=" control-label col-md-4 text-left"> Convenio </label>
								  	<div class="input-group" style="padding-left: 16px;">
								      <div class="input-group-addon">%</div>
								      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Valor" value='<?php echo $row['pro_porcentaje'];?>' name='pro_porcentaje' style="max-width: 65px;">  								   
									  <div class="input-group-addon">$</div>
								  	  <input type="text" class="form-control" id="exampleInputAmount2" placeholder="Valor" value='<?php echo $row['pro_convenio'];?>' name='pro_convenio' style="max-width: 100px;">			
								  	</div>
								  </div>	
								  <div class="form-group  " >
									<label for="Total" class=" control-label col-md-4 text-left"> Total </label>
									<div class="col-md-8">
									  <input type='text' class='form-control' placeholder='Valor total de la Orden' value='<?php echo $row['pro_valor_total'];?>' name='pro_valor_total'   /> <br />									  
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Dedicatoria" class=" control-label col-md-4 text-left"> Dedicatoria </label>
									<div class="col-md-8">
									  <textarea name='pro_dedicatoria' rows='2' id='editor' class='form-control markItUp'  
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
									  <input type='number' class='form-control' placeholder='' value='<?php echo $row['tar_numero_tarjeta'];?>' name='tar_numero_tarjeta'   /> <br />
									  <i> <small></small></i>
									 </div> 
								  </div> 					
								  <div class="form-group  " >
									<label for="Mes de vencimiento" class=" control-label col-md-4 text-left"> Mes de vencimiento </label>
									<div class="col-md-8">
									  
					<?php $tar_vencimiento_mes = explode(',',$row['tar_vencimiento_mes']);
					$tar_vencimiento_mes_opt = array( '01' => 'Enero' ,  '02' => 'Febrero' ,  '03' => 'Marzo' ,  '04' => 'Abril' ,  '05' => 'Mayo' ,  '06' => 'Junio' ,  '07' => 'Julio' ,  '08' => 'Agosto' ,  '09' => 'Septiembre' ,  '10' => 'Octubre' ,  '11' => 'Noviembre'  ,  '12' => 'Diciembre' ); ?>
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
					$tar_vencimiento_ano_opt = array(); 
					$curYear = date("Y");
					        $limit = 10;
					        for ($x = $curYear; $x < $curYear + $limit; $x++) {
					            $tar_vencimiento_ano_opt[$x] = $x;
					        }
					?>
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
		
		$("#forma_pago").jCombo("<?php echo site_url('orders/comboselect?filter=formas_pago:id_forma_pago:forma_pago') ?>",
		{  selected_value : '<?php echo $row["forma_pago"] ?>' });
		
		$("#des_pais").jCombo("<?php echo site_url('orders/comboselect?filter=countries:id:countryName') ?>",
		{  selected_value : '<?php echo $row["des_pais"] ?>' });
		 	 
});

$(function() {

        var i;
        i = 2;
        

       $('#add_product').live('click', function() {
       		if (i <=10) {
	    		$('#tab_product_'+i).show();
	    		i++;
    		} else
    		alert('Máximo de 10 productos para la orden.');    		
		});
        
        
       	$('#remove_product').live('click', function() { 
            if( i > 1) {
                $('#tab_product_'+i).hide();
            	i--;
        	}
        });



        
});

$(this).ready( function() { 

            $("#pro_search_1").autocomplete({  
                minLength: 1,  
                source:   
                function(req, add){  
                    $.ajax({  
                        url: "<?php echo base_url(); ?>orders/product_lookup",  
                        dataType: 'json',  
                        type: 'POST',  
                        data: req,  
                        success:      
                        function(data){  
                            if(data.response =="true"){
                            	add(data.message);                            	
                            }  

                        },  
                    });  
                },  
	            select:   
	                function(event, ui) {
	                	var $tab = $('#products_form'), $active = $tab.find('.tab-pane.active'), text = $active;
    //$active.css({"color": "red", "border": "2px solid red"})
	                	var fields = ui.item.value.split(/,/);
	                	var pro_pro_id_1 = fields[0];
	                	var pro_codigo_mall_1 = fields[1];
	                	var pro_nombre_1 = fields[2];
	                	var pro_descripcion_1 = fields[3];
	                	var pro_valor_flores_1 = fields[4];
	                	var pro_img_1 = fields[5];
	                	$('#pro_pro_id_1').val(pro_pro_id_1);
	                	$('#pro_codigo_mall_1').val(pro_codigo_mall_1);
	                	$('#pro_nombre_1').val(pro_nombre_1);
	                	$('#pro_descripcion_1').val(pro_descripcion_1);
	                	$('#pro_valor_flores_1').val(pro_valor_flores_1);
	                	$('#pro_img_1').attr("src",pro_img_1);	                	
	                	$('#pro_color_1').load("<?=base_url()?>orders/get_product_colors/" + pro_pro_id_1);
	                },
	            change:function(event){
				   $("#pro_search_1").val("");
				   return false;
				}
            }); 

         });




</script>

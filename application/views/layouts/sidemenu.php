<style type="text/css">
.modal-dialog {
	width: 800px;
}
</style>
<nav role="navigation" class="navbar-default navbar-static-side">
	 <div class="sidebar-collapse">				  
	   <ul id="sidemenu" class="nav expanded-menu">
		<li class="logo-header" >
		 <a class="navbar-brand" href="<?php echo site_url('dashboard') ;?>">
		 <img width="30" align="middle" style="margin-right:5px;" alt="My Apps" src="<?php echo base_url() ;?>sximo/images/logo-sximo.png">
			<?php echo CNF_APPNAME;?>
		 </a>
		</li>
		<li class="nav-header">
			<div class="dropdown profile-element" style="text-align:center;"> 
				<span>
					<?php echo SiteHelpers::avatar('75');?>
					
				</span>
				<a href="<?php echo site_url('user/profile');?>" >
				<span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('fid');?> </strong>
				 <br /> <?php echo $this->lang->line('core.lastlogin'); ?> : <br />
				<small><?php echo date("H:i M j, Y",strtotime($this->session->userdata('ll'))) ;?></small>				
				 </span> 
				 </span>
				 </a>
			</div>
			<div class="photo-header "> <?php echo SiteHelpers::avatar('50');?> </div>
		</li> 
<?php $sidebar = SiteHelpers::menus('sidebar');?>
<?php foreach ($sidebar as $menu) : ?>
	 <li>
		<a 
			<?php 
			if($menu['menu_type'] =='external') {	
				echo 'href="'.$menu['url'].'"';  
			} else {
				echo 'href="'.site_url($menu['module']).'"';
			}
			?>	
					
		
		 <?php  if(count($menu['childs']) > 0 ) echo 'class="expand level-closed"';?>>
			<i class="<?php echo $menu['menu_icons'];?>"></i> <span class="nav-label">

			<?php	

				if(CNF_MULTILANG ==1 && isset($menu['menu_lang']['title'][$this->session->userdata('lang')])):
					echo  $menu['menu_lang']['title'][$this->session->userdata('lang')] ;
				else:
					echo $menu['menu_name'];
				endif;
			?>		

				
			</span><span class="fa arrow"></span>	 
		</a> 
		<?php if(count($menu['childs']) > 0) :?>
			<ul class="nav nav-second-level">
				<?php foreach ($menu['childs'] as $menu2) : ?>
				 <li>
					<a 
						<?php 
						if($menu2['menu_type'] =='external') {	
							echo 'href="'.$menu2['url'].'"';  
						} else {
							if ($menu2['menu_id'] == 46) {
								echo 'href="#myCalculator" data-toggle="modal"';
							} elseif ($menu2['menu_id'] == 47) {
								echo 'href="#myCurrencyConversor" data-toggle="modal"';
							} else {
								echo 'href="'.site_url($menu2['module']).'"';
							}
						}
						?>									
					> <?php
						if ($menu2['menu_id'] == 49) {
							echo '<i class="glyphicons glyphicons-flower">⚘</i>';
						} else { ?>
							<i class="<?php echo $menu2['menu_icons'];?>"></i>
						<?php } ?>
					<?php	
					
						if(CNF_MULTILANG ==1 && isset($menu2['menu_lang']['title'][$this->session->userdata('lang')])):
							echo  $menu2['menu_lang']['title'][$this->session->userdata('lang')] ;
						else:
							echo $menu2['menu_name'];
						endif;
					?>						
					
					</a> 
					<?php if(count($menu2['childs']) > 0) : ?>
					<ul class="nav nav-third-level">
						<?php foreach($menu2['childs'] as $menu3) : ?>
							<li>
								<a 
									<?php 
									if($menu3['menu_type'] =='external') {	
										echo 'href="'.$menu3['url'].'"';  
									} else {
										echo 'href="'.site_url($menu3['module']).'"';
									}
									?>																
								> <i class="<?php echo $menu3['menu_icons'];?>"></i>	
								<?php	
								
									if(CNF_MULTILANG ==1 && isset($menu3['menu_lang']['title'][$this->session->userdata('lang')])):
										echo  $menu3['menu_lang']['title'][$this->session->userdata('lang')] ;
									else:
										echo $menu3['menu_name'];
									endif;
								?>																		
								
								</a>
							</li>	
						<?php endforeach;?>
					</ul>
					<?php endif;?>							
				</li>							
				<?php endforeach;?>
			</ul>
		<?php endif;?>
	</li>
<?php endforeach;?>						
	</div>
</nav>

	<!-- Modal HTML -->
    <div id="myCalculator" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Calculadora</h4>
                </div>
                <div class="modal-body">
                    <table class="calculator" id="calc">
			            <tr>
			                <td colspan="4" class="calc_td_result">
			                    <input type="text" readonly="readonly" name="calc_result" id="calc_result" class="calc_result" onkeydown="javascript:key_detect_calc('calc',event);" />
			                </td>
			            </tr>
			            <tr>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="CE" onclick="javascript:f_calc('calc','ce');" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="&larr;" onclick="javascript:f_calc('calc','nbs');" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="%" onclick="javascript:f_calc('calc','%');" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="+" onclick="javascript:f_calc('calc','+');" />
			                </td>
			            </tr>
			            <tr>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="7" onclick="javascript:add_calc('calc',7);" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="8" onclick="javascript:add_calc('calc',8);" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="9" onclick="javascript:add_calc('calc',9);" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="-" onclick="javascript:f_calc('calc','-');" />
			                </td>
			            </tr>
			                        <tr>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="4" onclick="javascript:add_calc('calc',4);" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="5" onclick="javascript:add_calc('calc',5);" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="6" onclick="javascript:add_calc('calc',6);" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="x" onclick="javascript:f_calc('calc','*');" />
			                </td>
			            </tr>
			            <tr>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="1" onclick="javascript:add_calc('calc',1);" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="2" onclick="javascript:add_calc('calc',2);" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="3" onclick="javascript:add_calc('calc',3);" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="&divide;" onclick="javascript:f_calc('calc','');" />
			                </td>
			            </tr>
			            <tr>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="0" onclick="javascript:add_calc('calc',0);" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="&plusmn;" onclick="javascript:f_calc('calc','+-');" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="," onclick="javascript:add_calc('calc','.');" />
			                </td>
			                <td class="calc_td_btn">
			                        <input type="button" class="calc_btn" value="=" onclick="javascript:f_calc('calc','=');" />
			                </td>
			            </tr>
			        </table>
			        <script type="text/javascript">
			                document.getElementById('calc').onload=init_calc('calc');
			        </script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal HTML -->
    <div id="myCurrencyConversor" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Conversor de Divisas</h4>
                </div>
                <div class="modal-body">
                    <body>
				        <div class="container">
				            <div class="header">
				                <ul class="nav nav-pills pull-right">
				                    <li class="active"><a href="#" onclick="loadCurrency()">Actualizar Divisas</a></li>
				                </ul>
				                <h3 class="text-muted">Divisas extraídas directamente desde Yahoo.com</h3>
				            </div>
				            <div class="well">    
				                <p>Ingrese el monto y seleccione la divisa:</p>
				                
				                <div class="form-inline">
				                    <input type="text" class="form-control" id="amount">
				                    <select class="form-control" id="currency_1"></select>
				                    <button type="button" class="btn btn-default" onclick="swapCurrency()">Intercambiar Divisas</button>
				                </div>
				                
				                <p>Sellecione la divisa a la que desea convertir:</p>
				                
				                <div class="form-inline">
				                    <input type="text" class="form-control" id="output" readonly>
				                    <select class="form-control" id="currency_2"></select>
				                    <button type="button" class="btn btn-success" onclick="extractData()">Calcular Monto</button>
				                </div>
				            </div> 
				        </div>	
				        	        
				        <script>
				          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				          ga('create', 'UA-50191773-1', 'secure-brushlands-4397.herokuapp.com');
				          ga('send', 'pageview');

				        </script>
				    </body>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>    
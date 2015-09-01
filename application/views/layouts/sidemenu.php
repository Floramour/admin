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
					> <i class="<?php echo $menu2['menu_icons'];?>"></i> 
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
	<script type="text/javascript">
    calc_array = new Array();
		var calcul=0;
		var pas_ch=0;
		function $id(id)
		{
		        return document.getElementById(id);
		}
		function f_calc(id,n)
		{
		        if(n=='ce')
		        {
		                init_calc(id);
		        }
		        else if(n=='=')
		        {
		                if(calc_array[id][0]!='=' && calc_array[id][1]!=1)
		                {
		                        eval('calcul='+calc_array[id][2]+calc_array[id][0]+calc_array[id][3]+';');
		                        calc_array[id][0] = '=';
		                        $id(id+'_result').value=calcul;
		                        calc_array[id][2]=calcul;
		                        calc_array[id][3]=0;
		                }
		        }
		        else if(n=='+-')
		        {
		                $id(id+'_result').value=$id(id+'_result').value*(-1);
		                if(calc_array[id][0]=='=')
		                {
		                        calc_array[id][2] = $id(id+'_result').value;
		                        calc_array[id][3] = 0;
		                }
		                else
		                {
		                        calc_array[id][3] = $id(id+'_result').value;
		                }
		                pas_ch = 1;
		        }
		        else if(n=='nbs')
		        {
		                if($id(id+'_result').value<10 && $id(id+'_result').value>-10)
		                {
		                        $id(id+'_result').value=0;
		                }
		                else
		                {
		                        $id(id+'_result').value=$id(id+'_result').value.slice(0,$id(id+'_result').value.length-1);
		                }
		                if(calc_array[id][0]=='=')
		                {
		                        calc_array[id][2] = $id(id+'_result').value;
		                        calc_array[id][3] = 0;
		                }
		                else
		                {
		                        calc_array[id][3] = $id(id+'_result').value;
		                }
		        }
		        else
		        {
		                        if(calc_array[id][0]!='=' && calc_array[id][1]!=1)
		                        {
		                                eval('calcul='+calc_array[id][2]+calc_array[id][0]+calc_array[id][3]+';');
		                                $id(id+'_result').value=calcul;
		                                calc_array[id][2]=calcul;
		                                calc_array[id][3]=0;
		                        }
		                        calc_array[id][0] = n;
		        }
		        if(pas_ch==0)
		        {
		                calc_array[id][1] = 1;
		        }
		        else
		        {
		                pas_ch=0;
		        }
		        document.getElementById(id+'_result').focus();
		        return true;
		}
		function add_calc(id,n)
		{
		        if(calc_array[id][1]==1)
		        {
		                $id(id+'_result').value=n;
		        }
		        else
		        {
		                $id(id+'_result').value+=n;
		        }
		        if(calc_array[id][0]=='=')
		        {
		                calc_array[id][2] = $id(id+'_result').value;
		                calc_array[id][3] = 0;
		        }
		        else
		        {
		                calc_array[id][3] = $id(id+'_result').value;
		        }
		        calc_array[id][1] = 0;
		        document.getElementById(id+'_result').focus();
		        return true;
		}
		function init_calc(id)
		{
		        $id(id+'_result').value=0;
		        calc_array[id] = new Array('=',1,'0','0',0);
		        document.getElementById(id+'_result').focus();
		        return true;
		}
		function key_detect_calc(id,evt)
		{
		        if((evt.keyCode>95) && (evt.keyCode<106))
		        {
		                var nbr = evt.keyCode-96;
		                add_calc(id,nbr);
		        }
		        else if((evt.keyCode>47) && (evt.keyCode<58))
		        {
		                var nbr = evt.keyCode-48;
		                add_calc(id,nbr);
		        }
		        else if(evt.keyCode==107)
		        {
		                f_calc(id,'+');
		        }
		        else if(evt.keyCode==109)
		        {
		                f_calc(id,'-');
		        }
		        else if(evt.keyCode==106)
		        {
		                f_calc(id,'*');
		        }
		        else if(evt.keyCode==111)
		        {
		                f_calc(id,'');
		        }
		        else if(evt.keyCode==110)
		        {
		                add_calc(id,'.');
		        }
		        else if(evt.keyCode==190)
		        {
		                add_calc(id,'.');
		        }
		        else if(evt.keyCode==188)
		        {
		                add_calc(id,'.');
		        }
		        else if(evt.keyCode==13)
		        {
		                f_calc(id,'=');
		        }
		        else if(evt.keyCode==46)
		        {
		                f_calc(id,'ce');
		        }
		        else if(evt.keyCode==8)
		        {
		                f_calc(id,'nbs');
		        }
		        else if(evt.keyCode==27)
		        {
		                f_calc(id,'ce');
		        }
		        return true;
		}
	</script>
	<style type="text/css">
		.calculator
		{
		        width:300px;
		        height:300px;
		        background-color:#eeeeee;
		        border:2px solid #CCCCCC;
		        margin:auto;
		        padding-left:5px;
		        padding-bottom:5px;
		}
		.calculator td
		{
		        height:16.66%;
		}
		.calc_td_result
		{
		        text-align:center;
		}
		.calc_result
		{
		        width:90%;
		        text-align:right;
		}
		.calc_td_calculs
		{
		        text-align:center;
		}
		.calc_calculs
		{
		        width:90%;
		        text-align:left;
		}
		.calc_td_btn
		{
		        width:25%;
		        height:100%;
		}
		.calc_btn
		{
		        width:90%;
		        height:90%;
		        font-size:20px;
		}
	</style>	
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
                    <body onload="loadCurrency()">
				        <div class="container">
				            
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
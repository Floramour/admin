  <style>
  .label-success {
    background-color: #5cb85c;
  }
  </style>
  <?php usort($tableGrid, "SiteHelpers::_sort"); ?>
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
		<?php if($this->access['is_add'] ==1) : ?>
		<a href="<?php echo site_url('orders/add') ?>" class="tips btn btn-xs btn-info"  title="<?php echo $this->lang->line('core.btn_new'); ?>">
		<i class="fa fa-plus"></i>&nbsp;<?php echo $this->lang->line('core.btn_new'); ?> </a>
		<?php endif;
		if($this->access['is_remove'] ==1) : ?>		
		<a href="javascript:void(0);"  onclick="SximoDelete();" class="tips btn btn-xs btn-danger" title="<?php echo $this->lang->line('core.btn_remove'); ?>">
		<i class="fa fa-trash-o"></i>&nbsp;<?php echo $this->lang->line('core.btn_remove'); ?> </a>
		<?php endif;
		if($this->access['is_excel'] ==1) : ?>	
		<a href="<?php echo site_url('orders/download') ?>" class="tips btn btn-xs btn-default" title="<?php echo $this->lang->line('core.btn_download'); ?>">
		<i class="fa fa-download"></i>&nbsp;<?php echo $this->lang->line('core.btn_download'); ?></a>
		<?php endif;
		if($this->session->userdata('gid') ==1) : ?>	
		<a href="<?php echo site_url('sximo/module/config/orders') ?>" class="tips btn btn-xs btn-default"  title="<?php echo $this->lang->line('core.btn_config'); ?>">
		<i class="fa fa-cog"></i>&nbsp;<?php echo $this->lang->line('core.btn_config'); ?></a>
		<?php endif; ?>		

	</div>

<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> <?php echo $pageTitle ;?> <small><?php echo $pageNote ;?></small></h4></div>
	<div class="sbox-content"> 	

	<?php echo $this->session->flashdata('message');?>
	 <form action='<?php echo site_url('orders/destroy') ?>' class='form-horizontal' id ='SximoTable' method="post" >
	 <div class="table-responsive">
    <table class="table table-striped ">
        <thead>
			<tr>
				<th> No </th>
				<th> <input type="checkbox" class="checkall" /></th>

				<?php foreach ($tableGrid as $k => $t) : ?>
					<?php if($t['view'] =='1'): ?>
						<th><?php echo $t['label'] ?></th>
					<?php endif; ?>
				<?php endforeach; ?>
				<th><?php echo $this->lang->line('core.btn_action'); ?></th>
			  </tr>
        </thead>

        <tbody>
			<tr id="sximo-quick-search" >
				<td> # </td>
				<td> </td>
				<?php foreach ($tableGrid as $t) :?>
					<?php if($t['view'] =='1') :?>
					<td>						
						<?php echo SiteHelpers::transForm($t['field'] , $tableForm) ;?>								
					</td>
					<?php endif;?>
				<?php endforeach;?>
				<td style="width:50px;">
				<input type="hidden"  value="Search">
				<button type="button"  class=" do-quick-search btn btn-xs btn-info"><i class="fa fa-search"></i> </button></td>
			  </tr>			
			<tr >
			<?php foreach ( $rowData as $i => $row ) : ?>
                <tr>
					<td width="50"> <?php echo ($i+1+$page) ?> </td>
					<td width="50"><input type="checkbox" class="ids" name="id[]" value="<?php echo $row->id_orden ?>" />  </td>
				 <?php foreach ( $tableGrid as $j => $field ) : ?>
					 <?php if($field['view'] =='1'): ?>
					 <td>
					 	<?php if($field['attribute']['image']['active'] =='1'): ?>
							<?php echo SiteHelpers::showUploadedFile($row->$field['field'] , $field['attribute']['image']['path'] ) ?>
						<?php else: ?>
							<?php 
							$conn = (isset($field['conn']) ? $field['conn'] : array() ) ;		
							if ($field['field'] == 'id_orden'):
								echo anchor(base_url().'orders/show/'.$row->id_orden, $row->id_orden, 'target="new"');
							elseif ($field['field'] == 'estado'):
								?>
								<div style="width: 117px;">
									<span class="label label-success" data-toggle="tooltip" data-placement="top" title="Orden de compra">1</span>
									<span class="label label-success" data-toggle="tooltip" data-placement="top" title="Voucher">2</span>
									<span class="label label-success" data-toggle="tooltip" data-placement="top" title="Guía de entrega">3</span>
									<span class="label label-danger" data-toggle="tooltip" data-placement="top" title="Tarjeta y sobre">4</span>
								</div><?php
							else:
								echo SiteHelpers::gridDisplay($row->$field['field'] , $field['field'] , $conn ); ?>
							<?php endif; ?>
						<?php endif; ?>
					 </td>
					 <?php endif; ?>
				 <?php endforeach; ?>
				 <td>
					 <div class="btn-group">		
						<button class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown"  aria-expanded="false">
						<i class="fa fa-cog"></i> <span class="caret"></span>
						</button>
						<ul  class="dropdown-menu  icons-left pull-right">					 	

					 	<?php if($access['is_detail'] ==1) : ?>
						<li><a href="<?php echo site_url('orders/show/'.$row->id_orden)?>"  class="tips "  title="view"><i class="fa  fa-search"></i> <?php echo $this->lang->line('core.btn_view'); ?> </a></li>
						<?php endif;
						if($access['is_edit'] ==1) : ?>
						<li><a  href="<?php echo site_url('orders/add/'.$row->id_orden)?>"  class="tips "  title="edit"> <i class="fa fa-edit"></i>  <?php echo $this->lang->line('core.btn_edit'); ?> </a> </li>
						<?php endif;?>
												
						</ul>
					</div>					 
					
					</td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>
	</div>
	</form>
	
	<?php echo $this->load->view('footer');?>
	
	</div>
</div>


	</div>
</div>

<script>
$(document).ready(function(){

	$('.do-quick-search').click(function(){
		$('#SximoTable').attr('action','<?php echo site_url("orders/multisearch");?>');
		$('#SximoTable').submit();
	});
	
});	
</script>

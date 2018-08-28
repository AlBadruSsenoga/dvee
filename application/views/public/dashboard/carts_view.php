<?php $this->load->view('public/templates/header', array(
	'title' => 'Dashboard',
	'link' => 'account',
	'breadcrumbs' => array(
		0 => array('name'=>'Dashboard','link'=>'user_dashboard'),
		1 => array('name'=>'My Carts','link'=>FALSE),
	)
)) ?>

<?php $this->load->view('public/dashboard/dashboard_header', array('active' => 'carts')) ?>

<div class="lead page-header">Manage Saved Carts</div>

<?php echo form_open(current_url()); ?>
	<?php if (empty($saved_cart_data)): ?>
		<div class="alert alert-warning">You have no saved carts</div>
	<?php else: ?>
	<div class="panel panel-default panel-inverse">
		<div class="panel-heading">
			<h4 class="panel-title">Saved Carts</h4>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>Details</th>
					<th class="text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($saved_cart_data as $row): ?>
					<tr>
						<td>
							Saved on : 
							<?php echo date('jS M Y @ H:i', strtotime($row[$this->flexi_cart->db_column('db_cart_data','date')])); ?>
						</td>
						<td class="text-center">
							<a href="<?php echo site_url('load_cart_data/'.$row[$this->flexi_cart->db_column('db_cart_data','id')].'/dashboard') ?>" class="btn btn-xs btn-primary">
								Load
							</a>
							<a href="<?php echo site_url('delete_cart_data/'.$row[$this->flexi_cart->db_column('db_cart_data','id')].'/dashboard') ?>" class="btn btn-xs btn-danger">
								Delete
							</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<?php endif ?>
<?php echo form_close(); ?>

<?php $this->load->view('public/templates/footer') ?>
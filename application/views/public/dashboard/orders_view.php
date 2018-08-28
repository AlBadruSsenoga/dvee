<?php $this->load->view('public/templates/header', array(
	'title' => 'Dashboard',
	'link' => 'account',
	'breadcrumbs' => array(
		0 => array('name'=>'Dashboard','link'=>'user_dashboard'),
		1 => array('name'=>'My Orders','link'=>FALSE),
	)
)) ?>

<?php $this->load->view('public/dashboard/dashboard_header', array('active' => 'orders')) ?>

<div class="lead page-header">My Orders</div>

<?php if (empty($order_data)): ?>
	<div class="alert alert-warning">There are no orders available to view.</div>
<?php else: ?>
	<div class="panel panel-default panel-inverse">
		<div class="panel-heading">
			<h4 class="panel-title">Orders History</h4>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th class="">Order Number</th>
					<th class="text-center">Total Items</th>
					<th class="text-center">Total Value</th>
					<th class="text-center">Date</th>
					<th class="text-center">Status</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($order_data as $row): $order_number = $row[$this->flexi_cart_admin->db_column('order_summary', 'order_number')]; ?>
				<tr>
					<td>
						<?php echo anchor('user_dashboard/orders/'.$order_number, $order_number) ?>
					</td>
					<td class="text-center">
						<?php echo number_format($row[$this->flexi_cart_admin->db_column('order_summary', 'total_items')]); ?>
					</td>
					<td class="text-center">
						<?php echo '&pound;'.$row[$this->flexi_cart_admin->db_column('order_summary', 'total')]; ?>
					</td>
					<td class="text-center">
						<?php echo date('jS M Y', strtotime($row[$this->flexi_cart_admin->db_column('order_summary', 'date')])); ?>
					</td>
					<td class="text-center">
						<?php echo $row[$this->flexi_cart_admin->db_column('order_status', 'status')]; ?>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>			
<?php endif ?>

<?php $this->load->view('public/templates/footer') ?>
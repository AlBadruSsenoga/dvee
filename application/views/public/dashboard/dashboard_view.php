<?php $this->load->view('public/templates/header', array(
	'title' => 'Dashboard',
	'link' => 'account',
	'breadcrumbs' => array(
		0 => array('name'=>'Dashboard','link'=>FALSE),
	)
)) ?>

<?php $this->load->view('public/dashboard/dashboard_header', array('active' => FALSE)) ?>

<div class="lead page-header">My Dashboard</div>

<div class="row">
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default text-center">
					<div class="panel-body">
						<h1 class="text-muted" style="margin-top:0"><span class="glyphicon glyphicon-briefcase"></span></h1>
						<div class="h5" style="margin-top:0;">
							<?php echo anchor('user_dashboard/orders', 'My Orders') ?>
						</div>
						View and manage orders
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default text-center">
					<div class="panel-body">
						<h1 class="text-muted" style="margin-top:0"><span class="glyphicon glyphicon-shopping-cart"></span></h1>
						<div class="h5" style="margin-top:0;">
							<?php echo anchor('user_dashboard/carts', 'My Carts') ?>
						</div>
						View and manage saved carts
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default text-center">
					<div class="panel-body">
						<h1 class="text-muted" style="margin-top:0"><span class="glyphicon glyphicon-tags"></span></h1>
						<div class="h5" style="margin-top:0;">
							<?php echo anchor('user_dashboard/points_vouchers', 'Points and Vouchers') ?>
						</div>
						My reward points & vouchers
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">Reward Points</div>
			<div class="panel-body">
				<h4 class="lead" style="margin:0">
					<strong><?php echo $reward_points ?></strong> total active reward points.
				</h4>
			</div>
			<div class="panel-footer text-muted">
				You can convert up to <?php echo $max_points_value; ?> points,
				worth &pound;<?php echo $this->flexi_cart_admin->calculate_reward_point_value($max_points_value); ?>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('public/templates/footer') ?>
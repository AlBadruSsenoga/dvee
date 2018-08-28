<?php $this->load->view('admin/templates/header'); ?>
	
<?php if (! empty($message)) { ?>
	<div id="message">
		<?php echo $message; ?>
	</div>
<?php } ?>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title pull-left">Latest Members TESTx</div>
				<a href="<?php echo site_url('admin/users') ?>" class="btn btn-xs btn-info pull-right">All Users TESTTTz</a>
				<div class="clearfix"></div>
			</div>
			<?php if ($latest_users): ?>
				<div class="panel-body text-center">
					<div class="row">
						<?php foreach ($latest_users as $key => $user): ?>
							<div class="col-md-4">
								<a href="<?php echo site_url('admin/update_user/'.$user->id) ?>">
									<div>
										<img src="<?php echo $user->avatar ?>" class="img-circle" style="width:50px">
									</div>
									<?php echo character_limiter($user->username, 20) ?>
								</a>
								<div class="text-muted">
									<?php echo $user->created ?>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			<?php else: ?>
				<div class="alert alert-warning" style="margin:0">
					No users have registered yet.
				</div>
			<?php endif ?>
		</div>
	</div>
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default text-center">
					<div class="panel-body text-success">
						<h1 style="margin-top:0"><span class="glyphicon glyphicon-user"></span></h1>
						<div class="h5" style="margin-top:0;">
							<?php echo anchor('admin/users', 'Users') ?>
						</div>
						<div class="lead"><?php echo $users_total ?></div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-default text-center">
					<div class="panel-body text-warning">
						<h1 style="margin-top:0"><span class="glyphicon glyphicon-shopping-cart"></span></h1>
						<div class="h5" style="margin-top:0;">
							<?php echo anchor('admin/items', 'Products') ?>
						</div>
						<div class="lead"><?php echo $products_total ?></div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-default text-center">
					<div class="panel-body text-danger">
						<h1 style="margin-top:0"><span class="glyphicon glyphicon-briefcase"></span></h1>
						<div class="h5" style="margin-top:0;">
							<?php echo anchor('admin/orders', 'Orders') ?>
						</div>
						<div class="lead">&pound <?php echo $order_total ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				Order Revenue
			</div>
			<div class="panel-body">
				<div id="line-chart" style="height: 240px;"></div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title pull-left">Recent Items</div>
				<a href="<?php echo site_url('admin/items') ?>" class="btn btn-xs btn-info pull-right">All Products</a>
				<div class="clearfix"></div>
			</div>
			<?php if ($latest_products): ?>
				<div class="panel-body">
					<?php foreach ($latest_products as $key => $item): ?>
						<div class="row">
							<div class="col-md-3">
								<a href="<?php echo site_url('admin/update_item/'.$item->id) ?>">
									<img src="<?php echo $item->thumb ?>" class="img-responsive">
								</a>
							</div>
							<div class="col-md-9">
								<?php echo character_limiter($item->name, 20) ?>
								<h5>&pound <?php echo $item->price ?></h5>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			<?php else: ?>
				<div class="alert alert-warning" style="margin:0">
					You have no items yet.
					<?php echo anchor('admin/insert_item', 'Insert Items', 'class="alert-link"') ?>
				</div>
			<?php endif ?>
		</div>
	</div>
</div>

<script>
    $(document).ready(function() {
		var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

		Morris.Line({
		  element: 'line-chart',
		  data: JSON.parse('<?php echo $order_data ?>'),
		  xkey: 'month',
		  ykeys: ['sales'],
		  labels: ['Sales'],
		  xLabelFormat: function(x) { // <--- x.getMonth() returns valid index
		    var month = months[x.getMonth()];
		    return month;
		  },
		  dateFormat: function(x) {
		    var month = months[new Date(x).getMonth()];
		    return month;
		  },
		});
	});
</script>
	
<?php $this->load->view('admin/templates/footer'); ?>
<?php $this->load->view('public/templates/header', array(
	'title' => 'Register',
	'link' => 'register'
)) ?>

<ul class="breadcrumb">
	<li class="active">Register</li>
</ul>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="8000">
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<div class="row">
				<div class="col-sm-2 col-md-1">
					<span class="text-muted glyphicon glyphicon-tags" style="font-size:8rem"></span>
				</div>
				<div class="col-sm-10 col-md-11">
					<div style="margin-left: 2.5rem">
						<h4 class="media-heading lead">Points & Vouchers</h4>
						Do you Enjoy a good discount? <br>
						Shop and Earn points that can later be converted into a discount voucher.
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="row">
				<div class="col-sm-2 col-md-1">
					<span class="text-muted glyphicon glyphicon-flash" style="font-size:8rem"></span>
				</div>
				<div class="col-sm-10 col-md-11">
					<h4 class="media-heading lead">Fast checkout</h4>
					Checkout in as few steps as possible. <br>
					We do not collect your billing and shipping details onsite. Your information remains safe with PayPal.
				</div>
			</div>
		</div>
		<div class="item">
			<div class="row">
				<div class="col-sm-2 col-md-1">
					<span class="text-muted glyphicon glyphicon-shopping-cart" style="font-size:8rem"></span>
				</div>
				<div class="col-sm-10 col-md-11">
					<h4 class="media-heading lead">Advanced Shopping Cart</h4>
					Enjoy all the features of our robust shopping cart.<br>
					You can save your cart and load it at a latter date, apply discounts and get freebies.
				</div>
			</div>
		</div>
		<div class="item">
			<div class="row">
				<div class="col-sm-2 col-md-1">
					<span class="text-muted glyphicon glyphicon-briefcase" style="font-size:8rem"></span>
				</div>
				<div class="col-sm-10 col-md-11">
					<h4 class="media-heading lead">Track Orders</h4>
					View and Manage your orders. <br>
					Your own dashboard to view and manage orders, track order history and more.
				</div>
			</div>
		</div>
	</div>

	<hr>

	<!-- Indicators -->
	<ol class="carousel-indicators bottom text-left" style="margin-top:1rem">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	</ol>
</div>

<div class="panel panel-info" style="margin-top: 4rem">
	<div class="panel-heading">
		<h4 class="panel-title">Enter your profile information below.</h4>
	</div>
</div>

<?php if (validation_errors()): ?>
	<div class="alert alert-danger animated fadeInDown" id="message">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		The form was submitted with errors, please check the form and try again.
	</div>
<?php endif ?>

<?php echo form_open_multipart(current_url()); ?>
<div class="row">
	<div class="col-xs-12 col-sm-4 col-md-3">
		<div class="form-group <?= form_error('userfile') ? 'has-error' : '' ?>">
			<?= form_hidden('crop_x', '') ?>
			<?= form_hidden('crop_y', '') ?>
			<?= form_hidden('crop_width', '') ?>
			<?= form_hidden('crop_height', '') ?>
			<label class="control-label" for="userfile">Profile Photo</label>
			<div class="panel panel-default">
				<div class="fileinput fileinput-new" data-provides="fileinput">
					<div class="fileinput-new thumbnail text-warning">
						<div style="margin:3rem 0">No image selected</div>
					</div>
					<div class="fileinput-preview fileinput-exists thumbnail">
					</div>
					<div class="btn-group btn-block">
						<div class="btn btn-primary btn-file">
							<span class="fileinput-new">Select image</span>
							<span class="fileinput-exists">Change</span>
							<input type="file" name="userfile">
						</div>
						<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
					</div>
				</div>
			</div>
			<div class="text-danger"><?= form_error('userfile') ? form_error('userfile') : '&nbsp' ?></div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-8 col-md-9">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group <?= form_error('first_name') ? 'has-error' : '' ?>">
					<label class="control-label" for="first_name">First Name</label>
					<input class="form-control" type="text" name="first_name" value="<?= set_value('first_name') ?>" />
					<div class="text-danger"><?= form_error('first_name') ? form_error('first_name') : '&nbsp' ?></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="form-group <?= form_error('last_name') ? 'has-error' : '' ?>">
					<label class="control-label" for="last_name">Last Name</label>
					<input class="form-control" type="text" name="last_name" value="<?= set_value('last_name') ?>" />
					<div class="text-danger"><?= form_error('last_name') ? form_error('last_name') : '&nbsp' ?></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="form-group <?= form_error('username') ? 'has-error' : '' ?>">
					<label class="control-label" for="username">Username</label>
					<input class="form-control" type="text" name="username" value="<?= set_value('username') ?>" />
					<div class="text-danger"><?= form_error('username') ? form_error('username') : '&nbsp' ?></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="form-group <?= form_error('password') ? 'has-error' : '' ?>">
					<label class="control-label" for="password">Password</label>
					<input class="form-control" type="password" name="password" value="<?= set_value('password') ?>" />
					<div class="text-danger"><?= form_error('password') ? form_error('password') : '&nbsp' ?></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="form-group <?= form_error('password_confirm') ? 'has-error' : '' ?>">
					<label class="control-label" for="password_confirm">confirm Password</label>
					<input class="form-control" type="password" name="password_confirm" value="<?= set_value('password_confirm') ?>" />
					<div class="text-danger"><?= form_error('password_confirm') ? form_error('password_confirm') : '&nbsp' ?></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="form-group <?= form_error('email') ? 'has-error' : '' ?>">
					<label class="control-label" for="email">Email</label>
					<input class="form-control" type="email" name="email" value="<?= set_value('email') ?>" />
					<div class="text-danger"><?= form_error('email') ? form_error('email') : '&nbsp' ?></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="form-group <?= form_error('address') ? 'has-error' : '' ?>">
					<label class="control-label" for="address">Address</label>
					<input class="form-control" type="text" name="address" value="<?= set_value('address') ?>" />
					<div class="text-danger"><?= form_error('address') ? form_error('address') : '&nbsp' ?></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="form-group <?= form_error('phone') ? 'has-error' : '' ?>">
					<label class="control-label" for="phone">Phone</label>
					<input class="form-control" type="phone" name="phone" value="<?= set_value('phone') ?>" />
					<div class="text-danger"><?= form_error('phone') ? form_error('phone') : '&nbsp' ?></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="well well-sm">
	<input type="submit" name="create_user" value="Register my Account" class="btn btn-lg btn-primary" />
</div>

<?php echo form_close();?>

<script type="text/javascript" src="<?= base_url('assets/js/cropper.min.js') ?>"></script>
<script>
	$(document).ready(function() {
		$('.fileinput').on('change.bs.fileinput', function (e) {
			$('.fileinput-preview img').cropper({
				aspectRatio: 1 / 1,
				crop: function(e) {
					$('input[name="crop_width"]').val(e.width);
					$('input[name="crop_height"]').val(e.height);
					$('input[name="crop_x"]').val(e.x);
					$('input[name="crop_y"]').val(e.y);
				}
			});
		})
	});
</script>

<?php $this->load->view('public/templates/footer') ?>
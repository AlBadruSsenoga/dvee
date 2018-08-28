<!DOCTYPE html>
<html>
<head>
	<title><?php echo $owner->name ?> Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css') ?>" />
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-3 center-block" style="float:initial;margin-top:5%">
				<div class="text-center">
					<img alt="Brand" src="<?php echo base_url($owner->logo) ?>" style="margin:5px;width:45px;">
					<div class="lead"><?php echo $owner->name ?> - Admin</div>
				</div>

				<?php if ($message): ?>
					<?php echo $message; ?>
				<?php endif ?>
					<?php echo form_open(current_url(), 'class="text-left"'); ?>
						<div class="panel panel-default panel-inverse">
							<div class="panel-body">
								<?php if ($this->session->userdata('login_redirect')): ?>
									<div class="alert alert-warning">Your session expired.</div>
								<?php endif ?>

								<div class="alert-inbox-container" style="position:relative">
									<p class="form-group text-muted">
										Login with your username and password.
									</p>
								</div>
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control" id="identity" name="username" value="<?php echo set_value('username') ?>"/>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password') ?>"/>
								</div>
								
								<input type="submit" name="login_user" id="submit" value="Login" class="btn btn-lg btn-block btn-info"/>
							</div>
						</div>
					<?php echo form_close() ?>
				<div class="page-header text-center">
					<small class="m-l">COPYRIGHT &copy <?php echo date('Y') ?> <?php echo $owner->name ?></small>
				</div>
			</div>
		</div>
	</div><!-- /.container -->

</body>
</html>
<?php $this->load->view('public/templates/header', array(
	'title' => 'Login',
	'link' => 'login',
	'breadcrumbs' => array(
		0 => array('name'=>'Login','link'=>'login'),
		1 => array('name'=>'Forgot Password','link'=>FALSE)
	)
)) ?>

<div class="page-header">
	<h4 class="lead">Forgot My Password</h4>
	<p>
		We will send you and email with further instructions on how to change your password.
	</p>
</div>

<div class="row">
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">Password Reset</h4>
			</div>
			<div class="panel-body">
				<?php echo form_open(current_url(), 'class="form-inline"'); ?>
					<div class="form-group">
						<label for="identity">Email Address</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-control form-control-lg" id="identity" name="identity" value="<?php echo set_value('identity') ?>" />
					</div>
					<div class="form-group">
						<input type="submit" name="login_user" id="submit" value="Send Email" class="btn btn-primary"/>
					</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">Password Tips</h4>
			</div>
			<div class="panel-body">
				<ul class="row">
					<li>
						<strong>Use a strong password.</strong>
						8 Characters and above, we recommend a mixture of alpha-numeric characters or symbols
					</li>
					<li>
						<strong>Memorize your password.</strong>
						Never write it down, we recommend logging in as much as possible without checking the "remember me".
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('public/templates/footer') ?>
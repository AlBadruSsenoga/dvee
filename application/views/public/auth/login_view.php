<?php $this->load->view('public/templates/header', array(
	'title' => 'Login',
	'link' => 'login',
	'breadcrumbs' => array(
		0 => array('name'=>'Login','link'=>FALSE)
	)
)) ?>

<div class="alert-inbox-container text-left" style="position:relative">
	<div class="alert alert-info alert-inbox" role="alert">
		if you do not have an account already, please
		<?php echo anchor('register', 'REGISTER HERE', 'class="alert-link"') ?>
		to create an account.
	</div>
</div>
<?php echo form_open(current_url(), 'class="text-left"'); ?>
<div class="form-group <?= form_error('username') ? 'has-error' : '' ?>">
	<label class="control-label">Username:</label>
	<input type="text" class="form-control input-lg" name="username" value="<?php echo set_value('username') ?>"/>
	<div class="text-danger"><?= form_error('username') ? form_error('username') : '&nbsp' ?></div>
</div>
<div class="form-group <?= form_error('password') ? 'has-error' : '' ?>">
	<label class="control-label">Password:</label>
	<input type="password" class="form-control input-lg" name="password" value="<?php echo set_value('password') ?>"/>
	<div class="text-danger"><?= form_error('password') ? form_error('password') : '&nbsp' ?></div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<div class="checkbox" style="margin-top:0">
				<label for="remember_me">
					<?php echo form_checkbox('remember_me', '1', set_value('remember_me') ? TRUE : FALSE) ?>
					Remember Me
				</label>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group text-right">
			<?php echo anchor('forgot_password', 'Forgot your password?') ?>
		</div>
	</div>
</div>

<div class="well well-sm">
	<input type="submit" name="login_user" id="submit" value="Login" class="btn btn-lg btn-primary"/>
</div>
<hr>
<?php echo form_close();?>

<?php $this->load->view('public/templates/footer') ?>
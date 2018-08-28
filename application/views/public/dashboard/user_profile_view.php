<?php $this->load->view('public/templates/header', array(
	'title' => 'Profile',
	'link' => 'account',
	'sub_link' => 'profile',
	'breadcrumbs' => array(
		0 => array('name'=>'Dashboard','link'=>'user_dashboard'),
		1 => array('name'=>'Profile','link'=>FALSE),
	)
)); ?>

<div class="page-header">
    <h4 class="lead">
    	<span class="glyphicon glyphicon-user" style="margin-right:10px"></span>
	    Edit profile
    </h4>
    <p>
    	To change password, click this link <?php echo anchor('change_password', 'Change Password') ?>
    </p>
</div>

<?php echo form_open_multipart(uri_string()); ?>
	<div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="form-group <?= form_error('userfile') ? 'has-error' : '' ?>">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <label class="panel-title control-label" for="userfile">
                        	LOGO
                        </label>
                    </div>
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail text-warning">
                            <img src="<?= base_url($user->avatar) ?>">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail">
                        </div>
                        <div class="btn-group btn-block">
                            <div class="btn btn-success btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="userfile">
                            </div>
                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-9">
            <div class="row">
	            <div class="col-md-4">
	                <div class="form-group <?= form_error('username') ? 'has-error' : '' ?>">
	                    <label class="control-label" for="name">Username <?= form_error('username') ? '('.form_error('username').')' : '' ?></label>
	                    <input class="form-control" type="text" name="username" value="<?= set_value('username') ? set_value('username') : $user->username ?>">
	                </div>
                </div>
	            <div class="col-md-4">
	                <div class="form-group <?= form_error('email') ? 'has-error' : '' ?>">
	                    <label class="control-label" for="name">Email address <?= form_error('email') ? '('.form_error('email').')' : '' ?></label>
	                    <input class="form-control" type="text" name="email" value="<?= set_value('email') ? set_value('email') : $user->email ?>">
	                </div>
	            </div>
                <div class="col-md-4">
                    <div class="form-group <?= form_error('first_name') ? 'has-error' : '' ?>">
                        <label class="control-label" for="first_name">First name <?= form_error('first_name') ? '(required)' : '' ?></label>
                        <input class="form-control" type="text" name="first_name" value="<?= set_value('first_name') ? set_value('first_name') : $user->first_name ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group <?= form_error('last_name') ? 'has-error' : '' ?>">
                        <label class="control-label" for="last_name">Last name <?= form_error('last_name') ? '(required)' : '' ?></label>
                        <input class="form-control" type="text" name="last_name" value="<?= set_value('last_name') ? set_value('last_name') : $user->last_name ?>">
                    </div>
                </div>
	            <div class="col-md-4">
	                <div class="form-group <?= form_error('address') ? 'has-error' : '' ?>">
	                    <label class="control-label" for="address">Physical address <?= form_error('address') ? '(required)' : '' ?></label>
	                    <input class="form-control" type="text" name="address" value="<?= set_value('address') ? set_value('address') : $user->address ?>">
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="form-group <?= form_error('postal') ? 'has-error' : '' ?>">
	                    <label class="control-label" for="postal">Postal address <?= form_error('postal') ? '(required)' : '' ?></label>
	                    <input class="form-control" type="text" name="postal" value="<?= set_value('postal') ? set_value('postal') : $user->postal ?>">
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="form-group <?= form_error('phone') ? 'has-error' : '' ?>">
	                    <label class="control-label" for="phone">Phone <?= form_error('phone') ? '(required)' : '' ?></label>
	                    <input class="form-control" type="text" name="phone" value="<?= set_value('phone') ? set_value('phone') : $user->phone ?>">
	                </div>
	            </div>
            </div>
        </div>
    </div>

	<div class="well well-sm">
		<input type="button" class="btn btn-lg btn-primary" value="Update Profile" data-toggle="modal" data-target="#enter-password"/>
	</div>


    <div class="modal fade" id="enter-password">
        <div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">
						Enter your current password
					</h4>
				</div>
				<div class="modal-body">
					<?php if ( validation_errors() AND form_error('old_password') ): ?>
						<div class="alert alert-danger animated fadeInDown" id="message">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<?php echo form_error('old_password') ?>
						</div>
					<?php endif ?>

                    <input class="form-control" type="password" name="old_password" value="">
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-lg btn-block btn-primary" name="edit_user" value="Continue" />
				</div>
			</div>
		</div>
    </div>

    <?php if ( validation_errors() AND form_error('old_password') ): ?>
    	<script type="text/javascript">
	    	$(document).ready(function() {
		    	$('#enter-password').modal('show')
	    	});
    	</script>
    <?php endif ?>
<?php echo form_close() ?>

<?php $this->load->view('public/templates/footer') ?>
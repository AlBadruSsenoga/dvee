<?php $this->load->view('admin/templates/header', array(
	'title' => 'Users',
	'link' => 'users',
	'breadcrumbs' => array(
		0 => array('name'=>'Users','link'=>'users'),
		1 => array('name'=>$person ? $person->username : 'Not found','link'=>FALSE),
	)
)); ?>

<div class="lead page-header b-0">
	<img src="<?php echo base_url($person->avatar) ?>" alt="" style="width:35px" class="img-circle">
	<?php echo $person->username ?>
</div>

<?php if (validation_errors()): ?>
	<div class="alert alert-danger">
		Correct the errors in the form and try again
	</div>
	<?php var_dump(validation_errors()) ?>
<?php else: ?>
	<?php if (! empty($message)): ?>
		<div id="message"> <?=$message ?> </div>
	<?php endif ?>
<?php endif ?>

<?php if (! $person): ?>
<div class="alert alert-warning">This user has been removed</div>
<?php else: ?>

<ul class="nav nav-tabs" role="tablist" style="margin-bottom:3rem">
    <li role="presentation" class="active">
        <a href="#details" aria-controls="details" role="tab" data-toggle="tab">User Details</a>
    </li>
    <li role="presentation" class="">
        <a href="#points" aria-controls="points" role="tab" data-toggle="tab">Reward Points</a>
    </li>
    <li role="presentation" class="">
        <a href="#vouchers" aria-controls="vouchers" role="tab" data-toggle="tab">Reward Vouchers</a>
    </li>
</ul>

<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="details">
		<?php echo form_open_multipart(current_url()) ?>
			<?php echo form_hidden('id', $person->id) ?>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="form-group">
						<?= form_hidden('crop_x', '') ?>
						<?= form_hidden('crop_y', '') ?>
						<?= form_hidden('crop_width', '') ?>
						<?= form_hidden('crop_height', '') ?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<label class="title" for="userfile">Profile Photo (optional)</label>
							</div>
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail text-warning">
									<img src="<?= base_url($person->avatar) ?>">
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
				<div class="col-xs-12 col-sm-6 col-md-9">
					<div class="panel panel-default">
						<div class="panel-heading">
							Profile Information
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group <?php echo form_error('first_name') ? 'has-error' : '' ?>">
										<label class="control-label" for="first_name">First Name</label>
										<input class="form-control" type="text" name="first_name" value="<?= set_value('first_name') ? set_value('first_name') : $person->first_name ?>" />
										<div class="text-danger"><?php echo form_error('first_name') ? form_error('first_name') : '&nbsp' ?></div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6">
									<div class="form-group <?php echo form_error('last_name') ? 'has-error' : '' ?>">
										<label class="control-label" for="last_name">Last Name</label>
										<input class="form-control" type="text" name="last_name" value="<?= set_value('last_name') ? set_value('last_name') : $person->last_name ?>" />
										<div class="text-danger"><?php echo form_error('last_name') ? form_error('last_name') : '&nbsp' ?></div>
									</div>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="alert alert-warning">
										<h4>Update user's Login details</h4>
										<p>The user will not be able to login unless informed of the changes.</p>
										<hr>
										<div class="row">
											<div class="col-xs-12 col-sm-4 col-md-4">
												<div class="form-group <?php echo form_error('username') ? 'has-error' : '' ?>">
													<label class="control-label" for="username">Username</label>
													<input class="form-control" type="text" name="username" value="<?= set_value('username') ? set_value('username') : $person->username ?>" />
													<div class="text-danger"><?php echo form_error('username') ? form_error('username') : '&nbsp' ?></div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-4 col-md-4">
												<div class="form-group <?php echo form_error('password') ? 'has-error' : '' ?>">
													<label class="control-label" for="password1">Password</label>
													<input class="form-control" type="password" name="password" value="<?= set_value('password') ?>" />
													<div class="text-danger"><?php echo form_error('password') ? form_error('password') : '&nbsp' ?></div>
												</div>
											</div>
											<div class="col-xs-12 col-sm-4 col-md-4">
												<div class="form-group <?php echo form_error('password_confirm') ? 'has-error' : '' ?>">
													<label class="control-label" for="password_confirm">confirm Password</label>
													<input class="form-control" type="password" name="password_confirm" value="<?= set_value('password_confirm') ?>" />
													<div class="text-danger"><?php echo form_error('password_confirm') ? form_error('password_confirm') : '&nbsp' ?></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="form-group <?php echo form_error('email') ? 'has-error' : '' ?>">
										<label class="control-label" for="email">Email</label>
										<input class="form-control" type="email" name="email" value="<?= set_value('email') ? set_value('email') : $person->email ?>" />
										<div class="text-danger"><?php echo form_error('email') ? form_error('email') : '&nbsp' ?></div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="form-group <?php echo form_error('phone') ? 'has-error' : '' ?>">
										<label class="control-label" for="phone">Phone</label>
										<input class="form-control" type="phone" name="phone" value="<?= set_value('phone') ? set_value('phone') : $person->phone ?>" />
										<div class="text-danger"><?php echo form_error('phone') ? form_error('phone') : '&nbsp' ?></div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="form-group <?php echo form_error('postal') ? 'has-error' : '' ?>">
										<label class="control-label" for="postal">Postal Address</label>
										<input class="form-control" type="text" name="postal" value="<?= set_value('postal') ? set_value('postal') : $person->postal ?>" />
										<div class="text-danger"><?php echo form_error('postal') ? form_error('postal') : '&nbsp' ?></div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group <?php echo form_error('address') ? 'has-error' : '' ?>">
										<label class="control-label" for="address">Line Address</label>
										<input class="form-control" type="text" name="address" value="<?= set_value('address') ? set_value('address') : $person->address ?>" />
										<div class="text-danger"><?php echo form_error('address') ? form_error('address') : '&nbsp' ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<input type="submit" name="edit_user" value="Update User Profile" class="btn btn-lg btn-primary" />
		<?php echo form_close(); ?>
	</div>
	
	<div role="tabpanel" class="tab-pane" id="points">
		<div class="row">
			<div class="col-md-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Convert Points to Vouchers
					</div>
					<div class="panel-body">
						<?php if ($conversion_tiers): ?>
							<?php echo form_open(current_url()); ?>
								<div class="form-group help-block">
									<strong>
										<?php echo $reward_data[$this->flexi_cart_admin->db_column('reward_points','total_points_active')]; ?>
									</strong>
									total active reward points.
								</div>

	
								<?php $max_conversion_points = $this->flexi_cart_admin->calculate_conversion_reward_points($reward_data[$this->flexi_cart_admin->db_column('reward_points','total_points_active')]); ?>
								<div class="form-group">
									<select name="reward_points" class="form-control">
										<?php foreach($conversion_tiers as $value) { ?>
											<option value="<?php echo $value; ?>" <?php echo set_select('reward_points', $value); ?>>
												<?php echo $value; ?>
											</option>
										<?php } ?>
									</select>
								</div>
								<a data-toggle="collapse" data-target="#convert-info"><span class="glyphicon glyphicon-info-sign"></span> more info</a>
								<div class="help-block collapse" id="convert-info">
									Set the number of points that are to be converted to a reward voucher. <br>
									<?php foreach($conversion_tiers as $value) { ?>
										<div>
											<b><?php echo $value; ?></b> points worth <b>&pound;<?php echo $this->flexi_cart_admin->calculate_reward_point_value($value); ?></b>
										</div>
									<?php } ?>
									Maximum available for this user is <b><?php echo $max_conversion_points; ?></b> points, worth
									<b>&pound;<?php echo $this->flexi_cart_admin->calculate_reward_point_value($max_conversion_points); ?></b>
								</div>
									
								<div class="text-right">
									<input type="submit" name="convert_reward_points" value="Convert" class="btn btn-primary"/>
								</div>
							<?php echo form_close(); ?>
						<?php else: ?>
							<div class="text-muted">This user does not have enough active reward points to convert to a voucher.</div>
						<?php endif ?>
					</div>
				</div>
				<div class="panel panel-default panel-inverse">
					<div class="panel-heading">
						User Reward Points
					</div>
					<?php echo form_open(current_url()); ?>
						<table class="table table-flat table-striped" style="margin:0;font-size:100%">
							<tbody>
								<tr>
									<th>
										Total
										<span class="glyphicon glyphicon-info-sign text-info" data-toggle="tooltip" title="The number of reward points that have been earnt by the user. Any cancelled or refunded items are not included in the total."></span>
									</th>
									<td class="text-right">
										<?php echo $points_data['total_points']; ?>
									</td>
								</tr>
								<tr>
									<th>
										Pending
										<span class="glyphicon glyphicon-info-sign text-info" data-toggle="tooltip" title="The number of reward points that are pending activation. Once an ordered item has been 'Completed' (Shipped), the earnt points will be enabled after a set number of days."></span>
									</th>
									<td class="text-right">
										<?php echo $points_data['total_points_pending']; ?>
									</td>
								</tr>
								<tr>
									<th>
										Active
										<span class="glyphicon glyphicon-info-sign text-info" data-toggle="tooltip"  title="The number of reward points that have been earnt by the user, which are active and can be converted to vouchers."></span>
									</th>
									<td class="text-right">
										<?php echo $points_data['total_points_active']; ?>
									</td>
								</tr>
								<tr>
									<th>
										Expired
										<span class="glyphicon glyphicon-info-sign text-info" data-toggle="tooltip" title="The number of reward points that have expired before they were converted to a reward voucher."></span>
									</th>
									<td class="text-right">
										<?php echo $points_data['total_points_expired']; ?>
									</td>
								</tr>
								<tr>
									<th>
										Converted
										<span class="glyphicon glyphicon-info-sign text-info" data-toggle="tooltip" title="The number of reward points that have been converted to reward vouchers by the user."></span>
									</th>
									<td class="text-right">
										<?php echo $points_data['total_points_converted']; ?>
									</td>
								</tr>
								<tr>
									<th>
										Cancelled
										<span class="glyphicon glyphicon-info-sign text-info" data-toggle="tooltip" title="The number of reward points that have been cancelled due to an ordered item being cancelled or refunded."></span>
									</th>
									<td class="text-right">
										<?php echo $points_data['total_points_cancelled']; ?>
									</td>
								</tr>
							</tbody>
						</table>				
					<?php echo form_close(); ?>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading">
						Reward Points Converted
					</div>
					<?php if (empty($points_converted_data)): ?>
						<div class="alert alert-warning">
							There are no reward points conversions available.
						</div>
					<?php else: ?>
						<table class="table table-flat table-striped" style="font-size:100%">
							<thead class="bg-primary">
								<tr>
									<th>
										<div data-toggle="tooltip" title="The reward voucher code.">
											Voucher Code
											<span class="glyphicon glyphicon-info-sign"></span>
										</div>
									</th>
									<th>
										<div data-toggle="tooltip" title="The Order # that the reward points were earnt and converted from.">
											Order #
											<span class="glyphicon glyphicon-info-sign"></span>
										</div>
									</th>
									<th>
										<div data-toggle="tooltip" title="The specific item that the reward points were earnt and converted from.">
											Item Ordered
											<span class="glyphicon glyphicon-info-sign"></span>
										</div>
									</th>
									<th class="text-center">
										<div data-toggle="tooltip" title="The number of reward points that were converted.">
											Points Converted
											<span class="glyphicon glyphicon-info-sign"></span>
										</div>
									</th>
									<th class="text-center">
										<div data-toggle="tooltip" title="The date the reward points were converted.">
											Date Converted
											<span class="glyphicon glyphicon-info-sign"></span>
										</div>
									</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($points_converted_data as $voucher_data): ?>
									<?php foreach ($voucher_data['reward_points'] as $points_row => $points_data): ?>
										<tr>
											<td>
											<?php if ($points_row == 0) { ?>
												<?php echo $voucher_data[$this->flexi_cart_admin->db_column('discounts', 'code')]; ?>
											<?php } else { ?>
												&nbsp;
											<?php } ?>
											</td>
											<td>
												<?php $order_number = $points_data[$this->flexi_cart_admin->db_column('reward_points', 'order_number')]; ?>
												<a href="<?php echo site_url('admin/order_details/'.$order_number) ?>">
													<?php echo $order_number; ?>
												</a>
											</td>
											<td>
												<?php echo $points_data[$this->flexi_cart_admin->db_column('reward_points', 'description')]; ?>
											</td>
											<td class="text-center">
												<?php echo $points_data[$this->flexi_cart_admin->db_column('reward_points_converted', 'points')]; ?>
											</td>
											<td class="text-center">
												<?php echo date('jS M Y' ,strtotime($points_data[$this->flexi_cart_admin->db_column('reward_points_converted', 'date')])); ?>
											</td>
										</tr>
									<?php endforeach ?>
								<?php endforeach ?>
							</tbody>
						</table>
					<?php endif ?>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						Reward Points History
					</div>
					<?php if (empty($points_awarded_data)): ?>
						<div class="alert alert-warning">
							There are no reward points available.
						</div>
					<?php else: ?>
						<table class="table table-flat table-striped" style="font-size:100%">
							<thead class="bg-primary">
								<tr>
									<th>
										<div data-toggle="tooltip" title="The Order # that the reward points were earnt from.">
											Order #
											<span class="glyphicon glyphicon-info-sign"></span>
										</div>
									</th>
									<th class="text-center">
										<div data-toggle="tooltip" title="The date that the order was placed.">
											Date Ordered
											<span class="glyphicon glyphicon-info-sign"></span>
										</div>
									</th>
									<th class="text-center">
										<div data-toggle="tooltip" title="The total reward points earnt from the item ordered.">
											Total Points
											<span class="glyphicon glyphicon-info-sign"></span>
										</div>
									</th>
									<th class="text-center">
										<div data-toggle="tooltip" title="The number of reward points that are 'pending' and 'active'.">
											Pending / Active Points
											<span class="glyphicon glyphicon-info-sign"></span>
										</div>
									</th>
									<th class="text-center">
										<div data-toggle="tooltip" title="The number of reward points that have been converted to vouchers and the number that have expired before being converted.">
											Converted / Expired Points
											<span class="glyphicon glyphicon-info-sign"></span>
										</div>
									</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($points_awarded_data as $row) { ?>
								<tr>
									<td>
										<?php $order_number = $row[$this->flexi_cart_admin->db_column('reward_points', 'order_number')]; ?>
										<a href="<?php echo site_url('admin/order_details/'.$order_number) ?>">
											<?php echo $order_number; ?>
										</a>
									</td>
									<td class="text-center">
										<?php echo date('jS M Y' ,strtotime($row[$this->flexi_cart_admin->db_column('reward_points', 'order_date')]));?>
									</td>
									<td class="text-center">
									<?php if ($row[$this->flexi_cart_admin->db_column('reward_points', 'row_points_cancelled')] > 0) { ?>
										<span class="tooltip_trigger" title="Points cancelled due to returned items : <?php echo $row[$this->flexi_cart_admin->db_column('reward_points', 'row_points_cancelled')]; ?>">
											<?php echo $row[$this->flexi_cart_admin->db_column('reward_points', 'row_points_total')]; ?> total
										</span>
									<?php 
										} else { 
											echo $row[$this->flexi_cart_admin->db_column('reward_points', 'row_points_total')].' total';
										} 
									?>
									</td>
									<td class="text-center">
										<?php echo $row[$this->flexi_cart_admin->db_column('reward_points', 'row_points_pending')]; ?> pending,<br/>								
									<?php if ($row[$this->flexi_cart_admin->db_column('reward_points', 'activate_date')]) { ?>
										<span class="tooltip_trigger" title="Active Since : <?php echo date('jS M Y' ,strtotime($row[$this->flexi_cart_admin->db_column('reward_points', 'activate_date')])); ?>">
											<?php echo $row[$this->flexi_cart_admin->db_column('reward_points', 'row_points_active')]; ?> active
										</span>
									<?php 
										} else { 
											echo $row[$this->flexi_cart_admin->db_column('reward_points', 'row_points_active')].' active';
										} 
									?>
									</td>
									<td class="text-center">
										<?php echo $row[$this->flexi_cart_admin->db_column('reward_points', 'row_points_converted')]; ?> converted,<br/>
									<?php if ($row[$this->flexi_cart_admin->db_column('reward_points', 'activate_date')]) { ?>
										<span class="tooltip_trigger" title="Expire Date : <?php echo date('jS M Y' ,strtotime($row[$this->flexi_cart_admin->db_column('reward_points', 'expire_date')])); ?>">
											<?php echo $row[$this->flexi_cart_admin->db_column('reward_points', 'row_points_expired')]; ?> expired
										</span>
									<?php 
										} else { 
											echo $row[$this->flexi_cart_admin->db_column('reward_points', 'row_points_active')].' active';
										} 
									?>
									</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>

	<div role="tabpanel" class="tab-pane" id="vouchers">
		<?php if (empty($voucher_data_array)): ?>
			<div class="lead text-muted">This user currently has no vouchers</div>
		<?php else: ?>
			<?php echo form_open(current_url()); ?>
				<table class="table table-flat table-striped">
					<thead class="bg-primary">
						<tr>
							<th> 
								<div data-toggle="tooltip" title="The code used to apply the reward voucher.">
									Voucher Code
									<span class="glyphicon glyphicon-info-sign"></span>
								</div>
							</th>
							<th class="text-center"> 
								<div data-toggle="tooltip" title="Indicates whether the reward voucher has been used or not.">
									Availability
									<span class="glyphicon glyphicon-info-sign"></span>
								</div>
							</th>
							<th class="text-center"> 
								<div data-toggle="tooltip" title="The currency value of the reward voucher.">
									Value
									<span class="glyphicon glyphicon-info-sign"></span>
								</div>
							</th>
							<th class="text-center"> 
								<div data-toggle="tooltip" title="The expiry date the voucher must be used by.">
									Expire Date
									<span class="glyphicon glyphicon-info-sign"></span>
								</div>
							</th>
							<th class="text-center"> 
								<div data-toggle="tooltip" title="If checked, the reward voucher will be set as 'active'.">
									Status
									<span class="glyphicon glyphicon-info-sign"></span>
								</div>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($voucher_data_array as $row) {
							$voucher_id = $row[$this->flexi_cart_admin->db_column('discounts', 'id')];
						?>
						<tr>
							<td>
								<input type="hidden" name="update[<?php echo $voucher_id; ?>][id]" value="<?php echo $row[$this->flexi_cart_admin->db_column('discounts', 'id')]?>"/>
								<?php echo $row[$this->flexi_cart_admin->db_column('discounts', 'code')]; ?>
							</td>
							<td class="text-center">
							<?php if ($row[$this->flexi_cart_admin->db_column('discounts', 'usage_limit')] > 0) { ?>
								Available
							<?php } else { ?>
								Used
							<?php } ?>
							</td>
							<td class="text-center">
								&pound;<?php echo $row[$this->flexi_cart_admin->db_column('discounts', 'value_discounted')]; ?>
							</td>
							<td class="text-center">
								<?php echo date('jS M Y', strtotime($row[$this->flexi_cart_admin->db_column('discounts', 'expire_date')])); ?>
							</td>
							<td class="text-center">
								<?php $status = (bool)$row[$this->flexi_cart_admin->db_column('discounts', 'status')]; ?>
								<input type="hidden" name="update[<?php echo $voucher_id; ?>][status]" value="0"/>
								<input type="checkbox" name="update[<?php echo $voucher_id; ?>][status]" value="1" <?php echo set_checkbox('update['.$voucher_id.'][status]','1', $status); ?>/>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>				
				
				<input type="submit" name="update_vouchers" value="Update Vouchers" class="btn btn-success"/>
			<?php echo form_close(); ?>
		<?php endif ?>
	</div>
</div>



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
<?php endif ?>

<?php $this->load->view('admin/templates/footer') ?>
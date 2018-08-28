<?php $this->load->view('public/templates/header', array(
	'title' => 'Dashboard',
	'link' => 'account',
	'breadcrumbs' => array(
		0 => array('name'=>'Dashboard','link'=>'user_dashboard'),
		1 => array('name'=>'Points and Vouchers','link'=>FALSE),
	)
)) ?>

<?php $this->load->view('public/dashboard/dashboard_header', array('active' => 'points')) ?>

<div class="lead page-header">My Reward Points and Vouchers</div>

<div class="row">
	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Convert Points to Vouchers
			</div>
			<?php if ($conversion_tiers): ?>
				<div class="panel-body">
					<?php echo form_open(current_url()); ?>
						<strong>
							<?php echo $reward_data[$this->flexi_cart_admin->db_column('reward_points','total_points_active')]; ?>
						</strong>
						total active reward points.
						
						<hr>

						<?php $max_conversion_points = $this->flexi_cart_admin->calculate_conversion_reward_points($reward_data[$this->flexi_cart_admin->db_column('reward_points','total_points_active')]); ?>
						<div class="form-group">
							<div class="form-inline">
								<label>
									Points to Convert:
									<span class="text-info glyphicon glyphicon-info-sign" data-toggle="collapse" data-target="#convert-info"></span>
								</label>
								<select name="reward_points" class="form-control input-sm" data-toggle="tooltip" title="Set the number of points that are to be converted to a reward voucher.">
									<?php foreach($conversion_tiers as $value) { ?>
										<option value="<?php echo $value; ?>" <?php echo set_select('reward_points', $value); ?>>
											<?php echo $value; ?>
										</option>
									<?php } ?>
								</select>
							</div>
							<small class="help-block collapse" id="convert-info">
								<?php foreach($conversion_tiers as $value) { ?>
									<option value="<?php echo $value; ?>" <?php echo set_select('reward_points', $value); ?>>
										<?php echo $value; ?> points worth &pound;<?php echo $this->flexi_cart_admin->calculate_reward_point_value($value); ?>
									</option>
								<?php } ?>
								Maximum available points are
								<?php echo $max_conversion_points; ?>,
								worth &pound;<?php echo $this->flexi_cart_admin->calculate_reward_point_value($max_conversion_points); ?>
							</small>
						</div>
							
						<input type="submit" name="convert_reward_points" value="Convert Points to Voucher" class="btn btn-block btn-info"/>
					<?php echo form_close(); ?>
				</div>
			<?php else: ?>
				<div class="alert alert-warning" style="margin:0">You do not have enough active reward points to convert to a voucher.</div>
			<?php endif ?>
		</div>
		<div class="panel panel-default panel-inverse">
			<div class="panel-heading">
				My Reward Points
			</div>
			<?php echo form_open(current_url()); ?>
				<table class="table table-striped" style="margin:0;font-size:100%">
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
		<div class="panel panel-primary">
			<div class="panel-heading">
				Vouchers
			</div>
			<?php if ($voucher_data_array): ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th class="">
								<div data-toggle="tooltip" title="The code used to apply the reward voucher.">
									Voucher Code
								</div>
							</th>
							<th class=" text-center">
								<div data-toggle="tooltip" title="Indicates whether the reward voucher has been used or not.">
									Availability
								</div>
							</th>
							<th class="text-center">
								<div data-toggle="tooltip" title="The currency value of the reward voucher.">
									Value
								</div>
							</th>
							<th class="text-center">
								<div data-toggle="tooltip" title="The expiry date the voucher must be used by.">
									Expire Date
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
						</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php else: ?>
				<div class="alert alert-warning" style="margin:0">You do not have any active vouchers.</div>
			<?php endif ?>
		</div>

		<div class="panel panel-default panel-inverse">
			<div class="panel-heading">
				Reward Points Converted
			</div>
			<div class="panel-body">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#converted-history" aria-controls="converted-history" role="tab" data-toggle="tab">
							Converted Points
						</a>
					</li>
					<li role="presentation">
						<a href="#points-history" aria-controls="points-history" role="tab" data-toggle="tab">
							Reward Points History
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="converted-history">
						<?php if (empty($points_converted_data)): ?>
							<div class="alert alert-warning" style="margin-top:20px;margin-bottom:0px;">
								There are no reward points conversions available.
							</div>
						<?php else: ?>
							<table class="table table-striped" style="margin:0;font-size:100%">
								<thead class="text-muted">
									<tr>
										<th>
											<div data-toggle="tooltip" title="The reward voucher code.">
												Voucher Code
											</div>
										</th>
										<th>
											<div data-toggle="tooltip" title="The Order # that the reward points were earnt and converted from.">
												Order #
											</div>
										</th>
										<th>
											<div data-toggle="tooltip" title="The specific item that the reward points were earnt and converted from.">
												Item Ordered
											</div>
										</th>
										<th class="text-center">
											<div data-toggle="tooltip" title="The number of reward points that were converted.">
												Points Converted
											</div>
										</th>
										<th class="text-center">
											<div data-toggle="tooltip" title="The date the reward points were converted.">
												Date Converted
											</div>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($points_converted_data as $voucher_data): ?>
										<?php foreach ($voucher_data['reward_points'] as $points_row => $points_data): ?>
											<tr <?php echo ($points_row == 0) ? 'style="border-top:3px double #666;"' : NULL;?>>
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
					<div role="tabpanel" class="tab-pane" id="points-history">
						<?php if (empty($points_awarded_data)): ?>
							<div class="alert alert-warning" style="margin-top:20px;margin-bottom:0px;">
								There are no reward points available.
							</div>
						<?php else: ?>
							<table class="table table-striped" style="margin:0;font-size:100%">
								<thead class="text-muted">
									<tr>
										<th>
											<div data-toggle="tooltip" title="The Order # that the reward points were earnt from.">
												Order #
											</div>
										</th>
										<th class="text-center">
											<div data-toggle="tooltip" title="The date that the order was placed.">
												Date Ordered
											</div>
										</th>
										<th class="text-center">
											<div data-toggle="tooltip" title="The total reward points earnt from the item ordered.">
												Total Points
											</div>
										</th>
										<th class="text-center">
											<div data-toggle="tooltip" title="The number of reward points that are 'pending' and 'active'.">
												Pending / Active Points
											</div>
										</th>
										<th class="text-center">
											<div data-toggle="tooltip" title="The number of reward points that have been converted to vouchers and the number that have expired before being converted.">
												Converted / Expired Points
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
	</div>
</div>

<?php $this->load->view('public/templates/footer') ?>
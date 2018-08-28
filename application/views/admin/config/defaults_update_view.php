<?php $this->load->view('admin/templates/header', array(
	'title' => 'Cart Defaults',
	'link' => 'settings',
	'sub_link' => 'defaults',
	'breadcrumbs' => array(
		0 => array('name'=>'Settings','link'=>'config'),
		1 => array('name'=>'Cart Defaults','link'=>FALSE),
	)
)); ?>

<?php $this->load->view('admin/config/config_sub_header'); ?>

<div class="page-header">
	<h4 class="lead">Cart Defaults</h4>
	<p>The default values selected will be the options and values that are defined when a user first visits the site.</p>
</div>

<?php if (! empty($message)): ?>
	<?php if (validation_errors()): ?>
		<div class="alert alert-danger">Check the form for errors and try again.</div>
	<?php else: ?>
		<div id="message"><?= $message; ?></div>
	<?php endif ?>
<?php endif ?>

<?php echo form_open(current_url());?>
	<div class="panel panel-default panel-inverse">
		<div class="panel-heading">
			<h4 class="panel-title">Currency</h4>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="currency" class="control-label">Default Currency</label>
				<select id="currency" name="update[currency]" class="form-control">
					<option value="0"> - Select Default Currency - </option>
					<?php 
					foreach($currency_data as $currency) { 
						$id = $currency[$this->flexi_cart_admin->db_column('currency', 'id')];
						$default = $default_currency[$this->flexi_cart_admin->db_column('currency', 'id')];
					?>
					<option value="<?php echo $id; ?>" <?php echo set_select('update[currency]', $id, ($default == $id)); ?>>
						<?php echo $currency[$this->flexi_cart_admin->db_column('currency', 'name')]; ?>
					</option>
					<?php } ?>
				</select>
				<p class="text-muted">Defines the default currency that prices are displayed in when a user first visits the site.</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Shipping</h4>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="shipping_location">Default Shipping Location</label>
						<select id="shipping_location" name="update[shipping_location]" class="form-control">
							<option value="0"> - Select Default Shipping Location - </option>
							<?php 
							foreach($locations_inline as $location) { 
								$id = $location[$this->flexi_cart_admin->db_column('locations', 'id')];
								$default = $default_ship_location[$this->flexi_cart_admin->db_column('locations', 'id')];
							?>
							<option value="<?php echo $id; ?>" <?php echo set_select('update[shipping_location]', $id, ($default == $id)); ?>>
								<?php echo $location[$this->flexi_cart_admin->db_column('locations', 'name')]; ?>
							</option>
							<?php } ?>
						</select>
						<p class="text-muted">Set the default location that shipping options and rates are displayed for.</p>
					</div>
					<div class="form-group">
						<label for="shipping_option">Default Shipping Option</label>
						<select id="shipping_option" name="update[shipping_option]" class="form-control">
							<option value="0"> - Select Default Shipping Option - </option>
							<?php 
							foreach($shipping_data as $option) { 
								$id = $option[$this->flexi_cart_admin->db_column('shipping_options', 'id')];
								$default = $default_ship_option[$this->flexi_cart_admin->db_column('shipping_options', 'id')];
							?>
							<option value="<?php echo $id; ?>" <?php echo set_select('update[shipping_option]', $id, ($default == $id)); ?>>
								<?php echo $option[$this->flexi_cart_admin->db_column('shipping_options', 'name')]; ?>
							</option>
							<?php } ?>
						</select>
						<p class="text-muted">Set the default shipping option that is displayed.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-default panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Tax</h4>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="tax_location">Default Tax Location</label>
						<select id="tax_location" name="update[tax_location]" class="form-control">
							<option value="0"> - Select Default Tax Location - </option>
							<?php 
							foreach($locations_inline as $location) { 
								$id = $location[$this->flexi_cart_admin->db_column('locations', 'id')];
								$default = $default_tax_location[$this->flexi_cart_admin->db_column('locations', 'id')];
							?>
							<option value="<?php echo $id; ?>" <?php echo set_select('update[tax_location]', $id, ($default == $id)); ?>>
								<?php echo $location[$this->flexi_cart_admin->db_column('locations', 'name')]; ?>
							</option>
							<?php } ?>
						</select>
						<p class="text-muted">Set the default location that the cart tax rate is based on.</p>
					</div>
					<div class="form-group">
						<label for="tax_rate">Default Tax Rate</label>
						<select id="tax_rate" name="update[tax_rate]" class="form-control">
							<option value="0"> - Select Default Tax Rate - </option>
							<?php 
							foreach($tax_data as $tax_rate) { 
								$id = $tax_rate[$this->flexi_cart_admin->db_column('tax', 'id')];
								$default = $default_tax_rate[$this->flexi_cart_admin->db_column('tax', 'id')];								
							?>
							<option value="<?php echo $id; ?>" <?php echo set_select('update[tax_rate]', $id, ($default == $id)); ?>>
								<?php echo $tax_rate[$this->flexi_cart_admin->db_column('tax', 'name')]; ?>
							</option>
							<?php } ?>
						</select>
						<p class="text-muted">Select the default tax rate that is displayed.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


		
		
	
	<div class="form-group">
		<input type="submit" name="update_defaults" value="Update Cart Defaults" class="btn btn-lg btn-primary"/>
	</div>
<?php echo form_close(); ?>
	
<?php $this->load->view('admin/templates/footer'); ?>
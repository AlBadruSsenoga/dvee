<?php $this->load->view('admin/templates/header', array(
	'title' => 'Discounts',
	'link' => 'discounts',
	'sub_link' => 'add',
	'breadcrumbs' => array(
		0 => array('name'=>'Discounts','link'=>'item_discounts'),
		1 => array('name'=>'Insert New Discount','link'=>FALSE)
	)
)); ?>

<?php $this->load->view('admin/discounts/discounts_sub_header', array(
	'active' => 'insert'
)); ?>

<div class="page-header">
	<h4 class="lead">
		Insert New Discount
		<span class="glyphicon glyphicon-info-sign text-info" style="margin-left:1rem" data-toggle="collapse" data-target="#discount-info"></span>
	</h4>
	<div id="discount-info" class="collapse">
		<p>Discounts can be setup with a wide range of rule conditions that can then be applied to specific items, groups of items or across the entire cart.</p>
		<p>Discount activation rules can be set to check the value and quantity of items in the cart, a customers location and up to three custom statuses within the cart. For example whether a customer has logged in, or is regarded as a new customer.</p>
		<p>Other options include activation and expiry dates, usage limits, voiding of reward points and whether discounts can be combined with other discounts.</p>
		<p>To comply with tax laws in different countries and states, the method of calculating tax on discounted items can be set using one of three methods.</p>
	</div>
</div>
			
<?php if (! empty($message)): ?>
	<?php if (validation_errors()): ?>
		<div class="alert alert-danger">Check the form for errors and try again.</div>
	<?php else: ?>
		<div id="message"><?= $message; ?></div>
	<?php endif ?>
<?php endif ?>
										
<?php echo form_open(current_url()); ?>
	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Type / Location</div>
		<div class="row">
			<div class="col-md-4 form-group <?php echo (form_error('insert[type]')) ? 'has-error' : '' ?>">
				<label for="discount_type" class="control-label">
					Discount Type:
					<span class="glyphicon glyphicon-asterisk text-danger" title="required"></span>
				</label>
				<select id="discount_type" name="insert[type]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Sets whether the discount is an item or summary discount, or a reward voucher."
				>
					<option value="0"> - Select Discount Type - </option>
					<?php foreach($discount_types as $type): $id = $type[$this->flexi_cart_admin->db_column('discount_types', 'id')]; ?>
					<option value="<?php echo $id; ?>" <?php echo set_select('insert[type]', $id); ?>>
						<?php echo $type[$this->flexi_cart_admin->db_column('discount_types', 'type')];?>
					</option>
					<?php endforeach ?>
				</select>
				<?php echo form_error('insert[type]')?form_error('insert[type]'):'&nbsp' ?>
			</div>
			<div class="col-md-4 form-group <?php echo (form_error('insert[method]')) ? 'has-error' : '' ?>">
				<label for="discount_method" class="control-label">
					Discount Method:
					<span class="glyphicon glyphicon-asterisk text-danger" title="required"></span>
				</label>
				<select id="discount_method" name="insert[method]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set which cart value to apply the discount to."
				>
					<option value="0" class="parent_id_0"> - Select Discount Method - </option>
					<?php foreach($discount_methods as $method): $id = $method[$this->flexi_cart_admin->db_column('discount_methods', 'id')]; ?>
					<option value="<?php echo $id; ?>" class="parent_id_<?php echo $method[$this->flexi_cart_admin->db_column('discount_methods', 'type')];?>" <?php echo set_select('insert[method]', $id); ?>>
						<?php echo $method[$this->flexi_cart_admin->db_column('discount_methods', 'method')];?>
					</option>
					<?php endforeach ?>
				</select>
				<?php echo form_error('insert[method]')?form_error('insert[method]'):'&nbsp' ?>
			</div>
			<div class="col-md-4 form-group <?php echo (form_error('insert[tax_method]')) ? 'has-error' : '' ?>">
				<label for="discount_tax_method" class="control-label">Tax Appliance Method:</label>
				<select id="discount_tax_method" name="insert[tax_method]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set how tax should be applied to the discount."
				>
					<option value="0"> - Select Tax Method - </option>
					<option value="0">Carts Default Tax Method</option>
					<?php foreach($discount_tax_methods as $tax_method): $id = $tax_method[$this->flexi_cart_admin->db_column('discount_tax_methods', 'id')]; ?>
					<option value="<?php echo $id; ?>" <?php echo set_select('insert[tax_method]', $id); ?>>
						<?php echo $tax_method[$this->flexi_cart_admin->db_column('discount_tax_methods', 'method')];?>
					</option>
					<?php endforeach ?>
				</select>
				<?php echo form_error('insert[tax_method]')?form_error('insert[tax_method]'):'&nbsp' ?>
			</div>
			<div class="col-md-4 form-group<?php echo (form_error('insert[location]')) ? 'has-error' : '' ?>">
				<label for="discount_location" class="control-label">Location:</label>
				<select id="discount_location" name="insert[location]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the location that the discount is applied to."
				>
					<option value="0"> - All Locations - </option>
					<?php foreach($locations_inline as $location): $id = $location[$this->flexi_cart_admin->db_column('locations', 'id')]; ?>
					<option value="<?php echo $id; ?>" <?php echo set_select('insert[location]', $id); ?>>
						<?php echo $location[$this->flexi_cart_admin->db_column('locations', 'name')];?>
					</option>
					<?php endforeach ?>
				</select>
				<?php echo form_error('insert[location]')?form_error('insert[location]'):'&nbsp' ?>
			</div>
			<div class="col-md-4 form-group <?php echo (form_error('insert[zone]')) ? 'has-error' : '' ?>">
				<label for="discount_zone" class="control-label">Zone:</label>
				<select id="discount_zone" name="insert[zone]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the zone that the discount is applied to. NOTE: If a location is set, it has priority over a zone rule."
				>
					<option value="0"> - All Zones - </option>
					<?php foreach($zones as $zone): $id = $zone[$this->flexi_cart_admin->db_column('location_zones', 'id')]; ?>
					<option value="<?php echo $id; ?>" <?php echo set_select('insert[zone]', $id); ?>>
						<?php echo $zone[$this->flexi_cart_admin->db_column('location_zones', 'name')];?>
					</option>
					<?php endforeach ?>
				</select>
				<?php echo form_error('insert[zone]')?form_error('insert[zone]'):'&nbsp' ?>
			</div>
		</div>
	</div>
		
	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Target Group / Item</div>
		<div class="row">
			<div class="col-md-6 form-group <?php echo (form_error('insert[group]')) ? 'has-error' : '' ?>">
				<label for="discount_group" class="control-label">Apply Discount to Group:</label>
				<select id="discount_group" name="insert[group]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the discount to apply if an item in a particular discount group is added to the cart."
				>
					<option value="0"> - Not applied to a Group - </option>
				<?php 
					foreach($discount_groups as $group) { 
						$id = $group[$this->flexi_cart_admin->db_column('discount_groups', 'id')];
				?>
					<option value="<?php echo $id; ?>" <?php echo set_select('insert[group]', $id); ?>>
						<?php echo $group[$this->flexi_cart_admin->db_column('discount_groups', 'name')];?>
					</option>
				<?php } ?>
				</select>
				<?php echo form_error('insert[group]')?form_error('insert[group]'):'&nbsp' ?>
			</div>
			<div class="col-md-6 form-group <?php echo (form_error('insert[item]')) ? 'has-error' : '' ?>">
				<label for="discount_item" class="control-label">Apply Discount to Item:</label>
				<select id="discount_item" name="insert[item]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the discount to apply if a particular item is added to the cart."
				>
					<option value="0"> - Not applied to an Item - </option>	
				<?php foreach($items as $item) {?>
					<option value="<?php echo $item['item_id']; ?>" <?php echo set_select('insert[item]', $item['item_id']); ?>>
						<?php echo $item['item_name'];?>
					</option>
				<?php } ?>
				</select>
				<?php echo form_error('insert[item]')?form_error('insert[item]'):'&nbsp' ?>
			</div>
		</div>
	</div>
		
	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Code / Description</div>						
		<div class="row">
			<div class="col-md-4 form-group <?php echo (form_error('insert[code]')) ? 'has-error' : '' ?>">
				<label for="discount_code" class="control-label">Code:</label>
				<input type="text" id="discount_code" name="insert[code]" value="<?php echo set_value('insert[code]');?>" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the code required to apply the discount. Leave blank if the discount is activated via item quantities or values."
				/>
				<?php echo form_error('insert[code]')?form_error('insert[code]'):'&nbsp' ?>
			</div>
			<div class="col-md-8 form-group <?php echo (form_error('insert[description]')) ? 'has-error' : '' ?>">
				<label for="discount_desc" class="control-label">Description:</label>
				<textarea id="discount_desc" name="insert[description]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="A short description of the discount that is displayed to the customer."
				><?php echo set_value('insert[description]');?></textarea>
				<?php echo form_error('insert[description]')?form_error('insert[description]'):'&nbsp' ?>
			</div>
		</div>
	</div>
		
	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Requirements / Discount</div>
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 form-group <?php echo (form_error('insert[quantity_required]')) ? 'has-error' : '' ?>">
						<label class="control-label" for="discount_qty_req">Quantity Required to Activate:</label>
						<input type="text" id="discount_qty_req" name="insert[quantity_required]" value="<?php echo set_value('insert[quantity_required]');?>" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the quantity of items required to activate the discount. For example, for a 'buy 5 get 2 free' discount, the quantity would be 7 (5+2)."
						/>
						<?php echo form_error('insert[quantity_required]')?form_error('insert[quantity_required]'):'&nbsp' ?>
					</div>
					<div class="col-md-6 form-group <?php echo (form_error('insert[quantity_discounted]')) ? 'has-error' : '' ?>">
						<label class="control-label" for="discount_qty_disc">Discount Quantity:</label>
						<input type="text" id="discount_qty_disc" name="insert[quantity_discounted]" value="<?php echo set_value('insert[quantity_discounted]');?>" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the quantity of items that the discount is applied to. For example, for a 'buy 5 get 2 free' discount, the quantity would be 2."
						/>
						<?php echo form_error('insert[quantity_discounted]')?form_error('insert[quantity_discounted]'):'&nbsp' ?>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 form-group <?php echo (form_error('insert[value_required]')) ? 'has-error' : '' ?>">
						<label class="control-label" for="discount_value_req">Value Required to Activate:</label>
						<input type="text" id="discount_value_req" name="insert[value_required]" value="<?php echo set_value('insert[value_required]');?>" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the value required to active the discount. For item discounts, the value is the total value of the discountable items. For summary discounts, the value is the cart total."
						/>
						<?php echo form_error('insert[value_required]')?form_error('insert[value_required]'):'&nbsp' ?>
					</div>
					<div class="col-md-6 form-group <?php echo (form_error('insert[value_discounted]')) ? 'has-error' : '' ?>">
						<label class="control-label" for="discount_value_disc">Discount Value:</label>
						<input type="text" id="discount_value_disc" name="insert[value_discounted]" value="<?php echo set_value('insert[value_discounted]');?>" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the value of the discount that is applied. For percentage discounts, this value is used as the discount percentage. For 'flat fee' and 'new value' discounts, this is the discounted currency value."
						/>
						<?php echo form_error('insert[value_discounted]')?form_error('insert[value_discounted]'):'&nbsp' ?>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Functionality</div>
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 form-group <?php echo (form_error('insert[recursive]')) ? 'has-error' : '' ?>">
						<label for="discount_recursive">Discount Recursive:</label>
						<input type="hidden" name="insert[recursive]" value="0"/>
						<input type="checkbox" id="discount_recursive" name="insert[recursive]" value="1" <?php echo set_checkbox('insert[recursive]', '1'); ?> data-toggle="tooltip" data-placement="bottom" title="If checked, the discount can be repeated multiples times to the same cart. For example, if checked, a 'Buy 1, get 1 free' discount can be reapplied if 2, 4, 6 (etc) items are added to the cart.<br/> If not checked, the discount is only applied for the first 2 items."
						/>
						<?php echo form_error('insert[recursive]')?form_error('insert[recursive]'):'&nbsp' ?>
					</div>
					<div class="col-md-6 form-group <?php echo (form_error('insert[non_combinable]')) ? 'has-error' : '' ?>">
						<label for="discount_non_combinable">Non Combinable Discount:</label>
						<input type="hidden" name="insert[non_combinable]" value="0"/>
						<input type="checkbox" id="discount_non_combinable" name="insert[non_combinable]" value="1" <?php echo set_checkbox('insert[non_combinable]', '1'); ?> data-toggle="tooltip" data-placement="bottom" title="If checked, the discount cannot be and combined and used with any other discounts or reward vouchers."
						/>
						<?php echo form_error('insert[non_combinable]')?form_error('insert[non_combinable]'):'&nbsp' ?>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 form-group <?php echo (form_error('insert[void_reward]')) ? 'has-error' : '' ?>">
						<label for="discount_void_reward">Void Reward Points:</label>
						<input type="hidden" name="insert[void_reward]" value="0"/>
						<input type="checkbox" id="discount_void_reward" name="insert[void_reward]" value="1" <?php echo set_checkbox('insert[void_reward]', '1'); ?> data-toggle="tooltip" data-placement="bottom" title="If checked, any reward points earnt from items within the cart will be reset to zero whilst the discount is used."
						/>
						<?php echo form_error('insert[void_reward]')?form_error('insert[void_reward]'):'&nbsp' ?>
					</div>
					<div class="col-md-6 form-group <?php echo (form_error('insert[force_shipping]')) ? 'has-error' : '' ?>">
						<label for="discount_force_shipping">Force Shipping Discount:</label>
						<input type="hidden" name="insert[force_shipping]" value="0"/>
						<input type="checkbox" id="discount_force_shipping" name="insert[force_shipping]" value="1" <?php echo set_checkbox('insert[force_shipping]','1'); ?> data-toggle="tooltip" data-placement="bottom" title="If checked, the discount value will be 'forced' on the carts shipping option calculations, even if the selected shipping option has not been set as being discountable."
						/>
						<?php echo form_error('insert[force_shipping]')?form_error('insert[force_shipping]'):'&nbsp' ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Custom Cart Statuses</div>						
		<p>
			<small>
				Three individual custom cart statuses can be set to affect whether discounts become active.<br/>
				The custom statuses can contain any string or integer values, if the value then matches the the custom status of a discount, then provided all other discount conditions are also matched, the discount is activated.
			</small>
			<small>
				For example, a custom status could check whether a user is logged in, by default it is set to false (0), when a user then logs in, the status could be set to true (1) which would then enable the discount.
			</small>
		</p>
		<div class="row">
			<div class="col-md-4 form-group <?php echo (form_error('insert[custom_status_1]')) ? 'has-error' : '' ?>">
				<label for="discount_custom_status_1">Custom Status #1:</label>
				<input type="text" id="discount_custom_status_1" name="insert[custom_status_1]" value="<?php echo set_value('insert[custom_status_1]'); ?>" class="form-control"/>
				<?php echo form_error('insert[custom_status_1]')?form_error('insert[custom_status_1]'):'&nbsp' ?>
			</div>
			<div class="col-md-4 form-group <?php echo (form_error('insert[custom_status_2]')) ? 'has-error' : '' ?>">
				<label for="discount_custom_status_2">Custom Status #2:</label>
				<input type="text" id="discount_custom_status_2" name="insert[custom_status_2]" value="<?php echo set_value('insert[custom_status_2]'); ?>" class="form-control"/>
				<?php echo form_error('insert[custom_status_2]')?form_error('insert[custom_status_2]'):'&nbsp' ?>
			</div>
			<div class="col-md-4 form-group <?php echo (form_error('insert[custom_status_3]')) ? 'has-error' : '' ?>">
				<label for="discount_custom_status_3">Custom Status #3:</label>
				<input type="text" id="discount_custom_status_3" name="insert[custom_status_3]" value="<?php echo set_value('insert[custom_status_3]'); ?>" class="form-control"/>
				<?php echo form_error('insert[custom_status_3]')?form_error('insert[custom_status_3]'):'&nbsp' ?>
			</div>
		</div>
	</div>
		
	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Usage Status / Validity</div>
		<div class="row">
			<div class="col-md-8">			
				<div class="row">
					<div class="col-md-4 form-group <?php echo (form_error('insert[usage_limit]')) ? 'has-error' : '' ?>">
						<label for="discount_usage_limit">
							Usage Limit:
							<span class="glyphicon glyphicon-asterisk text-danger" title="required"></span>
						</label>
						<input type="text" id="discount_usage_limit" name="insert[usage_limit]" value="<?php echo set_value('insert[usage_limit]');?>" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the number of times remaining that the discount can be used."
						/>
						<?php echo form_error('insert[usage_limit]')?form_error('insert[usage_limit]'):'&nbsp' ?>
					</div>
					<div class="col-md-4 form-group <?php echo (form_error('insert[valid_date]')) ? 'has-error' : '' ?>">
						<label for="discount_valid_date">
							Valid Date (yyyy-mm-dd):
							<span class="glyphicon glyphicon-asterisk text-danger" title="required"></span>
						</label>
						<input type="text" id="discount_valid_date" name="insert[valid_date]" value="<?php echo set_value('insert[valid_date]', date('Y-m-d'));?>" maxlength="10" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the start date that the discount is valid from."
						/>
						<?php echo form_error('insert[valid_date]')?form_error('insert[valid_date]'):'&nbsp' ?>
					</div>
					<div class="col-md-4 form-group <?php echo (form_error('insert[expire_date]')) ? 'has-error' : '' ?>">
						<label for="discount_expire_date">
							Expire Date (yyyy-mm-dd):
							<span class="glyphicon glyphicon-asterisk text-danger" title="required"></span>
						</label>
						<input type="text" id="discount_expire_date" name="insert[expire_date]" value="<?php echo set_value('insert[expire_date]', date('Y-m-d', strtotime('3 Month')));?>" maxlength="10" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the expiry date that the discount is valid until."
						/>
						<?php echo form_error('insert[expire_date]')?form_error('insert[expire_date]'):'&nbsp' ?>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="row">
					<div class="col-md-8 form-group <?php echo (form_error('insert[status]')) ? 'has-error' : '' ?>">
						<label for="discount_status">Active Status:</label>
						<input type="hidden" name="insert[status]" value="0"/>
						<input type="checkbox" id="discount_status" name="insert[status]" value="1" <?php echo set_checkbox('insert[status]', '1', TRUE); ?> data-toggle="tooltip" data-placement="bottom" title="If checked, the discount will be set as 'active'."
						/>
						<?php echo form_error('insert[status]')?form_error('insert[status]'):'&nbsp' ?>
					</div>
					<div class="col-md-4 form-group <?php echo (form_error('insert[order_by]')) ? 'has-error' : '' ?>">
						<label for="discount_order_by">Order By:</label>
						<input type="number" id="discount_order_by" name="insert[order_by]" value="<?php echo set_value('insert[order_by]');?>" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the order that the discount is applied to the cart if other discounts are active. The lower the number, the higher priority."
						/>
						<?php echo form_error('insert[order_by]')?form_error('insert[order_by]'):'&nbsp' ?>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<input type="submit" name="insert_discount" value="Insert Discount" class="btn btn-primary"/>
<?php echo form_close();?>						

<?php $this->load->view('admin/templates/footer'); ?>
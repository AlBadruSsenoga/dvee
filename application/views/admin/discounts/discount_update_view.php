<?php $this->load->view('admin/templates/header', array(
	'title' => 'Discounts',
	'link' => 'discounts',
	'sub_link' => 'update',
	'breadcrumbs' => array(
		0 => array('name'=>'Discounts','link'=>'item_discounts'),
		1 => array('name'=>'Update Discount','link'=>FALSE)
	)
)); ?>

<?php $this->load->view('admin/discounts/discounts_sub_header', array(
	'active' => 'items'
)); ?>
	
<div class="page-header">
	<h4 class="lead">Update Discount</h4>
</div>
	
<?php if (validation_errors()): ?>
		<div class="alert alert-danger">Check the form for errors and try again.</div>
<?php else: ?>
	<?php if (! empty($message)): ?>
		<div id="message"> <?=$message ?> </div>
	<?php endif ?>
<?php endif ?>

<?php echo form_open(current_url());?>
	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Type / Location</div>
		<div class="row">
			<div class="col-md-4 form-group <?php echo (form_error('update[type]')) ? 'has-error' : '' ?>">
				<label for="discount_type" class="control-label">
					Discount Type:
					<span class="glyphicon glyphicon-asterisk text-danger"></span>
				</label>
				<select id="discount_type" name="update[type]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Sets whether the discount is an item or summary discount, or a reward voucher."
				>
					<option value="0"> - Select Discount Type - </option>
				<?php 
					foreach($discount_types as $type) { 
						$id = $type[$this->flexi_cart_admin->db_column('discount_types', 'id')];
						$select_type = ($discount_data[$this->flexi_cart_admin->db_column('discounts', 'type')] == $id);
				?>
					<option value="<?php echo $id;?>" <?php echo set_select('update[type]', $id, $select_type);?>>
						<?php echo $type[$this->flexi_cart_admin->db_column('discount_types', 'type')];?>
					</option>
				<?php } ?>
				</select>
				<?php echo form_error('update[type]')?form_error('update[type]'):'&nbsp' ?>
			</div>
			<div class="col-md-4 form-group <?php echo (form_error('update[method]')) ? 'has-error' : '' ?>">
				<label for="discount_method" class="control-label">
					Discount Method:
					<span class="glyphicon glyphicon-asterisk text-danger"></span>
				</label>
				<select id="discount_method" name="update[method]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set which cart value to apply the discount to."
				>
					<option value="0" class="parent_id_0"> - Select Discount Method - </option>
				<?php 
					foreach($discount_methods as $method) { 
						$id = $method[$this->flexi_cart_admin->db_column('discount_methods', 'id')];
						$select_method = ($discount_data[$this->flexi_cart_admin->db_column('discounts', 'method')] == $id);
				?>
					<option value="<?php echo $id;?>" class="parent_id_<?php echo $method[$this->flexi_cart_admin->db_column('discount_methods', 'type')];?>" <?php echo set_select('update[method]', $id, $select_method);?>>
						<?php echo $method[$this->flexi_cart_admin->db_column('discount_methods', 'method')];?>
					</option>
				<?php } ?>
				</select>
				<?php echo form_error('update[method]')?form_error('update[method]'):'&nbsp' ?>
			</div>
			<div class="col-md-4 form-group <?php echo (form_error('update[tax_method]')) ? 'has-error' : '' ?>">
				<label for="discount_tax_method" class="control-label">Tax Application Method:</label>
				<select id="discount_tax_method" name="update[tax_method]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set how tax should be applied to the discount."
				>
					<option value="0"> - Select Tax Method - </option>
					<option value="0">Carts default Tax Method</option>
				<?php 
					foreach($discount_tax_methods as $tax_method) { 
						$id = $tax_method[$this->flexi_cart_admin->db_column('discount_tax_methods', 'id')];
						$select_tax_method = ($discount_data[$this->flexi_cart_admin->db_column('discounts', 'tax_method')] == $id);
				?>
					<option value="<?php echo $id;?>" <?php echo set_select('update[tax_method]', $id, $select_tax_method);?>>
						<?php echo $tax_method[$this->flexi_cart_admin->db_column('discount_tax_methods', 'method')];?>
					</option>
				<?php } ?>
				</select>
				<?php echo form_error('update[tax_method]')?form_error('update[tax_method]'):'&nbsp' ?>
			</div>
			<div class="col-md-4 form-group <?php echo (form_error('update[location]')) ? 'has-error' : '' ?>">
				<label for="discount_location" class="control-label">Location:</label>
				<select id="discount_location" name="update[location]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the location that the discount is applied to."
				>
					<option value="0"> - All Locations - </option>
				<?php 
					foreach($locations_indivne as $location) { 
						$id = $location[$this->flexi_cart_admin->db_column('locations', 'id')];
						$select_location = ($discount_data[$this->flexi_cart_admin->db_column('discounts', 'location')] == $id);
				?>
					<option value="<?php echo $id;?>" <?php echo set_select('update[location]', $id, $select_location);?>>
						<?php echo $location[$this->flexi_cart_admin->db_column('locations', 'name')];?>
					</option>
				<?php } ?>
				</select>
				<?php echo form_error('update[location]')?form_error('update[location]'):'&nbsp' ?>
			</div>
			<div class="col-md-4 form-group <?php echo (form_error('update[zone]')) ? 'has-error' : '' ?>">
				<label for="discount_zone" class="control-label">Zone:</label>
				<select id="discount_zone" name="update[zone]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the zone that the discount is applied to. Note: If a location is set, it has priority over a zone rdive."
				>
					<option value="0"> - All Zones - </option>
				<?php 
					foreach($zones as $zone) { 
						$id = $zone[$this->flexi_cart_admin->db_column('location_zones', 'id')];
						$select_zone = ($discount_data[$this->flexi_cart_admin->db_column('discounts', 'zone')] == $id);
				?>
					<option value="<?php echo $id;?>" <?php echo set_select('update[zone]', $id, $select_zone);?>>
						<?php echo $zone[$this->flexi_cart_admin->db_column('location_zones', 'name')];?>
					</option>
				<?php } ?>
				</select>
				<?php echo form_error('update[zone]')?form_error('update[zone]'):'&nbsp' ?>
			</div>
		</div>
	</div>
		
	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Target Group / Item</div>
		<div class="row">
			<div class="col-md-4 form-group <?php echo (form_error('update[group]')) ? 'has-error' : '' ?>">
				<label for="discount_group">Apply Discount to Group:</label>
				<select id="discount_group" name="update[group]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the discount to apply if an item in a particular discount group is added to the cart."
				>
					<option value="0"> - Not applied to a Group - </option>
				<?php 
					foreach($discount_groups as $group) { 
						$id = $group[$this->flexi_cart_admin->db_column('discount_groups', 'id')];
						$select_group = ($discount_data[$this->flexi_cart_admin->db_column('discounts', 'group')] == $id);
				?>
					<option value="<?php echo $id;?>" <?php echo set_select('update[group]', $id, $select_group);?>>
						<?php echo $group[$this->flexi_cart_admin->db_column('discount_groups', 'name')];?>
					</option>
				<?php } ?>
				</select>
				<?php echo form_error('update[group]')?form_error('update[group]'):'&nbsp' ?>
			</div>
			<div class="col-md-4 form-group <?php echo (form_error('update[item]')) ? 'has-error' : '' ?>">
				<label for="discount_item">Apply Discount to Item:</label>
				<select id="discount_item" name="update[item]" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the discount to apply if a particular item is added to the cart."
				>
					<option value="0"> - Not applied to an Item - </option>	
				<?php 
					foreach($items as $item) { 
						$id = $item['item_id'];
						$select_item = ($discount_data[$this->flexi_cart_admin->db_column('discounts', 'item')] == $id);
				?>
					<option value="<?php echo $id;?>" <?php echo set_select('update[item]', $id, $select_item);?>>
						<?php echo $item['item_name'];?>
					</option>
				<?php } ?>
				</select>
				<?php echo form_error('update[item]')?form_error('update[item]'):'&nbsp' ?>
			</div>
		</div>
	</div>
		
	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Code / Description</div>
		<div class="row">						
			<div class="col-md-4 form-group <?php echo (form_error('update[code]')) ? 'has-error' : '' ?>">
				<label for="discount_code" class="control-label">Discount Code:</label>
				<input type="text" id="discount_code" name="update[code]" value="<?php echo set_value('update[code]', $discount_data[$this->flexi_cart_admin->db_column('discounts', 'code')]);?>"
				class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the code required to apply the discount. Leave blank if the discount is activated via item quantities or values."
				/>
				<?php echo form_error('update[code]')?form_error('update[code]'):'&nbsp' ?>
			</div>
			<div class="col-md-4 form-group <?php echo (form_error('update[description]')) ? 'has-error' : '' ?>">
				<label for="discount_description" class="control-label">Discount Description:</label>
				<textarea id="discount_description" name="update[description]"
				class="form-control" data-toggle="tooltip" data-placement="bottom" title="A short description of the discount that is displayed to the customer."
				><?php echo set_value('update[description]', $discount_data[$this->flexi_cart_admin->db_column('discounts', 'description')]);?></textarea>
				<?php echo form_error('update[description]')?form_error('update[description]'):'&nbsp' ?>
			</div>
		</div>
	</div>
		
	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Requirements / Discount</div>
		<div class="row">						
			<div class="col-md-3 form-group <?php echo (form_error('update[quantity_required]')) ? 'has-error' : '' ?>">
				<label for="discount_quantity_required">Quantity Required to Activate:</label>
				<input type="text" id="discount_quantity_required" name="update[quantity_required]" value="<?php echo set_value('update[quantity_required]', $discount_data[$this->flexi_cart_admin->db_column('discounts', 'quantity_required')]);?>" class="form-control" 
					title="Set the quantity of items required to activate the discount. For example, for a 'buy 5 get 2 free' discount, the quantity would be 7 (5+2)."
				/>
				<?php echo form_error('update[quantity_required]')?form_error('update[quantity_required]'):'&nbsp' ?>
			</div>
			<div class="col-md-3 form-group <?php echo (form_error('update[quantity_discounted]')) ? 'has-error' : '' ?>">
				<label for="discount_quantity_discounted">Quantity Discounted:</label>
				<input type="text" id="discount_quantity_discounted" name="update[quantity_discounted]" value="<?php echo set_value('update[quantity_discounted]', $discount_data[$this->flexi_cart_admin->db_column('discounts', 'quantity_discounted')]);?>" class="form-control" 
					title="Set the quantity of items that the discount is applied to. For example, for a 'buy 5 get 2 free' discount, the quantity would be 2."
				/>
				<?php echo form_error('update[quantity_discounted]')?form_error('update[quantity_discounted]'):'&nbsp' ?>
			</div>
			<div class="col-md-3 form-group <?php echo (form_error('update[value_required]')) ? 'has-error' : '' ?>">
				<label for="discount_value_required">Value Required to Activate:</label>
				<input type="text" id="discount_value_required" name="update[value_required]" value="<?php echo set_value('update[value_required]', $discount_data[$this->flexi_cart_admin->db_column('discounts', 'value_required')]);?>" class="form-control" 
					title="Set the value required to active the discount. For item discounts, the value is the total value of the discountable items. For summary discounts, the value is the cart total."
				/>
				<?php echo form_error('update[value_required]')?form_error('update[value_required]'):'&nbsp' ?>
			</div>
			<div class="col-md-3 form-group <?php echo (form_error('update[value_discounted]')) ? 'has-error' : '' ?>">
				<label for="discount_value_discounted">Value Discounted:</label>
				<input type="text" id="discount_value_discounted" name="update[value_discounted]" value="<?php echo set_value('update[value_discounted]', $discount_data[$this->flexi_cart_admin->db_column('discounts', 'value_discounted')]);?>" class="form-control" 
					title="Set the value of the discount that is applied. For percentage discounts, this value is used as the discount percentage. For 'flat fee' and 'new value' discounts, this is the discounted currency value."
				/>
				<?php echo form_error('update[value_discounted]')?form_error('update[value_discounted]'):'&nbsp' ?>
			</div>
		</div>
	</div>
		
	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Functionality</div>
		<div class="row">						
			<div class="col-md-3 form-group <?php echo (form_error('update[recursive]')) ? 'has-error' : '' ?>">
				<label for="discount_recursive">Discount Recursive:</label>
				<?php $recursive = (bool) $discount_data[$this->flexi_cart_admin->db_column('discounts', 'recursive')]; ?>
				<input type="hidden" name="update[recursive]" value="0"/>
				<input type="checkbox" id="discount_recursive" name="update[recursive]" value="1" <?php echo set_checkbox('update[recursive]','1', $recursive); ?> class="tooltip_trigger" 
					title="If checked, the discount can be repeated mdivtiples times to the same cart. For example, if checked, a 'Buy 1, get 1 free' discount can be reapplied if 2, 4, 6 (etc) items are added to the cart. If not checked, the discount is only applied for the first 2 items."
				/>
				<?php echo form_error('update[recursive]')?form_error('update[recursive]'):'&nbsp' ?>
			</div>
			<div class="col-md-3 form-group <?php echo (form_error('update[non_combinable]')) ? 'has-error' : '' ?>">
				<label for="discount_non_combinable">Non Combinable Discount:</label>
				<?php $non_combinable = (bool) $discount_data[$this->flexi_cart_admin->db_column('discounts', 'non_combinable')]; ?>
				<input type="hidden" name="update[non_combinable]" value="0"/>
				<input type="checkbox" id="discount_non_combinable" name="update[non_combinable]" value="1" <?php echo set_checkbox('update[non_combinable]','1', $non_combinable); ?> class="tooltip_trigger" 
					title="If checked, the discount cannot be and combined and used with any other discounts or reward vouchers."
				/>
				<?php echo form_error('update[non_combinable]')?form_error('update[non_combinable]'):'&nbsp' ?>
			</div>
			<div class="col-md-3 form-group <?php echo (form_error('update[void_reward]')) ? 'has-error' : '' ?>">
				<label for="discount_void_reward">Void Reward Points:</label>
				<?php $void_reward = (bool) $discount_data[$this->flexi_cart_admin->db_column('discounts', 'void_reward_points')]; ?>
				<input type="hidden" name="update[void_reward]" value="0"/>
				<input type="checkbox" id="discount_void_reward" name="update[void_reward]" value="1" <?php echo set_checkbox('update[void_reward]','1', $void_reward); ?> class="tooltip_trigger" 
					title="If checked, any reward points earnt from items within the cart will be reset to zero whilst the discount is used."
				/>
				<?php echo form_error('update[void_reward]')?form_error('update[void_reward]'):'&nbsp' ?>
			</div>
			<div class="col-md-3 form-group <?php echo (form_error('update[force_shipping]')) ? 'has-error' : '' ?>">
				<label for="discount_force_shipping">Force Shipping Discount:</label>
				<?php $force_shipping = (bool) $discount_data[$this->flexi_cart_admin->db_column('discounts', 'force_shipping_discount')]; ?>
				<input type="hidden" name="update[force_shipping]" value="0"/>
				<input type="checkbox" id="discount_force_shipping" name="update[force_shipping]" value="1" <?php echo set_checkbox('update[force_shipping]','1', $force_shipping); ?> class="tooltip_trigger" 
					title="If checked, the discount value will be 'forced' on the carts shipping option calcdivations, even if the selected shipping option has not been set as being discountable."
				/>
				<?php echo form_error('update[force_shipping]')?form_error('update[force_shipping]'):'&nbsp' ?>
			</div>
		</div>
	</div>

	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Custom Cart Statuses</div>
		<div style="margin-bottom:20px">
				Three individual custom cart statuses can be set to affect whether discounts become active.
				The custom statuses can contain any string or integer values, if the value then matches the the custom status of a discount, then provided all other discount conditions are also matched, the discount is activated.
				<br/>
				For example, a custom status could check whether a user is logged in, by default it is set to false (0), when a user then logs in, the status could be set to true (1) which would then enable the discount.
		</div>
		<div class="row">
			<div class="col-md-3 form-group <?php echo (form_error('update[custom_status_1]')) ? 'has-error' : '' ?>">
				<label for="discount_custom_status_1">Custom Status #1:</label>
				<input type="text" id="discount_custom_status_1" name="update[custom_status_1]" value="<?php echo set_value('update[custom_status_1]', $discount_data[$this->flexi_cart_admin->db_column('discounts', 'custom_status_1')]); ?>" class="form-control"/>
				<?php echo form_error('update[custom_status_1]')?form_error('update[custom_status_1]'):'&nbsp' ?>
			</div>
			<div class="col-md-3 form-group <?php echo (form_error('update[custom_status_2]')) ? 'has-error' : '' ?>">
				<label for="discount_custom_status_2">Custom Status #2:</label>
				<input type="text" id="discount_custom_status_2" name="update[custom_status_2]" value="<?php echo set_value('update[custom_status_2]', $discount_data[$this->flexi_cart_admin->db_column('discounts', 'custom_status_2')]); ?>" class="form-control"/>
				<?php echo form_error('update[custom_status_2]')?form_error('update[custom_status_2]'):'&nbsp' ?>
			</div>
			<div class="col-md-3 form-group <?php echo (form_error('update[custom_status_3]')) ? 'has-error' : '' ?>">
				<label for="discount_custom_status_3">Custom Status #3:</label>
				<input type="text" id="discount_custom_status_3" name="update[custom_status_3]" value="<?php echo set_value('update[custom_status_3]', $discount_data[$this->flexi_cart_admin->db_column('discounts', 'custom_status_3')]); ?>" class="form-control"/>
				<?php echo form_error('update[custom_status_3]')?form_error('update[custom_status_3]'):'&nbsp' ?>
			</div>
		</div>
	</div>
		
	<div class="page-header">
		<div class="lead text-muted" style="text-transform: uppercase;">Usage Status / Vadivdity</div>
		<div class="row">
			<div class="col-md-3 form-group <?php echo (form_error('update[force_shipping]')) ? 'has-error' : '' ?>">
				<label for="discount_usage_limit">Discount Usage limit:</label>
				<input type="text" id="discount_usage_limit" name="update[usage_limit]" value="<?php echo set_value('update[usage_limit]', $discount_data[$this->flexi_cart_admin->db_column('discounts', 'usage_limit')]);?>"
				class="form-control" data-toggle="tooltip" data-placement="bottom" title="Field RequiredSet the number of times remaining that the discount can be used."
				/>
				<?php echo form_error('update[force_shipping]')?form_error('update[force_shipping]'):'&nbsp' ?>
			</div>
			<div class="col-md-3 form-group <?php echo (form_error('update[force_shipping]')) ? 'has-error' : '' ?>">
				<?php 
					// Crop MYSQL 'datetime' data to just display the date, not the time.
					$valid_date = substr($discount_data[$this->flexi_cart_admin->db_column('discounts', 'valid_date')], 0, 10); 
				?>
				<label for="discount_vadivd_date">Discount Vadivd Date:</label>
				<input type="text" id="discount_vadivd_date" name="update[valid_date]" value="<?php echo set_value('update[valid_date]', $valid_date);?>" maxlength="10"
				class="form-control" data-toggle="tooltip" data-placement="bottom" title="Field RequiredSet the start date that the discount is vadivd from."
				/>
				<?php echo form_error('update[force_shipping]')?form_error('update[force_shipping]'):'&nbsp' ?>
			</div>
			<div class="col-md-3 form-group <?php echo (form_error('update[force_shipping]')) ? 'has-error' : '' ?>">
				<?php 
					// Crop MYSQL 'datetime' data to just display the date, not the time.
					$expire_date = substr($discount_data[$this->flexi_cart_admin->db_column('discounts', 'expire_date')], 0, 10); 
				?>
				<label for="discount_expire_date">Discount Expire Date:</label>
				<input type="text" id="discount_expire_date" name="update[expire_date]" value="<?php echo set_value('update[expire_date]', $expire_date);?>" maxlength="10"
				class="form-control" data-toggle="tooltip" data-placement="bottom" title="Field RequiredSet the expiry date that the discount is vadivd until."
				/>
				<?php echo form_error('update[force_shipping]')?form_error('update[force_shipping]'):'&nbsp' ?>
			</div>
			<div class="col-md-3 form-group <?php echo (form_error('update[force_shipping]')) ? 'has-error' : '' ?>">
				<label for="discount_order_by">Order By:</label>
				<input type="text" id="discount_order_by" name="update[order_by]" value="<?php echo set_value('update[order_by]', $discount_data[$this->flexi_cart_admin->db_column('discounts', 'order_by')]);?>"
				class="form-control" data-toggle="tooltip" data-placement="bottom" title="Set the order that the discount is applied to the cart if other discounts are active. The lower the number, the higher priority."
				/>
				<?php echo form_error('update[force_shipping]')?form_error('update[force_shipping]'):'&nbsp' ?>
			</div>
			<div class="col-md-3 form-group <?php echo (form_error('update[force_shipping]')) ? 'has-error' : '' ?>">
				<label for="discount_status">Active Status:</label>
				<?php $status = (bool) $discount_data[$this->flexi_cart_admin->db_column('discounts', 'status')]; ?>
				<input type="hidden" name="update[status]" value="0"/>
				<input type="checkbox" id="discount_status" name="update[status]" value="1" <?php echo set_checkbox('update[status]','1', $status); ?>
				data-toggle="tooltip" data-placement="bottom" title="If checked, the discount will be set as 'active'."
				/>
				<?php echo form_error('update[force_shipping]')?form_error('update[force_shipping]'):'&nbsp' ?>
			</div>
		</div>
	</div>

	<input type="submit" name="update_discount" value="Update Discount" class="btn btn-primary"/>
<?php echo form_close();?>						
	
<?php $this->load->view('admin/templates/footer'); ?>
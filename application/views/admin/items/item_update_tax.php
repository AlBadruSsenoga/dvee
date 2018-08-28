<?php $this->load->view('admin/templates/header', array(
	'title' => 'Update Item Tax',
	'link' => 'items',
	'breadcrumbs' => array(
		0 => array('name'=>'Items','link'=>'items'),
		1 => array('name'=>$product->name,'link'=>FALSE),
	)
)); ?>


<?php echo form_open_multipart(current_url()) ?>
	<?php echo form_hidden('id', $product->id) ?>
		
	<?php $this->load->view('admin/items/item_update_header', array(
		'id' => $product->id,
		'active' => 'tax',
	)); ?>

	<div class="row">
		<div class="col-md-9">
			<?php if (empty($item_tax_data)): ?>
				<div class="alert alert-warning">
					There are no taxes setup for this item.
					<?= anchor('admin/insert_item_tax/'.$product->id, 'Insert New Item Tax Rates', 'class="alert-link"') ?>
				</div>
			<?php else: ?>
				<h4 class="lead">
					<div>Available Tax Options</div>
					<small>Setup tax rate for this item according to a customers location.</small>
				</h4>
				<div class="table-responsive">
					<table class="table table-flat">
						<thead>
							<tr>
								<th>
									<div data-toggle="tooltip" title="Set the location that the tax rate is applied to.">
										Location
									</div>
								</th>
								<th>
									<div data-toggle="tooltip" title="Set the zone that the tax rate is applied to. Note: If a location is set, it has priority over a zone rule.">
										Zone
									</div>
								</th>
								<th>
									<div data-toggle="tooltip" title="The tax rate percentage the item incurs to the selected location/zone.">
										Rate (%)
									</div>
								</th>
								<th>
									<div data-toggle="tooltip" title="If checked, the tax rate will be set as 'active'.">
										Status
									</div>
								</th>
								<th>
									<div data-toggle="tooltip" title="If checked, the row will be deleted upon the form being updated.">
										Delete
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($item_tax_data as $row): $item_tax_id = $row[$this->flexi_cart_admin->db_column('item_tax', 'id')]; ?>
							<tr>
								<td>
									<input type="hidden" name="update[<?php echo $item_tax_id; ?>][id]" value="<?php echo $row[$this->flexi_cart_admin->db_column('item_tax', 'id')]?>"/>
									
									<?php $tax_location = $row[$this->flexi_cart_admin->db_column('item_tax', 'location')];?>
									<select name="update[<?php echo $item_tax_id; ?>][location]" class="form-control">
										<option value="0">No Tax Location</option>
									<?php 
										foreach($locations_inline as $location) { 
											$id = $location[$this->flexi_cart_admin->db_column('locations', 'id')];
									?>
										<option value="<?php echo $id; ?>" <?php echo set_select('update['.$item_tax_id.'][location]', $id, ($tax_location == $id)); ?>>
											<?php echo $location[$this->flexi_cart_admin->db_column('locations', 'name')]; ?>
										</option>
									<?php } ?>
									</select>
								</td>
								<td>
									<?php $tax_zone = $row[$this->flexi_cart_admin->db_column('item_tax', 'zone')];?>
									<select name="update[<?php echo $item_tax_id; ?>][zone]" class="form-control">
										<option value="0">No Tax Zone</option>
									<?php 
										foreach($tax_zones as $zone) { 
											$id = $zone[$this->flexi_cart_admin->db_column('location_zones', 'id')];
									?>
										<option value="<?php echo $id; ?>" <?php echo set_select('update['.$item_tax_id.'][zone]', $id, ($tax_zone == $id)); ?>>
											<?php echo $zone[$this->flexi_cart_admin->db_column('location_zones', 'name')]; ?>
										</option>
									<?php } ?>
									</select>
								</td>
								<td>
									<input type="text" name="update[<?php echo $item_tax_id; ?>][rate]"
									value="<?php echo set_value('update['.$item_tax_id.'][rate]', $row[$this->flexi_cart_admin->db_column('item_tax', 'rate')]); ?>"
									class="form-control" style="width:90px"/>
								</td>
								<td class="text-center">
									<?php $status = (bool)$row[$this->flexi_cart_admin->db_column('item_tax', 'status')]; ?>
									<input type="hidden" name="update[<?php echo $item_tax_id; ?>][status]" value="0"/>
									<input type="checkbox" name="update[<?php echo $item_tax_id; ?>][status]" value="1" <?php echo set_checkbox('update['.$item_tax_id.'][status]','1', $status); ?>/>
								</td>
								<td class="text-center">
									<input type="hidden" name="update[<?php echo $item_tax_id; ?>][delete]" value="0"/>
									<input type="checkbox" name="update[<?php echo $item_tax_id; ?>][delete]" value="1"/>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>					
				</div>					
			<?php endif ?>
		</div>
		<div class="col-md-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					Add Tax Rate
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label>Location</label>
						<select name="insert[0][location]" class="form-control input-sm">
							<option value="0">No Tax Location</option>
						<?php 
							foreach($locations_inline as $location) { 
								$id = $location[$this->flexi_cart_admin->db_column('locations', 'id')];
						?>
							<option value="<?php echo $id; ?>" <?php echo set_select('insert[0][location]', $id); ?>>
								<?php echo $location[$this->flexi_cart_admin->db_column('locations', 'name')]; ?>
							</option>
						<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Zone</label>
						<select name="insert[0][zone]" class="form-control input-sm">
							<option value="0">No Tax Zone</option>
						<?php 
							foreach($tax_zones as $zone) {
								$id = $zone[$this->flexi_cart_admin->db_column('location_zones', 'id')];
						?>
							<option value="<?php echo $id;?>" <?php echo set_select('insert[0][zone]', $id); ?>>
								<?php echo $zone[$this->flexi_cart_admin->db_column('location_zones', 'name')]; ?>
							</option>
						<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Rate (%)</label>
						<input type="number" name="insert[0][rate]" value="<?php echo set_value('insert[0][rate]');?>" class="form-control input-sm" />
					</div>
					<div class="form-group">
						<input type="hidden" name="insert[0][status]" value="0"/>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="insert[0][status]" value="1" <?php echo set_checkbox('insert[0][status]', '1', TRUE); ?>/>
								Status
							</label>
						</div>
					</div>
					<input type="submit" name="insert_tax" value="Add Tax Rate" class="btn btn-block btn-primary"/>
				</div>
			</div>
		</div>
	</div>

	<?php echo form_submit('update_tax', 'Update Item Tax', 'class="btn btn-lg btn-success"') ?>

<?php echo form_close() ?>

<?php $this->load->view('admin/templates/footer') ?>
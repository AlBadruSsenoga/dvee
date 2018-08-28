<?php $this->load->view('admin/templates/header', array(
	'title' => 'Update Item Variation',
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
		'active' => 'options',
	)); ?>

	<?php if (validation_errors()): ?>
			<div class="alert alert-danger">Check the form for errors and try again.</div>
	<?php else: ?>
		<?php if (! empty($message)): ?>
			<div id="message"> <?=$message ?> </div>
		<?php endif ?>
	<?php endif ?>


	<div class="row">
		<div class="col-md-8">
			<?php if (empty($product_variants)): ?>
				<div class="alert alert-warning">You have no options for this item.</div>
			<?php else: ?>
				<h4 class="lead">
					<div>Available Variations</div>
					<small>Strike out values indicate that they have been over-written by the values set for the product options.</small>
				</h4>
				<table class="table table-flat table-striped">
					<thead class="bg-faded">
						<tr>
							<th class="text-center">
								<span class="glyphicon glyphicon-picture text-muted"></span>
							</th>
							<th>Options</th>
							<th class="text-center">Price</th>
							<th class="text-center">Weight</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($product_variants as $key => $variant): ?>
							<tr>
								<td class="text-center">
									<?php if (!empty($variant->images)): ?>
										<img src="<?php echo $variant->images[0]->url ?>" alt="" style="height:30px">
									<?php else: ?>
										<span class="glyphicon glyphicon-picture text-muted"></span>
									<?php endif ?>
								</td>
								<td class="form-inline" style="width:140px">
									<?php foreach ($product_options as $option): ?>
										<label><?php echo $option['name'] ?>:</label>
										<?php $value_name = 'Any '.$option['name'] ?>
										<?php foreach ($option['values'] as $value): ?>
											<?php if ($value_name == 'Any '.$option['name'] AND in_array($value['id'], $variant->options_set)) $value_name = $value['name'] ?>
										<?php endforeach ?>
										<?php echo $value_name ?>
										<br>
									<?php endforeach ?>
								</td>
								<td class="text-center">
									<?php if ($variant->price > 0): ?>
										<div class="text-danger" style="text-decoration:line-through;"><?php echo $product->price ?></div>
										<?php echo $variant->price ?>
									<?php else: ?>
										<?php echo $product->price ?>
									<?php endif ?>
								</td>
								<td class="text-center">
									<?php if ($variant->weight > 0): ?>
										<div class="text-danger" style="text-decoration:line-through;"><?php echo $product->weight ?></div>
										<?php echo $variant->weight ?>
									<?php else: ?>
										<?php echo $product->weight ?>
									<?php endif ?>
								</td>
								<td class="text-center">
									<?php echo anchor('admin/update_item_option/'.$product->id.'/'.$variant->id, 'Edit', 'class="btn btn-sm btn-primary"') ?>
									<?php echo anchor('admin/delete_item_options/'.$product->id.'/'.$variant->id, 'Delete', 'class="btn btn-sm btn-danger"') ?>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>

				<h4 class="lead" style="margin-top:5rem">
					<div>Default Options</div>
					<small>The default options will be the pre-selected options when a user first views the item.</small>
				</h4>
				<div class="row">
					<?php foreach ($product_options as $option): ?>
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label"><?php echo $option['name'] ?></label>
								<select class="form-control input-sm" name="default[<?php echo $option['id'] ?>]">
									<option value="">Any <?php echo $option['name'] ?></option>
									<?php foreach ($option['values'] as $value): ?>
										<option value="<?php echo $value['id'] ?>" <?php echo (in_array($value['id'], $product_defaults)) ? 'selected="selected"' : '' ?>>
											<?php echo $value['name'] ?>
										</option>
									<?php endforeach ?>
								</select>
							</div>
						</div>
					<?php endforeach ?>
				</div>

				<input type="submit" name="update_defaults" value="Update Option Defaults" class="btn btn-success">
			<?php endif ?>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					Add Product variation
				</div>
				<div class="panel-body">
					<p class="help-block">Select Attribute combinations</p>
					<?php if (!$product_options): ?>
						<div class="alert alert-danger">
							Select item attributes first.
						</div>
					<?php else: ?>
						<div class="row">
							<?php foreach ($product_options as $option): ?>
								<div class="col-sm-4 col-md-6">
									<div class="form-group">
										<label for="" class="control-label"><?php echo $option['name'] ?></label>
										<select class="form-control input-sm" name="option[<?php echo $option['id'] ?>]">
											<option value="">Any <?php echo $option['name'] ?></option>
											<?php foreach ($option['values'] as $value): ?>
												<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
											<?php endforeach ?>
										</select>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					<?php endif ?>
					<?php if ($product_options): ?>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group <?php echo form_error('option_file') ? 'has-error' : '' ?>">
								<label class="control-label">Image(s)</label>
								<p class="text-muted">
									<small>
										You can upload a maximum of <?php echo $upload_limit ?> <?php echo ($product->images) ? 'more' : '' ?> images.
									</small>
								</p>
								<input type="file" name="files[]" class="form-control input-sm" multiple>
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="form-group">
								<label class="control-label">Price</label>
								<input type="text" name="option_price" class="form-control input-sm">
							</div>
						</div>
						<div class="col-sm-6 col-md-6">
							<div class="form-group">
								<label class="control-label">Weight</label>
								<input type="text" name="option_weight" class="form-control input-sm">
							</div>
						</div>
					</div>
					<input type="submit" name="add_option" class="btn btn-block btn-primary" value="Add variation">
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
<?php echo form_close() ?>

<?php $this->load->view('admin/templates/footer') ?>
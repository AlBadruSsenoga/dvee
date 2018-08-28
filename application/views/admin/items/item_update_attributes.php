<?php $this->load->view('admin/templates/header', array(
	'title' => 'Update Item Attributes',
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
		'active' => 'attributes',
	)); ?>

	<h4 class="lead">
		<small>
			To change product attributes, update the attributes of the category that the product belongs to.
			<?php if (isset($product->category->id)): ?>
				<?php echo anchor('admin/update_attribute/'.$product->category->id, 'Change Attributes') ?>
			<?php else: ?>
				Change Attributes
			<?php endif ?>
		</small>
	</h4>

	<?php if (validation_errors()): ?>
			<div class="alert alert-danger">Check the form for errors and try again.</div>
	<?php else: ?>
		<?php if (! empty($message)): ?>
			<div id="message"> <?=$message ?> </div>
		<?php endif ?>
	<?php endif ?>

	<?php if (isset($product->attributes)): ?>
		<?php if ($product->attributes): ?>
			<?php $index = 0; ?>
			<div class="row">
				<?php foreach ($product->attributes as $attribute): ?>
					<div class="col-md-3">
						<div class="panel panel-default">
							<div class="panel-heading">
								<strong><?php echo $attribute->name ?></strong>
							</div>
							<ul class="list-group" style="height:122px;overflow:auto">
								<?php foreach ($attribute->descriptions as $description): ?>
								<li class="list-group-item">
									<div class="checkbox" style="margin:0">
										<label>
											<?php echo form_checkbox("attributes[$index]", $attribute->id.'_'.$description->id, $description->checked); ?>
											<?php echo $description->name ?>
											<?php $index++ ?>
										</label>
									</div>
								</li>
								<?php endforeach ?>
							</ul>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		<?php else: ?>
			<div class="alert alert-warning">
				No product attributes are set for this category.
				<?php echo anchor('admin/update_attribute/'.$product->category->id, 'Set Attributes', 'class="alert-link"') ?>
			</div>
		<?php endif ?>
	<?php else: ?>
		<div class="alert alert-warning">
			This product is not assigned to any category.
			<?php echo anchor('admin/update_item/'.$product->id, 'Assign a Category', 'class="alert-link"') ?>
		</div>
	<?php endif ?>

	<?php echo form_submit('update_attributes', 'Update Item Attributes', 'class="btn btn-lg btn-success"') ?>
	
<?php echo form_close() ?>

<?php $this->load->view('admin/templates/footer') ?>
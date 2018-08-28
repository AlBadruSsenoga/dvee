<?php $this->load->view('admin/templates/header', array(
	'title' => 'Update Item Images',
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
		'active' => 'images',
	)); ?>

	<?php if (validation_errors()): ?>
			<div class="alert alert-danger">Check the form for errors and try again.</div>
	<?php else: ?>
		<?php if (! empty($message)): ?>
			<div id="message"> <?=$message ?> </div>
		<?php endif ?>
	<?php endif ?>


	<?php if ($product->images): ?>
		<?php $index = 0; ?>
		<div class="row">
			<?php foreach ($product->images as $image): ?>
				<div class="col-md-3 app-image-widget" data-id="<?php echo $image->id ?>">
					<div class="panel panel-default panel-inverse">
						<div class="panel-heading text-right">
							<?php echo form_hidden('product_id', $product->id) ?>
							<?php echo form_hidden('file_id', $image->id) ?>
							<?php echo form_hidden('update_item_thumbnail', TRUE) ?>
							<button type="button" class="btn btn-xs btn-danger app-image-widget-delete" data-toggle="tooltip" data-placement="bottom" title="delete image">
								<span class="glyphicon glyphicon-remove"></span>
							</button>
						</div>
						<img src="<?php echo $image->url ?>" alt="" class="img-responsive" data-toggle="modal" data-target="#app-carousel-modal">
					</div>
				</div>
			<?php endforeach ?>
		</div>
		<script>
		    $( ".app-image-widget-delete").click(function() {
		    	var container = $(this).closest('.app-image-widget');
		    	var imageID = container.attr('data-id');
		    	var button = $(this);
		        $.ajax({
		        	type: 'POST',
		        	data: {
		        		delete_item_image: true,
		        		id: imageID,
		        		<?php echo $this->security->get_csrf_token_name() ?> : '<?php echo $this->security->get_csrf_hash() ?>'
		        	},
		            url: '<?php echo current_url(); ?>',
		            cache: true,
		            beforeSend: function(){
		            	button.html('<span class="glyphicon glyphicon-repeat spinner"></span>')
		            },
		            success: function(data){
		                container.addClass('animated zoomOut');
		                setTimeout(function(){
			                container.remove();
		                }, 550);
		            },
		            complete: function(data){
		            	button.html('<span class="glyphicon glyphicon-remove"></span>')
		            }
		        });
		    });
		</script>
	<?php else: ?>
		<div class="alert alert-warning">
			You have no images for this item.
		</div>
	<?php endif ?>

	
	<h4 class="lead" style="margin-top:3rem">
		<div>Upload Images</div>
		<small>
			You can upload a maximum of <?php echo $upload_limit ?> <?php echo ($product->images) ? 'more' : '' ?> images.
		</small>
	</h4>
	<div class="form-group form-inline <?php echo form_error('files[]') ? 'has-error' : '' ?>">
		<input type="file" name="files[]" multiple class="form-control">
		<button type="submit" name="update_images" value="1" class="btn btn-success">
			Upload
		</button>
	</div>

<?php echo form_close() ?>

<?php $this->load->view('admin/templates/footer') ?>
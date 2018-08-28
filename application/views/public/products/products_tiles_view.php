<?php $this->load->helper('text') ?>

<div class="row">
	<?php foreach ($products as $key => $product): ?>
		<div class="item <?php echo $cols ?>">
			<div class="thumbnail text-center">
				<?php if ($product->thumb): ?>
					<img src="<?php echo base_url($product->thumb) ?>" class="group list-group-image" style="margin-bottom:2px">
				<?php else: ?>
					<img src="<?php echo base_url() ?>assets/system/no_image.jpg" class="group list-group-image" style="width:100%">
				<?php endif ?>
				<div class="caption" style="padding:0">
					<div class="form-group" title="<?php echo $product->name ?>">
						<?php echo anchor('product/'.$product->slug, character_limiter($product->name, 20)) ?>
					</div>
					<strong><?php echo $this->flexi_cart->get_currency_value($product->price) ?></strong>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>

<?php if (isset($this->pagination)): ?>
	<!-- Pagination Link -->
	<?php echo $this->pagination->create_links() ?>
<?php endif ?>

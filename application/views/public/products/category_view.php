<?php $this->load->view('public/templates/header', array(
	'title' => $category->name,
	'link' => (!empty($category->pagination)) ? $category->pagination[0]->slug : $category->slug,
	'sub_link' => 'profile'
)); ?>

<?php
// No Items returned - and the user was not filtering
if ( ! $products AND ! $_SERVER['QUERY_STRING']):
?>
	<div class="alert alert-warning">There are no products on sale yet.</div>
<?php else: ?>
	<ul class="breadcrumb">
		<?php foreach ($category->pagination as $row): ?>
			<li>
				<?php
				// If the category we are viewing matches a category in pagination,
				// Do not create an anchor link for it because we are viewing it already
				if ($category->id == $row->id): ?>
					<?php echo $row->name ?>
				<?php else: ?>
					<?php echo anchor('category/'.$row->slug.'/'.$row->name, $row->name) ?>
				<?php endif ?>
			</li>
		<?php endforeach ?>
	</ul>

	<div class="row">
		<div class="col-md-2">
			<div class="lead"><?php echo $category->name ?></div>
			<?php if ($category->sub_categories): ?>
				<div class="page-header" style="margin-bottom:5px">Categories</div>
				<div class="filter-container">
					<ul class="nav nav-pills nav-stacked">
						<?php foreach ($category->sub_categories as $row): ?>
							<li>
								<?php echo anchor('category/'.$row->slug.'/'.$row->name, $row->name) ?>
							</li>
						<?php endforeach ?>
					</ul>
				</div>
			<?php endif ?>
	
			<?php // Show Attributes as Filter Options ?>
			<?php foreach ($category->attributes as $index => $attribute): ?>
				<div class="page-header" style="margin-bottom:5px">
					<?php echo $attribute->name ?>
				</div>
				<div class="filter-container">
					<ul class="nav nav-pills nav-stacked">
						<?php foreach ($attribute->descriptions as $key => $description): ?>
							<li class="<?php echo ($this->input->get('ATB') == $description->id) ? 'active' : '' ?>">
								<?php echo anchor(current_url().'?'.($this->input->get('ATB') ? preg_replace('/(^|&)ATB=[^&]*/', '&ATB='.$description->id, $_SERVER['QUERY_STRING']) : $_SERVER['QUERY_STRING'].'&ATB='.$description->id), $description->name) ?>
							</li>
						<?php endforeach ?>
					</ul>
				</div>
			<?php endforeach ?>

			<div class="page-header">Price (<?php echo $this->flexi_cart->currency_symbol() ?>)</div>
			<?php echo form_open(current_url().'?'.$_SERVER['QUERY_STRING']) ?>
				<div class="form-group block-range">
					<div class="input-group">
						<input type="range" name="price"
						min="<?php echo $min_price ?>"
						max="<?php echo $max_price ?>"
						value="<?php echo $price_range ?>"
						onchange="rangeDsply.value=value" />
						<output id="rangeDsply"><?php echo $price_range ?></output>
					</div>
				</div>

				<div class="form-group">
					<input type="submit" name="price_range" class="btn btn-success btn-block" value="Sort Price"/>
				</div>
			<?php echo form_close() ?>
		</div>
		<div class="col-md-10">
			<ul class="nav nav-pills well" style="box-shadow:none;margin-bottom:20px;padding:0">
				<li>
					<label style="margin: 0; padding: 10px">Sort By:</label>
				</li>
				
				<li class="dropdown <?php echo $this->input->get('order') ? 'active' : '' ?>">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						Trending <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li role="presentation" class="<?= ($this->input->get('order') === 'latest') ? 'active' : '' ?>">
							<?= anchor(current_url().'?'.($this->input->get('order') ? preg_replace('/(^|&)order=[^&]*/', '&order=latest', $_SERVER['QUERY_STRING']) : $_SERVER['QUERY_STRING'].'&order=latest'), 'Latest Products' ) ?>
						</li>
						<li role="presentation" class="<?= ($this->input->get('order') === 'lowpx') ? 'active' : '' ?>">
							<?php
							// Remove price range query option not to collide with price ordering
							$nopx_link = ($this->input->get('price') ? preg_replace('/(^|&)price=[^&]*/', '', $_SERVER['QUERY_STRING']) : $_SERVER['QUERY_STRING'])
							?>
							<?= anchor(current_url().'?'.($this->input->get('order') ? preg_replace('/(^|&)order=[^&]*/', '&order=lowpx', $nopx_link) : $nopx_link.'&order=lowpx'), 'Lowest Prices' ) ?>
						</li>
						<li role="presentation" class="<?= ($this->input->get('order') === 'hghpx') ? 'active' : '' ?>">
							<?php $lowpx_link = '' ?>
							<?= anchor(current_url().'?'.($this->input->get('order') ? preg_replace('/(^|&)order=[^&]*/', '&order=hghpx', $nopx_link) : $nopx_link.'&order=hghpx'), 'Highest Prices' ) ?>
						</li>
					</ul>
				</li>
				<?php if ($_SERVER['QUERY_STRING']): ?>
					<li><?= anchor(current_url(), 'Reset Filters', 'class="text-danger"') ?></li>
				<?php endif ?>
			</ul>

			<?php if ( ! $products): // NO items found. Because user's sorting options returned Nothing. ?>
				<div class="alert alert-warning">
					We could not find anything based on your sorting options. Please try again or <?= anchor(current_url().'?'.($this->input->get('cate') ? '&cate='.$this->input->get('cate') : '').'&reset=true', 'Reset Filters', 'class="alert-link"') ?>.
				</div>
			<?php else: ?>
				<?php $this->load->view('public/products/products_tiles_view', array(
					'type' => 'tiles',
					'cols' => 'col-xs-6 col-sm-3 col-md-3',
					'products' => $products,
				)) ?>
				<?php echo $this->pagination->create_links() ?>
			<?php endif ?>
		</div>
	</div>
<?php endif ?>

<?php $this->load->view('admin/templates/footer') ?>
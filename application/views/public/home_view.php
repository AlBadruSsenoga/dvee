<?php $this->load->view('public/templates/header') ?>

<?php if (!$categories): ?>
	<div class="alert alert-info">
		<h1 class="lead" style="text-transform:uppercase">
			<small>There are no products to display</small>
		</h1>
	</div>
<?php else: ?>
	<div class="row">
		<div class="col-md-8">
		<?php if ($banners): ?>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-bottom: 2rem">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<?php foreach ($banners as $key => $banner): ?>
					<li data-target="#carousel-example-generic" data-slide-to="<?php echo $key ?>" class="<?php echo $key ? 'active' : '' ?>"></li>
					<?php endforeach ?>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<?php foreach ($banners as $key => $banner): ?>
						<div class="item <?php echo $key ? 'active' : '' ?>">
							<img src="<?php echo base_url($banner->image) ?>" alt="..." style="width:100%">
							<?php if ($banner->caption): ?>
								<div class="lead carousel-caption">
									<?php echo $banner->caption ?>
								</div>
							<?php endif ?>
						</div>
					<?php endforeach ?>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		<?php else: ?>
			<div class="well">
				<h1 class="lead text-center" style="margin:6rem 0">Welcome to <?php echo $owner->name ?></h1>
			</div>
		<?php endif ?>
		</div>
		<div class="col-md-4 text-center">
			<div class="lead page-header">
				Latest in <?php echo $latest[0]->category ?>
			</div>
			<div id="carousel-latest" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<?php foreach ($latest as $key => $proudct): ?>
						<div class="item <?php echo ($key==0) ? 'active' : '' ?>">
							<img src="<?php echo $proudct->thumb ?>" alt="..." class="img-responsive" style="display: inline;">
						</div>
					<?php endforeach ?>
				</div>
			</div>
			<script>
			$('.carousel-latest').carousel({
				interval: 300
			})
			</script>
			<hr>
			<?php echo anchor('category/'.$latest[0]->category_id.'/'.$latest[0]->category, 'Shop Now', 'class="btn btn-success"') ?>
		</div>
	</div>

	<?php foreach ($categories as $key => $category): ?>
		<div class="lead page-header">
			<?php echo anchor('category/'.$category->slug.'/'.url_title($category->name), $category->name) ?>
		</div>
		<?php $this->load->view('public/products/products_tiles_view', array(
			'type' => 'tiles',
			'cols' => 'col-xs-6 col-sm-4 col-md-3 col-lg-2-5',
			'products' => $category->products,
		)) ?>
		<p class="text-center">
			<?php echo anchor('category/'.$category->slug.'/'.url_title($category->name), 'View More '.$category->name) ?>
		</p>
	<?php endforeach ?>

<?php endif ?>

<?php $this->load->view('public/templates/footer') ?>
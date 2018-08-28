<?php $this->load->view('public/templates/header', array(
	'title' => 'Cart',
	'link' => 'cart'
)) ?>

<ul class="breadcrumb">
	<li>
		<?php echo anchor('cart', 'Shopping Cart') ?>
	</li>
	<li class="active">Checkout</li>
</ul>

<h2 class="lead text-center text-success">Payment Complete</h2>

<div class="alert alert-success">
    The payment has been processed!
    Your order number is
    <?php if ($user): ?>
	    <?php echo anchor('user_dashboard/orders/'.$order_number, $order_number) ?>.
    <?php else: ?>
    	<strong><?php echo $order_number ?>.</strong>
    <?php endif ?>
    Thank you for your business.
</div>

<?php if ($products): ?>
	<h4 class="page-header">
	    Continue Shopping
	</h4>
	<?php $this->load->view('public/products/products_tiles_view', array(
		'type' => 'tiles',
		'cols' => 'col-xs-6 col-sm-4 col-md-3 col-lg-2-5',
		'products' => $products,
	)) ?>
<?php endif ?>
	
<?php $this->load->view('public/templates/footer') ?>
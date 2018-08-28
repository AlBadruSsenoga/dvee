<?php $this->load->view('public/templates/header', array(
	'title' => 'Cart',
	'link' => 'cart',
	'breadcrumbs' => array(
		0 => array('name' => 'Shopping Cart', 'link' => FALSE)
	)
)) ?>

<div class="lead page-header">
	Cart Content
	<div class="pull-right">
		<a href="<?= site_url('save_cart_data') ?>" class="btn btn-default">
			<span class="glyphicon glyphicon-floppy-disk"></span>
			Save Cart
		</a>
		<button data-toggle="modal" data-target="#load-cart-modal" class="btn btn-default">
			<span class="glyphicon glyphicon-download"></span>
			Load Cart
		</button>
	</div>
	<div class="clearfix"></div>
</div>

<?php if (empty($cart_items)): ?>
	<div class="alert alert-warning">
		You currently have no items in your shopping cart!
	</div>
<?php else: ?>
	<?= form_open('cart/checkout') ?>
		<div id="cart_content">
			<div id="ajax_content">
				<table id="cart_items" class="table">
					<thead>
						<tr>
							<th>Item</th>
							<th>Quantity</th>
							<th class="text-center">Price</th>
							<th class="text-center">Total</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($cart_items as $row) { $i = 0; $i++; ?>
							<tr>
								<td>
									<table>
										<tr>
											<td rowspan="3">
												<?php if (isset($row['thumb'])): ?>
													<img src="<?php echo $row['thumb'] ?>" style="height:40px;margin-right: 10px;">
												<?php else: ?>
													<span class="glyphicon glyphicon-picture text-muted" style="font-size:40px;margin-right: 10px;"></span>
												<?php endif ?>
											</td>
										</tr>
										<tr>
											<td>
												<strong><?= $row['name'] ?></strong>
											</td>
										</tr>
										<tr>
											<td>
												<?php echo $this->flexi_cart->item_options($row['row_id'], TRUE).'<br/>';?>
											</td>
										</tr>
									</table>
									<?php
									// Status messages are generated if an item cannot be shipped to the current shipping location, or if there is insufficient stock.
									// A css style ('text-danger') can be submitted to the function to format messages. 
									$status_msg = $this->flexi_cart->item_status_message($row['row_id'], 'text-danger');
										echo (! empty($status_msg)) ? $status_msg.'<br/>' : NULL;
									?>
								</td>
								<td>
									<?php
									// The input name 'quantity' must be the same as the item array column that it is updating.
									// As defined via the config file var $config['cart']['items']['columns']['item_quantity'] = 'quantity'
									?>
									<div class="input-group" style="width: 120px;">
										<input type="number" name="items[<?php echo $i;?>][quantity]" value="<?php echo $row['quantity'];?>" maxlength="3" class="form-control"/>
			                            <span class="input-group-btn">
			                                <div class="btn-group" role="group" aria-label="Basic example">
			                                    <button type="submit" name="update" value="&plusmn;" class="btn btn-primary" title="Update Quantity">
			                                        <i class="glyphicon glyphicon-chevron-right"></i>
			                                    </button>
			                                </div>
			                            </span>
			                        </div>

									<?php
									// Indicating an item's stock level. If TRUE is submited to the 2nd parameter of 'item_stock_quantity()', it returns remaining quantity available once current quantity it deducted.

									echo '<span class="text-success">There are <strong>'.$this->flexi_cart->item_stock_quantity($row['row_id']).'</strong> items in-stock.</span><br/>';
									?>
								</td>
								<td class="text-center">
									<?php 
										// If an item discount exists.
										if ($this->flexi_cart->item_discount_status($row['row_id'])) 
										{
											// If the quantity of non discounted items is zero, strike out the standard price.
											if ($row['non_discount_quantity'] == 0)
											{
												echo '<s>'.$row['price'].'</s><br/>';
											}
											// Else, display the quantity of items that are at the standard price.
											else
											{
												echo $row['non_discount_quantity'].' @ '.$row['price'].'<br/>';
											}
											
											// If there are discounted items, display the quantity of items that are at the discount price.
											if ($row['discount_quantity'] > 0)
											{
												echo $row['discount_quantity'].' @ '. $row['discount_price'];
											}
										}
										// Else, display price as normal.
										else
										{
											echo $row['price'];
										}
									?>
								</td>
								<td class="text-center">
									<?php 
										// If an item discount exists, strike out the standard item total and display the discounted item total.
										if ($row['discount_quantity'] > 0)
										{
											echo '<s>'.$row['price_total'].'</s><br/>';
											echo $row['discount_price_total'].'<br/>';
										}
										// Else, display item total as normal.
										else
										{
											echo $row['price_total'];
										}
									?>
								</td>
								<td class="text-center">
									<?= form_hidden('items['.$i.'][row_id]', $row['row_id']) ?>
									<a href="<?= site_url('delete_cart_item/'.$row['row_id']) ?>">
										<button type="button" class="close" style="float: initial;">
								            <span aria-hidden="true">&times;</span>
								            <span class="sr-only">Close</span>
								        </button>
									</a>
								</td>
							</tr>
							<?php 
							// To display a description of the discount, this example submits a 2nd parameter to the item_discount_status() function.
							// This sets the function to show item shipping discounts as well as the standard item price discounts. 
							if ($this->flexi_cart->item_discount_status($row['row_id'], FALSE)) { 
							?>
							<tr class="discount">
								<td colspan="4">
									Discount: <?php echo $this->flexi_cart->item_discount_description($row['row_id']);?>
									<?php echo anchor('unset_discount/'.$this->flexi_cart->item_discount_id($row['row_id']), 'Remove Discount', 'class="btn btn-xs btn-danger"'); ?>
								</td>
							</tr>
							<?php } ?>
						<?php } ?>
					</tbody>
					<tfoot>
						<?php 
							// Ensure the 'item_summary_savings_total()' functions format argument is set to 'FALSE' to prevent comparing a formatted STRING against an INT of '0'.
							if ($this->flexi_cart->item_summary_savings_total(FALSE) > 0) { 
						?>
							<tr class="discount">
								<th colspan="3">Item Summary Discount Savings Total</th> 
								<td class="text-center"><?php echo $this->flexi_cart->item_summary_savings_total();?></td>
							</tr>
						<?php } ?>
						<tr>
							<th colspan="3">Item Summary Total</th>
							<td class="text-center"><div class="lead"><?php echo $this->flexi_cart->item_summary_total();?></div></td>
						</tr>
					</tfoot>
				</table>

				<?php 
					// Example on how to display how much more needs to be spent, or how many more items need to be added to activate a discount.
					// The function can work on both item and summary discounts.
					// Note: Ensure '$free_shipping_discount' contains no formatted currency strings by submitting FALSE as the 2nd argument to 'get_discount_requirements'.
					$free_shipping_discount = $this->flexi_cart->get_discount_requirements(5, FALSE);
					if ($free_shipping_discount['value'] > 0):
				?>
					<div class="alert alert-info">
						Spend another <?php echo $this->flexi_cart->get_currency_value($free_shipping_discount['value']);?> and get free worldwide shipping!
					</div>
				<?php endif ?>

				<?php if ($countries): // Updating the cart's shipping data ?>
					<div class="page-header">
						<h4 class="lead">Shipping</h4>
						<p>tax rates based on the shipping location</p>
					</div>
					<div class="table" id="cart_shipping">
						<div class="form-inline form-group">
							<div class="form-group">
								<label class="control-label">Country:
									<select name="shipping[country]" class="form-control">
										<option value="0"> - Country - </option>
									<?php foreach($countries as $country) { ?>
										<option value="<?php echo $country['loc_id'];?>" <?php echo ($this->flexi_cart->match_shipping_location_id($country['loc_id'])) ? 'selected="selected"' : NULL;?>>
											<?php echo $country['loc_name'];?>
										</option>
									<?php } ?>
									</select>
								</label>
							</div>
							
							<div class="form-group">
								<label class="control-label">State:
									<select name="shipping[state]" <?php if (empty($states)) { echo 'disabled="disabled"'; }?> class="form-control">
										<option value="0"> - State - </option>
									<?php foreach($states as $state) { ?>
										<option value="<?php echo $state['loc_id'];?>" <?php echo ($this->flexi_cart->match_shipping_location_id($state['loc_id'])) ? 'selected="selected"' : NULL;?>>
											<?php echo $state['loc_name'];?>
										</option>
									<?php } ?>
									</select>
								</label>
							</div>

							<div class="form-group">
								<label class="control-label">Postal Code:
									<!-- The value '3' in the 'shipping_location_name()' function requests the location name for the 3rd location tier - in this example, postal/zip code -->
									<input type="text" name="shipping[postal_code]" value="<?php echo $this->flexi_cart->shipping_location_name(3);?>" <?php if (empty($postal_codes)) { echo 'disabled="disabled"'; }?> placeholder="101010" class="form-control"/>
								</label>
							</div>
						</div>


						<div class="form-group">
							<label class="control-label">Shipping Options:</label>
							<select name="shipping[db_option]" class="form-control">
								<option value="0"> - Shipping Options - </option>
								<?php 
									if (! empty($shipping_options)) {
										foreach($shipping_options as $shipping) { 
								?>
									<option value="<?php echo $shipping['id'];?>" <?php echo ($shipping['id'] == $this->flexi_cart->shipping_id()) ? 'selected="selected"' : NULL; ?>>
										<?php echo $shipping['name']." : ".$shipping['description'];?>
									</option>
								<?php } } else { ?>
									<option value="0">
										We'll quote you prior to dispatch.
									</option>
								<?php } ?>
							</select>
						</div>
					</div>
				<?php else: ?>					
					<?php // There are no shipping rules setup in the cart ?>
				<?php endif ?>
				
				<div class="panel panel-success">
					<div class="panel-heading" style="text-transform:uppercase">
						Discount / Reward Voucher Codes
					</div>
					<div class="panel-body bg-success" style="padding:20px">
						
						<?php if ($discount_data = $this->flexi_cart->discount_codes()): ?>
							<div class="form-inline">
								<?php 
								// Get an array of all discount codes. The returned array keys are 'id', 'code' and 'description'.
								foreach($discount_data as $discount_codes):
								?>
									<input type="text" name="discount[<?php echo $discount_codes['code']; ?>]" value="<?php echo $discount_codes['code']; ?>" class="form-control" /> 
									<input type="submit" name="update_discount" value="Update" class="btn btn-primary"/>
									<input type="submit" name="remove_discount_code[<?php echo $discount_codes['code']; ?>]" value="Remove" class="btn btn-danger"/>
									<p class="help-block">* <?php echo $discount_codes['description'];?></p>
								<?php endforeach ?>
							</div>
						<?php else: ?>
							<div class="form-group">
								<label for="control-label">Enter Discount Code</label>
								<input type="text" name="discount[0]" value="" class="form-control" /> 
								<p class="help-block">If you have a Discount code, enter it here to use it.</p>
								<input type="submit" name="update_discount" value="Add Discount Code" class="btn btn-primary"/> 
								<input type="submit" name="remove_all_discounts" value="Remove all Discounts" class="btn btn-danger" title="Remove all discount codes and all manually set discounts."/>
							</div>
						<?php endif ?>
					</div>
				</div>

				<div class="panel panel-primary">
					<div class="panel-heading" style="text-transform:uppercase">Cart Summary</div>
					<table class="table table-striped" id="cart_summary">
						<tbody>
							<tr>
								<td>
									Reward Points Earned
								</td>
								<td>
									<?php echo $this->flexi_cart->total_reward_points();?> points
								</td>
							</tr>
							<tr>
								<td>
									Total Weight
								</td>
								<td>
									<?php echo $this->flexi_cart->total_weight();?>
								</td>
							</tr>
							<tr>
								<td>
									Item Summary Total
								</td>
								<td>
									<?php echo $this->flexi_cart->item_summary_total();?>
								</td>
							</tr>
							<tr>
								<td>
									Shipping Rate
								</td>
								<td>
									<?php echo $this->flexi_cart->shipping_total();?>
								</td>
							</tr>
															
						<?php if ($this->flexi_cart->summary_discount_status()) { ?>
							<tr class="discount">
								<th>Discount Summary</th>
								<td>&nbsp;</td>
							</tr>
							
						<?php if ($this->flexi_cart->item_summary_discount_status()) { ?>
							<!-- 
								Rather than repeating the descriptions of each item discount listed via the cart, 
								this example summarises the discount totals of all items.
							-->
							<tr class="discount">
								<th>
									<span class="pad_l_20">
										&raquo; Item discount discount savings
									</span>
								</th>
								<td>
									<?php echo $this->flexi_cart->item_summary_savings_total();?>
								</td>
							</tr>
						<?php } ?>
							
							<!-- 
								This example uses the 'summary_discount_data()' function to return an array of summary discount values and descriptions.
								An alternative to using a custom loop to return this discount array, is to call the 'summary_discount_description()' function,
								which will return a formatted string of all summary discounts. 
							-->
						<?php foreach($discounts as $discount) { ?>
							<tr class="discount">
								<th>
									<span class="pad_l_20">
										&raquo; <?php echo $discount['description'];?>
									<?php if (! empty($discount['id'])) { ?>
										<?php echo anchor('unset_discount/'.$discount['id'], 'Remove', 'class="btn btn-xs btn-danger"') ?>
									<?php } ?>
									</span>
								</th>
								<td><?php echo $discount['value'];?></td>
							</tr>
						<?php } ?>
							<tr class="discount">
								<th>Discount Savings Total</th>
								<td><?php echo $this->flexi_cart->cart_savings_total();?></td>
							</tr>
						<?php } ?>

							
						<?php if ($this->flexi_cart->surcharge_status()) { ?>
							<tr class="surcharge">
								<th>Surcharge Summary</th>
								<td>&nbsp;</td>
							</tr>
							
							<!-- 
								This example uses the 'surcharge_data()' function to return an array of surcharge values and descriptions.
								An alternative to using a custom loop to return this surcharge array, is to call the 'surcharge_description()' function,
								which will return a formatted string of all surcharges.
							-->
						<?php foreach($surcharges as $surcharge) { ?>
							<tr class="surcharge">
								<th>
									<span class="pad_l_20">
										&raquo; <?php echo $surcharge['description'];?>
										: <a href="<?php echo base_url() ?>standard_library/unset_surcharge/<?php echo $surcharge['id']; ?>">Remove</a>
									</span>
								</th>
								<td><?php echo $surcharge['value'];?></td>
							</tr>
						<?php } ?>
							<tr class="surcharge">
								<th>Surcharge Total</th>
								<td><?php echo $this->flexi_cart->surcharge_total();?></td>
							</tr>
						<?php } ?>

						<?php if ($this->flexi_cart->reward_voucher_status()) { ?>
							<tr class="voucher">
								<th>Reward Voucher Summary</th>
								<td>&nbsp;</td>
							</tr>
							
							<!-- This example uses the 'reward_voucher_data()' function to return an array of reward voucher values and descriptions. -->
						<?php foreach($reward_vouchers as $voucher) { ?>
							<tr class="voucher">
								<th>
									<span class="pad_l_20">
										&raquo; <?php echo $voucher['description'];?>
										: <a href="<?php echo base_url() ?>standard_library/unset_discount/<?php echo $voucher['id']; ?>">Remove</a>
									</span>
								</th>
								<td><?php echo $voucher['value'];?></td>
							</tr>
						<?php } ?>
							<tr class="voucher">
								<th>Reward Voucher Total</th>
								<td><?php echo $this->flexi_cart->reward_voucher_total();?></td>
							</tr>
						<?php } ?>

						</tbody>
						<tfoot>
							<tr>
								<td>
									Sub Total (ex. tax)
								</td>
								<td>
									<?php echo $this->flexi_cart->sub_total();?>
								</td>
							</tr>
							<tr>
								<td>
									<?php echo $this->flexi_cart->tax_name()." @ ".$this->flexi_cart->tax_rate(); ?>
								</td>
								<td>
									<?php echo $this->flexi_cart->tax_total();?>
								</td>
							</tr>							
							<tr class="grand_total">
								<th>Grand Total</th>
								<th><?php echo $this->flexi_cart->total();?></th>
							</tr>
						</tfoot>
					</table>
				</div>
				
				<?php if (! $this->flexi_cart->location_shipping_status()): ?>
					<div class="alert alert-warning">
						<strong>Shipping Warning!</strong>
						There are items in your cart that cannot be shipped to your current shipping location.
					</div>
				<?php endif ?>

				<div class="well well-sm">
					<div class="pull-left">
						<div class="btn-group">
							<input type="submit" name="update" value="Update Cart" class="btn btn-lg btn-success"/>
							<input type="submit" name="clear" value="Clear Cart" class="btn btn-lg btn-default"/>
							<input type="submit" name="destroy" value="Destroy Cart" class="btn btn-lg btn-warning" title="Destroy Cart will reset the cart to default values."/>
						</div>
					</div>
					<div class="pull-right">
						<?php echo anchor('checkout', 'Checkout', 'class="btn btn-lg btn-primary"') ?>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<?= form_close() ?>

	<script>
	$(function() {
		// Ajax Cart Update Example
		// Submit the cart form if a shipping option select or input element is changed.
		$('select[name^="shipping"], input[name^="shipping"]').on('change', function()
		{
			// Loop through shipping select and input fields creating object of their names and values that will then be submitted via 'post'
			var data = new Object();
			$('select[name^="shipping"], input[name^="shipping"]').each(function()
			{
				data[$(this).attr('name')] = $(this).val();
			});
			
			// Set 'update' so controller knows to run update method.
			data['update'] = true;

			// !IMPORTANT NOTE: As of CI 2.0, if csrf (cross-site request forgery) protection is enabled via CI's config,
			// this must be included to submit the token.
			data['csrf_test_name'] = $('input[name="csrf_test_name"]').val();

			// $('#cart_content').load('<?php echo current_url();?> #ajax_content', data);


		        $.ajax({
		        	type: 'POST',
		        	data: data,
		            url: '<?php echo current_url(); ?>',
		            cache: true,
		            beforeSend: function(){
		            },
		            success: function(data){
		            	$('body').html(data)
		                // container.addClass('animated zoomOut');
		                // setTimeout(function(){
			               //  container.remove();
		                // }, 550);
		            },
		            complete: function(data){
		            	$('body').append(data)
		            }
		        });
		});
	});
	</script>
<?php endif ?>

<?php // Display saved cart session for user to load or delete ?>
<div class="modal fade" id="load-cart-modal" tabindex="-1" role="dialog" aria-labelledby="load-cart-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        	<div class="panel panel-default panel-inverse" style="margin:0">
				<div class="panel-heading">
					<strong>LOAD SAVED CART</strong>
					<button type="button" class="close" data-dismiss="modal">
	                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
	                </button>
				</div>
				<?php if ($saved_cart_data): ?>
					<table class="table">
						<tbody>
							<?php foreach($saved_cart_data as $row): ?>
								<tr>
									<td>
										Saved on : 
										<?php echo date('jS M Y @ H:i', strtotime($row[$this->flexi_cart->db_column('db_cart_data','date')])); ?>
									</td>
									<td class="text-right">
										<a href="<?php echo site_url('load_cart_data/'.$row[$this->flexi_cart->db_column('db_cart_data','id')]) ?>" class="btn btn-xs btn-primary">
											Load
										</a>
										<a href="<?php echo site_url('delete_cart_data/'.$row[$this->flexi_cart->db_column('db_cart_data','id')]) ?>" class="btn btn-xs btn-danger">
											Delete
										</a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				<?php else: ?>
					<div class="alert alert-warning" style="margin:0">
						<?php if ($user): ?>
							There are currently no saved carts to load.
						<?php else: ?>
							You must be logged in to load saved carts.
							<?php echo anchor('login', 'Login', 'class="alert-link"') ?>
						<?php endif ?>
					</div>
				<?php endif ?>
				<div class="panel-footer">
					<small>Note: Only saved carts for orders that have not been completed are listed.</small>
				</div>
			</div>
        </div>
    </div>
</div>

<?php $this->load->view('public/templates/footer') ?>
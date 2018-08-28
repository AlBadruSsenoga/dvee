<?php $this->load->view('public/templates/header', array(
	'title' => 'Dashboard',
	'link' => 'account',
	'breadcrumbs' => array(
		0 => array('name'=>'Dashboard','link'=>'user_dashboard'),
		1 => array('name'=>'My Orders','link'=>FALSE),
	)
)) ?>

<?php $this->load->view('public/dashboard/dashboard_header', array('active' => 'orders')) ?>

<div class="lead page-header text-right">
	<div class="">
		<strong>Order Number:</strong>
		<?php echo $summary_data[$this->flexi_cart_admin->db_column('order_summary', 'order_number')]; ?>
	</div>
	<div class="">
		<strong>Order Date:</strong>
		<?php echo date('jS M Y', strtotime($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'date')]));?>
		
		<strong style="margin-left:10px">Order Status:</strong>
		<?php
			if ($summary_data[$this->flexi_cart_admin->db_column('order_status', 'cancelled')] == 1)
			{
				echo '<strong class="highlight_red">'.$summary_data[$this->flexi_cart_admin->db_column('order_status', 'status')].'</strong>';
			}
			else
			{
				echo $summary_data[$this->flexi_cart_admin->db_column('order_status', 'status')];									
			}
		?>
	</div>
</div>

<?php if (empty($summary_data)): ?>
	<div class="alert alert-warning">There are no orders available to view.</div>
<?php else: ?>
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Order Details</h4>
				</div>
				<div class="panel-body">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#order-details" aria-controls="order-details" role="tab" data-toggle="tab">
								Order Details
							</a>
						</li>
						<li role="presentation">
							<a href="#order-shipping" aria-controls="order-shipping" role="tab" data-toggle="tab">
								Shipping Details
							</a>
						</li>
						<li role="presentation">
							<a href="#order-billing" aria-controls="order-billing" role="tab" data-toggle="tab">
								Billing Details
							</a>
						</li>
						<li role="presentation">
							<a href="#order-contact" aria-controls="order-contact" role="tab" data-toggle="tab">
								Contact Details
							</a>
						</li>
						<li role="presentation">
							<a href="#order-payment" aria-controls="order-payment" role="tab" data-toggle="tab">
								Payment Details
							</a>
						</li>
					</ul>
					<div class="tab-content" style="margin-top:2rem">
						<div role="tabpanel" class="tab-pane active" id="order-details">
							<?php  if (empty($item_data)): ?>
								<div class="alert alert-warning">There are no items associated with this order</div>
							<?php else: ?>
								<table id="cart_items" class="table table-striped">
									<thead>
										<tr>
											<th>Item</th>
											<th class="text-center">Price</th>
											<th class="text-center" title="Indicates the total quantity of items that were ordered.">
												Quantity Ordered
											</th>
											<th class="text-center" title="Indicates the quantity of items that have been marked as 'shipped'. Shipped items activate their associated reward points.">
												Quantity Shipped
											</th>
											<th class="text-center" title="Indicates the quantity of items that have been marked as 'cancelled'. Cancelled items are returned to stock.">
												Quantity Cancelled
											</th>
											<th class="text-center">Total</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($item_data as $row) : $order_detail_id = $row[$this->flexi_cart_admin->db_column('order_details', 'id')]; ?>
										<tr>
											<td>
												<input type="hidden" name="update_details[<?php echo $order_detail_id;?>][id]" value="<?php echo $order_detail_id;?>"/>
												
												<!-- Item Name -->
												<?php echo $row[$this->flexi_cart_admin->db_column('order_details', 'item_name')];?>

												<!-- Display an item status message if it exists -->
												<?php 
													echo (! empty($row[$this->flexi_cart_admin->db_column('order_details', 'item_status_message')])) ? 
														'<br/><span class="text-danger">'.$row[$this->flexi_cart_admin->db_column('order_details', 'item_status_message')].'</span>' : NULL; 
												?>
												
												<!-- Display an items options if they exist -->
												<?php 
													echo (! empty($row[$this->flexi_cart_admin->db_column('order_details', 'item_options')])) ? 
														'<br/>'.$row[$this->flexi_cart_admin->db_column('order_details', 'item_options')] : NULL; 
												?>
											</td>
											<td class="text-center">
											<?php 
												// If an item discount exists.
												if ($row[$this->flexi_cart_admin->db_column('order_details', 'item_discount_quantity')] > 0) 
												{
													// If the quantity of non discounted items is zero, strike out the standard price.
													if ($row[$this->flexi_cart_admin->db_column('order_details', 'item_non_discount_quantity')] == 0)
													{
														echo '<span class="strike">'.$this->flexi_cart_admin->format_currency($row[$this->flexi_cart_admin->db_column('order_details', 'item_price')], TRUE, 2, TRUE).'</span><br/>';
													}
													// Else, display the quantity of items that are at the standard price.
													else
													{
														echo number_format($row[$this->flexi_cart_admin->db_column('order_details', 'item_non_discount_quantity')]).' @ '.
															$this->flexi_cart_admin->format_currency($row[$this->flexi_cart_admin->db_column('order_details', 'item_price')], TRUE, 2, TRUE).'<br/>';
													}
													
													// If there are discounted items, display the quantity of items that are at the discount price.
													if ($row[$this->flexi_cart_admin->db_column('order_details', 'item_discount_quantity')] > 0)
													{
														echo number_format($row[$this->flexi_cart_admin->db_column('order_details', 'item_discount_quantity')]).' @ '.
															$this->flexi_cart_admin->format_currency($row[$this->flexi_cart_admin->db_column('order_details', 'item_discount_price')], TRUE, 2, TRUE);
													}
												}
												// Else, display price as normal.
												else
												{
													echo $this->flexi_cart_admin->format_currency($row[$this->flexi_cart_admin->db_column('order_details', 'item_price')], TRUE, 2, TRUE);
												}
											?>
											</td>
											<td class="text-center">
												<?php echo round($row[$this->flexi_cart_admin->db_column('order_details', 'item_quantity')], 2); ?>
											</td>
											<td class="text-center">
												<?php echo ($summary_data[$this->flexi_cart_admin->db_column('order_status', 'cancelled')]) ?>
											</td>
											<td class="text-center">
												<?php echo ($summary_data[$this->flexi_cart_admin->db_column('order_status', 'cancelled')]) ?>
											</td>
											<td class="text-center">
											<?php 
												// If an item discount exists, strike out the standard item total and display the discounted item total.
												if ($row[$this->flexi_cart_admin->db_column('order_details', 'item_discount_quantity')] > 0)
												{
													echo '<s>'.$this->flexi_cart_admin->format_currency($row[$this->flexi_cart_admin->db_column('order_details', 'item_price_total')], TRUE, 2, TRUE).'</s><br/>';
													echo $this->flexi_cart_admin->format_currency($row[$this->flexi_cart_admin->db_column('order_details', 'item_discount_price_total')], TRUE, 2, TRUE);
												}
												// Else, display item total as normal.
												else
												{
													echo $this->flexi_cart_admin->format_currency($row[$this->flexi_cart_admin->db_column('order_details', 'item_price_total')], TRUE, 2, TRUE);
												}
											?>
											</td>
										</tr>
										<?php 
										// If an item discount exists.
										if (! empty($row[$this->flexi_cart_admin->db_column('order_details', 'item_discount_description')])): ?>
										<tr class="discount">
											<td colspan="6">
												Discount: <?php echo $row[$this->flexi_cart_admin->db_column('order_details', 'item_discount_description')];?>
											</td>
										</tr>
										<?php endif ?>
										<?php endforeach ?>
									</tbody>
									<tfoot>
									<?php if ($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'item_summary_savings_total')] > 0) { ?>
										<tr class="discount">
											<th colspan="5">Item Summary Discount Total</th> 
											<td class="text-center">
											<?php echo $this->flexi_cart_admin->format_currency($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'item_summary_savings_total')], TRUE, 2, TRUE);?></td>
										</tr>
									<?php } ?>
										<tr>
											<th colspan="5">Item Summary Total</th>
											<td class="text-center"><?php echo $this->flexi_cart_admin->format_currency($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'item_summary_total')], TRUE, 2, TRUE);?></td>
										</tr>
									</tfoot>
								</table>
							<?php endif ?>
						</div>
						<div role="tabpanel" class="tab-pane" id="order-shipping">
							<table>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Name: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_ship_name'];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Address 01: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_ship_address_01'];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Address 02: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_ship_address_02'];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">City / Town: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_ship_city'];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">State / County: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_ship_state'];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Post / Zip Code: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_ship_post_code'];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Country: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_ship_country'];?></td>
								</tr>
							</table>
						</div>
						<div role="tabpanel" class="tab-pane" id="order-billing">
							<table>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Name:</th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_bill_name'];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Address 01:</th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_bill_address_01'];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Address 02: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_bill_address_02'];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">City / Town: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_bill_city'];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">State / County: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_bill_state'];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Post / Zip Code: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_bill_post_code'];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Country: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_bill_country'];?></td>
								</tr>
							</table>
						</div>
						<div role="tabpanel" class="tab-pane" id="order-contact">
							<table>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Email: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_email'];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Phone: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_phone'];?></td>
								</tr>
								<?php if (! empty($summary_data['ord_demo_comments'])) { ?>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Comments: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data['ord_demo_comments'];?></td>
								</tr>
								<?php } ?>
							</table>
						</div>
						<div role="tabpanel" class="tab-pane" id="order-payment">
							<table>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Currency: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data[$this->flexi_cart_admin->db_column('order_summary', 'currency_name')];?></td>
								</tr>
								<tr>
									<th style="padding: 1rem; padding-left: 0">Exchange Rate: </th>
									<td style="padding: 1rem; padding-left: 0"><?php echo $summary_data[$this->flexi_cart_admin->db_column('order_summary', 'exchange_rate')];?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default panel-inverse">
				<div class="panel-heading">
					<h4 class="panel-title">Order Summary</h4>
				</div>
				<div class="panel-body">
					<table id="cart_summary">
						<tbody>
							<tr>
								<th style="padding: 1rem; padding-left: 0">Reward Points Earned</th>
								<td style="padding: 1rem; padding-left: 0" class="text-center"><?php echo number_format($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'total_reward_points')]);?> points</td>
							</tr>
							<tr>
								<th style="padding: 1rem; padding-left: 0">Total Weight</th>
								<td style="padding: 1rem; padding-left: 0" class="text-center"><?php echo number_format($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'total_weight')]);?> grams</td>
							</tr>
							<tr>
								<th style="padding: 1rem; padding-left: 0">Shipping: <?php echo $summary_data[$this->flexi_cart_admin->db_column('order_summary', 'shipping_name')];?></th>
								<td style="padding: 1rem; padding-left: 0" class="text-right"><?php echo $this->flexi_cart_admin->format_currency($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'shipping_total')], TRUE, 2, TRUE);?></td>
							</tr>

						<!-- Display discounts -->
						<?php if ($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'savings_total')] > 0): ?>
							<tr class="discount">
								<th style="padding: 1rem; padding-left: 0">Discount Summary</th>
								<td style="padding: 1rem; padding-left: 0">&nbsp;</td>
							</tr>
							
							<!-- Item discounts -->
							<?php if ($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'item_summary_savings_total')] > 0) { ?>
							<tr class="discount">
								<td style="padding: 1rem; padding-left: 0">
									<span class="pad_l_20">
										Item discount savings : <?php echo $this->flexi_cart_admin->format_currency($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'item_summary_savings_total')], TRUE, 2, TRUE);?>
									</span>
								</td>
								<td>&nbsp;</td>
							</tr>
							<?php } ?>	
						
							<!-- Summary discounts -->
							<?php if ($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'summary_savings_total')] > 0) { ?>
							<tr class="discount">
								<td style="padding: 1rem; padding-left: 0">
									<?php echo $summary_data[$this->flexi_cart_admin->db_column('order_summary', 'summary_discount_description')];?>
								</td>
								<td>&nbsp;</td>
							</tr>
							<?php } ?>
						
							<!-- Total of all discounts -->
							<tr class="discount">
								<td style="padding: 1rem; padding-left: 0">Discount Savings Total</td>
								<td style="padding: 1rem; padding-left: 0" class="text-right"><?php echo $this->flexi_cart_admin->format_currency($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'savings_total')], TRUE, 2, TRUE);?></td>
							</tr>
						<?php endif ?>

						<!-- Display summary of all surcharges -->
						<?php if ($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'surcharge_total')] > 0): ?>
							<tr class="surcharge">
								<th style="padding: 1rem; padding-left: 0">Surcharge Summary</th>
								<td style="padding: 1rem; padding-left: 0">&nbsp;</td>
							</tr>
							<tr class="surcharge">
								<td  style="padding: 1rem; padding-left: 0">
									<?php echo $summary_data[$this->flexi_cart_admin->db_column('order_summary', 'surcharge_description')];?>
								</td>
								<td>&nbsp;</td>
							</tr>
							<tr class="surcharge">
								<td style="padding: 1rem; padding-left: 0">Surcharge Total</td>
								<td style="padding: 1rem; padding-left: 0" class="text-right"><?php echo $this->flexi_cart_admin->format_currency($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'surcharge_total')], TRUE, 2, TRUE);?></td>
							</tr>
						<?php endif ?>
							
						<!-- Display summary of all reward vouchers -->
						<?php if ($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'reward_voucher_total')] > 0): ?>
							<tr class="voucher">
								<th style="padding: 1rem; padding-left: 0">Reward Voucher Summary</th>
								<td style="padding: 1rem; padding-left: 0">&nbsp;</td>
							</tr>
							<tr class="voucher">
								<td style="padding: 1rem; padding-left: 0">
									<?php echo $summary_data[$this->flexi_cart_admin->db_column('order_summary', 'reward_voucher_description')];?>
								</td>
								<td>&nbsp;</td>
							</tr>
							<tr class="voucher">
								<td style="padding: 1rem; padding-left: 0">Reward Voucher Total</td>
								<td style="padding: 1rem; padding-left: 0" class="text-right"><?php echo $this->flexi_cart_admin->format_currency($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'reward_voucher_total')], TRUE, 2, TRUE);?></td>
							</tr>
						<?php endif ?>								
							
						<!-- Display refund summary -->
						<?php if ($refund_data[$this->flexi_cart_admin->db_column('order_details', 'item_price')] > 0): ?>
							<tr class="refund">
								<td style="padding: 1rem; padding-left: 0">
									Refund Cancelled Items 
									<small>
										This value is an  <em class="uline">estimate</em> of the orders total refund value, however, it does not include any percentage based surcharges or discounts that may have been applied to the orders summary values. The grand total below does not include this refund.
									</small>
								</td>
								<td style="padding: 1rem; padding-left: 0" class="text-right">
								<?php
									if ($refund_data[$this->flexi_cart_admin->db_column('order_details', 'item_discount_price')] > 0)
									{
										echo $this->flexi_cart_admin->format_currency($refund_data[$this->flexi_cart_admin->db_column('order_details', 'item_discount_price')], TRUE, 2, TRUE);
									}
									else
									{
										echo $this->flexi_cart_admin->format_currency($refund_data[$this->flexi_cart_admin->db_column('order_details', 'item_price')], TRUE, 2, TRUE);
									}
								?>
								</td>
							</tr>
						<?php endif ?>
						</tbody>
						<tfoot>
							<tr>
								<th style="padding: 1rem; padding-left: 0">Sub Total (ex. tax)</th>
								<td style="padding: 1rem; padding-left: 0" class="text-right"><?php echo $this->flexi_cart_admin->format_currency($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'sub_total')], TRUE, 2, TRUE);?></td>
							</tr>
							<tr>
								<th style="padding: 1rem; padding-left: 0">
									<?php echo 'Tax @ '.$summary_data[$this->flexi_cart_admin->db_column('order_summary', 'tax_rate')].'%';?>
								</th>
								<td style="padding: 1rem; padding-left: 0" class="text-right"><?php echo $this->flexi_cart_admin->format_currency($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'tax_total')], TRUE, 2, TRUE);?></td>
							</tr>
							<tr class="grand_total">
								<th style="padding: 1rem; padding-left: 0">Grand Total</th>
								<td style="padding: 1rem; padding-left: 0" class="text-right"><?php echo $this->flexi_cart_admin->format_currency($summary_data[$this->flexi_cart_admin->db_column('order_summary', 'total')], TRUE, 2, TRUE);?></td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>

<?php $this->load->view('public/templates/footer') ?>
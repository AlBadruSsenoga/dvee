<?php $this->load->view('admin/templates/header', array(
	'title' => 'Update Currency',
	'link' => 'settings',
	'sub_link' => 'currency',
	'breadcrumbs' => array(
		0 => array('name'=>'Settings','link'=>'config'),
		1 => array('name'=>'Currencies','link'=>FALSE),
	)
)); ?>

<?php $this->load->view('admin/config/config_sub_header'); ?>

<div class="page-header">
	<h4 class="lead">Currencies</h4>
	<p>The base cart currency used for coversions is GBP and the base value is 1.</p>
</div>

<?php if (! empty($message)): ?>
	<?php if (validation_errors()): ?>
		<div class="alert alert-danger">Check the form for errors and try again.</div>
	<?php else: ?>
		<div id="message"><?= $message; ?></div>
	<?php endif ?>
<?php endif ?>

<?php if (empty($currency_data)): ?>
	<div class="alert alert-warning">
		There are no vouchers available to view.
		<?php echo anchor('admin/insert_currency', 'Insert New Currency', 'class="alert-link"') ?>
	</div>
<?php else: ?>
	<?php echo form_open(current_url()); ?>
		<div class="panel panel-default panel-inverse">
			<div class="panel-heading">
				<div class="lead pull-left" style="margin:0">Currencies</div>
				<?php echo anchor('admin/insert_currency', 'Insert New Currency', 'class="btn btn-sm btn-success pull-right"') ?>
				<div class="clearfix"></div>
			</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th class="info_req tooltip_trigger"
							title="The name of the currency.">
							Name
						</th>
						<th class="info_req tooltip_trigger"
							title="The exchange rate of the currency compared to the carts default currency.">
							Exchange Rate
						</th>
						<th class="text-center">Symbol</th>
						<th class="info_req tooltip_trigger"
							title="The currency symbol to display with currency values. For example '$' to display '$9.99'.">
							Symbol HTML
						</th>
						<th class="spacer_75 text-center tooltip_trigger"
							title="If checked, the currency symbol will be suffixed to the end of the currency value rather than the front. For example<br/> Checked: '9.99&euro;',<br/> Unchecked: '&pound;9.99'.">
							Suffix
						</th>
						<th class="info_req tooltip_trigger"
							title="The character used to separate currencies in excess of a thousand.<br/> For example, the comma in '1,000'.">
							Thousand
						</th>
						<th class="info_req tooltip_trigger"
							title="The character used to separate a currencies decimal value.<br/> For example, the period in '99.99'.">
							Decimal
						</th>
						<th class="spacer_75 text-center tooltip_trigger" 
							title="If checked, the currency will be set as 'active'.">
							Status
						</th>
						<th class="spacer_75 text-center tooltip_trigger" 
							title="If checked, the row will be deleted upon the form being updated.">
							Delete
						</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($currency_data as $row) { 
						$currency_id = $row[$this->flexi_cart_admin->db_column('currency', 'id')];
					?>
					<tr>
						<td>
							<input type="hidden" name="update[<?php echo $currency_id; ?>][id]" value="<?php echo $currency_id; ?>"/>
							<input type="text" name="update[<?php echo $currency_id; ?>][name]" value="<?php echo set_value('update['.$currency_id.'][name]', $row[$this->flexi_cart_admin->db_column('currency', 'name')]); ?>" class="form-control" style="width:90px"/>
						</td>
						<td>
							<input type="text" name="update[<?php echo $currency_id; ?>][exchange_rate]" value="<?php echo set_value('update['.$currency_id.'][exchange_rate]', round($row[$this->flexi_cart_admin->db_column('currency', 'exchange_rate')],4)); ?>" class="form-control validate_decimal" style="width:90px"/>
						</td>
						<td class="text-center">
							<?php echo $row[$this->flexi_cart_admin->db_column('currency', 'symbol')]; ?>
						</td>
						<td>
							<input type="text" name="update[<?php echo $currency_id; ?>][symbol]" value="<?php echo set_value('update['.$currency_id.'][symbol]', $row[$this->flexi_cart_admin->db_column('currency', 'symbol')]); ?>" class="form-control validate_alpha" style="width:90px"/>
						</td>
						<td class="text-center">
							<?php $symbol_suffix = (bool)$row[$this->flexi_cart_admin->db_column('currency', 'symbol_suffix')]; ?>
							<input type="hidden" name="update[<?php echo $currency_id; ?>][symbol_suffix]" value="0"/>
							<input type="checkbox" name="update[<?php echo $currency_id; ?>][symbol_suffix]" value="1" <?php echo set_checkbox('update['.$currency_id.'][symbol_suffix]','1', $symbol_suffix); ?>/>
						</td>
						<td>
							<input type="text" name="update[<?php echo $currency_id; ?>][thousand]" value="<?php echo set_value('update['.$currency_id.'][thousand]', $row[$this->flexi_cart_admin->db_column('currency', 'thousand_separator')]); ?>" class="form-control" style="width:90px"/>
						</td>
						<td>
							<input type="text" name="update[<?php echo $currency_id; ?>][decimal]" value="<?php echo set_value('update['.$currency_id.'][decimal]', $row[$this->flexi_cart_admin->db_column('currency', 'decimal_separator')]); ?>" class="form-control" style="width:90px"/>
						</td>
						<td class="text-center">
							<?php $status = (bool)$row[$this->flexi_cart_admin->db_column('currency', 'status')]; ?>
							<input type="hidden" name="update[<?php echo $currency_id; ?>][status]" value="0"/>
							<input type="checkbox" name="update[<?php echo $currency_id; ?>][status]" value="1" <?php echo set_checkbox('update['.$currency_id.'][status]','1', $status); ?>/>
						</td>
						<td class="text-center">
							<input type="hidden" name="update[<?php echo $currency_id; ?>][delete]" value="0"/>
							<input type="checkbox" name="update[<?php echo $currency_id; ?>][delete]" value="1"/>
						</td>
					</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="9">
							<input type="submit" name="update_currency" value="Update Currencies" class="btn btn-lg btn-primary"/>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>	
	<?php echo form_close(); ?>						
<?php endif ?>

<?php $this->load->view('admin/templates/footer'); ?>
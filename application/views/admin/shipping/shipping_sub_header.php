<ul class="nav nav-tabs" role="tablist" style="margin-bottom:3rem">
    <li role="presentation" class="<?php echo ($this->uri->segment(2) === 'shipping' OR $this->uri->segment(2) === 'shipping_rates'
    OR $this->uri->segment(2) === 'insert_shipping_rate') ? 'active' : '' ?>">
        <?php echo anchor('admin/shipping', 'Manage Shipping Options') ?>
    </li>
    <li role="presentation" class="<?php echo ($this->uri->segment(2) === 'insert_shipping') ? 'active' : '' ?>">
        <?php echo anchor('admin/insert_shipping', '<span class="glyphicon glyphicon-plus"></span> Shipping Options') ?>
    </li>
    <li role="presentation" class="<?php echo ($this->uri->segment(2) === 'tax') ? 'active' : '' ?>">
        <?php echo anchor('admin/tax', 'Manage Taxes') ?>
    </li>
    <li role="presentation" class="<?php echo ($this->uri->segment(2) === 'insert_tax') ? 'active' : '' ?>">
        <?php echo anchor('admin/insert_tax', '<span class="glyphicon glyphicon-plus"></span> Tax') ?>
    </li>
</ul>
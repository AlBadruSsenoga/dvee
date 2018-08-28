<ul class="nav nav-tabs" role="tablist" style="margin-bottom:3rem">
    <li role="presentation" class="<?php echo ($this->uri->segment(2) == 'item_discounts') ? 'active' : '' ?>">
        <?php echo anchor('admin/item_discounts', 'Manage Item Discounts') ?>
    </li>
    <li role="presentation" class="<?php echo ($this->uri->segment(2) == 'summary_discounts') ? 'active' : '' ?>">
        <?php echo anchor('admin/summary_discounts', 'Manage Summary Discounts') ?>
    </li>
    <li role="presentation" class="<?php echo ($active == 'group') ? 'active' : '' ?>">
        <?php echo anchor('admin/discount_groups', 'Manage Discount Groups') ?>
    </li>
    <li role="presentation" class="<?php echo ($active == 'insert') ? 'active' : '' ?>">
        <?php echo anchor('admin/insert_discount', 'Insert New Discount') ?>
    </li>
</ul>
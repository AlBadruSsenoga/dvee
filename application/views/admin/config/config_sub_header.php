<ul class="nav nav-tabs" role="tablist" style="margin-bottom:3rem">
    <li role="presentation" class="<?php echo ($this->uri->segment(2) === 'currency' OR $this->uri->segment(2) === 'insert_currency') ? 'active' : '' ?>">
        <?php echo anchor('admin/currency', 'Manage Currencies') ?>
    </li>
    <li role="presentation" class="<?php echo ($this->uri->segment(2) === 'config') ? 'active' : '' ?>">
        <?php echo anchor('admin/config', 'Cart Configuration') ?>
    </li>
    <li role="presentation" class="<?php echo ($this->uri->segment(2) === 'defaults') ? 'active' : '' ?>">
        <?php echo anchor('admin/defaults', 'Cart Defaults') ?>
    </li>
</ul>
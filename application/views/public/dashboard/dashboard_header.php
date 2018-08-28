<ul class="nav nav-tabs" role="tablist" style="margin-bottom:3rem">
    <li role="presentation" class="<?php echo ($active == 'orders') ? 'active' : '' ?>">
        <?php echo anchor('user_dashboard/orders', 'My Orders') ?>
    </li>
    <li role="presentation" class="<?php echo ($active == 'carts') ? 'active' : '' ?>">
        <?php echo anchor('user_dashboard/carts', 'Saved Carts') ?>
    </li>
    <li role="presentation" class="<?php echo ($active == 'points') ? 'active' : '' ?>">
        <?php echo anchor('user_dashboard/points_vouchers', 'Points & Vouchers') ?>
    </li>
</ul>
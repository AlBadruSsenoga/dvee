<ul class="nav nav-tabs" role="tablist" style="margin-bottom:3rem">
    <li role="presentation" class="<?php echo ($active == 'points') ? 'active' : '' ?>">
        <?php echo anchor('admin/user_reward_points', 'Manage Reward Points') ?>
    </li>
    <li role="presentation" class="<?php echo ($active == 'vouchers') ? 'active' : '' ?>">
        <?php echo anchor('admin/vouchers', 'Manage Reward Vouchers') ?>
    </li>
</ul>
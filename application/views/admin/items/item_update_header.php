
<ul class="nav nav-tabs" role="tablist" style="margin-bottom: 2rem">
    <li role="presentation" class="<?php echo ($active == 'details')?'active':'' ?>">
        <?php echo anchor('admin/update_item/'.$id, 'Details') ?>
    </li>
    <li role="presentation" class="<?php echo ($active == 'attributes')?'active':'' ?>">
        <?php echo anchor('admin/update_item_attributes/'.$id, 'Attributes') ?>
    </li>
    <li role="presentation" class="<?php echo ($active == 'options')?'active':'' ?>">
        <?php echo anchor('admin/update_item_options/'.$id, 'Variations') ?>
    </li>
    <li role="presentation" class="<?php echo ($active == 'images')?'active':'' ?>">
        <?php echo anchor('admin/update_item_images/'.$id, 'Images') ?>
    </li>
    <li role="presentation" class="<?php echo ($active == 'tax')?'active':'' ?>">
        <?php echo anchor('admin/update_item_tax/'.$id, 'Item Tax') ?>
    </li>
    <li role="presentation" class="<?php echo ($active == 'shipping')?'active':'' ?>">
        <?php echo anchor('admin/update_item_shipping/'.$id, 'Shipping') ?>
    </li>
</ul>
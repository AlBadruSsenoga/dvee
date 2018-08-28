<ul class="nav nav-tabs" role="tablist" style="margin-bottom:3rem">
    <li role="presentation" class="<?php echo ($this->uri->segment(2) === 'locations' OR $this->uri->segment(2) === 'insert_location') ? 'active' : '' ?>">
        <?php echo anchor('admin/location_types', 'Manage Locations') ?>
    </li>
    <li role="presentation" class="<?php echo ($this->uri->segment(2) === 'location_types' OR $this->uri->segment(2) === 'insert_location_type') ? 'active' : '' ?>">
        <?php echo anchor('admin/location_types', 'Location Types') ?>
    </li>
    <li role="presentation" class="<?php echo ($this->uri->segment(2) === 'zones' OR $this->uri->segment(2) === 'insert_zone') ? 'active' : '' ?>">
        <?php echo anchor('admin/zones', 'Manage Zones') ?>
    </li>
</ul>
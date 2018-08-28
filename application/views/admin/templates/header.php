<!DOCTYPE html>
<html>
<head>
    <?php
        $this->load->library('app');
        $app = $this->app->owner();

        // Defaults links.
        if (! isset($require)) $require = NULL; 
        if ( ! isset($title)) $title = 'Admin Dashboard';
        if ( ! isset($link)) $link = false;
        if ( ! isset($sub_link)) $sub_link = false;
        if ( ! isset($breadcrumbs)) $breadcrumbs = array();
    ?>
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" href="<?php echo $app->logo ?>" type="image/png" />
    <link rel="shortcut icon" href="<?php echo $app->logo ?>" type="image/png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jasny-bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/cropper.min.css') ?>" />

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
</head>

<body id="admin_dashboard"  <?= (isset($affix)) ? 'data-spy="scroll" data-target="'.$affix['target'].'" data-offset="'.$affix['offset'].'"' : '' ?>>
    <script>
        // Hide content onload, prevents JS flicker
        document.body.className += ' js-enabled';
    </script>
    
    <nav class="navbar navbar-inverse">
        <div class="container">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    		</div>

    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown <?php echo ($link == 'items') ? 'active' : '' ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Catalog <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">
                                <i class="glyphicon glyphicon-briefcase"></i> Products
                            </li>
                            <li class="<?php echo ($link == 'items' AND !$sub_link) ? 'active' : '' ?>">
                                <?php echo anchor('admin/items', 'Manage Products') ?>
                            </li>
                            <li class="<?php echo ($link == 'items' AND $sub_link == 'add') ? 'active' : '' ?>">
                                <?php echo anchor('admin/insert_item', 'Add New Product') ?>
                            </li>

                            <li class="header">
                                <i class="glyphicon glyphicon-th-list"></i> Categories
                            </li>
                            <li class="<?php echo ($link == 'items' AND $sub_link == 'categories') ? 'active' : '' ?>">
                                <?php echo anchor('admin/categories', 'Manage Categories') ?>
                            </li>
                            <li class="<?php echo ($link == 'items' AND $sub_link == 'add_category') ? 'active' : '' ?>">
                                <?php echo anchor('admin/categories', 'Add New Category') ?>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown <?php echo ($link == 'orders' OR $link == 'orders' OR $link == 'locations') ? 'active' : '' ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Sales <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">
                                <i class="glyphicon glyphicon-briefcase"></i> Orders
                            </li>
                            <li class="<?php echo ($link == 'orders' AND !$sub_link) ? 'active' : '' ?>">
                                <?php echo anchor('admin/orders', 'Manage Orders') ?>
                            </li>

                            <li class="header">
                                <i class="glyphicon glyphicon-send"></i> Shipping
                            </li>
                            <li class="<?php echo ($link == 'locations' AND !$sub_link) ? 'active' : '' ?>">
                                <?php echo anchor('admin/location_types', 'Manage Locations') ?>
                            </li>
                            <li class="<?php echo ($link == 'zones' AND !$sub_link) ? 'active' : '' ?>">
                                <?php echo anchor('admin/zones', 'Location Zones') ?>
                            </li>
                            <li class="<?php echo ($link == 'shipping' AND 'sub_link' == FALSE) ? 'active' : '' ?>">
                                <?php echo anchor('admin/shipping', 'Manage Shipping Rules') ?>
                            </li>

                            <li class="header">
                                <i class="glyphicon glyphicon-euro"></i> Taxes
                            </li>
                            <li class="<?php echo ($link == 'tax' AND !$sub_link) ? 'active' : '' ?>">
                                <?php echo anchor('admin/tax', 'Manage Taxes') ?>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown <?php echo ($link == 'discounts' OR $link == 'reward_points') ? 'active' : '' ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Promotions <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">
                                <i class="glyphicon glyphicon-stats"></i> Discounts
                            </li>
                            <li class="<?php echo ($link == 'discounts' AND !$sub_link) ? 'active' : '' ?>">
                                <?php echo anchor('admin/item_discounts', 'Item Discounts') ?>
                            </li>
                            <li class="<?php echo ($link == 'discounts' AND $sub_link == 'summary') ? 'active' : '' ?>">
                                <?php echo anchor('admin/summary_discounts', 'Summary Discounts') ?>
                            </li>
                            <li class="<?php echo ($link == 'discounts' AND $sub_link == 'groups') ? 'active' : '' ?>">
                                <?php echo anchor('admin/discount_groups', 'Discount Groups') ?>
                            </li>

                            <li class="header">
                                <i class="glyphicon glyphicon-tags"></i> Vouchers
                            </li>
                            <li class="<?php echo ($link == 'reward_points' AND !$sub_link) ? 'active' : '' ?>">
                                <?php echo anchor('admin/user_reward_points', 'User Reward Points') ?>
                            </li>
                            <li class="<?php echo ($link == 'reward_points' AND $sub_link == 'vouchers') ? 'active' : '' ?>">
                                <?php echo anchor('admin/vouchers', 'User Reward Vouchers') ?>
                            </li>
                        </ul>
                    </li>

                    <li class="<?php echo ($link == 'users') ? 'active' : '' ?>">
                        <a href="<?php echo site_url('admin/users') ?>">Users</a>
                    </li>

                    <li class="dropdown <?php echo ($link == 'extras') ? 'active' : '' ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Frontend <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">
                                <i class="glyphicon glyphicon-file"></i> Pages
                            </li>
                            <li class="<?php echo ($link == 'extras' AND $sub_link == 'pages') ? 'active' : '' ?>">
                                <?php echo anchor('admin/pages', 'Manage Pages') ?>
                            </li>
                            <li class="<?php echo ($link == 'extras' AND $sub_link == 'banners') ? 'active' : '' ?>">
                                <?php echo anchor('admin/banners', 'Manage Banners') ?>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown <?php echo ($link == 'settings') ? 'active' : '' ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Settings <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">
                                <i class="glyphicon glyphicon-cog"></i> Cart Settings
                            </li>
                            <li class="<?php echo ($link == 'settings' AND $sub_link == 'config') ? 'active' : '' ?>">
                                <?php echo anchor('admin/config', 'Configuration') ?>
                            </li>
                            <li class="<?php echo ($link == 'settings' AND $sub_link == 'defaults') ? 'active' : '' ?>">
                                <?php echo anchor('admin/defaults', 'Setup Cart Defaults') ?>
                            </li>

                            <li class="divider"></li>
                            
                            <li class="<?php echo ($link == 'settings' AND $sub_link == 'currency') ? 'active' : '' ?>">
                                <?php echo anchor('admin/currency', 'Manage Currencies') ?>
                            </li>
                            <li class="<?php echo ($link == 'orders' AND $sub_link == 'status') ? 'active' : '' ?>">
                                <?php echo anchor('admin/order_status', 'Order Statuses') ?>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown <?php echo ($link == 'admin') ? 'active' : '' ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php echo $user->username ?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="<?php echo ($link == 'admin' AND $sub_link === 'profile') ? 'active' : '' ?>">
                                <?php echo anchor('admin/profile', 'My Profile') ?>
                            </li>
                            <li><?php echo anchor_popup(base_url(), 'Frontend') ?></li>
                            <li role="separator" class="divider"></li>
    						<li>
                                <a href="<?php echo site_url('admin/logout') ?>">
                                    <button class="btn btn-block btn-danger">Logout</button>
                                </a>                  
                            </li>
                        </ul>
    				</li>
    			</ul>
    		</div>
    	</div>
    </nav>

    <div class="container" id="body_wrap">

        <?php // Breadcrumbs for admin pages ?>
        <ol class="breadcrumb">
            <li><?= anchor('admin', 'Dashboard') ?></li>
            <?php foreach ($breadcrumbs as $nav): ?>
                <li>
                    <?= ($nav['link']) ? anchor('admin/'.$nav['link'], $nav['name']) : $nav['name'] ?>
                </li>
            <?php endforeach ?>
        </ol>

        <!-- Ajax alerts -->
        <div class="modal fade" id="ajax-alert-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content alert alert-warning" style="padding:0">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div id="message"></div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        // Alert users to changes and notifications
        $alert = $this->session->flashdata('alert');
        ?>

        <?php if (isset($alert['type'])): ?>
            <?php
            if ($alert['type'] === 'success')
                $icon = '<span class="glyphicon glyphicon-ok-sign" style="margin-right:10px"></span>';
            else if($alert['type'] === "warning")
                $icon = '<span class="glyphicon glyphicon-warning-sign" style="margin-right:10px"></span>';
            else if($alert['type'] === "danger")
                $icon = '<span class="glyphicon glyphicon-exclamation-sign" style="margin-right:10px"></span>';
            else
                $icon = '<span class="glyphicon glyphicon-info-sign" style="margin-right:10px"></span>';
            ?>

            <div class="alert alert-<?= $alert['type'] ?> alert-fixed-top">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <?= $icon.$alert['message'] ?>
            </div>

            <?php if ($alert['type'] === 'success' || $alert['type'] === 'info' || $alert['type'] === 'warning'): ?>
                <script type="text/javascript">
                    setTimeout(function(){
                        $('.alert-fixed-top').addClass('fadeOutUp');
                    }, 5000)
                    setTimeout(function(){
                        $('.alert-fixed-top').remove();
                    }, 5500)
                </script>
            <?php endif ?>
        <?php endif ?>
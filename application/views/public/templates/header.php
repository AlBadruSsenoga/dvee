
<?php
$cart_data = $this->flexi_cart->cart_contents();

if ( ! isset($require)) $require = NULL; 
if ( ! isset($title)) $title = false;
if ( ! isset($title_description)) $title_description = false;
if ( ! isset($link)) $link = false;
if ( ! isset($sub_link)) $sub_link = false;

?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $owner->name.($link ? ' - '.$title : '') ?></title>
    <link rel="shortcut icon" href="<?= base_url($this->store->owner()->logo) ?>" type="image/png" />
    <link rel="shortcut icon" href="<?= base_url($this->store->owner()->logo) ?>" type="image/png" />
    <meta charset="utf-8">
    <meta name="description" content="Best products for online shopping."> 
    <meta name="keywords" content="e-commerce, online shopping, dvee cart, shopping cart, codeigniter">
    <meta name="robots" content="index, follow">
    <meta name="designer" content="code47 - Yesigye Ignatius : ignatiusyesigye@gmail.com"> 
    <meta name="copyright" content="Copyright © <?php echo date('Y').', '.$owner->name ?>, All Rights Reserved">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jasny-bootstrap.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/cropper.min.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/styles.css') ?>" />
    <script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
</head>

<body>
    <div class="container text-muted">
        <div class="row">
            <div class="col-md-3 text-center">
                <a href="<?php echo site_url() ?>" class="text-muted">
                    <img alt="Brand" src="<?php echo base_url($this->store->owner()->logo) ?>" style="margin-top:5px;width:45px;">
                    <div style="margin-top:5px;font-size:16px;font-weight:bold;"><?php echo $owner->name ?></div>
                </a>
            </div>
            <div class="col-md-9">
                <ul class="nav nav-pills navbar-right" style="overflow:initial;margin-top:20px;margin-bottom:10px">
                    <?php if ($user): ?>
                        <li role="presentation" class="scroll-item dropdown <?php echo ($link === 'account') ? 'active' : '' ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <?php if (is_file($user->avatar)): ?>
                                    <img src="<?= base_url($user->avatar) ?>" alt=""
                                    style="width:18px;border-radius:2px;">
                                <?php else: ?>
                                <span class="glyphicon glyphicon-user"></span>
                                <?php endif ?>
                                <?= $user->username ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><?php echo anchor('user_dashboard', '<i class="glyphicon glyphicon-dashboard" style="margin-right:10px;"></i> Dashboard') ?></li>
                                <li><?php echo anchor('profile', '<i class="glyphicon glyphicon-user" style="margin-right:10px;"></i> My Profile') ?></li>
                                <li><?php echo anchor('logout', '<i class="glyphicon glyphicon-log-out" style="margin-right:10px;"></i> Logout', 'style="color:#a94442"') ?></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li role="presentation" class="scroll-item dropdown <?php echo ($link === 'login') ? 'active' : '' ?>">
                            <a href="<?= site_url('login') ?>">
                                <span class="glyphicon glyphicon-user" style="margin-right:5px"></span>
                                Login
                            </a>
                        </li>
                        <li role="presentation" class="scroll-item <?php echo ($link === 'register') ? 'active' : '' ?>">
                            <?php echo anchor('register', 'Create an Account') ?>
                        </li>
                    <?php endif ?>
                    
                    <?php
                    // Admin has setup various currencies
                    if ($this->flexi_cart->get_currency_data()): ?>
                        <li role="presentation" class="scroll-item dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <?php echo $this->flexi_cart->currency_name() ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($this->flexi_cart->get_currency_data() as $currency): ?>
                                    <li class="<?php echo ($this->flexi_cart->currency_name() == $currency['curr_name']) ? 'active' : '' ?>">
                                        <?php $redirect = ($_SERVER['QUERY_STRING'] !== '') ? '?'.$_SERVER['QUERY_STRING'] : '' ?>
                                        <?php echo anchor('cart/set_currency'.'?currency='.$currency['curr_name'].'&redirect='.current_url().$redirect, $currency['curr_name']) ?>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </li>
                    <?php else:
                    // No setup currencies, use defaults.
                    ?>
                        <li role="presentation" class="disabled"><a href="#"><?php echo $this->flexi_cart->currency_name() ?></a></li>
                    <?php endif ?>
                    
                    <li role="presentation" class="scroll-item dropdown <?php echo ($link === 'cart') ? 'active' : '' ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            <span class="label <?php echo (0>1) ? 'label-success' : 'label-default' ?>" id="cart-item-no">
                                <?php echo $cart_data['summary']['total_rows'] ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu" style="padding:1px;" id="mini-cart">
                            <?php $this->load->view('public/cart/cart_data', array(
                                'cart_data'=>$cart_data
                            )) ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr style="margin-bottom:0">

    <nav class="navbar navbar-default" style="border-radius:0;margin:0;border:0;background:inherit;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand visible-xs" href="<?php echo base_url() ?>" >
                    APPNAME
                </a>
            </div>

            <div class="row">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <?php foreach ($this->store->menu() as $item): ?>
                            <li class="<?= ($link == $item->slug) ? 'active' : '' ?>">
                                <?php echo anchor('category/'.$item->slug.'/'.url_title($item->name), $item->name) ?>
                            </li>
                        <?php endforeach ?>
                    </ul>

                    <?= form_open('search', 'method="GET" class="navbar-form navbar-right" style="padding-right:0"') ?>
                        <div class="form-group input-group">
                            <input type="text" name="q" class="form-control" placeholder="Type Keywords" value="<?php echo $this->input->get('q') ?>">
                            <span class="input-group-btn">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </span>
                        </div>
                    <?= form_close() ?>

                    <ul class="nav navbar-nav navbar-right">
                        <?php foreach ($this->store->pages() as $item): ?>
                            <li class="<?= ($link == $item->slug) ? 'active' : '' ?>">
                                <?php echo anchor('page/'.$item->slug, $item->name) ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <hr style="margin-top:0;border-width: 3px;border-color:#777;">

    <div class="container" id="body">

        <?php // Breadcrumbs for pages ?>
        <?php if (!isset($breadcrumbs)) $breadcrumbs = array(); ?>
        <?php if ($breadcrumbs): ?>
            <ol class="breadcrumb">
                <?php foreach ($breadcrumbs as $nav): ?>
                    <li class="<?php echo ($nav['link']) ? '' : 'active' ?>">
                        <?php echo ($nav['link']) ? anchor($nav['link'], $nav['name']) : $nav['name'] ?>
                    </li>
                <?php endforeach ?>
            </ol>
        <?php endif ?>
        <?php // End of breadcrumbs ?>


        <?php // Alert users to errors, changes and notifications ?>
        <?php if (validation_errors()): ?>
            <div class="alert alert-danger">Check the form for errors and try again.</div>
        <?php else: ?>
            <?php if (! empty($message)): ?>
                <div id="message"> <?php echo $message ?> </div>
            <?php endif ?>
        <?php endif ?>
        <?php // End of Alerts ?>
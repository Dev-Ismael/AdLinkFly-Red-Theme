<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php $user = $this->request->session()->read('Auth.User'); ?>
<!DOCTYPE html>
<html lang="<?= locale_get_primary_language(null) ?>">
<head>
    <?= $this->Html->charset(); ?>
    <title><?= h($this->fetch('title')); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= h($this->fetch('description')); ?>">

    <?= $this->Assets->favicon() ?>

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


    <?php
    if ((bool)get_option('combine_minify_css_js', false)) {
        echo $this->Assets->css('/build/css/dashboard.min.css?ver=' . APP_VERSION);
    } else {
        echo $this->Assets->css('/vendor/bootstrap/css/bootstrap.min.css?ver=' . APP_VERSION);
        echo $this->Assets->css('/vendor/font-awesome/css/font-awesome.min.css?ver=' . APP_VERSION);
        echo $this->Assets->css('/vendor/dashboard/css/AdminLTE.min.css?ver=' . APP_VERSION);
        echo $this->Assets->css('/vendor/dashboard/css/skins/_all-skins.min.css?ver=' . APP_VERSION);
        echo $this->Assets->css('/css/app.css?ver=' . APP_VERSION);
    }

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>

    <?= get_option('admin_head_code'); ?>

    <?= $this->fetch('scriptTop') ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    * , body{
        font-family: 'Montserrat', sans-serif;
    }
    .skin-blue .main-header .navbar {
        background-color: #4EADAF;
    }
    .skin-blue .main-header .logo {
        background-color: #4EADAF;
    }
    .skin-blue .main-header .logo:hover{
        background-color: #4EADAF;
    }
    .skin-blue .main-header .navbar .sidebar-toggle:hover {
        background-color: #4EADAF;
    }

    a{
        color: #4EADAF
    }
    circle{
        color: #4EADAF;
        fill: #4EADAF;
    }
    path {
        fill: none;
        stroke: #4EADAF;
    }
    .morris-hover.morris-default-style .morris-hover-point {
        color: #4EADAF !important
    }
    a:active, a:focus, a:hover {
        color: #4EADAF;
    }
    .box.box-primary {
        border-top-color: #4EADAF;
    }
    .btn-primary {
        background-color: #4EADAF;
        border-color: #4EADAF;
    }
    .btn-primary:hover{
        background-color: #4EADAF;
        border-color: #4EADAF;
    }
    .skin-blue .main-header li.user-header {
        background-color: #4EADAF;
    }

    .content .col-lg-3 .small-box{
        background-color: #4EADAF !important;
        border-radius: 15px;
        box-shadow: 2px 2px 5px 5px #606060;
    }
 
    .skin-blue .left-side, .skin-blue .main-sidebar, .skin-blue .wrapper {
        background-color: #ffffff;
    }
    .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li:hover>a {
        color: #fff;
        background: #4EADAF73;
        border-left-color: #4EADAF;
    }
    .skin-blue .sidebar-menu>li>.treeview-menu {
        margin: 0 1px;
        background: #4EADAF45;
    }

    .btn-github, .btn-github:hover {
        color: #fff;
        background-color: #4EADAF;
        border-color: rgba(0,0,0,.2);
    }
    /* ================================================
    ===================== New Style
    ==================================================*/
    .small-box .icon{
        display: none;
    }
    .content .col-lg-3 .small-box{
        background-color: #fff !important;
        box-shadow: none;
        position : relative;
        height: 100px;
        border-radius: 0px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.02);

    }
    .content .col-lg-3 .small-box .inner {
        color: #3e485b;
        text-align: center;
        padding-top: 20px;
    }
    
    .small-box h3{
        color: #696969;
        font-size: 26px;
        font-weight: 100; 
        font-family: 'Montserrat', sans-serif;

    }
    .small-box .custom-color {
        width: 50px;
        height: 4px;
        background-color: #030303;
        position: absolute;
        left: calc(50% - 25px);
        top: 0px;
        border-radius: 50px;
    }
    .bg-yellow .custom-color{
        background-color: #f6c70d;
    }
    .bg-aqua .custom-color{
        background-color: #2486fd !important;
    }
    .bg-green .custom-color{
        background-color: #ff54ac;
    }
    .row .col-lg-3.col-xs-6:nth-of-type(2) .small-box.bg-aqua .custom-color {
        background-color: #00d8c1 !important;
    }
    .content {

        background-color: #f7fbff;
    }
    .skin-blue .content-header{
        background-color: #f7fbff;
 
    }
    .content .form-group.select select{
        width: 175px !important;
        border-radius: 10px;
        font-size: 14px;
    } 
    .skin-blue .sidebar-menu>li>a {
        border-left: 3px solid transparent;
        color: #000000bf;
        font-size: 17px;
        font-weight: bolder;
    }
    .skin-blue .main-header .logo{
        font-family: 'Montserrat', sans-serif;
  
    }
    .sidebar-menu>li:hover{
        background-color: none;
    }
    .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li:hover>a {
        color: #404040;
        background: #ffffff73;
        /* border-left-color: #4EADAF; */
    }
    .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li:hover>a{
        color: #4EADAF;

    }
    .skin-blue .main-header .navbar {
        background-color: #4EADAF;
    }
    .skin-blue .main-header .logo {
        background-color: #7ddde9;
    }
    .btn-github, .btn-github:hover {
        color: #fff;
        background-color: #7ddde9;
        border-color: rgba(0,0,0,.2);
    }
    .skin-blue .sidebar-menu>li>.treeview-menu {
        margin: 0 1px;
        background: #f9f9f945;
    }
    .skin-blue .treeview-menu>li>a:hover{
        color: #8aa4af;
    }
    .box.box-solid.box-success{
        border: none;
        box-shadow: 2px 2px 5px 5px #f3f3f3;
    }
    .box-header .box-title{
        font-family: 'Montserrat', sans-serif;
    }
    @media (max-width: 991px){
        .content-header>.breadcrumb {
            position: relative;
            margin-top: 5px;
            top: 0;
            right: 0;
            float: none;
            background: #f7fbff;
            padding-left: 10px;
        }
    }
    .small-box>.inner {
    padding: 10px;
    height: 90px;
}
.small-box h3, .small-box p {
    z-index: 5;
    font-size: 14px;
}
.skin-blue .treeview-menu>li.active>a, .skin-blue .treeview-menu>li>a:hover {
    color: #8aa4af;
}
.main-header .logo .logo-lg img{
    margin-top: -5px;
}
@media(max-width: 768px ){
    .main-header .logo .logo-lg img{
        width: 15rem;
    }
}
.main-header .logo .logo-lg{
    font-size: 12px
}
.main-header .sidebar-toggle:before {
    content: "";
}
.main-header .sidebar-toggle{
    padding: 0px;
}
.navbar-static-top .sidebar-toggle img{
    width: 4rem;
    padding: 5px 0px;
}
.skin-blue .main-header .logo {
    background-color: #4EADAF;
}

.balance-link{
    padding: 0px !important;
    margin: 0px !important;
    font-size: 14px;
    text-align: center;
}
.balance-link:hover{
    background-color: #4EADAF;
}
.balance-link span{
    display: block;
}
.balance-link span:nth-of-type(1) {
    padding-top: 5px;
    font-weight: bolder;
}
.balance-link span:nth-of-type(2){
    background-color: #28a745;
    border-radius: 4px;

}
.navbar-custom-menu>.navbar-nav>li a:hover{
    background-color: #4EADAF !important 
}
.nav-item.mr-4.d-none.d-lg-block a:hover{
    background-color: #4EADAF !important 
}
.content-header>h1{
    font-family: 'Montserrat', sans-serif;
}
/*========= Mini LOGO ========*/
span.logo-mini img{
    width: 40px;
    height: 40px;
}
 /* ====================================================================
  |   |   |   |   |   |   |   whats-app
  ===================================================================== */
  #whats-app{
    position: fixed;
    width: 50px;
    height: 50px;
    right: 30px;
    bottom: 90px;
    border-radius: 50%;
    z-index: 10000;
    cursor: pointer;
    opacity: 0.9;
  }
  @media (max-width:767px){
    #whats-app{
      width: 40px;
      height: 40px;
      right: 25px;
      bottom: 60px;
    }
  }













    </style>
</head>
<body class="hold-transition <?= get_option('admin_adminlte_theme_skin', 'skin-blue') ?> sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="<?= $this->Url->build('/'); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">
            <img src="https://i.ibb.co/tprwdN9/201229477-844442066448545-607551179543995696-n.jpg" alt="">
            </span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
                SHORTENFORYOU.COM
            </span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only"><?= __('Toggle navigation') ?></span>
                <img src="../webroot/modern_theme/build/img/custom-icons/back.png" alt="">
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <?php if (in_array($user['role'], ['admin', 'demo'])) : ?>
                        <li class="dropdown messages-menu">
                            <!-- Menu toggle button -->
                            <a href="<?= $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'dashboard',
                                'prefix' => 'member'
                            ]); ?>">
                                <i class="fa fa-dashboard"></i> <?= __('Member Area') ?>
                            </a>
                        </li>
                    <?php endif; ?>

                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="<?= "https://www.gravatar.com/avatar/" . md5(strtolower(trim($user['email']))) .
                            "?s=160" ?>"
                                 class="user-image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?= h($user['first_name']); ?></span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?= "https://www.gravatar.com/avatar/" .
                                md5(strtolower(trim($user['email']))) . "?s=160" ?>"
                                     class="img-circle">

                                <p>
                                    <small><?= __('Member since') ?> <?= $user['created'] ?></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?= $this->Url->build([
                                        'controller' => 'Users',
                                        'action' => 'profile',
                                        'prefix' => 'member'
                                    ]); ?>" class="btn btn-default btn-flat"><?= __('Profile') ?></a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?= $this->Url->build([
                                        'controller' => 'Users',
                                        'action' => 'logout',
                                        'prefix' => 'auth'
                                    ]); ?>" class="btn btn-default btn-flat"><?= __('Log out') ?></a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <?php if (in_array($user['role'], ['admin']) && require_database_upgrade()) : ?>
                <div class="text-center" style="padding: 10px 0;">
                    <button class="btn btn-danger" onclick="location.href='<?= $this->Url->build([
                        'controller' => 'Upgrade',
                        'action' => 'index',
                        'prefix' => 'admin'
                    ]); ?>'"><i class="fa fa-refresh"></i> <?= __('Complete Upgrade Process') ?></button>
                </div>
            <?php endif; ?>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'dashboard']); ?>"><i
                                class="fa fa-dashboard"></i> <span><?= __('Statistics') ?></span></a></li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-pie-chart"></i> <span><?= __('Reports') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Reports',
                                'action' => 'campaigns'
                            ]); ?>"><?= __('Campaigns') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span><?= __('Manage Links') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Links',
                                'action' => 'index'
                            ]); ?>"><?= __('All Links') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Links',
                                'action' => 'hidden'
                            ]); ?>"><?= __('Hidden Links') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Links',
                                'action' => 'inactive'
                            ]); ?>"><?= __('Inactive Links') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-database"></i> <span><?= __('Campaigns') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Campaigns',
                                'action' => 'index'
                            ]); ?>"><?= __('List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Campaigns',
                                'action' => 'createInterstitial'
                            ]); ?>"><?= __('Create Interstitial Campaign') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Campaigns',
                                'action' => 'createBanner'
                            ]); ?>"><?= __('Create Banner Campaign') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Campaigns',
                                'action' => 'createPopup'
                            ]); ?>"><?= __('Create Popup Campaign') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-line-chart"></i> <span><?= __('Ads') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'interstitial',
                                'prefix' => 'admin'
                            ]); ?>"><?= __('Interstitial') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'banner',
                                'prefix' => 'admin'
                            ]); ?>"><?= __('Banner') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'popup',
                                'prefix' => 'admin'
                            ]); ?>"><?= __('Popup') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-dollar"></i> <span><?= __('Withdraws') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Withdraws',
                                'action' => 'index'
                            ]); ?>"><?= __('List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Withdraws',
                                'action' => 'export'
                            ]); ?>"><?= __('Export') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-users"></i> <span><?= __('Users') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'index'
                            ]); ?>"><?= __('List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'add'
                            ]); ?>"><?= __('Add') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'referrals'
                            ]); ?>"><?= __('Referrals') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'export'
                            ]); ?>"><?= __('Export') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-bars"></i> <span><?= __('Membership Plans') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Plans',
                                'action' => 'index'
                            ]); ?>"><?= __('List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Plans',
                                'action' => 'add'
                            ]); ?>"><?= __('Add') ?></a></li>
                    </ul>
                </li>

                <li><a href="<?php echo $this->Url->build(['controller' => 'Invoices', 'action' => 'index']); ?>"><i
                                class="fa fa-credit-card"></i> <span><?= __('Invoices') ?></span></a></li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-file-text-o"></i> <span><?= __('Blog') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Posts',
                                'action' => 'index'
                            ]); ?>"><?= __('Posts List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Posts',
                                'action' => 'add'
                            ]); ?>"><?= __('Add Post') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-files-o"></i> <span><?= __('Pages') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Pages',
                                'action' => 'index'
                            ]); ?>"><?= __('List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Pages',
                                'action' => 'add'
                            ]); ?>"><?= __('Add') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-quote-left"></i> <span><?= __('Testimonials') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Testimonials',
                                'action' => 'index'
                            ]); ?>"><?= __('List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Testimonials',
                                'action' => 'add'
                            ]); ?>"><?= __('Add') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-bullhorn"></i> <span><?= __('Announcements') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Announcements',
                                'action' => 'index'
                            ]); ?>"><?= __('List') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Announcements',
                                'action' => 'add'
                            ]); ?>"><?= __('Add') ?></a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-gears"></i> <span><?= __('Settings') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'index'
                            ]); ?>"><?= __('Settings') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'email'
                            ]); ?>"><?= __('Email') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'socialLogin'
                            ]); ?>"><?= __('Social Login') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'payment'
                            ]); ?>"><?= __('Payment Methods') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Options',
                                'action' => 'withdrawal'
                            ]); ?>"><?= __('Withdrawal Methods') ?></a></li>
                    </ul>
                </li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1><?= h($this->fetch('content_title')); ?></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> <?= __('Dashboard') ?></a></li>
                <li class="active"><?= h($this->fetch('content_title')); ?></li>
            </ol>
        </section>

        <!-- whats-app-->
        <div id="whats-app">
            <a href="https://api.whatsapp.com/send?phone=0604017805">
                <img src="../webroot/modern_theme/build/img/whatsapp.png" alt="Go Up">
            </a>
        </div>

        <!-- Main content -->
        <section class="content">

            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        
        <!-- Default to the left -->
        <?= __('Copyright &copy;') ?> <?= h(get_option('site_name')) ?> <?= date("Y") ?>
    </footer>

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>


</div>

<?= $this->element('js_vars'); ?>

<?php
echo $this->Assets->script('/js/ads.js');

if ((bool)get_option('combine_minify_css_js', false)) {
    echo $this->Assets->script('/build/js/dashboard.min.js?ver=' . APP_VERSION);
} else {
    echo $this->Assets->script('/vendor/jquery.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/bootstrap/js/bootstrap.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/clipboard.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/conditionize.jquery.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/js/app.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/dashboard/js/app.min.js?ver=' . APP_VERSION);
}
?>

<?= $this->fetch('scriptBottom') ?>
</body>
</html>

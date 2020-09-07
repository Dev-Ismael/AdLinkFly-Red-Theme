<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $logged_user
 * @var \App\Model\Entity\Plan $logged_user_plan
 */
?>
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

    <?= get_option('member_head_code'); ?>

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
        background-color: #c50000;
    }
    .skin-blue .main-header .logo {
        background-color: #c50000;
    }
    .skin-blue .main-header .logo:hover{
        background-color: #c50000;
    }
    .skin-blue .main-header .navbar .sidebar-toggle:hover {
        background-color: #c50000;
    }

    a{
        color: #c50000
    }
    circle{
        color: #c50000;
        fill: #c50000;
    }
    path {
        fill: none;
        stroke: #c50000;
    }
    .morris-hover.morris-default-style .morris-hover-point {
        color: #c50000 !important
    }
    a:active, a:focus, a:hover {
        color: #c50000;
    }
    .box.box-primary {
        border-top-color: #c50000;
    }
    .btn-primary {
        background-color: #c50000;
        border-color: #c50000;
    }
    .btn-primary:hover{
        background-color: #c50000;
        border-color: #c50000;
    }
    .skin-blue .main-header li.user-header {
        background-color: #c50000;
    }

    .content .col-lg-3 .small-box{
        background-color: #c50000 !important;
        border-radius: 15px;
        box-shadow: 2px 2px 5px 5px #606060;
    }
 
    .skin-blue .left-side, .skin-blue .main-sidebar, .skin-blue .wrapper {
        background-color: #ffffff;
    }
    .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li:hover>a {
        color: #fff;
        background: #c5000073;
        border-left-color: #c50000;
    }
    .skin-blue .sidebar-menu>li>.treeview-menu {
        margin: 0 1px;
        background: #c5000045;
    }

    .btn-github, .btn-github:hover {
        color: #fff;
        background-color: #c50000;
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
    .content .col-lg-3 .small-box p{

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
        background-color: #2486fd;
    }
    .bg-aqua .custom-color{
        background-color: #00d8c1;
    }
    .bg-green .custom-color{
        background-color: #ff54ac;
    }
    .bg-red .custom-color{
        background-color: #f6c70d;
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
        /* border-left-color: #c50000; */
    }
    .skin-blue .sidebar-menu>li.active>a, .skin-blue .sidebar-menu>li:hover>a{
        color: #c50000;

    }
    .skin-blue .main-header .navbar {
        background-color: #c50000;
    }
    .skin-blue .main-header .logo {
        background-color: #c50000;
    }
    .btn-github, .btn-github:hover {
        color: #fff;
        background-color: #c50000;
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
    background-color: #c50000;
}
.navbar-custom-menu .dropdown.user.user-menu{
    display: 
}
.balance-link{
    padding: 0px !important;
    margin: 0px !important;
    font-size: 14px;
    text-align: center;
}
.balance-link:hover{
    background-color: #c50000;
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
    background-color: #c50000 !important 
}
.nav-item.mr-4.d-none.d-lg-block a:hover{
    background-color: #c50000 !important 
}
.content-header>h1{
    font-family: 'Montserrat', sans-serif;
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
<body class="hold-transition <?= get_option('member_adminlte_theme_skin', 'skin-blue') ?> sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="<?= $this->Url->build('/'); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">
                <img src="https://scontent-mrs2-2.xx.fbcdn.net/v/t1.15752-9/90551365_863338637427173_7325039682213904384_n.png?_nc_cat=106&_nc_sid=b96e70&_nc_ohc=EjOmNL-UpZgAX_RjcTE&_nc_ht=scontent-mrs2-2.xx&oh=91d1aa285e316ca10cccd55b743a4e4b&oe=5E9DC766" alt="">
            </span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
                Share4Cash.Club
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


                <li class="nav-item mr-4 d-none d-lg-block balance-box">

                    <a class="balance-link" href="/member/withdraws">
                        <span>Available Balance</span>
                        <span class="badge-inner">  </span>
                    </a>
                </li>
                    <?php if (in_array($logged_user->role, ['admin', 'demo'])) : ?>
                        <li class="dropdown messages-menu">
                            <!-- Menu toggle button -->
                            <a href="<?= $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'dashboard',
                                'prefix' => 'admin'
                            ]); ?>">
                                <i class="fa fa-dashboard"></i> <?= __('Administration Area') ?>
                            </a>
                        </li>
                    <?php endif; ?>

                    <li class="dropdown language-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-language"></i> <?= __('Language') ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach (get_site_languages(true) as $lang) : ?>
                                <li>
                                    <?= $this->Html->link(
                                        locale_get_display_name($lang, $lang),
                                        '/' . $this->request->url . '?lang=' . $lang
                                    ); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="<?= "https://www.gravatar.com/avatar/" . md5(strtolower(trim($logged_user->email))) .
                            "?s=160" ?>" class="user-image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?= h($logged_user->first_name); ?></span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?= "https://www.gravatar.com/avatar/" .
                                md5(strtolower(trim($logged_user->email))) . "?s=160" ?>" class="img-circle">
                                <p>
                                    <small><?= __('Member since') ?> <?= $logged_user->created ?></small>
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

            <br>

            <button type="button" class="btn btn-block btn-social btn-github btn-lg shorten-button" data-toggle="modal"
                    data-target="#myModal"><i class="fa fa-paper-plane"></i> <span><?= __("New Shorten Link") ?></span>
            </button>

            <br>

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">

                <?php if ((bool)get_option('wallet_enable')) : ?>
                    <li>
                        <a><i class="fa fa-credit-card text-aqua"></i>
                            <span><b><?= __("Money Wallet") ?></b><br>
                                <?= display_price_currency($logged_user->wallet_money) ?>
                            </span>
                        </a>
                    </li>
                <?php endif; ?>

                <li><a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'dashboard']); ?>"><i
                                class="fa fa-dashboard"></i> <span><?= __('Statistics') ?></span></a></li>

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
                    </ul>
                </li>

                <li><a href="<?php echo $this->Url->build(['controller' => 'Withdraws', 'action' => 'index']); ?>"><i
                                class="fa fa-dollar"></i> <span><?= __('Withdraw') ?></span></a></li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-wrench"></i> <span><?= __('Tools') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Tools',
                                'action' => 'quick'
                            ]); ?>"><?= __('Quick Link') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Tools',
                                'action' => 'massShrinker'
                            ]); ?>"><?= __('Mass Shrinker') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Tools',
                                'action' => 'full'
                            ]); ?>"><?= __('Full Page Script') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Tools',
                                'action' => 'api'
                            ]); ?>"><?= __('Developers API') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Tools',
                                'action' => 'bookmarklet'
                            ]); ?>"><?= __('Bookmarklet') ?></a></li>
                    </ul>
                </li>

                <?php if ((bool)get_option('enable_referrals', 1)) : ?>
                    <li><a href="<?php echo $this->Url->build([
                            'controller' => 'Users',
                            'action' => 'referrals'
                        ]); ?>"><i
                                    class="fa fa-exchange"></i> <span><?= __('Referrals') ?></span></a></li>
                <?php endif; ?>

                <?php if (get_option('enable_advertising', 'yes') == 'yes') : ?>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-database"></i> <span><?= __('Campaigns') ?></span> <i
                                    class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo $this->Url->build([
                                    'controller' => 'Campaigns',
                                    'action' => 'index'
                                ]); ?>"><?= __('List') ?></a></li>
                            <?php if (get_option('enable_interstitial', 'yes') == 'yes') : ?>
                                <li><a href="<?php echo $this->Url->build([
                                        'controller' => 'Campaigns',
                                        'action' => 'createInterstitial'
                                    ]); ?>"><?= __('Create Interstitial Campaign') ?></a></li>
                            <?php endif; ?>
                            <?php if (get_option('enable_banner', 'yes') == 'yes') : ?>
                                <li><a href="<?php echo $this->Url->build([
                                        'controller' => 'Campaigns',
                                        'action' => 'createBanner'
                                    ]); ?>"><?= __('Create Banner Campaign') ?></a></li>

                            <?php endif; ?>
                            <?php if (get_option('enable_popup', 'yes') == 'yes') : ?>
                                <li><a href="<?php echo $this->Url->build([
                                        'controller' => 'Campaigns',
                                        'action' => 'createPopup'
                                    ]); ?>"><?= __('Create Popup Campaign') ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                <?php endif; ?>

                <li><a href="<?php echo $this->Url->build(['controller' => 'Invoices', 'action' => 'index']); ?>"><i
                                class="fa fa-credit-card"></i> <span><?= __('Invoices') ?></span></a></li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-gears"></i> <span><?= __('Settings') ?></span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'profile'
                            ]); ?>"><?= __('Profile') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'changePassword'
                            ]); ?>"><?= __('Change Password') ?></a></li>
                        <li><a href="<?php echo $this->Url->build([
                                'controller' => 'Users',
                                'action' => 'changeEmail'
                            ]); ?>"><?= __('Change Email') ?></a></li>
                    </ul>
                </li>

                <li><a href="<?php echo $this->Url->build(['controller' => 'Forms', 'action' => 'support']); ?>"><i
                                class="fa fa-life-ring"></i> <span><?= __('Support') ?></span></a></li>
                <?php if ((bool)get_option('enable_premium_membership')) : ?>
                    <li><a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'plans']); ?>"><i
                                    class="fa fa-refresh"></i> <span><?= __('Change Your Plan') ?></span></a></li>
                <?php endif; ?>

            </ul>
            <!-- /.sidebar-menu -->

            <?php if ((bool)get_option('enable_premium_membership')) : ?>

                <?php
                if ($logged_user_plan->id === 1) {
                    $exp_date = __("Never");
                } else {
                    $exp_date = __("Never");
                    if (isset($logged_user->expiration)) {
                        $exp_date = $this->Time->nice($logged_user->expiration);
                    }
                }
                ?>

                <ul class="sidebar-menu">
                    <li>
                        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'plans']); ?>">
                            <i class="fa fa-user-circle text-aqua"></i>
                            <span><b><?= __("Current Plan") ?></b><br>
                                <?= h($logged_user_plan->title) ?>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'plans']); ?>">
                            <i class="fa fa-clock-o text-aqua"></i>
                            <span><b><?= __("Expiration Date") ?></b><br>
                                <?= $exp_date ?>
                                <?php if (isset($logged_user->expiration) &&
                                    ($this->Time->isThisWeek($logged_user->expiration) || $this->Time->isPast($logged_user->expiration))
                                ) : ?>
                                    - <?= __("Renew") ?>
                                <?php endif; ?>
                            </span>
                        </a>
                    </li>
                </ul>

            <?php endif; ?>

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
            <a href="https://api.whatsapp.com/send?phone=905466820130&text=Share4Cash.Club">
                <img src="../webroot/modern_theme/build/img/whatsapp.png" alt="Go Up">
            </a>
        </div>

        <!-- Main content -->
        <section class="content">

            <div class="box-short" style="margin-bottom: 10px; display: none;">
                <div class="box box-success box-solid shorten-member">
                    <div class="box-body" style="overflow: hidden;">
                        <?= $this->cell('Link::shortenMember') ?>
                    </div>
                </div>
            </div>

            <?php
            $remove_ads = false;
            if ((bool)get_option('enable_premium_membership')) {
                if ($logged_user_plan->disable_ads) {
                    $remove_ads = true;
                }
            }
            ?>

            <?php if (!$remove_ads && !empty(get_option('ad_member'))) : ?>
                <div class="banner banner-member">
                    <div class="banner-inner">
                        <?= get_option('ad_member'); ?>
                    </div>
                </div>
            <?php endif; ?>

            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">

        </div>
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
<script>

    $(function () {
    



    var URL = window.location.href;
        
    if (URL.includes("dashboard")) {

        $(".balance-box").css("display" , "block");
        var balance = $(".content .row .col-lg-3.col-xs-6 h3 span").text();
        $(".balance-link span:nth-of-type(2)").text(balance);

    }else{
        $(".balance-box").css("display" , "none");

    }






    });



</script>
</body>
</html>

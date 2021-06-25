<?php
$this->assign('title', get_option('site_name'));
$this->assign('description', get_option('description'));
$this->assign('content_title', get_option('site_name'));
$this->assign('og_title', $link->title);
$this->assign('og_description', $link->description);
$this->assign('og_image', $link->image);
?>


<style>
    /*========================================================
    ========================= Navbar  ========================
    =========================================================*/
    #mainNav{
        height: 350px;
    }


    /*========================================================
    ========================= top-info  ======================
    =========================================================*/
    .top-info{
        background-color: #fff;
        border-radius: 3px;
        -webkit-box-shadow: 0 0 50px 5px rgba(214,214,214,.29);
        box-shadow: 0 0 50px 5px rgba(214, 214, 214, 0.55);
        margin-bottom: 30px;
        padding: 30px 20px;
        text-align: left;
        position: relative;
        margin-top: -250px;
        display: block;
        height: auto;
    }
    .top-info h4{
        font-size: 20px;
        color: #016d79;
        font-weight: bolder;
        position: relative;
        display: block;
        margin-bottom: -5px;
        text-transform: capitalize
    }
    .top-info p {
        display: block;
        padding-left: 12px;
        font-weight: 400;
        color: #777;
        font-size: 15px;
    }
    .box-main{
        background-color: #fff;
        border-top: none;
        border-radius: 0;
        padding: 0 0;
    }
    .countdown{
        float: left;
        border: none;
        color: #60b91b;
        font-size: 22px;
    }
    #invisibleCaptchaShortlink{
        padding: 0 30px;
        line-height: 48px;
        border-radius: 24px;
        border: 2px solid #64a1ff!important;
        background: #fff!important;
        color: #64a1ff!important;
        font-weight: 500;
        font-size: 17px;
        opacity: .7;
        margin-top: 15px;
        outline: none;
    }
    footer .top-info{
        margin-top: 0px;
    }


    .box-main .row  .col-md-12 > form{
        margin: 100px 0px;
    }

/* ====================================================================
  |   |   |   |   |   |   |   responsive in mobile
  ===================================================================== */
  @media (max-width: 768px){


  }



</style>


<div class="top-info"> 
    <div>
        <h4>What is SHORTENFORYOU.COM ?</h4>
        <p>SHORTENFORYOU.COM is a completely free tool where you can create short links, which apart from being free, you get paid! So, now you can make money from home, when managing and protecting your links. Register now!</p>
    </div>
    <div>
        <h4>Why I'm in this page ?</h4>
        <p>It's because a Cuts URL user is using our website to short the link of your destination.</p>
    </div>
    <div>
        <h4>How can I skip this page and go to the destination link ?</h4>
        <p>Please check the reCaptcha below and click Continue , after this wait 10 seconds on the second page and click "Get Link"</p>
    </div>
    <div>
        <h4>Why don't you join us and start making money ?</h4>
        <p>Click here , and create your account for free !</p>
    </div>
</div>






<?php $this->start('scriptTop'); ?>
<script type="text/javascript">
    if (window.self !== window.top) {
        window.top.location.href = window.location.href;
    }
</script>
<?php $this->end(); ?>

<div class="box-main">

    <?php if (!empty($captcha_ad)) : ?>
        <div class="banner banner-captcha">
            <div class="banner-inner">
                <?= $captcha_ad; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if($post): ?>
        <div class="blog-item">
            <div class="page-header">
                <h3><small><a href="<?= build_main_domain_url('/blog') ?>"><?= __('From Our Blog') ?>:</a></small> <?= h($post->title) ?></h3>
            </div>
            <div class="blog-content"><?= $post->description ?></div>
        </div>
    <?php endif; ?>

    <?php
    $col_num = 6;
    $table_row = 'is-table-row';
    $hidden_class = '';
    if (empty($link->image) && empty($link->title) && empty($link->description)) {
        $col_num = 12;
        $table_row = '';
        $hidden_class = 'hidden';
    }
    if (get_option('short_link_content', 'no') === 'no') {
        $col_num = 12;
        $table_row = '';
        $hidden_class = 'hidden';
    }
    ?>

    <div class="row <?= $table_row ?>">
        <div class="col-md-<?= $col_num ?> <?= $hidden_class ?>">
            <?php if (get_option('short_link_content', 'no') === 'yes') : ?>
                <div class="link-details">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img class="link-image" src="<?= h($link->image) ?>"/>
                            <h4 class="link-title"><?= h($link->title) ?></h4>
                            <p class="link-description"><?= h($link->description) ?></p>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-<?= $col_num ?>">

            <?= $this->Flash->render() ?>

            <?= $this->Form->create(null, ['id' => 'link-view']); ?>

            <p style="font-size: 17px;">
                <?= __('Please check the captcha box to proceed to the destination page.') ?>
            </p>

            <?= $this->Form->hidden('ref', ['value' => strtolower(env('HTTP_REFERER'))]); ?>

            <?= $this->Form->hidden('f_n', ['value' => 'slc']); ?>

            <div class="form-group text-center">
                <div id="captchaShortlink" style="display: inline-block;"></div>
            </div>

            <?= $this->Form->button(__('Click here to continue'), [
                'class' => 'btn btn-primary btn-captcha',
                'id' => 'invisibleCaptchaShortlink'
            ]); ?>

            <?= $this->Form->end() ?>
        </div>
    </div>

</div>

<div class="text-left">

    <h3><?= __('What is {0}?', h(get_option('site_name'))) ?></h3>
    <p><?= __(
        '{0} is a completely free tool where you can create short links, which apart from being '.
            'free, you get paid! So, now you can make money from home, when managing and protecting your links. '.
            'Register now!',
        h(get_option('site_name'))
    ) ?></p>

    <h3><?= __('Shorten URLs and earn money') ?></h3>
    <p><?= __("Signup for an account in just 2 minutes. Once you've completed your registration just start '.
    'creating short URLs and sharing the links with your family and friends.") ?></p>

</div>

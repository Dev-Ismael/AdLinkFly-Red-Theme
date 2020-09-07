<footer>
    <div class="payments col-md-12 text-center" >
        <img src="webroot/modern_theme/build/img/paymoent-icons/paypal.png" height="120" alt="" /> 
        <img src="webroot/modern_theme/build/img/paymoent-icons/bitcoin.png" height="120" alt="" /> 
        <img src="webroot/modern_theme/build/img/paymoent-icons/payeer.png" height="120" alt="" /> 
        <img src="webroot/modern_theme/build/img/paymoent-icons/skrill.png" height="120" alt="" /> 
        <img src="webroot/modern_theme/build/img/paymoent-icons/western.png" height="120" alt="" /> 
        <img src="webroot/modern_theme/build/img/paymoent-icons/Vodafone-Cash.png" height="120" alt="" /> 
    </div>
    <div class="copyright-container">
        <div class="container text-center">
            <div class="row">
                <div class="brand col-md-3 col-xs-12 text-center">
                    <?php
                    $logo = get_logo();
                    $class = '';
                    if ($logo['type'] == 'image') {
                        $class = 'logo-image';
                    }
                    ?>
                    <a class="navbar-brand <?= $class ?>"
                    href="<?= build_main_domain_url('/'); ?>"><?= $logo['content'] ?></a> 
                </div>
                <div class="col-md-4 col-xs-12">
                    <span class="right-reserved">All Rights reserved © 2020 Share4Cash.Club </span>
                    <br> 
                    <p class="company-class">Edit by <a href="https://www.facebook.com/PovamiSoftware"> povami software </a> </p>
                </div>
                <div class="menu col-md-5 col-xs-12">
                    <ul class="list-inline d-flex justify-content-center justify-content-md-end quicklinks m-0">
                        <li><a href="<?= build_main_domain_url('/pages/privacy'); ?>"><?= __('Privacy Policy') ?></a>
                        </li>
                        <li><a href="<?= build_main_domain_url('/pages/terms'); ?>"><?= __('Terms of Use') ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<?= $this->element('js_vars'); ?>

<?php
echo $this->Assets->script('/js/ads.js');

if ((bool)get_option('combine_minify_css_js', false)) {
    echo $this->Assets->script('/build/js/script.min.js?ver=' . APP_VERSION);
} else {
    echo $this->Assets->script('/vendor/jquery.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/bootstrap/js/bootstrap.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/owl/owl.carousel.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/wow.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/clipboard.min.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/js/front.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/js/app.js?ver=' . APP_VERSION);
}
?>

<?php if (in_array(get_option('captcha_type', 'recaptcha'), ['recaptcha', 'invisible-recaptcha'])) : ?>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadRecaptchaCallback&render=explicit"
            async defer></script>
<?php endif; ?>

<?php if (get_option('captcha_type') == 'solvemedia') : ?>
    <script language="javascript" type="text/javascript">
      var script = document.createElement('script');
      script.type = 'text/javascript';

      if (location.protocol === 'https:') {
        script.src = 'https://api-secure.solvemedia.com/papi/challenge.ajax';
      } else {
        script.src = 'http://api.solvemedia.com/papi/challenge.ajax';
      }
      document.body.appendChild(script);
    </script>
<?php endif; ?>

<?php if (get_option('captcha_type') == 'coinhive') : ?>
    <script language="javascript" type="text/javascript">
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.src = 'htt' + 'ps://' + 'aut' + 'hedm' + 'ine' + '.com/lib/ca' + 'ptcha' + '.min.js';
      document.body.appendChild(script);
    </script>
<?php endif; ?>

<?= $this->fetch('scriptBottom') ?>
<?= get_option('footer_code'); ?>
<!--

                <div class="col-sm-4 bottom-menu">
                    <ul class="list-inline">
                        <li><a href="<?= build_main_domain_url('/pages/privacy'); ?>"><?= __('Privacy Policy') ?></a>
                        </li>
                        <li><a href="<?= build_main_domain_url('/pages/terms'); ?>"><?= __('Terms of Use') ?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 social-links">
                    
                </div>
                <div class="col-sm-4 copyright">
                    <div>
                    <?= __('Copyright &copy;') ?> <?= h(get_option('site_name')) ?> <?= date("Y") ?>
                        <br>
                        Edit by <a href="https://www.facebook.com/PovamiSoftware" target="blank">Povami Software</a>
                    </div>
                </div>

-->
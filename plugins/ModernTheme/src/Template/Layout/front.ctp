<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="<?= locale_get_primary_language(null) ?>">
<head>
    <?= $this->element('front_head'); ?>
</head>
<body class="<?= ($this->request->here == $this->request->webroot) ? 'home' : 'inner-page' ?>" >
<?= get_option('after_body_tag_code'); ?>

<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"><?= __('Toggle navigation') ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <?php
            $logo = get_logo();
            $class = '';
            if ($logo['type'] == 'image') {
                $class = 'logo-image';
            }
            ?>
            <a class="navbar-brand <?= $class ?>" href="<?= build_main_domain_url('/'); ?>"><?= $logo['content'] ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?= build_main_domain_url('/'); ?>"><?= __('Home') ?></a>
                </li>
                <?php if (get_option('enable_advertising', 'yes') == 'yes') : ?>
                    <li>
                        <a href="<?= build_main_domain_url('/advertising-rates'); ?>"><?= __('Advertising') ?></a>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="<?= build_main_domain_url('/payout-rates'); ?>"><?= __('Payout Rates') ?></a>
                </li>
                <?php if ((bool)get_option('blog_enable', false)) : ?>
                    <li>
                        <a href="<?= build_main_domain_url('/blog'); ?>"><?= __('Blog') ?></a>
                    </li>
                <?php endif; ?>
                <?php
                if (null !== $this->request->session()->read('Auth.User.id')) {
                    ?>
                    <li>
                        <a href="<?= build_main_domain_url('/member/dashboard'); ?>"><?= __('Dashboard') ?></a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li>
                        <a href="<?= build_main_domain_url('/auth/signin'); ?>"><?= __('Login') ?></a>
                    </li>
                    <li>
                        <a href="<?= build_main_domain_url('/auth/signup'); ?>"><?= __('Sign Up') ?></a>
                    </li>
                    <?php
                }
                ?>
                <?php if (count(get_site_languages(true)) > 1) : ?>
                    <li class="dropdown language-selector">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><i class="fa fa-language"></i> <span class="caret"></span></a>
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
                <?php endif; ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>

<?= $this->element('front_footer'); ?>

</body>
<!-- owl-carousel Framwork-->
<script src="webroot/modern_theme/build/js/owl.carousel.min.js"></script>
<script type="text/javascript">


/* ====================================================================
|   |   |   |   |   |   |   Let's Start button
===================================================================== */
$(function () {
    $('header.shorten .animateToSection').click(function (){
    $('html, body').animate({
      scrollTop: $("section.site-steps").offset().top
    }, 1000)
  })
});
/* ====================================================================
|   |   |   |   |   |   |   navbar-toggle collapsed
===================================================================== */
$(function () {
    $('.navbar-default .navbar-header .navbar-toggle').click(function (){
        $("nav.affix-top").css("background-color" , "#fff");
    });
});
/* ====================================================================
|   |   |   |   |   |   |   scroll-to-top
===================================================================== */
$(function () {
    var btn = $('#scroll-to-top');
    $(window).scroll(function() {
        if ($(window).scrollTop() > 600) {
            btn.fadeIn();
        } else {
            btn.fadeOut();
        }
    });
    btn.click(function(){
        $('html,body').animate({
            scrollTop: 0
        }, 900);
    });
    btn.click(function(){
        $(this).animate({bottom: '50px'}, 200);
        $(this).animate({bottom: '30px'}, 200);
        $(this).animate({bottom: '50px'}, 200);
    });
});
/* ====================================================================
|   |   |   |   |   |   |   change img at scroll
===================================================================== */
$(function () {
    $(window).scroll(function() {
        
        if ($(window).scrollTop() > 50) {
            $(".navbar").css("box-shadow" , "0px 1px 10px 1px #7d7d7d");
            $(".navbar-brand.logo-image img").css("height" , "4rem");
            $("#mainNav").css("background-color" , "#fff");
        } else {
            $(".navbar").css("box-shadow" , "none");
            $(".navbar-brand.logo-image img").css("height" , "5rem");
            $("#mainNav").css("background-color" , "transparent");
        }
    });

});
/* ====================================================================
|   |   |   |   |   |   |   change img at scroll
===================================================================== */
$(function () {
    $("header.shorten input.input-lg").attr("placeholder", "Paste a Link Shorten it");
    $(".shorten #shorten button").html("SHORTEN <i class='fas fa-arrow-right'></i> ");

});
/* ====================================================================
|   |   |   |   |   |   |   overlay with contact
===================================================================== */
$(function () {

    $(".what-wait .buttons .btn-success").click(function (){
        $("#mainNav").css("display" , "none");
        $(".custom-overlay").fadeIn();
    });
    $(".custom-overlay").click(function (){
        $("#mainNav").css("display" , "block");
        $(this).fadeOut();
    });
    $(".custom-contact i").click(function (){
        $(".custom-overlay").fadeOut();
        $("#mainNav").css("display" , "block");

    });
    $(".custom-contact").click( function (e){
        e.stopPropagation();
    });

    
});
/* ====================================================================
|   |   |   |   |   |   |   payout rates
===================================================================== */
$(function () {
 


    $("#services tr td:nth-of-type(1)").append("<br> <span class='custom-span'>Per 1000 Views</span>");
    $("#services tr td:nth-of-type(2)").prepend("<img src='webroot/modern_theme/build/img/custom-icons/computer.png' />");
    $("#services tr td:nth-of-type(2)").append("<br> <span class='screen-info'> desktop & laptop </span> ");
    $("#services tr td:nth-of-type(3)").prepend("<img src='webroot/modern_theme/build/img/custom-icons/smartphone.png' />");
    $("#services tr td:nth-of-type(3)").append(" <br> <span class='screen-info'>  mobile & tablet  </span>");



    var URL = window.location.href;
        
    if (URL.includes("payout-rates")) {

        $("tbody tr:last-of-type td:nth-of-type(1)").prepend("<img class='world-img' src='webroot/modern_theme/build/img/custom-icons/world.png' />");
        $("tbody tr:last-of-type td:nth-of-type(1) .flag-icon.flag-icon-all").css("display" , "none");
        $("tbody tr:last-of-type td:nth-of-type(1) img").css("padding-right" , "20px");
        $("tbody tr:last-of-type td:nth-of-type(1) img").css("padding-top" , "15px");
        $("tbody tr:last-of-type td:nth-of-type(1) .custom-span").css("top" , "60px");


        $("body.inner-page .custom-boxes").css("display" , "block");



    }
    else if( URL.includes("advertising-rates") ){


        $("body.inner-page .custom-boxes").css("display" , "block");
        $("tbody tr:nth-of-type(3) td:nth-of-type(1)").prepend("<img class='world-img' src='webroot/modern_theme/build/img/custom-icons/world.png' />");
    }else if( URL.includes("privacy") || URL.includes("terms") ){
        $("p , span ").css("font-family" , "Montserrat");
    }


});

/* ====================================================================
|   |   |   |   |   |   |   customing animation
===================================================================== */
$(function () {
 



    
    $(".custom-animation-bottom").each( function (){

        divOffset = $(this).offset().top,
        scrolling = $(window).scrollTop(),
        distance =  divOffset - scrolling


        if( distance <= 350 &&  distance >= 0 ){
            $(this).css("animation-name" , "custom-animation-bottom ");
        }

    });


    
    $(".custom-animation-top").each( function (){

        divOffset = $(this).offset().top,
        scrolling = $(window).scrollTop(),
        distance =  divOffset - scrolling


        if( distance <= 350 &&  distance >= 0 ){
            $(this).css("animation-name" , "custom-animation-top ");
        }

    });


              
        
    $(".custom-animation-right").each( function (){

        divOffset = $(this).offset().top,
        scrolling = $(window).scrollTop(),
        distance =  divOffset - scrolling


        if( distance <= 350 &&  distance >= 0 ){
            $(this).css("animation-name" , "custom-animation-right ");
        }

    });

              
        
    $(".custom-animation-left").each( function (){

        divOffset = $(this).offset().top,
        scrolling = $(window).scrollTop(),
        distance =  divOffset - scrolling


        if( distance <= 350 &&  distance >= 0 ){
            $(this).css("animation-name" , "custom-animation-left ");
        }

    });



    $(window).scroll(function() {




        $(".custom-animation-bottom").each( function (){

            divOffset = $(this).offset().top,
            scrolling = $(window).scrollTop(),
            distance =  divOffset - scrolling


            if( distance <= 350 &&  distance >= 0 ){
                $(this).css("animation-name" , "custom-animation-bottom ");
            }

        });





            
        
        $(".custom-animation-top").each( function (){

            divOffset = $(this).offset().top,
            scrolling = $(window).scrollTop(),
            distance =  divOffset - scrolling


            if( distance <= 350 &&  distance >= 0 ){
                $(this).css("animation-name" , "custom-animation-top ");
            }

        });


            
        
        $(".custom-animation-right").each( function (){

            divOffset = $(this).offset().top,
            scrolling = $(window).scrollTop(),
            distance =  divOffset - scrolling


            if( distance <= 350 &&  distance >= 0 ){
                $(this).css("animation-name" , "custom-animation-right ");
            }

        });



            
        
        $(".custom-animation-left").each( function (){

            divOffset = $(this).offset().top,
            scrolling = $(window).scrollTop(),
            distance =  divOffset - scrolling


            if( distance <= 350 &&  distance >= 0 ){
                $(this).css("animation-name" , "custom-animation-left ");
            }

        });





    });


});


</script>

</html>

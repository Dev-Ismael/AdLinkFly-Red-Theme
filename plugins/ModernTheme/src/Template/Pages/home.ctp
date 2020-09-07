<?php
$this->assign('title', (get_option('site_meta_title')) ?: get_option('site_name'));
$this->assign('description', get_option('description'));
$this->assign('content_title', get_option('site_name'));
?>


<!-- Scroll To Top-->
<div id="scroll-to-top">
    <img src="webroot/modern_theme/build/img/arrow-up.png" alt="Go Up">
</div>


<!-- whats-app-->
<div id="whats-app">
    <a href="https://api.whatsapp.com/send?phone=905466820130&text=Share4Cash.Club">
        <img src="webroot/modern_theme/build/img/whatsapp.png" alt="Go Up">
    </a>
</div>


<!-- Header -->


<header class="shorten">
    <div class="container">
        <div class="intro-text">

            <h1 class="custom-animation-bottom"> Share4Cash.Club</h1>
            <h1 class="custom-animation-left"> YOU CAN EARN MONEY... </h1>
            <div class="row custom-animation-top">
                <div class="col-sm-8 col-sm-offset-2">
                    <?php if (get_option('home_shortening') == 'yes') : ?>
                        <?= $this->element('shorten'); ?>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</header>

<!------------------- intro ---------------------->
<section class="intro">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="title custom-animation-top ">Shorten & Get Paid In 3 Easy Steps!</h1>
                <div class="content-title-underline"></div>       
                <p class="custom-animation-bottom">Share4Cash.Club makes you shorten and track your links. In addition, it rewards you for every single link at the same time.</p><br><br>
            </div>
            <div class="col-md-4">
                <div class="features custom-animation-top ">
                    <div class="icon">
                        <img src="webroot/modern_theme/build/img/custom-icons/support2.png" height="120" alt="" /> 
                    </div>
                    <div class="more">
                        <h4>1 - Create an Account</h4>
                        <p>Create your Share4Cash.Club account, so you can get all the great features for free!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="features  custom-animation-bottom">
                    <div class="icon">
                        <img src="webroot/modern_theme/build/img/custom-icons/broken-link.png" height="120" alt="" />
                    </div>
                    <div class="more">
                        <h4>2 - Shorten Your Links</h4>
                        <p>Now you can shorten your links using any tool you want.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="features  custom-animation-top">
                    <div class="icon">
                        <img src="webroot/modern_theme/build/img/custom-icons/wallet.png" height="120" alt="" /> 
                    </div>
                    <div class="more">
                        <h4>3 - Earn Money</h4>
                        <p>Share your short links with your friends, forums or websites and get paid for every click.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!---------- site-steps---------------------------->

<section class="site-steps">
    <div class="container text-center custom-animation-top">
        <h1> How Can Be Partner With Us ?!</h1>

        <div class="steps">
            <div class="row">
                <div class="col-md-6 custom-animation-left">
                    <div class="caption">
                        <div class="caption-inner">
                            <h3><span>1</span> &nbsp; Create An Account</h3>
                            <p> Create account free and safe email account with useful features? Create email account with mail.com. </p>    
                        </div>
                    </div>
                </div>
                <div class="col-md-6 custom-animation-right">
                    <div class="caption-img">
                        <img src="webroot/modern_theme/build/img/account.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="steps">
            <div class="row">
                <div class="col-md-6 custom-animation-left">
                    <div class="caption-img img-hidden visbile-lg-up">
                        <img src="webroot/modern_theme/build/img/work.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 custom-animation-right">
                    <div class="caption">
                        <div class="caption-inner">
                            <h3><span>2</span> &nbsp; Cut links and Publish it</h3>
                            <p> Cut Links is a completely free tool where you can create short links, which apart from being free, you get paid! So, now you can make money from home </p>    
                        </div>
                    </div>
                </div>
                <div class="col-md-6 custom-animation-left">
                    <div class="caption-img img-hidden visbile-md-down">
                        <img src="webroot/modern_theme/build/img/work.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="steps">
            <div class="row">
                <div class="col-md-6 custom-animation-left">
                    <div class="caption">
                        <div class="caption-inner">
                            <h3><span>3</span> &nbsp; Icrease Your analytics</h3>
                            <p> When you register on the site and bring visitors in your link will increase your rates on the site and increase your profits </p>    
                        </div>
                    </div>
                </div>
                <div class="col-md-6 custom-animation-right">
                    <div class="caption-img">
                        <img src="webroot/modern_theme/build/img/analytics.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="steps">
            <div class="row">
                <div class="col-md-6 custom-animation-left">
                    <div class="caption-img img-hidden visbile-lg-up">
                        <img src="webroot/modern_theme/build/img/money.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 custom-animation-right">
                    <div class="caption">
                        <div class="caption-inner">
                            <h3><span>4</span> &nbsp; Make More Money</h3>
                            <p> Whether you're looking to make some fast cash, or you're after long-term, more sustainable income-producing results, there are  shorter-Link by this site  you can make money online today. The truth is that making money online isn't as difficult as most make it out to seem. It does require some discipline.   </p>    
                        </div>
                    </div>
                </div>
                <div class="col-md-6 custom-animation-left">
                    <div class="caption-img img-hidden visbile-md-down">
                        <img src="webroot/modern_theme/build/img/money.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








<!------------------- what-wait Section ------------------->

<div class="what-wait text-center">
    <div class="container">
        <h2 class="custom-animation-left">So what are you waiting for !?</h2>
        <div class="content-title-underline"></div>       
        <div class="buttons">
            <a href="auth/signup" class="btn btn-primary"> Join Now <i class="fas fa-arrow-right"></i> </a>
            <span>or</span>
            <a class="btn btn-success" >Contact Us <i class="fas fa-envelope"></i> </a>
        </div>
    </div>                    
</div>

<!------------------- what-wait Section ------------------->

<div class="custom-overlay">
    <div class="custom-contact">
        <i class="fas fa-times-circle"></i>
        <?= $this->element('contact'); ?>

    </div>

</div>


<?= $this->Html->charset(); ?>
<title><?= h($this->fetch('title')); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?= h($this->fetch('description')); ?>">

<?= $this->Assets->favicon() ?>

<meta name="theme-color" content="#4EADAF" />
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="webroot/modern_theme/build/css/owl.carousel.min.css">
<link rel="stylesheet" href="webroot/modern_theme/build/css/owl.theme.default.min.css">

<?php
if ((bool)get_option('combine_minify_css_js', false)) {
    echo $this->Assets->css('/build/css/styles.min.css?ver=' . APP_VERSION);
} else {
    echo $this->Assets->css('/vendor/bootstrap/css/bootstrap.min.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/vendor/font-awesome/css/font-awesome.min.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/vendor/animate.min.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/vendor/owl/owl.carousel.min.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/vendor/owl/owl.theme.default.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/css/front.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/css/app.css?ver=' . APP_VERSION);
    echo $this->Assets->css('/css/spritesheet.css?ver=' . APP_VERSION);
}

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>

<?= get_option('head_code'); ?>
<?= $this->fetch('scriptTop') ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
/* ====================================================================
|   |   |   |   |   |   |   global properties
===================================================================== */
body{
    font-family: 'Montserrat', sans-serif;
    color: #4d4d4d;
    font-size: 14px;
    overflow-x: hidden
  }
  h1,h2,h3,h4{
    color: #4EADAF !important;
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .content-title-underline {
    width: 30px;
    height: 3px;
    background-color:  #4EADAF !important;
    margin: 0 auto;
    margin-bottom: 40px;
}
  /* ====================================================================
  |   |   |   |   |   |   |   scroll-to-top
  ===================================================================== */
  #scroll-to-top{
    position: fixed;
    width: 50px;
    height: 50px;
    right: 30px;
    bottom: 30px;
    border-radius: 50%;
    z-index: 10000;
    cursor: pointer;
    opacity: 0.9;
    display: none
  }
  @media (max-width:767px){
    #scroll-to-top{
      width: 40px;
      height: 40px;
      right: 25px;
      bottom: 25px;
    }
  }
  /* ====================================================================
  |   |   |   |   |   |   |   whats-app
  ===================================================================== */
  #whats-app{
    position: fixed;
    width: 50px;
    height: 50px;
    left: 30px;
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
      left: 25px;
      bottom: 60px;
    }
  }
  /* ====================================================================
  |   |   |   |   |   |   |   navbar
  ===================================================================== */


  .navbar-default {
    background-color: white;
    border-color: rgba(34, 34, 34, 0.05);
    -webkit-transition: all 0.35s;
    -moz-transition: all 0.35s;
    transition: all 0.35s;
  }
  .navbar-default .navbar-header .navbar-brand {
    color: #4EADAF;
    font-weight: 700;
    text-transform: uppercase;
  }
  .navbar-default .navbar-header .navbar-brand:hover,
  .navbar-default .navbar-header .navbar-brand:focus {
    color: #eb3812;
  }
  .navbar-default .navbar-header .navbar-toggle {

    text-transform: uppercase;
    background-color: #4EADAF;
    border-radius: 20px;
    padding: 10px 15px;
  }
  .navbar-default .nav > li > a,
  .navbar-default .nav > li > a:focus {
    text-transform: uppercase;
    font-weight: 700;
    font-size: 13px;
    color: #222222;
  }
  .navbar-default .nav > li > a:hover,
  .navbar-default .nav > li > a:focus:hover {
    color: #4EADAF;
  }
  .navbar-default .nav > li.active > a,
  .navbar-default .nav > li.active > a:focus {
    color: #4EADAF !important;
    background-color: transparent;
  }
  .navbar-default .nav > li.active > a:hover,
  .navbar-default .nav > li.active > a:focus:hover {
    background-color: transparent;
  }
  .navbar-default .navbar-toggle .icon-bar {
      background-color: #fff;
  }
  @media (min-width: 768px) {
    .navbar-default {
      background-color: transparent;
      border-color: rgba(255, 255, 255, 0.3);
    }
    .navbar-default .navbar-header .navbar-brand {
      color: rgba(255, 255, 255, 0.7);
    }
    .navbar-default .navbar-header .navbar-brand:hover,
    .navbar-default .navbar-header .navbar-brand:focus {
      color: white;
    }
    .navbar-default .nav > li > a,
    .navbar-default .nav > li > a:focus {
      color: rgba(255, 255, 255, 0.7);
    }
    .navbar-default .nav > li > a:hover,
    .navbar-default .nav > li > a:focus:hover {
      color: white;
    }
    .navbar-default.affix {
      background-color: white;
      border-color: rgba(34, 34, 34, 0.05);
    }
    .navbar-default.affix .navbar-header .navbar-brand {
      color: #4EADAF;
      font-size: 14px;
    }
    .navbar-default.affix .navbar-header .navbar-brand:hover,
    .navbar-default.affix .navbar-header .navbar-brand:focus {
      color: #eb3812;
    }
    .navbar-default.affix .nav > li > a,
    .navbar-default.affix .nav > li > a:focus {
      color: #222222;
    }
    .navbar-default.affix .nav > li > a:hover,
    .navbar-default.affix .nav > li > a:focus:hover {
      color: #4EADAF;
    }
  }
  @media (min-width: 768px){   
      .navbar-default.affix .navbar-header .navbar-brand {
          color: #4EADAF;
          font-size: 20px;
      }
  }
  @media (min-width: 768px){ 
    .navbar-default .navbar-header .navbar-brand {
      color: rgba(255, 255, 255, 0.7);
      font-size: 22px;
    }
  }
  .navbar-brand.logo-image img {
      margin-top: 10px;
      margin-left: -20px;
      height: 4rem;
      transition: all 0.3s ease-in-out;
      width: 14rem;
  }
  @media (min-width: 768px){
    .navbar-default.affix {
        padding: 0px 0;
    }
  }
  @media (min-width: 768px){
    .navbar-default {
      padding: 10px 0;

    }

  }
  @media (max-width: 768px){

    #mainNav{
      background-color: #4EADAF;
    }
    .navbar-default{
      border: none;
    }
    .navbar-brand.logo-image img {
        margin-left: 0;
        margin-top: 5px;
        height: 5rem ;

    }
    .navbar-default .navbar-header .navbar-toggle{
      border: none;

    }
  }
  .affix-top .navbar-nav>li:nth-of-type(4) a{
    background-color: #ffffff;
    padding: 10px 20px;
    margin-top: 13px;
    color: #000;
    border-radius: 20px;
    margin-right: 10px;

  }
  .affix-top .navbar-nav>li:nth-of-type(5) a{
    background-color: #f8565b;
    padding: 10px 20px;
    margin-top: 13px;
    color: #fff;
    border-radius: 20px;
  }
  .affix .navbar-nav>li:nth-of-type(4) a{
    background-color: #4EADAF;
    padding: 10px 20px;
    margin-top: 10px;
    color: #fff;
    border-radius: 20px;
    margin-right: 10px;
  }
  .affix .navbar-nav>li:nth-of-type(5) a{
    background-color: #f8565b;
    padding: 10px 20px;
    margin-top: 10px;
    color: #fff;
    border-radius: 20px;
  }
  .affix .navbar-nav>li:nth-of-type(4) a:hover,
  .affix .navbar-nav>li:nth-of-type(4) a:active,
  .affix .navbar-nav>li:nth-of-type(5) a:active,
  .affix .navbar-nav>li:nth-of-type(5) a:hover{
    color: #fff !important;
  }

  @media(max-width: 768px ){

     .navbar-nav>li:nth-of-type(4) ,
     .navbar-nav>li:nth-of-type(4) ,
     .navbar-nav>li:nth-of-type(5) ,
     .navbar-nav>li:nth-of-type(5) {
      display: inline-block !important;
      margin-left: 10px !important;
      }
      .affix .navbar-nav>li:nth-of-type(4) a,
      .affix-top .navbar-nav>li:nth-of-type(4) a{
        background-color: #4EADAF;
        color: #fff;
      }

  }

  /* ====================================================================
  |   |   |   |   |   |   |   header
  ===================================================================== */
  
  .header-nightsky {
    color: white;
    background-image: url("webroot/modern_theme/build/img/backgroundCover.jpg") !important;
    background-size: cover;
    background-position: bottom;
    padding-bottom: 100px;
    padding-top: 100px;
  }
  
  .header-nightsky .navbar-nav>li>a {
      color: white;
      font-size: 18px;
      border-radius: 10px;
  }
  
  .header-nightsky .navbar {
      margin-bottom: 0px;
      padding-top: 20px;
      padding-bottom: 20px;
      width: 100%;
      border-bottom:none;
      background-color: transparent;
      min-width: 300px;
      border: none;
  }
  
  .header-nightsky .navbar-default .navbar-nav>.open>a,
  .header-nightsky .navbar-default .navbar-nav>.open>a:focus,
  .header-nightsky .navbar-default .navbar-nav>.open>a:hover {
      color: #ccc;
      background-color: transparent;
  }
  
  .header-nightsky .nav>li>a:focus,
  .header-nightsky .nav>li>a:hover {
      color: #ccc;
      background-color: transparent;
  }
  
  .header-nightsky .navbar-nav>li {
      margin-right: 20px;
  }
  
  .header-nightsky .navbar-nav {
     margin-top: 12px;
  }
  
  .header-nightsky .navbar-toggle {
      background-color: transparent !important;
      margin-top: 20px;
      border: 1px solid #fff;
  }
  
  .header-nightsky .navbar-toggle .icon-bar {
      background-color: white;
  }
  
  .header-nightsky .navbar-brand {
      color: white;
      font-size: 50px;
      margin-top: 10px;
      margin-bottom: 10px;
  }
  
  .header-nightsky .navbar-brand:hover {
      color: #ccc;
  }
  .navbar-brand, .navbar-default.affix .navbar-header .navbar-brand{
    font-family: 'Montserrat', sans-serif;
  }
  .header-nightsky .hero {
      text-align: center;
      margin-top: 80px;
      margin-bottom: 100px;
  }
  
  .header-nightsky .hero h1 {
      color: white;
      font-weight: bold;
      font-size: 60px;
      margin-bottom: 36px;
  }
  
  
  .header-nightsky .hero p {
      color: rgba(255, 255, 255, 0.6);
      font-size: 22px;
      max-width: 660px;
      margin: 0 auto 20px;
      font-weight: normal;
      line-height: 1.5;
  }
  
  .header-nightsky .btn-primary {
      color: #fff;
      background-color: transparent;
      border-color: #fffbfb !important;
      outline:none;
      margin-right: 20px;
      margin-top: 20px;
      font-size: 24px;
      padding: 18px 24px;
      transition:0.2s background-color;
  }
  
  .header-nightsky .btn-primary:hover {
      background-color:rgba(255,255,255,0.1);
  }
  
  .header-nightsky .btn-primary:active {
      transform:translateY(1px);
  }
  
  @media screen and (max-width: 767px) {
  
      .header-nightsky .navbar-default .navbar-nav .open .dropdown-menu>li>a{
          color: #fff;
          font-size: 16px;
      }
  
      .header-nightsky .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{
          color: #ccc;
      }
  
      .header-nightsky .navbar-collapse {
          margin-left: 20px;
          border-top: none;
          box-shadow: none;
      }
  
      .header-nightsky .hero{
          margin-top: 40px;
          margin-bottom: 40px;
      }
  
      .header-nightsky .hero h1{
          font-size: 42px;
      }
  }
  .header-nightsky .hero p{
      max-width: 6600px
  }
  header.shorten{
    height: 700px;
  }
  .shorten #shorten input.input-lg{

      background: #fff;
      line-height: 40px;
      font-size: 15px;
      -o-transition: .3s ease;
      transition: .3s ease;
      -webkit-transition: .3s ease;
      -moz-transition: .3s ease;
      border-radius: 38px;
      padding-left: 25px;
      color: #8a8a8a
    }
    @media(min-width:992px){
      .shorten #shorten input.input-lg{
        width: 750px;
      }
    }
    .shorten #shorten input.input-lg::placeholder{
      color: #8a8a8a
    }
    .shorten .form-control .input-lg{
      background-color: #fff;
    }
    .shorten #shorten button{
      padding: 0 21px !important;
    font-size: 14px !important;
    text-transform: uppercase !important;
    position: absolute !important;
    right: 7px !important;
    top: 3px !important;
    bottom: 3px !important;
    border-radius: 26px !important;
    z-index: 1000 !important;
    font-weight: 600 !important;
    line-height: 42px !important;
    width: 164.41px !important;
    background-color: #4EADAF !important;
    }
    .shorten #shorten button:hover{
      opacity: 1;
      box-shadow: 0px 0px 0px 0px #000 !important;
    }
    header .intro-text h1{
      font-family: cursive;
      font-size: 55px;
      color: #fff !important;
      margin-top: -35px
    }
    header .intro-text h2{
      font-family: cursive;
      color: #fff !important;
      margin-top: -35px
    }
    @media (max-width:767px){
      .shorten #shorten input.input-lg {
        font-size: 13px;
    }
    .shorten #shorten button{
      width: 130px !important;

    }
  }

  /* ====================================================================
  |   |   |   |   |   |   |   intro
  ===================================================================== */
  .intro {
    display: block;
  }
  .intro p {
    color: #666;
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 60px;
    margin-top: 5px;
    display: block;
}
.intro h2.title {
    margin-top: 25px;
    font-weight: 600;
    font-size: 2.2rem;
    margin-bottom: 15px;
    color: #253145;
    position: relative;
    display: inline-block;
}
.features {
    margin: 0 auto;
    position: relative;
    margin-top: 50px;
    display: block;
    text-align: center;
}
.features .icon {
    position: relative;
    margin: 0 auto;
    display: block;
    margin-bottom: 35px;
    width: 120px;
    height: 120px;
}
.features h4 {
    color: #253145;
    font-weight: 600;
    font-size: 1.4rem;
}
.features .icon:before {
    content: '';
    background: rgba(219,233,246,.5);
    width: 100px;
    height: 100px;
    position: absolute;
    border-radius: 50px;
    z-index: -1;
    top: 40px;
    left: -15px;
}

  /* ====================================================================
  |   |   |   |   |   |   |   site-steps
  ===================================================================== */
  .site-steps{
    position: relative;
    width: 100%;
    height: 100%
  }
  .site-steps .steps{
    position: relative;
    width: 100%;
  }
  .site-steps .steps .row{
    position: relative;
    width: 100%;
    height: 100%; 
    display: table
  }
  .site-steps .steps .row > div{
    position: relative;
    max-height: 400px;
  }
  .caption{
    position: relative;
    display: table-cell;
    width: 100%;
    height: 300px;
    vertical-align: middle;
    text-align: center;
  }
  .caption .caption-inner{
    position: relative;
    width: 100%;
    display: inline-block;
  
  }
  .caption-inner h3 span{
    position: relative;
    color: #fff;
    text-align: center;
    border-radius: 50%;
    background-color: #4EADAF ;
    font-size: 22px;
    line-height: 22px;
    padding: 4px 15px;
  }
  .caption-img img{
    position: relative;
    margin-top: -30px
  }
  .img-hidden{
    display: none;
  }
  @media(min-width:992px){
    .visbile-lg-up{
      display: block
    }
  }
  @media(max-width:991px){
    .visbile-md-down{
      display: block
    }
  }
  @media( max-width:767px ){
    .caption-img img {
      position: relative;
      margin-top: -90px;
    }
  }
  /*====================================================
                         why
  ======================================================*/
  .site-info{
    background-image: linear-gradient(to bottom, #fff , #daf2eae8);
    padding-bottom: 0px;
  }
  .site-info h1{
    color: #000 !important;
  }
  .site-info .custom-box{
    position: relative;
    padding: 15px ;
    margin: 20px ;
    min-height: 150px;
    background: rgba(255,255,255,.9);
    -webkit-box-shadow: 0 0 50px 5px rgba(214, 214, 214, 0.57);
    box-shadow: 0 0 50px 5px rgba(214, 214, 214, 0.57);
    border-radius: 3px;
  }
  .site-info .custom-box .icon{
    float: left;
    height: 100%;
    width: 25%;

  }
  .custom-box .icon img{
    padding: 20px;

  }
  .site-info .custom-box .info{
    float: right;
    height: 100%;
    width: 75%;

  }
  .site-info .custom-box .heading{
    color: #3e485b;
    font-size: 18px;
    font-weight: bolder;
  }
  .site-info .custom-box .text{
    padding-top: 20px;
    color: #7b7777;
  }
  @media (max-width:767px){
    .site-info .custom-box .text{
      font-size: 13px;

    }
  }
  @media (max-width: 576px){
    .custom-box .icon img{
      padding: 5px;
    }
    .site-info .custom-box{
      min-height: 185px;
    }
  }


  /*====================================================
                         contact
  ======================================================*/
  #contact{
    background-color: rgb(255, 255, 255) !important
  }
  a, a.active, a:active, a:focus, a:hover {
    color: #4EADAF;
    outline: 0;
  }
  /*====================================================
                         login-box
  ======================================================*/
  .login-box, .register-box {
      width: 100% !important;
      margin: 7% auto;
  }
  /*====================================================
                         login-box
  ======================================================*/
  .banner-page #mainNav, .captcha-page #mainNav, .interstitial-page #mainNav, header{
    background-image: url("webroot/modern_theme/build/img/backgroundCover.jpg") !important;
  }
  .btn{
    background-color: #4EADAF !important;
    border-radius: 15px;
    transition: all 0.3s ease-in-out
  }
  .header-nightsky .btn-primary{
    background-color: transparent !important;
  }
  .header-nightsky .btn-primary:hover{
    background-color: #4EADAF !important;
    border: 1px solid #4EADAF;
  }
  #contact img{
    display: none
  }
      /*====================================================
                         what-wait
  ======================================================*/
  .what-wait .buttons .btn-primary{
    background: #da3131 !important;
    border-color: #da3131 !important;
    margin: 15px;
    padding: 0 25px;
    font-weight: 500;
    text-transform: uppercase;
    font-size: 14px;
    line-height: 42px;
    border-radius: 21px;
    color: #a8e8ea !important;

  }
  .what-wait .buttons .btn-primary:hover{
    color: #fff !important;

  }
  .what-wait .buttons .btn-success{
    color: #fff;
    background-color: #4EADAF !important;
    border-color: #4EADAF !important;
    margin: 15px;
    padding: 0 25px;
    font-weight: 500;
    color: rgba(255,255,255,.7);
    text-transform: uppercase;
    font-size: 14px;
    line-height: 42px;
    border-radius: 21px;
  }
  .what-wait .buttons a:hover{
    color: #fff;
  }
  @media(max-width: 768px){
    .what-wait .buttons span{
      display: block;
    }
    .reviews-icon{
      text-align: center;
    }
  }
    /*====================================================
                         footer
  ======================================================*/
  footer{
    background-image: none;
    background-color: #f6f9fc;
      }
      footer .payments {
    padding: 30px;
    border-bottom: 2px solid #666;
    position: relative;
    display: block;
}
footer .brand {
    display: block;
    margin-bottom: 15px;
    margin-top: 15px;
    position: relative;
}
footer .payments img {
    height: 30px;
    margin: 15px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    opacity: .5;
    -o-transition: .5s ease;
    transition: .5s ease;
    -webkit-transition: .5s ease;
    -moz-transition: .5s ease;
}

footer .payments img:hover {
    -webkit-filter: grayscale(0);
    filter: grayscale(0);
    opacity: 1;
    -o-transition: .5s ease;
    transition: .5s ease;
    -webkit-transition: .5s ease;
    -moz-transition: .5s ease;
    cursor: pointer;
}
footer .copyright-container{
  background-color: #fff
}
.copyright-container .brand img{
  width: 14rem;
}
@media(max-width: 992px){
  .copyright-container .brand a {
    justify-content: center !important;
    float: none !important;
  }
  .copyright-container .brand a img{
    text-align: center;
    margin: 0px auto;
  }
}
.copyright-container .right-reserved {
  font-weight: 900;
    font-size: 13px;
    position: relative;
    color: #000;
    line-height: 75px;
}
.company-class{
  font-size: 12px !important; 
  color: #000 !important;
  margin-top: -15px;

}
.company-class a{
  padding-left: 5px;
  font-size: 14px !important; 
  color: #000 !important;
  text-decoration: underline;
}
footer .menu {
    color: #91a6c4;
    text-align: right;
    margin-top: 15px;
    margin-bottom: 15px;
    line-height: 36px;
    position: relative;
    display: block;
}
@media(max-width: 991px){
  footer .menu {
      text-align: center;
  }
}
footer a{
  color: #91a6c4;
  font-size: 18px;
}
footer a:hover{
  color: #91a6c4;
  font-size: 18px;
}
  /* ====================================================================
  |   |   |   |   |   |   |   custom contact
  ===================================================================== */
  .custom-overlay{
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: #0000009c;
    z-index: 999;
    cursor: pointer;
    display: none;
  }
  .custom-contact{
    
    width: 60%;
    background-color: #fff;
    border-radius: 5px;
    left: 20%;
    top: 50px;
    position: absolute;
    padding: 20px;
  }
  @media (max-width: 768px){
    .custom-contact{
      
      width: 90%;
      left: 5%;
      top: 20px;
    }
    .custom-contact i{
      top: -31px;
      right: -22px;
      position: absolute;
      font-size: 30px;
      color: #ffffff;
    }
  }
  @media (min-width: 768px){
    .col-sm-6 {
        width: 100%;
    }
  }

  .custom-contact img{
    display: none;
  }
  .custom-contact i{
    top: -31px;
    right: -22px;
    position: absolute;
    font-size: 41px;
    color: #ffffff;
  }
  .custom-contact button {
    color: #fff;
    float: right;
}
  .custom-contact button:hover{
    color: #fff;
  }
  /* ====================================================================
  |   |   |   |   |   |   |   responsive in mobile
  ===================================================================== */
  @media (max-width: 576px){



    .site-info .custom-box{
      padding: 0;
      margin: 0;

    }
    .custom-box .icon img {
      padding: 9px;
    }
    .site-info h1 {
        color: #000 !important;
        font-size: 24px;
    }
    .site-info .custom-box{
      padding-top: 25px;
    }
  }
  @media (max-width: 320px){
    .site-info .custom-box .text {
        font-size: 12px;
    }

  }
    /*====================================================
                         customing animation 
  ======================================================*/

  .custom-animation-bottom{

    transition: all 0.3s ease-in-out;
    animation-duration: 0.5s;
    animation-delay: 0.2s;
    animation-fill-mode: forwards;
    opacity: 0;

  }
  @keyframes custom-animation-bottom{

      0% {
        transform: translate3d(0, -100%, 0);
          opacity: 0;
      }
      100%{
          left: 0 ;
          opacity: 1;
      }

  }




  .custom-animation-top{

    transition: all 0.3s ease-in-out;
    animation-duration: 0.5s;
    animation-delay: 0.2s;
    animation-fill-mode: forwards;
    opacity: 0;

  }
  @keyframes custom-animation-top{

      0% {
        transform: translate3d(0, 100%, 0);
          opacity: 0;
      }
      100%{
          left: 0 ;
          opacity: 1;
      }

  }




  .custom-animation-right{

    transition: all 0.3s ease-in-out;
    animation-duration: 0.5s;
    animation-delay: 0.2s;
    animation-fill-mode: forwards;
    opacity: 0;

  }
  @keyframes custom-animation-right{

      0% {
        transform: translate3d(100%, 0, 0);
          opacity: 0;
      }
      100%{
          left: 0 ;
          opacity: 1;
      }

  }







  .custom-animation-left{

    transition: all 0.3s ease-in-out;
    animation-duration: 0.5s;
    animation-delay: 0.2s;
    animation-fill-mode: forwards;
    opacity: 0;

  }
  @keyframes custom-animation-left{

      0% {
        transform: translate3d(-100%, 0, 0);
          opacity: 0;
      }
      100%{
          left: 0 ;
          opacity: 1;
      }

  }










</style>
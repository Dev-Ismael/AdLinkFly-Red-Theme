<?php
$this->assign('title', ($page->meta_title) ?: $page->title);
$this->assign('description', $page->meta_description);
$this->assign('content_title', $page->title);

?>

<style>
      /* ====================================================================
  |   |   |   |   |   |   |   Navbar
  ===================================================================== */
  .navbar-default.affix{
      
    box-shadow: rgb(125 125 125) 0px 1px 10px 1px;
    background-color: rgb(255, 255, 255);
  }

  /* ====================================================================
  |   |   |   |   |   |   |   custom slope
  ===================================================================== */
  section.custom-slope{
      position: relative;
      background-color: #c50000;
      display: block;
      width: 100%;
    }
    section.custom-slope .divider {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 7rem;

      /* drop the height to have a constant angle for all screen widths */
    }
    /* ====================================================================
  |   |   |   |   |   |   |   Header
  ===================================================================== */
  header{
      height: 250px !important;
      /* margin-top: -150px !important; */
  }
  .inner-page header .intro-lead-in {
    margin-top: 70px;
    margin-bottom: 0px;
    color: #000 !important;
    font-size: 25px;
  }

  @media (min-width: 768px){
    header .intro-text{
        padding: 0px !important;
        padding-top: 5rem !important;
    }
    .inner-page header .intro-lead-in {
        /* font-size: 30px !important; */
        /* line-height: 43px ; */
        margin-bottom: 0;
        font-size: 45px;
        /* position: absolute; */
        /* top: 100px; */
        /* left: 15%; */
        color: #000 !important;

    }
  }

      /* ====================================================================
  |   |   |   |   |   |   |   custom-boxes
  ===================================================================== */
  .custom-boxes{
      display: none;
      margin-top: -140px;
      z-index: 9999999;
  }
  .custom-boxes .box-inner{
    background-color: #fff;
    box-shadow: 2px 5px 13px 2px #8e8e8e;
    border-radius: 5px;
    padding: 15px;
    min-height: 300px;
  }
  .custom-boxes .box-inner h4{
      color: #253145 !important;
  }
    /* ====================================================================
  |   |   |   |   |   |   |   Prising - box
  ===================================================================== */
  .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent;
        background-color: #4EADAF;
        border-radius: 15px;
        margin: 10px 0px;
        border: none;
        color: #fff;
    }
    .table-striped>tbody>tr:nth-of-type(odd) {
        background-color: #ffffff;
    }
    .table>tbody>tr>td,
     .table>tbody>tr>th,
      .table>tfoot>tr>td, 
      .table>tfoot>tr>th, 
      .table>thead>tr>td,
       .table>thead>tr>th {
        padding: 8px;
        line-height: 1.42857143;
        vertical-align: top;
        border-top: none;
    }
    .nav-tabs {
        border: none;
}
  .flag-icon{
    height: 6rem !important;
    width: 9rem !important;
  }
  #services  tr:nth-of-type(1),
  #services  tr:nth-of-type(2){
      display: none;
  }
  #services .payout-rates tr td{
    position: relative;
  }
   .custom-span{
    position: absolute;
    top: 45px;
    left: 100px;
    font-weight: bolder;
    color: #4EADAF;
  }
  .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
      position: relative;
  }
  tbody tr td:nth-of-type(4){
      display: none;
  }
  tbody tr:nth-of-type(3) .flag-icon.flag-icon-all{
    display: none;
  }
  #services  tr{
    box-shadow: 2px 2px 11px 2px #ededed;
    padding: 20px 0px !important;
  }
  .table-hover>tbody>tr:hover {
    background-color: #fff;
}
    tbody tr:nth-of-type(3) td:nth-of-type(1) img{
        padding: 8px 10px;
    }
    tbody tr:nth-of-type(3) td:nth-of-type(1) .custom-span{
        top: 60px;

    }
    #services .container > ul:nth-of-type(1),
    #services .container > ul:nth-of-type(2),
    #services .container > p
    {
        /* display: none; */
    }
    @media(max-width:768px ){
        #services tr td{
            font-size: 11px;

        }
        #services .screen-info{
            display: none
        }
    }

    /* ====================================================================
  |   |   |   |   |   |   |   Prising - box
  ===================================================================== */
  .some-info h2 {
    text-transform: ;
    margin-bottom: 15px;
    color: #253145;
}
    .some-info ul li {
    color: #91a6c1;
    padding: 5px;
    font-size: 17px;
}
  /* ====================================================================
  |   |   |   |   |   |   |   responsive in mobile
  ===================================================================== */

  @media(max-width:576px ){
    
    tbody tr td span.custom-span{
        display: none !important;
    }
    .flag-icon,
    tbody tr td img.world-img{
        display: block !important;
        padding-top: 0px !important

    }
    tbody .flag-icon.flag-icon-all {
        display: none !important;

    }
  }
</style>


<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in"><?= h($page->title) ?></div>
        </div>
    </div>
</header>



<!------------------- boxes ---------------------->
<div class="custom-boxes">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4"> 
                <div class="box-inner">
                    <img src="webroot/modern_theme/build/img/custom-icons/vision.png" !important" alt="">
                    <h4>Pay Per View</h4>
                    <p>Get Paid For Every View To Your Link</p>
                </div>
            </div>
            <div class="col-sm-4"> 
                <div class="box-inner">
                    <img src="webroot/modern_theme/build/img/custom-icons/map.png" alt="">
                    <h4>All Countries Counted</h4>
                    <p>No matter what Country is , You'll still get Paid.</p>
                </div>
            </div>
            <div class="col-sm-4"> 
                <div class="box-inner">
                    <img src="webroot/modern_theme/build/img/custom-icons/graph-bars.png" alt="">
                    <h4>35% Per Referral</h4>
                    <p>Earn More When your bring a Friend to us, Up to 35% of What They Earn</p>
                </div>
            </div>
        </div>
    </div>
</div>



<section id="services">
    <div class="container">
        <?= $page->content ?>
    </div>
</section>
<!------------------- some-info ---------------------->
<div class="some-info">
    <div class="container">
    <h2> <i class="fas fa-info-circle"></i> Why Views are not counting !?</h2>
        <ul>
            <li>Anonymous(not registered users) short links will not earn, only registered can earn.</li>
            <li>Visitors must be unique within a 24 hours.</li>
            <li>Visitors must have JavaScript enabled.</li>
            <li>Visitors must have Cookies enabled.</li>
            <li>Must view your website for at least 10 seconds.</li>
        </ul>
    </div>
</div>

<script type="text/javascript">
/* ====================================================================
|   |   |   |   |   |   |   change img at scroll
===================================================================== */
$(function () {
    $(window).scroll(function() {
        if ($(window).scrollTop() > 10) {
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
</script>
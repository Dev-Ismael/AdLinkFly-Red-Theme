<?php
/**
 * @var \App\View\AppView $this
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

    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

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

    <?= get_option('auth_head_code'); ?>

    <?= $this->fetch('scriptTop') ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /* ====================================================================
        |   |   |   |   |   |   |   body
        ===================================================================== */
        body, *{
            font-family: 'Kanit', sans-serif !important;
        }
        body{
            overflow-y: auto !important;
            position: relative;
            width: 100%  !important;
            background-image: url("../img/backgroundCover.jpg") !important;
            background-size: cover !important; 
            background-repeat: no-repeat !important;
            background-attachment: scroll !important;
            background-position: center center !important;
            top: 0px;

        }
        /* ====================================================================
        |   |   |   |   |   |   |   content-body
        ===================================================================== */
        .content-body{
            padding-top: 60px;
            height: 100vh;
            background-size: cover ;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            position: relative;
            width: 100%;
            top: 0px
        }
        /* ====================================================================
        |   |   |   |   |   |   |   login-box
        ===================================================================== */

        .login-box-body, .register-box-body {
            background: transparent !important;
            width: 90%;
            border-right: 3px solid #4EADAF;
            padding-right: 50px;
        }
        .btn.btn-flat {
            position: relative;
            background-color: transparent;
            border: 2px solid #fff;
            border-radius: 20px;
            height: 40px;
            cursor: pointer;
            color: #fff;
            outline: none;
            margin: 20px auto;
            outline: none;
            transition: all 0.4s ease-in-out;
            margin-top: 40px
        }
        .btn.btn-flat:hover{
            background-color: #4EADAF;
            outline: none;
            border: none
        }
        .form-control{
            display: block;
            background-color: transparent;
            border: 0px;
            outline: none;
            border-bottom: 1px solid #fff;
            height: 27px;
            line-height: 27px;
            width: 100%;
            color: #fff;
            padding-top: 10px;
            padding-bottom: 10px;
            height: 50px;
        }
        input::placeholder{
            color: #fff !important;
        }
        a{
            color: #fff;
            text-decoration: underline
        }
        a:hover{
            color: rgb(219, 219, 219);
            text-decoration: underline
        }
        .login-logo a{
            color: #4EADAF !important;
            text-decoration: none
        }
        p {
            color: rgb(209, 209, 209);
        }
        .loginBox .login-logo img{
            width: 300px;
            margin-right: 100px;
        }
        @media (max-width: 992px){
            .loginBox .login-logo img{
                margin-right: 55px;
            }
        }
        @media (max-width: 767px){
            .loginBox .login-logo img{
                margin-right: 80px;
            }
        }
        @media (max-width: 700px){
            .loginBox .login-logo img{
                margin-right: 70px;
            }
        }
        @media (max-width: 600px){
            .loginBox .login-logo img{
                margin-right: 30px;
                width: 250px;
            }
        }
        /* ====================================================================
        |   |   |   |   |   |   |   rocket animation css
        ===================================================================== */
        





        .rocket {
        position: absolute;
        top: 20%;
        width: 80px;
        left: calc(50% - 60px);
        }
        .rocket .rocket-body {
        width: 80px;
        left: calc(50% - 50px);
        animation: bounce 0.5s infinite;
        }
        .rocket .rocket-body .body {
        background-color: #dadada;
        height: 180px;
        left: calc(50% - 50px);
        border-top-right-radius: 100%;
        border-top-left-radius: 100%;
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
        border-top: 5px solid #f5f5f5;
        }
        .rocket .rocket-body:before {
        content: "";
        position: absolute;
        left: calc(50% - 24px);
        width: 48px;
        height: 13px;
        background-color: #4EADAF;
        bottom: -13px;
        border-bottom-right-radius: 60%;
        border-bottom-left-radius: 60%;
        }
        .rocket .window {
        position: absolute;
        width: 40px;
        height: 40px;
        border-radius: 100%;
        background-color: #4EADAF;
        left: calc(50% - 25px);
        top: 40px;
        border: 5px solid #b4b2b2;
        }
        .rocket .fin {
        position: absolute;
        z-index: -100;
        height: 55px;
        width: 50px;
        background-color: #4EADAF;
        }
        .rocket .fin-left {
        left: -30px;
        top: calc(100% - 55px);
        border-top-left-radius: 80%;
        border-bottom-left-radius: 20%;
        }
        .rocket .fin-right {
        right: -30px;
        top: calc(100% - 55px);
        border-top-right-radius: 80%;
        border-bottom-right-radius: 20%;
        }
        .rocket .exhaust-flame {
        position: absolute;
        top: 90%;
        width: 28px;
        background: linear-gradient(to bottom, transparent 10%, #f5f5f5 100%);
        height: 150px;
        left: calc(50% - 14px);
        animation: exhaust 0.2s infinite;
        }
        .rocket .exhaust-fumes li {
        width: 60px;
        height: 60px;
        background-color: #f5f5f5;
        list-style: none;
        position: absolute;
        border-radius: 100%;
        }
        .rocket .exhaust-fumes li:first-child {
        width: 200px;
        height: 200px;
        bottom: -300px;
        animation: fumes 5s infinite;
        }
        .rocket .exhaust-fumes li:nth-child(2) {
        width: 150px;
        height: 150px;
        left: -120px;
        top: 260px;
        animation: fumes 3.2s infinite;
        }
        .rocket .exhaust-fumes li:nth-child(3) {
        width: 120px;
        height: 120px;
        left: -40px;
        top: 330px;
        animation: fumes 3s 1s infinite;
        }
        .rocket .exhaust-fumes li:nth-child(4) {
        width: 100px;
        height: 100px;
        left: -170px;
        animation: fumes 4s 2s infinite;
        top: 380px;
        }
        .rocket .exhaust-fumes li:nth-child(5) {
        width: 130px;
        height: 130px;
        left: -120px;
        top: 350px;
        animation: fumes 5s infinite;
        }
        .rocket .exhaust-fumes li:nth-child(6) {
        width: 200px;
        height: 200px;
        left: -60px;
        top: 280px;
        animation: fumes2 10s infinite;
        }
        .rocket .exhaust-fumes li:nth-child(7) {
        width: 100px;
        height: 100px;
        left: -100px;
        top: 320px;
        }
        .rocket .exhaust-fumes li:nth-child(8) {
        width: 110px;
        height: 110px;
        left: 70px;
        top: 340px;
        }
        .rocket .exhaust-fumes li:nth-child(9) {
        width: 90px;
        height: 90px;
        left: 200px;
        top: 380px;
        animation: fumes 20s infinite;
        }

        .star li {
        list-style: none;
        position: absolute;
        }
        .star li:before, .star li:after {
        content: "";
        position: absolute;
        background-color: #f5f5f5;
        }
        .star li:before {
        width: 10px;
        height: 2px;
        border-radius: 50%;
        }
        .star li:after {
        height: 8px;
        width: 2px;
        left: 4px;
        top: -3px;
        }
        .star li:first-child {
        top: -30px;
        left: -210px;
        animation: twinkle 0.4s infinite;
        }
        .star li:nth-child(2) {
        top: 0;
        left: 60px;
        animation: twinkle 0.5s infinite;
        }
        .star li:nth-child(2):before {
        height: 1px;
        width: 5px;
        }
        .star li:nth-child(2):after {
        width: 1px;
        height: 5px;
        top: -2px;
        left: 2px;
        }
        .star li:nth-child(3) {
        left: 120px;
        top: 220px;
        animation: twinkle 1s infinite;
        }
        .star li:nth-child(4) {
        left: -100px;
        top: 200px;
        animation: twinkle 0.5s ease infinite;
        }
        .star li:nth-child(5) {
        left: 170px;
        top: 100px;
        animation: twinkle 0.4s ease infinite;
        }
        .star li:nth-child(6) {
        top: 87px;
        left: -79px;
        animation: twinkle 0.2s infinite;
        }
        .star li:nth-child(6):before {
        height: 1px;
        width: 5px;
        }
        .star li:nth-child(6):after {
        width: 1px;
        height: 5px;
        top: -2px;
        left: 2px;
        }

        @keyframes fumes {
        50% {
            transform: scale(1.5);
            background-color: transparent;
        }
        51% {
            transform: scale(0.8);
        }
        100% {
            background-color: #f5f5f5;
            transform: scale(1);
        }
        }
        @keyframes bounce {
        0% {
            transform: translate3d(0px, 0px, 0);
        }
        50% {
            transform: translate3d(0px, -4px, 0);
        }
        100% {
            transform: translate3d(0px, 0px, 0);
        }
        }
        @keyframes exhaust {
        0% {
            background: linear-gradient(to bottom, transparent 10%, #f5f5f5 100%);
        }
        50% {
            background: linear-gradient(to bottom, transparent 8%, #f5f5f5 100%);
        }
        75% {
            background: linear-gradient(to bottom, transparent 12%, #f5f5f5 100%);
        }
        }
        @keyframes fumes2 {
        50% {
            transform: scale(1.1);
        }
        }
        @keyframes twinkle {
        80% {
            transform: scale(1.1);
            opacity: 0.7;
        }
        }
        body {
        min-height: 100vh;
        background: linear-gradient(to bottom, #b4b2b2 0%, #b4b2b2 70%, #f5f5f5 100%);
        overflow: hidden;
        }

        .rocket {
        position: absolute;
        top: 20%;
        width: 80px;
        left: calc(50% - 60px);
        }
        .rocket .rocket-body {
        width: 80px;
        left: calc(50% - 50px);
        animation: bounce 0.5s infinite;
        }
        .rocket .rocket-body .body {
        background-color: #dadada;
        height: 180px;
        left: calc(50% - 50px);
        border-top-right-radius: 100%;
        border-top-left-radius: 100%;
        border-bottom-left-radius: 50%;
        border-bottom-right-radius: 50%;
        border-top: 5px solid #f5f5f5;
        }
        .rocket .rocket-body:before {
        content: '';
        position: absolute;
        left: calc(50% - 24px);
        width: 48px;
        height: 13px;
        background-color: #4EADAF;
        bottom: -13px;
        border-bottom-right-radius: 60%;
        border-bottom-left-radius: 60%;
        }
        .rocket .window {
        position: absolute;
        width: 40px;
        height: 40px;
        border-radius: 100%;
        background-color: #4EADAF;
        left: calc(50% - 25px);
        top: 40px;
        border: 5px solid #b4b2b2;
        }
        .rocket .fin {
        position: absolute;
        z-index: -100;
        height: 55px;
        width: 50px;
        background-color: #4EADAF;
        }
        .rocket .fin-left {
        left: -30px;
        top: calc(100% - 55px);
        border-top-left-radius: 80%;
        border-bottom-left-radius: 20%;
        }
        .rocket .fin-right {
        right: -30px;
        top: calc(100% - 55px);
        border-top-right-radius: 80%;
        border-bottom-right-radius: 20%;
        }
        .rocket .exhaust-flame {
        position: absolute;
        top: 90%;
        width: 28px;
        background: linear-gradient(to bottom, transparent 10%, #f5f5f5 100%);
        height: 150px;
        left: calc(50% - 14px);
        animation: exhaust 0.2s infinite;
        }
        .rocket .exhaust-fumes li {
        width: 60px;
        height: 60px;
        background-color: #f5f5f5;
        list-style: none;
        position: absolute;
        border-radius: 100%;
        }
        .rocket .exhaust-fumes li:first-child {
        width: 200px;
        height: 200px;
        bottom: -300px;
        animation: fumes 5s infinite;
        }
        .rocket .exhaust-fumes li:nth-child(2) {
        width: 150px;
        height: 150px;
        left: -120px;
        top: 260px;
        animation: fumes 3.2s infinite;
        }
        .rocket .exhaust-fumes li:nth-child(3) {
        width: 120px;
        height: 120px;
        left: -40px;
        top: 330px;
        animation: fumes 3s 1s infinite;
        }
        .rocket .exhaust-fumes li:nth-child(4) {
        width: 100px;
        height: 100px;
        left: -170px;
        animation: fumes 4s 2s infinite;
        top: 380px;
        }
        .rocket .exhaust-fumes li:nth-child(5) {
        width: 130px;
        height: 130px;
        left: -120px;
        top: 350px;
        animation: fumes 5s infinite;
        }
        .rocket .exhaust-fumes li:nth-child(6) {
        width: 200px;
        height: 200px;
        left: -60px;
        top: 280px;
        animation: fumes2 10s infinite;
        }
        .rocket .exhaust-fumes li:nth-child(7) {
        width: 100px;
        height: 100px;
        left: -100px;
        top: 320px;
        }
        .rocket .exhaust-fumes li:nth-child(8) {
        width: 110px;
        height: 110px;
        left: 70px;
        top: 340px;
        }
        .rocket .exhaust-fumes li:nth-child(9) {
        width: 90px;
        height: 90px;
        left: 200px;
        top: 380px;
        animation: fumes 20s infinite;
        }

        .star li {
        list-style: none;
        position: absolute;
        }
        .star li:before, .star li:after {
        content: '';
        position: absolute;
        background-color: #f5f5f5;
        }
        .star li:before {
        width: 10px;
        height: 2px;
        border-radius: 50%;
        }
        .star li:after {
        height: 8px;
        width: 2px;
        left: 4px;
        top: -3px;
        }
        .star li:first-child {
        top: -30px;
        left: -210px;
        animation: twinkle 0.4s infinite;
        }
        .star li:nth-child(2) {
        top: 0;
        left: 60px;
        animation: twinkle 0.5s infinite;
        }
        .star li:nth-child(2):before {
        height: 1px;
        width: 5px;
        }
        .star li:nth-child(2):after {
        width: 1px;
        height: 5px;
        top: -2px;
        left: 2px;
        }
        .star li:nth-child(3) {
        left: 120px;
        top: 220px;
        animation: twinkle 1s infinite;
        }
        .star li:nth-child(4) {
        left: -100px;
        top: 200px;
        animation: twinkle 0.5s ease infinite;
        }
        .star li:nth-child(5) {
        left: 170px;
        top: 100px;
        animation: twinkle 0.4s ease infinite;
        }
        .star li:nth-child(6) {
        top: 87px;
        left: -79px;
        animation: twinkle 0.2s infinite;
        }
        .star li:nth-child(6):before {
        height: 1px;
        width: 5px;
        }
        .star li:nth-child(6):after {
        width: 1px;
        height: 5px;
        top: -2px;
        left: 2px;
        }

        @keyframes fumes {
        50% {
            transform: scale(1.5);
            background-color: transparent;
        }
        51% {
            transform: scale(0.8);
        }
        100% {
            background-color: #f5f5f5;
            transform: scale(1);
        }
        }
        @keyframes bounce {
        0% {
            transform: translate3d(0px, 0px, 0);
        }
        50% {
            transform: translate3d(0px, -4px, 0);
        }
        100% {
            transform: translate3d(0px, 0px, 0);
        }
        }
        @keyframes exhaust {
        0% {
            background: linear-gradient(to bottom, transparent 10%, #f5f5f5 100%);
        }
        50% {
            background: linear-gradient(to bottom, transparent 8%, #f5f5f5 100%);
        }
        75% {
            background: linear-gradient(to bottom, transparent 12%, #f5f5f5 100%);
        }
        }
        @keyframes fumes2 {
        50% {
            transform: scale(1.1);
        }
        }
        @keyframes twinkle {
        80% {
            transform: scale(1.1);
            opacity: 0.7;
        }
        }

        /* ====================================================================
        |   |   |   |   |   |   |   responsive 
        ===================================================================== */
        @media (max-width: 992px){
            .content-body > div:nth-of-type(2){
                display: none
            }
            .login-box-body, .register-box-body {
                border-right: none;
                padding-right: 0px;
            }
        }
        /* ====================================================================
        |   |   |   |   |   |   |   diplay: none for forget pass 
        ===================================================================== */
        .loginBox  a:nth-last-of-type(2){
            display: none;
        }
    </style>
</head>
<body class="hold-transition login-page">
    <div class="container">
        <div class="content-body">
            <div class="col-md-8">
                <div class="loginBox ">
                    <div class="login-logo ">
                        <a href="<?php echo $this->Url->build('/'); ?>"><?= get_logo_alt()['content'] ?></a>
                    </div>
                    <div class="login-box-body">
                        <?= $this->Flash->render() ?>
                            
                        <?= $this->fetch('content') ?> 
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 60px">



                <div class="rocket">
                    <div class="rocket-body">
                        <div class="body"></div>
                        <div class="fin fin-left"></div>
                        <div class="fin fin-right"></div>
                        <div class="window"></div>
                    </div>
                    <div class="exhaust-flame"></div>
                    <ul class="exhaust-fumes">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul class="star">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>


    
    
    
            </div>
            <footer>
                <div class="container text-center">
                    <?= h(get_option('copyright', '')); ?>
                </div>
            </footer>
        </div>
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
    echo $this->Assets->script('/js/app.js?ver=' . APP_VERSION);
    echo $this->Assets->script('/vendor/dashboard/js/app.min.js?ver=' . APP_VERSION);
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
</body>
</html>

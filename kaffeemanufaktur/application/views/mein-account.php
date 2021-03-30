<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "mein-account";
    require_once("public/include/head.php")?>
    <style type="text/css">
    .woocommerce .woocommerce-notices-wrapper {
        z-index: 999;
        margin-top: 50px;
        position: relative;
    }

    .woocommerce .woocommerce-notices-wrapper {
        margin-top: 0px !important;
    }

    .alert {
        position: relative;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem;
        padding-right: 4rem;
    }

    .alert_error {
        background: #f8d7da;
        border: 1px solid #f5c6cb;
        color: #721c24;
        font-size: 20px;
    }

    .alert_success {
        background: #d4edda;
        border: 1px solid #c3e6cb;
         color: #155724;
        font-size: 20px;
    }

    .alert_warning {
        background: #fff3cd;
        border: 1px solid #ffeeba;
        color: #856404;
        font-size: 20px;
        display: flex;
        flex-wrap: wrap;
    }

    .alert .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: .75rem 1.25rem;
        color: inherit;
    }

    /* .alert_error a,
    .alert_error a:hover {
        color: #fff;
    } */

    .close:focus,
    .close:hover {
        color: #000;
        text-decoration: none;
        opacity: .75;
    }

    a,
    a:visited,
    a:focus {
        text-decoration: none;
        outline: 0;
    }
    </style>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <div id="agbanner">
        <div id="agbBannerBottomDeco"></div>
    </div>
    <!--account started.-->
    <section class="account">
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-lg-4">
                    <?php if(isset($ptitle)){
		            if(isset($msg)){
		            if($ptitle == 'login page'){?>
                    <div class="woocommerce-notices-wrapper" id="currentDiv">
                        <div class="woocommerce-error alert alert_error" role="alert">

                            <div class="alert_wrapper">
                                <strong>ERROR:</strong><?=$msg?>
                            </div>

                            <a class="close" href="javascript:void(0)" onclick="close_()">close
                                <i class="fas fa-times" aria-hidden="true"></i></a>

                        </div>
                    </div>
                    <?php }else{?>
                    <div class="woocommerce-notices-wrapper" id="currentDiv1">
                        <div class="woocommerce-error alert alert_success" role="alert">

                            <div class="alert_wrapper">
                                <strong>Success:</strong> <?=$msg?>
                            </div>

                            <a class="close" href="javascript:void(0)" onclick="close_()"> &times;
                            </a>

                        </div>
                    </div>

                    <?php } } }?>
                    <h2>Anmelden</h2>
                    <div class="login-form">
                        <form method="post" action="login">
                            <div class="row">
                                <div class="col-12">
                                    <label for="">Benutzername oder E-Mail-Adresse <span
                                            class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username"
                                            value="<?=isset($email_id)&&!empty($email_id)?$email_id:(isset($_COOKIE["email_id"])?$_COOKIE["email_id"]:'') ?>"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="">Passwort <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="password" name="password"
                                            value="<?=isset($password)&&!empty($password)?$password:(isset($_COOKIE["password"])?$_COOKIE["password"]:'') ?>"
                                            required>
                                        <div class="input-group-append"><i class="fas fa-eye" id="togglePassword"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <button class="btn-white">Anmelden</button>
                                </div>
                                <div class="col-xl-6">
                                    <div class="line-height">
                                        <input type="checkbox" id="checkbox" name="remember">
                                        <label for="checkbox">Angemeldet bleiben</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p><a href="<?= base_url()?>register">Registrieren</a> | <a href="<?=base_url('forgot-password')?>">Passwort
                                            vergessen?</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8">
                    <div id="siteMovedNotice">
                        <h6 id="siteTitle"> Sie können sich nicht anmelden?</h6>
                        <p>Sie befinden sich auf der neuen Webpräsenz der Hannoverschen Kaffeemanufaktur.</p>
                        <p>Sollten Sie sich hier zum ersten mal anmelden, bitten wir Sie aus Sicherheitsgründen ein
                            neues Passwort zu vergeben. Klicken Sie dazu bitte auf folgenden Link:</p>
                        <div class="popupResetPassword">
                            <a href="" class="btn-white">NEUES PASSWORT VERGEBEN</a>
                        </div>
                        <p id="questionsAndProblems">Bei Fragen und technischen Problemen kontaktieren Sie bitte unseren
                            Kundenservice unter info@hannoversche-kaffeemanufaktur.de oder rufen Sie an unter 0511 310
                            104-50.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--account ended.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>

    <script>
    $(document).on('click', '#togglePassword', function() {

        $(this).toggleClass("fas fa-eye-slash");

        var input = $("#password");
        input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
    });
    // var currentDiv = $("#currentDiv");
    // var myInterval = setInterval(function() {
    //     currentDiv.hide();
    // }, 5000);
    // var currentDiv1 = $("#currentDiv1");
    // var myInterval = setInterval(function() {
    //     currentDiv1.hide();
    // }, 5000);
    function close_() {
        $("#currentDiv1").hide();
        $("#currentDiv").hide();
    }
    </script>
</body>

</html>
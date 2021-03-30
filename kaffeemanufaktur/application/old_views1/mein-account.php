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
    margin-top: 0px!important;
}
	.alert_error {
	    background: #fb5455;
	    color: #fff;
	}
    .alert_success {
    background: #5a9050;
    color: #fff;
    font-size: 20px;
}
    .alert a.close {
        position: absolute;
        right: 15px;
        top: 20px;
        font-size: 20px;
        line-height: 20px;
    }
    .alert_error a, .alert_error a:hover {
        color: #9f2e2e;
    }
    a,a:visited, a:focus {
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
                    <?php if(isset($title)){
		            if(isset($msg)){
		            if($title == 'login page'){?>
                    <div class="woocommerce-notices-wrapper" id="currentDiv">
                        <div class="woocommerce-error alert alert_error" role="alert">
                            <div class="alert_wrapper">
                                <strong>ERROR:</strong><?=$msg?><a href="">Lost Your Password?</a>        
                            </div>
                            <a class="close" href="javascript:void(0)" onclick="close_()">close
                                <i class="fas fa-times" aria-hidden="true" ></i></a>
                        </div>
                    </div>
                <?php }else{?>
                	<div class="woocommerce-notices-wrapper" id="currentDiv1">
                	    <div class="woocommerce-error alert alert_success" role="alert">
                            <div class="alert_wrapper">
                                <strong>Success:</strong><?=$msg?>        
                            </div>
                            <a class="close" href="javascript:void(0)" onclick="close_()"> close
                                </a>
                        </div>
                    </div>
                <?php } } }?>
                    <h2>Anmelden</h2>
                    <div class="login-form">
                        <form method="post" action="login">
                            <div class="row">
                                <div class="col-12">
                                    <label for="">Benutzername oder E-Mail-Adresse <span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" value="<?=isset($email_id)&&!empty($email_id)?$email_id:(isset($_COOKIE["email_id"])?$_COOKIE["email_id"]:'') ?>" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="">Passwort <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="password" name="password" value="<?=isset($password)&&!empty($password)?$password:(isset($_COOKIE["password"])?$_COOKIE["password"]:'') ?>" required>
                                        <div class="input-group-append"><i class="fas fa-eye" id="togglePassword"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <button class="btn-white">Anmelden</button>
                                </div>
                                <div class="col-xl-6">
                                    <div class="line-height">
                                        <input type="checkbox" id="checkbox" name="remember" >
                                        <label for="checkbox">Angemeldet bleiben</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p><a href="<?= base_url()?>register">Registrieren</a> | <a href="">Passwort vergessen?</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8">
                    <div id="siteMovedNotice">
                        <h6 id="siteTitle"> Sie können sich nicht anmelden?</h6>
                        <p>Sie befinden sich auf der neuen Webpräsenz der Hannoverschen Kaffeemanufaktur.</p>
                        <p>Sollten Sie sich hier zum ersten mal anmelden, bitten wir Sie aus Sicherheitsgründen ein neues Passwort zu vergeben. Klicken Sie dazu bitte auf folgenden Link:</p>
                        <div class="popupResetPassword">
                            <a href="" class="btn-white">NEUES PASSWORT VERGEBEN</a>
                        </div>
                        <p id="questionsAndProblems">Bei Fragen und technischen Problemen kontaktieren Sie bitte unseren Kundenservice unter info@hannoversche-kaffeemanufaktur.de oder rufen Sie an unter 0511 310 104-50.</p>
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
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
    });
    // var currentDiv = $("#currentDiv");
    // var myInterval = setInterval(function() {
    //     currentDiv.hide();
    // }, 5000);
    // var currentDiv1 = $("#currentDiv1");
    // var myInterval = setInterval(function() {
    //     currentDiv1.hide();
    // }, 5000);
    function close_(){
    $("#currentDiv1").hide();
    $("#currentDiv").hide();
    }
    </script>
</body>

</html>

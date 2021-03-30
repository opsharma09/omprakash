<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "mein-account";
    require_once("include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("include/header.php") ?>
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
                    <h2>Anmelden</h2>
                    <div class="login-form">
                        <form method="get" action="">
                            <div class="row">
                                <div class="col-12">
                                    <label for="">Benutzername oder E-Mail-Adresse <span class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="">Benutzername oder E-Mail-Adresse <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control">
                                        <div class="input-group-append"><i class="fas fa-eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <button class="btn-white">Anmelden</button>
                                </div>
                                <div class="col-xl-6">
                                    <div class="line-height">
                                        <input type="checkbox" id="checkbox">
                                        <label for="checkbox">Angemeldet bleiben</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p><a href="">Registrieren</a> | <a href="">Passwort vergessen?</a></p>
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
    <?php require_once("include/footer.php") ?>
</body>

</html>

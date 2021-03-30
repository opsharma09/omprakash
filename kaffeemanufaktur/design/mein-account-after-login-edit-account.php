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
    <div id="agbanner" style="background-image:url(images/20190625091713.jpg)">
        <div id="agbBannerBottomDeco"></div>
    </div>
    <!--account started.-->
    <section class="account">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="main-side-nav">
                        <li class="is-active"><a href="">Dashbaord</a></li>
                        <li><a href="">Bestellungen</a></li>
                        <li><a href="">Abonnements</a></li>
                        <li><a href="">Coupons</a></li>
                        <li><a href="">Adressen</a></li>
                        <li><a href="">Zahlungsmethoden</a></li>
                        <li><a href="">Kontodetails</a></li>
                        <li><a href="">Abmelden</a></li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <form action="" class="woocommerce-EditAccountForm edit-account">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Vorname <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nachname <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Anzeigename <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                    <p class="m-0"><i>So wird Ihr Name im Konto-Bereich und in den Bewertungen angezeigt</i></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">E-Mail-Adresse <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                    <p class="m-0"><i>This is how your name will appear in the account area and in the ratings</i></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <legend>Passwort ändern</legend>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Aktuelles Passwort (leer lassen für keine Änderung)</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text"><i class="fas fa-eye"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Neues Passwort (leer lassen für keine Änderung)</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text"><i class="fas fa-eye"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Neues Passwort bestätigen</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control">
                                                    <div class="input-group-append">
                                                        <div class="input-group-text"><i class="fas fa-eye"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <button class="btn-white">Änderungen speichern</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--account ended.-->
    <!--footer started.-->
    <?php require_once("include/footer.php") ?>
</body>

</html>

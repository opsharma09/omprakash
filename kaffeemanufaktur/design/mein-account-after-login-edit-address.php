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
                    <p>Die folgenden Adressen werden standardmäßig auf der Bezahlseite verwendet.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mein-account address">
                                <div class="clearfix">
                                    <h3>Rechnungsadresse</h3>
                                    <a href="">Bearbeiten</a>
                                </div>
                                <address class="fa d-block">
                                    enthuons <br>utkarsh saxena <br>123 Left road <br>Does not know <br>20132 spain
                                </address>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mein-account address">
                                <div class="clearfix">
                                    <h3>Lieferadresse</h3>
                                    <a href="">Bearbeiten</a>
                                </div>
                                <address class="fa fa-sort-alt f0dc d-block">
                                    enthuons <br>utkarsh saxena <br>123 Left road <br>Does not know <br>20132 spain
                                </address>
                            </div>
                        </div>
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

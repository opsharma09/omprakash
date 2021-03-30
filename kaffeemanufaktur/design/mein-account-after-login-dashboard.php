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
                <div class="col-md-5 col-lg-4">
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
                <div class="col-md-7 col-lg-8">
                    <p>Hello <b>Utkarsh Saxena</b> (not <b>Utkarsh Saxena</b> ? <a href="">Sign Out</a></p>
                    <p>From your account dashboard, you can make your <a href="">last orders</a> , see your <a href="">shipping and billing addresses</a> and <a href="">password and account details</a> to edit.</p>
                </div>
            </div>
        </div>
    </section>
    <!--account ended.-->
    <!--footer started.-->
    <?php require_once("include/footer.php") ?>
</body>

</html>

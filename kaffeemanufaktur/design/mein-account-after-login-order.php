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
                    <table class="woocommerce-account table my_account_orders">
                        <thead>
                            <tr>
                               <th>Bestellug</th> 
                               <th>Datum</th> 
                               <th>Status</th> 
                               <th>Gesamtsumme</th> 
                               <th>Aktionen</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="">#27271</a></td>
                                <td>9. November 2020</td>
                                <td>Zahlung ausstehend</td>
                                <td>125,28 € für 18 Artikel</td>
                                <td><a href="" class="button">Bezahlen</a><a href="" class="button">Anzeigen</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--account ended.-->
    <!--footer started.-->
    <?php require_once("include/footer.php") ?>
</body>

</html>

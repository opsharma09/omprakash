<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
        $title = "Koffee.com";
        $style_name = "cart";
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
    <!--section cart started.-->
    <section class="cart">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error:</strong> Username required.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Noch 5,10 € bis zum kostenlosen Versand!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" class="cart-form">
                        <div class="coupon_message_wrap">

                        </div>
                        <div class="shop_table">
                            <div class="row head">
                                <div class="col"><span> </span></div>
                                <div class="col"><span>Produkt</span></div>
                                <div class="col"><span>Pries</span></div>
                                <div class="col"><span>Anzahl</span></div>
                                <div class="col"><span>Zwischensumme</span></div>
                                <div class="col"><span></span></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <img src="images/logo.svg" alt="">
                                </div>
                                <div class="col">
                                    Buchbare Veranstaltung
                                    <p class="info">Veranstaltung: Genussreise <br>Personen: 1 <br> Datum: 8. August 2020 <br>Zeit: 15:00</p>
                                </div>
                                <div class="col flex-row">
                                    <div class="text-center">
                                        <span class="d-block mb-2">24,90 &euro;</span>
                                        <select name="" id="" class="form-control" style="background: #da9f56; color:#fff">
                                            <option value="">Choose Option</option>
                                            <option value="">Choose Option</option>
                                            <option value="">Choose Option</option>
                                            <option value="">Choose Option</option>
                                            <option value="">Choose Option</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col"></div>
                                <div class="col">24,90 &euro;</div>
                                <div class="col">
                                    <a href="" class="btn-white">&times;</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col actions">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="coupon"><input type="text" placeholder="Gutscheincode"><button class="btn-white">Gutschein anwenden</button></div>
                                        </div>
                                        <div class="col-md-5 text-right"><button class="btn-white" disabled>Warenkorb aktualisieren</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="cart_totals">
                        <h2>Warenkorb-Summe</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Zwischensumme</th>
                                            <td>24,90 &euro;</td>
                                        </tr>
                                        <tr>
                                            <th>Zwischensumme</th>
                                            <td><b>24,90 &euro;</b></td>
                                        </tr>
                                        <tr>
                                            <th>Zwischensumme</th>
                                            <td>24,90 &euro;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="proceed"><a href="" class="btn-white">Weiter zur Kasse</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section cart ended.-->
    <!--footer started.-->
    <?php require_once("include/footer.php") ?>
</body>

</html>

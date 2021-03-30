<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php
        $title = "Koffee.com";
        $style_name = "product";
        require_once("include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--singleProductCoffeeIntroSection started.-->
    <div id="singleProductCoffeeIntroSection" class="singleProductIntroSection packshotAnimationReferenceContainer">
        <div class="singleProductV2Background">
            <div style="background-image: url('http://codesk.work/design/kaffeemanufaktur/images/Dripster1_Mandelmilch_-2-scaled.jpg'); filter: blur(0px);" class="backgroundBlur"></div>
        </div>
        <div class="container-fluid px-md-0">
            <div class="row">
                <div class="col-lg-4 text-center order-md-last order-lg-first">
                    <div id="excerptWrapper" class="withBackground">
                        <h2>Dripster</h2>
                        <p>Deutsches Design und ein Junges Unternehmen machen dieses Produkt zu einem absoluten Muss für jeden der gerne kalten Kaffee bzw. Eiskaffee trinkt.</p>
                        <p>Die Vorteile der kalten Kaffeezubereitung ist die schonende Lösung der Stoffe über einen sehr langen Zeitraum. So hat der Kaffee am Ende einen unglaublich volles Aroma und einen intensiven Körper ohne in irgeneiner Form bitter oder sauer zu schmecken. Man genießt den reinsten Kaffeegeschmack.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--singleProductCoffeeIntroSection ended.-->
    <!--helperBox started.-->
    <div id="helperBox">
        <div class="buylabel">
            <div class="buyLabelInner">BESTELLEN</div>
        </div>
        <div class="product_selector_inner">
            <form action="">
                <div class="form-row">
                    <!--
                        <div class="col-12 back">
                            <label for="menge">Filtergröße</label>
                            <select name="" id="menge" class="form-control">
                                <option value="" disabled selected>Wählen Sie eine Option</option>
                                <option value="">0,9 Liter</option>
                            </select>
                        </div>
                        -->
                    <div class="col-12 back">
                        <label for="mahlgrad">Größe</label>
                        <select name="" id="mahlgrad" class="form-control">
                            <option value="" disabled selected>Wählen Sie eine Option</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="single_variable_wrap">
                            <div class="quantityWrapper">
                                <label for="anzahl">Anzahl:</label>
                                <input type="number" class="form-control" value="1" id="anzahl">
                            </div>
                            <div class="customPriceTag">
                                <p>30,90 € -38,90 &euro;</p>
                            </div>
                            <div class="customAddToCartButtonWrapper">
                                <button class="btn"><span class="fa fa-shopping-cart"></span> In den Warenkorb</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="payment-gateway text-center">
                <div class="payment d-inline-block">
                    <img src="images/paypal-min.svg" alt="">
                    <img src="images/paypal.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--helperBox ended.-->
    <!--singleProductV2Content started.-->
    <div id="singleProductV2Content">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><img src="http://codesk.work/design/kaffeemanufaktur/images/Dripster1_Verpackung_-2-scaled.jpg" alt=""></div>
                <div class="col-md-9">
                    <div class="productDescText">
                        <div class="productDescV2FullLine">Gerade noch rechtzeitig zum Hochsommer: Nach einigen Jahren gibt es nun eine bezahlbare Zubereitungsmethode für Cold Drip Coffee. Von zwei Hamburger Studenten entwickelt und hervorragend geeignet um Kaffee kalt zuzubereiten.</div>
                        <div class="productDescV2TextRow">
                            <h2>Über den Dripster</h2>
                            <p>Der Dripster ist eine erschwingliche Möglichkeit kalten Kaffee zuhause zuzubereiten. Bei dem Cold Drip tropft etwa alle 3 - 5 Sekunden ein Tropfen kaltes Wasser auf das grob gemahlene Kaffeemehl. Das sorgt für eine langsame und schonende Kaffeeherstellung.</p>
                            <p>Hervorragend verarbeitet und einfach zu bedienen ist der Dripster der zwei Studenten aus Hamburg eine echte Bereicherung für jeden Kaffeetrinker.</p>
                            <p>Die Tropfgeschwindigkeit des Drippers lässt sich stufenlos einstellen. So kann die Zubereitung und der Geschmack des Kaffees absolut individuell angepasst werden. Es wurden für die Herstellung nur hochwertige Gläser und Kunststoffe verwendet. So ist der Dripster auch sehr langlebig.</p>
                        </div>
                        <div class="productDescV2TextRow">
                            <h2>Reinigung:</h2>
                            <p>spülmaschinen-geeignet / weder Stahlwolle noch Scheuermittel verwenden (Gefahr des Zerkratzens)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--singleProductV2Content ended.-->
    <!--footer started.-->
    <?php require_once("include/footer.php") ?>
    <script>
        if ($(window).width() >= 992) {
            function form_open() {
                var single_bottom = document.querySelector("#singleProductCoffeeIntroSection").getBoundingClientRect().top;
                var hover;
                if ($("#helperBox:hover").length != 0) {
                    hover = "yes";
                } else {
                    hover = "no";
                }
                var x = $(this).scrollTop();
                if (single_bottom <= -100 && hover == "no") {
                    var width = $("#helperBox").width() - $("#helperBox .buylabel").width();
                    $("#helperBox").css("transform", "translate(" + width + "px, calc(-50% + 65px))")
                } else {
                    $("#helperBox").css("transform", "")
                }
            }
            form_open();
            $(window).scroll(form_open);
            $(window).resize(form_open);
            $("#helperBox").mouseover(function() {
                $(this).css("transform", "")
            })
            $("#helperBox").mouseout(function() {
                var width = $("#helperBox").width() - $("#helperBox .buylabel").width();
                $(this).css("transform", "translate(" + width + "px, calc(-50% + 65px))")
            })
        }

    </script>
</body>

</html>

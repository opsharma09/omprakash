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
            <div style="background-image: url('images/atmos.jpg'); filter: blur(0px);" class="backgroundBlur"></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 text-center order-md-last order-lg-first">
                    <h2>Fellow Atmos Vakuum Kaffeedose Edelstahl schwarz</h2>
                    <p>Die Fellow Atmos Vakuum Kaffeedose ist hervorragend geeignet für die Aufbewahrung von Kaffee. Geformt aus Edelstahl und lebensmittelechtem Kunststoff schützt die Fellow Atmos Ihre Kaffeebohnen effektiv vor UV-Licht. Mit der integrierten Vakuumpumpe verhindern Sie die außerdem die Oxidation Ihres Kaffees und verlängern so seine Haltbarkeit um etwa 50%.</p>
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
                        <label for="mahlgrad">Fassungsvermögen</label>
                        <select name="" id="mahlgrad" class="form-control">
                            <option value="" disabled selected>1,2 Liter (ca. 450 g Kaffeebohnen)</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="single_variable_wrap">
                            <div class="quantityWrapper">
                                <label for="anzahl">Anzahl:</label>
                                <input type="number" class="form-control" value="1" id="anzahl">
                            </div>
                            <div class="customPriceTag">
                                <p>35,90 €</p>
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
                <div class="col-md-3"><img src="images/atmos.jpg" alt=""></div>
                <div class="col-md-9">
                    <div class="productDescText">
                        <div class="productDescV2FullLine">Die Fellow Atmos Vakuum Kaffeedose schützt Ihre Kaffeebohnen vor drei von vier Übeltätern, die Ihren Kaffee angreifen: Licht, Sauerstoff und Luftfeuchtigkeit. So können Sie Geschmacksverlust verringern und die Haltbarkeit Ihrer Kaffeebohnen um etwa 50% erhöhen.</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="productDescV2TextRow">
                                    <h2>Features</h2>
                                    <ul>
                                        <li>1,2 l Fassungsvermögen (ca. 450 g Kaffeebohnen).</li>
                                        <li>Aus Edelstahl und lebensmittelechtem Kunststoff. Die Stahlversion ist haltbarer und schützt den Kaffee vor UV-Licht.</li>
                                        <li>Verhindert die Oxidation des Kaffees und verlängert seine Haltbarkeit sogar um 50%.</li>
                                        <li>Integrierte Pumpe - Sie drehen den Deckel nur hin und her, um die Luft von innen zu entfernen, ohne dass zusätzliche Pumpen erforderlich sind.</li>
                                        <li>Vakuumverriegelungsanzeige - Wenn das Vakuum verriegelt ist, erscheint ein grüner Ring auf der Anzeige.</li>
                                        <li>Einfacher Entriegelungsknopf - Zum Entriegeln des Behälters drücken Sie einfach einen Knopf.</li>
                                        <li>Luftdichte Silikondichtung - Stoppt Luft, Feuchtigkeit und Gerüche.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="productDescV2TextRow">
                                    <h2>Wussten Sie schon?</h2>
                                    Die Fellow Atmos Vakuum Kaffeedose eigent sich auch hervorragend zur Aufbewahrung loser Lebensmittel wie Laub, Nüsse, Müsli, Kekse, Müsli oder Süßigkeiten. Lagern Sie jedoch keine gemahlenen Substanzen wie gemahlenen Kaffee, Mehl usw. Dies kann den Vakuumdeckel verstopfen und eine ordnungsgemäße Vakuumversiegelung verhindern. Stellen Sie Atmos nicht verkehrt herum auf, während Sie Inhalte darin aufbewahren.
                                </div>
                            </div>
                        </div>
                        <div class="productDescV2TextRow">
                            <h2>ACHTUNG:</h2>
                            Die Fellow Atmos Vakuum Kaffeedose ist nicht spülmaschinenfest.
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

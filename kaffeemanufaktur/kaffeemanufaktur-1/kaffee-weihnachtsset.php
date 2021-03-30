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
            <div style="background-image: url('http://codesk.work/design/kaffeemanufaktur/images/Adventskalender-Flem-Edit-High-Quality-.jpg'); filter: blur(0px);" class="backgroundBlur"></div>
        </div>
        <div class="container-fluid px-md-0">
            <div class="row">
                <div class="col-lg-4 text-center order-md-last order-lg-first">
                    <div id="excerptWrapper" class="withBackground">
                        <h2>Kaffee-Weihnachtsset</h2>
                        <p>Unser Weihnachts-Special für 2020: Unser Suave Melange 500g in einem Weihnachts-Jutebeutel und das exklusives Kaffeelot mit Klemme zu einem Preis im Bundle!></p>
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

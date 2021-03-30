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
            <div style="background-image: url('http://codesk.work/design/kaffeemanufaktur/images/VenusAmbiente.jpg'); filter: blur(0px);" class="backgroundBlur"></div>
        </div>
        <div class="container-fluid px-md-0">
            <div class="row">
                <div class="col-lg-4 text-center order-md-last order-lg-first">
                    <div id="excerptWrapper" class="withBackground">
                        <h2>weihnachtskalender</h2>
                        <p>Dieser exklusive Kaffee-Adventskalender bringt Sie in der Weihnachtszeit auf unvergessliche Geschmacksreisen rund um den Äquator. Hinter jedem der 24 Türchen finden Sie Ihren täglichen Genussmoment. Freuen Sie sich auf facettenreiche Aroma-Augenblicke mit dieser außergewöhnlichen Zusammenstellung von Spezialitätenkaffees aus den bedeutendsten Anbaugebieten der Welt. Entdecken Sie besondere Highlights wie den wertvollen Jamaika Blue Mountain, den seltenen Colombian Geisha und Raritäten wie den kostbaren Yemen Mocca und unseren exklusiven Weihnachtskaffee Brazil Fazenda Gabriela. Variante A - Ganze Bohne: Dieser Kalender enthält 24 x 55g feinsten Röstkaffee in ganzer Bohne. Variante B - filterfein gemahlen: Dieser Kalender enthält 24 x 55g feinsten Röstkaffee filterfein gemahlen. Variante C - Drip Coffee Bags: Dieser Kalender enthält 24 x 10g fein gemahlene Röstkaffees im praktischen Papierfilterbeutel. Als Tassenportion für zu Hause oder unterwegs, unsere Drip Coffee Bags sind überall einfach zuzubereiten. <b>4 - 6 Tage Lieferzeit!</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--singleProductCoffeeIntroSection ended.-->
    <!--singleProductV2Content started.-->
    <div id="singleProductV2Content">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><img src="" alt=""></div>
                <div class="col-md-9">
                    <div class="productDescText">
                        <div class="productDescV2FullLine">Zwei Meister ihrer Kunst: so bunt und vielfältig wie die Kreationen von Kaffeesommelier und Röstmeister Andreas Berndt, ist auch die Kunst von Niko Nikolaidis. Der Shootingstar der Kunstszene verbreitet mit seinen Werken pure Lebensfreude. Für Kaffee-Enthusiasten und Kunstliebende, haben beide Ihre Kunst vereint und dieses einzigartige Weihnachtsmeisterwerk geschaffen.</div>
                        <div class="productDescV2TextRow">
                            <h2>Kalender Highlights</h2>
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

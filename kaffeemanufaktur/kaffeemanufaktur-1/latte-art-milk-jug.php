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
            <div style="background-image: url('images/DSC5001_k.jpg'); filter: blur(0px);" class="backgroundBlur"></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 text-center order-md-last order-lg-first">
                    <h2>Comandante C40 MK3</h2>
                    <div class="productExcerpt">
                        <p>Extrem präzise Handmühle. Hier wurden keinerlei Kompromisse bei Qualität und Leistung gemacht. <br><br>Sehr harte, einzeln nachgeschärfte Kanten der Mahlscheiben schneiden die Kaffeebohnen. <br>Leichtes Kurbeln durch doppelt kugelgelagertes Mahlwerk Made in Germany</p>
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
                <div class="col-md-3"><img src="http://codesk.work/design/kaffeemanufaktur/images/DSC4992.png" alt=""></div>
                <div class="col-md-9">
                    <div class="productDescText">
                        <div class="productDescV2FullLine">Die Milchkännchen von Barista Space bestechen nicht nur durch ihre knalligen Farben. Die Kännchen wurden aufwendig von Internationalen LatteArt Champions entwickelt und erfolgreich auf Meisterschaften eingesetzt. Sie Überzeugen selbst bei anspruchsvollsten Motiven.</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="productDescV2TextRow">
                                    <h2>Das Material</h2>
                                    Für diese Kännchen verwendet das Unternehmen aus Hong Kong einen sehr dünnen und somit leichten Edelstahl. Dadurch ist das Kännchen nicht nur wesentlich leichter, es lässt sich zudem die Temperatur viel schneller erfassen.
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="productDescV2TextRow">
                                    <h2>Die Form</h2>
                                    Eine sehr spitz zulaufende Tülle ermöglicht, durch zum Beispiel die Latte Art Weltmeisterin von 2018 bestätigt, unendlich filigrane Kunstwerke. Zudem hat auch der Griff des Kännchens die optimale Größe und Form für einen guten Halt bei jedem Handgriff.
                                </div>
                            </div>
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

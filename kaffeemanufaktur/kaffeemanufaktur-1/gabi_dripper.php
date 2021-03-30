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
    <div id="singleProductCoffeeIntroSection" class="singleProductIntroSection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 text-center order-md-last order-lg-first">
                    <h2>Gabi Dripper 150ml</h2>
                    <div class="productExcerpt">
                        <p>Der Gabi Master ist ein Coffee Dripper mit innovativem Design, einfacher Bedienung und hervorragenden Ergebnissen. Eine Besonderheit vom Gabi Dripper ist die Verwendung einer Dusche mit 16 Öffnungen, dank der der gemahlene Kaffee gleichmäßig über die gesamte Fläche mit Wasser geflutet wird, was sich positiv auf die Extraktion auswirkt. Die Brüheinheit besteht aus vier Kunststoffelementen: einem Wassertank, einer Dusche, einem Dripper und Stativen.
                        <ul>
                            <li>Gleichmäßige Extraktion durch den Duschkopf mit 16 Löchern.</li>
                            <li>Einmaliges Aufgießen, somit muss man den Brühvorgang nicht beaufsichtigen.</li>
                            <li>150ml Füllmenge. E ist jedoch auch möglich mehrmals hintereinander 150ml aufzugießen, sodass das effektive Volumen auf 450ml steigt.</li>
                        </ul>
                    </div>
                </div>
                <div class="packshot">
                    <div class="packshotPosition position-static">
                        <img src="http://codesk.work/design/kaffeemanufaktur/images/gabi1-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="product_fixed"></div>
    <!--singleProductCoffeeIntroSection ended.-->
    <!--accessoriesIntroSectionWrapper started.-->
    <div id="accessoriesIntroSectionWrapper">
        <div class="hasSimpleTextArea">
            <div id="accessoriesIntroSectionTopDecoration" style="	background-size: 100% 100%;	background-repeat: no-repeat;	background-image:url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTUuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj48c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIiB2aWV3Qm94PSIwIDAgMTAwIDMwIj48cGF0aCBkPSJNIDAgMCBMIDQ1IDI3IEMgNTAgMzAgNTAgMzAgNTUgMjcgTCAxMDAgMCBMIDAgMCBaIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBzdHJva2Utd2lkdGg9IjAiIC8+PC9zdmc+')"></div>
            <div class="spotlight"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4 m-auto">
                        <div class="content">
                            <h1>The Gabi Master A Coffee Dripper</h1>
                            <p>Von unseren Baristi empfohlen</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--accessoriesIntroSectionWrapper ended.-->
    <!--accessoriesCombinationSectionOuter started.-->
    <div id="accessoriesCombinationSectionOuter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Wird gerne zusammen gekauft</h2>
                </div>
                <div class="col-lg-9 m-auto">
                    <div class="accessoriesCombinationSectionInner">
                        <div class="row">
                            <div class="col"><img src="http://codesk.work/design/kaffeemanufaktur/images/WV-FT-GABI1.png" alt=""></div>
                            <div class="col"><span>+</span></div>
                            <div class="col"><img src="http://codesk.work/design/kaffeemanufaktur/images/gabi1-1.png" alt=""></div>
                            <div class="col"><span>+</span></div>
                            <div class="col"><img src="http://codesk.work/design/kaffeemanufaktur/images/Packshots-Abstrakt-neu-Okt.-2018Melange-Hanovera.png" alt=""></div><div class="col"><span>+</span></div>
                            <div class="col"><img src="http://codesk.work/design/kaffeemanufaktur/images/Zubehor-WasserkocherElement-5-8.png" alt=""></div>
                        </div>
                    </div>
                    <a href="" class="btn-white button">Alles in den Warenkorb</a>
                </div>
            </div>
        </div>
    </div>
    <!--accessoriesCombinationSectionOuter ended.-->
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

        if ($(window).width() >= 992) {
            $(window).scroll(function() {
                var x = $(window).scrollTop();
                var height = $(window).height();
                if (x > $("#product_fixed").offset().top - height + 110) {
                    if ($(".packshotPosition").length > 0) {
                        var top = $(".packshotPosition img").offset().top - 26 + "px";
                    }
                    $(".packshotPosition").css("top", top);
                    $(".packshotPosition").addClass("packshotPositionBottom").removeClass("packshotPosition");;
                } else {
                    $(".packshotPositionBottom").css("position", "").css("top", "")
                    $(".packshotPositionBottom").addClass("packshotPosition").removeClass("packshotPositionBottom");;
                }
            })
        }

    </script>
</body>

</html>

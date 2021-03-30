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
                    <h2>American Press</h2>
                    <div class="productExcerpt">
                        <p>Die American Press ist kunstvoll gestaltet, sehr leicht zu handhaben und bruchresistent. Die kombinierte Wirkung aus Druck und sehr feiner Filterung führt zu einem enorm cleanen, komplexen Kaffee.</p>
                        <h6>geeingnet für</h6>
                        <div class="image">
                            <div><img src="images/Am-PressElement-4-8.png" alt=""></div>
                            <div><img src="images/Am-PressElement-2-8.png" alt=""></div>
                            <div><img src="images/Am-PressElement-3-8.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="packshot">
                    <div class="packshotPosition position-static">
                        <img src="images/Am-PressElement-1-8.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--singleProductCoffeeIntroSection ended.-->
    <!--accessoriesIntroSectionWrapper started.-->
    <div id="accessoriesIntroSectionWrapper">
        <div class="hasSimpleTextArea">
            <div id="accessoriesIntroSectionTopDecoration" style="	background-size: 100% 100%;	background-repeat: no-repeat;	background-image:url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTUuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj48c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIiB2aWV3Qm94PSIwIDAgMTAwIDMwIj48cGF0aCBkPSJNIDAgMCBMIDQ1IDI3IEMgNTAgMzAgNTAgMzAgNTUgMjcgTCAxMDAgMCBMIDAgMCBaIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBzdHJva2Utd2lkdGg9IjAiIC8+PC9zdmc+')"></div>
            <div class="spotlight"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4">
                        <div class="content justify-content-center h-100">
                            <h1>Formschönes Hilfsmittel für die Verkostung von Kaffee</h1>
                            <p class="text-right">Durch ihr patentiertes Kapseldesign ist es kinderleicht, einen guten Kaffee schnell und sauber zu produzieren</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 mr-auto">
                        <img src="images/Am-PressElement-6-8.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--accessoriesIntroSectionWrapper ended.-->
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
                        <label for="mahlgrad">Material</label>
                        <select name="" id="mahlgrad" class="form-control">
                            <option value="" disabled selected>Edelstahl</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="single_variable_wrap">
                            <div class="quantityWrapper">
                                <label for="anzahl">Anzahl:</label>
                                <input type="number" class="form-control" value="1" id="anzahl">
                            </div>
                            <div class="customPriceTag">
                                <p>5,90 €</p>
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
    <!--accessoriesFactsSection started.-->
    <div id="accessoriesFactsSection" style="background-color: rgb(166 25 46)">
        <div id="accessoriesSectionTop" class="position-relative">
            <div class="dynamicBackgroundBgOuter">
                <div class="dynamicBackgroundBgStretch" style="height:calc(100% - 45.1vw + 2px);margin-top:-1px;background-image: linear-gradient(to right,transparent 0%, transparent 1.3542%, rgba(251,248,243, 0.85) 1.3542%, rgba(251,248,243, 0.85) 90%, transparent 90%);"></div>
                <div class="dynamicBackgroundBgInner" style="height:45.1vw;background-image:url('images/American-PressElement-7-8.png');"></div>
            </div>
            <div class="dynamicBackgroundContentOuter">
                <div id="accessoriesFactsSpotlight"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 m-auto text-center">
                            <h2>Fakten</h2>
                            <p>Schnellster Kaffeezubereiter auf dem Markt</p>
                            <p>Super sauber: ausklopfen, abspülen, fertig</p>
                            <p>Unkaputtbar: perfekt für unterwegs aber auch super chic für zuhause</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 col-lg-6 m-auto">
                            <div class="row">
                                <div class="col-md-6 text-md-right text-center pt-3 pb-2 border-right">
                                    <span>Hersteller</span>
                                </div>
                                <div class="col-md-6 text-md-left text-center pt-3 pb-2 border-left">
                                    <span>It´s american press</span>
                                </div>
                                <div class="col-md-6 text-md-right text-center pt-3 pb-2 border-right">
                                    <span>Material</span>
                                </div>
                                <div class="col-md-6 text-md-left text-center pt-3 pb-2 border-left">
                                    <span>Lebensmittelechter Kunsstoff, Edelstahl, Kautschuck</span>
                                </div>
                                <div class="col-md-6 text-md-right text-center pt-3 pb-2 border-right">
                                    <span>Füllmenge</span>
                                </div>
                                <div class="col-md-6 text-md-left text-center pt-3 pb-2 border-left">
                                    <span>355 - 390 ml (2-3 Tassen)</span>
                                </div>
                                <div class="col-md-6 text-md-right text-center pt-3 pb-2 border-right">
                                    <span>Zubereitungszeit</span>
                                </div>
                                <div class="col-md-6 text-md-left text-center pt-3 pb-2 border-left">
                                    <span>max. 2 Minuten</span>
                                </div>
                                <div class="col-md-6 text-md-right text-center pt-3 pb-2 border-right">
                                    <span>Abmessungen</span>
                                </div>
                                <div class="col-md-6 text-md-left text-center pt-3 pb-2 border-left">
                                    <span>18cm x 11cm x 11cm</span>
                                </div>
                                <div class="col-md-6 text-md-right text-center pt-3 pb-2 border-right">
                                    <span>Gewicht</span>
                                </div>
                                <div class="col-md-6 text-md-left text-center pt-3 pb-2 border-left">
                                    <span>190g</span>
                                </div>
                                <div class="col-md-6 text-md-right text-center pt-3 pb-2 border-right">
                                    <span>Hersteller</span>
                                </div>
                                <div class="col-md-6 text-md-left text-center pt-3 pb-2 border-left">
                                    <span>It´s american press</span>
                                </div>
                                <div class="col-md-6 text-md-right text-center pt-3 pb-2 border-right">
                                    <span>Material</span>
                                </div>
                                <div class="col-md-6 text-md-left text-center pt-3 pb-2 border-left">
                                    <span>Lebensmittelechter Kunsstoff, Edelstahl, Kautschuck</span>
                                </div>
                                <div class="col-md-6 text-md-right text-center pt-3 pb-2 border-right">
                                    <span>Füllmenge</span>
                                </div>
                                <div class="col-md-6 text-md-left text-center pt-3 pb-2 border-left">
                                    <span>355 - 390 ml (2-3 Tassen)</span>
                                </div>
                                <div class="col-md-6 text-md-right text-center pt-3 pb-2 border-right">
                                    <span>Zubereitungszeit</span>
                                </div>
                                <div class="col-md-6 text-md-left text-center pt-3 pb-2 border-left">
                                    <span>max. 2 Minuten</span>
                                </div>
                                <div class="col-md-6 text-md-right text-center pt-3 pb-2 border-right">
                                    <span>Abmessungen</span>
                                </div>
                                <div class="col-md-6 text-md-left text-center pt-3 pb-2 border-left">
                                    <span>18cm x 11cm x 11cm</span>
                                </div>
                                <div class="col-md-6 text-md-right text-center pt-3 pb-2 border-right">
                                    <span>Gewicht</span>
                                </div>
                                <div class="col-md-6 text-md-left text-center pt-3 pb-2 border-left">
                                    <span>190g</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="accessoriesFactsSectionCustomWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"><img src="images/Am-PressElement-30-8-1.png" alt=""></div>
                    <div class="col-md-6 pt-4 d-flex justify-content-center align-items-center">
                        <p>It´s American Press ist ein junges Unternehmen, welches vor etwa drei Jahren einen überraschenden Erfolg in einer Crowdfunding Kampagne in den USA erzielen konnte. Mehr über den Gründer unter <a href="">itsamericanpress.com/pages/our-story</a></p>
                    </div>
                    <div class="col-md-3"><img src="images/Am-PressElement-29-8.png" alt=""></div>
                </div>
            </div>
            <div class="absoluteDecorationOuter">
                <div class="absoluteDecorationInner">
                    <svg width="100%" height="100%" viewBox="0 0 20 15" preserveAspectRatio="none">
                        <polygon fill="#ffffff" stroke-width="0" points="0,10 10,0 20,10 20,15 0,15"></polygon>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <!--accessoriesFactsSection ended.-->
    <!--customerReviewsSection started.-->
    <div id="customerReviewsSection">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="customerReviewsCaptions">Das sagen unsere Kunden <div class="product-rating">
                                    <div class="star-rating">
                                        <div class="stars fa">
                                        </div>
                                    </div>
                                </div>
                            </h2>
                            <div class="reviews">
                                <div class="star-line">
                                    <div class="line">
                                        <a href="" class="name">5 Sterne</a>
                                        <a href="" class="bar">
                                            <span class="filled" style="width: 95.2%"></span>
                                        </a>
                                    </div>
                                    <div class="line">
                                        <a href="" class="name">4 Sterne</a>
                                        <a href="" class="bar">
                                            <span class="filled" style="width: 0%"></span>
                                        </a>
                                    </div>
                                    <div class="line">
                                        <a href="" class="name">3 Sterne</a>
                                        <a href="" class="bar">
                                            <span class="filled" style="width: 0%"></span>
                                        </a>
                                    </div>
                                    <div class="line">
                                        <a href="" class="name">2 Sterne</a>
                                        <a href="" class="bar">
                                            <span class="filled" style="width: 0%"></span>
                                        </a>
                                    </div>
                                    <div class="line">
                                        <a href="" class="name">1 Stern</a>
                                        <a href="" class="bar">
                                            <span class="filled" style="width: 0%"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="customerReviewsCaptions text-left">Bewertungen</h2>
                            <ul class="review-list">
                                <li>
                                    <div class="comment_container">
                                        <div class="star-rating">
                                            <div class="stars fa"></div>
                                        </div>
                                        <p class="meta">
                                            <span class="author">Anonym </span><span class="Verified">(Verifizierter Besitzer)</span> - <span class="publish_date">18. Juli 2020</span>
                                        </p>
                                        <p class="ivole-verified-badge"><img src="images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="images/external-link.png" alt=""></span></p>
                                        <div class="description">
                                            <p>Mein absoluter Lieblingskaffee. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment_container">
                                        <div class="star-rating">
                                            <div class="stars fa"></div>
                                        </div>
                                        <p class="meta">
                                            <span class="author">Anonym </span><span class="Verified">(Verifizierter Besitzer)</span> - <span class="publish_date">18. Juli 2020</span>
                                        </p>
                                        <p class="ivole-verified-badge"><img src="images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="images/external-link.png" alt=""></span></p>
                                        <div class="description">
                                            <p>Mein absoluter Lieblingskaffee. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment_container">
                                        <div class="star-rating">
                                            <div class="stars fa"></div>
                                        </div>
                                        <p class="meta">
                                            <span class="author">Anonym </span><span class="Verified">(Verifizierter Besitzer)</span> - <span class="publish_date">18. Juli 2020</span>
                                        </p>
                                        <p class="ivole-verified-badge"><img src="images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="images/external-link.png" alt=""></span></p>
                                        <div class="description">
                                            <p>Mein absoluter Lieblingskaffee. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment_container">
                                        <div class="star-rating">
                                            <div class="stars fa"></div>
                                        </div>
                                        <p class="meta">
                                            <span class="author">Anonym </span><span class="Verified">(Verifizierter Besitzer)</span> - <span class="publish_date">18. Juli 2020</span>
                                        </p>
                                        <p class="ivole-verified-badge"><img src="images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="images/external-link.png" alt=""></span></p>
                                        <div class="description">
                                            <p>Mein absoluter Lieblingskaffee. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment_container">
                                        <div class="star-rating">
                                            <div class="stars fa"></div>
                                        </div>
                                        <p class="meta">
                                            <span class="author">Anonym </span><span class="Verified">(Verifizierter Besitzer)</span> - <span class="publish_date">18. Juli 2020</span>
                                        </p>
                                        <p class="ivole-verified-badge"><img src="images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="images/external-link.png" alt=""></span></p>
                                        <div class="description">
                                            <p>Mein absoluter Lieblingskaffee. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment_container">
                                        <div class="star-rating">
                                            <div class="stars fa"></div>
                                        </div>
                                        <p class="meta">
                                            <span class="author">Anonym </span><span class="Verified">(Verifizierter Besitzer)</span> - <span class="publish_date">18. Juli 2020</span>
                                        </p>
                                        <p class="ivole-verified-badge"><img src="images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="images/external-link.png" alt=""></span></p>
                                        <div class="description">
                                            <p>Mein absoluter Lieblingskaffee. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment_container">
                                        <div class="star-rating">
                                            <div class="stars fa"></div>
                                        </div>
                                        <p class="meta">
                                            <span class="author">Anonym </span><span class="Verified">(Verifizierter Besitzer)</span> - <span class="publish_date">18. Juli 2020</span>
                                        </p>
                                        <p class="ivole-verified-badge"><img src="images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="images/external-link.png" alt=""></span></p>
                                        <div class="description">
                                            <p>Mein absoluter Lieblingskaffee. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment_container">
                                        <div class="star-rating">
                                            <div class="stars fa"></div>
                                        </div>
                                        <p class="meta">
                                            <span class="author">Anonym </span><span class="Verified">(Verifizierter Besitzer)</span> - <span class="publish_date">18. Juli 2020</span>
                                        </p>
                                        <p class="ivole-verified-badge"><img src="images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="images/external-link.png" alt=""></span></p>
                                        <div class="description">
                                            <p>Mein absoluter Lieblingskaffee. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment_container">
                                        <div class="star-rating">
                                            <div class="stars fa"></div>
                                        </div>
                                        <p class="meta">
                                            <span class="author">Anonym </span><span class="Verified">(Verifizierter Besitzer)</span> - <span class="publish_date">18. Juli 2020</span>
                                        </p>
                                        <p class="ivole-verified-badge"><img src="images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="images/external-link.png" alt=""></span></p>
                                        <div class="description">
                                            <p>Mein absoluter Lieblingskaffee. </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--customerReviewsSection ended.-->
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

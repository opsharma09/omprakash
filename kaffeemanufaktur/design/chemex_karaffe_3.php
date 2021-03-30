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
                    <h2>Chemex-Karaffe für 1 bis 3 Tassen</h2>
                    <div class="productExcerpt">
                        <p>Der Kaffeezubereiter Chemex ist in jeder Hinsicht einzigartig. Ein unvergleichlich klarer Filterkaffee in herausragendem Design, preisgekrönt und dauerhaft ausgestellt im Museum of Modern Art. Eine Symbiose aus Funktionalität und Design. Die Chemex® wurde 1941 vom deutschstämmigen Chemiker Dr. Peter Schlumbohm in New York entwickelt. <br>Empfehlung: Fruchtige Kaffees wie z.B. Äthiopien Sidamo, Ruanda Inzovu. <br>Die Chemex Papierfilter sind im Vergleich zu herkömmlichen Filtern ca. 20% bis 30% schwerer/dicker und sorgen so für eine optimale Extraktionszeit.</p>
                        <h6>geeingnet für</h6>
                        <div class="image">
                            <div><img src="images/Packshots-Abstrakt-neu-Okt.-2018Ruanda-Inzovu.png" alt=""></div>
                            <div><img src="images/Packshots-Abstrakt-neu-Okt.-2018Bio-%C3%84thiopien-Sidamo.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="packshot">
                    <div class="packshotPosition position-static">
                        <img src="images/chemex-karaffe_aus_glas_mit_holzhals2.png" alt="">
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
                    <div class="col-md-5 col-lg-4 m-auto">
                        <div class="content">
                            <h1>Symbiose aus Funktionalität und Design</h1>
                            <p>Filterkaffee von unvergleichlicher Klarheit und ein herausragendes Design</p>
                        </div>
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
                    <div class="col-12 back">
                        <label for="mahlgrad">Material</label>
                        <select name="" id="mahlgrad" class="form-control">
                            <option value="" disabled selected>Glas</option>
                        </select>
                    </div>
                    <!--
                    <div class="col-12 back">
                        <label for="menge">Kapazität</label>
                        <select name="" id="menge" class="form-control">
                            <option value="" disabled selected>Wählen Sie eine Option</option>
                            <option value="">0,9 Liter</option>
                        </select>
                    </div>
-->
                    <div class="col-12">
                        <div class="single_variable_wrap">
                            <div class="quantityWrapper">
                                <label for="anzahl">Anzahl:</label>
                                <input type="number" class="form-control" value="1" id="anzahl">
                            </div>
                            <div class="customPriceTag">
                                <p>39,90 €</p>
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
                            <div class="col"><img src="images/chemex-karaffe_aus_glas_mit_holzhals2.png" alt=""></div>
                            <div class="col"><span>+</span></div>
                            <div class="col"><img src="images/Packshots-Abstrakt-neu-Okt.-2018Bio-Äthiopien-Sidamo.png" alt=""></div>
                            <div class="col"><span>+</span></div>
                            <div class="col"><img src="images/chemexfilter_klein.png" alt=""></div>
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

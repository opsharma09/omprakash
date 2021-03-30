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
                    <h2>African Cold Brew</h2>
                    <div class="productExcerpt">
                        <p>Unser African Cold Brew nimmt sie mit auf eine Reise in die Welt des kalt gebrühten Kaffees. Er besticht durch eindrucksvolles Facettenreichtum und einem seidig-weichen Mundgefühl. Ein süßlich fruchtiger Geschmack der an Trockenobst erinnert, gepaart mit Schokoladig- Rumartigen Noten machen unseren African Cold Brew zu einem unvergleichlichen Abenteuer. Haben Sie es gewusst? Cold Brew enthält bis zu 70 % weniger Säuren und Bitterstoffe!</p>
                        <h6>geeingnet für</h6>
                        <div class="image">
                            <div><img src="images/first.png" alt=""></div>
                            <div><img src="images/second.png" alt=""></div>
                            <div><img src="images/third.png" alt=""></div>
                            <div><img src="images/last.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="packshot">
                    <div class="packshotPosition">
                        <img src="images/Coldbrew-Packshot-Jul2020.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="fruitSectionWrapper" class="packshotAnimationReferenceContainer">
            <div id="fruitsSection">
                <div id="fruitsSectionBottomDecoration" class="absoluteDecorationOuter">
                    <div class="absoluteDecorationInner">
                        <svg width="100%" height="100%" viewBox="0 0 20 15" preserveAspectRatio="none">
                            <polygon fill="rgb(248,195,198)" stroke-width="0" points="0,10 10,0 20,10 20,15 0,15"></polygon>
                        </svg>
                    </div>
                    <div class="spacer"></div>
                </div>
                <div id="fruitsSectionTopDecoration" class="absoluteDecorationOuter">
                    <div class="absoluteDecorationInner">
                        <svg width="100%" height="100%" viewBox="0 0 20 10" preserveAspectRatio="none">
                            <polygon fill="white" stroke-width="0" points="0,0 20,0 10,10"></polygon>
                        </svg>
                    </div>
                </div>
                <div id="fruitsSectionSpotLight" class="spotlight">
                </div>
                <div id="fruitParkingPositionOuter">
                    <div id="fruitParkingPositionInner" style="width:calc(66% + 10px - (8%));">
                        <div class="fruitElementWrapper" style="z-index:0;"><img class="fruitElement" src="images/Ruanda_falseZeichenfl%C3%A4che-1.png" alt="fruits"></div>
                        <div class="fruitElementWrapper" style="z-index:2;"><img class="fruitElement" src="images/Ruanda_trueZeichenfl%C3%A4che-1.png" alt="fruits"></div>
                    </div>
                </div>
                <div id="fruitsTextArea">
                    <div id="fruitsBigText">
                        <h1></h1>
                    </div>
                    <div id="fruitsSmallText">
                        <p></p>
                        <p></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--singleProductCoffeeIntroSection ended.-->
    <div id="product_fixed"></div>
    <!--factsSection started.-->
    <div id="factsSection">
        <div id="factsSectionHeadline" class="singleProductSectionWrapper">
            <div id="factsSectionHeadlineLeft" class="singleProductLeftSide">
                <h2>Fakten</h2>
            </div>
            <div id="factsSectionHeadlineRight" class="singleProductRightSide">
                <h2>Überblick</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h3>Varietät</h3>
                    <p class="mb-0">Bourbon, Mibirizi</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Herkunft</h3>
                    <p class="mb-0">Ruanda Nyakabuye</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Erntemethode</h3>
                    <p class="mb-0">Hand-picking</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Aufbereitung</h3>
                    <p class="mb-0">washed</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Anbauhöhe</h3>
                    <p class="mb-0">1700-2200 m</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Erntezeit</h3>
                    <p class="mb-0">März-Juni</p>
                </div>
            </div>
        </div>
        <div class="container">
            <hr>
        </div>
    </div>
    <!--factsSection ended.-->
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
    <!--helperBox started.-->
    <div id="helperBox">
        <div class="buylabel">
            <div class="buyLabelInner">BESTELLEN</div>
        </div>
        <div class="product_selector_inner">
            <form action="">
                <div class="form-row">
                    <div class="col-12 back">
                        <label for="mahlgrad">Mahlgrad</label>
                        <select name="" id="mahlgrad" class="form-control">
                            <option value="" disabled selected>Wählen Sie eine Option</option>
                        </select>
                    </div>
                    <div class="col-12 back">
                        <label for="menge">Menge</label>
                        <select name="" id="menge" class="form-control">
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
                                <p>8,90 €</p>
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
<!--container started.-->
<section class="my-5 content">
    <div class="container">
        <strong>African Cold Brew in der French Press</strong>
        <p>– 800ml kaltes Wasser</p>
        <p>– 160g African Cold Brew grob (French Press) gemahlen Zubereitung:</p>
        <p>– Zutaten einfüllen und kurz umrühren</p>
        <p>– Nach 8 -12 Std. Ziehzeit den Stempel herunterdrücken (optimaler Weise über einen Papierfilter abseihen damit der Cold Brew nicht weiter extrahiert)</p>
        <p>– Das Konzentrat mit dem African Cold Brew je nach Gusto mit kaltem Wasser wieder auf 800ml auffüllen oder auf Eiswürfel servieren.</p>
        <div class="row">
            <div class="col-md-10 m-auto">
                <strong>African Cold Brew im Dripster</strong>
                <p>Zutaten:</p>
                <p>– 300ml kaltes Wasser</p>
                <p>– 40g African Cold Brew grob (French Press) gemahlen</p>
                <p>Zubereitung:</p>
                <p>– Kaffeemehl leicht anfeuchten und das Ventil auf einen Tropfen pro Sekunde einstellen</p>
                <p>– Dauer ca. 2-3 Std.</p>
                <p>– Das Konzentrat mit dem African Cold Brew je nach Gusto mit kaltem Wasser wieder auf 300ml auffüllen oder auf Eiswürfel servieren.</p>
            </div>
        </div>
    </div>
</section>
<!--container ended.-->
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

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
                    <h2>Bio Arabica (entkoffeiniert)</h2>
                    <div class="productExcerpt">
                        <p>Unser Bio Arabica entkoffeiniert ist ein wunderbar, würzig-aromatischer Arabica mit mittelvollem Körper und samtigem Abgang. Mit Hilfe eines sehr aufwendigen Verfahrens wird dieser Kaffee von seinem Koffein gelöst.</p>
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
                        <img src="images/Packshots-Abstrakt-neu-Okt.-2018Bio-Arabica-Entkoffeiniert.png" alt="">
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
                        <div class="fruitElementWrapper" style="z-index:0;"><img class="fruitElement" src="images/Entkoff_falseZeichenfl%C3%A4che-1.png" alt="fruits"></div>
                        <div class="fruitElementWrapper" style="z-index:2;"><img class="fruitElement" src="images/Entkoff_true.png" alt="fruits"></div>
                    </div>
                </div>
                <div id="fruitsTextArea">
                    <div id="fruitsBigText">
                        <h1>Co2 Methode | Kulinarischer Botschafter NDS 2016</h1>
                    </div>
                    <div id="fruitsSmallText">
                        <p>Der Kaffee wird mit dem aufwändigen Co2 Verfahren entkoffeiniert.</p>
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
                    <p class="mb-0">Caturra, Typica</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Herkunft</h3>
                    <p class="mb-0">Peru, Chanchamayo</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Erntemethode</h3>
                    <p class="mb-0">hand-picking</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Aufbereitung</h3>
                    <p class="mb-0">washed, Co2-Prozesa</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Anbauhöhe</h3>
                    <p class="mb-0">1500 m</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Erntezeit</h3>
                    <p class="mb-0">März-September</p>
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
                                        </a></div>
                                    <div class="line">
                                        <a href="" class="name">4 Sterne</a>
                                        <a href="" class="bar">
                                            <span class="filled" style="width: 0%"></span>
                                        </a></div>
                                    <div class="line">
                                        <a href="" class="name">3 Sterne</a>
                                        <a href="" class="bar">
                                            <span class="filled" style="width: 0%"></span>
                                        </a></div>
                                    <div class="line">
                                        <a href="" class="name">2 Sterne</a>
                                        <a href="" class="bar">
                                            <span class="filled" style="width: 0%"></span>
                                        </a></div>
                                    <div class="line">
                                        <a href="" class="name">1 Stern</a>
                                        <a href="" class="bar">
                                            <span class="filled" style="width: 0%"></span>
                                        </a></div>
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
                                <p>7,40 € – 27,30 €</p>
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
    <!--flavorSection started.-->
    <div id="flavorSection">
        <div id="flavorBanner" style="background-image:url(images/KaffeeProduktElement-11@2x-8.png);height:33.7493vw;;"></div>
        <div id="flavorTopContainer">
            <div id="flavorTopTextColumn">
                <h2>Aroma &amp; Geschmack</h2>
                <p>Würzig-aromatischer Kaffee mit mittelvollem Körper mit samtigem Abgang.</p>
            </div>
            <div id="flavorTopImageColumn">
                <img src="images/cup-2.png" alt="Kaffee Tasse">
            </div>
        </div>
        <div id="flavorWheelBaseContainer" class="dynamicBackgroundContainer" style="min-height:15.52vw;">
            <div class="dynamicBackgroundBgOuter">
                <div class="dynamicBackgroundBgStretch" style="height:calc(100% - 15.52vw + 2px);margin-top:-1px;background-color:#ebdabf"></div>
                <div class="dynamicBackgroundBgInner" style="height:15.52vw;background-image:url('images/PangKhon-NEUElement-53.png');"> </div>
            </div>
            <div class="dynamicBackgroundContentOuter">
                <div class="dynamicBackgroundContentInner">
                    <h2>Aromaprofil</h2>
                    <p>Eine Auswahl von drei besonders prägnanten Aromen, welche den Charakter dieses Kaffees definieren.</p>
                </div>
            </div>
        </div>
        <div id="millionFlavorsContainerOuter">
            <div id="millionFlavorsContainerInner">
                <div id="millionFlavorsOuter">
                    <div id="millionFlavorsInner" style="transition: transform 72s linear 0s; transform: rotate(28954deg);">
                        <img id="millionFlavors" src="images/wheel.png">
                        <div class="flavorMarkerOuter">
                            <div class="flavorMarkerInner" style="width:96.25%;transform:rotate(11deg);"><img src="images/PangKhonElement-65.png"></div>
                        </div>
                        <div class="flavorMarkerOuter">
                            <div class="flavorMarkerInner" style="width:96.25%;transform:rotate(93.75deg);"><img src="images/PangKhonElement-65.png"></div>
                        </div>
                        <div class="flavorMarkerOuter">
                            <div class="flavorMarkerInner" style="width:92.25%;transform:rotate(151.5deg);"><img src="images/PangKhonElement-65.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="flavorProfileContainer">
            <div class="singleFlavorPictureWrapper">
                <div class="singleFlavorPictureWrapperInner"><img src="images/Muskat.png" alt="Beerig"></div><span>Würzig</span>
            </div>
            <div class="singleFlavorPictureWrapper">
                <div class="singleFlavorPictureWrapperInner"><img src="images/Wallnuss.png" alt="Nussig"></div><span>Nusig</span>
            </div>
            <div class="singleFlavorPictureWrapper">
                <div class="singleFlavorPictureWrapperInner"><img src="images/Rosmarin.png" alt="Würzig"></div><span>Kräuterartig</span>
            </div>
        </div>
        <div id="flavorScoreHeaderContainer" class="dynamicBackgroundContainer" style="min-height:7.71vw;">
            <div class="dynamicBackgroundBgOuter">
                <div class="dynamicBackgroundBgInner" style="height:7.71vw;background-image:url('images/PangKhon-NEUElement-61.png');"> </div>
                <div class="dynamicBackgroundBgStretch" style="height:calc(100% - 7.71vw + 2px);margin-top:-1px;background-color:#e6e6e6"></div>
            </div>
            <div class="dynamicBackgroundContentOuter">
                <div class="dynamicBackgroundContentInner">
                    <h2>Geschmack</h2>
                    <p>Bei der Beurteilung des Geschmacks orientieren wir uns an den Kriterien der SCA.</p>
                </div>
            </div>
        </div>
        <div id="flavorScoreMainContainer">
            <div id="flavorScoreMainLeftContainerOuter">
                <div id="flavorScoreMainLeftContainerInner">
                    <div class="bubbleScoreWrapper">
                        <span>Körper: geschmeidig</span>
                        <div class="bubbleScoreContainer">
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble hasContent">
                                <div>4</div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class="bubbleScoreWrapper">
                        <span>Säure: schwach</span>
                        <div class="bubbleScoreContainer">
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble hasContent">
                                <div>2</div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class="bubbleScoreWrapper">
                        <span>Nachklang: leicht</span>
                        <div class="bubbleScoreContainer">
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble hasContent">
                                <div>4</div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="flavorScoreMainRightContainer">
                <div id="radarChartWrapper" class="radarChart" centerx="50" centery="52" totalradius="43" maxscore="10" scores="{'Aroma / Duft':3,'Körper':4,'Säure':2,'Geschmack':4,'Nachklang':4,'Balance':5,'Gesamt':3.6}" bgsrc="/wp-content/uploads/2019/04/radar.png">
                    <style>
                        .radarChartInner {
                            font-size: 30px !important;
                        }

                        @media (max-width: 1280px) {
                            .radarChartInner {
                                font-size: 24px !important;
                            }
                        }

                        @media (max-width: 1080px) {
                            .radarChartInner {
                                font-size: 20px !important;
                            }
                        }

                        @media (max-width: 900px) {
                            .radarChartInner {
                                font-size: 16px !important;
                            }
                        }

                        @media (max-width: 767px) {
                            .radarChartInner {
                                font-size: 32px !important;
                            }
                        }

                        @media (max-width: 500px) {
                            .radarChartInner {
                                font-size: 28px !important;
                            }
                        }

                        @media (max-width: 450px) {
                            .radarChartInner {
                                font-size: 24px !important;
                            }
                        }

                    </style>
                    <div class="radarChartInner" style="position:relative;"><img src="images/radar.png" style="position:static;width:100%;height:auto;">
                        <div style="width:100%;height:15px;position:absolute;top:calc(52% - 7.5px);left:0px;transform: rotate(-64.28571428571428deg);background-color:none;">
                            <div style="position:relative;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;">
                                <div class="scoreCaptionWrapper" style="	position:absolute;	right:0px;	top:0px;width:15px;	height:15px;	transform:rotate(64.28571428571428deg);">
                                    <div class="scoreCaption" style="	display:flex;	flex-direction:row;	align-items:center;	justify-content:flex-start;	white-space:nowrap;	font-size:0.8em;	">Aroma / Duft</div>
                                </div>
                                <div style="position:relative;width:calc(25.8% + 15px);height:100%">
                                    <div style="position:absolute;right:0px;top:0px;width:15px;height:15px;border-radius:15px;background-color:rgb(228,208,170);"></div>
                                    <div style="	position:absolute;	right:-30px;	top:0px;	width:15px;	height:15px;	transform:rotate(64.28571428571428deg);	display: flex;	flex-direction: row;	align-items: center;	justify-content: center;	font-size:1em;" class="scoreValue">3</div>
                                    <div style="	width:105.6001091928644%;	height:5px;	position:absolute;	top:5px;	right:calc(-52.8000545964322% + 7.5px);	transform: rotate(-80.80848884605224deg);	background-color:none;">
                                        <div style="position:relative;width:100%;height:100%;">
                                            <div style="position:absolute;width:50%;height:100%;top:0px;left:0px;background-color:rgb(228,208,170);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="width:100%;height:15px;position:absolute;top:calc(52% - 7.5px);left:0px;transform: rotate(-12.857142857142861deg);background-color:none;">
                            <div style="position:relative;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;">
                                <div class="scoreCaptionWrapper" style="	position:absolute;	right:0px;	top:0px;width:15px;	height:15px;	transform:rotate(12.857142857142861deg);">
                                    <div class="scoreCaption" style="	display:flex;	flex-direction:row;	align-items:center;	justify-content:flex-start;	white-space:nowrap;	font-size:0.8em;	">Körper</div>
                                </div>
                                <div style="position:relative;width:calc(34.4% + 15px);height:100%">
                                    <div style="position:absolute;right:0px;top:0px;width:15px;height:15px;border-radius:15px;background-color:rgb(228,208,170);"></div>
                                    <div style="	position:absolute;	right:-30px;	top:0px;	width:15px;	height:15px;	transform:rotate(12.857142857142861deg);	display: flex;	flex-direction: row;	align-items: center;	justify-content: center;	font-size:1em;" class="scoreValue">4</div>
                                    <div style="	width:79.15239719308988%;	height:5px;	position:absolute;	top:5px;	right:calc(-39.57619859654494% + 7.5px);	transform: rotate(-29.595747033461503deg);	background-color:none;">
                                        <div style="position:relative;width:100%;height:100%;">
                                            <div style="position:absolute;width:50%;height:100%;top:0px;left:0px;background-color:rgb(228,208,170);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="width:100%;height:15px;position:absolute;top:calc(52% - 7.5px);left:0px;transform: rotate(38.57142857142856deg);background-color:none;">
                            <div style="position:relative;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;">
                                <div class="scoreCaptionWrapper" style="	position:absolute;	right:0px;	top:0px;width:15px;	height:15px;	transform:rotate(-38.57142857142856deg);">
                                    <div class="scoreCaption" style="	display:flex;	flex-direction:row;	align-items:center;	justify-content:flex-start;	white-space:nowrap;	font-size:0.8em;	">Säure</div>
                                </div>
                                <div style="position:relative;width:calc(17.2% + 15px);height:100%">
                                    <div style="position:absolute;right:0px;top:0px;width:15px;height:15px;border-radius:15px;background-color:rgb(228,208,170);"></div>
                                    <div style="	position:absolute;	right:-30px;	top:0px;	width:15px;	height:15px;	transform:rotate(-38.57142857142856deg);	display: flex;	flex-direction: row;	align-items: center;	justify-content: center;	font-size:1em;" class="scoreValue">2</div>
                                    <div style="	width:158.30479438617976%;	height:5px;	position:absolute;	top:5px;	right:calc(-79.15239719308988% + 7.5px);	transform: rotate(-98.97568153796709deg);	background-color:none;">
                                        <div style="position:relative;width:100%;height:100%;">
                                            <div style="position:absolute;width:50%;height:100%;top:0px;left:0px;background-color:rgb(228,208,170);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="width:100%;height:15px;position:absolute;top:calc(52% - 7.5px);left:0px;transform: rotate(90deg);background-color:none;">
                            <div style="position:relative;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;">
                                <div class="scoreCaptionWrapper" style="	position:absolute;	right:0px;	top:0px;width:15px;	height:15px;	transform:rotate(-90deg);">
                                    <div class="scoreCaption" style="	display:flex;	flex-direction:row;	align-items:center;	justify-content:center;	white-space:nowrap;	font-size:0.8em;	">Geschmack</div>
                                </div>
                                <div style="position:relative;width:calc(34.4% + 15px);height:100%">
                                    <div style="position:absolute;right:0px;top:0px;width:15px;height:15px;border-radius:15px;background-color:rgb(228,208,170);"></div>
                                    <div style="	position:absolute;	right:-30px;	top:0px;	width:15px;	height:15px;	transform:rotate(-90deg);	display: flex;	flex-direction: row;	align-items: center;	justify-content: center;	font-size:1em;" class="scoreValue">4</div>
                                    <div style="	width:86.77674782351161%;	height:5px;	position:absolute;	top:5px;	right:calc(-43.38837391175581% + 7.5px);	transform: rotate(-64.28571428571429deg);	background-color:none;">
                                        <div style="position:relative;width:100%;height:100%;">
                                            <div style="position:absolute;width:50%;height:100%;top:0px;left:0px;background-color:rgb(228,208,170);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="width:100%;height:15px;position:absolute;top:calc(52% - 7.5px);left:0px;transform: rotate(141.42857142857142deg);background-color:none;">
                            <div style="position:relative;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;">
                                <div class="scoreCaptionWrapper" style="	position:absolute;	right:0px;	top:0px;width:15px;	height:15px;	transform:rotate(-141.42857142857142deg);">
                                    <div class="scoreCaption" style="	display:flex;	flex-direction:row;	align-items:center;	justify-content:flex-end;	white-space:nowrap;	font-size:0.8em;	">Nachklang</div>
                                </div>
                                <div style="position:relative;width:calc(34.4% + 15px);height:100%">
                                    <div style="position:absolute;right:0px;top:0px;width:15px;height:15px;border-radius:15px;background-color:rgb(228,208,170);"></div>
                                    <div style="	position:absolute;	right:-30px;	top:0px;	width:15px;	height:15px;	transform:rotate(-141.42857142857142deg);	display: flex;	flex-direction: row;	align-items: center;	justify-content: center;	font-size:1em;" class="scoreValue">4</div>
                                    <div style="	width:100.18859692366021%;	height:5px;	position:absolute;	top:5px;	right:calc(-50.09429846183011% + 7.5px);	transform: rotate(-77.27790317279864deg);	background-color:none;">
                                        <div style="position:relative;width:100%;height:100%;">
                                            <div style="position:absolute;width:50%;height:100%;top:0px;left:0px;background-color:rgb(228,208,170);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="width:100%;height:15px;position:absolute;top:calc(52% - 7.5px);left:0px;transform: rotate(192.8571428571429deg);background-color:none;">
                            <div style="position:relative;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;">
                                <div class="scoreCaptionWrapper" style="	position:absolute;	right:0px;	top:0px;width:15px;	height:15px;	transform:rotate(-192.8571428571429deg);">
                                    <div class="scoreCaption" style="	display:flex;	flex-direction:row;	align-items:center;	justify-content:flex-end;	white-space:nowrap;	font-size:0.8em;	">Balance</div>
                                </div>
                                <div style="position:relative;width:calc(43% + 15px);height:100%">
                                    <div style="position:absolute;right:0px;top:0px;width:15px;height:15px;border-radius:15px;background-color:rgb(228,208,170);"></div>
                                    <div style="	position:absolute;	right:-30px;	top:0px;	width:15px;	height:15px;	transform:rotate(-192.8571428571429deg);	display: flex;	flex-direction: row;	align-items: center;	justify-content: center;	font-size:1em;" class="scoreValue">5</div>
                                    <div style="	width:78.77656284222%;	height:5px;	position:absolute;	top:5px;	right:calc(-39.38828142111% + 7.5px);	transform: rotate(-45.6084881772607deg);	background-color:none;">
                                        <div style="position:relative;width:100%;height:100%;">
                                            <div style="position:absolute;width:50%;height:100%;top:0px;left:0px;background-color:rgb(228,208,170);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="width:100%;height:15px;position:absolute;top:calc(52% - 7.5px);left:0px;transform: rotate(244.28571428571428deg);background-color:none;">
                            <div style="position:relative;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;">
                                <div class="scoreCaptionWrapper" style="	position:absolute;	right:0px;	top:0px;width:15px;	height:15px;	transform:rotate(-244.28571428571428deg);">
                                    <div class="scoreCaption" style="	display:flex;	flex-direction:row;	align-items:center;	justify-content:flex-end;	white-space:nowrap;	font-size:0.8em;	">Gesamt</div>
                                </div>
                                <div style="position:relative;width:calc(30.959999999999997% + 15px);height:100%">
                                    <div style="position:absolute;right:0px;top:0px;width:15px;height:15px;border-radius:15px;background-color:rgb(228,208,170);"></div>
                                    <div style="	position:absolute;	right:-30px;	top:0px;	width:15px;	height:15px;	transform:rotate(-244.28571428571428deg);	display: flex;	flex-direction: row;	align-items: center;	justify-content: center;	font-size:1em;" class="scoreValue">3.6</div>
                                    <div style="	width:80.95027947325991%;	height:5px;	position:absolute;	top:5px;	right:calc(-40.475139736629956% + 7.5px);	transform: rotate(-53.59552235922491deg);	background-color:none;">
                                        <div style="position:relative;width:100%;height:100%;">
                                            <div style="position:absolute;width:50%;height:100%;top:0px;left:0px;background-color:rgb(228,208,170);"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="flavorScoreDisclaimer">
            <p>Die Bewertung unterliegt dem subjektiven Empfinden des testenden Röstmeister/Barista oder QS-Mitarbeiters.</p>
        </div>
    </div>
    <!--flavorSection ended.-->
    <!--upsellSection started.-->
    <div id="upsellSection" class="product_wrapper text-center">
        <h4>Passende Produkte</h4>
        <div class="products">
            <div class="conatainer">
                <div class="row">
                    <div class="col-lg-9 m-auto">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="product">
                                    <a href="" class="d-block">
                                        <div class="image_frame">
                                            <div class="image_wrapper">
                                                <div class="mask"></div>
                                                <img src="images/Packshots-Abstrakt-neu-Okt.-2018Espresso-Furioso-500x777.png" alt="">
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                            <h4 class="product_title">Espresso Furioso</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product">
                                    <a href="" class="d-block">
                                        <div class="image_frame">
                                            <div class="image_wrapper">
                                                <div class="mask"></div>
                                                <img src="images/packshots-Abstrakt-neu-Okt.-2018Bio-Brasil-500x777.png" alt="">
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                            <h4 class="product_title">Bio Brasil</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="product">
                                    <a href="" class="d-block">
                                        <div class="image_frame">
                                            <div class="image_wrapper">
                                                <div class="mask"></div>
                                                <img src="images/product.png" alt="">
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                            <h4 class="product_title">Melange Hanovera</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--upsellSection ended.-->
    <!-- originSection started.-->
    <div id="originSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-items-end justify-content-center">
                    <img src="images/20190625091718.jpg" alt="">
                </div>
                <div class="col-lg-6 justify-content-center">
                    <div class="singleProductRightSide">
                        <h3>Über den Bauern</h3>
                        <p>Peru liegt im Westen Südamerikas und grenzt im Osten an Brasilien. In Peru ist die Besonderheit, dass es drei verschiedene Landschafts- und Klimazonen gibt: Die der Küste, dem Hochland und dem Regenwald. Das Chanchamayo-Tal und mit ihm seine Kaffeeanbaugebiete Junin, wo unser Kaffee wächst, und Pasco charakterisieren sich durch Hochland als auch durch weite Flächen Dschungel. Heute zählen Kaffees aus dem Chanchamayo-Tal hinsichtlich der Qualität der Kaffeebohnen zur Spitzenklasse.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="originBanner">
        <img src="images/PangKhon-NEUElement-60@2x-8b.png" alt="">
    </div>
    <!-- originSection ended.-->
    <!--roastingSection started.-->
    <div id="roastingSection" class="px-3">
        <div id="roastingTitleWrapper" class="row singleProductSectionWrapper">
            <div class="singleProductLeftSide col-md-6"></div>
            <div class="singleProductRightSide col-md-6">
                <h2>Röstung</h2>
            </div>
        </div>
        <div id="blondeToDarkRoast">
            <div>
                <img src="images/KaffeeProduktHintergrund@2x-8.png" alt="Helle Röstung">
                <div>Hell</div>
            </div>
            <div>
                <img src="images/KaffeeProduktCoffee-bean@2x-8.png" alt="Mittlere Röstung">
                <div>Mittel</div>
            </div>
            <div>
                <img src="images/KaffeeProdukt68289d90-9807-4001-99c4-3e52225e23b3@2x-8.png" alt="Dunkle Röstung">
                <div>Dunkel</div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 m-auto">
                    <img src="images/KaffeeProduktElement-42@2x-8.png" class="mt-5" alt="">
                </div>
            </div>
        </div>
        <div id="roastingDescriptionContainer" class="row singleProductSectionWrapper">
            <div class="col-md-6 singleProductLeftSide">
                <h4>Schonende Langzeit-Trommelröstung</h4>
                <p>Erst die handwerkliche Röstkunst macht einen guten Rohkaffee zu einem außergewöhnlichen Getränk. Feine Sensorik und langjährige Erfahrung werden benötigt um einen Kaffee perfekt zu rösten.<br>Unsere Röstmeister arbeiten auf einem modernisierten Trommelröster der Marke Probat aus dem Jahr 1963. Bei schonenden Temperaturen entsteht über eine Röstdauer von bis zu 20 Minuten ein absoluter Hochgenuss. Dabei stimmen unsere Röstexperten die Röstprofile fein ab und erreichen so, dass alle Schadstoffe langsam abgebaut werden und dass kein Acrylamid entsteht.</p>
                <p>Im Gegensatz zur industriellen Produktion werden bei uns alle Röstungen ausnahmslos von Hand durchgeführt. Ein Naturprodukt wie Kaffee ist viel zu individuell, als dass eine festgelegte Temperaturkurve immer zu idealen Ergebnissen führen könnte. Daher entscheidet der Röstmeister mit seinen geschulten Sinnen bei jeder Röstung aufs Neue, welche Temperaturkurve und welche Röstdauer zu einem perfekten Kaffee führen.</p>
                <a class="btn-white" href="/roestung">Unsere Röstpilosophie</a>
            </div>
            <div class="col-md-6 singleProductRightSide">
                <img src="images/coffee-mele.png" alt="">
            </div>
        </div>
        <div id="roastingBottomElement"></div>
    </div>
    <!--roastingSection ended.-->
    <!--philosophySection started.-->
    <div id="philosophySection">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto">
                    <div class="philosophyContentBox">
                        <img src="images/korrigiert.png" alt="">
                        <div class="philosophyContent">
                            <h3>#hannoverkaffee</h3>
                            <p>Die <span itemprop="brand">Hannoversche Kaffeemanufaktur</span> steht für traditionelle, handwerkliche Röstkunst, Leidenschaft und Liebe zum Kaffee.</p>
                            <p>Unsere hochwertigen Rohkaffees werden sorgsam auf ihren Höhepunkt geröstet, sodass ein unvergleichliches Kaffeeerlebnis entsteht.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--philosophySection ended.-->
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

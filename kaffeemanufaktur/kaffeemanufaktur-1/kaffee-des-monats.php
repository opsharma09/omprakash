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
                    <h2>Brazil Fazenda Gabriela</h2>
                    <div class="productExcerpt">
                        <p>Auf 1200 Metern, in liebevoller Handarbeit und nach höchsten Standards angebaut, produzieren unsere Freunde und Partner der Familie de Oliviera den hocharomatischen Spitzenkaffee. Vollmundige Schokolade, frische Orange und Zimt machen diesen Premiumkaffee zu einem unvergesslichen Geschmackserlebnis.</p>
                        <h6>geeingnet für</h6>
                        <div class="image">
                            <div><img src="http://codesk.work/design/kaffeemanufaktur/images/second.png" alt=""></div>
                            <div><img src="http://codesk.work/design/kaffeemanufaktur/images/third.png" alt=""></div>
                            <div><img src="http://codesk.work/design/kaffeemanufaktur/images/last.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="packshot">
                    <div class="packshotPosition">
                        <img src="http://codesk.work/design/kaffeemanufaktur/images/Pakshot-El-Salvador-2020-NEU-Oktober.png" alt="">
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
                        <!--                        <div class="fruitElementWrapper" style="z-index:0;"><img class="fruitElement" src="http://codesk.work/design/kaffeemanufaktur/images/BioBrasil_falseZeichenfläche-1.png" alt="fruits"></div>-->
                        <div class="fruitElementWrapper" style="z-index:2;"><img class="fruitElement" src="http://codesk.work/design/kaffeemanufaktur/images/bio-brasil_vordergrund1.png" alt="fruits"></div>
                    </div>
                </div>
                <div id="fruitsTextArea">
                    <div id="fruitsBigText">
                        <h1>Unser Weihnachtskaffee mit dem besonderen Geschmackgenuss</h1>
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
                    <p class="mb-0">RED &amp; YELLOW BOURBON, RED CATUAÍ</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Herkunft</h3>
                    <p class="mb-0">Brasilien, Campos Altos, Minas Gerais CERRADO MINEIRO</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Erntemethode</h3>
                    <p class="mb-0">Hand-picking</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Aufbereitung</h3>
                    <p class="mb-0">Natural Honey</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Anbauhöhe</h3>
                    <p class="mb-0">1200 m</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3>Erntezeit</h3>
                    <p class="mb-0">Mai-September</p>
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
                                        <p class="ivole-verified-badge"><img src="http://codesk.work/design/kaffeemanufaktur/images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="http://codesk.work/design/kaffeemanufaktur/images/external-link.png" alt=""></span></p>
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
                                        <p class="ivole-verified-badge"><img src="http://codesk.work/design/kaffeemanufaktur/images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="http://codesk.work/design/kaffeemanufaktur/images/external-link.png" alt=""></span></p>
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
                                        <p class="ivole-verified-badge"><img src="http://codesk.work/design/kaffeemanufaktur/images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="http://codesk.work/design/kaffeemanufaktur/images/external-link.png" alt=""></span></p>
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
                                        <p class="ivole-verified-badge"><img src="http://codesk.work/design/kaffeemanufaktur/images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="http://codesk.work/design/kaffeemanufaktur/images/external-link.png" alt=""></span></p>
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
                                        <p class="ivole-verified-badge"><img src="http://codesk.work/design/kaffeemanufaktur/images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="http://codesk.work/design/kaffeemanufaktur/images/external-link.png" alt=""></span></p>
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
                                        <p class="ivole-verified-badge"><img src="http://codesk.work/design/kaffeemanufaktur/images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="http://codesk.work/design/kaffeemanufaktur/images/external-link.png" alt=""></span></p>
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
                                        <p class="ivole-verified-badge"><img src="http://codesk.work/design/kaffeemanufaktur/images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="http://codesk.work/design/kaffeemanufaktur/images/external-link.png" alt=""></span></p>
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
                                        <p class="ivole-verified-badge"><img src="http://codesk.work/design/kaffeemanufaktur/images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="http://codesk.work/design/kaffeemanufaktur/images/external-link.png" alt=""></span></p>
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
                                        <p class="ivole-verified-badge"><img src="http://codesk.work/design/kaffeemanufaktur/images/shield-20.png" alt=""> <span class="ivole-verified-badge-text">Verifizierte Rezension - <a href="" target="_blank">Original ansehen</a> <img src="http://codesk.work/design/kaffeemanufaktur/images/external-link.png" alt=""></span></p>
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
    <!--flavorSection started.-->
    <div id="flavorSection">
        <div id="flavorBanner" style="background-image:url(http://codesk.work/design/kaffeemanufaktur/images/KaffeeProduktElement-11@2x-8.png);height:33.7493vw;;"></div>
        <div id="flavorTopContainer">
            <div id="flavorTopTextColumn">
                <h2>Aroma &amp; Geschmack</h2>
                <p>Beeindruckende Süße, leichtes Karamellaroma. Im Abgang bleiben schöne schokoladige Nuancen am Gaumen.</p>
            </div>
            <div id="flavorTopImageColumn">
                <img src="http://codesk.work/design/kaffeemanufaktur/images/cup-2.png" alt="Kaffee Tasse">
            </div>
        </div>
        <div id="flavorWheelBaseContainer" class="dynamicBackgroundContainer" style="min-height:15.52vw;">
            <div class="dynamicBackgroundBgOuter">
                <div class="dynamicBackgroundBgStretch" style="height:calc(100% - 15.52vw + 2px);margin-top:-1px;background-color:#ebdabf"></div>
                <div class="dynamicBackgroundBgInner" style="height:15.52vw;background-image:url('http://codesk.work/design/kaffeemanufaktur/images/PangKhon-NEUElement-53.png');"> </div>
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
                        <img id="millionFlavors" src="http://codesk.work/design/kaffeemanufaktur/images/wheel.png">
                        <div class="flavorMarkerOuter">
                            <div class="flavorMarkerInner" style="width:96.25%;transform:rotate(11deg);"><img src="http://codesk.work/design/kaffeemanufaktur/images/PangKhonElement-65.png"></div>
                        </div>
                        <div class="flavorMarkerOuter">
                            <div class="flavorMarkerInner" style="width:96.25%;transform:rotate(93.75deg);"><img src="http://codesk.work/design/kaffeemanufaktur/images/PangKhonElement-65.png"></div>
                        </div>
                        <div class="flavorMarkerOuter">
                            <div class="flavorMarkerInner" style="width:92.25%;transform:rotate(151.5deg);"><img src="http://codesk.work/design/kaffeemanufaktur/images/PangKhonElement-65.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="flavorProfileContainer">
            <div class="singleFlavorPictureWrapper">
                <div class="singleFlavorPictureWrapperInner"><img src="http://codesk.work/design/kaffeemanufaktur/images/Orange.png" alt="Nussig"></div><span>Orange</span>
            </div>
            <div class="singleFlavorPictureWrapper">
                <div class="singleFlavorPictureWrapperInner"><img src="http://codesk.work/design/kaffeemanufaktur/images/Zimt.png" alt="Würzig"></div><span>Zimt</span>
            </div>
            <div class="singleFlavorPictureWrapper">
                <div class="singleFlavorPictureWrapperInner"><img src="http://codesk.work/design/kaffeemanufaktur/images/Aromen-75.png" alt="Würzig"></div><span>Schokolade</span>
            </div>
        </div>
        <div id="flavorScoreHeaderContainer" class="dynamicBackgroundContainer" style="min-height:7.71vw;">
            <div class="dynamicBackgroundBgOuter">
                <div class="dynamicBackgroundBgInner" style="height:7.71vw;background-image:url('http://codesk.work/design/kaffeemanufaktur/images/PangKhon-NEUElement-61.png');"> </div>
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
                        <span>Körper: geschmeidig, voll</span>
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
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble hasContent">
                                <div>5</div>
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
                        <span>Säure: ausgewogen</span>
                        <div class="bubbleScoreContainer">
                            <div class="bubbleScoreBubble ">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble ">
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
                            <div class="bubbleScoreBubble hasContent">
                                <div>6</div>
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
                        <span>Nachklang: komplex, satt</span>
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
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble ">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble ">
                                <div></div>
                            </div>
                            <div class="bubbleScoreBubble hasContent">
                                <div>9</div>
                            </div>
                            <div class="bubbleScoreBubble">
                                <div></div>
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
    <!-- originSection started.-->
    <div id="originBanner">
        <img src="http://codesk.work/design/kaffeemanufaktur/images/PangKhon-NEUElement-60@2x-8b.png" alt="">
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
                <img src="http://codesk.work/design/kaffeemanufaktur/images/KaffeeProduktHintergrund@2x-8.png" alt="Helle Röstung">
                <div>Hell</div>
            </div>
            <div>
                <img src="http://codesk.work/design/kaffeemanufaktur/images/KaffeeProduktCoffee-bean@2x-8.png" alt="Mittlere Röstung">
                <div>Mittel</div>
            </div>
            <div>
                <img src="http://codesk.work/design/kaffeemanufaktur/images/KaffeeProdukt68289d90-9807-4001-99c4-3e52225e23b3@2x-8.png" alt="Dunkle Röstung">
                <div>Dunkel</div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 m-auto">
                    <img src="http://codesk.work/design/kaffeemanufaktur/images/KaffeeProduktElement-42@2x-8.png" class="mt-5" alt="">
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
                <img src="http://codesk.work/design/kaffeemanufaktur/images/coffee-mele.png" alt="">
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
                        <img src="http://codesk.work/design/kaffeemanufaktur/images/korrigiert.png" alt="">
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

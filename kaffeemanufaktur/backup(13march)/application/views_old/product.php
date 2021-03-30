<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "product";
    require_once("public/include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--singleProductCoffeeIntroSection started.-->
    <div id="singleProductCoffeeIntroSection" class="singleProductIntroSection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 text-center order-md-last order-lg-first">
                    <h2><?=$product[0]['name']?></h2>
                    <div class="productExcerpt">
                        <p><?=$product[0]['description']?></p>
                        <h6>geeingnet für</h6>
                        <div class="image">
                            <div><img src="images/first.png" alt=""></div>
                            <div><img src="images/second.png" alt=""></div>
                            <div><img src="images/third.png" alt=""></div>
                            <div><img src="images/last.png" alt=""></div>
                        </div>
                        <h5>Kundenbewertung:</h5>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="far fa-star"></span> 43
                        </div>
                    </div>
                </div>
                <div class="packshot">
                    <div class="packshotPosition">
                        <img src="<?= base_url()?><?=$product[0]['image1']?>" alt="">
                    </div>
                </div>
            </div>
            <div class="fruitSectionWrapper">
                <div class="fruitElementWrapper">
                    <img src="<?= base_url()?><?=$product[0]['image']?>" alt="">
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
            <form action="#">
                <div class="form-row">
                    <div class="col-12 back">
                        <label for="mahlgrad">Mahlgrad</label>
                        <select name="" id="mahlgrad" class="form-control" onchange="myFunction()">
                            <option value="" disabled selected>Wählen Sie eine Option</option>
                            <?php 
                            foreach($product_details as $cat)
                            {
                              ?><option value="<?= $cat['id']; ?>"><?= $cat['type']; ?></option><?php 
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-12 back">
                        <label for="menge">Menge</label>
                        <select name="" id="menge" class="form-control" onchange="resetme();check_quantity()">
                            <option value="" disabled selected>Wählen Sie eine Option</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="single_variable_wrap">
                            <div class="quantityWrapper">
                                <label for="anzahl">Anzahl:</label>
                                <input type="number" class="form-control" value="1" id="anzahl" onchange="check_quantity()">
                            </div>
                            <div class="customPriceTag">
                                <p id="product_price"><?=$product[0]['Price']?></p>
                                <input type="hidden" id="price" name="price" value="0">
                            </div>
                            <div class="customAddToCartButtonWrapper">
                                <button class="btn" type="button" onclick="add_to_cart()"><span class="fa fa-shopping-cart"></span> In den Warenkorb</button>
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
    <!--Fakten started.-->
    <div id="fakten" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h2 class="translate"><span>Fakten Überblick</span></h2>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="fact-box">
                        <h3>Varietät</h3>
                        <h4>Bourbon, Icatù</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="fact-box">
                        <h3>Herkunft</h3>
                        <h4>Brasilien, Minas Gerais Sannah</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="fact-box">
                        <h3>Erntemethode</h3>
                        <h4>Hand-picked</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="fact-box">
                        <h3>Aufbereitung</h3>
                        <h4>Natural / Tocken aufbereitet</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="fact-box">
                        <h3>Anbauhöhe</h3>
                        <h4>700-1350 m</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="fact-box">
                        <h3>Erntezeit</h3>
                        <h4>Mai-September</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fakten ended.-->
    <!--equipmentPortfolioContent started.-->
    <section class="equipmentPortfolio">
        <div class="container">
            <div class="row equipmentPortfolioContent">
                <div class="col">
                    <a href="" class="d-block"><img class="lazy" data-src="images/equipment-1.png" alt="">
                        <h5>Elektrisches</h5>
                    </a></div>
                <div class="col">
                    <a href="" class="d-block"><img class="lazy" data-src="images/equipment-2.png" alt="">
                        <h5>Mühlen</h5>
                    </a></div>
                <div class="col">
                    <a href="" class="d-block"><img class="lazy" data-src="images/equipment-4.png" alt="">
                        <h5>Manuelle Zubereiter</h5>
                    </a></div>
                <div class="col">
                    <a href="" class="d-block"><img class="lazy" data-src="images/equipment-3.png" alt="">
                        <h5>Handfilter</h5>
                    </a></div>
                <div class="col">
                    <a href="" class="d-block"><img class="lazy" data-src="images/equipment-7.png" alt="">
                        <h5>Espresso-Zubehör</h5>
                    </a></div>
            </div>
        </div>
    </section>
    <!--equipmentPortfolioContent ended.-->
    <!--Cupping Results started.-->
    <div id="CuppingResults">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h2 class="translate"><span>Cupping Results</span></h2>
                </div>
                <div class="col-md-8 col-lg-5 m-auto text-center">
                    <h3>Aroma &amp; Geschmack</h3>
                    <p class="description">Unser Pang Khon verfügt über einen runden Körper und verführt mit seinem süßen und an Gebäck erinnernden Geschmack sowie mit leicht fruchtigen Noten.</p>
                </div>
            </div>
            <div class="choclate">
                <div class="row">
                    <div class="col-md-8 col-lg-5 m-auto">
                        <div class="row">
                            <div class="col-md-4 block">
                                <img src="images/Group%2013.svg" alt="">
                                <h5>Schockolade</h5>
                            </div>
                            <div class="col-md-4 block">
                                <img src="images/Group%2014.svg" alt="">
                                <h5>Schockolade</h5>
                            </div>
                            <div class="col-md-4 block">
                                <img src="images/Group%2015.svg" alt="">
                                <h5>Schockolade</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-5 ml-auto">
                    <div class="aroma">
                        <h4>AROMA</h4>
                        <div class="ranking-box">
                            <h6>Body: Smooth</h6>
                            <div class="ranking">
                                <div class="bubble">
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble hascontent">7</div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ranking-box">
                            <h6>Acidity: Mild</h6>
                            <div class="ranking">
                                <div class="bubble">
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble hascontent">4</div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ranking-box">
                            <h6>Aftertaste: Herbacius</h6>
                            <div class="ranking">
                                <div class="bubble">
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble hascontent">8</div>
                                    <div class="bubbleScoreBubble"></div>
                                    <div class="bubbleScoreBubble"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div id="flavorScoreMainRightContainer">
                        <div id="radarChartWrapper" class="radarChart" centerx="50" centery="52" totalradius="43" maxscore="10" scores="{'Aroma / Duft':6,'Körper':4,'Säure':4,'Geschmack':6,'Nachklang':6,'Balance':6,'Gesamt':5.3}" bgsrc="https://mlrthzf1nerb.i.optimole.com/G1KS0M0-dQQUK0AA/w:auto/h:auto/q:auto/https://hannoversche-kaffeemanufaktur.de/wp-content/uploads/2019/04/radar.png">
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
                            <div class="radarChartInner" style="position:relative;"><img src="https://mlrthzf1nerb.i.optimole.com/G1KS0M0-dQQUK0AA/w:auto/h:auto/q:auto/https://hannoversche-kaffeemanufaktur.de/wp-content/uploads/2019/04/radar.png" style="position:static;width:100%;height:auto;">
                                <div style="width:100%;height:15px;position:absolute;top:calc(52% - 7.5px);left:0px;transform: rotate(-64.28571428571428deg);background-color:none;">
                                    <div style="position:relative;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;">
                                        <div class="scoreCaptionWrapper" style="	position:absolute;	right:0px;	top:0px;width:15px;	height:15px;	transform:rotate(64.28571428571428deg);">
                                            <div class="scoreCaption" style="	display:flex;	flex-direction:row;	align-items:center;	justify-content:flex-start;	white-space:nowrap;	font-size:0.8em;	">Aroma / Duft</div>
                                        </div>
                                        <div style="position:relative;width:calc(51.6% + 15px);height:100%">
                                            <div style="position:absolute;right:0px;top:0px;width:15px;height:15px;border-radius:15px;background-color:rgb(228,208,170);"></div>
                                            <div style="	position:absolute;	right:-30px;	top:0px;	width:15px;	height:15px;	transform:rotate(64.28571428571428deg);	display: flex;	flex-direction: row;	align-items: center;	justify-content: center;	font-size:1em;" class="scoreValue">6</div>
                                            <div style="	width:78.30228021154937%;	height:5px;	position:absolute;	top:5px;	right:calc(-39.15114010577469% + 7.5px);	transform: rotate(-41.73239334357974deg);	background-color:none;">
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
                                            <div style="	width:86.77674782351161%;	height:5px;	position:absolute;	top:5px;	right:calc(-43.38837391175581% + 7.5px);	transform: rotate(-64.28571428571429deg);	background-color:none;">
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
                                        <div style="position:relative;width:calc(34.4% + 15px);height:100%">
                                            <div style="position:absolute;right:0px;top:0px;width:15px;height:15px;border-radius:15px;background-color:rgb(228,208,170);"></div>
                                            <div style="	position:absolute;	right:-30px;	top:0px;	width:15px;	height:15px;	transform:rotate(-38.57142857142856deg);	display: flex;	flex-direction: row;	align-items: center;	justify-content: center;	font-size:1em;" class="scoreValue">4</div>
                                            <div style="	width:117.45342031732407%;	height:5px;	position:absolute;	top:5px;	right:calc(-58.72671015866204% + 7.5px);	transform: rotate(-86.83903522784884deg);	background-color:none;">
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
                                        <div style="position:relative;width:calc(51.6% + 15px);height:100%">
                                            <div style="position:absolute;right:0px;top:0px;width:15px;height:15px;border-radius:15px;background-color:rgb(228,208,170);"></div>
                                            <div style="	position:absolute;	right:-30px;	top:0px;	width:15px;	height:15px;	transform:rotate(-90deg);	display: flex;	flex-direction: row;	align-items: center;	justify-content: center;	font-size:1em;" class="scoreValue">6</div>
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
                                        <div style="position:relative;width:calc(51.6% + 15px);height:100%">
                                            <div style="position:absolute;right:0px;top:0px;width:15px;height:15px;border-radius:15px;background-color:rgb(228,208,170);"></div>
                                            <div style="	position:absolute;	right:-30px;	top:0px;	width:15px;	height:15px;	transform:rotate(-141.42857142857142deg);	display: flex;	flex-direction: row;	align-items: center;	justify-content: center;	font-size:1em;" class="scoreValue">6</div>
                                            <div style="	width:86.77674782351161%;	height:5px;	position:absolute;	top:5px;	right:calc(-43.38837391175581% + 7.5px);	transform: rotate(-64.28571428571429deg);	background-color:none;">
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
                                        <div style="position:relative;width:calc(51.6% + 15px);height:100%">
                                            <div style="position:absolute;right:0px;top:0px;width:15px;height:15px;border-radius:15px;background-color:rgb(228,208,170);"></div>
                                            <div style="	position:absolute;	right:-30px;	top:0px;	width:15px;	height:15px;	transform:rotate(-192.8571428571429deg);	display: flex;	flex-direction: row;	align-items: center;	justify-content: center;	font-size:1em;" class="scoreValue">6</div>
                                            <div style="	width:82.38805300693471%;	height:5px;	position:absolute;	top:5px;	right:calc(-41.194026503467356% + 7.5px);	transform: rotate(-56.955776995914135deg);	background-color:none;">
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
                                        <div style="position:relative;width:calc(45.580000000000005% + 15px);height:100%">
                                            <div style="position:absolute;right:0px;top:0px;width:15px;height:15px;border-radius:15px;background-color:rgb(228,208,170);"></div>
                                            <div style="	position:absolute;	right:-30px;	top:0px;	width:15px;	height:15px;	transform:rotate(-244.28571428571428deg);	display: flex;	flex-direction: row;	align-items: center;	justify-content: center;	font-size:1em;" class="scoreValue">5.3</div>
                                            <div style="	width:93.26949397011477%;	height:5px;	position:absolute;	top:5px;	right:calc(-46.63474698505738% + 7.5px);	transform: rotate(-71.61565157551446deg);	background-color:none;">
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
            </div>
            <div class="col-12">
                <p class="bar-notice">*Bei der Beurteilung des Geschmacks orientieren wir uns an den Kriterien der SCA.</p>
            </div>
        </div>
    </div>
    <!--Cupping Results ended.-->
    <!--origin started.-->
    <div id="origin">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h2 class="translate"><span>Herkunft</span></h2>
                </div>
            </div>
        </div>
        <div class="origin-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="Indonesia-kalossi">
                            <h3>Indonesia Kalossi</h3>
                            <p>Sari Makmur Tunggal Mandiri wurde 1995 mit der Mission gegründet, ein langfristiger strategischer Partner der Kaffeeindustrie zu werden und die Welt mit nachhaltig produziertem Kaffee von den Inseln Sumatra und Sulawesi zu beliefern. Heute werden mehr als 90% des indonesischen Kaffees von Kleinbauern und Farmern mit einer durchschnittlichen Fläche von rund einem Hektar angebaut. Das Mikroklima ist perfekt für den Anbau und die Produktion von Kaffee. Die sorten Catimor und Typica stehen für die typische Würze und den Teegeschmack von Indonesischen Kaffees.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--origin ended.-->
    <!--roasting started.-->
    <div id="roesting">
        <div class="container">
            <div class="row">
                <div class="col-md-10 text-center">
                    <h2 class="translate"><span>Rostung</span></h2>
                </div>
                <div class="col-md-12">
                    <img src="images/Group%2040.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--roasting ended.-->
    <!--schenonde started.-->
    <div id="schenonde">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="images/Group%2043.png" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="schenonde-content">
                        <h2>Schonende Langzeit-Trommelröstung</h2>
                        <p>Erst die handwerkliche Röstkunst macht einen guten Rohkaffee zu einem außergewöhnlichen Getränk. Feine Sensorik und langjährige Erfahrung werden benötigt um einen Kaffee perfekt zu rösten.
                            Unsere Röstmeister arbeiten auf einem modernisierten Trommelröster der Marke Probat aus dem Jahr 1963. Bei schonenden Temperaturen entsteht über eine Röstdauer von bis zu 20 Minuten ein absoluter Hochgenuss. Dabei stimmen unsere Röstexperten die Röstprofile fein ab und erreichen so, dass alle Schadstoffe langsam abgebaut werden und dass kein Acrylamid entsteht. <br>
                            Im Gegensatz zur industriellen Produktion werden bei uns alle Röstungen ausnahmslos von Hand durchgeführt. Ein Naturprodukt wie Kaffee ist viel zu individuell, als dass eine festgelegte Temperaturkurve immer zu idealen Ergebnissen führen könnte. Daher entscheidet der Röstmeister mit seinen geschulten Sinnen bei jeder Röstung aufs Neue, welche Temperaturkurve und welche Röstdauer zu einem perfekten Kaffee führen.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--schenonde ended.-->
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
    <!--product_wrapper started.-->
    <div class="product_wrapper">
        <div class="products text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="product-title">Kaffees die dir auch gefallen könnten:</h2>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <span class="price">6.30 &euro; - 22.30 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <span class="form-row mb-3">
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/gewure.png" alt="" title="Gewürze">
                                            </span>
                                        </span>
                                    </span>
                                    <span class="form-row">
                                        <span class="col-6">
                                            <span class="middle">Körper:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            geschmeidig, rund
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Säure:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            frisch, ausgewogen
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Nachklang:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            weich, komplex
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <span class="price">6.30 &euro; - 22.30 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <span class="form-row mb-3">
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/gewure.png" alt="" title="Gewürze">
                                            </span>
                                        </span>
                                    </span>
                                    <span class="form-row">
                                        <span class="col-6">
                                            <span class="middle">Körper:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            geschmeidig, rund
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Säure:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            frisch, ausgewogen
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Nachklang:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            weich, komplex
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <span class="price">6.30 &euro; - 22.30 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <span class="form-row mb-3">
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/gewure.png" alt="" title="Gewürze">
                                            </span>
                                        </span>
                                    </span>
                                    <span class="form-row">
                                        <span class="col-6">
                                            <span class="middle">Körper:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            geschmeidig, rund
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Säure:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            frisch, ausgewogen
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Nachklang:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            weich, komplex
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
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
                                    <span class="price">6.30 &euro; - 22.30 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <span class="form-row mb-3">
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/gewure.png" alt="" title="Gewürze">
                                            </span>
                                        </span>
                                    </span>
                                    <span class="form-row">
                                        <span class="col-6">
                                            <span class="middle">Körper:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            geschmeidig, rund
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Säure:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            frisch, ausgewogen
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Nachklang:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            weich, komplex
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product_wrapper ended.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
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
                if (x > $("#fakten").offset().top - height + 110) {
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
        
        function myFunction(){
            var id = $('#mahlgrad').val();
            $('#menge option').each(function() {
                if ( $(this).val() != '' ) {
                    $(this).remove();
                }
            });
            $.post('<?= base_url()?>products/select_type/'+id, 
                    function(data, status, jqXHR) {
                        var obj = JSON.parse(data);
                        for(i = 0; i < obj.length; i = i + 1) {
                            if(i==0){
                                $('#menge').append("<option value='" + obj[i].id + "' price='" + obj[i].price + "' selected>" + obj[i].size + "</option>");
                                check_quantity();
                            }else{
                                $('#menge').append("<option value='" + obj[i].id + "' price='" + obj[i].price + "'>" + obj[i].size + "</option>");
                            }
                        }
                        
                     })
        }
        
        function resetme(){
            $('#anzahl').val('1');
        }
        
        function check_quantity(){
           var q =  $('#anzahl').val();
           var p =  $('#product_price').text();
           // var p =  $('#menge').find(':selected').attr('price');
           var main = q*p;
           alert(p);
           $('#product_price').text(main.toFixed(2)+' €');
           $('#price').val(main.toFixed(2));
        }
        
        
        function add_to_cart(){
            var product_id = $('#menge').val();
            var qunatity =  $('#anzahl').val();
            var price =  $('#menge').find(':selected').attr('price');
            var totalprice = qunatity*price;
            // console.log('product_id='+product_id+' qunatity='+qunatity+' totalprice'+totalprice);
            
            $.post('<?= base_url()?>home/add_to_cart/',
            {
              product_details_id: product_id,
              qty: qunatity
            },
            function(data, status){
                var obj = JSON.parse(data);
              if(obj.status == 'true'){
                  // alert("Artikel erfolgreich in den Warenkorb gelegt");
                  window.location.href = '<?= base_url()?>home/cart';
              }else{
                  alert("Please Login");
                  window.location.href = '<?= base_url()?>login';
              }
            });
            
        }
    </script>
    
    
</body>

</html>

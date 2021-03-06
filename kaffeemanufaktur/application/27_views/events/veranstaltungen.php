<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "veranstaltungen";
    require_once("public/include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--event header started.-->
    <div id="eventsHeader">
        <div id="eventsHeaderBottom"></div>
    </div>
    <!--event header ended.-->
    <!--goldenSection started.-->
    <div id="goldenSection">
        <div id="navigationContainerOuter">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 m-auto">
                        <div class="row text-center">
                            <div class="col-md-3">
                                <a href="#bookableOuter" class="d-block animate-panel">
                                    <div>
                                        <img src="<?=base_url()?>public/images/Genussreise.png" alt="">
                                    </div>
                                    <span>Genussreise</span>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#bookableOuter" class="d-block animate-panel">
                                    <div>
                                        <img src="<?=base_url()?>public/images/Baristakurs.png" alt="">
                                    </div>
                                    <span>Baristakurs</span>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#privateSection" class="d-block animate-panel">
                                    <div id="specialNavigationItem">
                                        <img src="<?=base_url()?>public/images/Private-Feiern.png" alt="">
                                    </div>
                                    <span>Private Feiern</span>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#voucherSection" class="d-block animate-panel">
                                    <div>
                                        <img src="<?=base_url()?>public/images/Gutscheine.png" alt="">
                                    </div>
                                    <span>Gutscheine</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="bookableOuter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <h2>Baristakurse und Genussreisen</h2>
                        <div class="row">
                            <div class="col-md-6 m-auto">
                                <a href="" class="d-block">
                                    <img src="<?=base_url()?>public/images/flemming2_s.jpg" alt="">
                                    <div>
                                        <h3>Baristakurse</h3>
                                        <p>(mehr erfahren)</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 m-auto">
                                <a href="" class="d-block">
                                    <img src="<?=base_url()?>public/images/2_s.jpg" alt="">
                                    <div>
                                        <h3>Baristakurse</h3>
                                        <p>(mehr erfahren)</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--goldenSection ended.-->
    <!--privateSection started.-->
    <div id="privateSection">
        <div id="privateSectionLowerDecoration"></div>
        <div id="balloon1"></div>
        <div id="balloon2"></div>
        <div id="privateSectionContent">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center m-auto">
                        <h2>Private Feiern, Genussreisen &amp; Baristakurse</h2>
                        <p>Den Geburtstag, die allj??hrliche Familienfeier oder Feier im Freundeskreis in gem??tlicher Atmosph??re bei einem hervorragenden Kaffee genie??en ??? all das ist in bei uns m??glich: Bis zu 50 Personen haben in unserer gro??en R??sterei in Hee??el Platz. Nat??rlich verw??hnen wir mit unseren Kaffeespezialit??ten, bieten nach R??cksprache aber auch Kuchen und andere Speisen an. In enger Absprache mit unseren Kunden realisieren wir die Feierlichkeit Ihrer Vorstellungen. Dies ist z.B. im Stil einer Genussreise m??glich oder etwas lockerer mit Spielen und actionreichem Showr??sten - oder gar als Baristakurs.</p>
                        <p>Wir freuen uns auf jede Anfrage!</p>
                        <div>
                            <a href="" class="btn-white">Kontact</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center m-auto">
                        <h2>Unsere Kaffeebar f??r Veranstaltungen</h2>
                        <p>Wir beraten individuell und vermieten beispielsweise auch mobile M??glichkeiten f??r eine einzigartige Veranstaltung. Wir stellen z.B. ein Komplettpaket mit Barista, Kaffee, Tassen bzw. Bechern. In der Bildergalerie unten haben wir ein paar Eindr??cke als Inspiration zusammengestellt.</p>
                        <img src="<?=base_url()?>public/images/unknown.png" alt="">
                        <div>
                            <a href="" class="btn-white">Kontact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="privateSectionUpperDecoration"></div>
    </div>
    <!--privateSection ended.-->
    <!--voucherSection started.-->
    <div id="voucherSection">
        <div class="container">
            <div class="row">
                <div class="col-md-11 m-auto">
                    <h2 class="text-center">Unsere Gutscheine zum verschenken</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="" class="d-block">
                                <div class="hoverZoom">
                                    <img src="<?=base_url()?>public/images/Gutscheine-event.png" alt="">
                                    <h4>Gutschein f??r eine Genussreise</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="d-block">
                                <div class="hoverZoom">
                                    <img src="<?=base_url()?>public/images/Gutscheine-event.png" alt="">
                                    <h4>Gutschein f??r eine Genussreise</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="" class="d-block">
                                <div class="hoverZoom">
                                    <img src="<?=base_url()?>public/images/Gutscheine-event.png" alt="">
                                    <h4>Gutschein f??r eine Genussreise</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--voucherSection ended.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
</body>

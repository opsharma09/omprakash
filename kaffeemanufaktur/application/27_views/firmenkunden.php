<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "firmenkunden";
    require_once("public/include/head.php")?>
    <link href="//db.onlinewebfonts.com/c/0801c08e5412f54e4b4e9ad146d83a12?family=Ink+Free" rel="stylesheet" type="text/css" />
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <div id="wholesalePage">
        <!--       wholesaleLoginSection started.-->
        <div id="wholesaleLoginSection">
            <div id="wholesaleLoginBackgroundElements">
                <div id="wholesaleLoginPlant1"></div>
                <div id="wholesaleLoginPlant2"></div>
                <div id="wholesaleLoginBookshelf"></div>
            </div>
            <div id="wholesaleLoginContent">
                <div class="container d-flex align-items-center">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h2>Firmenlogin</h2>
                            <form action="" class="login-form">
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Kd.-Nr. oder E-Mail">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Passwort">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button class="btn">Anmelden</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 text-center col-lg-5 offset-lg-1">
                            <h2>Neuer Kunde</h2>
                            <p>Unser Firmenkundenportal bietet einige Vorteile im Vergleich zur herkömmlichen Bestellung via E-Mail und Telefon.</p>
                            <p>Darunter zum Beispiel:</p>
                            <ul class="text-left">
                                <li>Einfachste Bestellung über unser Kundenportal</li>
                                <li>Ersparnisse durch Onlinebestellung</li>
                                <li>Einrichtung von automatischer Nachbestellung</li>
                                <li>Kauf auf Rechnung</li>
                                <li>Praktische Übersicht über bisherige Bestellungen</li>
                                <li>Änderung der Kontaktdaten</li>
                                <li>Keine Verbindlichkeiten</li>
                            </ul>
                            <a href="" class="btn">Registrieren</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    wholesaleLoginSection ended.-->
        <!--wholesaleRecord started.-->
        <section class="wholesaleRecord">
            <div id="wholesaleRecordBackgroundTopOuter">
                <div id="wholesaleRecordBackgroundTopInner"></div>
            </div>
            <div id="wholesaleRecordContentOuter">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="d-inline-block m-auto">45.833.635 <span>Tassen</span></h1>
                            <h2 class="d-inline-block m-auto">Hannoverkaffee seit 2012</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="wholesaleRecordBackgroundBottomOuter">
                <div id="wholesaleRecordBackgroundBottomInner"></div>
            </div>
        </section>
        <!--wholesaleRecord ended.-->
        <!--wholesaleParallaxSection started.-->
        <div id="wholesaleParallaxSection" class="text-center parallax">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Warum Kaffee von der</h3>
                        <h2>Hannoverschen Kaffeemanufaktur?</h2>
                        <p>wir stehen für</p>
                    </div>
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="highlight-box">
                                    <h3>Qualität</h3>
                                    <p>Die Kaffeemanufaktur liefert ausschließlich Spitzenkaffee. Liebevoll gerösteter Kaffee aus den hochwertigsten Rohkaffees aus aller Welt. <br>Nur das Beste ist für uns gut genug. Die Kunden Vertrauen in die gleichbleibend starke Qualität.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="highlight-box">
                                    <h3>Regionalität</h3>
                                    <p>Wir stehen für die Region Hannover. <br>Fördern auch Sie Ihren Bezug zu dieser wundervollen Stadt mit dem Spitzenkaffee aus der lokalen Manufaktur.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="highlight-box">
                                    <h3>Exklusivität</h3>
                                    <p>Heben Sie sich von Ihren Wettbewerbern ab und führen Sie Ihre Gäste in den Genuss eines ganz besonderen Kaffees. Betonen Sie Ihre Individualität durch einen exklusiv für Sie kreierten Kaffeeblend oder ein eigenes Design.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--wholesaleParallaxSection ended.-->
        <!--wholesaleConsulting started.-->
        <div id="wholesaleConsulting" class="text-center">
            <h2>Individuelle Lösungen für</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="" class="uspSectionInner">
                                    <img class="lazy" data-src="<?= base_url() ?>public/images/events.png" alt="">
                                    <h4 class="title">Events</h4>
                                    <p> Ihr Kaffeepartner für Firmenjubiläen, Messecatering, Tagungen, Businesslunch, Sommerfeste oder Weihnachtsfeiern.<br> Ein guter Kaffee ist selten – deswegen bleibt er in Erinnerung. Machen Sie Ihren Kunden, Gästen, Kollegen oder Mitarbeitern eine Freude und bringen Sie sie in den Genuss von einzigartigen Kaffeekreationen.
                                    </p>
                                </a>
                                <a href="" class="btn-white">Unverbindliches Angebot</a>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="uspSectionInner">
                                    <img class="lazy" data-src="<?= base_url() ?>public/images/events.png" alt="">
                                    <h4 class="title">Events</h4>
                                    <p> Ihr Kaffeepartner für Firmenjubiläen, Messecatering, Tagungen, Businesslunch, Sommerfeste oder Weihnachtsfeiern.<br> Ein guter Kaffee ist selten – deswegen bleibt er in Erinnerung. Machen Sie Ihren Kunden, Gästen, Kollegen oder Mitarbeitern eine Freude und bringen Sie sie in den Genuss von einzigartigen Kaffeekreationen.
                                    </p>
                                </a>
                                <a href="" class="btn-white">Unverbindliches Angebot</a>
                            </div>
                            <div class="col-md-4">
                                <a href="" class="uspSectionInner">
                                    <img class="lazy" data-src="<?= base_url() ?>public/images/events.png" alt="">
                                    <h4 class="title">Events</h4>
                                    <p> Ihr Kaffeepartner für Firmenjubiläen, Messecatering, Tagungen, Businesslunch, Sommerfeste oder Weihnachtsfeiern.<br> Ein guter Kaffee ist selten – deswegen bleibt er in Erinnerung. Machen Sie Ihren Kunden, Gästen, Kollegen oder Mitarbeitern eine Freude und bringen Sie sie in den Genuss von einzigartigen Kaffeekreationen.
                                    </p>
                                </a>
                                <a href="" class="btn-white">Unverbindliches Angebot</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="wholesaleConsultingFloatingOuter">
                <div id="wholesaleConsultingFloatingMiddle">
                    <a href="/kontakt">
                        <div id="wholesaleConsultingFloatingInner">
                            <span>unverbindliche</span>
                            <h3>Beratung</h3>
                            <u>hier</u>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--wholesaleConsulting ended.-->
        <!--wholesaleServices started.-->
        <div id="wholesaleServices" class="parallax text-center">
            <h2>Firmenkunden Services</h2>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="highlight-box">
                            <div class="imageWrapper">
                                <div>
                                    <img src="<?= base_url() ?>public/images/post.png" alt=""></div>
                            </div>
                            <h4> Frische Lieferung<br> oder Selbstabholung </h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="highlight-box">
                            <div class="imageWrapper">
                                <div>
                                    <img src="<?= base_url() ?>public/images/post.png" alt=""></div>
                            </div>
                            <h4> Frische Lieferung<br> oder Selbstabholung </h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="highlight-box">
                            <div class="imageWrapper">
                                <div>
                                    <img src="<?= base_url() ?>public/images/post.png" alt=""></div>
                            </div>
                            <h4> Frische Lieferung<br> oder Selbstabholung </h4>
                        </div>
                    </div>
                </div>
            </div>
            <h2>Exklusive Produkte</h2>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="highlight-box">
                            <div class="imageWrapper">
                                <div>
                                    <img src="<?= base_url() ?>public/images/post.png" alt=""></div>
                            </div>
                            <h4> Frische</h4>
                            <p> Wir bieten eine große Auswahl an zuverlässigen Kaffeevollautomaten und Espressomaschinen sowie Mühlen, Boilern und weitere Technik für die Kaffeebar.<br> Passend bieten wir verschiedene Leasing-, Finanzierungs- und Kaufoptionen. </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="highlight-box">
                            <div class="imageWrapper">
                                <div>
                                    <img src="<?= base_url() ?>public/images/post.png" alt=""></div>
                            </div>
                            <h4> Frische</h4>
                            <p> Wir bieten eine große Auswahl an zuverlässigen Kaffeevollautomaten und Espressomaschinen sowie Mühlen, Boilern und weitere Technik für die Kaffeebar.<br> Passend bieten wir verschiedene Leasing-, Finanzierungs- und Kaufoptionen. </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="highlight-box">
                            <div class="imageWrapper">
                                <div>
                                    <img src="<?= base_url() ?>public/images/post.png" alt=""></div>
                            </div>
                            <h4> Frische</h4>
                            <p> Wir bieten eine große Auswahl an zuverlässigen Kaffeevollautomaten und Espressomaschinen sowie Mühlen, Boilern und weitere Technik für die Kaffeebar.<br> Passend bieten wir verschiedene Leasing-, Finanzierungs- und Kaufoptionen. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--wholesaleServices ended.-->
        <!--newProductGenericSection started.-->
        <div id="newProductGenericSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-5 m-auto text-center">
                        <h3>NEU im Sortiment</h3>
                        <h2>Latte 2.0</h2>
                        <p>Die neue Version unseres doppelwandigen Latte-Glases ist noch schöner und liegt noch besser in der Hand. <br>Elegant geschwungen ist es ein absoluter Blickfang für jeden Gast.</p>
                        <a href="" class="btn-white" target="_blank">Genaueres</a>
                    </div>
                </div>
            </div>
            <div id="newProductGenericSectionFloaterOuter">
                <div class="inner">NEW im Sortiment</div>
            </div>
        </div>
        <!--newProductGenericSection ended.-->
        <!--wholesaleCoffeeBar started.-->
        <div id="wholesaleCoffeeBar" class="parallax text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6 m-auto">
                        <div id="wholesaleCoffeeBarContentInner" class="highlight-box">
                            <h2>Unsere Kaffeebar für Veranstaltungen</h2>
                            <p>Mit langjähriger Kaffeeerfahrung ist die Kaffeemanufaktur der perfekte Ansprechpartner, wenn es um die Kaffeeversorgung Ihrer Veranstaltung geht. Wir beraten individuell und vermieten mobile Möglichkeiten für ein einzigartiges Event. Gerne konzipieren wir Ihnen ein spezielles Komplettpaket, ob mit mobilen Kaffeebars und professionellen Baristi oder mit Vollautomaten zur Selbstbedienung: Fragen Sie nach einer indviduellen Lösung.</p>
                            <img src="<?= base_url() ?>public/images/Veranstal.png" class="mb-2" alt="">
                            <div><a href="" class="btn-white mb-3">Unverbindliches Angebot</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--wholesaleCoffeeBar ended.-->
        <!--wholesaleReferences started.-->
        <div id="wholesaleReferences">
            <h2>Unsere Kunden</h2>
            <div><img src="<?= base_url() ?>public/images/Sennheiser.png" alt=""></div>
            <div><img src="<?= base_url() ?>public/images/Sennheiser.png" alt=""></div>
            <div><img src="<?= base_url() ?>public/images/Sennheiser.png" alt=""></div>
            <div><img src="<?= base_url() ?>public/images/Sennheiser.png" alt=""></div>
            <div><img src="<?= base_url() ?>public/images/Sennheiser.png" alt=""></div>
            <div><img src="<?= base_url() ?>public/images/Sennheiser.png" alt=""></div>
            <div><img src="<?= base_url() ?>public/images/Sennheiser.png" alt=""></div>
            <div><img src="<?= base_url() ?>public/images/Sennheiser.png" alt=""></div>
            <div><img src="<?= base_url() ?>public/images/Sennheiser.png" alt=""></div>
            <div><img src="<?= base_url() ?>public/images/Sennheiser.png" alt=""></div>
        </div>
        <!--wholesaleReferences ended.-->
        <!--wholesaleHanoverSection started.-->
        <div id="wholesaleHanoverSection" class="parallax"></div>
        <!--wholesaleHanoverSection ended.-->
        <!--contactUsGeneric started.-->
        <div id="contactUsGeneric" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <h3>Lassen Sie sich heute noch</h3>
                        <h2>unverbindlich beraten</h2>
                        <p> Wir freuen uns, von Ihnen zu hören. Unsere Mitarbeiter stehen jederzeit zur Verfügung und beraten Sie gerne.<br> Egal ob bei der Planung eines neuen Cafés oder der Umstellung Ihrer Kaffeemaschinen im Büro.<br> Wir sind Ihr kompetenter Partner, wenn es um Kaffee geht! </p>
                        <a href="" class="btn-white mb-3">Kontakt</a>
                        <div>Rufnummer: <a href=""> 49 511 310 104 50</a></div>
                        <span>Gebührenfrei aus dem deutschen Festnetz</span>
                    </div>
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>public/images/Firmenkunden-contact.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!--contactUsGeneric ended.-->
    </div>
    <!--   footer started.-->
    <?php require_once("public/include/footer.php") ?>
</body>

</html>

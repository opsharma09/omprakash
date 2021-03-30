<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "kontakt";
    require_once("public/include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <div id="contactUpperSection" class="parallax">
        <div id="parallax" class="parallax"></div>
        <div id="contactHeader"></div>
        <div class="contactNavigationSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 text-center m-auto">
                        <div class="row">
                            <div class="col">
                                <a href="#kontaktformular" class="d-block">
                                    <img src="<?=base_url()?>public/images/Kontaktformular.png" alt="">
                                </a>
                                <p>Kontaktformular</p>
                            </div>
                            <div class="col">
                                <a href="#locations" class="d-block">
                                    <img src="<?=base_url()?>public/images/unsure-locations.png" alt="">
                                </a>
                                <p>Unsere Locations</p>
                            </div>
                            <div class="col">
                                <a href="#maerkte" class="d-block">
                                    <img src="<?=base_url()?>public/images/M%C3%A4rkte.png" alt="">
                                </a>
                                <p>Märkte</p>
                            </div>
                            <div class="col">
                                <a href="#kontaktPersonen" class="d-block">
                                    <img src="<?=base_url()?>public/images/Ansprechpartner.png" alt="">
                                </a>
                                <p>Ansprechpartner</p>
                            </div>
                            <div class="col">
                                <a href="#kariere" class="d-block">
                                    <img src="<?=base_url()?>public/images/Karriere.png" style="max-width: 60px" alt="">
                                </a>
                                <p>Karriere</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contactInfos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="contactInfosEnvelope">
                            <div id="contactInfosEnvelopeUpper">
                                <h2>Kontakt:</h2>
                                <p>E-Mail: <a href="mailto:info@hannoversche-kaffeemanufaktur.de">info@hannoversche-kaffeemanufaktur.de</a></p>
                                <p>Tel: 0511 310 104 50</p>
                                <p>Fax: 0511 310 104 65</p>
                            </div>
                            <div id="contactInfosEnvelopeLower">
                                <h4>Anschrift:</h4>
                                <p>Hannoversche Kaffeemanufaktur GmbH &amp; Co". KG Dorfstraße 17, 31303 Burgdorf OT Heeßel</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div id="contactBusinessHour">
                            <h2>Öffnungszeiten:</h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="businessHoursLeft">
                                            <b>Kleine Rösterei und Fachgeschäft</b><br>
                                            <br>
                                            <p>
                                                Wunstorferstr. 33<br>
                                                30453 Hannover Limmer
                                            </p>
                                        </td>
                                        <td class="businessHoursRight">
                                            Montag - Freitag<br>
                                            9:30 Uhr - 18 Uhr<br>
                                            Samstag<br>
                                            9:30 Uhr - 14 Uhr
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="businessHoursLeft">
                                            <b>Kaffeebar &amp; Fachgeschäft</b><br>
                                            <br>
                                            <p>
                                                Ernst-August-Platz 5<br>
                                                Niki-de-Saint-Phalle-Promenade<br>
                                                (Galeria „Choco &amp; Co".)<br>
                                                30159 Hannover
                                            </p>
                                        </td>
                                        <td class="businessHoursRight">
                                            Montag - Samstag<br>
                                            9:30 Uhr - 19:30 Uhr
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="businessHoursLeft">
                                            <b>Große Rösterei und Werksverkauf</b><br>
                                            <br>
                                            <p>
                                                Dorfstraße 17<br>
                                                31303 Burgdorf OT Heeßel
                                            </p>
                                        </td>
                                        <td class="businessHoursRight">
                                            Samstag<br>
                                            8:30 Uhr - 15 Uhr<br>
                                            (Besichtigungen auf Anfrage)
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-center">
                                <a href="" class="btn-white">Mehr Information</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contactFormSection">
            <div id="contactFormMailbox"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10 m-auto">
                        <div class="contactFormLetter">
                            <div class="contact_content">
                                <p id="headline">An die Hannoversche Kaffeemanufaktur, ich würde gerne wissen.....</p>
                                <form action="">
                                    <div class="form-row align-items-end">
                                        <div class="col-md-7 mb-3">
                                            <div class="form-group"><input type="text" placeholder="Betreff*" class="form-control"></div>
                                            <div class="form-group"><textarea name="" id="" rows="6" class="form-control" placeholder="NachRicht*"></textarea></div>
                                        </div>
                                        <div class="col-md-5 mb-3">
                                            <h4>Absender:</h4>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name*">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name*">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name*">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input type="checkbox" class="custom-control-input" id="firma" required>
                                                <label class="custom-control-label" for="firma">Ich habe die <a href="/agb">Allgemeinen Geschäftsbedingungen</a> gelelsen und akzeptiere diese</label>
                                            </div>
                                            <div class="custom-control custom-checkbox mb-4">
                                                <input type="checkbox" class="custom-control-input" id="ich" required>
                                                <label class="custom-control-label" for="ich">Ich habe die Datenschutzerklärung gelelsen und akzeptiere diese</label>
                                            </div>
                                            <div class="text-center">
                                                <button class="btn-white" type="submit">Senden</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="locationsSection">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="locationHeader">
                        <h4>Wo wir zu finden sind</h4>
                        <h2>unsere Locations</h2>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-left">
                    <img src="<?=base_url()?>public/images/home.png" alt="">
                    <div class="locationImageContent">
                        <h2>Große Rösterei</h2>
                        <h4>&amp; Werksverkauf</h4>
                        <h4>Burgdorf OT Heeßel</h4>
                        <p>Im Herbst 2015 ist die Produktionsstätte der Hannoverschen Kaffeemanufaktur von der Liepmannstraße in Linden Limmer nach Burgdorf umgezogen. In einem alten Gasthaus rösten wir auf unserem Trommelröster von Probat den Spitzenkaffee für Sie.</p>
                        <div class="devider">
                            <img src="<?=base_url()?>public/images/devider.png" alt="">
                        </div>
                        <div>Große Rösterei und Werksverkauf<br><br> Samstag: 8:30 Uhr - 15 Uhr<br>(Besichtigungen auf Anfrage)<br> <br>
                            Dorfstraße 17<br> 1303 Burgdorf OT Heeßel </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-left">
                    <img src="<?=base_url()?>public/images/home.png" alt="">
                    <div class="locationImageContent">
                        <h2>Große Rösterei</h2>
                        <h4>&amp; Werksverkauf</h4>
                        <h4>Burgdorf OT Heeßel</h4>
                        <p>Im Herbst 2015 ist die Produktionsstätte der Hannoverschen Kaffeemanufaktur von der Liepmannstraße in Linden Limmer nach Burgdorf umgezogen. In einem alten Gasthaus rösten wir auf unserem Trommelröster von Probat den Spitzenkaffee für Sie.</p>
                        <div class="devider">
                            <img src="<?=base_url()?>public/images/devider.png" alt="">
                        </div>
                        <div>Große Rösterei und Werksverkauf<br><br> Samstag: 8:30 Uhr - 15 Uhr<br>(Besichtigungen auf Anfrage)<br> <br>
                            Dorfstraße 17<br> 1303 Burgdorf OT Heeßel </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-left">
                    <img src="<?=base_url()?>public/images/home.png" alt="">
                    <div class="locationImageContent">
                        <h2>Große Rösterei</h2>
                        <h4>&amp; Werksverkauf</h4>
                        <h4>Burgdorf OT Heeßel</h4>
                        <p>Im Herbst 2015 ist die Produktionsstätte der Hannoverschen Kaffeemanufaktur von der Liepmannstraße in Linden Limmer nach Burgdorf umgezogen. In einem alten Gasthaus rösten wir auf unserem Trommelröster von Probat den Spitzenkaffee für Sie.</p>
                        <div class="devider">
                            <img src="<?=base_url()?>public/images/devider.png" alt="">
                        </div>
                        <div>Große Rösterei und Werksverkauf<br><br> Samstag: 8:30 Uhr - 15 Uhr<br>(Besichtigungen auf Anfrage)<br> <br>
                            Dorfstraße 17<br> 1303 Burgdorf OT Heeßel </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="mapSection">
        <div id="mapSectionTop">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4>unser Kaffee ist</h4>
                        <h2>zu finden bei</h2>
                        <div id="mapBrands">
                            <img src="<?=base_url()?>public/images/mapbrand.png" alt="">
                            <img src="<?=base_url()?>public/images/mapbrand.png" alt="">
                            <img src="<?=base_url()?>public/images/mapbrand.png" alt="">
                            <img src="<?=base_url()?>public/images/mapbrand.png" alt="">
                            <img src="<?=base_url()?>public/images/mapbrand.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mapContainer">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30703620.672472216!2d64.41390989859406!3d20.050418843029934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1596852521317!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" style="width: 100%; height: 600px"></iframe>
        </div>
        <div id="mapSectionBottom">
            <div class="container">
                *nicht alle Filialen der genannten Märkte führen unseren Kaffee. Um sicherzugehen, schauen Sie am besten in die Karte.
            </div>
        </div>
    </div>
    <div id="contactFancySection">
        <div id="contactFancyTopDeco"></div>
        <div id="contactFancyContent">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-9 m-auto">
                        <div class="row">
                            <div class="col-lg-5 ml-auto order-2 order-lg-1 text-center text-lg-left"><img src="<?=base_url()?>public/images/team.png" alt=""></div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center text-lg-left">
                                <div class="contactFancyContentInner">
                                    <div>
                                        <h2>Bei Fragen</h2>
                                        <p>Unser Team steht Ihnen bei Fragen jederzeit gerne zur Verfügung.</p>
                                        <h2>Tel.: 0511 310 104 50</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Ansprechpartner für</h4>
                        <h2>Unternehmen &amp; Gastronomie</h2>
                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <img src="<?=base_url()?>public/images/black-face.png" alt="">
                                <h4>Vincent</h4>
                                <h2>Mecke</h2>
                                <a href="">mecke@hannoversche-kaffeemanufaktur.de</a>
                            </div>
                            <div class="col-lg-4 text-center">
                                <img src="<?=base_url()?>public/images/black-face.png" alt="">
                                <h4>Vincent</h4>
                                <h2>Mecke</h2>
                                <a href="">mecke@hannoversche-kaffeemanufaktur.de</a>
                            </div>
                            <div class="col-lg-4 text-center">
                                <img src="<?=base_url()?>public/images/black-face.png" alt="">
                                <h4>Vincent</h4>
                                <h2>Mecke</h2>
                                <a href="">mecke@hannoversche-kaffeemanufaktur.de</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contactFancyBottomSection">
            <div id="contactFancyBottomBackground">
                <div id="contactFancyBottomDeco"></div>
            </div>
            <div id="contactFancyBottomContent">
                <div id="contactFancyBottomHeadlines">
                    <h3>Karriere<span>&nbsp;im</span></h3>
                    <h2>Kaffee<span>-<br></span>handwerk</h2>
                </div>
                <p>Sie sind auf der Suche nach einer aufregenden Arbeit in einem jungen dynamischen Team? Ob an der Bar, im Büro oder in der Produktion. Bei uns wird es nie langweilig.</p>
                <p>Zur Zeit sind wir auf der Suche nach:</p>
                <p class="tiny">
                    Barista m/w<br>
                    teilzeit/vollzeit
                </p>
                <p class="tiny">
                    Barista m/w<br>
                    minijob
                </p>
                <p class="tiny">
                    bei Interesse<br>
                    <a href="mailto:karriere@hannoversche-kaffeemanufaktur.de">karriere@hannoversche-kaffeemanufaktur.de</a>
                </p>
            </div>
            <div id="contactFancyBottomPeople"></div>
        </div>
        <div id="fancyLamp"></div>
    </div>
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
</body>

</html>

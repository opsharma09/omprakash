<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "genussreise";
    require_once("include/head.php")?>
    <link href="//db.onlinewebfonts.com/c/0801c08e5412f54e4b4e9ad146d83a12?family=Ink+Free" rel="stylesheet" type="text/css" />
</head>

<body>
    <!--header started.-->
    <?php require_once("include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--pageBanner started.-->
    <div id="pageBanner">
        <div id="pageBannerContent">
            <div id="pageBannerContentInner">
                <a href="#bookingSection" class="animate-panel">
                    <div class="hoverZoom">
                        <h2>Genussreisen erleben</h2>
                        <img src="images/test-white.png" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--pageBanner ended.-->
    <!--bookingSection started.-->
    <section id="bookingSection" class="parallax">
        <div class="bookly-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Direkt buchen</h1>
                        <p class="description">(Buchung kostenlos mit gültigem Gutschein, einlösbar im Bezahlvorgang)</p>
                        <div class="bookly-form-back">
                            <div class="bookly-progress-tracker">
                                <div class="step-box active">
                                    <p>1. Dienstleistung</p>
                                    <div class="step"></div>
                                </div>
                                <div class="step-box">
                                    <p>2. Zeit</p>
                                    <div class="step"></div>
                                </div>
                                <div class="step-box">
                                    <p>3. Details</p>
                                    <div class="step"></div>
                                </div>
                                <div class="step-box">
                                    <p>4. Beendat</p>
                                    <div class="step"></div>
                                </div>
                            </div>
                            <div class="bookly-form-box">
                                <p><b>Bitte wählen Sie einen Service: </b></p>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dienstleistung">Dienstleistung</label>
                                            <select name="" id="dienstleistung" class="form-control">
                                                <option value="">Wählen Sie den Service</option>
                                                <option value="1">Baristakurs</option>
                                                <option value="2">Genussreise</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="personenanzahl">Personenanzahl</label>
                                            <select name="" id="personenanzahl" class="form-control">
                                                <option value="" disabled selected>0</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                    <div class="col-12 clearfix">
                                        <button class="btn float-right" type="submit">WEITER</button>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="bookly-form-box">
                                <p>Hier finden Sie eine Liste der verfügbaren Zeiten für die Veranstaltung "<b>Baristakurs</b>".<br>Klicken Sie auf eine Zeit für die Buchung.</p>
                                <div class="bookly-time-step">
                                    <div class="column">
                                        <div class="date">So, Aug 16</div>
                                        <button class="bookly-hour clearfix"><span class="bookly-time-main"><i><span></span></i> 13:30</span> <span class="time-additional">[4]</span></button>
                                        <div class="date">So, Aug 16</div>
                                        <button class="bookly-hour clearfix booked"><span class="bookly-time-main"><i><span></span></i> 13:30</span> <span class="time-additional">[4]</span></button>
                                        <div class="date">So, Aug 16</div>
                                        <button class="bookly-hour clearfix"><span class="bookly-time-main"><i><span></span></i> 13:30</span> <span class="time-additional">[4]</span></button>
                                        <div class="date">So, Aug 16</div>
                                        <button class="bookly-hour clearfix booked"><span class="bookly-time-main"><i><span></span></i> 13:30</span> <span class="time-additional">[4]</span></button>
                                    </div>
                                    <div class="column">
                                        <div class="date">So, Aug 16</div>
                                        <button class="bookly-hour clearfix booked"><span class="bookly-time-main"><i><span></span></i> 13:30</span> <span class="time-additional">[4]</span></button>
                                        <div class="date">So, Aug 16</div>
                                        <button class="bookly-hour clearfix"><span class="bookly-time-main"><i><span></span></i> 13:30</span> <span class="time-additional">[4]</span></button>
                                        <div class="date">So, Aug 16</div>
                                        <button class="bookly-hour clearfix booked"><span class="bookly-time-main"><i><span></span></i> 13:30</span> <span class="time-additional">[4]</span></button>
                                        <div class="date">So, Aug 16</div>
                                        <button class="bookly-hour clearfix"><span class="bookly-time-main"><i><span></span></i> 13:30</span> <span class="time-additional">[4]</span></button>
                                    </div>
                                    <div class="column">
                                        <div class="date">So, Aug 16</div>
                                        <button class="bookly-hour clearfix"><span class="bookly-time-main"><i><span></span></i> 13:30</span> <span class="time-additional">[4]</span></button>
                                        <div class="date">So, Aug 16</div>
                                        <button class="bookly-hour clearfix booked"><span class="bookly-time-main"><i><span></span></i> 13:30</span> <span class="time-additional">[4]</span></button>
                                        <div class="date">So, Aug 16</div>
                                        <button class="bookly-hour clearfix"><span class="bookly-time-main"><i><span></span></i> 13:30</span> <span class="time-additional">[4]</span></button>
                                        <div class="date">So, Aug 16</div>
                                        <button class="bookly-hour clearfix booked"><span class="bookly-time-main"><i><span></span></i> 13:30</span> <span class="time-additional">[4]</span></button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                    <div class="col-12 clearfix">
                                        <button class="btn float-left" type="submit">Zurück</button>
                                        <button class="btn float-right" type="submit">WEITER</button>
                                    </div>
                                </div>
                            </div><br>
                            <br>
                            <br>
                            <div class="bookly-form-box">
                                <p>Sie wählten eine Reservierung von <b>Baristakurs</b> mit <b>HKM - Baristakurs</b> in der Zeit <b>13:30</b> Uhr am <b>27. September 2020</b>. Das Entgelt für den Service beträgt <b>€99,00</b>.<br>Bitte tragen Sie Ihre Angaben in das Formular unten ein, um mit der Buchung fortzufahren.</p>
                                <div class="form-row">
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <label for="telefon">Telefon</label>
                                        <div class="input-group">
                                            <div class="input-prepend">
                                                <div class="selected_flag" tabindex="0">
                                                    <div class="flag"></div>
                                                    <div class="list-arrow"></div>
                                                </div>
                                                <ul class="country-list" id="country-list" style="display:none">
                                                    <li class="country">
                                                        <div class="flag-box">
                                                            <div class="flag"></div>
                                                        </div>
                                                        <span class="country-name">India (भारत)</span><span class="dial-code">+91</span>
                                                    </li>
                                                    <li class="country">
                                                        <div class="flag-box">
                                                            <div class="flag"></div>
                                                        </div>
                                                        <span class="country-name">India (भारत)</span><span class="dial-code">+91</span>
                                                    </li>
                                                    <li class="country">
                                                        <div class="flag-box">
                                                            <div class="flag"></div>
                                                        </div>
                                                        <span class="country-name">India (भारत)</span><span class="dial-code">+91</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <input type="text" id="telefon" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="mitteilung">Mitteilung</label>
                                            <textarea name="" id="mitteilung" cols="30" rows="3" class="form-control">

                                    </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <hr>
                                    </div>
                                    <div class="col-12 clearfix">
                                        <button class="btn float-left" type="submit">Zurück</button>
                                        <button class="btn float-right" type="submit">WEITER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="stylish">- oder -</h2>
            <h2>als Erlebnisgutschein verschenken</h2>
            <div class="vouchersContainer">
                <div class="row">
                    <div class="col-md-5 col-lg-4 ml-auto">
                        <div class="hoverZoom">
                            <a href="">
                                <div class="img">
                                    <div class="img_back" id="ek"></div>
                                    <div class="img_content">
                                        <p>24,90 € inkl. MwSt</p>
                                        <input type="button" class="btn" value="In den Warenkorb">
                                    </div>
                                </div>
                                <h3>Digitaler Gutschein</h3>
                                <p>per Email</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4 mr-auto">
                        <div class="hoverZoom">
                            <a href="">
                                <div class="img">
                                    <div class="img_back" id="ek"></div>
                                    <div class="img_content">
                                        <p>24,90 € inkl. MwSt</p>
                                        <input type="button" class="btn" value="In den Warenkorb">
                                    </div>
                                </div>
                                <h3>Digitaler Gutschein</h3>
                                <p>per Email</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="disclaimerSection">
                <h3>Teilnehmer</h3>
                <p>Für unseren Standort in Hannover-Limmer ist die Teilnehmerzahl auf 24 Personen begrenzt, die Mindesteilnehmerzahl liegt bei 12 Personen. Wir bitten um Verständnis, dass der Kurs aus organisatorischen Gründen nicht stattfinden kann, wenn die Mindesteilnehmerzahl nicht erreicht wird. In diesem Fall finden wir für Sie einen alternativen Termin und setzen uns mit Ihnen in Verbindung.</p>
                <h3>Bitte beachten Sie folgende Regelung zu Stornierungen:</h3>
                <p>Aufgrund der geringen Teilnehmerzahl und der hohen Nachfrage nach den Seminaren sind wir auf eine verbindliche Zusage angewiesen. Sie können innerhalb der nächsten 14 Tage von dieser Vereinbarung zurücktreten. Bis vier Wochen vor Veranstaltungsbeginn entfallen die Gebühren / bekommen Sie den Betrag zurückerstattet. Bei einer Stornierung ab 14 Werktagen vor Veranstaltungsbeginn fallen noch 50% der Rechnungssumme an / erstatten wir noch 50% der Rechnungssumme zurück. Sollte keine oder eine sehr kurzfristige Absage erfolgen muss der komplette Rechnungsbetrag erstattet werden / erhalten Sie keine Rückerstattung.</p>
            </div>
        </div>
    </section>
    <!--bookingSection ended.-->
    <!--eventDescriptionSection started.-->
    <div id="eventDescriptionSection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Über unsere Genussreisen</h2>
                    <div id="factsSection">
                        <h3>Fakten</h3>
                        <div class="factBox">
                            <a href="">
                                <div class="hoverZoom">
                                    <img src="images/datum.png" alt="">
                                    <h3>Termine</h3>
                                    <p> jeden ersten Samstag im Monat sowie an Zusatzterminen </p>
                                </div>
                            </a>
                        </div>
                        <div class="factBox">
                            <a href="">
                                <div class="hoverZoom">
                                    <img src="images/datum.png" alt="">
                                    <h3>Termine</h3>
                                    <p> jeden ersten Samstag im Monat sowie an Zusatzterminen </p>
                                </div>
                            </a>
                        </div>
                        <div class="factBox">
                            <a href="">
                                <div class="hoverZoom">
                                    <img src="images/datum.png" alt="">
                                    <h3>Termine</h3>
                                    <p> jeden ersten Samstag im Monat sowie an Zusatzterminen </p>
                                </div>
                            </a>
                        </div>
                        <div class="factBox">
                            <a href="">
                                <div class="hoverZoom">
                                    <img src="images/datum.png" alt="">
                                    <h3>Termine</h3>
                                    <p> jeden ersten Samstag im Monat sowie an Zusatzterminen </p>
                                </div>
                            </a>
                        </div>
                        <div class="factBox">
                            <a href="">
                                <div class="hoverZoom">
                                    <img src="images/datum.png" alt="">
                                    <h3>Termine</h3>
                                    <p> jeden ersten Samstag im Monat sowie an Zusatzterminen </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="zusatzInfoSection">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="zusatzinfoText">
                                    <h3>Erleben Sie Kaffee</h3>
                                    <p>Tauchen Sie ein in die vielfältige Welt des Kaffees: Gemeinsam erleben wir bei einer guten Tasse Kaffee und in angenehmer Atmosphäre die Geheimnisse und Wunder unseres Lieblingsgetränks. Lauschen Sie den Geschichten über die Entstehung des Kaffees und seiner Entwicklung über die Jahrhunderte und erfahren Sie alles über den Anbau und die Ernte der besonderen Pflanze.<br>Schmecken Sie die feinen Unterschiede zwischen den Kaffeevarietäten und lassen sich vom Aroma verzaubern.<br>Beim spektakulären Showrösten über offenem Feuer erleben Sie live und mit allen Sinnen, wie aus dem grünlichen Samen der Kaffeepflanze das beliebteste Getränk der Deutschen wird. </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="images/angle-images.png" class="d-block ml-auto" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="courseContent">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/course-image.png" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="courseContentText">
                                    <h3>Inhalte</h3>
                                    <p class="text-justify">Wir entführen Sie auf kulinarische Genussreise durch die aufregende Welt des Kaffees. <br>Angefangen bei der Legende über die Entdeckung des Kaffees als Genussmittel erfahren Sie alles über den Weg der Kaffeebohne vom Strauch in die Tasse.</p>
                                    <h4>Programmpunkte und Inhalte:</h4>
                                    <ul>
                                        <li>Einführung in die Geschichte des Kaffees</li>
                                        <li>Erntemethoden</li>
                                        <li>Aufbereitungsmethoden im Ursprungsland</li>
                                        <li>Pflanzenarten (Arabica, Robusta)</li>
                                        <li>Die ideale Lagerung ihres Röstkaffees</li>
                                        <li>Verkostung verschiedener Kaffees</li>
                                        <li>Showrösten am kleinen Handröster über offener Flamme</li>
                                        <li>Tipps und Tricks für die Kaffeezubereitung zuhause</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--eventDescriptionSection ended.-->
    <div id="bookingReference">
        <div class="container">
            <div class="text-center"><a href="#bookingSection" class="btn-white animate-panel">Direkt buchen</a></div>
        </div>
    </div>
    <!--footer started.-->
    <?php require_once("include/footer.php") ?>
</body>

</html>

<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "buchungstool";
    require_once("public/include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <div class="agBanner">
        <div></div>
    </div>
    <!--    bookly form started.-->
    <section class="bookly-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Buchungstool</h1>
                    <p class="description">(Buchung kostenlos mit gültigem Gutschein, einlösbar im Bezahlvorgang)</p>
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
    </section>
    <!--    bookly form ended.-->
    <!--   footer started.-->
    <?php require_once("public/include/footer.php") ?>
    <script>
        $(document).ready(function() {
            $(".booked").each(function() {
                $(this).attr("disabled", "disabled");
                $(this).find("span.time-additional").html("");
            })
            $(".selected_flag").click(function() {
                $("ul#country-list").css("display", "");
            })
            $("ul#country-list li").each(function() {
                $(this).click(function() {
                    $(this).parent().css("display", "none");
                })
            })
        })
    </script>
</body>

</html>

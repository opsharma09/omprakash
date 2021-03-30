<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "genussreise";
    require_once("public/include/head.php")?>
    <link href="//db.onlinewebfonts.com/c/0801c08e5412f54e4b4e9ad146d83a12?family=Ink+Free" rel="stylesheet" type="text/css" />
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--pageBanner started.-->
    <!-- <?php var_dump($this->session->userdata('user'))?> -->
    <div id="pageBanner">
        <div id="pageBannerContent">
            <div id="pageBannerContentInner">
                <a href="#bookingSection" class="animate-panel">
                    <div class="hoverZoom">
                        <h2>Genussreisen erleben</h2>
                        <img src="<?=base_url()?>public/images/test-white.png" alt="">
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
                                <div class="step-box zeit">
                                    <p>2. Zeit</p>
                                    <div class="step"></div>
                                </div>
                                <div class="step-box details">
                                    <p>3. Details</p>
                                    <div class="step"></div>
                                </div>
                                <div class="step-box beendat">
                                    <p>4. Beendat</p>
                                    <div class="step"></div>
                                </div>
                            </div>
                            <form method="post" action="<?=base_url('events/save_events')?>">
                                <div class="bookly-form-box step1">
                                    <p><b>Bitte wählen Sie einen Service: </b></p>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="dienstleistung">Dienstleistung</label>
                                                <select name="" id="dienstleistung" class="form-control">
                                                    <option value="">Wählen Sie den Service</option>
                                                    <?php foreach ($event_type as $key => $event) {?>
                                                        <option value="<?=$event['id']?>" <?php if($key ==0){ echo'selected';}?>><?=$event['name']?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="personenanzahl">Personenanzahl</label>
                                                <select name="" id="personenanzahl" class="form-control">
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-12 clearfix">
                                            <button class="btn float-right" type="button" id="weiter1">WEITER</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="bookly-form-box step2">
                                    <p>Hier finden Sie eine Liste der verfügbaren Zeiten für die Veranstaltung "<b class="event_type_name">Baristakurs</b>".<br>Klicken Sie auf eine Zeit für die Buchung.</p>
                                    <div class="bookly-time-step" id="event_master_div">
                                            <!-- <?php foreach($event_master as $key=> $em){?> -->
                                         <!-- <div class="column">
                                            <div class="date"><?=date('D', strtotime($em['start_date']))?>,<?=date('M', strtotime($em['start_date']))?> <?=date('d', strtotime($em['start_date']))?></div>
                                            <button type="button" class="bookly-hour clearfix <?php if($em['day'] <=0){ echo 'booked';}?> weiter2" <?php if($em['day'] <=0){ echo 'disabled';}?> data-person="<?=$em['day']?>" data-time="<?=date('h:i', strtotime($em['start_time']))?>" data-date="<?=$em['start_date']?>" data-price="<?=$em['price']?>" data-event_id="<?=$em['id']?>" ><span class="bookly-time-main"><i><span></span></i> <?=date('h:i', strtotime($em['start_time']))?></span> <span class="time-additional"><?=$em['day']?></span></button >
                                        </div> -->
                                        <!-- <?php } ?> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <hr>
                                        </div>
                                        <div class="col-12 clearfix">
                                            <button class="btn float-left" type="submit">Zurück</button>
                                            <!-- <button class="btn float-right" type="submit">WEITER</button> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="bookly-form-box step3">
                                    <p>Sie wählten eine Reservierung von <b class="event_type_name">Baristakurs</b> mit <b id="event_type_name2">HKM - Baristakurs</b> in der Zeit <b id="event_time">13:30</b> Uhr am <b id="event_date">27. September 2020</b>. Das Entgelt für den Service beträgt <b id="event_price">€99,00</b>.<br>Bitte tragen Sie Ihre Angaben in das Formular unten ein, um mit der Buchung fortzufahren.</p>
                                    <input type="hidden" name="event_id" id="event_id">
                                    <input type="hidden" name="price" id="price">
                                    <input type="hidden" name="person" id="person">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="name">Vorname</label>
                                                <input type="text" id="name" class="form-control" name="first_name" value="<?php if($this->session->userdata('user')){ echo $this->session->userdata('user')->first_name; }?>" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="name">Nachname</label>
                                                <input type="text" id="name" class="form-control" name="last_name" value="<?php if($this->session->userdata('user')){ echo $this->session->userdata('user')->last_name; }?>" required="">
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
                                                <input type="text" id="telefon" class="form-control" name="phone_no" onblur="validPhone(this)" value="<?php if($this->session->userdata('user')){ echo $this->session->userdata('user')->phone_no; }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" class="form-control" name="email" value="<?php if($this->session->userdata('user')){ echo $this->session->userdata('user')->email_id; }?>" oninput="this.value = this.value.toLowerCase()" onblur="emailAlreadyExist(this)" >
                                            </div>
                                        </div>
                                        <?php if(!$this->session->userdata('user')){ ?>
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="password">Passwort</label>
                                                 <input id="password" name="password" type="password" class="form-control" placeholder="Passwort*" onkeyup="myFunction()" required>
                                            </div>
                                              <p id="password-error" class="error-alert" style="display:none">* password must be of atleast 6 characters and must 
                                            contain atleast 1 lower case character ,1 upper case
                                            character and  1 number</p>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="confirm_password">Passwort wiederholen</label>
                                                <input id="confirm_password" name="confirm_password" type="password" class="form-control" placeholder="Passwort wiederholen*" onkeyup="myFunction()" required>
                                            </div>
                                            <p id="c_password-error" class="error-alert" style="display:none">* Password and Confirm Password Not Macthed</p>
                                        </div>
                                        <?php }?>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="mitteilung">Mitteilung</label>
                                                <textarea name="" id="mitteilung" cols="30" rows="3" class="form-control" name="message">
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
                            </form>
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
                                    <img src="<?=base_url()?>public/images/datum.png" alt="">
                                    <h3>Termine</h3>
                                    <p> jeden ersten Samstag im Monat sowie an Zusatzterminen </p>
                                </div>
                            </a>
                        </div>
                        <div class="factBox">
                            <a href="">
                                <div class="hoverZoom">
                                    <img src="<?=base_url()?>public/images/datum.png" alt="">
                                    <h3>Termine</h3>
                                    <p> jeden ersten Samstag im Monat sowie an Zusatzterminen </p>
                                </div>
                            </a>
                        </div>
                        <div class="factBox">
                            <a href="">
                                <div class="hoverZoom">
                                    <img src="<?=base_url()?>public/images/datum.png" alt="">
                                    <h3>Termine</h3>
                                    <p> jeden ersten Samstag im Monat sowie an Zusatzterminen </p>
                                </div>
                            </a>
                        </div>
                        <div class="factBox">
                            <a href="">
                                <div class="hoverZoom">
                                    <img src="<?=base_url()?>public/images/datum.png" alt="">
                                    <h3>Termine</h3>
                                    <p> jeden ersten Samstag im Monat sowie an Zusatzterminen </p>
                                </div>
                            </a>
                        </div>
                        <div class="factBox">
                            <a href="">
                                <div class="hoverZoom">
                                    <img src="<?=base_url()?>public/images/datum.png" alt="">
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
                                <img src="<?=base_url()?>public/images/angle-images.png" class="d-block ml-auto" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="courseContent">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?=base_url()?>public/images/course-image.png" alt="">
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
    <?php require_once("public/include/footer.php") ?>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.step2,.step3').hide();
        var event_name ='';
        var event_type =$("#dienstleistung option:selected" ).val();
        var person =$("#personenanzahl option:selected" ).val();
        var time ='';
        var date ='';
        var price ='';
        $('#dienstleistung').on('change', function(e){ 
        event_type = $("#dienstleistung option:selected" ).val();
        var event_name = $("#dienstleistung option:selected" ).text();
        var url = '<?=base_url()?>events/getEventsDay';
         $.ajax({
              url: url,
              type: 'POST',
              data: {'event_type': event_type},
              success: function(result) {
                  $('#personenanzahl').html(result);
                  $('.event_type_name').html(event_name);
              }
          });
        });
        $('#personenanzahl').on('change', function(e){ 
            person = $("#personenanzahl option:selected" ).val();
        
        });
        $('#weiter1').on('click', function(e){ 
             e.preventDefault();
            var url = '<?=base_url()?>events/getEventsMaster';
            $.ajax({
                  url: url,
                  type: 'POST',
                  data: {'event_type': event_type,'person': person},
                  success: function(result) {
                    $('#event_master_div').html(result);
                    $('.step1').hide();
                    $('.step2').show();
                    $('.bookly-progress-tracker .zeit').addClass('active');
                }
            });
            // if(person > $('.weiter2').data('person')){
            //     $('.weiter2').addClass('booked');
            //     $('.weiter2').prop('disabled',true);
            // }
        });
        
    $('#password').keyup(function () {
                var password = $('#password').val();
                if (password.match('[a-z]')) {
                    if (password.match('[A-Z]')) {
                        if (password.match('[0-9]')) {
                            if (password.length > 5) {
                                $('#password').parent().parent().find('.error-alert').hide();
                            } else {
                                $('#password').parent().parent().find('.error-alert').show();
                            }

                        } else {
                            $('#password').parent().parent().find('.error-alert').show();
                        }
                    } else {
                        $('#password').parent().parent().find('.error-alert').show();
                    }
                } else {
                    $('#password').parent().parent().find('.error-alert').show();
                }
            });
    });

        function weiter2(per){ 
            $('.step2').hide();
            $('.step3').show();
            time = $(per).data('time');
            var event_id = $(per).data('event_id');
            date = $(per).data('date');
            price = $(per).data('price');
            $('#event_time').html(time);
            $('#event_date').html(date);
            $('#event_price').html(price);
            $('#event_type_name2').html('HKM - '+event_name);
             $('#price').val(price);
             $('#event_id').val(event_id);
             $('#person').val(person);
            $('.bookly-progress-tracker .details').addClass('active');
        }
    
    function  myFunction() {
                var password = $('#password').val();
                var confirmPassword = $('#confirm_password').val();

                if (confirmPassword != "") {
                    if (password !== confirmPassword) {
                        $('#confirm_password').parent().parent().find('.error-alert').show();
                    }else{
                        $('#confirm_password').parent().parent().find('.error-alert').hide();
                    }
                }
            }
    //validate password ends
    
    function emailAlreadyExist(email) {
        var emial = $(email).val();
        var emialer = emial.toLowerCase(); 
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(emialer)) {
            $(email).parent().parent().find('.validEmail').hide();
            var userName = emialer;
            flag = false;
            $(".userEmail").hide();
            if (userName != "") {
                $.get("<?= base_url() ?>register/emailIdAlreadyExist",
                        {
                            userName: userName
                        },
                        function (data, status) {
                            userData = JSON.parse(data);console.log(userData[0])
                            if (userData[0]) {
                                $(".userEmail").show();
                            } else {
                                flag = true;
                                $(".userEmail").hide();
                            }
                        });

            }

        }
        else { 
            $(".userEmail").hide();
            $(email).parent().parent().find('.validEmail').show();
            $(".loader-image").hide();
            return false;
        }
    
    }
    
    //name validation start
    function validName(name){
        var namee = $(name).val();
        var nameFilter = /^[a-zA-Z ]*$/;
        if (nameFilter.test(namee)) {
            $(name).parent().parent().find('.error-alert').hide();
        }
        else{
            $(name).parent().parent().find('.error-alert').show();
        }
    }
    //name validatikon ends 
    
     //phone number validation start
    function validPhone(phone){ 
        var phonee= $(phone).val();
        var phoneFilter = /[0-9]{10}/ ; 
        if ($(phone).val().length != 10){
            $(phone).parent().parent().find('.error-alert').show();
        }
        else{
                if(phoneFilter.test(phonee)){ 
                    $(phone).parent().parent().find('.error-alert').hide();
                }
                else{
                    $(phone).parent().parent().find('.error-alert').show();
                }
            }
    }
  </script>
</body>

</html>

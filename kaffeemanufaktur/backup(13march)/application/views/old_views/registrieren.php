<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "registrieren";
    require_once("public/include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--upperSection started.-->
    <div id="upperSection">
        <div id="upperSectionContent">
            <div id="upperSectionContentInner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 d-none d-lg-block">
                            <div id="upperSectionLeft">
                                <div id="plant"></div>
                                <div id="man"></div>
                                <div class="fit">
                                    <div class="speechBubbleOuter">
                                        <p>Bald bieten wir auch einen exklusiven VIP-Zugang für unsere HKM Coffee Club Mitglieder an. Schauen Sie einfach hin und wieder vorbei.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h2 id="form-title">Registrieren</h2>
                            <form action="register" class="registration" method="post" >
                                <div class="form-row">
                                    <div class="col-12 mb-3">
                                        <div class="custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" class="custom-control-input" id="firma" onclick='changeOption("firma")' name="firma" >
                                            <label class="custom-control-label" for="firma">Firma</label>
                                        </div>
                                        <div class="custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" class="custom-control-input" id="privat" onclick='changeOption("privat")' name="privat">
                                            <label class="custom-control-label" for="privat">Privat</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Vorname*" onblur = "validName(this)" required>
                                        </div>
                                        <p id="first-error" class="error-alert" style="display:none">* Please Enter a valid name with letters between 3 to 20</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="lastname" name="lastname" type="text" class="form-control" placeholder="Nachname*" onblur = "validName(this)" required>
                                        </div>
                                        <p id="last-error" class="error-alert" style="display:none">* Please Enter a valid name with letters between 3 to 20</p>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="password" name="password" type="password" class="form-control" placeholder="Passwort*" onkeyup="myFunction()" required>
                                        </div>
                                        <p id="password-error" class="error-alert" style="display:none">* password must be of atleast 6 characters and must 
                                                contain atleast 1 lower case character ,1 upper case
                                                character and  1 number</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="email" name="email" type="text" class="form-control" placeholder="E-Mail*" style="text-transform: lowercase" oninput="this.value = this.value.toLowerCase()" onblur="emailAlreadyExist(this)" required>
                                        </div>
                                        <p  class="error-alert validEmail" style="display:none">* Enter a Valid Email Id</p>
                                        <p  class="error-alert userEmail" style="display:none">* Email Id Already Exist</p>
                                        <p id="email-error" class="error-alert requiredEmail" style="display:none">* Email Id is required</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="confirm_password" name="confirm_password" type="password" class="form-control" placeholder="Passwort wiederholen*" onkeyup="myFunction()" required>
                                        </div>
                                        <p id="c_password-error" class="error-alert" style="display:none">* Password and Confirm Password Not Macthed</p>
                                    </div>
<!--                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Branche*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Branche*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Branche*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Branche*">
                                        </div>
                                    </div>-->
                                    <div class="col-md-6 mb-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="habes" name="habes" >
                                            <label class="custom-control-label" for="habes">Ich habe die <a href="/agb">allgemeinen Geschäftsbedingungen</a>  gelesen und bin mit diesen einverstanden</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="address" name="address" type="text" class="form-control" placeholder="Adresse*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                         <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="habe" name="habe" >
                                            <label class="custom-control-label" for="habe">Ich habe die <a href="/agb">Datenschutzerklärung</a>  gelesen und bin mit dieser einverstanden</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group postcode">
                                            <input id="isd" name="isd" type="text" class="form-control" placeholder="ISD*" required>
                                        </div>
                                        <div class="form-group place">
                                            <input id="number" name="number" type="text" class="form-control" placeholder="Kontakt Nummer*" onblur="validPhone(this)" required>
                                        </div>
                                        <p id="contact-error" class="error-alert" style="display:none">Please enter a valid phone number with 10 digits</p>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                       <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ich" name="ich" >
                                            <label class="custom-control-label" for="ich">Ich möchte über interessante Neuerungen informiert werden..</label>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
<!--                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Branche*">
                                        </div>-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="submit" class="form-control" value="Register">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottomLine1"></div>
        <div class="bottomLine2"></div>
    </div>
    <!--upperSection ended.-->
<!--lowerSection started.-->
<div id="lowerSection">
    <div class="container">
        <h2>Ihre Vorteile</h2>
        <div class="row">
            <div class="col-md-6">
                <h3>Privat</h3>
                <ul>
                    <li>Praktische Übersicht über vergangene Bestellungen</li>
                    <li>Einfache Nachbestellung</li>
                    <li>Einsicht aller Rechnungen</li>
                    <li>Einfache Änderung der Kontaktdaten</li>
<!--                    <li>Praktische Übersicht über vergangene Bestellungen</li>
                    <li>Praktische Übersicht über vergangene Bestellungen</li>
                    <li>Praktische Übersicht über vergangene Bestellungen</li>
                    <li>Praktische Übersicht über vergangene Bestellungen</li>
                    <li>Praktische Übersicht über vergangene Bestellungen</li>
                    <li>Praktische Übersicht über vergangene Bestellungen</li>
                    <li>Praktische Übersicht über vergangene Bestellungen</li>-->
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Firma</h3>
                <ul>
                    <li>Praktische Übersicht über vergangene Bestellungen</li>
                    <li>Es werden nur die freigeschalteten Produkte angezeigt</li>
                    <li>Kauf auf Rechnung</li>
                    <li>Ersparnisse im Vergleich zu telefonischer Bestellung</li>
                    <li>Zugriff auf exklusive Produkte für Unternehmen und Gastronomie</li>
<!--                    <li>Praktische Übersicht über vergangene Bestellungen</li>
                    <li>Praktische Übersicht über vergangene Bestellungen</li>
                    <li>Praktische Übersicht über vergangene Bestellungen</li>
                    <li>Praktische Übersicht über vergangene Bestellungen</li>
                    <li>Praktische Übersicht über vergangene Bestellungen</li>
                    <li>Praktische Übersicht über vergangene Bestellungen</li>-->
                </ul>
            </div>
        </div>
    </div>
</div>
<!--lowerSection ended.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
    
    
    <script>
        //validate password starts
    
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
    //phone number validation ends 
    
    function changeOption(e){
        if(e=='privat'){
            $("#firma").prop("checked", false);
        }
        
        if(e=="firma"){
            $("#privat").prop("checked", false);
        }
    }
    </script>
</body>

</html>

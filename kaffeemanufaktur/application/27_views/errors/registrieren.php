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
                            <form action="register" class="registration" method="post" id="registration_form" >
                                <div class="form-row">
                                    <!-- <div class="col-12 mb-3">
                                        <div class="custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" class="custom-control-input" id="firma" onclick='changeOption("firma")' name="firma" >
                                            <label class="custom-control-label" for="firma">Firma</label>
                                        </div>
                                        <div class="custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" class="custom-control-input" id="privat" onclick='changeOption("privat")' name="privat">
                                            <label class="custom-control-label" for="privat">Privat</label>
                                        </div>
                                    </div> -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Vorname*"  required>
                                        </div>
                                        <p id="first-error" class="error-alert" style="display:none">* Please Enter a valid name with letters between 3 to 20</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="lastname" name="lastname" type="text" class="form-control" placeholder="Nachname*" required>
                                        </div>
                                        <p id="last-error" class="error-alert" style="display:none">* Please Enter a valid name with letters between 3 to 20</p>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="password" name="password" type="password" class="form-control" placeholder="Passwort*" required>
                                        </div>
                                        <p id="password-error" class="error-alert" style="display:none">* password must be of atleast 6 characters and must 
                                                contain atleast 1 lower case character ,1 upper case
                                                character and  1 number</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="email" name="email" type="text" class="form-control" placeholder="E-Mail*" style="text-transform: lowercase" oninput="this.value = this.value.toLowerCase()" required>
                                        </div>
                                        <p  class="error-alert validEmail" style="display:none">* Enter a Valid Email Id</p>
                                        <p  class="error-alert userEmail" style="display:none">* Email Id Already Exist</p>
                                        <p id="email-error" class="error-alert requiredEmail" style="display:none">* Email Id is required</p>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="confirm_password" name="confirm_password" type="password" class="form-control" placeholder="Passwort wiederholen*" required>
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
                                            <input type="checkbox" class="custom-control-input check3" id="habes" name="habes" >
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
                                            <input id="pnumber" name="number" type="text" class="form-control" placeholder="Kontakt Nummer*" required>
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
                                            <input type="button" onclick="validate()" class="form-control" value="Register" id="register_butt">
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
    function validate(){
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var password = $('#password').val();
        var confirm_password = $('#confirm_password').val();
        var testcheck = $('#habes').is(":checked");
        var pnumber = $('#pnumber').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var attributes1 = false;

        alert(isEmailExist(email));
return false;

        if(firstname == ''){
            alert('First name is required.');
            return false;
        } else if(lastname == ''){
            alert('Last name is required.');
            return false;
        } else if(password == ''){
            alert('Password is required.');
            return false;
        } else if(email == ''){
            alert('Email is required.');
            return false;
        } else if(!isEmail(email)){
            alert('Please enter correct email id.');
            return false;
        } else if(isEmailExist(email)){
            alert(isEmailExist(email));
            alert('"'+email+'"'+ 'This email id already exist');
            return false;
        }  else if(!isPassword(password)){
            alert('Please enter password in correct format');
            return false;
        } else if(confirm_password == ''){
            alert('Confirm is required.');
            return false;
        } else if(pnumber == ''){
            alert('Phone is required.');
            return false;
        } else if(address == ''){
            alert('Address is required.');
            return false;
        } else if(password != confirm_password){
            alert('Password and confirm password must be same.');
            return false;
        } else if(!testcheck){
            alert("Please accept terms and condition.");
        }else{
            alert('ok');
        // $( "#registration_form" ).submit();
        }
        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
             return regex.test(email);
        }
        function isEmailExist(email) {
            
            var emial = email;
            var emialer = emial.toLowerCase();

            $.ajax({
                type: "get",
                url: "<?= base_url() ?>register/emailIdAlreadyExist/"+userName,
                // userName: emialer,
                success: function(response) {
                    alert(response);
                    response = $.trim(response);
                    if(response == "ok")
                    {
                        return true;
                    }
                    return false;
                }
            });





/*
            var attributes1= false;
                        // $(email).parent().parent().find('.validEmail').hide();
            var userName = emialer;
            $(".userEmail").hide();
            $.get("<?= base_url() ?>register/emailIdAlreadyExist",
            {
                userName: userName
            },
            function (data, status) {
                console.log(data);
                data = $.trim(data);
                if (data == 'ok') {
                    // alert('okkkl');
                    attributes1 = true;
                    $(".userEmail").show();
                }
                return attributes1;
            });
            // alert("out--"+attributes1);
            */
           
        }
        function isPassword(password) {
           var  attributes = false;
            $('#password').parent().parent().find('.error-alert').hide();
            if (password.match('[a-z]') && password.match('[A-Z]') && password.match('[0-9]') && password.length > 5) {
                attributes = true;
               
           } else{
            $('#password').parent().parent().find('.error-alert').show();
             attributes = false;
           }
           return attributes;
        }
        
    }

   
    </script>
</body>

</html>

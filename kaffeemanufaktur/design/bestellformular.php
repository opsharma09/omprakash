<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
        $title = "Koffee.com";
        $style_name = "bestellformular";
        require_once("include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <div id="agbanner">
        <div id="agbBannerBottomDeco"></div>
    </div>
    <div class="has_content">
        <div class="container">
            <div class="row">
                <div class="col-md-7 m-auto">
                    <div class="blocked_content text-center">
                        <p>Diese Seite steht leider nur unseren angemeldeten Firmenkunden zur Verfügung.</p>
                        <h5>Ich bin Privatkunde oder möchte Privatkunde werden:</h5>
                        <p>Bitte besuchen Sie direkt unseren <a href="/kaffee-online-kaufen">Privatkunden-Shop</a></p>
                        <h5>Ich bin bereits Firmenkunde:</h5>
                        <p>Bitte melden Sie sich zunächst <a href="/mein-account">hier</a> an</p>
                        <h5>Ich möchte Firmenkunde werden:</h5>
                        <p>Bitte registrieren sie sich <a href="/registrieren">hier</a>.<br>
                            Unser <a href="/kontakt">Kundenservice</a> berät Sie gerne über Firmenkundenkonditionen und Registrierungsprozess.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer started.-->
    <?php require_once("include/footer.php") ?>
</body>

</html>

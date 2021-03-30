<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "versand";
    require_once("include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <div id="shippingBanner">
        <div class="shippingBannerBottomDeco"></div>
    </div>
    <div class="para_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Versand und Lieferung</h2>
                    <br>
                    <h3>Versandbedingungen</h3>
                    <p>Die Lieferung erfolgt in Deutschland und in sämtliche Länder der EU.</p>
                    <h3>Versandkosten (inklusive gesetzliche Mehrwertsteuer)</h3>
                    <p>Für die Versandart "Standardversand" berechnen wir die Versandkosten pro Bestellung pauschal nach folgender Tabelle:</p>
                    <table>
                        <thead>
                            <tr>
                                <td>Zone</td>
                                <td>Versandkosten (Brief)</td>
                                <td>Versandkosten (Paket)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1*</td>
                                <td>1,95€</td>
                                <td>3,90€</td>
                            </tr>
                            <tr>
                                <td>2**</td>
                                <td>2,90€</td>
                                <td>9,90€</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Ab einem Bestellwert von 30,00€ inkl. MwSt. erfolgt der Versand kostenfrei.</p>
                    <p><small>*Länder der Zone 1: Deutschland mit Ausnahme der Insel Helgoland sowie des Gebiets von Büsingen.</small></p>
                    <p><small>**Länder der Zone 2: Belgien, Bulgarien, Tschechische Republik, Dänemark mit Ausnahme der Färöer und Grönlands, Estland, Irland, Griechenland, Spanien mit Ausnahme von Ceuta und Melilla, Frankreich mit Ausnahme von Neukaledonien, Saint-Pierre und Miquelon, Wallis und Futuna, Französisch-Polynesien und den Französischen Süd- und Antarktisgebieten, Italien, Zypern, Lettland, Litauen, Luxemburg, Ungarn, Malta, Niederlande, Österreich, Polen, Portugal, Rumänien, Slowenien, Slowakische Republik, Finnland, Schweden, Kroatien.</small></p>
                    <br>
                    <h3>Lieferfristen</h3>
                    <p>Soweit im jeweiligen Angebot keine andere Frist angegeben ist, erfolgt die Lieferung der Ware im Inland (Deutschland) innerhalb von 3-4 Tagen, bei Auslandslieferungen innerhalb von 2-14 Tagen nach Vertragsschluss (bei vereinbarter Vorauszahlung nach dem Zeitpunkt Ihrer Zahlungsanweisung). Beachten Sie, dass an Sonn- und Feiertagen keine Zustellung erfolgt.<br><br>Haben Sie Artikel mit unterschiedlichen Lieferzeiten bestellt, versenden wir die Ware in einer gemeinsamen Sendung, sofern wir keine abweichenden Vereinbarungen mit Ihnen getroffen haben. Die Lieferzeit bestimmt sich in diesem Fall nach dem Artikel mit der längsten Lieferzeit den Sie bestellt haben.</p>
                    <p>	Bei Fragen finden Sie unsere Kontaktdaten im Impressum.</p>
                </div>
            </div>
        </div>
    </div>
    <!--   footer started.-->
    <?php require_once("include/footer.php") ?>
</body>

</html>

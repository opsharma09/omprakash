<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php
        $title = "Koffee.com";
        $style_name = "product";
        require_once("include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--singleProductCoffeeIntroSection started.-->
    <div id="singleProductCoffeeIntroSection" class="singleProductIntroSection packshotAnimationReferenceContainer">
        <div class="singleProductV2Background">
            <div style="background-image: url('images/latte2HD.jpg'); filter: blur(0px);" class="backgroundBlur"></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 text-center order-md-last order-lg-first">
                    <div class="brandContainer">Hannoversche Kaffeemanufaktur</div>
                    <h2>LatteGlas Gold 2.0</h2>
                </div>
            </div>
        </div>
    </div>
    <!--singleProductCoffeeIntroSection ended.-->
    <!--helperBox started.-->
    <div id="helperBox">
        <div class="buylabel">
            <div class="buyLabelInner">BESTELLEN</div>
        </div>
        <div class="product_selector_inner">
            <form action="">
                <div class="form-row">
                    <!--
                        <div class="col-12 back">
                            <label for="menge">Filtergröße</label>
                            <select name="" id="menge" class="form-control">
                                <option value="" disabled selected>Wählen Sie eine Option</option>
                                <option value="">0,9 Liter</option>
                            </select>
                        </div>
                        -->
                    <div class="col-12 back">
                        <label for="mahlgrad">Produktset</label>
                        <select name="" id="mahlgrad" class="form-control">
                            <option value="" disabled selected>2 Glaster</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="single_variable_wrap">
                            <div class="quantityWrapper">
                                <label for="anzahl">Anzahl:</label>
                                <input type="number" class="form-control" value="1" id="anzahl">
                            </div>
                            <div class="customPriceTag">
                                <p>19,90 €</p>
                            </div>
                            <div class="customAddToCartButtonWrapper">
                                <button class="btn"><span class="fa fa-shopping-cart"></span> In den Warenkorb</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="payment-gateway text-center">
                <div class="payment d-inline-block">
                    <img src="images/paypal-min.svg" alt="">
                    <img src="images/paypal.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--helperBox ended.-->
    <!--singleProductV2Content started.-->
    <div id="singleProductV2Content">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><img src="images/Comandante.png" alt=""></div>
                <div class="col-md-9">
                    <div class="productDescText">
                        <div class="productDescV2FullLine">Die Comandante® C40 wurde von erfahrenen Kaffeetechnikern und Ingenieuren mit dem Ziel entwickelt, ein zuverlässiges und möglichst präzises Mahlergebnis für verschiedene Brühmethoden sicherzustellen. Sie ist ein solides Werkzeug und wird Sie lange durch Ihr Leben begleiten.</div>
                        <div class="productDescV2TextRow">
                            <h2>Das besondere Mahlwerk "Nitro Blade"</h2>
                            Für unsere Kaffeemühlen entwickeln wir Mahlwerke aus hochwertigen Materialien und mit speziellen Mahlwerksgeometrien. NITRO BLADE® ist das ultimative Mahlwerk für Specialty-Coffee-Enthusiasten. Es wurde speziell für handbetriebene und staubarme Vermahlung entwickelt. Die Mahlwerksgeometrie von NITRO BLADE® wurde über Jahre optimiert und liefert in der heutigen Ausführung überragende Mahlergebnisse für einen breiten Zubereitungsbereich. Für NITRO BLADE® verwenden wir einen patentierten Sonder-Edelstahl der für extrem scharfe und haltbare Schneidewerkzeuge entwickelt wurde. Die martensitische Kristallstruktur in diesem Stahl ist außergewöhnlich fein-strukturiert und die hohen Legierungsanteile von Chrom, Vanadium und Molybdän machen diesen Edelstahl robust und korrosionsbeständig. Außerdem bewirken die eingelagerten Mikrokarbide eine gute Kanten-Schärfe und eine sehr hohe Schneidestabilität. Es ist daher Vorsicht geboten, wenn sie direkt mit den Mahlwerkszähnen und aufgeschliffenen Mikroschneiden am Ring oder am Konus in Berührung kommen.
                        </div>
                        <div class="productDescV2TextRow">
                            <h2>Chemisch neutrales und rostfreies Mahlwerk</h2>
                            Beim modernen, relativ hell gerösteten Hochland-Arabika entstehen beim Rösten wertvolle Maillard-Produkte. Das sind hochwertige Kaffee-Öle und empfindliche, feine Säuren die wunderbare Geschmackserlebnisse in der aufgebrühten Tasse ergeben. Herkömmliche Mahlwerke können das sensorische Ergebnis sehr schnell durch frühzeitige Oxidation und Reaktion beim Mahlvorgang trüben oder verfälschen. Der Sonderedelstahl der NITRO BLADE® besitzt aufgrund seiner patentierten Herstellung und Legierung eine chemisch hoch-neutrale Oberfläche und stellt somit beim Mahlvorgang eine sensorische Neutralität gegenüber besonders "fruchtigem" Spitzen-Arabika sicher. Experten empfinden die resultierende "Tasse" feiner gezeichnet, klarer und lebendiger.
                        </div>
                        <div class="productDescV2TextRow">
                            <h2>Edelstahlachse mit zwei rostfreien Kugellagern</h2>
                            Bei einer Handmühle spielen Details und kleine Komponenten eine große Rolle. So ist beispielsweise nicht jeder von Hause aus mit übermäßig viel Muskelkraft ausgestattet. Deshalb war es uns wichtig, dass alles an unseren Kaffeemühlen leichtgängig und möglichst reibungsarm funktioniert. Die Mittel-Achse unserer Comandante® C40 ist aus Edelstahl hergestellt. Sie wird mit von 2 Edelstahlkugellagern geführt und dreht sich deshalb extrem leicht. Beide Kugellager sind mit einer Gummidichtung versehen und daher vor Kaffeestaub gut geschützt. Die gesamte Mechanik und Ergonomie, vom Holzknauf über Kurbelstange und Achse bis hin zum Mahlwerk wurden von uns mehrfach optimiert und stellen eine fließende Kraftübertragung beim Mahlvorgang sicher. Der aus Edelstahl bestehenden Kurbel wurde die transparente Kunststoffscheibe satt passend aufgepresst, welche mit etwas Kraftaufwand auch gerne ein wenig justiert werden kann.
                        </div>
                        <div class="productDescV2TextRow">
                            <h2>Natürliches Holz – 100% Eiche</h2>
                            Der Kurbelknauf der Comandante® C40 wird im Schwarzwald hergestellt und besteht aus massivem Eichenholz. Jeder Holzknauf zeigt seine ganz eigene, natürlich schöne Maserung - ein solides Stück Natur. Da sich im Innern ein Druckknopf befindet, können Sie den Holzknauf mit etwas Kraft abziehen und wieder drauf drücken. Die Größe und Form des Holzkaufs haben wir so ausgelegt, dass er gut in der Hand liegt und die Kraftübertragung beim Mahlvorgang perfekt unterstützt. Bitte bedenken Sie, dass natürliches Holz mit der Zeit seine Farbe verändern kann. Wenn Sie Holzoberflächen ständig der direkten Sonne aussetzen, kann die natürliche Holzfarbe etwas ausbleichen. Kenner schätzen diesen Vintage-Look von natürlich gealtertem, Holz. Wenn Sie die Holzoberflächen einmal im Jahr mit Hartwachs-Öl einpflegen werden Sie noch lange Freude an Ihrer Mühle haben.
                        </div>
                        <div class="productDescV2TextRow">
                            <h2>Glasbehälter mit Deckel</h2>
                            Der Glasbehälter besitzt ein Fassungsvermögen von 40 Gramm Kaffee. Damit lassen sich ca. 4 bis 5 Tassen Kaffee aufbrühen. Wir verwenden Glas, weil es ein perfektes Aufbewahrungsmedium ist und es sich leicht mit heißem Wasser reinigen lässt. Sie erhalten zwei Glasbehältnisse – eines in Weißglasoptik und eines in Braunglasoptik. Zusätzlich bekommen Sie für das zweite Glasbehältnis einen Deckel, der aus Urochem 371 besteht. Dieser Deckel ist aus erneuerbaren natürlichen Ressourcen hergestellt und ist recycelbar.
                        </div>
                        <div class="productDescV2TextRow">
                            <h2>Mahlgradversteller - Klickmechanismus</h2>
                            Unsere C40 hat eine fein abgestufte Mahlwerksverstellung, welche auch innerhalb einer Zubereitungsart einige Feinabstufungen ermöglicht. Um unkontrolliertes Verstellen während des Mahlens zu vermeiden, haben wir einen 3-fachen, satt einrastenden Klickmechanismus in den Versteller eingebaut, der das Mahlwerk sicher in Position hält. Der Versteller sitzt genau unterhalb des Mahlwerks, ist leicht zugänglich und kann mit drei Fingerspitzen per Klick genau eingestellt werden. Allerdings sollten Sie darauf achten, dass die Einstellung ohne Kaffee im Mahlwerk vorgenommen wird, da dies dann leichter von Statten geht.
                        </div>
                        <div class="productDescV2TextRow">
                            <h2>Handhabung</h2>
                            Nehmen Sie die Kurbel ab und füllen Sie die C40 mit ganzen, frisch gerösteten Kaffeebohnen. Den Mahlgrad können Sie unten mit dem dreiflügligen Mahlgradversteller einstellen. Die Mühle wird von uns mit einer Filtereinstellung von ca. 20 Klicks ausgeliefert. Die richtige Mahlgradeinstellung hängt von der Brühmethode und ganz erheblich von Ihrem individuellen Geschmack ab. Am Besten testen Sie es mit Ihrem persönlichen Lieblingskaffee und mit Ihrer bevorzugten Brühmethode ganz einfach selbst. Wenn Sie das leere Mahlwerk im Uhrzeigersinn ganz schließen und anschließend die Anzahl der Klicks beim Öffnen gegen den Uhrzeigersinn mitzählen, erreichen Sie die verschiedenen Mahlgradbereiche.
                        </div>
                        <div class="productDescV2TextRow">
                            <h2>Empfohlene Mahlgradbereiche</h2>
                            unter 8 Klicks für die Zubereitung im Ibrikf <br>
                            8 – 15 Klicks für Espresso-Zubereitungenf <br>
                            15 – 20 Klicks für Zubereitung in der Bialettif <br>
                            20 – 25 Klicks für Handfilter-Brüh-Methodenf <br>
                            25 – 30 Klicks für Aeropress &amp; French Pressf <br>
                            28+ Klicks für die Karlsbader Kanne
                        </div>
                        <div class="productDescV2TextRow">
                            <h2>Reinigung und Pflege</h2>
                            <p>Das Mahlwerk ist pflegeleicht und kann sehr einfach gereinigt werden. Lösen Sie den Mahlwerkskonus aus dem Mahlring, indem Sie den Mahlwerksversteller ganz aufdrehen und den Konus herausnehmen. Sie können die kleine Stahlfeder, die im Konus steckt mit einer drehenden Bewegung leicht herausnehmen. Der Mahlwerkskonus kann jetzt mit einer Bürste gereinigt werden. Mit einer ausrangierten Zahnbürste können Sie auch leicht die Zähne im Mahlring säubern. Bitte keine scharfen Reinigungsmittel verwenden, sondern lediglich mit einer trockenen Bürste arbeiten. Falls Sie die Mühle für Salz, Pfeffer oder andere Gewürze nutzen, können Sie das Mahlwerk auch mit lauwarmen Wasser reinigen. Bitte danach mit einem Baumwolltuch gut abwischen und einige Zeit an der Luft trocken lassen. Alle Metallteile sind aus Edelstahl und lassen sich gut reinigen. Wichtig ist, dass Sie die Metallteile zuerst trocknen lassen, bevor Sie die Mühle wieder in Gebrauch nehmen.</p>
                            <p><b>Achtung: Der Mahlring wurde werksseitig zentriert und mit Spezialschrauben fest verankert. Sie sollten den Mahlring auf keinen Fall ausbauen. Es besteht sonst die Gefahr, dass Sie die Schraubenköpfe abdrehen oder die optimale Zentrierung verlieren.</b></p>
                            <p>Alle Holzteile an der C40 können sie mit geeigneten Holzpflegemitteln pflegen. Wenn Sie Ihrer C40 etwas Gutes tun wollen, können Sie alle Stahlteile gern regelmäßig, etwa einmal im Monat mit einem leichten, feinen Maschinenöl einreiben. Dies ist nicht zwingend notwendig, aber es schadet nicht. Falls sie kein Maschinenöl zur Hand haben können Sie auch Olivenöl oder ein ähnliches natürliches Öl dazu verwenden. Gehen Sie jedoch sparsam damit um, ihr Kaffee soll ja nicht nach Olivenöl riechen oder schmecken.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--singleProductV2Content ended.-->
    <!--footer started.-->
    <?php require_once("include/footer.php") ?>
    <script>
        if ($(window).width() >= 992) {
            function form_open() {
                var single_bottom = document.querySelector("#singleProductCoffeeIntroSection").getBoundingClientRect().top;
                var hover;
                if ($("#helperBox:hover").length != 0) {
                    hover = "yes";
                } else {
                    hover = "no";
                }
                var x = $(this).scrollTop();
                if (single_bottom <= -100 && hover == "no") {
                    var width = $("#helperBox").width() - $("#helperBox .buylabel").width();
                    $("#helperBox").css("transform", "translate(" + width + "px, calc(-50% + 65px))")
                } else {
                    $("#helperBox").css("transform", "")
                }
            }
            form_open();
            $(window).scroll(form_open);
            $(window).resize(form_open);
            $("#helperBox").mouseover(function() {
                $(this).css("transform", "")
            })
            $("#helperBox").mouseout(function() {
                var width = $("#helperBox").width() - $("#helperBox .buylabel").width();
                $(this).css("transform", "translate(" + width + "px, calc(-50% + 65px))")
            })
        }

    </script>
</body>

</html>

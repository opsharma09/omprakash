<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
        $title = "Koffee.com";
        $style_name = "checkout";
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
    <!--section.checkout started.-->
    <section class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="step-nav nav-wizard">
                        <li class="active">
                            <a href="#step-address" data-href="address" class="step step-1 step-address">
                                <span class="step-number">1</span>
                                <span class="step-title">Persönliche Daten</span>
                            </a>
                        </li>
                        <li class="">
                            <a data-href="payment" class="step step-2 step-payment">
                                <span class="step-number">2</span>
                                <span class="step-title">Zahlungsart</span>
                            </a>
                        </li>
                        <li class="">
                            <a data-href="order" class="step step-3 step-order">
                                <span class="step-number">3</span>
                                <span class="step-title">Bestätigen</span>
                            </a>
                        </li>
                    </ul>
                    <form action="" class="checkout_form">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>Rechnungsdetails</h3>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="vorname*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Nachname*">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Firma">
                                </div>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="default">Land/Region auswählen&nbsp;…</option>
                                        <option value="BE">Belgien</option>
                                        <option value="BG">Bulgarien</option>
                                        <option value="DE" selected="selected">Deutschland</option>
                                        <option value="DK">Dänemark</option>
                                        <option value="EE">Estland</option>
                                        <option value="FI">Finnland</option>
                                        <option value="FR">Frankreich</option>
                                        <option value="GR">Griechenland</option>
                                        <option value="IE">Irland</option>
                                        <option value="IT">Italien</option>
                                        <option value="HR">Kroatien</option>
                                        <option value="LV">Lettland</option>
                                        <option value="LT">Litauen</option>
                                        <option value="LU">Luxemburg</option>
                                        <option value="MT">Malta</option>
                                        <option value="NL">Niederlande</option>
                                        <option value="PL">Polen</option>
                                        <option value="PT">Portugal</option>
                                        <option value="RO">Rumänien</option>
                                        <option value="SE">Schweden</option>
                                        <option value="SK">Slowakei</option>
                                        <option value="SI">Slowenien</option>
                                        <option value="ES">Spanien</option>
                                        <option value="CZ">Tschechien</option>
                                        <option value="HU">Ungarn</option>
                                        <option value="CY">Zypern</option>
                                        <option value="AT">Österreich</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Straße und Hausnummer*" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Adresszusatz*">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="PLZ*">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Ort*" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Telefon" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="E-Mail Address*" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password">Konto-Passwort erstellen *</label>
                                    <div class="input-group">
                                        <input type="text" placeholder="Passwort" class="form-control mb-0">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <button class="fa fa-eye"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3><label><input type="checkbox"> Lieferung an eine andere Adresse senden?</label></h3>
                                <div class="form-group">
                                    <label for="optional">Bestellhinweise (optional)</label>
                                    <textarea name="" placeholder="Anmerkungen zu Ihrer Bestellung, z.B. besondere Hinweise für die Lieferung." id="" rows="2" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Ihre persönlichen Daten werden dazu verwendet um Ihre Bestellung zu bearbeiten. Weitere Informationen und Details finden Sie in unseren <a href="" target="_blank">Datenschutzbestimmungen</a></label>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn-white">Weiter zu Schritt 2</button>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <form action="" class="checkout_form">
                        <h3>Zahlungsart auswählen</h3>
                        <ul class="payment_method">
                            <li>
                                <input type="radio" id="payment-sofort">
                                <label for="payment-sofort">SOFORT <img src="images/sofort.svg" alt=""></label>
                                <div class="payment_box">
                                    Am Ende des Bestellvorgangs werden Sie zur Zahlung zu SOFORT weitergeleitet.
                                </div>
                            </li>
                            <li>
                                <input type="radio" id="payment-creditcard">
                                <label for="payment-creditcard">Kreditkarte <img src="images/visa.png" alt=""> <img src="images/amex.svg" alt=""> <img src="images/mastercard.svg" alt=""></label>
                                <div class="payment_box">
                                    Per Kreditkarte bezahlen.
                                    <label for="" class="d-block">Kredit- oder Debitkarte</label>
                                    <div class="card_details">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Card Number">
                                            <div class="input-group-append">
                                                <input type="number" placeholder="MM / YY">
                                            </div>
                                            <div class="input-group-append">
                                                <input type="number" placeholder="CVV">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <input type="radio" id="payment-vorkasse">
                                <label for="payment-vorkasse">Vorkasse</label>
                                <div class="payment_box">Bitte geben Sie Ihre Bestellungsnummer im Verwendugszweck an.</div>
                            </li>
                            <li>
                                <input type="radio" id="payment-sepa">
                                <label for="payemnt-sepa">SEPA-Lastschrift <img src="images/sepa.png" alt=""></label>
                                <div class="payment_box">
                                    Wir buchen den offenen Betrag direkt von Ihrem Girokonto ab
                                    <p class="wc-stripe-sepa-mandate" style="margin-bottom:40px;">Durch die Bereitstellung Ihrer IBAN und Bestätigung dieser Bestellung, autorisieren Sie Hann.Kaffeemanufaktur und unseren Zahlungsdienstleister Stripe eine Anweisung an Ihre Bank zu senden, um Ihr Konto zu belasten. Sie haben Anspruch auf eine Rückerstattung von Ihrer Bank unter den Bedingungen und Konditionen Ihrer Vereinbarung mit Ihrer Bank. Eine Rückerstattung muss innerhalb von 8 Wochen ab dem Tag, an dem Ihr Konto belastet wurde, in Anspruch genommen werden.</p>
                                    <div class="form-group"><label for="stripe-iban-element">IBAN. <span class="required">*</span></label></div>
                                    <div class="card_details">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="DE00 0000 0000 0000 0000 00">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="step-button form-group">
                            <a href="">Zurück zu Schritt 1</a>
                            <button class="btn-white">Weiter zu Schritt 3</button>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <form action="" class="checkout_form">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Ihre Bestellung</h3>
                                <h4 class="mb-3">Rechnungsdetails</h4>
                                <address>
                                    Subhodhip Pal<br>Arabinda Pally<br>asdfsadfas<br>731204 Bolpur<br>Estland <br>testing@gmail.com
                                </address>
                                <p>
                                    <a href="">bearbeiten</a>
                                </p>
                                <h4>Zahlungsart</h4>
                                <p>Vorkasse</p>
                                <p><a href="">bearbeiten</a></p>
                            </div>
                            <div class="col-md-6">
                                <h4>Lieferadresse</h4>
                                <address class="mb-0">Entspricht der Rechnungsadresse</address>
                                <p><a href="">bearbeiten</a></p>
                            </div>
                        </div>
                        <p class="m-0"><label class="m-0"><input type="checkbox"> Ich habe die <a href="" target="_blank">Allgemeinen Geschäftsbedingungen</a>, die <a href="" target="_blank">Widerrufsbelehrung</a> und die <a href="" target="_blank">Datenschutzbestimmungen</a> gelesen und bin mit diesen einverstanden.</label></p>
                        <p class="m-0"><label class="m-0"><input type="checkbox"> Ich möchte Updates über Produkte und Promotions erhalten.</label></p>
                        <table class="shop_table" style="position: static; zoom: 1;">
                            <thead>
                                <tr>
                                    <th class="product-name">Produkt</th>
                                    <th class="product-total">Zwischensumme</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        <div class="wc-gzd-product-name-left">
                                            <img src="images/checkout.png"> </div>
                                        <div class="wc-gzd-product-name-right">96 Espresso Campione - gemahlen - Filterkaffee, 250 g Packung&nbsp; <strong class="product-quantity">× 1</strong>
                                            <p class="mb-0">Lieferzeit: 3-4 Werktage</p>
                                            <div class="wc-gzd-cart-info wc-gzd-item-desc item-desc">
                                                <p>Im Shop zum tollen Preis:96 Espresso "Campione"</p>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                    <td class="product-total">
                                        <span class="subscription-price"><span class="woocommerce-Price-amount amount"><bdi>6,96&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi></span> <span class="subscription-details"> alle 3 Wochen</span></span> </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Zwischensumme</th>
                                    <td><span class="woocommerce-Price-amount amount"><bdi>6,96&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi></span></td>
                                </tr>
                                <tr class="woocommerce-shipping-totals shipping">
                                    <th>Versand</th>
                                    <td data-title="Versand">
                                        <ul id="shipping_method" class="woocommerce-shipping-methods">
                                            <li>
                                                <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate4" value="flat_rate:4" class="shipping_method"><label for="shipping_method_0_flat_rate4">Standardversand (international): <span class="woocommerce-Price-amount amount"><bdi>9,90&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi></span></label> </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Gesamtsumme</th>
                                    <td><strong><span class="woocommerce-Price-amount amount"><bdi>16,86&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi></span></strong> <small class="includes_tax">(Enthält <span class="woocommerce-Price-amount amount">0,80&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span> MwSt. EE reduced-rate)</small></td>
                                </tr>
                                <tr class="order-tax">
                                    <th>inkl. 5 % MwSt.</th>
                                    <td data-title="inkl. 5 % MwSt."><span class="woocommerce-Price-amount amount"><bdi>0,80&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi></span></td>
                                </tr>
                                <tr class="recurring-totals">
                                    <th colspan="2" class="text-center">Wiederkehrende Beträge (Abonnement)</th>
                                </tr>
                                <tr class="cart-subtotal recurring-total">
                                    <th rowspan="1">Zwischensumme</th>
                                    <td data-title="Zwischensumme"><span class="woocommerce-Price-amount amount">6,96&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span> alle 3 Wochen</td>
                                </tr>
                                <tr class="shipping recurring-total 2020_11_13_every_3rd_week">
                                    <th>Shipping</th>
                                    <td data-title="Shipping">
                                        <ul id="shipping_method_2020_11_13_every_3rd_week">
                                            <li>
                                                <input type="radio" name="shipping_method[2020_11_13_every_3rd_week_0]" data-index="2020_11_13_every_3rd_week_0" id="shipping_method_2020_11_13_every_3rd_week_0_flat_rate4" value="flat_rate:4" class="shipping_method shipping_method_2020_11_13_every_3rd_week_0" checked="'checked'"><label for="shipping_method_2020_11_13_every_3rd_week_0_flat_rate4">Standardversand (international): <span class="woocommerce-Price-amount amount">9,90&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span> alle 3 Wochen</label> </li>
                                            <li>
                                                <input type="radio" value="flat_rate:9" class=""><label for="shipping_method_2020_11_13_every_3rd_week_0_flat_rate9">Versandkostenpauschale</label> </li>
                                        </ul>

                                    </td>
                                </tr>
                                <tr class="order-total recurring-total">
                                    <th rowspan="1">Gesamtsumme (Abonnement)</th>
                                    <td data-title="Gesamtsumme (Abonnement)"><strong><span class="woocommerce-Price-amount amount">16,86&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span></strong> alle 3 Wochen<small class="includes_tax"> (includes <span class="woocommerce-Price-amount amount">0,80&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span> MwSt. EE reduced-rate)</small>
                                        <div class="first-payment-date"><small>erstmals fällig am: 13. November 2020</small></div>
                                    </td>
                                </tr>
                                <tr class="order-tax">
                                    <th>inkl. 5 % MwSt.</th>
                                    <td data-title="inkl. 5 % MwSt."><span class="woocommerce-Price-amount amount">0,80&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="form-group"><button class="btn-white">Kostenpflichtig bestellen</button></div>
                        <div class="step-button">
                            <a href="">Zurück zu Schritt 2</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--section.checkout ended.-->
    <!--footer started.-->
    <?php require_once("include/footer.php") ?>
</body>

</html>

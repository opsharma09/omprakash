<!DOCTYPE html>
<html lang="de-DE">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
    <?php 
        $title = "Koffee.com";
        $style_name = "checkout";
        require_once("public/include/head.php")?>

</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

  <script
    src="https://www.paypal.com/sdk/js?client-id=AWzNAS4xlq7aRUK6mo4onXGhCrc6h20StiFD9fZ5jIM0WE1lKGA8K5XZ1giOVJXnGQdVWA69hihcQM-N"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <div id="agbanner">
        <div id="agbBannerBottomDeco"></div>
    </div>
   

  <!-- <script>
    paypal.Buttons().render(
 //    {
 //        env: 'sandbox',
 //        client : {
 //            sandbox: 'AWzNAS4xlq7aRUK6mo4onXGhCrc6h20StiFD9fZ5jIM0WE1lKGA8K5XZ1giOVJXnGQdVWA69hihcQM-N',
 //        },
 //        locale: 'en_us',
 //        style:{
 //         size: 'small',
 //         color: 'yellow',
 //         shape: 'pill',
 //     }
 // },
 '#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
  </script> -->
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
                    <form action="<?=base_url('home/save_address')?>" class="checkout_form" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>Rechnungsdetails</h3>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" name="first_name" placeholder="vorname*" required="">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" name="last_name" placeholder="Nachname*" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="company" placeholder="Firma">
                                </div>
                                <div class="form-group">
                                    <select name="" id="" class="js-example-basic-single" id="country" name="country" style="width:100%" >
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
                                    <input type="text" placeholder="Straße und Hausnummer*" id="street" name="street" class="form-control" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="additional_address" name="additional_address" placeholder="Adresszusatz*">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="pincode" placeholder="PLZ*" name="pincode" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Ort*" id="place" class="form-control" name="place" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Telefon" class="form-control" name="phone">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="E-Mail Address*" class="form-control" name="email" autocomplete="off" value="<?=$this->session->userdata('user')->email_id?>">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="password">Konto-Passwort erstellen *</label>
                                    <div class="input-group">
                                        <input type="password" placeholder="Passwort" class="form-control mb-0" autocomplete="off">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <button class="fa fa-eye" type="button"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-lg-6">
                                <h3><label><input type="checkbox" id="delivery_check" name="delivery_check"> Lieferung an eine andere Adresse senden?</label></h3>
                                <div id="delivery_div">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="d_first_name" placeholder="vorname*">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="d_last_name" placeholder="Nachname*">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="d_company" placeholder="Firma">
                                    </div>
                                    <div class="form-group">
                                        <select name="" id="" class="js-example-basic-single" name="d_country" style="width:100%" >
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
                                        <input type="text" placeholder="Straße und Hausnummer*" id="d_street" name="d_street" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="d_additional_address" name="d_additional_address" placeholder="Adresszusatz*">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="d_pincode" placeholder="PLZ*" name="d_pincode">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Ort*" id="d_place" class="form-control" name="d_place">
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label for="optional">Bestellhinweise (optional)</label>
                                        <textarea name="" placeholder="Anmerkungen zu Ihrer Bestellung, z.B. besondere Hinweise für die Lieferung."  name="ordering_information" id="" rows="2" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="">Ihre persönlichen Daten werden dazu verwendet um Ihre Bestellung zu bearbeiten. Weitere Informationen und Details finden Sie in unseren <a href="" target="_blank">Datenschutzbestimmungen</a></label>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn-white" type="submit">Weiter zu Schritt 2</button>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <?php if(!empty($bill_address)){ ?>
                        <form action="" class="checkout_form">
                            <h3>Zahlungsart auswählen</h3>
                             <!-- <div id="paypal-button-container"></div> -->
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
                    <?php } ?>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <?php if(!empty($bill_address)){
                     ?>
                    <form action="" class="checkout_form">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Ihre Bestellung</h3>
                                <h4 class="mb-3">Rechnungsdetails</h4>
                                <address>
                                    <?=$bill_address['first_name'].' '.$bill_address['last_name']?><br><?=$bill_address['street']?><br><?=$bill_address['additional_address']?><br><?=$bill_address['pincode'].' '.$bill_address['place']?><br><?=$bill_address['phone']?><br><?=$bill_address['email']?>
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
                                <?php if(!empty($del_address)){ ?>
                                <address>
                                    <?=$del_address['first_name'].' '.$del_address['last_name']?><br><?=$del_address['street']?><br><?=$del_address['additional_address']?><br><?=$del_address['pincode'].' '.$del_address['place']?>
                                </address>
                            <?php } ?>
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
                            <?php  $totalPrice = 0;$shipPrice = 2.9; foreach($cart as $val){  ?>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        <div class="wc-gzd-product-name-left">
                                           <img src="<?= base_url()?><?=$val['image1']?>" alt=""></div>
                                            <div class="row">
                                                <!-- <div class="col">
                                                    <img src="<?= base_url()?><?=$val['image1']?>" alt="">
                                                </div> -->
                                                <div class="col">
                                                    <?=$val['name']?>
                                                    <p class="info"><?=$val['type']?>, <?=$val['size']?> <br>Personen: 1 <br> Datum: 8. August 2020 <br>Zeit: 15:00</p>
                                                </div>
                                                <!-- <div class="col"><?=$val['price']?> &euro;</div>
                                                <div class="col"><?=$val['myQuan']?></div>
                                                <div class="col"><?php echo $val['myQuan']*$val['price']?> &euro;</div> -->
                                        <!-- <div class="wc-gzd-product-name-right"><?=$val['name']?><p class="info"><?=$val['type']?>, <?=$val['size']?></p><strong class="product-quantity"><?php echo $val['myQuan'].'*'.$val['price']?> &euro;</strong>
                                            <p class="mb-0">Lieferzeit: 3-4 Werktage</p>
                                            <div class="wc-gzd-cart-info wc-gzd-item-desc item-desc">
                                                <p>Im Shop zum tollen Preis:96 Espresso "Campione"</p>
                                            </div>
                                        </div> -->
                                        <div class="clear"></div>
                                    </td>
                                    <td class="product-total">
                                        <span class="subscription-price"><span class="woocommerce-Price-amount amount"><bdi><?=$val['price']?>&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi></span> <span class="subscription-details"> * <?=$val['myQuan']?></span></span> </td>
                                </tr>
                                        <?php $totalPrice=$totalPrice+($val['myQuan']*$val['price']); } ?>
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th>Zwischensumme</th>
                                    <td><span class="woocommerce-Price-amount amount"><bdi><?=$totalPrice?>&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi></span></td>
                                </tr>
                                <tr class="woocommerce-shipping-totals shipping">
                                    <th>Versand</th>
                                    <td data-title="Versand">
                                        <ul id="shipping_method" class="woocommerce-shipping-methods">
                                            <li>
                                                <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate4" value="flat_rate:4" class="shipping_method"><label for="shipping_method_0_flat_rate4">Standardversand (international): <span class="woocommerce-Price-amount amount"><bdi><?=$shipPrice?>&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi></span></label> </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr class="order-total">
                                    <th>Gesamtsumme</th>
                                    <td><strong><span class="woocommerce-Price-amount amount"><bdi><?php echo $sub = $totalPrice+$shipPrice?></span></strong> <small class="includes_tax">(Enthält <span class="woocommerce-Price-amount amount">0,80&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span> MwSt. EE reduced-rate)</small></td>
                                </tr>
                                <tr class="order-tax">
                                    <th>inkl. 5 % MwSt.</th>
                                    <td data-title="inkl. 5 % MwSt."><span class="woocommerce-Price-amount amount"><bdi><?php echo $subtotal = (5 / 100) * $sub;?>&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi></span></td>
                                </tr>
                                <!-- <tr class="recurring-totals">
                                    <th colspan="2" class="text-center">Wiederkehrende Beträge (Abonnement)</th>
                                </tr>
                                <tr class="cart-subtotal recurring-total">
                                    <th rowspan="1">Zwischensumme</th>
                                    <td data-title="Zwischensumme"><span class="woocommerce-Price-amount amount">6,96&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span> alle 3 Wochen</td>
                                </tr> -->
                                <!-- <tr class="shipping recurring-total 2020_11_13_every_3rd_week">
                                    <th>Shipping</th>
                                    <td data-title="Shipping">
                                        <ul id="shipping_method_2020_11_13_every_3rd_week">
                                            <li>
                                                <input type="radio" name="shipping_method[2020_11_13_every_3rd_week_0]" data-index="2020_11_13_every_3rd_week_0" id="shipping_method_2020_11_13_every_3rd_week_0_flat_rate4" value="flat_rate:4" class="shipping_method shipping_method_2020_11_13_every_3rd_week_0" checked="'checked'"><label for="shipping_method_2020_11_13_every_3rd_week_0_flat_rate4">Standardversand (international): <span class="woocommerce-Price-amount amount">9,90&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span> alle 3 Wochen</label> </li>
                                            <li>
                                                <input type="radio" value="flat_rate:9" class=""><label for="shipping_method_2020_11_13_every_3rd_week_0_flat_rate9">Versandkostenpauschale</label> </li>
                                        </ul>

                                    </td>
                                </tr> -->
                                <!-- <tr class="order-total recurring-total">
                                    <th rowspan="1">Gesamtsumme (Abonnement)</th>
                                    <td data-title="Gesamtsumme (Abonnement)"><strong><span class="woocommerce-Price-amount amount">16,86&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span></strong> alle 3 Wochen<small class="includes_tax"> (includes <span class="woocommerce-Price-amount amount">0,80&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span> MwSt. EE reduced-rate)</small>
                                        <div class="first-payment-date"><small>erstmals fällig am: 13. November 2020</small></div>
                                    </td>
                                </tr>
                                <tr class="order-tax">
                                    <th>inkl. 5 % MwSt.</th>
                                    <td data-title="inkl. 5 % MwSt."><span class="woocommerce-Price-amount amount">0,80&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></span>
                                    </td>
                                </tr> -->
                            </tfoot>
                        </table>
                        <div class="form-group" id="paypal-button-container"><button class="btn-white" type="button" >Kostenpflichtig bestellen</button></div>
                        <div class="step-button">
                            <a href="">Zurück zu Schritt 2</a>
                        </div>
                        <!-- <div id="paypal-button-container"  style="width: 30%"></div> -->
                    </form>
                <?php } ?>
                </div>
            </div>
        </div>
    </section>
    
    <!--section.checkout ended.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
    <!-- <script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.01'
          }
        }]
      });
    }
  }).render('#paypal-button-container');
</script> -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    // $('#final_submit').click(function() {
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '<?php echo $sub = $totalPrice+$shipPrice?>'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container');
// });
  //This function displays Smart Payment Buttons on your web page.
</script>
<script type="text/javascript">
    $( document ).ready(function() {
    $('.js-example-basic-single').select2();
        $("#delivery_div").hide();
        $('#delivery_check').click(function() {
            $("#delivery_div").toggle(this.checked);
            if(this.checked){
                var d_street = $("#street").val();
                var d_additional_address = $("#additional_address").val();
                var d_pincode = $("#pincode").val();
                var d_place = $("#place").val();
                var d_country = $("#country").val();
                $("#d_street").val(d_street);
                $("#d_country").val(d_country);
                $("#d_additional_address").val(d_additional_address);
                $("#d_pincode").val(d_pincode);
                $("#d_place").val(d_place);
                $("#d_street").prop('required',true);
                $("#d_additional_address").prop('required',true);
                $("#d_pincode").prop('require_onceired',true);
                $("#d_place").prop('required',true);
                
            } else {
                $("#d_street").prop('required',false);
                $("#d_additional_address").prop('required',false);
                $("#d_pincode").prop('required',false);
                $("#d_place").prop('required',false);
            }
        });
    });
</script>
</body>

</html>

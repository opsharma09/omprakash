<!DOCTYPE html>
<html lang="de-DE">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
    <?php 
        $title = "Koffee.com";
        $style_name = "checkout";
        require_once("public/include/head.php")?>
    <style type="text/css">
        
        .navigation a {
            color: #c6a866 !important;
        }
        a, a:hover, a:active {
            text-decoration: none !important;
            transition: .3s all ease-in-out !important;
        }
        
    </style>
        <link href="<?=base_url('public/dist/bootstrap-nav-wizard.css')?>" rel="stylesheet" />
       <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <style type="text/css">
        
        body {
        font-family: none;
    }
    .disabled{
        pointer-events:none;
    }
    </style>
</head>
<body >
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
<section class="checkout">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="step-nav nav-wizard">
                    <li class="<?php if(!isset($status)){echo 'active';}?>">
                        <a href="#step-address" data-toggle="tab" class="step step-1" >
                            <span class="step-number">1</span>
                            <span class="step-title">Persönliche Daten</span>
                        </a>
                    </li>

                    <li class="<?php if(isset($status)){echo 'active';}?>">
                        <a href="#payment" data-toggle="tab" class="step step-2 step-payment <?php if(!isset($status)){echo 'disabled';}?>" >
                            <span class="step-number">2</span>
                            <span class="step-title">Zahlungsart</span>
                        </a>
                    </li>
                    <li class="order">
                        <a href="#order" data-toggle="tab" class="step step-3 step-order disabled">
                            <span class="step-number">3</span>
                            <span class="step-title">Bestätigen</span>
                        </a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade <?php if(!isset($status)){echo 'active in';}?>" id="step-address">
                        <form action="<?=base_url('home/save_address')?>" class="checkout_form" method="post" >
                      <!-- <form action="#" class="checkout_form" method="post" > -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3>Rechnungsdetails</h3>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="vorname*" required="" value="<?php if(!empty($bill_address)){echo $bill_address['first_name'];}?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Nachname*" required="" value="<?php if(!empty($bill_address)){echo $bill_address['last_name'];}?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="company"  id="company" placeholder="Firma" value="<?php if(!empty($bill_address)){echo $bill_address['company'];}?>">
                                    </div>
                                    <div class="form-group">
                                        <select class="js-example-basic-single" id="country" name="country" style="width:100%" >
                                            <option value="default" disabled="" hidden="">Land/Region auswählen&nbsp;…</option>
                                            <option value="BE" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'BE'){ echo 'selected'; }}?>>Belgien</option>
                                            <option value="BG" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'BG'){ echo 'selected'; }}?>>Bulgarien</option>
                                            <option value="DE" selected="selected">Deutschland</option>
                                            <option value="DK" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'DK'){ echo 'selected'; }}?>>Dänemark</option>
                                            <option value="EE" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'EE'){ echo 'selected'; }}?>>Estland</option>
                                            <option value="FI" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'FI'){ echo 'selected'; }}?>>Finnland</option>
                                            <option value="FR" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'FR'){ echo 'selected'; }}?>>Frankreich</option>
                                            <option value="GR" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'GR'){ echo 'selected'; }}?>>Griechenland</option>
                                            <option value="IE" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'IE'){ echo 'selected'; }}?>>Irland</option>
                                            <option value="IT" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'IT'){ echo 'selected'; }}?>>Italien</option>
                                            <option value="HR" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'HR'){ echo 'selected'; }}?>>Kroatien</option>
                                            <option value="LV" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'LV'){ echo 'selected'; }}?>>Lettland</option>
                                            <option value="LT" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'LT'){ echo 'selected'; }}?>>Litauen</option>
                                            <option value="LU" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'LU'){ echo 'selected'; }}?>>Luxemburg</option>
                                            <option value="MT" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'MT'){ echo 'selected'; }}?>>Malta</option>
                                            <option value="NL" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'NL'){ echo 'selected'; }}?>>Niederlande</option>
                                            <option value="PL" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'PL'){ echo 'selected'; }}?>>Polen</option>
                                            <option value="PT" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'PT'){ echo 'selected'; }}?>>Portugal</option>
                                            <option value="RO" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'RO'){ echo 'selected'; }}?>>Rumänien</option>
                                            <option value="SE" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'SE'){ echo 'selected'; }}?>>Schweden</option>
                                            <option value="SK" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'SK'){ echo 'selected'; }}?>>Slowakei</option>
                                            <option value="SI" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'SI'){ echo 'selected'; }}?>>Slowenien</option>
                                            <option value="ES" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'ES'){ echo 'selected'; }}?>>Spanien</option>
                                            <option value="CZ" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'CZ'){ echo 'selected'; }}?>>Tschechien</option>
                                            <option value="HU" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'HU'){ echo 'selected'; }}?>>Ungarn</option>
                                            <option value="CY" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'CY'){ echo 'selected'; }}?>>Zypern</option>
                                            <option value="AT" <?php if(!empty($bill_address)){ if($bill_address['country'] == 'AT'){ echo 'selected'; }}?>>Österreich</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Straße und Hausnummer*" id="street" name="street" class="form-control" required="" value="<?php if(!empty($bill_address)){echo $bill_address['street'];}?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="additional_address" name="additional_address" placeholder="Adresszusatz*" value="<?php if(!empty($bill_address)){echo $bill_address['additional_address'];}?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="pincode" placeholder="PLZ*" name="pincode" required="" value="<?php if(!empty($bill_address)){echo $bill_address['pincode'];}?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Ort*" id="place" class="form-control" name="place" required="" value="<?php if(!empty($bill_address)){echo $bill_address['place'];}?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Telefon" class="form-control" name="phone" value="<?=$this->session->userdata('user')->phone_no?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="E-Mail Address*" class="form-control" name="email" autocomplete="off" value="<?=$this->session->userdata('user')->email_id?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h3><label><input type="checkbox" id="delivery_check" name="delivery_check"> Lieferung an eine andere Adresse senden?</label></h3>
                                    <div id="delivery_div">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="text" class="form-control" name="d_first_name" id="d_first_name" placeholder="vorname*" value="<?php if(!empty($del_address)){echo $del_address['first_name']; }?>">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input type="text" class="form-control" name="d_last_name" id="d_last_name" placeholder="Nachname*" value="<?php if(!empty($del_address)){echo $del_address['last_name']; }?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="d_company" id="d_company" placeholder="Firma" value="<?php if(!empty($del_address)){echo $del_address['company']; }?>">
                                        </div>
                                        <div class="form-group">
                                            <select class="js-example-basic-single" name="d_country" style="width:100%" >
                                                <option value="default" disabled="" selected="" hidden="">Land/Region auswählen&nbsp;…</option>
                                                <option value="BE" <?php if(!empty($del_address)){ if($del_address['country'] == 'BE'){ echo 'selected'; }}?>>Belgien</option>
                                                <option value="BG" <?php if(!empty($del_address)){ if($del_address['country'] == 'BG'){ echo 'selected'; }}?>>Bulgarien</option>
                                                <option value="DE" selected="selected">Deutschland</option>
                                                <option value="DK" <?php if(!empty($del_address)){ if($del_address['country'] == 'DK'){ echo 'selected'; }}?>>Dänemark</option>
                                                <option value="EE" <?php if(!empty($del_address)){ if($del_address['country'] == 'EE'){ echo 'selected'; }}?>>Estland</option>
                                                <option value="FI" <?php if(!empty($del_address)){ if($del_address['country'] == 'FI'){ echo 'selected'; }}?>>Finnland</option>
                                                <option value="FR" <?php if(!empty($del_address)){ if($del_address['country'] == 'FR'){ echo 'selected'; }}?>>Frankreich</option>
                                                <option value="GR" <?php if(!empty($del_address)){ if($del_address['country'] == 'GR'){ echo 'selected'; }}?>>Griechenland</option>
                                                <option value="IE" <?php if(!empty($del_address)){ if($del_address['country'] == 'IE'){ echo 'selected'; }}?>>Irland</option>
                                                <option value="IT" <?php if(!empty($del_address)){ if($del_address['country'] == 'IT'){ echo 'selected'; }}?>>Italien</option>
                                                <option value="HR" <?php if(!empty($del_address)){ if($del_address['country'] == 'HR'){ echo 'selected'; }}?>>Kroatien</option>
                                                <option value="LV" <?php if(!empty($del_address)){ if($del_address['country'] == 'LV'){ echo 'selected'; }}?>>Lettland</option>
                                                <option value="LT" <?php if(!empty($del_address)){ if($del_address['country'] == 'LT'){ echo 'selected'; }}?>>Litauen</option>
                                                <option value="LU" <?php if(!empty($del_address)){ if($del_address['country'] == 'LU'){ echo 'selected'; }}?>>Luxemburg</option>
                                                <option value="MT" <?php if(!empty($del_address)){ if($del_address['country'] == 'MT'){ echo 'selected'; }}?>>Malta</option>
                                                <option value="NL" <?php if(!empty($del_address)){ if($del_address['country'] == 'NL'){ echo 'selected'; }}?>>Niederlande</option>
                                                <option value="PL" <?php if(!empty($del_address)){ if($del_address['country'] == 'PL'){ echo 'selected'; }}?>>Polen</option>
                                                <option value="PT" <?php if(!empty($del_address)){ if($del_address['country'] == 'PT'){ echo 'selected'; }}?>>Portugal</option>
                                                <option value="RO" <?php if(!empty($del_address)){ if($del_address['country'] == 'RO'){ echo 'selected'; }}?>>Rumänien</option>
                                                <option value="SE" <?php if(!empty($del_address)){ if($del_address['country'] == 'SE'){ echo 'selected'; }}?>>Schweden</option>
                                                <option value="SK" <?php if(!empty($del_address)){ if($del_address['country'] == 'SK'){ echo 'selected'; }}?>>Slowakei</option>
                                                <option value="SI" <?php if(!empty($del_address)){ if($del_address['country'] == 'SI'){ echo 'selected'; }}?>>Slowenien</option>
                                                <option value="ES" <?php if(!empty($del_address)){ if($del_address['country'] == 'ES'){ echo 'selected'; }}?>>Spanien</option>
                                                <option value="CZ" <?php if(!empty($del_address)){ if($del_address['country'] == 'CZ'){ echo 'selected'; }}?>>Tschechien</option>
                                                <option value="HU" <?php if(!empty($del_address)){ if($del_address['country'] == 'HU'){ echo 'selected'; }}?>>Ungarn</option>
                                                <option value="CY" <?php if(!empty($del_address)){ if($del_address['country'] == 'CY'){ echo 'selected'; }}?>>Zypern</option>
                                                <option value="AT" <?php if(!empty($del_address)){ if($del_address['country'] == 'AT'){ echo 'selected'; }}?>>Österreich</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Straße und Hausnummer*" id="d_street" name="d_street" class="form-control" value="<?php if(!empty($del_address)){echo $del_address['street']; }?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="d_additional_address" name="d_additional_address" placeholder="Adresszusatz*" value="<?php if(!empty($del_address)){echo $del_address['additional_address']; }?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="d_pincode" placeholder="PLZ*" name="d_pincode" value="<?php if(!empty($del_address)){echo $del_address['pincode']; }?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Ort*" id="d_place" class="form-control" name="d_place" value="<?php if(!empty($del_address)){echo $del_address['place']; }?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="optional">Bestellhinweise (optional)</label>
                                            <textarea  placeholder="Anmerkungen zu Ihrer Bestellung, z.B. besondere Hinweise für die Lieferung."  name="ordering_information" id="" rows="2" class="form-control"><?php if(!empty($del_address)){echo $del_address['ordering_information']; }?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Ihre persönlichen Daten werden dazu verwendet um Ihre Bestellung zu bearbeiten. Weitere Informationen und Details finden Sie in unseren <a href="" target="_blank">Datenschutzbestimmungen</a></label>
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn-white" type="submit">Weiter zu Schritt 2</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade <?php if(isset($status)){echo 'active show in';}?>" id="payment">
                        <form action="" class="checkout_form payment_form" >
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
                                <div class="payment_box pb-5">
                                    Wir buchen den offenen Betrag direkt von Ihrem Girokonto ab
                                    <p class="wc-stripe-sepa-mandate" style="margin-bottom:40px;">Durch die Bereitstellung Ihrer IBAN und Bestätigung dieser Bestellung, autorisieren Sie Hann.Kaffeemanufaktur und unseren Zahlungsdienstleister Stripe eine Anweisung an Ihre Bank zu senden, um Ihr Konto zu belasten. Sie haben Anspruch auf eine Rückerstattung von Ihrer Bank unter den Bedingungen und Konditionen Ihrer Vereinbarung mit Ihrer Bank. Eine Rückerstattung muss innerhalb von 8 Wochen ab dem Tag, an dem Ihr Konto belastet wurde, in Anspruch genommen werden.</p>
                                    <div class="form-group">
                                        <label for="stripe-iban-element">IBAN. <span class="required">*</span></label>
                                    </div>
                                    <div class="paymentMethodRow ">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="content-group">
                                                    <div class="img_sec">
                                                        <img src="images/paypal.svg" alt="">
                                                    </div>
                                                    <div class="methodName">
                                                        <p>Paypal</p>
                                                    </div>
                                                    <div class="methodDetails">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="methodDetails">
                                                    Verwenden Sie PayPal zum ersten Mal? Eröffnen Sie beim Bezahlen einfach ein kostenloses Konto und profitieren Sie vom <a href="" target="_blank">Käuferschutz </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="paymentMethodRow selected">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="content-group">
                                                    <div class="img_sec">
                                                        <img src="images/sepa.png" alt="">
                                                    </div>
                                                    <div class="methodName">
                                                        <p>Paypal</p>
                                                    </div>
                                                    <div class="methodDetails">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                </div>
                                                <div class="methodDetails">
                                                    Verwenden Sie PayPal zum ersten Mal? Eröffnen Sie beim Bezahlen einfach ein kostenloses Konto und profitieren Sie vom <a href="" target="_blank">Käuferschutz </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                            <div class="step-button form-group">
                                <!-- <a href="<?=base_url('home/proceed_to_checkout?')?>">Zurück zu Schritt 1</a> -->
                                <button class="btn-white next">Weiter zu Schritt 3</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="order">
                      <form action="" class="checkout_form">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Ihre Bestellung</h3>
                                    <h4 class="mb-3">Rechnungsdetails</h4>
                                    <address>
                                        <?=$bill_address['first_name'].' '.$bill_address['last_name']?><br><?=$bill_address['street']?><br><?=$bill_address['additional_address']?><br><?=$bill_address['pincode'].' '.$bill_address['place']?><br><?=$bill_address['phone']?><br><?=$bill_address['email']?>
                                    </address>
                                    <p>
                                        <a href="#step-address" data-toggle="tab" class="step step-1 edit_address" >bearbeiten</a>
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
                                    <p><a href="#step-address" data-toggle="tab" class="step step-1 edit_address">bearbeiten</a></p>
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
                                <?php  $totalPrice = 0;$shipPrice = 2.9;   foreach($cart as $val){ ?>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            <div class="wc-gzd-product-name-left">
                                               <img src="<?= base_url()?><?=$val['image1']?>" alt=""></div>
                                                <div class="row">
                                                    <div class="col">
                                                        <?=$val['name']?>
                                                        <p class="info"><?=$val['type']?>, <?=$val['size']?> <br>Personen: 1 <br> Datum: 8. August 2020 <br>Zeit: 15:00</p>
                                                    </div>
                                                </div>
                                            <div class="clear"></div>
                                        </td>
                                        <td class="product-total">
                                            <span class="subscription-price"><span class="woocommerce-Price-amount amount"><bdi><?=$val['price']?>&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi></span> <span class="subscription-details"> * <?=$val['myQuan']?></span></span> </td>
                                    </tr>
                                    <?php $totalPrice=$totalPrice+($val['myQuan']*$val['price']); }if(!empty($event_cart)){ foreach ($event_cart as $val) {?>
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            <div class="wc-gzd-product-name-left">
                                               <img src="<?= base_url('public/images/logo.svg')?>" alt="">
                                           </div>
                                            <div class="row">
                                                <div class="col">
                                                    <?=$val['type']?>
                                                    <p class="info">Personen: <?=$val['person']?> <br> Datum: <?=date('d M Y',strtotime($val['start_date']))?> <br>Zeit:  <?=date('H:i',strtotime($val['start_time']))?></p>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </td>
                                        <td class="product-total">
                                            <span class="subscription-price"><span class="woocommerce-Price-amount amount"><bdi><?=$val['price']?>&nbsp;<span class="woocommerce-Price-currencySymbol">€</span></bdi></span> <span class="subscription-details"></span></span>
                                        </td>
                                    </tr>
                                <?php $totalPrice=$totalPrice+($val['price']); }}?>
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
                                </tfoot>
                            </table>
                            <div class="form-group" id="paypal-button-container"><button class="btn-white" type="button" >Kostenpflichtig bestellen</button></div>
                            <div class="step-button">
                                <!-- <a href="<?=base_url('home/proceed_to_checkout?')?>">Zurück zu Schritt 1</a> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        
<!--section.checkout ended.-->
<!--footer started.-->
<?php require_once("public/include/footer.php") ?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '<?php echo $sub = $totalPrice+$shipPrice?>'
          },
          item_list: {
            items: [
                {
                name: 'hat',
                description: 'Brown hat.',
                quantity: '1',
                price: '1.00',
                currency: 'USD'
                }
            ]
        },
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        var amount = '<?php echo $sub = $totalPrice+$shipPrice?>';
        alert('Transaction completed by ' + details.payer.name.given_name);
        $.ajax({
            url : "<?php echo base_url('order/save_order');?>",
            method : "POST",
            data :{amount:amount},
            success: function(data){
                location.href="<?php echo base_url('mein-account/orders');?>";
            }
        });
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
        $(".next").click(function (e) {
            e.preventDefault();
            var $active = $('.step-nav li.active');
            $active.removeClass('active');
            $('#payment').removeClass('active in show');
            var $active = $('.order');
            var $active1 = $('.order a');
            $active.addClass('active');
            $active1.removeClass('disabled');
            $('#order').addClass('active in show');
            nextTab($active);
    
        });
        $('.edit_address').click(function() {
            $("#delivery_div").toggle();
            $("#delivery_check").prop('checked',true);
        });
        $('#delivery_check').click(function() {
            $("#delivery_div").toggle(this.checked);
            if(this.checked){
                var d_street = $("#street").val();
                var d_additional_address = $("#additional_address").val();
                var d_first_name = $("#first_name").val();
                var d_last_name = $("#last_name").val();
                var d_company = $("#company").val();
                var d_pincode = $("#pincode").val();
                var d_place = $("#place").val();
                var d_country = $("#country").val();
                $("#d_street").val(d_street);
                $("#d_country").val(d_country);
                $("#d_first_name").val(d_first_name);
                $("#d_last_name").val(d_last_name);
                $("#d_company").val(d_company);
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
    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }
</script>
</body>

</html>
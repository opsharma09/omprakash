<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Email Template</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body style="font-size: 13px; max-width: 816px; font-family: arial,'Times new roman'; margin: 20px auto; color: #000;">
    <table style="max-width: 720px; margin: auto; width: 100%">
        <tbody>
            <tr>
                <td style="text-align: right">
                    <img src="<?=$image?>" style="max-width: 100px;height: 50px" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <p style="font-size:14px; text-decoration: underline;">Hannoversche Kaffeemanufaktur GmbH &amp; Co. KG – Dorfstraße 17 – 31303 Burgdorf</p>
                </td>
            </tr>
            <tr>
                <td>Customer</td>
            </tr>
            <tr>
                <td>
                    <p>Address</p>
                    <p><?=$order->customer_name?><br><?=$bill_add->company?><br><?=$bill_add->street.','.$bill_add->additional_address.', '.$bill_add->place.'( '.$bill_add->pincode.' )'?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="width: 100%">
                        <tr>
                            <td>
                                <h1 style="margin: 0; font-family: arial">Rechnung</h1>
                                <h1 style="margin: 0; font-family: arial">6737</h1>
                            </td>
                            <td style="width: 50%">
                                <table style="width: 100%">
                                    <tr>
                                        <td style="">Lieferdatum:</td>
                                        <td style=""><?=$order->delivery_date?></td>
                                    </tr>
                                    <tr>
                                        <td style="">Rechnungsdatum:</td>
                                        <td style=""></td>
                                    </tr>
                                    <tr>
                                        <td style="">Auftragsnummer:</td>
                                        <td style=""><?=date('M d, Y')?></td>
                                    </tr>
                                    <tr>
                                        <td style="">Zahlungsmethode:</td>
                                        <td style="">PayPal</td>
                                    </tr>
                                    <tr>
                                        <td style="">Unser Zeichen:</td>
                                        <td style=""></td>
                                    </tr>
                                    <tr>
                                        <td style="">Telefon/Fax:</td>
                                        <td style=""><?=$order->contact_no?></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table style="width: 100%">
                        <tr>
                            <td>
                                <span style="margin-bottom: 100px; color: transparent; display: block"></span>
                            </td>
                        </tr>
                    </table>
                    <table style="width:100%; border-bottom: 2px solid #000;">
                       <thead border=0 style="width: 100%; background: transparent">
                                <tr style="font-weight: bold;">
                                    <td style="background: #c0c0c0; padding: 3px 2px;width: 10%">Pos.</td>
                                    <td style="background: #c0c0c0; padding: 3px 2px;width: 10%">Artikel-Nr.</td>
                                    <td style="background: #c0c0c0; padding: 3px 2px;width: 30%">Bezeichnung</td>
                                    <td style="background: #c0c0c0; padding: 3px 2px;width: 10%">Anzahl</td>
                                    <td style="background: #c0c0c0; padding: 3px 2px;width: 10%">Preis</td>
                                    <td style="background: #c0c0c0; padding: 3px 2px;width: 10%">Rabatt</td>
                                    <td style="background: #c0c0c0; padding: 3px 2px;width: 10%">USt.</td>
                                    <td style="background: #c0c0c0; padding: 3px 2px;width: 10%">Gesamtpreis</td>
                                </tr>
                            </thead>
                        <tbody>
                        <?php $count = 1 ; foreach($cart as $val){ if($val['is_subscription']==0){?>
                            <tr>
                                <td style="width: 10%"><?=$count?></td>
                                <td style="width: 10%">1-463</td>
                                <td style="width: 30%"><p><?=$val['name']?><br><?=$val['type']?>, <?=$val['size']?> </p></td>
                                <td style="width: 10%"><?=$val['myQuan']?></td>
                                <td style="width: 10%"><?=$val['price']?> &euro;</td>
                                <td style="width: 10%">0,00 &euro;</td>
                                <td style="width: 10%">7%</td>
                                <td style="width: 10%"><?=$val['myQuan']*$val['price']?> &euro;</td>
                            </tr>
                        <?php  }else{?>
                            <tr>
                                <td style="width: 10%"><?=$count?></td>
                                <td style="width: 10%">1-463</td>
                                <td style="width: 30%"><p><?=$val['name']?><br><?=$val['type']?>, <?=$val['size']?>Datum: <?=date('d-M-Y',strtotime($val['start_date']))?></p></td>
                                <td style="width: 10%"><?=$val['myQuan']?></td>
                                <td style="width: 10%"><?=$val['price']?> &euro;</td>
                                <td style="width: 10%">0,00 &euro;</td>
                                <td style="width: 10%">7%</td>
                                <td style="width: 10%"><?=$val['myQuan']*$val['price']?> &euro;</td>
                            </tr>
                        <?php }  ++$count; } if(!empty($event_cart)){ foreach ($event_cart as $val) {?>
                            <tr>
                                <td style="width: 10%"><?=$count?></td>
                                <td style="width: 10%">1-463</td>
                                <td style="width: 30%"><p><?=$val['type']?><br>Personen: <?=$val['person']?><br>Zeit: <?=$val['start_time']?></p></td>
                                <td style="width: 10%"><?=$val['person']?></td>
                                <td style="width: 10%"><?=$val['aprice']?> &euro;</td>
                                <td style="width: 10%">0,00 &euro;</td>
                                <td style="width: 10%">7%</td>
                                <td style="width: 10%" ><?=$val['person']*$val['aprice']?> &euro;</td>
                            </tr>
                        <?php ++$count; } }?>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="margin-top: 20px">
                <td>
                   <br>
                    <table style="width: 100%;margin-top: 30px;">
                        <tr>
                            <td></td>
                            <td style="width: 54%">
                                <table style="width: 100%">
                                    <tr>
                                        <td style="border-top: 2px solid #e1e1e1; font-weight: bold;border-bottom: 2px solid #e1e1e1;">Bestellwert</td>
                                        <td style="text-align: right; border-top: 2px solid #e1e1e1; border-bottom: 2px solid #e1e1e1;"><?=$totalPrice?> &euro;</td>
                                    </tr>
                                    <?php if(isset($coupon_discount)){?>
                                        <tr>
                                            <td style="font-weight: bold">Gutscheinrabatt</td>
                                            <td style="font-weight: bold;text-align: right;"><?=$coupon_discount?> &euro;</td>
                                        </tr>
                                    <?php }?>
                                    <tr>
                                        <td style="font-weight: bold">Versand und Verpackung</td>
                                        <td style="font-weight: bold;text-align: right;"><?=$shipPrice?> &euro;</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold; border-top: 2px solid #000; border-bottom: 2px solid #000 ">Summe</td>
                                        <td style="text-align: right;font-weight: bold; border-top: 2px solid #000; border-bottom: 2px solid #000 "><?=$actualPrice?> &euro;</td>
                                    </tr>
                                    <tr>
                                        <td style="border-bottom: 2px solid #e1e1e1; font-weight: bold;">inkl. 7 % MwSt.</td>
                                        <td style="border-bottom: 2px solid #e1e1e1;text-align: right">2,33 &euro;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td style="padding: 0 5px;">Hannoversche Kaffeemanufaktur GmbH & Co. KG
                                Unternehmenssitz: Burgdorf
                                Handelsregister beim Amtsgericht: Hildesheim
                                Handelsregister-Nummer: HRA201863
                                Steuer-Nr. 16/204/17305
                                Finanzamt: Burgdorf</td>
                            <td style="padding: 0 5px;vertical-align: top"><i>Persönlich haftende Gesellschafterin:</i>
                                Kaffeemanufaktur Berndt GmbH - Sitz: Uetze
                                Handelsregister beim Amtsgericht: Hildesheim
                                Handelsregister-Nummer: HRB204673
                                Geschäftsführer: Andreas Berndt</td>
                            <td style="padding: 0 5px; vertical-align: top">Unsere Bankverbindungen:
                                Sparkasse Hannover
                                IBAN <br> <br>DE88250501800910103151
                                BIC SPKHDE2HXXX</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>

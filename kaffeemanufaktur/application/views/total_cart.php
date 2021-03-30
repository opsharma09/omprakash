<h2>Warenkorb-Summe</h2>
<div class="row">
    <input type="hidden" name="totalPrice" value="<?=$actual?>">
    <div class="col-md-6">
        <table>
            <tbody>
                <tr>
                    <th>Zwischensumme</th>
                    <td><?=$actual?> &euro;</td>
                </tr>
                <tr>
                    <th>Versand</th>
                    <td><b><?=$shipPrice?> &euro;</b></td>
                </tr>
                <?php if(isset($coupon_discount)){?>
                    <input type="hidden" name="coupon_discount" value="<?=$totalPrice?>">
                    <input type="hidden" name="coupon_value" value="<?=$coupon_discount?>">
                    <input type="hidden" name="coupon_type" value="<?=$coupon_type?>">
                    <input type="hidden" name="coupon_code" value="<?=$coupon_code?>">
                    <tr>
                        <th>Gutscheinrabatt</th>
                        <td><?php echo $coupon_discount?> &euro;</td>
                    </tr>
                <?php $sub = $shipPrice+$totalPrice; }else{
                    $sub = $shipPrice;
                }?>
                <tr>
                    <th>Gesamtsumme</th>
                    <td><?php echo $sub?> &euro;</td>
                </tr>
                <tr>
                    <th>inkl. 5 % MwSt. </th>
                    <td><?php echo $subtotal = (5 / 100) * $sub;?> &euro;</td>
                </tr>
            </tbody>
        </table>
        <div class="proceed"><button type="submit" class="btn-white" id="Weiter_sub">Weiter zur Kasse</button></div>
    </div>
</div>
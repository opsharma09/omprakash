<?php $totalPrice=0; if(isset($cart)){if(!empty($cart)){ foreach($cart as $key=> $val){?>
<div class="col-lg-12 py-3 right_product_detials">
    <div class="row">
        <div class="col-lg-2 px-2">
            <img src="<?= base_url()?><?=$val['image1']?>" alt="">
        </div>
        <div class="col-lg-9 col-11 px-2">
            <div>
                <p><strong><?=$val['myQuan']?> &#10005; <?=$val['name']?></strong></p>
                <small class="info"><?=$val['type']?>, <?=$val['size']?></small>
                <p><strong><?=$val['myQuan']* $val['price']?> €</strong></p>
            </div>
        </div>
        <div class="col-1 pl-0 pr-2" style="text-align: right;">
            <a href="javascript:void(0)" class="delete_cart" data-id="<?=$val['mycart_id']?>"
                style="font-size: 30px">&times;</a>
        </div>
    </div>
</div>
<?php $totalPrice=$totalPrice+($val['myQuan']*$val['price']); }?>
<div class="col-lg-12 py-3">
    <ul id="weak_schedule">
        <?php if(!empty($cart)){ ?>
            <li> Starttermin am <?=date('m.d.y',strtotime($cart[0]['start_date']))?></li>
             <li > Danach alle <?=$cart[0]['weak_schedule']?> Wochen </li>
        <?php }?>
    </ul>
    <p style="font-size: 20px"><strong><?=$totalPrice?> €</strong></p>
</div>
 <div class="customAddToCartButtonWrapper col-lg-12 pb-3 interval_div" style="">
    <button class="btn" type="button" onclick="interval_add()"
        style="width: 100%;padding: 0px;border-radius: 0px">
         Lieferintervall ></button>
</div>
<div class="customAddToCartButtonWrapper col-lg-12 pb-3 add_div" style="display: none">
    <button class="btn" type="button" onclick="add_to_cart()" id="add_cart" data-id="2"
        style="width: 100%;padding: 0px;border-radius: 0px">
        <span class="fa fa-shopping-cart"></span> als Abo in den Warenkorb </button>
</div>
<?php }else{?>
<div class="col-lg-12 py-4">
    <p>Du hast noch keine Auswahl getroffen, benötigst du <span style="text-decoration: underline;">Hilfe zu unserem Abo?</span></p>
</div>
<?php } }?>
<script type="text/javascript">
$(document).ready(function() {
    $('.delete_cart').click(function() {
        var cart_id = $(this).data('id');
        $.ajax({
            url: "<?= base_url()?>home/delete_sub_cart/" + cart_id,
            type: "GET",
            success: function(response) {
                $.ajax({
                    url: "<?=base_url('home/subscription_cart')?>",
                    type: "GET",
                    success: function(response) {
                        $('#cart_sec').html(JSON.parse(response).view_html);
                        $('.wochen_div').show();
                        $('.wochen_div1').hide();
                        if(JSON.parse(response).date===null){
                            $('#weak_schedule').hide();
                        }
                    }
                });
            }
        });
    });
});
</script>
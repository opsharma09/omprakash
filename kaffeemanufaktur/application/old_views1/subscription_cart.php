<?php if(isset($cart)){if(!empty($cart)){ foreach($cart as $key=> $val){?>
    <div class="col-lg-12" style="display: inline-flex;padding: 5px;padding-left: 0px;padding-right: 0px;border-bottom: 1px solid rgba(0,0,0,0.1);">
        <div class="col-lg-2">
            <img src="<?= base_url()?><?=$val['image1']?>" alt=""> 
        </div>
        <div class="col-lg-6">
            <span><p><strong><?=$val['myQuan']?> &#10005; <?=$val['name']?></strong></p>
                <p class="info"><?=$val['type']?>, <?=$val['size']?></p></span>
        </div>
        <div class="col-lg-4" style="text-align: right;">
            <a href="javascript:void(0)" class="delete_cart" data-id="<?=$val['mycart_id']?>" style="font-size: 30px">&times;</a>
        </div>
    </div>
<?php }?>
<p style="font-weight: bold"> <span style="font-weight: bold">></span> Starttermin am <?=date('d-m-Y')?></p><br>
 <p style="font-weight: bold" id="weak_schedule"><span style="font-weight: bold">></span> Danach alle 2 Wochen</p>
<div class="customAddToCartButtonWrapper col-lg-12" style="padding: 0px;height: 16px;">
    <button class="btn" type="button"  onclick="add_to_cart()" id="add_cart"  data-id="2" style="width: 100%;padding: 0px;border-radius: 0px">
        <span class="fa fa-shopping-cart"></span> In den Warenkorb</button>
</div>

<?php }else{?>
<div class="col-lg-12">
    <p>Du hast noch keine Auswahl getroffen, benötigst du <span style="text-decoration: underline;">Hilfe zu unserem Abo?</span></p>
</div>
<?php } }?>
<script type="text/javascript"> 
    $(document).ready(function () {
        $('.delete_cart').click(function() {
            var cart_id = $(this).data('id');
            $.ajax({
                url: "<?= base_url()?>home/delete_sub_cart/"+cart_id,
                type: "GET",
                success: function (response) {
                    $.ajax({
                        url: "<?=base_url('home/subscription_cart')?>",
                        type: "GET",
                        success: function (response) {
                            $('#cart_sec').html(JSON.parse(response).view_html);
                        }
                    });
                }
            });
         });});
</script>
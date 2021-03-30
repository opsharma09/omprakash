<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
        $title = "Koffee.com";
        $style_name = "cart";
        require_once("public/include/head.php")?>
        <style type="text/css">
            .alert-warning {
                color: #9b812e;
                background-color: #ffe38b;
                border-color: #ffe38b;
            }
            .cart-form .shop_table .row .col:not(.actions)>* {
                    flex: -1 0 100%;
                }
        </style>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <div id="agbanner">
        <div id="agbBannerBottomDeco"></div>
    </div>
    <!--section cart started.-->
    <section class="cart">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade" id="updated_msg" role="alert">
                        Warenkorb aktualisiert.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show couponerror" role="alert" style="display: none;" >
                    </div>
                    <?php 
                     $session_data=$this->session->userdata('user');
                        if(empty($session_data->email_id)){?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error:</strong> Username required.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php } if(empty($cart) && empty($event_cart)){?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Ihr Warenkorb ist gegenwärtig leer.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <p class="return-to-shop" style="margin: 0 0 15px;">
                        <a class="button wc-backward" href="<?=base_url()?>" style="padding: 9px 20px;color: #fff!important;background-color: #c6a866!important;border: 2px solid #c6a866 !important;border-radius: 3px!important;">
                            Zurück zum Shop     </a>
                    </p>                    
                    <?php }else{?>
                    <form action="<?=base_url('home/proceed_to_checkout')?>" class="cart-form" method="post">
                        <div class="coupon_message_wrap">

                        </div>
                        <div class="shop_table">
                            <div class="row head">
                                <div class="col"><span> </span></div>
                                <div class="col"><span>Produkt</span></div>
                                <div class="col"><span>Pries</span></div>
                                <div class="col"><span>Anzahl</span></div>
                                <div class="col"><span>Zwischensumme</span></div>
                                <div class="col"><span></span></div>
                            </div>
                            
                                <?php $totalPrice = 0;$shipPrice = 2.9;
                                foreach($cart as $val){  ?>
                                    <?php if($val['is_subscription']==0){?>
                                <div class="row">
                                    <div class="col">
                                        <img src="<?= base_url()?><?=$val['image1']?>" alt="">
                                    </div>
                                    <div class="col">
                                        <p class="w-100 m-0"><?=$val['name']?></p>
                                        <p class="info"><?=$val['type']?>, <?=$val['size']?></p>
                                    </div>
                                    <div class="col"><?=$val['price']?> &euro;</div>
                                    <div class="col"><input type="number" class="form-control d-block mb-2 cart_quant" value="<?=$val['myQuan']?>" id="cart_quant" onchange="cart_quantt(this)" style="width: 40%;flex:0 0 auto" data-price="<?=$val['price']?>" data-id="<?=$val['mycart_id']?>" name="cart_quant[]" min="1"></div>
                                    <div class="col price_count"><?php echo $val['myQuan']*$val['price']?> &euro;</div>
                                    <div class="col">
                                        <a href="<?= base_url()?>home/delete_cart_product/<?=$val['mycart_id']?>" class="btn-white">&times;</a>
                                    </div>
                                </div>
                            <?php $totalPrice=$totalPrice+($val['myQuan']*$val['price']);}else{?>
                                <div class="row">
                                    <div class="col">
                                        <img src="<?= base_url()?><?=$val['image1']?>" alt="">
                                    </div>
                                    <div class="col">
                                        
                                        <p class="w-100 m-0"><?=$val['name']?></p>
                                        <p class="info"><?=$val['type']?>, <?=$val['size']?> <br> Datum: <?=date('d-M-Y',strtotime($val['start_date']))?> <br></p> 
                                        <!-- <p><a href="<?=base_url('subscription-detail')?>" style="color:blue !important"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a> -->
                                    </div>
                                     <div class="col flex-row">
                                        <div class="text-center">
                                        <span class="d-block mb-2"><?=$val['price']?> &euro;</span>
                                        <select class="form-control weak_schedule" style="background: #da9f56; color:#fff" data-id="<?=$val['mycart_id']?>" name="weak_schedule[]" id="weak_schedule">
                                            <option value="2" <?php if($val['weak_schedule']==2){ echo 'selected';}?>>2&nbsp;Wochen</option>
                                            <option value="3" <?php if($val['weak_schedule']==3){ echo 'selected';}?>>3&nbsp;Wochen</option>
                                            <option value="4" <?php if($val['weak_schedule']==4){ echo 'selected';}?>>4&nbsp;Wochen</option>
                                            <option value="5" <?php if($val['weak_schedule']==5){ echo 'selected';}?>>5&nbsp;Wochen</option>
                                            <option value="6" <?php if($val['weak_schedule']==6){ echo 'selected';}?>>6&nbsp;Wochen</option>
                                            <option value="7" <?php if($val['weak_schedule']==7){ echo 'selected';}?>>7&nbsp;Wochen</option>
                                            <option value="8" <?php if($val['weak_schedule']==8){ echo 'selected';}?>>8&nbsp;Wochen</option>
                                            <option value="10" <?php if($val['weak_schedule']==10){ echo 'selected';}?>>10&nbsp;Wochen</option>
                                            <option value="12" <?php if($val['weak_schedule']==12){ echo 'selected';}?>>12&nbsp;Wochen</option>
                                            <option value="16" <?php if($val['weak_schedule']==16){ echo 'selected';}?>>16&nbsp;Wochen</option>
                                        </select>
                                    </div>
                                     </div>
                                    <div class="col"><input type="number" class="form-control d-block mb-2 cart_quant" value="<?=$val['myQuan']?>" id="cart_quant" onchange="cart_quantt(this)" style="width: 40%" data-price="<?=$val['price']?>" data-id="<?=$val['mycart_id']?>" name="cart_quant[]" min="1"></div>
                                    <div class="col price_count"><?php echo $val['myQuan']*$val['price']?> &euro;</div>
                                    <div class="col">
                                        <a href="<?= base_url()?>home/delete_cart_product/<?=$val['mycart_id']?>" class="btn-white">&times;</a>
                                    </div>
                                </div>
                                <?php $totalPrice=$totalPrice+($val['myQuan']*$val['price']);}} if(!empty($event_cart)){ foreach ($event_cart as $val) {?>
                                <div class="row">
                                    <div class="col">
                                        <img src="<?= base_url('public/images/logo.svg')?>" alt="">
                                    </div>
                                    <div class="col" style="text-align: left">
                                        <p class="w-100 m-0"><?=$val['type']?><br>Personen: <?=$val['person']?><br> Datum: <?=date('d-M-Y',strtotime($val['start_date']))?><br> 
                                        Zeit: <?=$val['start_time']?></p>
                                        <!-- <p><a href="<?=base_url('subscription-detail')?>" style="color:blue !important"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a> -->
                                    </div>
                                     <div class="col flex-row">
                                        <div class="text-center">
                                        <span class="d-block mb-2"><?=$val['eprice']?> &euro;</span>
                                    </div>
                                     </div>
                                    <div class="col"><?=$val['person']?></div>
                                    <div class="col"><?php echo $val['acprice']?> &euro;</div>
                                    <div class="col">
                                        <a href="<?= base_url()?>home/delete_event/<?=$val['mycart_id']?>" class="btn-white">&times;</a>
                                    </div>
                                </div>
                                <?php $totalPrice=$totalPrice+($val['acprice']); }

                               
                            } ?> 
                            <input type="hidden" name="totalsubPrice" value="<?=$totalsubPrice?>">
                             <div class="row">
                                <div class="col actions">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="coupon">
                                                <input type="text" placeholder="Gutscheincode" id="coupon_text">
                                                <input type="hidden" name="couponID">
                                                <button class="btn-white" type="button" id="gutschein">Gutschein anwenden</button></div>
                                        </div>
                                        <div class="col-md-5 text-right"><button class="btn-white" type="button" id="warenkorb" disabled>Warenkorb aktualisieren</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="cart_totals">
                        <input type="hidden" name="totalPrice" value="<?=$totalPrice?>">
                        <h2>Warenkorb-Summe</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Zwischensumme</th>
                                            <td><?=$totalPrice?> &euro;</td>
                                        </tr>
                                        <tr>
                                            <th>Versand</th>
                                            <td><b><?=$shipPrice?> &euro;</b></td>
                                        </tr>
                                        <tr>
                                            <th>Gesamtsumme</th>
                                            <td><?php echo $sub = $totalPrice+$shipPrice?> &euro;</td>
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
                    </div>
                    </form>
                <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!--section cart ended.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
  <script type="text/javascript">
    $(document).ready(function () {
        $('#coupon_text').val('');
        $('#Weiter_sub').prop('disabled',false);
        $('.weak_schedule').change(function() {
            $('#warenkorb').prop('disabled',false);
            
         });

        // $('.cart_quant').change(function() {
        //     var qty = $(this).val();
        //     $(this).val(qty);
        //     alert(qty);
        //     $('#warenkorb').prop('disabled',false);
            
        //  });
        $('#gutschein').click(function() {
            var coupon_text = $('#coupon_text').val();
            $.ajax({
                url: "<?= base_url()?>order/check_coupons",
                type: "POST",
                data: {coupon_text:coupon_text},
                success: function (response) {
                    // console.log(response);
                     var html = ' <div class="cart_totals"><input type="hidden" name="totalPrice" value="<?=$totalPrice?>"><h2>Warenkorb-Summe</h2><div class="row"><div class="col-md-6"><table><tbody><tr><th>Zwischensumme</th><td><?=$totalPrice?> &euro;</td></tr><tr><th>Versand</th><td><b><?=$shipPrice?> &euro;</b></td></tr><tr><th>Gesamtsumme</th><td><?php echo $sub = $totalPrice+$shipPrice?> &euro;</td></tr><tr><th>inkl. 5 % MwSt. </th><td><?php echo $subtotal = (5 / 100) * $sub;?> &euro;</td></tr></tbody></table><div class="proceed"><button type="submit" class="btn-white"  id="Weiter_sub">Weiter zur Kasse</button></div></div></div></div>';
                    if($.trim(response)=='notok'){
                        $('.couponerror').html('Der Gutschein „'+coupon_text+'“ existiert nicht!.<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>')
                        $('.couponerror').css('display','block');
                        $('.cart_totals').html(html);
                    } else if($.trim(response)=='okbut'){
                        $('.couponerror').html('Your shopping cart contains one or more vouchers. Vouchers cannot be mixed with normal vouchers. Please delete the voucher before adding your voucher.<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>')
                        $('.couponerror').css('display','block');
                        $('.cart_totals').html(html);
                    } else if($.trim(response)=='cat'){
                        // alert('ok');
                        $('.couponerror').html('coupon is not valid for this product.<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>')
                        $('.couponerror').css('display','block');
                        $('.cart_totals').html(html);
                    } else if($.trim(response)=='ok'){
                        $('.couponerror').hide();
                        $.ajax({
                            url: "<?= base_url()?>home/cart",
                            type: "POST",
                            data: {coupon_text:coupon_text},
                            success: function (response) {
                                if(JSON.parse(response).msg == 'success'){
                                    // console.log('hello');
                                    $('.cart_totals').html(JSON.parse(response).view_html);
                                    $('#Weiter_sub').prop('disabled',false);
                                }else{
                                    alert(JSON.parse(response).msg);
                                    $('#Weiter_sub').prop('disabled',true);
                                }
                            }
                        });
                    }else{
                        $('.couponerror').html('Invaild coupon.<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>')
                        $('.couponerror').css('display','block');
                        var html = ' <div class="cart_totals"><input type="hidden" name="totalPrice" value="<?=$totalPrice?>"><h2>Warenkorb-Summe</h2><div class="row"><div class="col-md-6"><table><tbody><tr><th>Zwischensumme</th><td><?=$totalPrice?> &euro;</td></tr><tr><th>Versand</th><td><b><?=$shipPrice?> &euro;</b></td></tr><tr><th>Gesamtsumme</th><td><?php echo $sub = $totalPrice+$shipPrice?> &euro;</td></tr><tr><th>inkl. 5 % MwSt. </th><td><?php echo $subtotal = (5 / 100) * $sub;?> &euro;</td></tr></tbody></table><div class="proceed"><button type="submit" class="btn-white"  id="Weiter_sub">Weiter zur Kasse</button></div></div></div></div>'
                        $('.cart_totals').html(html);
                    }
                }
            });
        });
        $('#warenkorb').click(function() {
            var weakschedule = {};
            var cart = {};
            var count = 1;
            $('select[name="weak_schedule[]"]').each(function(){
                total = parseInt($(this).val());
                cart_id = parseInt($(this).data('id'));
                weakschedule[$(this).attr('id')+count] =  total ;
                weakschedule['cart_id'+count] =  cart_id ;
                ++count;
            });
             count = 1;
            $('input[name="cart_quant[]"]').each(function(){
                quant = parseInt($(this).val());
                cart_id = parseInt($(this).data('id'));
                price = parseInt($(this).data('price'));
                cart[$(this).attr('id')+count] =  quant ;
                cart['cart_id'+count] =  cart_id ;
                cart['cart_price'+count] =  price ;
                ++count;
            });

            $.ajax({
                url: "<?= base_url()?>home/update_cart",
                type: "POST",
                data: {weakschedule:weakschedule,cart:cart},
                success: function (response) {
                    $('#updated_msg').addClass('show');
                    location.reload();
                }
            });
            
         });
    });
    // $(document).on('change', 'select[name="weak_schedule[]"]', function(){
    //     var total = 0;
    //     $('select[name="weak_schedule[]"]').each(function(){
    //         total = $(this).val();
    //         alert(total);
    //     });
    // });
    function cart_quantt(per){
        var qty = $(per).val();
        var p = $(per).data('price');
        $(per).val(qty);
        var price = p * qty;
        $(per).parent().next('.price_count').html(price.toFixed(2)+' &euro;');
        $('#warenkorb').prop('disabled',false);
    }
        
</script>
</body>

</html>

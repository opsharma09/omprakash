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
                        Cart updated
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
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
                    <form action="<?=base_url('home/proceed_to_checkout')?>" class="cart-form">
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
                                <?php if($val['is_subscription']==1){?>
                                <div class="row">
                                    <div class="col">
                                        <img src="<?= base_url()?><?=$val['image1']?>" alt="">
                                    </div>
                                    <div class="col">
                                        <p class="w-100 m-0"><?=$val['name']?></p>
                                        <p class="info"><?=$val['type']?>, <?=$val['size']?> <br>Personen: 1 <br> Datum: <?=date('d-M-Y',strtotime($val['start_date']))?> <br></p> 
                                        <!-- <p><a href="<?=base_url('subscription-detail')?>" style="color:blue !important"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a> -->
                                    </div>
                                     <div class="col flex-row">
                                        <div class="text-center">
                                        <span class="d-block mb-2"><?=$val['price']?> &euro;</span>
                                        <select class="form-control weak_schedule" style="background: #da9f56; color:#fff" data-id="<?=$val['mycart_id']?>">
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
                                    <div class="col"><?=$val['myQuan']?></div>
                                    <div class="col"><?php echo $val['myQuan']*$val['price']?> &euro;</div>
                                    <div class="col">
                                        <a href="<?= base_url()?>home/delete_cart_product/<?=$val['mycart_id']?>" class="btn-white">&times;</a>
                                    </div>
                                </div>
                                <?php $totalPrice=$totalPrice+($val['myQuan']*$val['price']); }elseif($val['is_subscription']==0 && $val['is_event']==0){?>
                                <div class="row">
                                    <div class="col">
                                        <img src="<?= base_url()?><?=$val['image1']?>" alt="">
                                    </div>
                                    <div class="col">
                                        <p class="w-100 m-0"><?=$val['name']?></p>
                                        <p class="info"><?=$val['type']?>, <?=$val['size']?> </p>
                                    </div>
                                    <div class="col"><?=$val['price']?> &euro;</div>
                                    <div class="col"><?=$val['myQuan']?></div>
                                    <div class="col"><?php echo $val['myQuan']*$val['price']?> &euro;</div>
                                    <div class="col">
                                        <a href="<?= base_url()?>home/delete_cart_product/<?=$val['mycart_id']?>" class="btn-white">&times;</a>
                                    </div>
                                </div>

                                <?php  $totalPrice=$totalPrice+($val['myQuan']*$val['price']);}}if(!empty($event_cart)){ foreach ($event_cart as $val) {?>
                                <div class="row">
                                    <div class="col">
                                        <img src="<?= base_url('public/images/logo.svg')?>" alt="">
                                    </div>
                                    <div class="col" style="text-align: left">
                                        <p class="w-100 m-0"><?=$val['type']?><br>Personen: <?=$val['person']?><br> Datum: <?=$val['start_date']?><br> 
                                        Zeit: <?=$val['start_time']?></p>
                                        <!-- <p><a href="<?=base_url('subscription-detail')?>" style="color:blue !important"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a> -->
                                    </div>
                                     <div class="col flex-row">
                                        <div class="text-center">
                                        <span class="d-block mb-2"><?=$val['acprice']?> &euro;</span>
                                        
                                    </div>
                                     </div>
                                    <div class="col"></div>
                                    <div class="col"><?php echo $val['acprice']?> &euro;</div>
                                    <div class="col">
                                        <a href="<?= base_url()?>home/delete_event/<?=$val['mycart_id']?>" class="btn-white">&times;</a>
                                    </div>
                                </div>
                                <?php $totalPrice=$totalPrice+($val['acprice']); }

                               
                            } ?>
                            
                            <div class="row">
                                <div class="col actions">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <!-- <div class="coupon"><input type="text" placeholder="Gutscheincode"><button class="btn-white">Gutschein anwenden</button></div> -->
                                        </div>
                                        <div class="col-md-5 text-right"><button class="btn-white" type="button" id="warenkorb" disabled>Warenkorb aktualisieren</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="cart_totals">
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
                                            <th>inkl. 5 % MwSt.	</th>
                                            <td><?php echo $subtotal = (5 / 100) * $sub;?> &euro;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="proceed"><button type="submit" class="btn-white">Weiter zur Kasse</button></div>
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
        $('.weak_schedule').change(function() {
            $('#warenkorb').prop('disabled',false);
            
         });
        $('#warenkorb').click(function() {
            var idd = $('.weak_schedule').find(':selected').val();
            var id = $('.weak_schedule').data('id');
            // alert(idd+'/'+id);
            $.ajax({
                url: "<?= base_url()?>home/update_cart",
                type: "POST",
                data: {id:id,idd:idd},
                success: function (response) {
                    $('#updated_msg').addClass('show');
                }
            });
            
         });
    });
</script>
</body>

</html>

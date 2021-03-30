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
                .cart a {
                     color: #ffffff !important; 
                    position: relative;
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
                            Your order cancel request send to admin please check your email id for the response.
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
                        <?php } ?>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Ihre Bestellartikel</h3>
                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-3">Rechnungsdetails</h4>
                                <address>
                                    <?=$bill_address['first_name'].' '.$bill_address['last_name']?><br><?=$bill_address['street']?><br><?=$bill_address['additional_address']?><br><?=$bill_address['pincode'].' '.$bill_address['place']?><br><?=$bill_address['phone']?><br><?=$bill_address['email']?>
                                </address>
                                
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <h4>Lieferadresse</h4>
                                <?php if(!empty($del_address)){ ?>
                                <address>
                                    <?=$del_address['first_name'].' '.$del_address['last_name']?><br><?=$del_address['street']?><br><?=$del_address['additional_address']?><br><?=$del_address['pincode'].' '.$del_address['place']?>
                                </address>
                            <?php } ?>
                            </div>
                        </div>
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
                                    <div class="col"><span>Status</span></div>
                                </div>
                                
                                <?php $totalPrice = 0;$shipPrice = 2.9; foreach($cart as $val){ if($val['is_subscription']==0){?>
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
                                        <div class="col flex-row">
                                            <div class="text-center">
                                                <span class="d-block mb-2 p_status" style="color: green"><?php echo $val['otstatus']?></span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                <?php }else{?>
                                    <div class="row">
                                        <div class="col">
                                            <img src="<?= base_url()?><?=$val['image1']?>" alt="">
                                        </div>
                                        <div class="col">
                                            <p class="w-100 m-0"><?=$val['name']?></p>
                                            <p class="info"><?=$val['type']?>, <?=$val['size']?> Datum: <?=date('d-M-Y',strtotime($val['start_date']))?> <br></p> 
                                        </div>
                                        <div class="col flex-row">
                                            <div class="text-center">
                                                <span class="d-block mb-2"><?=$val['price']?> &euro;</span>
                                                <select class="form-control weak_schedule" style="background: #da9f56; color:#fff">
                                                    <option value="2"><?=$val['weak_schedule']?>&nbsp;Wochen</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col"><?=$val['myQuan']?></div>
                                        <div class="col"><?php echo $val['myQuan']*$val['price']?> &euro;</div>
                                        <div class="col flex-row">
                                            <div class="text-center">
                                                <span class="d-block mb-2 p_status" style="color: green"><?php echo $val['otstatus']?></span>
                                                <?php if($val['otstatus'] !='CANCELLED' || $val['otstatus'] !='CONFIRM' ){?><a href="javascript:void(0)" class="btn cancel_button" data-id="<?=$val['myitem_id']?>">Cancel Order</a><?php }?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } } if(!empty($event_cart)){ foreach ($event_cart as $val) {?>
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
                                            <span class="d-block mb-2"><?=$val['aprice']?> &euro;</span>
                                            
                                        </div>
                                         </div>
                                        <div class="col"><?=$val['person']?></div>
                                        <div class="col"><?php echo $val['acprice']?> &euro;</div>
                                        <div class="col flex-row">
                                            <div class="text-center">
                                                <span class="d-block mb-2 p_status" style="color: green"><?php echo $val['otstatus']?></span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                <?php } }?>
                            </div>
                            <div class="cart_totals">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table>
                                            <tbody>
                                               <!--  <tr>
                                                    <th>Zwischensumme</th>
                                                    <td><?php echo $order->total_amount?> &euro;</td>
                                                </tr> -->
                                                <?php if($order->coupon_code != ''){?>
                                                <tr>
                                                    <th>Gutscheinrabatt</th>
                                                    <td><b><?php echo $order->coupon_discount?> &euro;</b></td>
                                                </tr>
                                            <?php } ?>
                                                <tr>
                                                    <th>Versand</th>
                                                    <td><b><?=$shipPrice?> &euro;</b></td>
                                                </tr>
                                                <tr>
                                                    <th>Gesamtsumme</th>
                                                    <td><?php echo $sub = $order->total_amount?> &euro;</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--section cart ended.-->
        <!--footer started.-->

        <?php require_once("public/include/footer.php") ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.cancel_button').click(function() {
                var idd = $(this).data('id');
                if(confirm("Do you want cancel this product ?")){
                    $.ajax({
                        url: "<?= base_url()?>order/cancel_order",
                        type: "POST",
                        data: {id:idd},
                        success: function (response) {
                            $('#updated_msg').addClass('show');
                            $('.p_status').text('CANCELLED');
                        }
                    });
                }
             });

        });
    </script>
    </body>

    </html>

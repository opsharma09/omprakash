<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "coffee-subscription-details";
    require_once("public/include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--inner_content_banner started.-->
    <section class="inner_content_banner">
        <img class="lazy" data-src="<?=base_url()?>public/images/subscription.jpg" alt="">
        <div class="inner_content_banner_content">
            <div class="container">
                <h1>Our Coffee Subscription</h1>
            </div>
        </div>
    </section>
    <!--inner_content_banner ended.-->
    <!--breadcum started.-->
    <div class="breadcums">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcum">
                        <li><a href=""><span class="fas fa-home"></span> Unser Kaffee-Abo </a></li>
                        <li><a href="">Coffee Subscriptie.preventDefault();on</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--breadcum ended.-->
    <!--choose_coffee started.-->
    <section class="choose_coffee">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="coffee-list m-0">
                        <h2 class="title">Choose your coffee for the subscription</h2>
                        <p class="description">You can add more coffees to your subscription later.</p>
                        <div class="title-box">
                            <img src="<?=base_url()?>public/images/coffee-bean.png" alt=""> Select Coffee
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="coffee-list">
                        <div class="coffee_selection">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="wizard">
                                        <div class="wizard-inner">
                                            <ul class="no-gutters nav nav-tabs row" role="tablist"
                                                style="border-bottom: none">
                                                <div class="col-md-6 wahlen1">
                                                    <li role="presentation" class="active nav-item">
                                                        <a href="#step1" id="step1-tab" data-toggle="tab"
                                                            aria-controls="step1" role="tab" class="nav-link active wahlen"
                                                            aria-selected="true">
                                                            <span>Kaffee wählen</span>
                                                        </a>
                                                    </li>
                                                </div>
                                                <div class="col-md-6 intervall1">
                                                    <li role="presentation" class="disabled nav-item">
                                                        <a href="#step2" id="step2-tab" class='nav-link intervall'
                                                            data-toggle="tab" aria-controls="step2" role="tab"
                                                            aria-selected="false">
                                                            <span>Lieferintervall wählen</span>
                                                        </a>
                                                    </li>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step1"
                                            aria-labelledby="step1-tab">
                                            <div class="wizard different_design">
                                                <div class="wizard-inner">
                                                    <ul class="no-gutters nav nav-tabs1 row" role="tablist">
                                                        <div class="col-md-6 div_tab">
                                                            <li role="presentation" class="active">
                                                                <a href="#kaffees_div" data-toggle="tab"
                                                                    aria-controls="kaffees_div" role="tab" class="anchor_c">
                                                                    <span>All coffees</span>
                                                                </a>
                                                            </li>
                                                        </div>
                                                        <div class="col-md-6 div_tab1">
                                                            <li role="presentation" class="disabled">
                                                                <a href="#espresso_div" data-toggle="tab"
                                                                    aria-controls="espresso_div" role="tab" class="anchor_e">
                                                                    <span>Espresso</span>
                                                                </a>
                                                            </li>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="tab-content">
                                                <div class="tab-pane active" role="tabpanel" id="kaffees_div">
                                                    <div class="row">
                                                        <?php if(isset($sub_products)){ foreach($sub_products as $sp){ if($sp['category']==3){?>
                                                        <div class="col-md-4">
                                                            <a href="#product_section"
                                                                class="coffee_selection_box d-block coffee_div"
                                                                data-id="<?=$sp['id']?>" id="coffee_div">
                                                                <img src="<?= base_url()?><?=$sp['image1']?>"
                                                                    alt="product">
                                                                <h5><?=$sp['name']?> &amp; Coffee</h5>
                                                            </a>
                                                        </div>
                                                        <?php }} ?>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" role="tabpanel" id="espresso_div">
                                                    <div class="row">
                                                        <?php foreach($sub_products as $sp){ if($sp['category']==4){?>
                                                        <div class="col-md-4">
                                                            <a href="#product_section"
                                                                class="coffee_selection_box d-block expresso_div"
                                                                data-id="<?=$sp['id']?>" id="expresso_div">
                                                                <img src="<?= base_url()?><?=$sp['image1']?>"
                                                                    alt="product">
                                                                <h5><?=$sp['name']?> &amp; Coffee</h5>
                                                            </a>
                                                        </div>
                                                        <?php }}} ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step2" aria-labelledby="step2-tab"
                                            style="height: 400px;background-color:rgba(0,0,0,0.1) ">
                                            <div class="col-lg-12 pt-4">
                                                <h4>Wähle die Häufigkeit deiner Lieferung</h4>
                                                
                                                <div class="row wochen_div" <?php if(empty($cart)){ ?>style="display: none ;"<?php }?>>
                                                    <div class="col-lg-6">
                                                        <label><strong>Erster Versand: </strong></label>
                                                        <p><?=date('d-m-Y')?></p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label><strong>Danach Versand alle:</strong></label>
                                                        <select class="form-control weak_schedule mb-3">
                                                            <option value="0" selected="selected">
                                                                bitte auswählen</option>
                                                            <option value="2">2&nbsp;Wochen</option>
                                                            <option value="3">3&nbsp;Wochen</option>
                                                            <option value="4">4&nbsp;Wochen</option>
                                                            <option value="5">5&nbsp;Wochen</option>
                                                            <option value="6">6&nbsp;Wochen</option>
                                                            <option value="7">7&nbsp;Wochen</option>
                                                            <option value="8">8&nbsp;Wochen</option>
                                                            <option value="10">10&nbsp;Wochen</option>
                                                            <option value="12">12&nbsp;Wochen</option>
                                                            <option value="16">16&nbsp;Wochen</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                    <div class="row wochen_div1" style="padding-bottom: 10px;<?php if(!empty($cart)){ ?> display: none; <?php } ?>">
                                                    <div class="col-lg-1"></div>
                                                    <div class="col-lg-8" style="border: 1px solid #ae8e35;padding: 10px;text-align: center;color: #ae8e35">
                                                        Bitte wähle zuerst einen Kaffee und dann das Lieferintervall.
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <p>Dein Abo kannst du jederzeit in deinem Kundenkonto ändern, pausieren
                                                    oder kündigen. Wenn du noch kein Kundenkonto hast, kannst du es im
                                                    nächsten Schritt unkompliziert erstellen. Die erste Abo-Lieferung
                                                    zahlst du mit dieser Bestellung. Die weitere Bezahlung des Abos
                                                    erfolgt automatisch pro Lieferung. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12" id="product_section"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right_sidebar">
                        <div class="heading">
                            <h2>Your Subscription</h2>
                            <!-- <p>You have not made a selection yet,. Do you need help with your subscription?</p>
                            <div class="sidebar_inner">
                                <div class="feat_box">
                                    <img src="<?=base_url()?>public/images/truck.png" alt="">
                                    <div class="feat_inner_text">
                                        Free shipping from the 2nd delivery
                                    </div>
                                </div>
                                <div class="feat_box">
                                    <img src="<?=base_url()?>public/images/support.png" alt="">
                                    <div class="feat_inner_text">
                                        incl. project support
                                    </div>
                                </div>
                                <div class="feat_box">
                                    <img src="<?=base_url()?>public/images/adjust.png" alt="">
                                    <div class="feat_inner_text">
                                        Always Adjustable
                                    </div>
                                </div>
                                <div class="feat_box">
                                    <img src="<?=base_url()?>public/images/cancel.png" alt="">
                                    <div class="feat_inner_text">
                                        Cancel at any time
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <div id="cart_sec">
                            <?php $totalPrice=0; if(isset($cart)){

                                if(!empty($cart)){ 
                                    foreach($cart as $key=> $val){?>
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
                                        <a href="javascript:void(0)" class="delete_cart"
                                            data-id="<?=$val['mycart_id']?>" style="font-size: 30px">&times;</a>
                                    </div>
                                </div>
                            </div>
                            <?php $totalPrice=$totalPrice+($val['myQuan']*$val['price']); }?>
                            <div class="col-lg-12 py-3">
                                <ul id="weak_schedule">
                                    <?php if($cart[0]['weak_schedule']>0){ ?>
                                        <li> Starttermin am <?=date('m.d.y',strtotime($cart[0]['start_date']))?></li>
                                         <li > Danach alle <?=$cart[0]['weak_schedule']?> Wochen </li>
                                    <?php }?>
                                </ul>
                                <p style="font-size: 20px"><strong><?=$totalPrice?> €</strong></p>
                            </div>
                            <div class="customAddToCartButtonWrapper col-lg-12 pb-3 interval_div" <?php if($cart[0]['weak_schedule']>0){ ?> style="display: none"<?php }?>>
                                <button class="btn" type="button" onclick="interval_add()"
                                    style="width: 100%;padding: 0px;border-radius: 0px">
                                     Lieferintervall ></button>
                            </div>
                            <div class="customAddToCartButtonWrapper col-lg-12 pb-3 add_div" <?php if($cart[0]['weak_schedule']<=0){ ?> style="display: none"<?php }?>>
                                <button class="btn" type="button" onclick="add_to_cart()" id="add_cart" data-id="2"
                                    style="width: 100%;padding: 0px;border-radius: 0px">
                                    <span class="fa fa-shopping-cart"></span> als Abo in den Warenkorb </button>
                            </div>

                            <?php }else{?>
                            <div class="col-lg-12 py-4">
                                <p>Du hast noch keine Auswahl getroffen, benötigst du <span
                                        style="text-decoration: underline;">Hilfe zu unserem Abo?</span></p>
                            </div>
                            <?php } }?>
                        </div>
                    </div>
                    <!-- <div class="sticky">
                        <div style="background-color: rgba(0,0,0,0.1);padding: 5px;font-weight: bold;">Dein Abo</div>
                        <div class="row" style="padding:15px;" id="cart_sec">
                            <?php if(isset($cart)){if(!empty($cart)){ foreach($cart as $key=> $val){?>
                            <div class="col-lg-12"
                                style="display: inline-flex;padding: 10px;padding-left: 0px;padding-right: 0px;border-bottom: 1px solid rgba(0,0,0,0.1);">
                                <div class="col-lg-2">
                                    <img src="<?= base_url()?><?=$val['image1']?>" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <span>
                                        <p><strong><?=$val['myQuan']?> &#10005; <?=$val['name']?></strong></p>
                                        <p class="info"><?=$val['type']?>, <?=$val['size']?></p>
                                    </span>
                                </div>
                                <div class="col-lg-4" style="text-align: right;">
                                    <a href="javascript:void(0)" class="delete_cart" data-id="<?=$val['mycart_id']?>"
                                        style="font-size: 30px">&times;</a>
                                </div>
                            </div>
                            <?php }?>
                            <div style="padding: 10px">
                                <p style="font-weight: bold"> <span style="font-weight: bold">></span> Starttermin am
                                    <?=date('d-m-Y')?></p><br>
                                <p style="font-weight: bold" id="weak_schedule"><span style="font-weight: bold">></span>
                                    Danach alle 2 Wochen</p>
                            </div>
                            <div class="customAddToCartButtonWrapper col-lg-12" style="padding: 0px;height: 16px;">
                                <button class="btn" type="button" onclick="add_to_cart()" id="add_cart" data-id="2"
                                    style="width: 100%;padding: 0px;border-radius: 0px">
                                    <span class="fa fa-shopping-cart"></span> In den Warenkorb</button>
                            </div>

                            <?php }else{?>
                            <div class="col-lg-12">
                                <p>Du hast noch keine Auswahl getroffen, benötigst du <span
                                        style="text-decoration: underline;">Hilfe zu unserem Abo?</span></p>
                            </div>
                            <?php } }?>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!--choose_coffee ended.-->

    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
    <script type="text/javascript">
    $(document).ready(function() {
        //Initialize tooltips
        $('#product_section').hide();
        $(".intervall1").click(function (e) {
            e.preventDefault();
            var $active = $('.nav-tabs li.active');
            var $active12 = $('.nav-tabs .wahlen');
            $active12.removeClass('active');
            $active12.prop('aria-selected',false);
            $active.addClass('disabled');
            var active1 = $('.intervall1 li.disabled');
            active1.removeClass('disabled');
            active1.addClass('active');
            $('.add_div').css('display','block');
            $('.interval_div').css('display','none');
            ('#add_cart').attr('disabled',true);
        });
        $(".wahlen").click(function (e) {
            e.preventDefault();
            var $active = $('.nav-tabs li.active');
            var $active12 = $('.nav-tabs .intervall');
            $active12.removeClass('active');
            $active12.prop('aria-selected',false);
            $active.removeClass('active');
            $active.addClass('disabled');
            var active1 = $('.wahlen1 li.disabled');
            active1.removeClass('disabled');
            active1.addClass('active');
            var active4 = $('#step1');
            var active3 = $('#step2');
            var active5 = $('.div_tab li a');
            active3.removeClass('active');
            active4.addClass('active');
            active5.addClass('active');
            $('#kaffees_div').addClass('active');
            active5.attr('aria-selected',true);
            $('.add_div').css('display','none');
            $('.interval_div').css('display','block');
        });
        $(".div_tab1").click(function (e) {
            e.preventDefault();
            var $active = $('.nav-tabs1 li.active');
            var $active12 = $('.nav-tabs1 .anchor_e');
            $active12.removeClass('active');
            $active12.prop('aria-selected',false);
            $active.addClass('disabled');
            var active1 = $('.anchor_c li.disabled');
            active1.removeClass('disabled');
            active1.addClass('active');
            
        });
        $(".anchor_e").click(function (e) {
            e.preventDefault();
            var $active = $('.nav-tabs1 li.active');
            var $active12 = $('.nav-tabs1 .anchor_c');
            $active12.removeClass('active');
            $active12.prop('aria-selected',false);
            $active.removeClass('active');
            $active.addClass('disabled');
            var active1 = $('.div_tab li.disabled');
            active1.removeClass('disabled');
            active1.addClass('active');
        });
        $('.coffee_div').click(function(e) {
            var target = $($(this).attr('href'));
            console.log(target);
            var product_id = $(this).data('id');
            $.ajax({
                url: "<?=base_url('products/subscription_product')?>",
                type: "POST",
                data: {
                    product_id: product_id
                },
                success: function(response) {
                    $('#product_section').show();
                    $('#product_section').html(JSON.parse(response).view_html);
                }
            });
            $('#product_section').show();
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 600);
            e.preventDefault();
        });
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
        $('.weak_schedule').change(function() {
            var mydate = new Date
            var idd = $(this).find(':selected').val();
            if(idd>0){
                $('#weak_schedule').html('<li> Starttermin am '+('0' + (mydate.getMonth()+1)).slice(-2) + '.'+('0' + mydate.getDate()).slice(-2) + '.'+mydate.getFullYear()+'</li> <li > Danach alle ' + idd +' Wochen </li>');
                
                $.ajax({
                    url: "<?=base_url('home/add_sub_cart_weak')?>",
                    type: "POST",
                    data: {
                        idd: idd
                    },
                    success: function(response) {
                        $('#add_cart').attr('data-id', idd);
                        $('#add_cart').attr('disabled',false);
                        $('#weak_schedule').show();
                    }
                });
            }

        });
        // $('.nav-tabs > li a[title]').tooltips();
        // $('.nav-tabs1 > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

    });

    function add_to_cart(per) {
        var id = $('#add_cart').data('id');
        var date = '<?=date('d-m-Y')?>';
        $.ajax({
            url: "<?=base_url('home/sub_to_cart')?>",
            type: "POST",
            data: {
                weak_schedule: id,
                date: date
            },
            success: function(response) {
                var obj = JSON.parse(response);
                if (obj.status == 'true') {
                    window.location.href = '<?= base_url()?>home/cart';
                } else {
                    alert("Please Login");
                    window.location.href = '<?= base_url()?>login';
                }
            }
        });

    }
    function interval_add() {
        $('#product_section').hide();
        var $active = $('.nav-tabs li.active');
        var $active12 = $('.nav-tabs .wahlen');
        $active12.removeClass('active');
        $active.removeClass('active');
        $active12.attr('aria-selected',false);
        $active.addClass('disabled');
        var active1 = $('.intervall1 li.disabled');
        var active2 = $('.intervall1 li a');
        var active3 = $('.tab-content div.active');
        var active4 = $('#step2');
        active3.removeClass('active');
        active4.addClass('active');
        active1.removeClass('disabled');
        active1.addClass('active');
        active2.addClass('active');
        active2.attr('aria-selected',true);
        $('.add_div').css('display','block');
        $('.interval_div').css('display','none');
        $('#add_cart').attr('disabled',true);
        //this is added for the animation 
        $(this).click(function(){
            $('html, body').animate({
                scrollTop: $("body").offset().top + 450
            }, 600);
        })
    }

    function add_sub_cart() {
        var idd = $('#mahlgrad').find(':selected').val();
        if (idd != '') {
            var product_id = $('#menge').val();
            var qunatity = $('#anzahl').val();
            var price = $('#menge').find(':selected').attr('price');
            var totalprice = qunatity * price;
            //console.log('product_id=' + product_id + ' qunatity=' + qunatity + ' totalprice' + totalprice);
            if(qunatity>=1){
            $.post('<?= base_url()?>home/add_subs_cart/', {
                    product_details_id: product_id,
                    price: price,
                    qty: qunatity
                },
                function(data, status) {
                    var obj = JSON.parse(data);
                    if (obj.status == 'true') {
                        // alert("Artikel erfolgreich in den Warenkorb gelegt");
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
                        $('html, body').animate({
                            scrollTop: $(".right_sidebar").offset().top - 210
                        }, 600);
                        // e.preventDefault();
                        // window.location.href = '<?= base_url()?>subscription-detail';
                    } else {
                        alert("Please Login");
                        window.location.href = '<?= base_url()?>login';
                    }
                });
            } else {
                    alert('Please Enter Positive Quantity');
                }
        } else {
            alert('Please Select Mahlgrad');
        }

    }
    // $(".interval_div button").click(function(){
    //     $('html, body').animate({
    //         scrollTop: $("body").offset().top + 450
    //     }, 600);
    // })
    </script>
</body>

</html>
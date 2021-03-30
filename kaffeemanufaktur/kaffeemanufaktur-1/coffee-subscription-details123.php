<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "coffee-subscription-details";
    require_once("public/include/head.php")?>
    <style type="text/css">
        ul.nav-wizard li {
    position: unset !important;}
    .wizard {
        margin: 20px auto;
        background: #fff;
    }
    
        .wizard .nav-tabs {
            position: relative;
            padding-top: 10px;
            margin-bottom: 0;
            /*border-bottom-color: #e0e0e0;*/
        }
    
        .wizard > div.wizard-inner {
            position: relative;
        }
    
    /*.connecting-line {
        height: 2px;
        background: #e0e0e0;
        position: absolute;
        width: 80%;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 50%;
        z-index: 1;
    }*/
    
    .wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
        color: #555555;
        cursor: default;
        border: 0;
        border-bottom-color: transparent;
        padding: 5px;

    }
     .wizard .nav-tabs li  a{
        color: #000000 !important;
        font-weight: bold;
        font-size: 15px;
     }
    span.round-tab {
        width: 70px;
        height: 70px;
        line-height: 70px;
        display: inline-block;
        border-radius: 100px;
        background: #fff;
        border: 2px solid #e0e0e0;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 25px;
    }
    span.round-tab i{
        color:#555555;
    }
   
    .wizard li.active span.round-tab i{
        color: #5bc0de;
    }
    
    span.round-tab:hover {
        color: #333;
        border: 2px solid #333;
    }
    
    .wizard .nav-tabs > li {
        width: 25%;
    }
    
    .wizard li:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 0;
        margin: 0 auto;
        bottom: 0px;
        /*border: 5px solid transparent;*/
        /*border-bottom-color: #5bc0de;*/
        /*transition: 0.1s ease-in-out;*/
    }
    
    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 1;
        margin: 0 auto;
        bottom: 0px;

        /*border: 10px solid transparent;*/
        /*border-bottom-color: #5bc0de;*/
    }
    
    .wizard .nav-tabs > li a {
        width: 70px;
        height: 70px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
        color:black !important;
    }
    
        .wizard .nav-tabs > li a:hover {
            background: transparent;
        }
    
    .wizard .tab-pane {
        position: relative;
        padding-top: 50px;
    }
    
    .wizard h3 {
        margin-top: 0;
    }
    
    @media( max-width : 585px ) {
    
        .wizard {
            width: 90%;
            height: auto !important;
        }
    
        span.round-tab {
            font-size: 16px;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }
    
        .wizard .nav-tabs > li a {
            width: 50px;
            height: 50px;
            line-height: 50px;

        }
    
        .wizard li.active:after {
            content: " ";
            position: absolute;
            left: 35%;
        }
    }
    div.sticky {
  /*position: -webkit-sticky;*/
  position: fixed;
  top: 20%;
  border-top: 2px solid black;
  /*height:400px;*/
  border:1px solid rgba(0,0,0,0.1);
  /*background-color: yellow;*/
  width:30%;
  /*z-index:100;*/

    </style>
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
                        <li><a href="">Coffee Subscription</a></li>
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
                <div class="col-lg-8">
                    <div class="coffee-list">
                        <h2 class="title">Choose your coffee for the subscription</h2>
                        <p class="description">You can add more coffees to your subscription later.</p>
                        <div class="title-box">
                            <img src="<?=base_url()?>public/images/coffee-bean.png" alt=""> Select Coffee
                        </div>
                        <div class="coffee_selection">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="wizard" style="border-top: 2px solid black;padding-top: 0px">
                                        <div class="wizard-inner">
                                            <ul class="nav nav-tabs" role="tablist" style="border-bottom: none">
                                                <div class="col-lg-6">
                                                    <li role="presentation" class="active">
                                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab">
                                                            <span>Kaffee wählen</span>
                                                        </a>
                                                    </li>
                                                </div>
                                                <div class="col-lg-6">
                                                    <li role="presentation" class="disabled">
                                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab">
                                                            <span >Lieferintervall wählen</span>
                                                        </a>
                                                    </li>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                        <div class="wizard">
                                            <div class="wizard-inner">
                                                <ul class="nav nav-tabs" role="tablist" style="padding-bottom: 10px;">
                                                    <div class="col-lg-4">
                                                    <li role="presentation" class="active">
                                                        <a href="#kaffees_div" data-toggle="tab" aria-controls="kaffees_div" role="tab">
                                                            <span>All coffees</span>
                                                        </a>
                                                    </li>
                                                </div>
                                                <div class="col-lg-4">
                                                    <li role="presentation" class="disabled">
                                                        <a href="#espresso_div" data-toggle="tab" aria-controls="espresso_div" role="tab">
                                                            <span >Espresso</span>
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
                                                        <a href="#product_section" class="coffee_selection_box d-block coffee_div" data-id="<?=$sp['id']?>" id="coffee_div">
                                                            <img src="<?= base_url()?><?=$sp['image1']?>" alt="product">
                                                            <h5><?=$sp['name']?> &amp; Coffee</h5>
                                                        </a>
                                                    </div>
                                                <?php }} ?>
                                                </div>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="espresso_div">
                                                <div class="row"><?php foreach($sub_products as $sp){ if($sp['category']==4){?>
                                                    <div class="col-md-4">
                                                        <a href="#product_section" class="coffee_selection_box d-block expresso_div" data-id="<?=$sp['id']?>" id="expresso_div">
                                                            <img src="<?= base_url()?><?=$sp['image1']?>" alt="product">
                                                            <h5><?=$sp['name']?> &amp; Coffee</h5>
                                                        </a>
                                                    </div>
                                                <?php }}} ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="step2" style="height: 400px;background-color:rgba(0,0,0,0.1) ">
                                        <div style="padding: 10px;padding-left: 100px;padding-right: 100px">
                                            <h4>Wähle die Häufigkeit deiner Lieferung</h4>
                                            <div class="row" style="padding-bottom: ">
                                                <div class="col-lg-6">
                                                    <label><strong>Erster Versand: </strong></label>
                                                    <p><?=date('d-m-Y')?></p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label><strong>Danach Versand alle:</strong></label>
                                                    <select class="form-control weak_schedule">
                                                        <option value="0" selected="selected" disabled="disabled">bitte auswählen</option>
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
                                        </div>
                                        <div class="col-lg-12">
                                            <p>Dein Abo kannst du jederzeit in deinem Kundenkonto ändern, pausieren oder kündigen. Wenn du noch kein Kundenkonto hast, kannst du es im nächsten Schritt unkompliziert erstellen. Die erste Abo-Lieferung zahlst du mit dieser Bestellung. Die weitere Bezahlung des Abos erfolgt automatisch pro Lieferung. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right_sidebar">
                        <div class="heading">
                            <h2>Your Subscription</h2>
                            <p>You have not made a selection yet,. Do you need help with your subscription?</p>
                            <div class="sidebar_inner">
                            <div class="feat_box">
                                <img src="<?=base_url()?>public/images/truck.png" alt="">
                                <div class="feat_inner_text">
                                    Free shipping from the 2nd delivery
                                </div>
                            </div><div class="feat_box">
                                <img src="<?=base_url()?>public/images/support.png" alt="">
                                <div class="feat_inner_text">
                                    incl. project support
                                </div>
                            </div><div class="feat_box">
                                <img src="<?=base_url()?>public/images/adjust.png" alt="">
                                <div class="feat_inner_text">
                                    Always Adjustable
                                </div>
                            </div><div class="feat_box">
                                <img src="<?=base_url()?>public/images/cancel.png" alt="">
                                <div class="feat_inner_text">
                                    Cancel at any time
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="sticky">
                        <div style="background-color: rgba(0,0,0,0.1);padding: 5px;font-weight: bold;">Dein Abo</div>
                        <div class="row" style="padding:15px;" id="cart_sec">
                            <?php if(isset($cart)){if(!empty($cart)){ foreach($cart as $key=> $val){?>
                            <div class="col-lg-12" style="display: inline-flex;padding: 10px;padding-left: 0px;padding-right: 0px;border-bottom: 1px solid rgba(0,0,0,0.1);">
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
                            <div style="padding: 10px">
                                <p style="font-weight: bold"> <span style="font-weight: bold">></span> Starttermin am <?=date('d-m-Y')?></p><br>
                                <p style="font-weight: bold" id="weak_schedule"><span style="font-weight: bold">></span> Danach alle 2 Wochen</p>
                            </div>
                            <div class="customAddToCartButtonWrapper col-lg-12" style="padding: 0px;height: 16px;">
                                <button class="btn" type="button" onclick="add_to_cart()" id="add_cart"  data-id="2" style="width: 100%;padding: 0px;border-radius: 0px">
                                    <span class="fa fa-shopping-cart"></span> In den Warenkorb</button>
                            </div>

                        <?php }else{?>
                        <div class="col-lg-12">
                            <p>Du hast noch keine Auswahl getroffen, benötigst du <span style="text-decoration: underline;">Hilfe zu unserem Abo?</span></p>
                        </div>
                    <?php } }?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 10px">
                <div class="col-lg-8" id="product_section" style="border: 1px solid gray; padding: 20px"></div>

            </div>
        </div>
    </section>
    <!-- <section id="product_section">
             
    </section> -->
    <!--choose_coffee ended.-->

    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
<script type="text/javascript">
    $(document).ready(function () {
        //Initialize tooltips
        $('#product_section').hide();
        $('.coffee_div').click(function() {
            var product_id = $(this).data('id');
            $.ajax({
                url: "<?=base_url('products/subscription_product')?>",
                type: "POST",
                data: {product_id:product_id},
                success: function (response) {
                    $('#product_section').show();
                    $('#product_section').html(JSON.parse(response).view_html);
                }
            });
         });
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
         });
        $('.weak_schedule').change(function() {
            var idd = $(this).find(':selected').val();
            $('#weak_schedule').html(' <span style="font-weight: bold">></span> Danach alle '+idd+' Wochen');
            $('#add_cart').attr('data-id', idd);
            
         });
        $('.nav-tabs > li a[title]').tooltips();
        // $('.nav-tabs1 > li a[title]').tooltip();
        
        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
    
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
            data:{weak_schedule:id,date:date},
            success: function (response) {
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
    function add_sub_cart() {
    var idd = $('#mahlgrad').find(':selected').val();
    if(idd != ''){
        var product_id = $('#menge').val();
        var qunatity = $('#anzahl').val();
        var price = $('#menge').find(':selected').attr('price');
        var totalprice = qunatity * price;
        //console.log('product_id=' + product_id + ' qunatity=' + qunatity + ' totalprice' + totalprice);
    
        $.post('<?= base_url()?>home/add_subs_cart/', {
                product_details_id: product_id,
                qty: qunatity
            },
            function(data, status) {
                var obj = JSON.parse(data);
                if (obj.status == 'true') {
                    // alert("Artikel erfolgreich in den Warenkorb gelegt");
                    $.ajax({
                        url: "<?=base_url('home/subscription_cart')?>",
                        type: "GET",
                        success: function (response) {
                            $('#cart_sec').html(JSON.parse(response).view_html);
                        }
                    });
                    // window.location.href = '<?= base_url()?>subscription-detail';
                } else {
                    alert("Please Login");
                    window.location.href = '<?= base_url()?>login';
                }
            });
        } else {
        alert('Please Select Mahlgrad');
        }
    
    }
</script>
</body>

</html>
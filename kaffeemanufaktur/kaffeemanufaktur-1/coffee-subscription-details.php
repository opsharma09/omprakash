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
                                                <div class="col-md-6">
                                                    <li role="presentation" class="active nav-item">
                                                        <a href="#step1" id="step1-tab" data-toggle="tab"
                                                            aria-controls="step1" role="tab" class="nav-link active"
                                                            aria-selected="true">
                                                            <span>Kaffee wählen</span>
                                                        </a>
                                                    </li>
                                                </div>
                                                <div class="col-md-6">
                                                    <li role="presentation" class="disabled nav-item">
                                                        <a href="#step2" id="step2-tab" class='nav-link'
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
                                                    <ul class="no-gutters nav nav-tabs row" role="tablist">
                                                        <div class="col-md-4">
                                                            <li role="presentation" class="active">
                                                                <a href="#kaffees_div" data-toggle="tab"
                                                                    aria-controls="kaffees_div" role="tab">
                                                                    <span>All coffees</span>
                                                                </a>
                                                            </li>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <li role="presentation" class="disabled">
                                                                <a href="#espresso_div" data-toggle="tab"
                                                                    aria-controls="espresso_div" role="tab">
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
                                            <div class="col-lg-12 pt-4s">
                                                <h4>Wähle die Häufigkeit deiner Lieferung</h4>
                                                <div class="row" style="padding-bottom: ">
                                                    <div class="col-lg-6">
                                                        <label><strong>Erster Versand: </strong></label>
                                                        <p><?=date('d-m-Y')?></p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label><strong>Danach Versand alle:</strong></label>
                                                        <select class="form-control weak_schedule mb-3">
                                                            <option value="0" selected="selected" disabled="disabled">
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
                            <?php if(isset($cart)){if(!empty($cart)){ foreach($cart as $key=> $val){?>
                            <div class="col-lg-12 py-3 right_product_detials">
                                <div class="row">
                                    <div class="col-lg-2 px-2">
                                        <img src="<?= base_url()?><?=$val['image1']?>" alt="">
                                    </div>
                                    <div class="col-lg-9 col-11 px-2">
                                        <div>
                                            <p><strong><?=$val['myQuan']?> &#10005; <?=$val['name']?></strong></p>
                                            <small class="info"><?=$val['type']?>, <?=$val['size']?></small>
                                        </div>
                                    </div>
                                    <div class="col-1 pl-0 pr-2" style="text-align: right;">
                                        <a href="javascript:void(0)" class="delete_cart"
                                            data-id="<?=$val['mycart_id']?>" style="font-size: 30px">&times;</a>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            <div class="col-lg-12 py-3">
                                <ul>
                                    <li> Starttermin am<?=date('d-m-Y')?></p>
                                    <li id="weak_schedule"> Danach alle 2 Wochen</li>
                                </ul>
                            </div>
                            <div class="customAddToCartButtonWrapper col-lg-12 pb-3" style="">
                                <button class="btn" type="button" onclick="add_to_cart()" id="add_cart" data-id="2"
                                    style="width: 100%;padding: 0px;border-radius: 0px">
                                    <span class="fa fa-shopping-cart"></span> In den Warenkorb</button>
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
        $('.coffee_div').click(function() {
            var target = $($(this).attr('href'));
            // $('#product_section').show();
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 600);
            // e.preventDefault();
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
                        }
                    });
                }
            });
        });
        $('.weak_schedule').change(function() {
            var idd = $(this).find(':selected').val();
            $('#weak_schedule').html(' <span style="font-weight: bold">></span> Danach alle ' + idd +
                ' Wochen');
            $('#add_cart').attr('data-id', idd);

        });
        $('.nav-tabs > li a[title]').tooltips();
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

    function add_sub_cart() {
        var idd = $('#mahlgrad').find(':selected').val();
        if (idd != '') {
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
                            success: function(response) {
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
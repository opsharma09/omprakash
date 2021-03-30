<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "product";
    require_once("public/include/head.php")?>
</head>
<?php $price_array = array();
        $min=0;
        $max=0;
        if(!empty($product_details)){
            foreach ($product_details as $value1) {
               $price_array[] = $value1['price'];
            }
            if(!empty($price_array)){
                $min = min($price_array);
                $max = max($price_array);
            }
        }
     ?>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--helperBox started.-->

    <div id="helperBox">
        <div class="buylabel">
            <div class="buyLabelInner">BESTELLEN</div>
        </div>
        <div class="product_selector_inner">
            <form action="#">
                <div class="form-row">
                    <div class="col-12 back" <?php if($product[0]['category']==19 || $product[0]['category']==20 || $is_package == 'Y'){?>style="display: none" <?php } ?>>
                        <label for="mahlgrad">Mahlgrad</label>
                        <select name="" id="mahlgrad" class="form-control" onchange="myFunction(this)">
                            <option value="" disabled="" selected="" hidden="">Wählen Sie eine Option</option>
                            <?php $idd=0;
                            foreach ($product_details as $key=> $value2) {
                                    if($key ==0){
                                    foreach($value2['variation_id'] as $vari){
                                    $idd = $vari['variation_id'];
                                    $cat = $this->db->query("select * from product_variation where id = $idd")->row_array();?>
                                    <option value="<?= $cat['id']; ?>" data-id="<?= $value2['product_id']; ?>">
                                <?= $cat['name']; ?></option>
                            <?php
                                  }
                                  }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-12 back">
                        <?php if($product[0]['category']==19 || $product[0]['category']==20 || $is_package == 'Y'){
                            if (!empty($product_details)) {
                                # code...
                            $idd = $product_details[0]['variation_id'][0]['variation_id'];
                            $cat = $this->db->query("select * from product_variation where id = $idd")->row_array();?>
                            <input type="hidden" name="mahlgrad" value="<?=$idd?>" data-id="<?=$idd?>">
                        <label  for="menge"><?=$cat['name']?></label>
                        <?php }?>
                        <select name="" id="menge" class="form-control" onchange="resetme();check_quantity()">
                            <option value="" disabled selected hidden>Wählen Sie eine Option</option>
                            <?php if(isset($type)){
                            foreach ($type as $key => $value) {?>
                            <option value="<?=$value['id']?>" price="<?=$value['price']?>"
                                <?php if($key ==0 ){ echo "selected"; }?>><?=$value['size']?></option>
                            <?php } }?>
                        </select>
                        <?php }else{?><label for="menge">Menge</label>
                        <select name="" id="menge" class="form-control" onchange="resetme();check_quantity()">
                            <option value="" disabled selected hidden>Wählen Sie eine Option</option>
                        </select>
                        <?php }?>
                    </div>
                    <div class="col-12">
                        <div class="single_variable_wrap">
                            <div class="quantityWrapper">
                                <label for="anzahl">Anzahl:</label>
                                <input type="number" class="form-control" value="1" id="anzahl"
                                    onchange="check_quantity()" min="1">
                            </div>
                            <div class="customPriceTag">
                                <p id="product_price"><?php if(sizeof($product_details)>1){echo $min.'€ - '.$max.'€';}else{
                                echo $min.' €';
                              }?></p>
                                <input type="hidden" id="price" name="price" value="0">
                            </div>
                            <?php if($min<=0 || $max==0){?><div class="customAddToCartButtonWrapper">
                                <button class="btn" type="button" onclick="add_to_cart()" disabled><span
                                        class="fa fa-shopping-cart"></span> &nbsp;Nicht vorrättig</button>
                            </div><?php }else{?> <div class="customAddToCartButtonWrapper">
                                <button class="btn" type="button" onclick="add_to_cart()"><span
                                        class="fa fa-shopping-cart"></span> In den Warenkorb</button>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </form>
            <!-- <div class="payment-gateway text-center">
                <div class="payment d-inline-block">
                    <img src="http://codesk.work/design/kaffeemanufaktur/images/paypal-min.svg" alt="">
                    <img src="http://codesk.work/design/kaffeemanufaktur/images/paypal.svg" alt="">
                </div>
            </div> -->
        </div>
    </div>
    <!--helperBox ended.-->
    <!--singleProductCoffeeIntroSection started.-->
    <div id="singleProductCoffeeIntroSection" class="singleProductIntroSection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 text-center order-md-last order-lg-first">
                    <div>
                        <h2><?=$product[0]['name']?></h2>
                        <div class="productExcerpt">
                            <p><?=$product[0]['description']?></p>
                            <?php if($product[0]['category']!=19){?>
                            <h6>geeingnet für</h6>
                            <?php $suitable = empty($product[0]['suitable'])? '':explode(',',$product[0]['suitable']);
                            ?>
                            <div class="image">
                                <?php if(!empty($suitable)){foreach ($suitable as $tt) {
                                    $val = $this->db->query("Select * from product_equipment where id = $tt")->row_array();
                                    ?>
                                <div><img src="<?= base_url()?><?=$val['image']?>" alt="" title="<?=$val['name']?>"></div>
                                <?php }} ?>
                            </div>
                            <?php } ?>
                            <h5>Kundenbewertung:</h5>
                            <div class="rating">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="far fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="packshot">
                    <div class="packshotPosition">
                        <img src="<?= base_url()?><?=$product[0]['image1']?>" alt="">
                    </div>
                </div>
            </div>
            <div class="fruitSectionWrapper">
                <div class="fruitElementWrapper">
                    <img src="<?= base_url()?><?=$product[0]['image']?>" alt="">
                </div>
            </div>
        </div>
        <?=html_entity_decode($product[0]['product_detail'])?><br>
        <!--product_wrapper started.-->
        <div class="product_wrapper">
            <div class="products text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="product-title">Kaffees die dir auch gefallen könnten:</h2>
                        </div>
                        <?php $price_array = array(); foreach($product_list as $value){
                            $product_details = $this->Common->product($value['id']);
                            foreach ($product_details as $value1) {
                               $price_array[] = $value1['price'];
                            }
                            $min=0;
                            $max=0;
                            if(!empty($price_array)){
                                $min = min($price_array);
                                $max = max($price_array);
                            }
                         ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product">
                                <a href="<?=base_url('produkt/'.com_slugify($value['e_name']))?>" class="d-block">
                                    <div class="image_frame">
                                        <div class="image_wrapper">
                                            <div class="mask"></div>
                                            <img src="<?= base_url()?><?=$value['image1']?>" alt="">
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <div class="star_rating"><span class="fas fa-star"></span><span
                                                class="fas fa-star"></span><span class="fas fa-star"></span><span
                                                class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                        <h4 class="product_title"><?=ucfirst($value['name'])?></h4>

                                        <span class="price"><?=$min.' € - '.$max.' €'?></span>
                                    </div>
                                    <?php if($product[0]['category']!=19){
                                $taste = empty($value['taste'])? '':explode(',',$value['taste']);
                                 ?>
                                    <div class="categoryThumbnailsContainer">
                                        <span class="form-row mb-3">
                                            <?php if(!empty($taste)){foreach ($taste as $tt) {
                                            $val = $this->db->query("Select * from product_equipment where id = $tt")->row_array();
                                            ?>
                                            <span class="col-4">
                                                <span class="singleCategoryThumbnail">
                                                    <img src="<?= base_url()?><?=$val['image']?>" alt=""
                                                        title="<?=$val['name']?>">
                                                </span>
                                            </span>
                                            <?php }} ?>
                                        </span>
                                        <span class="form-row">
                                            <span class="col-6">
                                                <span class="middle">Körper:</span>
                                            </span>
                                            <span class="col-6 text-left">
                                                <div class="circleBox">
                                                    <span class="circle circle100"></span> <span
                                                        class="circle circle100"></span> <span
                                                        class="circle circle50"></span> <span
                                                        class="circle circle0"></span>
                                                    <span class="circle circle0"></span>
                                                </div>
                                                <?= $value['body'];?>
                                                <!-- geschmeidig, rund -->
                                            </span>
                                            <span class="col-6">
                                                <span class="middle">Säure:</span>
                                            </span>
                                            <span class="col-6 text-left">
                                                <div class="circleBox">
                                                    <span class="circle circle100"></span> <span
                                                        class="circle circle100"></span> <span
                                                        class="circle circle50"></span> <span
                                                        class="circle circle0"></span>
                                                    <span class="circle circle0"></span>
                                                </div>
                                                <?= $value['acid'];?>
                                                <!-- frisch, ausgewogen -->
                                            </span>
                                            <span class="col-6">
                                                <span class="middle">Nachklang:</span>
                                            </span>
                                            <span class="col-6 text-left">
                                                <div class="circleBox">
                                                    <span class="circle circle100"></span> <span
                                                        class="circle circle100"></span> <span
                                                        class="circle circle50"></span> <span
                                                        class="circle circle0"></span>
                                                    <span class="circle circle0"></span>
                                                </div>
                                                <?= $value['aftertaste'];?>
                                                <!-- weich, komplex -->
                                            </span>
                                        </span>
                                    </div>
                                    <?php } ?>
                                </a>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
        <!--product_wrapper ended.-->
        <!--footer started.-->
        <?php require_once("public/include/footer.php") ?>
    <script>
    $( document ).ready(function() {
    var idds = $('#mahlgrad').find(':selected').data('id');
    var ids = $('#mahlgrad').find(':selected').val();
    $.post('<?= base_url()?>products/select_type/' + ids + '/' + idds,
        function(data, status, jqXHR) {
            var obj = JSON.parse(data);
            $('#menge').append('option value="" disabled="" selected="">Wählen Sie eine Option</option>');
            for (i = 0; i < obj.length; i = i + 1) {
                if (i == 0) {
                    $('#menge').append("<option value='" + obj[i].id + "' price='" + obj[i].price +
                        "' selected>" + obj[i].size + "</option>");
                    check_quantity();
                } else {
                    $('#menge').append("<option value='" + obj[i].id + "' price='" + obj[i].price + "'>" +
                        obj[
                            i].size + "</option>");
                }
            }

        })


    });
    if ($(window).width() >= 992) {
            function form_open() {
                var single_bottom = document.querySelector("#singleProductCoffeeIntroSection").getBoundingClientRect()
                    .top;
                var hover;
                if ($("#helperBox:hover").length != 0) {
                    hover = "yes";
                } else {
                    hover = "no";
                }
                var x = $(this).scrollTop();
                if (single_bottom <= -500 && hover == "no") {
                    var width = $("#helperBox").width() - $("#helperBox .buylabel").width();
                    $("#helperBox").css("transform", "translate(" + width + "px, calc(-50% + 65px))")
                } else {
                    $("#helperBox").css("transform", "")
                }
            }
            form_open();
            $(window).scroll(form_open);
            $(window).resize(form_open);
            $("#helperBox").mouseover(function() {
                $(this).css("transform", "")
            })
            $("#helperBox").mouseout(function() {
                var single_bottom = document.querySelector("#singleProductCoffeeIntroSection").getBoundingClientRect().top;
                if (single_bottom >= -100) {
                    $("#helperBox").css("transform", "")
                    console.log("It is hover not.");
                } else {
                    var width = $("#helperBox").width() - $("#helperBox .buylabel").width();
                    $(this).css("transform", "translate(" + width + "px, calc(-50% + 65px))")
                    console.log("It is hover.");
                }
            })
        }

        if ($(window).width() >= 992) {
            $(window).scroll(function() {
                var x = $(window).scrollTop();
                var height = $(window).height();
                //if ($(".#product_fixed")[0]){
                    if (x > $("#product_fixed").offset().top - height) {
                        if ($(".packshotPosition").length > 0) {
                            var top = $(".packshotPosition img").offset().top - 6 + "px";
                        }
                        $(".packshotPosition").css("top", top);
                        $(".packshotPosition").addClass("packshotPositionBottom").removeClass("packshotPosition");;
                    } else {
                        $(".packshotPositionBottom").css("position", "").css("top", "")
                        $(".packshotPositionBottom").addClass("packshotPosition").removeClass("packshotPositionBottom");;
                    }
                //}
            })
        }

        function myFunction(per) {
            var id = $(per).val();

            var idd = $(per).find(':selected').data('id');
            // alert(idd);
            $('#menge option').each(function() {
                if ($(this).val() != '') {
                    $(this).remove();
                }
            });
            $.post('<?= base_url()?>products/select_type/' + id + '/' + idd,
                function(data, status, jqXHR) {
                    var obj = JSON.parse(data);
                    $('#menge').append('option value="" disabled="" selected="">Wählen Sie eine Option</option>');
                    for (i = 0; i < obj.length; i = i + 1) {
                        if (i == 0) {
                            $('#menge').append("<option value='" + obj[i].id + "' price='" + obj[i].price +
                                "' selected>" + obj[i].size + "</option>");
                            check_quantity();
                        } else {
                            $('#menge').append("<option value='" + obj[i].id + "' price='" + obj[i].price + "'>" +
                                obj[
                                    i].size + "</option>");
                        }
                    }

                })
        }

        function resetme() {
            $('#anzahl').val('1');
        }

        function check_quantity() {
            var q = $('#anzahl').val();
            // var p =  $('#product_price').text();
            var p = $('#menge').find(':selected').attr('price');
            var main = q * p;
            $('#product_price').text(main.toFixed(2) + ' €');
            $('#price').val(main.toFixed(2));
        }


        function add_to_cart() {
            var pcat = '<?php echo $product[0]['category'];?>';
            var idd = $('#mahlgrad').find(':selected').val();
            if (idd != '' || pcat==19) {
                var product_id = $('#menge').val();
                var qunatity = $('#anzahl').val();
                var price = $('#menge').find(':selected').attr('price');
                var totalprice = qunatity * price;
                //console.log('product_id=' + product_id + ' qunatity=' + qunatity + ' totalprice' + totalprice);
                if(qunatity>=1){
                $.post('<?= base_url()?>home/add_to_cart/', {
                        product_details_id: product_id,
                        price: price,
                        qty: qunatity
                    },
                    function(data, status) {
                        var obj = JSON.parse(data);
                        if (obj.status == 'true') {
                            // alert("Artikel erfolgreich in den Warenkorb gelegt");
                            window.location.href = '<?= base_url()?>home/cart';
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
        </script>


</body>

</html>
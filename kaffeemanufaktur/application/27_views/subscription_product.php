<?php $price_array = array();
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
     <div id="singleProductCoffeeIntroSection" class="singleProductIntroSection">
        <div class="container-fluid">
        <div class="rating" style="float: right">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="far fa-star"></span> 43
        </div>
        <h2><?=$product[0]['name']?></h2>
            <div class="row">
                <div class="col-lg-4">
                    <div>
                        <img src="<?= base_url()?><?=$product[0]['image1']?>" alt="" style="height: 200px">
                    </div>
                    <div class="form-row">
                        <div class="col-12 back" <?php if($product[0]['category']==19){?>style="display: none" <?php } ?>>
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
                            <?php if($product[0]['category']==19){
                                if (!empty($product_details)) {
                                    # code...
                                $idd = $product_details[0]['variation_id'];
                                $cat = $this->db->query("select * from product_variation where id = $idd")->row_array();?>
                            <label for="menge"><?=$cat['name']?></label>
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
                        
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="productExcerpt">
                        <?php if($product[0]['category']!=19){?>
                        <h6>geeingnet für</h6>
                        <?php $suitable = empty($product[0]['suitable'])? '':explode(',',$product[0]['suitable']);
                         ?>
                        <div class="image" style="display:inline-flex;">
                            <?php if(!empty($suitable)){foreach ($suitable as $tt) {
                                $val = $this->db->query("Select * from product_equipment where id = $tt")->row_array();
                                ?>
                            <div style="padding: 5px"><img src="<?= base_url()?><?=$val['image']?>" alt="" title="<?=$val['name']?>" style="height: 30px"></div>
                            <?php }} ?>

                        </div>
                        <?php } ?>
                        <p><?=$product[0]['description']?></p>
                        <h5>Kundenbewertung:</h5>
                    </div>
                    <!-- <form action="#"> -->
                        <div class="col-12">
                            <div class="single_variable_wrap">
                                <div class="quantityWrapper" style="margin-top: 18px;">
                                    <label for="anzahl">Anzahl:</label>
                                    <input type="number" class="form-control" value="1" id="anzahl"
                                        onchange="check_quantity()" min="1">
                                </div>
                                <div class="customPriceTag" style="margin-top: 22px;">
                                    <p id="product_price" style="font-size: 35px;font-weight: bold;"><?=$min.' € - '.$max.' €'?></p>
                                    <input type="hidden" id="price" name="price" value="0">
                                </div>
                               <?php if($min<=0 || $max==0){?><div class="customAddToCartButtonWrapper" style="margin-top: 30px;">
                                    <button class="btn" type="button" onclick="add_to_cart()" disabled><span
                                            class="fa fa-shopping-cart"></span> &nbsp;Nicht vorrättig</button>
                                </div><?php }else{?> 
                                <div class="customAddToCartButtonWrapper" style="margin-top: 30px;">
                                    <button class="btn" type="button" onclick="add_sub_cart()"  style="width: 100%;height: 42px;"><span
                                            class="fa fa-shopping-cart"></span>  zum Abo hinzufügen</button>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>

<script>
    if ($(window).width() >= 992) {
        function form_open() {
            var single_bottom = document.querySelector("#singleProductCoffeeIntroSection").getBoundingClientRect().top;
            var hover;
            if ($("#helperBox:hover").length != 0) {
                hover = "yes";
            } else {
                hover = "no";
            }
            var x = $(this).scrollTop();
            if (single_bottom <= -100 && hover == "no") {
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
            var width = $("#helperBox").width() - $("#helperBox .buylabel").width();
            $(this).css("transform", "translate(" + width + "px, calc(-50% + 65px))")
        })
    }

    // if ($(window).width() >= 992) {
    //     $(window).scroll(function() {
    //         var x = $(window).scrollTop();
    //         var height = $(window).height();
    //         if ($(".parallax-rev")[0]){
    //         if (x > $("#product_fixed").offset().top - height + 110) {
    //             if ($(".packshotPosition").length > 0) {
    //                 var top = $(".packshotPosition img").offset().top - 26 + "px";
    //             }
    //             $(".packshotPosition").css("top", top);
    //             $(".packshotPosition").addClass("packshotPositionBottom").removeClass("packshotPosition");;
    //         } else {
    //             $(".packshotPositionBottom").css("position", "").css("top", "")
    //             $(".packshotPositionBottom").addClass("packshotPosition").removeClass(
    //             "packshotPositionBottom");;
    //         }
    //     }
    //     })
    // }

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
                for (i = 0; i < obj.length; i = i + 1) {
                    if (i == 0) {
                        $('#menge').append("<option value='" + obj[i].id + "' price='" + obj[i].price +
                            "' selected>" + obj[i].size + "</option>");
                        check_quantity();
                    } else {
                        $('#menge').append("<option value='" + obj[i].id + "' price='" + obj[i].price + "'>" + obj[
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



    </script>
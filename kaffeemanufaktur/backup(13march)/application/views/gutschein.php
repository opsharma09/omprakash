<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "product";
    require_once("public/include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--singleProductCoffeeIntroSection started.-->
    <div id="singleProductCoffeeIntroSection" class="singleProductIntroSection">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 text-center order-md-last order-lg-first">
                    <h2>Gutschein</h2>
                    <div class="productExcerpt">
                        <p>Sie suchen ein Geschenk für Kaffeeliebhaber und können sich nicht entscheiden? <br>Schenken Sie einen unserer Gutscheine - einlösbar in unseren Filialen in der Wunstorfer Straße 33 in Hannover-Limmer und in der Dorfstraße 17 in Burgdorf-Heeßel.</p>
                    </div>
                </div>
                <div class="packshot">
                    <div class="packshotPosition position-static">
                        <img src="<?=base_url()?>public/images/gutschein_wertgutschein_front.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--singleProductCoffeeIntroSection ended.-->
    <!--accessoriesIntroSectionWrapper started.-->
    <div id="accessoriesIntroSectionWrapper">
        <div class="hasSimpleTextArea">
            <div id="accessoriesIntroSectionTopDecoration" style="	background-size: 100% 100%;	background-repeat: no-repeat;	background-image:url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz48IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTUuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj48c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIiB2aWV3Qm94PSIwIDAgMTAwIDMwIj48cGF0aCBkPSJNIDAgMCBMIDQ1IDI3IEMgNTAgMzAgNTAgMzAgNTUgMjcgTCAxMDAgMCBMIDAgMCBaIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBzdHJva2Utd2lkdGg9IjAiIC8+PC9zdmc+')"></div>
            <div class="spotlight"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4 m-auto">
                        <div class="content">
                            <h1>Gutscheine</h1>
                            <p>Für jeden Anlass</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--accessoriesIntroSectionWrapper ended.-->
    <!--helperBox started.-->
    <div id="helperBox">
        <div class="buylabel">
            <div class="buyLabelInner">BESTELLEN</div>
        </div>
        <div class="product_selector_inner">
            <form action="">
                <div class="form-row">
                    <div class="col-12 back">
                        <?php if(isset($product)){if($product['category']==20 || $rate!='attribute_art'){
                            if (!empty($product_details)) {
                                # code...
                            $idd = $product_details['variation_id'];
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
                        <?php }}elseif($rate=='attribute_art'){?>
                            <label for="menge">Wert</label>
                            <select name="" id="menge" class="form-control" onchange="resetme();check_quantity1()">
                                <option value="" disabled selected hidden>Wählen Sie eine Option</option>
                                <option value="10" price="10">10.00€</option>
                                <option value="15" price="15">15.00€</option>
                                <option value="20" price="20">20.00€</option>
                                <option value="50" price="50">50.00€</option>
                                <option value="100" price="100">100.00€</option>
                        </select>
                        <?php }?>
                    </div>
                    <div class="col-12">
                        <div class="single_variable_wrap">
                            <div class="quantityWrapper">
                                <label for="anzahl">Anzahl:</label>
                                <input type="number" class="form-control" value="1" id="anzahl"
                                    onchange="check_quantity()">
                            </div>
                            <div class="customPriceTag">
                                <?php if($rate!='attribute_art'){?>
                                    <p id="product_price"><?=$rate?>,00 €</p>
                                <input type="hidden" id="price" name="price" value="0" data-id="<?php if(isset($product)){if(!empty($product)){echo $product['id'];}}?>">
                            <?php }else{?>
                                <p id="product_price">10,00 € - 100,00 €</p>
                                <input type="hidden" id="price" name="price" value="0" data-id="">
                            <?php }?>
                            </div>
                            <?php if(!empty($product_details) || $rate=='attribute_art'){?>
                            <div class="customAddToCartButtonWrapper">
                                <button class="btn" type="button" onclick="add_to_cart()"><span class="fa fa-shopping-cart"></span> In den Warenkorb</button>
                            </div>
                        <?php }else{?>
                            <div class="customAddToCartButtonWrapper">
                                <button class="btn" type="button" onclick="add_to_cart()" disabled><span
                                        class="fa fa-shopping-cart"></span> &nbsp;Nicht vorrättig</button>
                            </div>
                        <?php }?>
                        </div>
                    </div>
                </div>
            </form>
            <div class="payment-gateway text-center">
                <div class="payment d-inline-block">
                    <img src="images/paypal-min.svg" alt="">
                    <img src="images/paypal.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--helperBox ended.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
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

        if ($(window).width() >= 992) {
            $(window).scroll(function() {
                var x = $(window).scrollTop();
                var height = $(window).height();
                if (x > $("#product_fixed").offset().top - height + 110) {
                    if ($(".packshotPosition").length > 0) {
                        var top = $(".packshotPosition img").offset().top - 26 + "px";
                    }
                    $(".packshotPosition").css("top", top);
                    $(".packshotPosition").addClass("packshotPositionBottom").removeClass("packshotPosition");;
                } else {
                    $(".packshotPositionBottom").css("position", "").css("top", "")
                    $(".packshotPositionBottom").addClass("packshotPosition").removeClass("packshotPositionBottom");;
                }
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
        var p = parseInt('<?=$rate?>');
        // alert(q*p);
        var main = q * p;
        $('#product_price').text(main.toFixed(2) + ' €');
        $('#price').val(main.toFixed(2));
    }
    function check_quantity1() {
        var q = $('#anzahl').val();
            // var p =  $('#product_price').text();
        var p = $('#menge').find(':selected').attr('price');
        // alert(q*p);
        // var main = p;
        // alert(main);
        $('#product_price').text(p + ' €');
        $('#price').val(p);
    }


    function add_to_cart() {
    // var idd = $('#mahlgrad').find(':selected').val();
    // if(idd != ''){
        var product_id = $('#menge').val();
        var qunatity = $('#anzahl').val();
        var price = parseInt('<?=$rate?>');
        var totalprice = qunatity * price;
        //console.log('product_id=' + product_id + ' qunatity=' + qunatity + ' totalprice' + totalprice);
    
        $.post('<?= base_url()?>home/add_to_cart/', {
                product_details_id: product_id,
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
        // } else {
        // alert('Please Select Mahlgrad');
        // }
    
    }
    </script>
</body>

</html>

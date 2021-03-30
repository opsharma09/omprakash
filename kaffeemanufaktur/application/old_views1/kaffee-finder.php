<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "kaffee-finder";
    require_once("public/include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--    coffee finder buttonpage started.-->
    <!--coffee_steps started.-->
    <!-- <form method="post" action="<?=base_url('kaffee/kaffeefinder/')?>" id="kaffeeform"> -->
    <div id="finder_div">
        <section class="coffee_steps coffee_steps1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 id="steps">Schritt 1</h4>
                        <h2 class="coffee_match_title">Wie trinkst du deinen Kaffee am liebsten</h2>
                    </div>
                    <div class="col-md-4" style="padding-top:5px">
                        <div class="coffee_box">
                            <button type="submit" class="finder1" name="drink" value="black" id="Schwarz">
                                <img src="<?=base_url()?>public/images/MCard-Cut-out-11.jpg" alt="" for="Schwarz">
                                <h5 class="coffee_content" for="Schwarz">Schwarz</h5>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top:5px">
                        <div class="coffee_box">
                            <button type="submit" class="finder1" name="drink" id="Milch" value="milk">
                                <img src="<?=base_url()?>public/images/MCard-Cut-out-3-2.jpg" alt="" for="Milch">
                                <h5 class="coffee_content">Mit Milch</h5>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top:5px">
                        <div class="coffee_box">
                            <button type="submit" class="finder1" name="drink" id="Zucker" value="milksugar">
                                <img src="<?=base_url()?>public/images/MCard-Cut-out-3-2.jpg" alt=""  for="Zucker">
                                <h5 class="coffee_content">Mit Milch und Zucker</h5>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top:5px">
                        <div class="coffee_box">
                            <button type="submit" class="finder1" name="drink" id="Entkoffeiniert" value="decaf">
                                <img src="<?=base_url()?>public/images/MCard-Cut-out-3-2.jpg" alt="" for="Entkoffeiniert">
                                <h5 class="coffee_content">Entkoffeiniert</h5>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox mb-3 mt-4">
                            <!-- <input type="checkbox"  id="Entkoffeiniert"> -->
                            <!-- <label class="custom-control-label" for="Entkoffeiniert">Entkoffeiniert</label> -->
                        </div>
                    </div>
                    <!-- <div class="col-md-6 text-right mt-4"><button class="btn-white finder1" type="button">NÄCHSTER SCHRITT</button></div> -->
                </div>
            </div>
        </section>
        <!--coffee_steps ended.-->
        <!--coffee_steps started.-->
        <section class="coffee_steps coffee_steps2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 id="steps">Schritt 2</h4>
                        <h2 class="coffee_match_title">Wie bereitest du deinen Kaffee meistens zu?</h2>
                    </div>
                    <?php foreach ($product_equipment as $val) {?>
                    <div class="col-md-4" style="padding-top:5px">
                        <div class="coffee_box">
                            <button type="submit" class="finder2" name="product_equipment" value="<?=$val['id']?>" id="<?=$val['name']?>">
                                <img src="<?=base_url().$val['icon']?>" alt="" style="width:301px;height: 181px" for="<?=$val['name']?>">
                                <h5 class="coffee_content"><?=$val['name']?></h5>
                            </button>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox my-4">
                            <!-- <input type="checkbox"  id="Entkoffeiniert"> -->
                            <!-- <label class="custom-control-label" for="Entkoffeiniert">Entkoffeiniert</label> -->
                        </div>
                    </div>
                    <!-- <div class="col-md-6 text-right mt-4"><button class="btn-white finder2" type="button">NÄCHSTER SCHRITT</button></div> -->
                </div>
            </div>
            <div class="col-md-12">
                <div class=" text-center">
                    <button class="back1">&lt; Back to previous question</button>
                </div>
            </div>
        </section>
        <section class="coffee_steps coffee_steps3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 id="steps">Schritt 3</h4>
                        <h2 class="coffee_match_title">Wie würdest du deinen Kaffeegeschmack beschreiben?</h2>
                    </div>
                    <div class="col-md-4" style="padding-top:5px">
                        <div class="coffee_box">
                            <button type="submit" class="finder3" name="taste" id="Entkoffeiniert" value="clasic">
                                <img src="<?=base_url()?>public/images/MCard-Cut-out-11.jpg" alt="">
                                <h5 class="coffee_content">Klassisch</h5>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top:5px">
                        <div class="coffee_box">
                            <button type="submit" class="finder3" name="taste" id="Entkoffeiniert" value="curious">
                                <img src="<?=base_url()?>public/images/MCard-Cut-out-3-2.jpg" alt="">
                                <h5 class="coffee_content">Neugierig</h5>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top:5px">
                        <div class="coffee_box">
                            <button type="submit" class="finder3" name="taste" id="Abenteuerlustig" value="adventurous">
                                <img src="<?=base_url()?>public/images/MCard-Cut-out-3-2.jpg" alt="">
                                <h5 class="coffee_content">Abenteuerlustig</h5>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-control custom-checkbox my-4">
                            <!-- <input type="checkbox"  id="Entkoffeiniert"> -->
                            <!-- <label class="custom-control-label" for="Entkoffeiniert">Entkoffeiniert</label> -->
                        </div>
                    </div>
                  <!--   <div class="col-md-6 text-right mt-4"><button class="btn-white finder3" type="button">NÄCHSTER SCHRITT</button></div> -->
                </div>
            </div>
            <div class="col-md-12">
                <div class=" text-center">
                    <button class="back2">&lt; Back to previous question</button>
                </div>
            </div>
        </section>
    
<!-- </form> -->
        
    </div>
        <!--coffee_steps ended.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
<script>
    $(document).ready(function () {
        $('.coffee_steps2').hide();
        $('.coffee_steps3').hide();
        var drink;
        var product_equipment;
        var taste;
        $("button[name='drink']").click(function() {
            drink = $("button[name='drink']").val();
            $('.coffee_steps1').hide();
            $('.coffee_steps2').show();
        });
        $(".back1").click(function() {
            $('.coffee_steps2').hide();
            $('.coffee_steps1').show();
        });
        $(".back2").click(function() {
            $('.coffee_steps3').hide();
            $('.coffee_steps2').show();
        });
        $("button[name='product_equipment']").click(function() {
            product_equipment = $("button[name='product_equipment']").val();
            $('.coffee_steps2').hide();
            $('.coffee_steps3').show();
        });
        $("button[name='taste']").click(function(e) {
            taste = $("button[name='taste']").val();
            $.ajax({
                url: "<?=base_url('kaffee/kaffeefinder')?>",
                type: "POST",
                data: {drink:drink,product_equipment:product_equipment,taste:taste},
                success: function (response) {
                    $('#finder_div').html(JSON.parse(response).view_html);
                },
            });
            // $('#kaffeeform').submit();
        });
    });
</script>
</body>

</html>

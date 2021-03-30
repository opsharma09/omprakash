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
                            <button type="submit" class="finder1" name="drink" value="Kraeftig" id="Kraeftig" onclick="finder1(this)">
                                <img src="<?=base_url()?>public/images/product/finder/Kraeftig.jpg" alt="" for="Kraeftig">
                                <h5 class="coffee_content" for="Kraeftig">Kräftig</h5>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top:5px">
                        <div class="coffee_box">
                            <button type="submit" class="finder1" name="drink" id="mild" value="mild" onclick="finder1(this)">
                                <img src="<?=base_url()?>public/images/product/finder/Mild.jpg" alt="" for="mild">
                                <h5 class="coffee_content" for="mild">Mild</h5>
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
                            <button type="submit" class="finder2" name="product_equipment" onclick="finder2(this)" value="<?=$val['id']?>" id="<?=$val['name']?>">
                                <img src="<?=base_url().$val['icon']?>" alt="" for="<?=$val['name']?>">
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
                            <button type="submit" class="finder3" name="taste" onclick="finder3(this)" id="altagskaffee" value="clasic">
                                <img src="<?=base_url()?>public/images/product/finder/Meinem altagskaffee.jpg" class="full_width" alt="">
                                <h5 class="coffee_content">Meinem altagskaffee</h5>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top:5px">
                        <div class="coffee_box">
                            <button type="submit" class="finder3" name="taste" onclick="finder3(this)" id="Entkoffeiniert" value="curious">
                                <img src="<?=base_url()?>public/images/product/finder/ETWAS SPEZIELLEM.jpg" alt="">
                                <h5 class="coffee_content">Etwas Speziellem</h5>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4" style="padding-top:5px">
                        <div class="coffee_box">
                            <button type="submit" class="finder3" name="taste" onclick="finder3(this)" id="Abenteuerlustig" value="adventurous">
                                <img src="<?=base_url()?>public/images/product/finder/Monatlich etwas neuem.jpg" alt="">
                                <h5 class="coffee_content">Monatlich etwas neuem</h5>
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
        var drink;
        var product_equipment;
        var taste;
    $(document).ready(function () {
        $('.coffee_steps2').hide();
        $('.coffee_steps3').hide();
        // $(".finder1").click(function() {
        //     drink = $(".finder1").val();
        //     $('.coffee_steps1').hide();
        //     $('.coffee_steps2').show();
        // });
        $(".back1").click(function() {
            $('.coffee_steps2').hide();
            $('.coffee_steps1').show();
        });
        $(".back2").click(function() {
            $('.coffee_steps3').hide();
            $('.coffee_steps2').show();
        });
        
    });
    function finder1(per){
        drink = $(per).val();
        $('.coffee_steps1').hide();
        $('.coffee_steps2').show();
    }
    function finder2(per){
         product_equipment = $(per).val();
        $('.coffee_steps2').hide();
        $('.coffee_steps3').show();
    }
    function finder3(per){
        taste = $(per).val();
        // alert(drink+product_equipment+taste);
        $.ajax({
            url: "<?=base_url('kaffee/kaffeefinder')?>",
            type: "POST",
            data: {drink:drink,product_equipment:product_equipment,taste:taste},
            success: function (response) {
                $('#finder_div').html(JSON.parse(response).view_html);
            },
        });
        // $('#kaffeeform').submit();
    }
</script>
</body>

</html>

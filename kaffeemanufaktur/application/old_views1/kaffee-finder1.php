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
    <div id="flavorButtons">
        <div class="container">
            <div class="coffeeFinderPage buttonpage">
                <?php foreach($product_equipment as $cat){
                    if($cat['type']=='suitable'){
                  ?>
                <div class="coffeefinderbutton"><img src="<?= base_url()?><?=$cat['image']?>" alt=""> <span><?=$cat['name']?></span></div>
            <?php } }?>
            </div>
            <div class="coffeeFinderPage buttonpage">
                <?php foreach($product_equipment as $cat){
                    if($cat['type']=='taste'){
                  ?>
                <div class="coffeefinderbutton"><img src="<?= base_url()?><?=$cat['image']?>" alt=""> <span><?=$cat['name']?></span></div>
            <?php } }?>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="slider">
                        <div class="rangeSlider">
                            <div class="ui-slider">
                                <span class="ui-slider-handle" style="left:0%"></span>
                                <span class="ui-slider-handle" style="left: 100%"></span>
                            </div>
                        </div>
                        <div class="sliderdescription">
                            <span class="flavorlabel">Körper: </span>
                            <span>teeartig - intensiv</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="slider">
                        <div class="rangeSlider">
                            <div class="ui-slider">
                                <span class="ui-slider-handle" style="left:0%"></span>
                                <span class="ui-slider-handle" style="left: 100%"></span>
                            </div>
                        </div>
                        <div class="sliderdescription">
                            <span class="flavorlabel">Körper: </span>
                            <span>teeartig - intensiv</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="slider">
                        <div class="rangeSlider">
                            <div class="ui-slider">
                                <span class="ui-slider-handle" style="left:0%"></span>
                                <span class="ui-slider-handle" style="left: 100%"></span>
                            </div>
                        </div>
                        <div class="sliderdescription">
                            <span class="flavorlabel">Körper: </span>
                            <span>teeartig - intensiv</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="coffeeFinderPage buttonpage">
                 <?php foreach($product_equipment as $cat){
                    if($cat['type']=='country'){
                  ?>
                <div class="coffeefinderbutton"><img src="<?= base_url()?><?=$cat['image']?>" alt=""> <span><?=$cat['name']?></span></div>
            <?php } }?>
            </div>
        </div>
    </div>
    <!--    coffee finder buttonpage ended.-->
    <!--    product_wrapper started.-->
    <div class="product_wrapper">
        <div class="products text-center">
            <div class="container">
                <div class="row">
                    <?php foreach($pproducts as $value){?>
                    <div class="col-lg-4 col-sm-6 m-auto">
                        <div class="product">
                            <a href="<?=base_url('produkt/'.com_slugify($value['e_name']))?>" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="<?= base_url()?><?=$value['image1']?>" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title"><?=$value['name']?></h4>
                                    <span class="price"><?=$value['Price']?></span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <span class="form-row mb-3">
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="<?= base_url() ?>public/images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="<?= base_url() ?>public/images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="<?= base_url() ?>public/images/gewure.png" alt="" title="Gewürze">
                                            </span>
                                        </span>
                                    </span>
                                    <span class="form-row">
                                        <span class="col-6">
                                            <span class="middle">Körper:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            geschmeidig, rund
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Säure:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            frisch, ausgewogen
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Nachklang:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            weich, komplex
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
<!--                    <div class="col-lg-4 col-sm-6 m-auto">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="<?= base_url() ?>public/images/product.png" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Melange Hanovera</h4>
                                    <span class="price">6.30 &euro; - 22.30 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <span class="form-row mb-3">
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="<?= base_url() ?>public/images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="<?= base_url() ?>public/images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="<?= base_url() ?>public/images/gewure.png" alt="" title="Gewürze">
                                            </span>
                                        </span>
                                    </span>
                                    <span class="form-row">
                                        <span class="col-6">
                                            <span class="middle">Körper:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            geschmeidig, rund
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Säure:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            frisch, ausgewogen
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Nachklang:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            weich, komplex
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 m-auto">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="<?= base_url() ?>public/images/product.png" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Melange Hanovera</h4>
                                    <span class="price">6.30 &euro; - 22.30 &euro;</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <span class="form-row mb-3">
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="<?= base_url() ?>public/images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="<?= base_url() ?>public/images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="<?= base_url() ?>public/images/gewure.png" alt="" title="Gewürze">
                                            </span>
                                        </span>
                                    </span>
                                    <span class="form-row">
                                        <span class="col-6">
                                            <span class="middle">Körper:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            geschmeidig, rund
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Säure:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            frisch, ausgewogen
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Nachklang:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            weich, komplex
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!--    product_wrapper started.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
    <script>
        $(".coffeefinderbutton").click(function() {
            $(this).toggleClass("active")
        })

    </script>
</body>

</html>

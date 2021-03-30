<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "kaffee-finder";
    require_once("include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--    coffee finder buttonpage started.-->
    <div id="flavorButtons">
        <div class="container">
            <div class="coffeeFinderPage buttonpage">
                <div class="coffeefinderbutton"><img src="images/syphon.svg" alt=""> <span>Syphon</span></div>
                <div class="coffeefinderbutton"><img src="images/Siebtr%C3%A4ger.svg" alt=""><span>Siebträger</span></div>
                <div class="coffeefinderbutton"><img src="images/Vollautomat.svg" alt=""><span>Vollautomat</span></div>
                <div class="coffeefinderbutton"><img src="images/herdkanne.svg" alt=""><span>Herdkanne</span></div>
                <div class="coffeefinderbutton"><img src="images/french-press.svg" alt=""> <span>French Press</span></div>
                <div class="coffeefinderbutton"><img src="images/filter.svg" alt=""> <span>Filder</span></div>
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
                <div class="coffeefinderbutton"><img src="images/map.svg" alt=""> <span>Syphon</span></div>
                <div class="coffeefinderbutton"><img src="images/map.svg" alt=""><span>Siebträger</span></div>
                <div class="coffeefinderbutton"><img src="images/map.svg" alt=""><span>Vollautomat</span></div>
                <div class="coffeefinderbutton"><img src="images/map.svg" alt=""><span>Herdkanne</span></div>
                <div class="coffeefinderbutton"><img src="images/map.svg" alt=""> <span>French Press</span></div>
                <div class="coffeefinderbutton"><img src="images/map.svg" alt=""> <span>Filder</span></div>
            </div>
        </div>
    </div>
    <!--    coffee finder buttonpage ended.-->
    <!--    product_wrapper started.-->
    <div class="product_wrapper">
        <div class="products text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 m-auto">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="images/product.png" alt="">
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
                                                <img src="images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/gewure.png" alt="" title="Gewürze">
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
                                        <img src="images/product.png" alt="">
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
                                                <img src="images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/gewure.png" alt="" title="Gewürze">
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
                                        <img src="images/product.png" alt="">
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
                                                <img src="images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="images/gewure.png" alt="" title="Gewürze">
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
                </div>
            </div>
        </div>
    </div>
    <!--    product_wrapper started.-->
    <!--coffee_steps started.-->
    <section class="coffee_steps">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 id="steps">Schritt 1</h4>
                    <h2 class="coffee_match_title">Ich mag meinen Kaffee lieber</h2>
                </div>
                <div class="col-md-4">
                    <div class="coffee_box">
                        <button>
                            <img src="images/MCard-Cut-out-11.jpg" alt="">
                            <h5 class="coffee_content">KRÄFTIG</h5>
                        </button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="coffee_box">
                        <button>
                            <img src="images/MCard-Cut-out-3-2.jpg" alt="">
                            <h5 class="coffee_content">Mild</h5>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox mb-3 mt-4">
                        <input type="checkbox" class="custom-control-input" id="Entkoffeiniert">
                        <label class="custom-control-label" for="Entkoffeiniert">Entkoffeiniert</label>
                    </div>
                </div>
                <div class="col-md-6 text-right mt-4"><button class="btn-white">NÄCHSTER SCHRITT</button></div>
            </div>
        </div>
    </section>
    <!--coffee_steps ended.-->
    <!--coffee_steps started.-->
    <section class="coffee_steps">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 id="steps">Schritt 2</h4>
                    <h2 class="coffee_match_title">Meine libelling's Zubereitungsmethode</h2>
                </div>
                <div class="col-md-4">
                    <div class="coffee_box">
                        <button><img src="images/MCard-Cut-out-11.jpg" alt="">
                            <h5 class="coffee_content">STEMPELKANNE</h5>
                        </button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="coffee_box">
                        <button><img src="images/MCard-Cut-out-3-2.jpg" alt="">
                            <h5 class="coffee_content">ESPRESSOMASCHINE</h5>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox my-4">
                        <input type="checkbox" class="custom-control-input" id="Entkoffeiniert">
                        <label class="custom-control-label" for="Entkoffeiniert">Entkoffeiniert</label>
                    </div>
                </div>
                <div class="col-md-6 text-right mt-4"><button class="btn-white">NÄCHSTER SCHRITT</button></div>
                <div class="col-md-12">
                    <div class="border-top-1 text-center">
                        <button class="back">&lt; Back to previous question</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--coffee_steps ended.-->
    <!--footer started.-->
    <?php require_once("include/footer.php") ?>
    <script>
        $(".coffeefinderbutton").click(function() {
            $(this).toggleClass("active")
        })

    </script>
</body>

</html>

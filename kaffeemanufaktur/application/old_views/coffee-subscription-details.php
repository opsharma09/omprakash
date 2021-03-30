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
                <div class="col-lg-8">
                    <div class="coffee-list">
                        <h2 class="title">Choose your coffee for the subscription</h2>
                        <p class="description">You can add more coffees to your subscription later.</p>
                        <div class="title-box">
                            <img src="<?=base_url()?>public/images/coffee-bean.png" alt=""> Select Coffee
                        </div>
                        <div class="coffee_selection">
                            <div class="coffee_selection_header">
                                <h3>All coffees</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="" class="coffee_selection_box d-block">
                                        <img src="<?=base_url()?>public/images/coffee-box.jpg" alt="">
                                        <h5>Tiga Terra Coffee &amp; Espresso</h5>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="" class="coffee_selection_box d-block">
                                        <img src="<?=base_url()?>public/images/coffee-box.jpg" alt="">
                                        <h5>Tiga Terra Coffee &amp; Espresso</h5>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="" class="coffee_selection_box d-block">
                                        <img src="<?=base_url()?>public/images/coffee-box.jpg" alt="">
                                        <h5>Tiga Terra Coffee &amp; Espresso</h5>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="" class="coffee_selection_box d-block">
                                        <img src="<?=base_url()?>public/images/coffee-box.jpg" alt="">
                                        <h5>Tiga Terra Coffee &amp; Espresso</h5>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="" class="coffee_selection_box d-block">
                                        <img src="<?=base_url()?>public/images/coffee-box.jpg" alt="">
                                        <h5>Tiga Terra Coffee &amp; Espresso</h5>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="" class="coffee_selection_box d-block">
                                        <img src="<?=base_url()?>public/images/coffee-box.jpg" alt="">
                                        <h5>Tiga Terra Coffee &amp; Espresso</h5>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="" class="coffee_selection_box d-block">
                                        <img src="<?=base_url()?>public/images/coffee-box.jpg" alt="">
                                        <h5>Tiga Terra Coffee &amp; Espresso</h5>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="" class="coffee_selection_box d-block">
                                        <img src="<?=base_url()?>public/images/coffee-box.jpg" alt="">
                                        <h5>Tiga Terra Coffee &amp; Espresso</h5>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="" class="coffee_selection_box d-block">
                                        <img src="<?=base_url()?>public/images/coffee-box.jpg" alt="">
                                        <h5>Tiga Terra Coffee &amp; Espresso</h5>
                                    </a>
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
                </div>
            </div>
        </div>
    </section>
    <!--choose_coffee ended.-->

    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
</body>

</html>

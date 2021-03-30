<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "coffee-subscription";
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
    <!--coffee_subscription started.-->
    <section class="coffee_subscription">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left_subscription">
                        <h2 class="title">Our Coffee Subscription</h2>
                        <p>Truly, because we act for the benefit of all concerned. Good, because you’re gonna love our coffee. With our coffee subscription, you get our freshly roasted coffee delivered directly to your home on a regular basis – and save on <br>shipping costs.</p>
                        <a href="<?=base_url('subscription-detail')?>" class="btn-white"><span class="fa fa-calendar-alt"></span> Configure your Coffee-sub! ›</a>
                        <img src="<?=base_url()?>public/images/subscription-img.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right_subscription">
                        <div class="feature_img_box">
                            <div class="img_number">
                                <img src="<?=base_url()?>public/images/free-img.png" alt="">
                                <span>1</span>
                            </div>
                            <div class="content_box">
                                <h3>Free Shiping</h3>
                                <p>Our coffee subscription is free of shipping costs for our private customers. </p>
                                <p>The delivery of coffee subscriptions is currently possible to Germany and Austria.</p>
                            </div>
                        </div>
                        <div class="feature_img_box">
                            <div class="img_number">
                                <img src="<?=base_url()?>public/images/support-img.png" alt="">
                                <span>2</span>
                            </div>
                            <div class="content_box">
                                <h3>Change it at any time</h3>
                                <p>In your customer account you can easily manage your coffee subscription yourself. For example, you can change the amount of coffee, add other coffees or pause the delivery. This way you remain flexible and have full control over your subscription at all times.</p>
                            </div>
                        </div>
                        <div class="feature_img_box">
                            <div class="img_number">
                                <img src="<?=base_url()?>public/images/notice.png" alt="">
                                <span>3</span>
                            </div>
                            <div class="content_box">
                                <h3>No-notice cancellation</h3>
                                <p>With us there is no minimum term! Your coffee subscription only runs as long as you want. You can cancel your subscription at any time in your user account.</p>
                            </div>
                        </div>
                        <div class="feature_img_box">
                            <div class="img_number">
                                <img src="<?=base_url()?>public/images/support-img.png" alt="">
                                <span>4</span>
                            </div>
                            <div class="content_box">
                                <h3>Support social projects</h3>
                                <p>For 1 kg of coffee, 1 € goes to social projects which we define and implement in Ethiopia together with the local people. With our projects we support them in the areas of education, health and coffee cultivation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--coffee_subscription ended.-->
    <!--individual_coffee started.-->
    <section class="individual_coffee">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="individual_coffee_header">
                        <h2>Your individual coffee subscription. It's that simple:</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="individual_coffee_box" id="coffee_one">
                        <img src="<?=base_url()?>public/images/coffee_one.png" alt="">
                        <h6>Select your favourite coffee and choose pack size. Whole beans or ground?</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="individual_coffee_box" id="coffee_two">
                        <img src="<?=base_url()?>public/images/coffee_two.png" alt="">
                        <h6>Determine the frequency of delivery. When should we send your first parcel?</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="individual_coffee_box" id="coffee_three">
                        <img src="<?=base_url()?>public/images/coffee_three.png" alt="">
                        <h6>Complete your order, look forward to your first delivery and enjoy your coffee at home!</h6>
                    </div>
                </div>
                <div class="col-12">
                    <div class="switch_cancel">
                        <h5>Switch it up at any time. Cancel at any time.</h5> <a href="" class="btn-white"><span class="fa fa-calendar-alt"></span> Configure your Coffee-sub! ›</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--individual_coffee ended.-->
    <!--flexible_coffee started.-->
    <section class="flexible_coffee">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="flexible_coffee_header">
                        <h2>Your flexible coffee subscription</h2>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-1">
                    <div class="flexible_coffee_content">
                        <h2>Adjust, pause or cancel at any time</h2>
                        <p>With a one-time order, you can subscribe to your favourite coffee very conveniently. You decide when and how much coffee you want to receive. Afterwards you can adjust, pause or cancel your subscription at any time in your customer account</p>
                    </div>
                </div>
                <div class="col-md-6 order-2 order-md-2">
                    <div class="flexible_coffee_image">
                        <img src="<?=base_url()?>public/images/flexible_one.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 order-4 order-md-3">
                    <div class="flexible_coffee_image right">
                        <img src="<?=base_url()?>public/images/flexible_two.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6 order-3 order-md-4">
                    <div class="flexible_coffee_content">
                        <h2>This coffee subscription has a double effect</h2>
                        <p>With every cup of coffee you help to improve the living conditions of the coffee farmers in Ethiopia. Because for every kilogram of coffee sold, €1 flows into projects in the areas of education, health and coffee cultivation, which we define and implement together with the local people.</p>
                    </div>
                </div>
                <div class="col-12 order-last">
                    <div class="switch_cancel_link">
                        <h4>Switch it up at any time. Cancel at any time.</h4>
                        <a href="" class="btn-white"><span class="fa fa-calendar-alt"></span> Configure your Coffee-sub! ›</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--flexible_coffee ended.-->
    <!--faq started.-->
    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Frequently asked Questions</h2>
                </div>
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What exactly are the advantages of a coffee subscription? <span class="chroven fas fa-angle-up"></span></button>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-white collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">What exactly are the advantages of a coffee subscription? <span class="chroven fas fa-angle-up"></span></button>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-white collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseOne">What exactly are the advantages of a coffee subscription? <span class="chroven fas fa-angle-up"></span></button>
                            </div>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-white collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseOne">What exactly are the advantages of a coffee subscription? <span class="chroven fas fa-angle-up"></span></button>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-white collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseOne">What exactly are the advantages of a coffee subscription? <span class="chroven fas fa-angle-up"></span></button>
                            </div>

                            <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-white collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseOne">What exactly are the advantages of a coffee subscription? <span class="chroven fas fa-angle-up"></span></button>
                            </div>

                            <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-white collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseOne">What exactly are the advantages of a coffee subscription? <span class="chroven fas fa-angle-up"></span></button>
                            </div>

                            <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-white collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseOne">What exactly are the advantages of a coffee subscription? <span class="chroven fas fa-angle-up"></span></button>
                            </div>

                            <div id="collapseEight" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-white collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseOne">What exactly are the advantages of a coffee subscription? <span class="chroven fas fa-angle-up"></span></button>
                            </div>

                            <div id="collapseNine" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn btn-white collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseOne">What exactly are the advantages of a coffee subscription? <span class="chroven fas fa-angle-up"></span></button>
                            </div>

                            <div id="collapseTen" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--faq ended.-->
    <!--happy_coffee started.-->
    <section class="happy_coffee">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 ml-auto">
                    <h2>We want to make you happy with our coffee </h2>
                    <p>Contact us if you are in anyway unsatisfied or have any problems at all. We are happy to help you!</p>
                    <p>Contact Form: Here</p>
                    <p>Customer service hotline: +49 30 3982 138</p>
                    <h6>You can reach us Monday through Friday from 8.30 to 1pm and from 2 to 5pm. Landline Berlin, Deutschland</h6>
                </div>
            </div>
        </div>
    </section>
    <!--happy_coffee ended.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
</body>

</html>

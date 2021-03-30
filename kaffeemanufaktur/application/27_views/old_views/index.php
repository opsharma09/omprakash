<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "index";
    require_once("public/include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <!--banner started.-->
    <div class="banner">
        <img class="lazy" data-src="<?= base_url() ?>public/images/kaffee des monats juli.jpg" alt="">
        <div class="content-overlay">
            <h6>Nie wieder kein Kaffee zuhause</h6>
            <h4>JETZT NEU IM KAFFEE ABO</h4>
            <a href="" class="btn-white">Jetzt bestellen</a>
        </div>
    </div>
    <!--banner ended.-->
    <!--features started.-->
    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4><img class="lazy" data-src="<?= base_url() ?>public/images/truck.svg" alt=""> <span>Schnelle Lieferung</span></h4>
                    <p>Wir versenden schon ab <b>30€</b> Kostenfrei. Im Kaffee- Abo schon ab <b>20€</b> Kostenfrei 2 - 3 Tage Lieferzeit</p>
                </div>
                <div class="col-md-4">
                    <h4><img class="lazy" data-src="<?= base_url() ?>public/images/fresh.svg" alt=""> <span>Frisch geröstet</span></h4>
                    <p>Im traditionellen Trommelröster. <br> Mehr als <b>30 Sorten</b> feinster <b>Kaffee-Spezialitäten.</b>Viele Bio und Fair gehandelt</p>
                </div>
                <div class="col-md-4">
                    <h4><img class="lazy" data-src="<?= base_url() ?>public/images/date.svg" alt=""> <span>Frisch geröstet</span></h4>
                    <p>Langeweile in der Tasse? <br>Wir gehen die Extrameile. <b>Jeden Monat</b> ein <b>neuen Kaffee</b> zum probieren .t</p>
                </div>
            </div>
        </div>
    </div>
    <!--features ended.-->
    <!--section welcome started.-->
    <section class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Herzlich willkommen!</h2>
                    <h4>In der Hannoverschen Kaffeemanufaktur. </h4>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="position-relative">
                        <img class="lazy" data-src="<?= base_url() ?>public/images/welcome-1.svg" alt="">
                        <div class="content-overlay">
                            <h4>FILTERKAFFEE</h4>
                            <a href="home/filterkaffee" class="btn-white">Jetzt bestellen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img class="lazy" data-src="<?= base_url() ?>public/images/welcome-2.svg" alt="">
                        <div class="content-overlay">
                            <h4>ESPRESSO</h4>
                            <a href="" class="btn-white">Jetzt bestellen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative">
                        <img class="lazy" data-src="<?= base_url() ?>public/images/welcome-3.svg" alt="">
                        <div class="content-overlay">
                            <h4>ZUBEHÖR</h4>
                            <a href="home/filterkaffee" class="btn-white">Jetzt bestellen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="position-relative">
                        <img class="lazy" data-src="<?= base_url() ?>public/images/welcome-4.svg" alt="">
                        <div class="content-overlay">
                            <h4>NEU IM KAFFEE ABO</h4>
                            <p>Wir liefern dir regelmäßig frischen Kaffee. <br>Jederzeit kündbar und gratis Versand</p>
                            <a href="" class="btn-white">Jetzt bestellen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative">
                        <img class="lazy" data-src="<?= base_url() ?>public/images/welcome-5.svg" alt="">
                        <div class="content-overlay">
                            <h4>Kaffee Probiersets</h4>
                            <a href="" class="btn-white">Jetzt bestellen</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative">
                        <img class="lazy" data-src="<?= base_url() ?>public/images/welcome-6.svg" alt="">
                        <div class="content-overlay">
                            <h4>Drip Coffee Bags</h4>
                            <a href="" class="btn-white">Jetzt bestellen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section welcome ended.-->
    <!--product_wrapper started.-->
    <div class="product_wrapper">
        <div class="products text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="product-title">Die Kundenlieblinge <br> im Überblick</h2>
                    </div>
                    <?php foreach($product as $value){?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product">
                            <a href="<?= base_url()?>products/product/<?=$value['id']?>" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img class="lazy" data-src="<?= base_url()?><?=$value['image1']?>" alt="">
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
                                                <img class="lazy" data-src="<?= base_url() ?>public/images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img class="lazy" data-src="<?= base_url() ?>public/images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img class="lazy" data-src="<?= base_url() ?>public/images/gewure.png" alt="" title="Gewürze">
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
<!--                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img class="lazy" data-src="<?= base_url() ?>public/images/product.png" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Melange Hanovera</h4>
                                    <span class="price">6.30 € - 22.30 €</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <span class="form-row mb-3">
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img class="lazy" data-src="<?= base_url() ?>public/images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img class="lazy" data-src="<?= base_url() ?>public/images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img class="lazy" data-src="<?= base_url() ?>public/images/gewure.png" alt="" title="Gewürze">
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
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img class="lazy" data-src="<?= base_url() ?>public/images/product.png" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Melange Hanovera</h4>
                                    <span class="price">6.30 € - 22.30 €</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <span class="form-row mb-3">
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img class="lazy" data-src="<?= base_url() ?>public/images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img class="lazy" data-src="<?= base_url() ?>public/images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img class="lazy" data-src="<?= base_url() ?>public/images/gewure.png" alt="" title="Gewürze">
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
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product">
                            <a href="" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img class="lazy" data-src="<?= base_url() ?>public/images/product.png" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title">Melange Hanovera</h4>
                                    <span class="price">6.30 € - 22.30 €</span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <span class="form-row mb-3">
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img class="lazy" data-src="<?= base_url() ?>public/images/beerig.png" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img class="lazy" data-src="<?= base_url() ?>public/images/nussing.png" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img class="lazy" data-src="<?= base_url() ?>public/images/gewure.png" alt="" title="Gewürze">
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
    <!--product_wrapper ended.-->
    <!--coffee_cunsoultent started.-->
    <section class="coffee_cunsoultent">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-lg-8">
                    <img class="lazy" data-src="<?= base_url() ?>public/images/Kaffe Finder.svg" alt="">
                    <div class="content-overlay">
                        <h2>Unser <br>Kaffee Berater</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="coffee_cunsoultent_content">
                        <h6>Noch unentschlossen <br>welcher Kaffee der Richtige ist für dich?</h6>
                        <h2>Lass dich beraten!</h2>
                        <p>Unser Kaffeeberater hilft dir deinen perfekten Kaffee zu finden</p>
                        <a href="" class="btn-white">Zum Kaffeeberater</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--coffee_cunsoultent ended.-->
<!--our_accessories started.-->
<section class="our_accessories text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>Entdecken Sie das umfangreiche Kaffeezubehör-Sortiment</h3>
                <h2>Unser Zubehör</h2>
                <img class="lazy" data-src="<?= base_url() ?>public/images/zubeh%C3%B6r.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<!--our_accessories ended.-->
    <!--    .uspSection started.-->
    <div class="uspSection text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="uspSectionHeader">
                        <h3>Warum Kaffee bei der <br> Hannoverschen Kaffeemanufaktur <br> kaufen?</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="" class="uspSectionInner">
                        <img class="lazy" data-src="<?= base_url() ?>public/images/rawMaterials-1.jpg" alt="">
                        <h4 class="title">Schonende Trommel-Röstung</h4>
                        <p>Im traditionellen Trommelröstverfahren werden die edlen Rohkaffees schonend auf ihren Aromen Höhepunkt geröstet. Bedingt durch die lange Röstzeit können alle Aromen perfekt ausbalanciert werden.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="" class="uspSectionInner">
                        <img class="lazy" data-src="images/rawMaterials-2.jpg" alt="">
                        <h4 class="title">Hochwertige Rohstoffe</h4>
                        <p>Wir verwenden nur die edelsten Rohkaffees erster Güte aus den besten Anbaugebieten dieser Erde. Direkt gehandelt mit einem Fokus auf Nachhaltigkeit und Qualität.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="" class="uspSectionInner">
                        <img class="lazy" data-src="images/rawMaterials-3.jpg" alt="">
                        <h4 class="title">Starke Regionalität</h4>
                        <p>Ihr Kaffee aus Hannover für Hannover. In einer kleinen Rösterei in der Nähe von Burgdorf (Region Hannover) werden kleine Mengen in traditioneller Handwerkskunst geröstet.</p>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="" class="uspSectionInner">
                        <img class="lazy" data-src="images/rawMaterials-4.jpg" alt="">
                        <h4 class="title">Absolute Frische</h4>
                        <p>Alle Kaffees werden nur auf Bestellung geröstet. So können wir eine unschlagbar kurze Lagerung gewährleisten. Von Hand abgefüllt und sofort verschickt erhalten Sie bei uns einen Kaffee wie keinen anderen.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--    .uspSection ended.-->
    <!--    coffee_solutions started.-->
    <seciton class="coffee_solutions">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center pad">
                    <h2>Für Firmenkunden</h2>
                </div>
            </div>
        </div>
        <div class="img-wrapper">
            <img class="lazy" data-src="images/gossip.jpg" alt="">
        </div>
        <div class="container-fulid px-0">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="left">
                        <h3 class="title3">Kaffeelösungen für Unternehmen</h3>
                        <p>Mitarbeitermotivation mit dem beliebtesten Getränk des Landes. Die Hannoversche Kaffeemanufaktur bietet den vollen Service vom Spitzenkaffee über Maschine und Wartung.</p>
                        <p>Einfach beraten lassen und schon bald mit dem exquisiten Kaffee aus unserem Hause durchstarten!</p>
                        <a href="" class="btn-white">mehr erfahren</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right">
                        <h3 class="title3">Premiumkaffee für Gastronomie</h3>
                        <p>Den Kaffeeverbrauch durch einen Wechsel zu den Spitzenkaffees der Hannoverschen Kaffeemanufaktur steigern: <br>Lassen Sie Ihre Kunden in den Genuss unserer regionalen Spezialitäten kommen. <br>Ein vielseitiges Leistungsangebot und eine große Auswahl an Kaffees und Maschinen machen uns zu einem starken Partner. <br>Gleich heute bei uns beraten lassen!</p>
                        <a href="" class="btn-white">mehr erfahren</a>
                    </div>
                </div>
            </div>
        </div>
    </seciton>
    <!--    coffee_solutions ended.-->
    <!--    partner started.-->
    <section class="partner text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="title2">Starke Partner</h2>
                    <img class="lazy" data-src="images/partner.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--    partner ended.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop() > 5) {
                $(".lazy-back").each(function() {
                    var background = $(this).attr("data-back-src");
                    $(this).css("background-image", "url(" + background + ")");
                    console.log(background);
                })
            }
        })

    </script>
</body>

</html>

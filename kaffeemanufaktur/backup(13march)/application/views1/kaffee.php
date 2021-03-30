<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "product-categories";
    require_once("public/include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <!--    categories header started.-->
    <div class="categories_header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="categories">
                        <h3>Kategorien</h3>
                        <div class="categoryNavLevel">
                            <a href="<?= base_url() ?>">Geschenke</a> | <a href="<?= base_url() ?>" class="activeCategory">Kaffee &amp; Espresso</a> | <a href="<?= base_url() ?>">Zubehör</a> | <a href="<?= base_url() ?>">Erlebnisse</a> | <a href="<?= base_url() ?>">Gutscheine</a> | <a href="<?= base_url() ?>">Alle Produkte</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="search_box">
                        <h3>Suche</h3>
                        <form action="" method="get()" class="search">
                            <div class="input-group">
                                <div class="input-group-prepend"><img src="<?= base_url() ?>public/images/search.svg" alt=""></div>
                                <input type="text" class="form-control" placeholder="Nach Produkten suchen..." name="q" id="searchkey">
                                <div class="input-groud-prepend" style="display: none;"><button class="remove" type="button">&times;</button></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <h1 class="categoryTitle"><?=$option?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--    categories header ended.-->
    <!--    shop filters started.-->
    <div class="shop-filters">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>1–12 von 17 Ergebnissen werden angezeigt</p>
                    <form action="" method="get()" class="sort">
                        <select class="form-control" name="orderby" id="" onchange="this.form.submit()">
                            <option class="form-control" value="std">Standard sorting</option>
                            <option class="form-control" value="date">Sorted by newest</option>
                            <option class="form-control" value="asc">Sorted by price: Ascending</option>
                            <option class="form-control" value="desc">Sorted by price: Descending</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--    shop filters ended.-->
    <!--    product_wrapper started.-->
    <div class="product_wrapper">
        <div class="products text-center">
            <div class="container">
                <div class="row">
                    <?php foreach($products as $value){ ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <a href="<?= base_url()?>products/product/<?=$value['id']?>" class="d-block">
                                <div class="image_frame">
                                    <div class="image_wrapper">
                                        <div class="mask"></div>
                                        <img src="<?= base_url()?><?=$value['image1']?>" alt="">
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="star_rating"><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                    <h4 class="product_title"><?=$value['name']?></h4>
                                    <span class="price">
                                    <?php
                                        if($value['price1']!='' && $value['price3']!='')
                                        {
                                            echo ('€ '.$value['price1'].' - € '.$value['price3']);
                                        }
                                        else if($value['price1']!='' && $value['price3']=='' && $value['price2']!='')
                                        {
                                            echo ('€ '.$value['price1'].' - € '.$value['price2']);
                                        }
                                        else if($value['price1']!='' && $value['price3']=='' && $value['price2']=='')
                                        {
                                            echo ('€ '.$value['price1']);
                                        }
                                        else if($value['price1']=='' && $value['price3']!='')
                                        {
                                            echo ('€ '.$value['price3']);
                                        }
                                        else if($value['price1']=='' && $value['price3']=='' & $value['price2']!='')
                                        {
                                            echo ('€ '.$value['price2']);
                                        }
                                    ?>
                                    </span>
                                    <!-- <span class="price"><?=$value['Price']?></span> -->
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
                                            <?= $value['body'];?>
                                            <!-- geschmeidig, rund -->
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Säure:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            <?= $value['acid'];?>
                                            <!-- frisch, ausgewogen -->
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Nachklang:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <span class="circle circle100"></span> <span class="circle circle100"></span> <span class="circle circle50"></span> <span class="circle circle0"></span> <span class="circle circle0"></span>
                                            </div>
                                            <?= $value['aftertaste'];?>
                                            <!-- weich, komplex -->
                                        </span>
                                        </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
<!--                    <div class="col-lg-4 col-sm-6">
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
                    <div class="col-lg-4 col-sm-6">
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
                    <div class="col-lg-4 col-sm-6">
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
                    <div class="col-lg-4 col-sm-6">
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
                    <div class="col-lg-4 col-sm-6">
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
                                            <span class="middle">Säure:<searchfunc/span>
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
                    <div class="col-lg-4 col-sm-6">
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
                    <div class="col-lg-4 col-sm-6">
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
                    <div class="col-lg-4 col-sm-6">
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
                    <div class="col-12">
                        <div class="pager">
                            <div class="pages">
                                <!-- <?php echo ($pagination_product); ?> -->
                                <span class="page-numbers current">1</span>
                                <a href="" class="page-numbers">2</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    product_wrapper started.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
    <script>
        $(document).ready(function() {
            $("form.search .form-control").focus(function() {
                $(this).parent().addClass("active");
            })
            $("form.search .form-control").focusout(function() {
                $(this).parent().removeClass("active");
            })

            $("form.search .form-control").on("keyup", function() {
                var val = $(this).val();
                console.log(val);
                if (val == "") {
                    $(this).next().css("display", "none");
                } else {
                    $(this).next().css("display", "");
                }
            })
        })


// function searchfunc()
// {
//     alert("dfgsj fsk");
// }


    </script>
</body>

</html>

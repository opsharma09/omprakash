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
                            <!-- <a href="<?= base_url() ?>">Geschenke</a> | <a href="<?= base_url() ?>" class="activeCategory">Kaffee &amp; Espresso</a> | <a href="<?= base_url() ?>">Zubehör</a> | <a href="<?= base_url() ?>">Erlebnisse</a> | <a href="<?= base_url() ?>">Gutscheine</a> | <a href="<?= base_url() ?>">Alle Produkte</a> -->
                            <!-- <?php foreach ($maincategory as $key => $value) {?>
                                <a href="<?= base_url('produkt-kategorie/'.com_slugify($value['e_name'])) ?>" <?php if($value['name']=='Kaffee & Espresso'){?>class="activeCategory"<?php } ?>><?=$value['name']?></a> |
                            <?php } ?> <a href="<?= base_url() ?>">Alle Produkte</a><br><br> -->
                            <!-- < | <a href="<?= base_url() ?>" class="activeCategory">Kaffee &amp; Espresso</a> | <a href="<?= base_url() ?>">Zubehör</a> | <a href="<?= base_url() ?>">Erlebnisse</a> | <a href="<?= base_url() ?>">Gutscheine</a> |  -->
                            <!-- <?php foreach ($pcategory as $cat) {?>
                               <a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify($cat['name'])) ?>"<?php if($cat['name']=='Kaffee'){ echo 'class="activeCategory"';}?>><?=$cat['name']?></a> |
                            <?php } ?> <a href="<?= base_url() ?>">Alle Produkte</a><br><br> -->
                            <?php

                                // $category_array =array("Kaffee","Espresso","Zubehoer","Geschenke")
                                $category_array =array("Kaffee","Espresso","Zubehör","Geschenke");
                                $sub_category_array =array("Kaffee Blends","Drip-Bags","Sortenreine Kaffees","Bio Kaffees","Probierpakete","Drip-Bag Collections","Special Editions");

                             foreach ($category_array as $cat) {?>
                               <a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify($cat)) ?>"<?php if($cat=='Kaffee'){ echo 'class="activeCategory"';}?>><?=$cat?></a> |
                            <?php } ?> <a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify('kaffee')) ?>">Alle Produkte</a><br><br>
                            <?php foreach ($sub_category_array as $cat) {?>
                               <a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify('kaffee')).'/'.com_slugify($cat) ?>" <?php if($cat==$option){ echo 'class="activeCategory"';}?>><?=$cat?></a> |
                            <?php } ?> <a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify('kaffee')) ?>">Alle Produkte</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-9">
                    <div class="search_box">
                        <h3>Suche</h3>
                        <form action="" method="get()" class="search">
                            <div class="input-group">
                                <div class="input-group-prepend"><img src="<?= base_url() ?>public/images/search.svg" alt=""></div>
                                <input type="text" class="form-control" placeholder="Nach Produkten suchen..." name="q" id="searchkey" value="<?php if($this->input->get("q", TRUE)){echo $this->input->get("q", TRUE);}?>">
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
                    <p><?=$pageno?>–<?php if($total_row > 11){ echo '12';}else{  echo $total_row; }?> von <?=$total_row?> Ergebnissen werden angezeigt</p>
                    <form action="" method="get()" class="sort">
                        <select class="form-control" name="orderby" id="" onchange="this.form.submit()">
                            <option class="form-control" value="" disabled="" >Select sorting</option>
                            <option class="form-control" value="std" <?php if($this->input->get("orderby", TRUE)=='std'){echo "selected";}?>>Standard sorting</option>
                            <option class="form-control" value="date" <?php if($this->input->get("orderby", TRUE)=='date'){echo "selected";}?>>Sorted by newest</option>
                            <option class="form-control" value="asc" <?php if($this->input->get("orderby", TRUE)=='asc'){echo "selected";}?>>Sorted by price: Ascending</option>
                            <option class="form-control" value="desc" <?php if($this->input->get("orderby", TRUE)=='desc'){echo "selected";}?>>Sorted by price: Descending</option>
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
                    <?php $price_array = array(); foreach($pproducts as $value){
                            $product_details = $this->Common->product($value['id']);
                            foreach ($product_details as $value2) {
                                foreach ($value2['availability'] as $value1) {
                                   $price_array[] = $value1['price'];
                                }
                            }
                            $min=0;
                            $max=0;
                            if(!empty($price_array)){
                                $min = min($price_array);
                                $max = max($price_array);
                            }
                         ?>
                    <div class="col-lg-4 col-sm-6">
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
                                    <h4 class="product_title"><?=ucfirst($value['name'])?></h4>
                                    <!-- <span class="price">
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
                                    </span> -->
                                    <!-- <span class="price"><?=$value['Price']?></span> -->
                                    <span class="price"><?=$min.' € - '.$max.' €'?></span>
                                </div>
                                <div class="categoryThumbnailsContainer">
                                    <span class="form-row mb-3">
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="<?= base_url()?><?=$value['image2']?>" alt="" title="Beerig">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="<?= base_url()?><?=$value['image3']?>" alt="" title="Nussing">
                                            </span>
                                        </span>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="<?= base_url()?><?=$value['image4']?>" alt="" title="Gewürze">
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
                    <div class="col-lg-12 col-sm-12" style="text-align: center">
                        <?php if($total_row <=0){?>
                            <h3 align="center" style="text-align: center;color:red">Keine Daten gefunden</h3>
                        <?php } ?>
                    </div>
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
                    <?php if($flag && $total_row != 0){?>
                    <div class="col-12">
                        <div class="pager">
                            <div class="pages">
                                <!-- <?php echo ($pagination_product); ?> -->
                               <!-- <ul> -->
                            <span style="<?php if($pageno <= 1){?>display:none;  <?php } ?>">
                                <a class="page-numbers <?php if($pageno <= 1){ echo 'disable';}?>" href="<?php if($pageno <= 1){ echo 'disable';} else { echo "?pageno=".($pageno - 1); } ?>"><</a>
                            </span>
                            <?php for($j=round($pageno/2);$j<$pageno;$j++){ if($pageno ==3){?>
                              <span><a class="page-numbers <?php if($active_pageno == 1){?><?php }?>" href="?pageno=1">1</a></span>
                            <?php }?>
                            <span><a class=" page-numbers <?php if($active_pageno == $j){?><?php }?>" href="?pageno=<?=$j?>"><?=$j?></a></span>
                          <?php } ?>
                            <span><a class=" page-numbers <?php if($active_pageno == $pageno){?> current <?php }?>" href="?pageno=<?=$pageno?>"><?=$pageno?></a></span>
                            <!-- <span><a class="<?php if($active_pageno == $pageno){?><?php }?>" href="?pageno=<?=$pageno + 1?>"><?=$pageno+1?></a></span> -->
                            
                            <span  style="<?php if($active_pageno == $total_page){?>display:none;<?php } ?>"><a class="page-numbers <?php if($active_pageno == $active_pageno+1){?> current <?php }?>" href="?pageno=<?=$active_pageno+1?>"><?=$active_pageno+1?></a></span>
                            <span style="<?php if($active_pageno == $total_page){?>display:none;<?php } ?>" ><a href="?pageno=<?=$pageno + 1?>">></a></span>
                            <span style="<?php if($active_pageno == $total_page){?>display:none;<?php } ?>" ><a href="<?php echo "?pageno=".($pageno + 1);?>"><i class="fa fa-angle-right"></i></a></span>&nbsp;&nbsp;
                          <!-- </ul> -->
                            </div>
                            <!-- <button type="submit" name="view_all" id="view_all" class="button add-to-cart-mt" style="padding: 4px 15px">View All</button> -->
                        </div>
                    </div>
                    <?php } ?>
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
                if (val == "") {
                    $(this).next().css("display", "none");
                } else {
                    $(this).next().css("display", "");
                }
            });
            $('#view_all').click(function(){
                $.ajax({
                    url : "<?php echo site_url('kaffee/kaffee_new/');?>",
                    method : "POST",
                    data :{flag : true},
                    success: function(data){
                        location.href="<?php echo site_url('shop');?>";
                    }
                });
            });
        });

 
// function searchfunc()
// {
//     alert("dfgsj fsk");
// }


    </script>
</body>

</html>

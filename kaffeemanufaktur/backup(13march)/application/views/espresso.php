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
                            <?php
                                $category_array =array("Kaffee","Espresso","Zubehör","Geschenke");

                             foreach ($category_array as $cat) {?>
                               <a <?php if($cat=='Geschenke'){?>href="<?= base_url('produkt-kategorie/'.com_slugify($cat)) ?>"<?php }elseif($cat=='Zubehör'){?>href="<?=base_url('produkt-kategorie/'.com_slugify('ZUBEHOER')) ?>"<?php }else{?>href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify($cat)) ?>"<?php }if($cat==$option){ echo 'class="activeCategory"';}?>><?=$cat?></a> |
                            <?php } ?> <a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify('espresso'))?>">Alle Produkte</a><br><br>
                            <?php foreach ($psubcategory as $cat) {?>
                               <a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify('espresso')).'/'.com_slugify($cat['name']) ?>"<?php if($cat['name']==$option){ echo 'class="activeCategory"';}?>><?=$cat['name']?></a> |
                            <?php } ?> <a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify('espresso')) ?>">Alle Produkte</a>
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
                    <p><?php if($pageno ==1 && $total_row >0){ echo $pageno;}elseif($pageno >1 && $total_row >0){echo (($pageno-1)*6)+1;}?>–<?php $current_page_item = $pageno* 6 ;if($current_page_item < $total_row){ echo $current_page_item;}else{  echo $total_row; }?> von <?=$total_row?> Ergebnissen werden angezeigt</p>
                    <form action="" method="get()" class="sort">
                        <select class="form-control" name="orderby" id="" onchange="this.form.submit()">
                            <option class="form-control" value="std" <?php if($this->input->get("orderby", TRUE)=='std'){echo "selected";}?> selected>Standardsortierung</option>
                            <option class="form-control" value="date" <?php if($this->input->get("orderby", TRUE)=='date'){echo "selected";}?>>Sortieren nach neuesten</option>
                            <option class="form-control" value="asc" <?php if($this->input->get("orderby", TRUE)=='asc'){echo "selected";}?>>Nach Preis sortiert: aufsteigend</option>
                            <option class="form-control" value="desc" <?php if($this->input->get("orderby", TRUE)=='desc'){echo "selected";}?>>SNach Preis sortiert: absteigend</option>
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
                            $min=0;
                            $max=0;
                            if(!empty($product_details)){
                                foreach ($product_details as $value1) {
                                   $price_array[] = $value1['price'];
                                }
                                if(!empty($price_array)){
                                    $min = min($price_array);
                                    $max = max($price_array);
                                }
                            }
                         ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="product">
                            <!-- <a href="<?= base_url()?>products/product/<?=$value['id']?>" class="d-block"> -->
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
                                    <span class="price"><?php if(sizeof($product_details)>1){echo $min.'€ - '.$max.'€';}else{
                                echo $min.'€';
                              }?></span>
                                </div>
                                <?php if($is_package == 'N'){
                                $taste = empty($value['taste'])? '':explode(',',$value['taste']);
                                 ?>
                                <div class="categoryThumbnailsContainer">
                                    <span class="form-row mb-3">
                                        <?php if(!empty($taste)){foreach ($taste as $tt) {
                                            $val = $this->db->query("Select * from product_equipment where id = $tt")->row_array();
                                            ?>
                                        <span class="col-4">
                                            <span class="singleCategoryThumbnail">
                                                <img src="<?= base_url()?><?=$val['image']?>" alt="" title="<?=$val['name']?>">
                                            </span>
                                        </span>
                                    <?php }} ?>
                                    </span>
                                    <span class="form-row">
                                        <span class="col-6">
                                            <span class="middle">Körper:</span>
                                        </span>
                                         <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <?php for($x=1;$x<=$value['body_rating'];$x++) {?>
                                                    <span class="circle circle100"></span>
                                               <?php }
                                                if (strpos($value['body_rating'],'.')) {?>
                                                    <span class="circle circle50"></span>
                                                   <?php $x++;
                                                }
                                                while ($x<=5) {?>
                                                    <span class="circle circle0"></span>
                                                    <?php $x++;
                                                } ?>
                                            </div>
                                            <?= $value['body'];?>
                                            <!-- geschmeidig, rund -->
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Säure:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <?php for($x=1;$x<=$value['acid_rating'];$x++) {?>
                                                    <span class="circle circle100"></span>
                                               <?php }
                                                if (strpos($value['acid_rating'],'.')) {?>
                                                    <span class="circle circle50"></span>
                                                   <?php $x++;
                                                }
                                                while ($x<=5) {?>
                                                    <span class="circle circle0"></span>
                                                    <?php $x++;
                                                } ?>
                                            </div>
                                            <?= $value['acid'];?>
                                            <!-- frisch, ausgewogen -->
                                        </span>
                                        <span class="col-6">
                                            <span class="middle">Nachklang:</span>
                                        </span>
                                        <span class="col-6 text-left">
                                            <div class="circleBox">
                                                <?php for($x=1;$x<=$value['aftertaste_rating'];$x++) {?>
                                                    <span class="circle circle100"></span>
                                               <?php }
                                                if (strpos($value['aftertaste_rating'],'.')) {?>
                                                    <span class="circle circle50"></span>
                                                   <?php $x++;
                                                }
                                                while ($x<=5) {?>
                                                    <span class="circle circle0"></span>
                                                    <?php $x++;
                                                } ?>
                                            </div>
                                            <?= $value['aftertaste'];?>
                                            <!-- weich, komplex -->
                                        </span>
                                        </span>
                                </div>
                            <?php }?>
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
                    </div>-->
                    
                    <?php if($flag && $total_row != 0){?>
                    <div class="col-12">
                        <div class="pager">
                            <div class="pages">
                                <!-- <?php echo ($pagination_product); ?> -->
                               <!-- <ul> -->
                        <?php if(($active_pageno >= 4)){?>
                            <span style="<?php if($active_pageno == $total_page){?>display:none;<?php } ?>" ><a class="page-numbers <?php if($active_pageno == 1){?> current <?php }?>"  href="?<?php if($this->input->get('orderby', TRUE)) {echo "orderby=".$this->input->get('orderby', TRUE)."&amp;pageno=".$pageno;}else{?>pageno=<?php echo  1; }?>">1<i class="fa fa-angle-right"></i></a></span>
                            <span style="<?php if($pageno <= 1){?>display:none;  <?php } ?>">
                                <a class="page-numbers <?php if($pageno <= 1){ echo 'disable';}?>" href="?<?php if($pageno <= 1){ echo 'disable';} else { if($this->input->get('orderby', TRUE)) {echo "orderby=".$this->input->get('orderby', TRUE)."&amp;pageno=".($pageno - 1);}else{echo "pageno=".($pageno - 1); }} ?>">...</a>
                            </span>
                        <?php } ?>    
                            <?php for($j=round($pageno/2);$j<$pageno;$j++){ if($pageno ==3){?>
                              <span><a class="page-numbers 
                                <?php if($active_pageno == 1){?><?php }?>" 
                                href="?<?php if($this->input->get('orderby', TRUE)) {echo "orderby=".$this->input->get('orderby', TRUE)."&amp;pageno=1";}else{?>pageno=1 <?php }?>">1</a></span>
                            <?php }?>
                            <span><a class=" page-numbers <?php if($active_pageno == $j){?><?php }?>" href="?<?php if($this->input->get('orderby', TRUE)) {echo "orderby=".$this->input->get('orderby', TRUE)."&amp;pageno=".$j;}else{?>pageno=<?php echo $j; } ?>"><?=$j?></a></span>
                          <?php } ?>
                            <span><a class=" page-numbers <?php if($active_pageno == $pageno){?> current <?php }?>" href="?<?php if($this->input->get('orderby', TRUE)) {echo "orderby=".$this->input->get('orderby', TRUE)."&amp;pageno=".$pageno;}else{?>pageno=<?php echo $pageno; }?>"><?=$pageno?></a></span>
                            <!-- <span><a class="<?php if($active_pageno == $pageno){?><?php }?>" href="?pageno=<?=$pageno + 1?>"><?=$pageno+1?></a></span> -->
                            
                            <span  style="<?php if($active_pageno == $total_page){?>display:none;<?php } ?>"><a class="page-numbers <?php if($active_pageno == $active_pageno+1){?> current <?php }?>" href="?<?php if($this->input->get('orderby', TRUE)!=null) {echo "orderby=".$this->input->get('orderby', TRUE)."&amp;pageno=".($active_pageno+1);}else{ echo 'pageno='.($active_pageno+1); } ?>"><?=$active_pageno+1?></a></span>
                        <?php if(!($total_page-$active_pageno == 1)){?>
                            <span style="<?php if($total_page-$active_pageno <= 2){?>display:none;<?php } ?>" ><a class="page-numbers"  href="?<?php if($this->input->get('orderby', TRUE)) {echo "orderby=".$this->input->get('orderby', TRUE)."&amp;pageno=".($pageno + 1);}else{?>pageno=<?php echo $pageno + 1;}?>">..</a></span>
                            <span style="<?php if($active_pageno == $total_page){?>display:none;<?php } ?>" ><a class="page-numbers <?php if($active_pageno == $active_pageno+1){?> current <?php }?>"  href="?<?php if($this->input->get('orderby', TRUE)) {echo "orderby=".$this->input->get('orderby', TRUE)."&amp;pageno=".$total_page;}else{?>pageno=<?php echo $total_page; }?>"><?=$total_page?><i class="fa fa-angle-right"></i></a></span>
                        <?php }?>
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
            $('form.search .remove').click(function() {
                $("form.search .form-control").val('').trigger('change').focus();
            });
            $("form.search .form-control").on("keyup", function() {
                var val = $(this).val();
                if (val == "") {
                    $(this).next().css("display", "none");
                } else {
                    $(this).next().css("display", "");
                }
            })
        })

    </script>
</body>

</html>

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
         <?php $ci =& get_instance();?>
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
                                <?php $category_array = array("Kaffee","Espresso","Zubehör","Geschenke");
                                 foreach ($category_array as $key=> $cat) {?>
                                   <a <?php if($cat=='Geschenke'){?>href="<?= base_url('produkt-kategorie/'.com_slugify($cat)) ?>"<?php }elseif($cat=='Zubehör'){?>href="<?=base_url('produkt-kategorie/'.com_slugify('ZUBEHOER')) ?>"<?php }else{?>href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify($cat)) ?>"<?php }if($cat==$option){ echo 'class="activeCategory"';}?>><?=$cat?></a> |
                                <?php } ?> <a href="<?= base_url('produkt-kategorie/kaffee-espresso/'.com_slugify('espresso'))?>">Alle Produkte</a><br><br>
                                <?php foreach ($psubcategory as $cat) {?>
                                   <a href="<?= base_url('produkt-kategorie/'.com_slugify('Zubehoer')).'/'.com_slugify($cat['e_name']) ?>"<?php if($cat['name']==$option){ echo 'class="activeCategory"';}?>><?=$cat['name']?></a> |
                                <?php } ?> <a href="<?= base_url('produkt-kategorie/'.com_slugify('Zubehoer')) ?>">Alle Produkte</a>
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
                                foreach ($product_details as $value1) {
                                   $price_array[] = $value1['price'];
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
                                        <h4 class="product_title"><?=$value['name']?></h4>
                                        <span class="price"><?=$min.' € - '.$max.' €'?></span>
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

                    <?php if($flag && $total_row != 0){?>
                        <div class="col-12">
                            <div class="pager">
                                <div class="pages">
                                    <!-- <?php echo ($pagination_product); ?> -->
                                   <!-- <ul> -->
                                <span style="<?php if($pageno <= 1){?>display:none;  <?php } ?>">
                                    <a class="page-numbers <?php if($pageno <= 1){ echo 'disable';}?>" href="?<?php if($pageno <= 1){ echo 'disable';} else { if($this->input->get('orderby', TRUE)) {echo "orderby=".$this->input->get('orderby', TRUE)."&amp;pageno=".($pageno - 1);}else{echo "pageno=".($pageno - 1); }} ?>"><</a>
                                </span>
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
                                <span style="<?php if($active_pageno == $total_page){?>display:none;<?php } ?>" ><a href="?<?php if($this->input->get('orderby', TRUE)) {echo "orderby=".$this->input->get('orderby', TRUE)."&amp;pageno=".($pageno + 1);}else{?>pageno=<?php echo $pageno + 1;}?>">></a></span>
                                <span style="<?php if($active_pageno == $total_page){?>display:none;<?php } ?>" ><a href="?<?php if($this->input->get('orderby', TRUE)) {echo "orderby=".$this->input->get('orderby', TRUE)."&amp;pageno=".$pageno;}else{?>pageno=<?php echo $pageno + 1; }?>"><i class="fa fa-angle-right"></i></a></span>&nbsp;&nbsp;
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
                    console.log(val);
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

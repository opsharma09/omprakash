<?php if(!empty($product)){?>
<div class="product_wrapper">
    <div class="products text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="product-title">Kaffeefinder Liste</h2>
                </div>
                <?php $price_array = array(); foreach($product as $value){
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
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product">
                        <a href="<?=base_url('produkt/'.com_slugify($value['e_name']))?>" class="d-block">
                            <div class="image_frame">
                                <div class="image_wrapper">
                                    <div class="mask"></div>
                                    <img src="<?= base_url()?><?=$value['image1']?>" alt="">
                                </div>
                            </div>
                            <div class="desc">
                                <div class="star_rating"><span class="fas fa-star"></span><span
                                        class="fas fa-star"></span><span class="fas fa-star"></span><span
                                        class="fas fa-star"></span><span class="fas fa-star"></span></div>
                                <h4 class="product_title"><?=ucfirst($value['name'])?></h4>

                                <span class="price"><?=$min.' € - '.$max.' €'?></span>
                            </div>
                            <?php if($product[0]['category']!=19){
                            $taste = empty($value['taste'])? '':explode(',',$value['taste']);
                             ?>
                            <div class="categoryThumbnailsContainer">
                                <span class="form-row mb-3">
                                    <?php if(!empty($taste)){foreach ($taste as $tt) {
                                        $val = $this->db->query("Select * from product_equipment where id = $tt")->row_array();
                                        ?>
                                    <span class="col-4">
                                        <span class="singleCategoryThumbnail">
                                            <img src="<?= base_url()?><?=$val['image']?>" alt=""
                                                title="<?=$val['name']?>">
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
                                            <span class="circle circle100"></span> <span
                                                class="circle circle100"></span> <span
                                                class="circle circle50"></span> <span class="circle circle0"></span>
                                            <span class="circle circle0"></span>
                                        </div>
                                        <?= $value['body'];?>
                                        <!-- geschmeidig, rund -->
                                    </span>
                                    <span class="col-6">
                                        <span class="middle">Säure:</span>
                                    </span>
                                    <span class="col-6 text-left">
                                        <div class="circleBox">
                                            <span class="circle circle100"></span> <span
                                                class="circle circle100"></span> <span
                                                class="circle circle50"></span> <span class="circle circle0"></span>
                                            <span class="circle circle0"></span>
                                        </div>
                                        <?= $value['acid'];?>
                                        <!-- frisch, ausgewogen -->
                                    </span>
                                    <span class="col-6">
                                        <span class="middle">Nachklang:</span>
                                    </span>
                                    <span class="col-6 text-left">
                                        <div class="circleBox">
                                            <span class="circle circle100"></span> <span
                                                class="circle circle100"></span> <span
                                                class="circle circle50"></span> <span class="circle circle0"></span>
                                            <span class="circle circle0"></span>
                                        </div>
                                        <?= $value['aftertaste'];?>
                                        <!-- weich, komplex -->
                                    </span>
                                </span>
                            </div>
                            <?php } ?>
                        </a>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
<?php }else{?>
<div class="col-lg-12 col-sm-12" style="text-align: center;padding: 100px">
        <h3 align="center" style="text-align: center;color:red">Keine Daten gefunden</h3>
</div>
<?php }?>
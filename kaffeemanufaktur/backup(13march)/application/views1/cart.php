<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
        $title = "Koffee.com";
        $style_name = "cart";
        require_once("public/include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <div id="agbanner">
        <div id="agbBannerBottomDeco"></div>
    </div>
    <!--section cart started.-->
    <section class="cart">
        <div class="container">
            <div class="row">
                <div class="col-12">
<!--                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error:</strong> Username required.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Noch 5,10 € bis zum kostenlosen Versand!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>-->
                    <form action="" class="cart-form">
                        <div class="coupon_message_wrap">

                        </div>
                        <div class="shop_table">
                            <div class="row head">
                                <div class="col"><span> </span></div>
                                <div class="col"><span>Produkt</span></div>
                                <div class="col"><span>Pries</span></div>
                                <div class="col"><span>Anzahl</span></div>
                                <div class="col"><span>Zwischensumme</span></div>
                                <div class="col"><span></span></div>
                            </div>
                            
                                <?php $totalPrice = 0;$shipPrice = 2.9;
                                foreach($cart as $val){  ?>
                                <div class="row">
                                    <div class="col">
                                        <img src="<?= base_url()?><?=$val['image1']?>" alt="">
                                    </div>
                                    <div class="col">
                                        <?=$val['name']?>
                                        <p class="info"><?=$val['type']?>, <?=$val['size']?> <br>Personen: 1 <br> Datum: 8. August 2020 <br>Zeit: 15:00</p>
                                    </div>
                                    <div class="col"><?=$val['price']?> &euro;</div>
                                    <div class="col"><?=$val['myQuan']?></div>
                                    <div class="col"><?php echo $val['myQuan']*$val['price']?> &euro;</div>
                                    <div class="col">
                                        <a href="<?= base_url()?>home/delete_cart_product/<?=$val['mycart_id']?>" class="btn-white">&times;</a>
                                    </div>
                                </div>
                                <?php $totalPrice=$totalPrice+($val['myQuan']*$val['price']);} ?>
                            
                            <div class="row">
                                <div class="col actions">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="coupon"><input type="text" placeholder="Gutscheincode"><button class="btn-white">Gutschein anwenden</button></div>
                                        </div>
                                        <div class="col-md-5 text-right"><button class="btn-white" disabled>Warenkorb aktualisieren</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="cart_totals">
                        <h2>Warenkorb-Summe</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Zwischensumme</th>
                                            <td><?=$totalPrice?> &euro;</td>
                                        </tr>
                                        <tr>
                                            <th>Versand</th>
                                            <td><b><?=$shipPrice?> &euro;</b></td>
                                        </tr>
                                        <tr>
                                            <th>Gesamtsumme</th>
                                            <td><?php echo $sub = $totalPrice+$shipPrice?> &euro;</td>
                                        </tr>
                                        <tr>
                                            <th>inkl. 5 % MwSt.	</th>
                                            <td><?php echo $subtotal = (5 / 100) * $sub;?> &euro;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="proceed"><a href="" class="btn-white">Weiter zur Kasse</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section cart ended.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
</body>

</html>

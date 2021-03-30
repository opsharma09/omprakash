<!DOCTYPE html>
<html lang="de-DE">

<head>
    <?php 
    $title = "Koffee.com";
    $style_name = "mein-account";
    require_once("public/include/head.php")?>
</head>

<body>
    <!--header started.-->
    <?php require_once("public/include/header.php") ?>
    <!--header ended.-->
    <div class="header_gap"></div>
    <div id="agbanner" style="background-image:url(<?=base_url('public/images/20190625091713.jpg')?>)">
        <div id="agbBannerBottomDeco"></div>
    </div>
    <!--account started.-->
    <!--<?=base_url('users/user_profile/order')?>-->
    <section class="account">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-4">
                    <ul class="main-side-nav">
                        <li class="is-active"><a href="<?=base_url('mein-account')?>">Dashbaord</a></li>
                        <li><a href="<?=base_url('mein-account/orders')?>">Bestellungen</a></li>
                        <li><a href="<?=base_url('mein-account/subscriptions')?>">Abonnements</a></li>
                        <li><a href="<?=base_url('mein-account/wc-smart-coupons')?>">Coupons</a></li>
                        <li><a href="<?=base_url('mein-account/edit-address')?>">Adressen</a></li>
                        <!-- <li><a href="<?=base_url('mein-account/payement_')?>">Zahlungsmethoden</a></li> -->
                        <li><a href="<?=base_url('mein-account/edit-account')?>">Kontodetails</a></li>
                        <li><a href="<?=base_url('login/logout')?>">Abmelden</a></li>
                    </ul>
                </div>
                <div class="col-md-7 col-lg-8">
                    <?php 
                    if($sub_page != 'dashboard'){
                        require_once $sub_page.'.php';
                    }

                    if($sub_page == 'dashboard'){
                    ?>

                    <p>Hello <b><?php $arr = explode("@", $this->session->userdata('user')->email_id, 2);echo $arr[0];  ?></b> (not <b><?php $arr = explode("@", $this->session->userdata('user')->email_id, 2);echo $arr[0];  ?></b> ? <a href="<?=base_url('login/logout')?>">Sign Out</a></p>
                    <p>From your account dashboard, you can make your <a href="<?=base_url('users/user_profile/order')?>">last orders</a> , see your <a href="">shipping and billing addresses</a> and <a href="">password and account details</a> to edit.</p>
                <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!--account ended.-->
    <!--footer started.-->
    <?php require_once("public/include/footer.php") ?>
</body>

</html>

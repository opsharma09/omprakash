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
    <div class="header_gap"></div>
    <div id="agbanner">
        <div id="agbBannerBottomDeco"></div>
    </div>
    <!--account started.-->
    <section class="account">
        <div class="container" style="text-align: center" >
        	<?php if(!isset($error)){?>
	            <div class="row">
	            	<h2>Vielen Dank für Ihre Anmeldung.</h2>
	            </div>
	            <div class="row">
                    <?php if (isset($_GET["v"]) && isset($_GET["email"])) {?>
                        <input type="hidden" id="key" value="<?=$_GET["v"]?>">
                        <input type="hidden" id="email" value="<?=$_GET["email"]?>">
                    <?php } ?>
	            	<a href="javascript::void(0)" class="btn-white" onclick="myfun()">Jetzt einkaufen</a>
	            </div>
	        <?php }else{
	        	echo $error;
	        } ?>
        </div>
    </section>

     <?php require_once("public/include/footer.php") ?>
    <script type="text/javascript">

        function myfun(){
            var key = $('#key').val();
            var email = $('#email').val();
            $.ajax({
                url: "<?= base_url()?>home/save_coupon_code",
                type: "post",
                data: {key:key,email:email},
                success: function(response) {
                    location.href="<?=base_url()?>";
                }
            });
        }
    </script>
  </body>
</html>
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
    <div id="agbanner">
        <div id="agbBannerBottomDeco"></div>
    </div>
    <!--account started.-->
    <section class="account">
        <div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-6 col-md-8">
					<div>
						<h3 style="text-align: center;">Rufen Sie Ihr Passwort ab</h3>
						<form class="" action="<?php echo site_url('login/forgot-password'); ?>" method="post">
							<div class="form_container">
								<label>Registrierte E-Mail</label>
								<div class="form-group">
									<input type="email" class="form-control" name="email" id="email" placeholder="Email*" onchange="emailAlreadyExist(this)">
								</div>
									<p  class="error-alert validEmail" style="display:none">* Enter a Valid Email Id</p>
                                    <p  class="error-alert userEmail" style="display:none">* Email Id Not Exist</p>
                                    <p id="email-error" class="error-alert requiredEmail" style="display:none">* Email Id is required</p>
								<div class="clearfix add_bottom_15">
									<div class="float-left"><a id="sign_up" href="<?php echo site_url('register'); ?>"> <small>Ich habe keinen Account?</small> </a></div>
									<div class="float-right"><a id="login" href="<?php echo site_url('login'); ?>"> <small>Zurück zur Anmeldung?</small> </a></div>
								</div>
								<div class="text-center"><input type="submit" value="Passwort per Mail senden" class="btn sub_button" disabled=""></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php require_once("public/include/footer.php") ?>
</body>
</html>
<script type="text/javascript">
	
	function emailAlreadyExist(email) {
        var emial = $(email).val();
        var emialer = emial.toLowerCase(); 
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(emialer)) {
            $(email).parent().parent().find('.validEmail').hide();
            var userName = emialer;
            flag = false;
            $(".userEmail").hide();
            if (userName != "") {
                $.get("<?= base_url() ?>register/emailIdAlreadyExist",
                        {
                            userName: userName
                        },
                        function (data, status) {
                            userData = JSON.parse(data);
                            if (userData[0]) {
                                $(".userEmail").hide();
                                $(".sub_button").prop('disabled',false);
                            } else {
                                flag = true;
                                $(".sub_button").prop('disabled',true);
                                $(".userEmail").show();
                            }
                        });

            }

        }
        else { 
            $(".userEmail").hide();
            $(".sub_button").prop('disabled',true);
            $(email).parent().parent().find('.validEmail').show();
            $(".loader-image").hide();
            return false;
        }
    
    }
</script>
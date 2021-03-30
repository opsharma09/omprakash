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
						<h3 style="text-align: center;">Geben Sie ein neues Kennwort ein</h3>
						<form class="" action="<?php echo site_url('login/reset-password'); ?>" method="post">
							<div class="form_container">
                                <div class="form-group">
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Neues Passwort*" onkeyup="myFunction()" required>
                                </div>
                                <p id="password-error" class="error-alert" style="display:none">* password must be of atleast 6 characters and must contain atleast 1 lower case character ,1 upper case
                                    character and  1 number</p>
                                <div class="form-group">
                                    <input id="confirm_password" name="confirm_password" type="password" class="form-control" placeholder="Passwort wiederholen*" onkeyup="myFunction()" required>
                                </div>
                                <input type="hidden" name="email_id" value="<?=$email?>">
                                    <p id="c_password-error" class="error-alert" style="display:none">* Password and Confirm Password Not Macthed</p>
								<div class="text-center"><input type="submit" value="Kennwort aktualisieren" class="btn sub_button"></div>
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
	$('#password').keyup(function () {
            var password = $('#password').val();
            if (password.match('[a-z]')) {
                if (password.match('[A-Z]')) {
                    if (password.match('[0-9]')) {
                        if (password.length > 5) {
                            $('#password').parent().parent().find('.error-alert').hide();
                        } else {
                            $('#password').parent().parent().find('.error-alert').show();
                        }

                    } else {
                        $('#password').parent().parent().find('.error-alert').show();
                    }
                } else {
                    $('#password').parent().parent().find('.error-alert').show();
                }
            } else {
                $('#password').parent().parent().find('.error-alert').show();
            }
        });
        


	function  myFunction() {
            var password = $('#password').val();
            var confirmPassword = $('#confirm_password').val();

            if (confirmPassword != "") {
                if (password !== confirmPassword) {
                    $('#confirm_password').parent().parent().find('.error-alert').show();
                }else{
                    $('#confirm_password').parent().parent().find('.error-alert').hide();
                }
            }
        }
</script>
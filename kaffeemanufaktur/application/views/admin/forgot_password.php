<section class="content">
    <div class="card pl-4 pt-4 pr-4 pb-4">
      <div class="row">
        <div class="col-sm-12">
          <h4>Change Password</h4>
          
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
            <div class="container-fluid">
    			<div class="row justify-content-center">
    				<div class="col-xl-6 col-lg-6 col-md-8">
    					<div>
    						<h3 style="text-align: center;">Please enter a new password</h3>
    						<form class="" action="<?php echo site_url('login/change_password'); ?>" method="post">
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
    								<div class="text-center"><input type="submit" value="Kennwort aktualisieren" class="btn btn-primary"></div>
    							</div>
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
        </div>
      </div>
    </div>
</section>
	
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
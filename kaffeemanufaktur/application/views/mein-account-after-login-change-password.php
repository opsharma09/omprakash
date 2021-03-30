<style type="text/css">
    form .input-group .input-group-append {
    position: relative;
    border: 1px solid #ced4da;
}
.input-group-append {
    margin-left: -1px;
}
.input-group-append{
    display: flex;
}
 form .input-group .input-group-append i {
    line-height: 36px;
    padding: 0 10px;
    display: inline-block;
}
</style>
<div class="col-lg-8">
    <form action="<?=base_url('users/user_profile/change_password')?>" class="woocommerce-EditAccountForm edit-account change_pass_form" method="post">
        <div class="row">
            <div class="col-md-12">
                <legend>Passwort ändern</legend>
                <fieldset>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Aktuelles Passwort (leer lassen für keine Änderung)</label>
                            <div class="input-group mb-3 input-icons">
                                <input type="password" class="form-control" id="password" name="old_password" onkeyup="checkpass(this)">
                                <div class="input-group-append">
                                    <i class="fas fa-eye " id="togglePassword"></i>
                                </div>
                            </div>
                            <p id="error_msg"></p>
                        </div>
                        <div class="col-12 div_select">
                            <label for="">Neues Passwort (leer lassen für keine Änderung)</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password1" name="password" >
                                <div class="input-group-append"><i class="fas fa-eye" id="togglePassword1"></i></div>
                            </div>
                        </div>
                        <div class="col-12 div_select">
                            <label for="">Neues Passwort bestätigen<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password2" >
                                <div class="input-group-append"><i class="fas fa-eye" id="togglePassword2"></i></div>
                            </div>
                        </div>  
                        <input type="hidden" name="email_id" value="<?=$this->session->userdata('user')->email_id?>" id="email_id">
                    </div>
                </fieldset>
            </div>
            <div class="col-md-12">
                <button class="btn-white" type="button" onclick="validate()">Änderungen speichern</button>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).on('click', '#togglePassword', function() {

    $(this).toggleClass("fas fa-eye-slash");
    
    var input = $("#password");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
    });
    $(document).on('click', '#togglePassword1', function() {

    $(this).toggleClass("fas fa-slash");
    
    var input = $("#password1");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
    });
    $(document).on('click', '#togglePassword2', function() {

    $(this).toggleClass("fas fa-eye-slash");
    
    var input = $("#password2");
    input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password')
    });
    function checkpass(per){
        var pass = $(per).val();
        var email = $('#email_id').val();
        $.ajax({
            url: "<?= base_url()?>users/check_password",
            type: "post",
            data: {email:email,old_password:pass},
            success: function(response) {
                data = $.trim(response);
                if (data == 'notok') {
                    $("#error_msg").html('Das aktuelle Passwort stimmte nicht überein. Wenn Sie Ihr Passwort vergessen haben ? <a href="<?=base_url('forgot-password')?>"> klicken Sie hier</a>');
                    
                }else{
                    $("#password1").prop('readonly',false);
                    $("#password2").prop('readonly',false);
                    $("#error_msg").css('display','none');
                    
                }
            }
        });
}
    function validate(){
        var password1 = $('#password1').val();
        var password = $('#password').val();
        var confirm_password = $('#password2').val();
        if(password == ''){
            alert('Password is required.');
            return false;
        } else if(!isPassword(password1)){
            alert('Please enter password in correct format');
            return false;
        }else if(confirm_password == ''){
            alert('Confirm is required.');
            return false;
        } else if(password1 != confirm_password){
            alert('Password and confirm password must be same.');
            return false;
        }else{
	        var email = $('#email_id').val();
	        $.ajax({
	            url: "<?= base_url()?>users/check_password",
	            type: "post",
	            data: {email:email,old_password:password},
	            success: function(response) {
	                data = $.trim(response);
	                if (data == 'notok') {
	                    $("#error_msg").html('Das aktuelle Passwort stimmte nicht überein. Wenn Sie Ihr Passwort vergessen haben ? <a href="<?=base_url('forgot-password')?>"> klicken Sie hier</a>');
	                    alert('Das aktuelle Passwort stimmte nicht überein.');
	                    return false;
	                }else{
			            $( ".change_pass_form" ).submit();
						alert('Password has been changed!');
	                }
	            }
	        });
        }
    }
    function isPassword(password) {
       var  attributes = false;
        $('#password').parent().parent().find('.error-alert').hide();
        if (password.match('[a-z]') && password.match('[A-Z]') && password.match('[0-9]') && password.length > 5) {
            attributes = true;
           
       } else{
        $('#password').parent().parent().find('.error-alert').show();
         attributes = false;
       }
       return attributes;
    }
</script>
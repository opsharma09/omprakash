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
    <form action="<?=base_url('users/user_profile/change_password')?>" class="woocommerce-EditAccountForm edit-account" method="post">
        <div class="row">
            <div class="col-md-12">
                <legend>Passwort ändern</legend>
                <fieldset>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Aktuelles Passwort (leer lassen für keine Änderung)</label>
                            <div class="input-group mb-3 input-icons">
                                <input type="password" class="form-control" id="password">
                                <div class="input-group-append">
                                    <i class="fas fa-eye " id="togglePassword"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="">Neues Passwort (leer lassen für keine Änderung)</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password1" name="password">
                                <div class="input-group-append"><i class="fas fa-eye" id="togglePassword1"></i></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="">Neues Passwort bestätigen<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password2">
                                <div class="input-group-append"><i class="fas fa-eye" id="togglePassword2"></i></div>
                            </div>
                        </div>  
                    </div>
                </fieldset>
            </div>
            <div class="col-md-12">
                <button class="btn-white">Änderungen speichern</button>
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
</script>
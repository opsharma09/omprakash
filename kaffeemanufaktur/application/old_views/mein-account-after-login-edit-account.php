
<div class="col-lg-8">
    <form action="<?=base_url('users/user_profile/edit_profile')?>" class="woocommerce-EditAccountForm edit-account">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Vorname <span class="required">*</span></label>
                    <input type="text" class="form-control" name="first_name" value="<?=$user_info->first_name?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Nachname <span class="required">*</span></label>
                    <input type="text" class="form-control" name="last_name" value="<?=$user_info->last_name?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Anzeigename <span class="required">*</span></label>
                    <input type="text" class="form-control" name="display_name" value="<?=$user_info->first_name?>">
                    <p class="m-0"><i>So wird Ihr Name im Konto-Bereich und in den Bewertungen angezeigt</i></p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">E-Mail-Adresse <span class="required">*</span></label>
                    <input type="text" class="form-control" name="email_id"  value="<?=$user_info->email_id?>">
                    <p class="m-0"><i>This is how your name will appear in the account area and in the ratings</i></p>
                </div>
            </div>
            <div class="col-md-12">
                <legend>Passwort ändern</legend>
                <fieldset>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Aktuelles Passwort (leer lassen für keine Änderung) <span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password" value="<?=$user_info->password?>">
                                <div class="input-group-append"><i class="fas fa-eye" id="togglePassword"></i></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="">Neues Passwort (leer lassen für keine Änderung<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password" name="password">
                                <div class="input-group-append"><i class="fas fa-eye" id="togglePassword"></i></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="">Neues Passwort bestätigen<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" id="password">
                                <div class="input-group-append"><i class="fas fa-eye" id="togglePassword"></i></div>
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
</script>
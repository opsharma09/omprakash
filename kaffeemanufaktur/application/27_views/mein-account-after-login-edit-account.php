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
    <form action="<?=base_url('users/user_profile/edit_profile')?>" class="woocommerce-EditAccountForm edit-account" method="post">
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
                    <input type="text" class="form-control" name="display_name" value="<?=$user_info->display_name?>">
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
                <button class="btn-white">Änderungen speichern</button>
                
            </div>
        </div>
    </form>
</div>

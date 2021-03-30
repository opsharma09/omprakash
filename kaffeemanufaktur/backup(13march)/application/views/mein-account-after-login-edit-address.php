
<div class="col-lg-12">
    <p>Die folgenden Adressen werden standardmäßig auf der Bezahlseite verwendet.</p>
    <div class="row">
        <div class="col-md-6">
            <div class="mein-account address">
                <div class="clearfix">
                    <h3>Rechnungsadresse</h3>
                    <a href="<?=base_url('mein-account/edit-address/billing')?>">Bearbeiten</a>
                </div>
                <address class="fa d-block">
                    <?php if(!empty($bill_address)){
                        foreach ($bill_address as $key => $value) {
                            # code...
                        
                         ?>
                        <?=$value['first_name'].' '.$value['last_name']?> <br><?=$value['street']?><br><?=$value['additional_address']?><br><?=$value['pincode']?><br><?=$value['place']?>
                    <?php } }?>
                </address>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mein-account address">
                <div class="clearfix">
                    <h3>Lieferadresse</h3>
                    <a href="<?=base_url('mein-account/edit-address/shipping')?>">Bearbeiten</a>
                </div>
                <address class="fa fa-sort-alt f0dc d-block">
                    <?php if(!empty($del_address)){
                        foreach ($del_address as $key => $value) {
                        ?>
                    <?=$value['first_name'].' '.$value['last_name']?> <br><?=$value['street']?><br><?=$value['additional_address']?><br><?=$value['pincode']?><br><?=$value['place']?>
                <?php } }?>
                </address>
            </div>
        </div>
    </div>
</div>

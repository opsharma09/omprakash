
<div class="col-lg-12">
    <table class="woocommerce-account table my_account_orders">
        <thead>
            <tr>
               <th>Bestellug</th> 
               <th>Datum</th> 
               <th>Bestellungsartikel</th> 
               <th>Auftragsarten</th> 
               <th>Gesamtsumme</th> 
               <th>Aktionen</th> 
            </tr>
        </thead>
        <tbody>

           <?php if(!empty($order)){ foreach ($order as $od) { ?>
             <tr>
                  <td><a href="<?=base_url('mein-account/order-detail/'.$od->id)?>"><?=$od->id?></a></td>
                  <td><?=date('m-d-Y',strtotime($od->added_on))?></td>
                  <td><?=$od->item_count?></td>
                  <td><?=$od->type?></td>
                  <td><?=$od->total_amount?> &euro;</td>
                  <td><?php if($od->payment_method!='online'){?><a href="" class="button">Bezahlen</a><?php }?><a href="<?=base_url('mein-account/order-detail/'.$od->id)?>" class="button">Anzeigen</a></td>
              </tr>
            <?php }}else{ ?>
              <tr>
                  <td colspan="5">No Result found</td>
              </tr>  
              <?php } ?>                         
        </tbody>
    </table>
</div>
            
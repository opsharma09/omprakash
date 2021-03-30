
                <div class="col-lg-12">
                    <table class="woocommerce-account table my_account_orders">
                        <thead>
                            <tr>
                               <th>Bestellug</th> 
                               <th>Datum</th> 
                               <th>Status</th> 
                               <th>Gesamtsumme</th> 
                               <th>Aktionen</th> 
                            </tr>
                        </thead>
                        <tbody>

                          <?php if(!empty($order)){ foreach ($order as $od) { ?>
                           <tr>
                                <td><a href=""><?=$od->id?></a></td>
                                <td><?=date('d-m-Y',strtotime($od->created_at))?></td>
                                <td><?=$od->status?></td>
                                <td><?=$od->total_price?> € </td>
                                <td><a href="" class="button">Bezahlen</a><a href="" class="button">Anzeigen</a></td>
                            </tr>
                          <?php }}else{ ?>
                            <tr>
                                <td colspan="5">No Result found</td>
                            </tr>  
                            <?php } ?>                        
                        </tbody>
                    </table>
                </div>
            

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <div class="row">
            <div class="col-sm-12">
              <!-- <button class="btn btn-info float-right"><a href="<?php  echo base_url().'products/add_product/'?>" class="btn btn-info btn-sm">Add New</a></button> -->
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12"><br>
              <table  class="table table-striped table-bordered datatable">
                <?php if($flag == 'list'){?>
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Transaction No</th>
                          <th>User Info</th>
                          <th>Total Price</th>
                          <th>Order Date</th>
                          <th>Delivery Address</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                      $i=1;
                      foreach($all_data as $cat){
                      	$user_id = $cat['user_id'];
                      	$user = $this->db->query("SELECT * FROM users where user_id = $user_id")->row_array();
                      	$user_address = $this->db->query("SELECT * FROM user_address where user_id = $user_id AND type='DELIVERY'")->row();
                      ?>
                          <tr>
                            <td><a href="<?=base_url('order/order_details/'.$cat['id'])?>"><?=$cat['id']?></a></td>
                            <td><a href="<?=base_url('order/order_details/'.$cat['id'])?>"><?=$cat['txn_no']?></a></td>
                            <td>
                            <?php if(!empty($user)){ ?>
                              <p><strong>Name : </strong><?=$user['first_name'].' '.$user['last_name']?></p>
                              <p><strong>Email : </strong><?=$user['email_id']?></p>
                              <p><strong>Mobile : </strong><?=$user['phone_no']?></p>
                            <?php }else{ echo 'N/A';} ?>
                            </td>
                            <td><?=$cat['total_amount'] ?>€</td>
                            <td><?=date('m-d-Y',strtotime($cat['added_on'])) ?></td>
                            <td><?php if(!empty($user_address)){ echo $user_address->company.', '.$user_address->street.', '.$user_address->additional_address.', '.$user_address->pincode;}else{ echo 'N/A';} ?></td>
                            <td><?=$cat['status']?></td>
                            <td><a href="javascript:void(0)" class="btn btn-danger btn-sm"> Update Status</a>
                            </td>
                          </tr>
                      <?php $i++; } ?>
                  </tbody>
                <?php }else{?>
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Image</th>
                          <th>Produkt</th>
                          <th>Pries</th>
                          <th>Quantity</th>
                          <th>Total Price</th>
                          <th>Type</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $i=1; foreach($all_data as  $val){ ?>
                          <tr>
                            <?php if($val['is_subscription']==0 && $val['is_event']==0){?>
                                <td><?=$i?></td>
                                <td><img src="<?= base_url()?><?=$val['image1']?>" alt="" style="height:50px"></td>
                                <td><p class="w-100 m-0"><?=$val['name']?></p>
                                    <p class="info"><?=$val['type']?>, <?=$val['size']?> </p></td>
                                <td><?=$val['price']?> &euro;</td>
                                <td><?=$val['myQuan']?></td>
                                <td><?php echo $val['myQuan']*$val['price']?> &euro;</td>
                                <td>Product</td>
                          <?php }else{  ?>
                              <td><?=$i?></td>
                              <td><img src="<?= base_url()?><?=$val['image1']?>" alt="" style="height:50px"></td>
                              <td><p class="w-100 m-0"><?=$val['name']?></p>
                                      <p class="info"><?=$val['type']?>, <?=$val['size']?> </p></td>
                              <td><span class="d-block mb-2"><?=$val['price']?> &euro;</span>
                                    <select class="form-control weak_schedule" style="background: #da9f56; color:#fff">
                                        <option value="2"><?=$val['weak_schedule']?>&nbsp;Wochen</option>
                                    </select>
                              </td>
                              <td><?=$val['myQuan']?></td>
                              <td><?php echo $val['myQuan']*$val['price']?> &euro;</td>
                              <td>Subscription</td>
                          <?php } ?>
                          <?php $i++;}?>
                        
                      </tr>
                          <?php if(!empty($event_cart)){ foreach ($event_cart as $val) {?>
                          <tr>
                             <td><?=$val['id']?></td>
                            <td><img src="<?= base_url('public/images/logo.svg')?>" alt="" style="height:50px"></td>
                            <td> <?=$val['type']?>
                                <p class="info">Personen: <?=$val['person']?> <br> Datum: <?=date('d M Y',strtotime($val['start_date']))?> <br>Zeit:  <?=date('H:i',strtotime($val['start_time']))?></p>
                              </td>
                            <td><?=$val['aprice']?></td>
                            <td>0</td>
                            <td><?=$val['acprice']?></td>
                            <td>Event</td>
                            </tr>
                          <?php } } ?>

                </tbody>
              <?php }?>
              </table>
            </div>
          </div>
        </div>
         
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

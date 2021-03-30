
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
              <table  class="table table-striped table-bordered datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Discount</th>
                            <th>Address</th>
                            <!--<th>Status</th>-->
                            <th>Action</th>
                        </tr>
                    </thead>
                        <?php 
                        $i=1;
                        foreach($all_data as $cat){
                        	$user_id = $cat['user_id'];
                        	$address = $cat['address'];
                        	$user = $this->db->query("SELECT * FROM users where user_id = $user_id")->row();
                        	$user_address = $this->db->query("SELECT * FROM user_address where id = $address")->row();
                        ?>
                            <tr>
                              <td><?='#'.$cat['id']?></td>
                              <td><?php if(!empty($user)){ echo $user->first_name.' '.$user->last_name;}else{ echo 'N/A';} ?></td>
                              <td><?=$cat['qty'] ?></td>
                              <td><?=$cat['total_price'] ?></td>
                              <td><?=$cat['discount'] ?></td>
                              <td><?php if(!empty($user_address)){ echo $user_address->company.', '.$user_address->street.', '.$user_address->additional_address.', '.$user_address->pincode;}else{ echo 'N/A';} ?></td>
                              <td>
                              	<?php if($cat['status'] == 'REQUESTED'){?>
                                <a href="<?php  echo base_url().'order/update_status/'.$cat['id'] ?>" class="btn btn-success btn-sm">Confirm</a>
                            <?php }else{?>
                                <a href="<?php  echo base_url().'order/update_status/'.$cat['id'] ?>" class="btn btn-info btn-sm"> Requested</a>
                            <?php }?>
                              </td>
                            </tr>
                        <?php $i++; } ?>
                </table>
            </div>
          </div>
        </div>
         
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image')
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (f) {
                $('#image1')
                    .attr('src', f.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

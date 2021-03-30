
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <div class="row">
            <div class="col-sm-12">
              <button class="btn btn-info float-right"><a href="<?php  echo base_url().'products/add_product/'?>" class="btn btn-info btn-sm">Add New</a></button>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12"><br>
              <table id="myTable" class="table table-striped table-bordered datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Price</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                            <?php 
                            $i=1;$price_array = array(); $product_details = array();
                            
                            foreach($all_data as $cat)
                            {
                            
                            $product_details = $this->Common->product($cat['id']);
                            //	var_dump($product_details);
                            $min=0;
                            $max=0;
                            if(!empty($product_details)){
      		                    foreach ($product_details as $value2) {
      		                           $price_array[] = $value2['price'];
      		                    }
      		                    if(!empty($price_array)){
      		                      $min = min($price_array);
      		                      $max = max($price_array);
      		                    }
                            }
                            
                            
                            ?>
                            <tr>
                              <td><a href="<?php  echo base_url().'products/edit_product/'.$cat['id'] ?>"><?php echo $cat['id']; ?></a></td>
                              <td><a href="<?php  echo base_url().'products/edit_product/'.$cat['id'] ?>"><img style="width: 80px;height: 60px" src="<?= base_url()?><?=$cat['image1']?>" /></a></td>
                              <td><a href="<?php  echo base_url().'products/edit_product/'.$cat['id'] ?>" style="text-decoration: none;color: black"><?php echo $cat['name'] ?></a></td>
                              <td><?php echo $cat['product_category_name'] ?></td>
                              <td><?php echo $cat['product_sub_category_name'] ?></td>
                              <td><?php if(sizeof($product_details)>1){echo $min.'€ - '.$max.'€';}else{
                                echo $min.'€';
                              }?></td>
                              <td><?php if(str_word_count($cat['description'])>10){echo substr($cat['description'],0,50).'...';}else{echo $cat['description'];} ?></td>
                              <td>
                                <p><a href="<?php  echo base_url().'products/edit_product/'.$cat['id'] ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>&nbsp;
                                <a href="<?php  echo base_url().'products/delete_product/'.$cat['id'] ?>"  onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></p>
                              </td>
                            </tr>
                        <?php $i++;$price_array = array();
                             } ?>
                </table>
            </div>
          </div>
        </div>
         
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-responsive/2.2.6/dataTables.responsive.min.js" integrity="sha512-7XcGmBWR0h9TU3bAufG0jm8yKoEIHj+MLf4KvXG2FTUf2fP1rlX+c9VAsKlLCBTDp3yW0Fqo1Ix4RM3Sx1xldw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-responsive/2.2.6/dataTables.responsive.js" integrity="sha512-Zj6X+9TEbmNYU3mjGPPNEz09WCHpwyzD0C3DFo/PZU2qNIlw/LZ9h5BC5UWmBRiyJRyuzBt0LpKukLWzty2oiw==" crossorigin="anonymous"></script>
<script type="text/javascript">

$(document).ready(
  function() {
  $('#myTable').DataTable( {
    responsive: true
} );
  });
</script>

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

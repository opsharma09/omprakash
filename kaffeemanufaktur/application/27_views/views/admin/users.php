
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <div class="row">
            <div class="col-sm-12">
              <button class="btn btn-info float-right"><a href="<?php  echo base_url().'users/add/'?>" class="btn btn-info btn-sm">Add New</a></button>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12"><br>
              <table  class="table table-striped table-bordered datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name </th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <!--<th>Status</th>-->
                            <th>Action</th>
                        </tr>
                    </thead>
                            <?php 
                            $i=1;
                            foreach($all_data as $cat)
                            {
                            ?>
                                <tr>
                                  <td><?=$i ?></td>
                                  <td><?=$cat['first_name'].' '.$cat['last_name'] ?></td>
                                  <td><?=$cat['email_id'] ?></td>
                                  <td><?=$cat['phone_no'] ?></td>
                                  <td><?=$cat['address'] ?></td>
                                  <!--<td><input type="checkbox" name="status" value="1"> Active</td>-->
                                  <td>
                                    <a href="<?php  echo base_url().'users/edit/'.$cat['user_id'] ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php  echo base_url().'users/delete/'.$cat['user_id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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
  <!-- /.content-wrapper -->
<!-- <div class="modal" id="add_new_subcategory">
  <div class="modal-dialog">
    <div class="modal-content"> -->

      <!-- Modal Header -->
      <!-- <div class="modal-header">
        <h4 class="modal-title">Add New Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div> -->

      <!-- Modal body -->
      <!-- <div class="modal-body">
        <form action="<?php echo base_url().'products/subcategory/' ?>" class="database_operations" >
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Enter Sub Category Name</label>
              <input type="text" name="name" required="required" class="form-control" placeholder="Enter Sub Category Name">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Select Category</label>
              <select class="form-control" name="category">
                <option value="">Select</option>
                <?php 
                foreach($all_category as $cat)
                {
                  ?><option value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option><?php 
                }
                ?>  
              </select> -->
            <!-- </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
             <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div> -->
 -->

<div class="modal" id="add_new_product">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Product</h4>
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?php echo base_url().'products/add_product/' ?>" class="database_operations" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Enter Product Name</label>
              <input type="text" name="name" required="required" class="form-control" placeholder="Enter Product Name">
              <label>Enter Product Description</label>
              <textarea name="description" required="required" class="form-control" placeholder="Enter Product Description"></textarea>
              <!-- <input type="text" name="description" required="required" class="form-control" placeholder="Enter Product Description"> -->
              <label>Enter Product Quantity</label>
              <input type="number" name="qty" required="required" class="form-control" placeholder="Enter Product Quantity">
              <label>Enter Product Price</label>
              <input type="text" name="price" required="required" class="form-control" placeholder="Enter Product Price">
              <label>Enter Product Image</label>
              <input type="file" name="image" required="required" class="form-control" placeholder="Enter Product Image" onchange="readURL(this);">
              <img id="image" height="100px" style="padding-left:10px" src="#"/><br>
              <label>Enter Product Image 1</label>
              <input type="file" name="image1" required="required" class="form-control" placeholder="Enter Product Image 1" onchange="readURL1(this);">
              <img id="image1" height="100px" style="padding-left:10px" src="#"/><br>
              
            </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label>Select Sub Category</label>
                <select class="form-control" name="subcategory">
                  <option value="">Select</option>
                  <?php 
                  foreach($all_sub_category as $cat)
                  {
                    ?><option value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option><?php 
                  }
                  ?>  
                </select>
              </div>
            </div>
          

          <div class="col-sm-12">
            <div class="form-group">
              <label>Select Category</label>
              <select class="form-control" name="category">
                <option value="">Select</option>
                <?php 
                foreach($all_category as $cat)
                {
                  ?><option value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option><?php 
                }
                ?>  
              </select>
            </div>
          </div>

                    
          <div class="col-sm-12">
            <div class="form-group">
             <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
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
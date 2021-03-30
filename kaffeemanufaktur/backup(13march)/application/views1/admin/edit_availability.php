
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <form action="<?php echo base_url().'products/edit_availability/'.$availability_info[0]['id'] ?>" class="database_operations">
          <div class="row">
            <div class="col-sm-8"><br>
                <div class="form-group">
                  <label>Size</label>
                  <input type="text" name="size" required="required" class="form-control" value="<?= $availability_info[0]['size'] ?>">
                  <label>Quantity</label>
                  <input type="text" name="quantity" required="required" class="form-control" value="<?= $availability_info[0]['quantity'] ?>">
                  <label>Price</label>
                  <input type="text" name="price" required="required" class="form-control" value="<?= $availability_info[0]['price'] ?>">

                  <label>Type</label>
                <select class="form-control" name="product_details_id">
                  <option value="">Select</option>
                  <?php 
                  foreach($all_type as $cat)
                  {
                    ?><option value="<?= $cat['id']; ?>"><?= $cat['type']." (".$cat['product_name'].") "; ?></option><?php 
                  }
                  ?>  
                </select>


                </div>


                <div class="form-group">
                  <button class="btn btn-info">Update</button>
                </div>
            </div>
          </div>
          </form>
        </div>
         
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
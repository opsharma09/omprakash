
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <form action="<?php echo base_url().'products/edit_product_variation/'.$data[0]['id'] ?>" class="database_operations">
          <div class="row">
            <div class="col-sm-8"><br>
                <div class="form-group">
                  <label>Product Variation Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="<?= $data[0]['name'] ?>">
                </div>
                <div class="col-sm-12">
                <div class="form-group">
                  <label>Is Package</label>
                  <select class="form-control" name="is_package">
                    <option value="" disabled="">Select</option>
                    <option value="Y" <?php if($product_info[0]['is_package'] =='Y'){echo 'selected';}?>>YES</option>
                    <option value="N" <?php if($product_info[0]['is_package'] =='N'){echo 'selected';}?>>NO</option>
                  </select>
                </div>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <div class="row">
            <div class="col-sm-12">
              <button class="btn btn-info float-right" data-toggle="modal" data-target="#add_new_type">Add New</button>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12"><br>
            
              <table  class="table table-striped table-bordered datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Product</th>
                           
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
                                  <td><?php echo  $i; ?></td>
                                  <td><?php echo $cat['type'] ?></td>
                                  <td><?php echo $cat['product_name'] ?></td>       
                                  <!--<td><input type="checkbox" name="status" value="1"> Active</td>-->
                                  <td>
                                    <a href="<?php  echo base_url().'products/edit_type/'.$cat['id'] ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php  echo base_url().'products/delete_type/'.$cat['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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

<div class="modal" id="add_new_type">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Type</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?php echo base_url().'products/product_type/' ?>" class="database_operations" >
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Enter Type Name</label>
              <input type="text" name="type" required="required" class="form-control" placeholder="Enter Type Name">
            </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label>Select Product</label>
                <select class="form-control" name="product_id">
                  <option value="">Select</option>
                  <?php 
                  foreach($all_product as $cat)
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
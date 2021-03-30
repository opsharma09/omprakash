
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <div class="row">
            <div class="col-sm-12">
              <button class="btn btn-info float-right" data-toggle="modal" data-target="#add_product_equipment">Add New</button>
              
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12"><br>
              <table  class="table table-striped table-bordered datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $i=1;
                    foreach($product_equipment  as $cat){ ?>
                        <tr>
                          <td><?php echo  $i; ?></td>
                          <td><?php echo $cat['name']; ?></td>
                          <td><img style="width: 100px;height: 155px" src="<?= base_url()?><?=$cat['image']?>" /></td>
                          <td><?php echo $cat['type']; ?></td>
                          <td><input type="checkbox" name="status" value="1"> Active</td>
                          <td>
                            <a href="<?php  echo base_url().'home/edit_product_equipment/'.$cat['id'] ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php  echo base_url().'home/delete_product_equipment/'.$cat['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                          </td>
                        </tr>
                    <?php $i++; } ?>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
         
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<div class="modal" id="add_product_equipment">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Product Equipment</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?php echo base_url().'home/product_equipment' ?>" class="database_operations" >
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Enter Product Equipment Name</label>
              <input type="text" name="name" required="required" class="form-control" placeholder="Enter Product Equipment Name">
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="image" required="required" class="form-control" onchange="readURL(this);">
              <img id="image" height="100px" style="padding-left:10px" src="#"/><br>

            </div>
            <div class="form-group">
                <label>Type</label>
                <select class="form-control" name="type">
                  <option value="suitable">Suitable</option>
                  <option value="country">Country</option>
                  <option value="taste">Taste</option>
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
<script type="text/javascript">
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
</script>
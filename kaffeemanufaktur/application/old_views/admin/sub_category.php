
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <div class="row">
            <div class="col-sm-12">
              <button class="btn btn-info float-right" data-toggle="modal" data-target="#add_new_subcategory">Add New</button>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12"><br>
              <table  class="table table-striped table-bordered datatable" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sub Category Name</th>
                            <th>Category Name</th>
                            <th>Is Package</th>
                            <th>Status</th>
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
                                  <td><?php echo $cat['name'] ?></td>
                                  <td><?php echo $cat['product_category_name'] ?></td>
                                  <td><?php echo $cat['is_package'] ?></td>
                                  <td><input type="checkbox" name="status" value="1"> Active</td>
                                  <td>
                                    <a href="<?php  echo base_url().'products/edit_product_sub_category/'.$cat['id'] ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php  echo base_url().'products/delete_product_sub_category/'.$cat['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
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
<div class="modal" id="add_new_subcategory">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="<?php echo base_url().'products/subcategory/' ?>" id="subcategory_form" class="database_operations" >
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Enter Sub Category Name</label>
              <input type="text" name="name" required="required" class="form-control" placeholder="Enter Sub Category Name">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Enter Sub Category Slug Name</label>
              <input type="text" name="e_name" required="required" class="form-control" placeholder="(Please don't use spesial characters!)">
              <p id="error_name" style="color: red'"></p>
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
              <label>Is Package</label>
              <select class="form-control" name="is_package">
                <option value="" disabled="">Select</option>
                <option value="Y">YES</option>
                <option value="N" selected>NO</option>
              </select>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
             <button type="button" class="btn btn-primary" id="submit_button">Add</button>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#submit_button').click(function(e) {
     e.preventDefault();
    var e_name1 = $('input[name=e_name]').val();
    var name = 'product_sub_category';
    $.ajax({
            url: "<?=base_url('home/valid_slug')?>",
            type: "POST",
            data: {e_name:e_name1,table:name},
            success: function (response) {
                if(response =='ok'){
                  $('input[name=e_name]').css('border','1px solid red');
                  $('#error_name').html('<span>Slug Name is already exist. </span>');
                }else{
                  $('#subcategory_form').submit();
                }
            }
        });
 });
});
</script>
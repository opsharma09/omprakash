
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <form action="<?php echo base_url().'products/edit_product_sub_category/'.$category_info[0]['id'] ?>" class="database_operations" id="subcategory_form">
          <div class="row">
            <div class="col-sm-8"><br>
                <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="<?= $category_info[0]['name'] ?>">
                </div>
            </div>
            <div class="col-sm-8">
            <div class="form-group">
              <label>Enter Sub Category Slug Name</label>
              <input type="text" name="e_name" required="required" class="form-control" value="<?= $category_info[0]['e_name'] ?>" placeholder="(Please don't use spesial characters!)">
              <!-- <p id="error_name" style="color: red'"></p> -->
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
                <option value="Y" <?php if($category_info[0]['is_package'] =='Y'){echo 'selected';}?>>YES</option>
                <option value="N" <?php if($category_info[0]['is_package'] =='N'){echo 'selected';}?>>NO</option>
              </select>
            </div>
          </div>
                <div class="form-group">
                  <button class="btn btn-info" type="submit" id="submit_button">Update</button>
                </div>
          </div>
          </form>
        </div>
         
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
</script> -->

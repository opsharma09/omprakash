 <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <form action="<?php echo base_url().'home/edit_product_equipment/'.$category_info[0]['id'] ?>" class="database_operations">
          <div class="row">
            <div class="col-sm-8"><br>
                <div class="form-group">
                  <label>Product Equipment Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="<?= $category_info[0]['name'] ?>">
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" name="image" class="form-control" onchange="readURL(this);">
                  <img id="image" height="100px" style="padding-left:10px" src="<?= base_url()?><?=$category_info[0]['image']?>"/><br>
                </div>
                <div class="form-group">
                  <label>Type</label>
                  <select class="form-control" name="type">
                    <option value="suitable" <?php if($category_info[0]['type']=='suitable'){echo 'selected';}?>>Suitable</option>
                    <option value="country"<?php if($category_info[0]['type']=='country'){echo 'selected';}?>>Country</option>
                    <option value="taste"<?php if($category_info[0]['type']=='taste'){echo 'selected';}?>>Taste</option>
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
  <script type="text/javascript">
    function readURL(input) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();
   
           reader.onload = function(f) {
               $('#image')
                   .attr('src', f.target.result)
           };
   
           reader.readAsDataURL(input.files[0]);
       }
   }
  </script>
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
                  <img id="image1" height="100px" style="padding-left:10px" src="<?= base_url()?><?=$category_info[0]['image']?>"/><br>
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
<?php
   $country_e = explode(',',$category_info[0]['country']);
  $suitable_for = explode(',',$category_info[0]['suitable']);
  $taste = explode(',',$category_info[0]['taste']);
  $body = explode(',',$category_info[0]['body']);
  $acid = explode(',',$category_info[0]['acid']);
  $aftertaste = explode(',',$category_info[0]['aftertaste']);
  $cat_idd = $category_info[0]['category'] ;
  $all_sub_category = $this->Common->select_data('product_sub_category','*',array('category'=>$cat_idd))
  ?>
  <!-- Main content -->

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
          <div class="card p-3">
              <h3 class="product_title mt-3 mb-3">Product Name</h3>
              <div class="border rounded p-3 pt-5">
                  <form action="<?php echo base_url().'products/edit_product/'.$category_info[0]['id'] ?>"
                      class="database_operations" enctype="multipart/form-data">
                      <div class="row">
                          <div class="col-sm-8 m-auto">
                              <div class="form-group row">
                                  <div class="col-sm-3 verticle-middle text-right">
                                      <label>Enter Product Name </label>
                                  </div>
                                  <div class="col-sm-9">
                                      <input type="text" name="name" required="required" class="form-control"
                                          placeholder="Enter Product Name" value="<?= $category_info[0]['name'] ?>">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-3 verticle-middle text-right">
                                      <label>Enter Slug Name</label>
                                  </div>
                                  <div class="col-sm-9">
                                      <input type="text" name="e_name" required="required" class="form-control"
                                          placeholder="Enter Slug Name (Please don't use spesial characters!)"
                                          value="<?= $category_info[0]['e_name'] ?>">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-3 verticle-middle text-right">
                                      <label>Select Category</label>
                                  </div>
                                  <div class="col-sm-9">
                                      <select class="form-control" name="category" id="hide_select">
                                          <option value="">Select</option>
                                          <?php 
                    foreach($all_category as $cat)
                    {
                      if($category_info[0]['category']== $cat['id'])
                        {
                          ?><option selected="selected" value="<?= $cat['id']; ?>" data-id="<?= $cat['category']; ?>">
                                              <?= $cat['name']; ?></option><?php 
                        }else{
                          ?><option value="<?= $cat['id']; ?>" data-id="<?= $cat['category']; ?>"><?= $cat['name']; ?>
                                          </option><?php 
                        }
                    }
                    ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-3 verticle-middle text-right">
                                      <label>Select Sub Category</label>
                                  </div>
                                  <div class="col-sm-9">
                                      <select class="form-control subcategory_select" name="subcategory">
                                          <option value="">Select</option>
                                          <?php 
                    foreach($all_sub_category as $cat)
                    {
                      if($category_info[0]['subcategory']== $cat['id'])
                      {
                        ?><option selected="selected" value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option><?php 
                      }
                      else
                      {
                        ?><option value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option><?php 
                      }
                      
                    }
                    ?>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-3 verticle-middle text-right">
                                      <label>Enter Product Description</label>
                                  </div>
                                  <div class="col-sm-9">
                                      <textarea name="description" required="required" class="form-control" rows='3'
                                          placeholder="Enter Product Description"><?= $category_info[0]['description'] ?></textarea>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-3 verticle-middle text-right">
                                      <label>Enter Product Image</label>
                                  </div>
                                  <div class="col-sm-9">
                                      <input type="file" name="image" class="form-control"
                                          placeholder="Enter Product Image" onchange="readURL1(this);" value="<?=$category_info[0]['image1']?>">
                                      <img id="image" height="100px"
                                          src="<?= base_url()?><?=$category_info[0]['image1']?>" />
                                  </div>
                              </div>
                              <!-- <div class="form-group row">
                                  <div class="col-sm-3 verticle-middle text-right">
                                      <label>Product Variation</label>
                                  </div>
                                  <div class="col-sm-9">
                                      <div class="row">
                                          <?php foreach($product_details as $cat){
                  ?>
                                          <div class="col-sm-6">
                                              <label class="font-normal" for="<?= $cat['id']; ?>"><input type="checkbox"
                                                      value="<?= $cat['id']; ?>" id="<?= $cat['id']; ?>"
                                                      name="<?= $cat['id']; ?>"
                                                      <?php if (in_array($cat['id'], $product_variation)){ echo 'checked';}?>>
                                                  <?php echo $cat['product_variation_name'].' ( '.$cat['size'].' )'; ?></label>
                                          </div>
                                          <?php } ?>
                                      </div>
                                  </div>
                              </div> -->
                              <div class="form-group row div_hide">
                                  <div class="col-sm-3 verticle-middle text-right">
                                      <label>Suitable For</label>
                                  </div>
                                  <div class="col-sm-9">
                                      <div class="row">
                                          <?php foreach($product_equipment as $cat){ 
                  if($cat['type']=='suitable'){
                  ?>
                                          <div class="col-sm-4">
                                              <input type="checkbox" value="<?=$cat['id']; ?>"
                                                  id="suitable<?= $cat['id']; ?>" name="suitable<?= $cat['id']; ?>"
                                                  <?php if (in_array($cat['id'], $suitable_for)){ echo 'checked';}?>>
                                              <label class="font-normal" for="suitable<?= $cat['id']; ?>"><img
                                                      style="width: 30px;height: 30px" title="<?=$cat['name']?>" 
                                                      src="<?= base_url()?><?=$cat['image']?>" /></label>
                                          </div>
                                          <?php } } ?>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group row div_hide">
                                  <div class="col-sm-3 verticle-middle text-right">
                                      <label>Country </label>
                                  </div>
                                  <div class="col-sm-9">
                                      <div class="row">
                                          <?php foreach($product_equipment as $cat){
                  if($cat['type']=='country'){
                  ?>
                                          <div class="col-sm-4">
                                              <input type="checkbox" value="<?=$cat['id']; ?>"
                                                  id="country<?=$cat['id']; ?>" name="country<?= $cat['id']; ?>"
                                                  <?php if (in_array($cat['id'], $country_e)){ echo 'checked';}?>>
                                              <label for="country<?= $cat['id']; ?>"><img
                                                      style="width: 30px;height: 30px" title="<?=$cat['name']?>" 
                                                      src="<?= base_url()?><?=$cat['image']?>" /></label>
                                          </div>
                                          <?php } } ?>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group row div_hide">
                                  <div class="col-sm-3 verticle-middle text-right">
                                      <label>Product Body</label>
                                  </div>
                                  <div class="col-sm-9">
                                      <div class="row">
                                          <div class="col-sm-3">
                                              <input type="checkbox"
                                                  <?php if (in_array("glatt", $body)){ echo 'checked';}?> value="glatt"
                                                  id="glatt" name="body[]>">
                                              <label class="font-normal" for="glatt">glatt</label>
                                          </div>
                                          <div class="col-sm-3">
                                              <input type="checkbox"
                                                  <?php if (in_array("rund", $body)){ echo 'checked';}?> value="rund"
                                                  id="rund" name="body[]>">
                                              <label class="font-normal" for="rund">rund</label>
                                          </div>
                                          <div class="col-sm-6">
                                              <select class="form-control" name="body_rating">
                                                  <option value="" disabled="" hidden="" selected="">Value</option>
                                                  <option
                                                      <?php if($category_info[0]['body_rating']==0){echo 'selected';}?>
                                                      value="0">0</option>
                                                  <option
                                                      <?php if($category_info[0]['body_rating']==1){echo 'selected';}?>
                                                      value="1">1</option>
                                                  <option
                                                      <?php if($category_info[0]['body_rating']==1.5){echo 'selected';}?>
                                                      value="1.5">1.5</option>
                                                  <option
                                                      <?php if($category_info[0]['body_rating']==2){echo 'selected';}?>
                                                      value="2">2</option>
                                                  <option
                                                      <?php if($category_info[0]['body_rating']==2.5){echo 'selected';}?>
                                                      value="2.5">2.5</option>
                                                  <option
                                                      <?php if($category_info[0]['body_rating']==3){echo 'selected';}?>
                                                      value="3">3</option>
                                                  <option
                                                      <?php if($category_info[0]['body_rating']==3.5){echo 'selected';}?>
                                                      value="3.5">3.5</option>
                                                  <option
                                                      <?php if($category_info[0]['body_rating']==4){echo 'selected';}?>
                                                      value="4">4</option>
                                                  <option
                                                      <?php if($category_info[0]['body_rating']==4.5){echo 'selected';}?>
                                                      value="4.5">4.5</option>
                                                  <option
                                                      <?php if($category_info[0]['body_rating']==5){echo 'selected';}?>
                                                      value="5">5</option>
                                              </select>
                                          </div>
                                          <div class="col-sm-3">
                                              <input type="checkbox"
                                                  <?php if (in_array("voll", $body)){ echo 'checked';}?> value="voll"
                                                  id="voll" name="body[]>">
                                              <label class="font-normal" for="voll">voll</label>
                                          </div>
                                          <div class="col-sm-3">
                                              <input type="checkbox"
                                                  <?php if (in_array("geschmeidig", $body)){ echo 'checked';}?>
                                                  value="geschmeidig" id="geschmeidig" name="body[]>">
                                              <label class="font-normal" for="geschmeidig">geschmeidig</label>
                                          </div>
                                          <div class="col-sm-3">
					      <input type="checkbox" <?php if (in_array("teeartig", $body)){ echo 'checked';}?> value="teeartig" id="teeartig" name="body[]>">
					      <label for="teeartig">teeartig</label>
					    </div>
					    <div class="col-sm-3">
					      <input type="checkbox" <?php if (in_array("intensiv", $body)){ echo 'checked';}?>  value="intensiv" id="intensiv" name="body[]>">
					      <label for="intensiv">intensiv</label>
					    </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group row div_hide">
                                  <div class="col-sm-3 verticle-middle text-right">
                                      <label>Product Acid</label>
                                  </div>
                                  <div class="col-sm-9">
                                      <div class="row">
                                          <div class="col-sm-3">
                                              <input type="checkbox"
                                                  <?php if (in_array("ausgewogen", $acid)){ echo 'checked';}?>
                                                  value="ausgewogen" id="ausgewogen" name="acid[]">
                                              <label class="font-normal" for="ausgewogen">ausgewogen</label>
                                          </div>
                                          <div class="col-sm-3">
                                              <input type="checkbox"
                                                  <?php if (in_array("frisch", $acid)){ echo 'checked';}?>
                                                  value="frisch" id="frisch" name="acid[]">
                                              <label class="font-normal" for="frisch">frisch</label>
                                          </div>
                                          <div class="col-sm-6">
                                              <select class="form-control" name="acid_rating">
                                                  <option value="" disabled="" hidden="" selected="">Value</option>
                                                  <option
                                                      <?php if($category_info[0]['acid_rating']==0){echo 'selected';}?>
                                                      value="0">0</option>
                                                  <option
                                                      <?php if($category_info[0]['acid_rating']==1){echo 'selected';}?>
                                                      value="1">1</option>
                                                  <option
                                                      <?php if($category_info[0]['acid_rating']==1.5){echo 'selected';}?>
                                                      value="1.5">1.5</option>
                                                  <option
                                                      <?php if($category_info[0]['acid_rating']==2){echo 'selected';}?>
                                                      value="2">2</option>
                                                  <option
                                                      <?php if($category_info[0]['acid_rating']==2.5){echo 'selected';}?>
                                                      value="2.5">2.5</option>
                                                  <option
                                                      <?php if($category_info[0]['acid_rating']==3){echo 'selected';}?>
                                                      value="3">3</option>
                                                  <option
                                                      <?php if($category_info[0]['acid_rating']==3.5){echo 'selected';}?>
                                                      value="3.5">3.5</option>
                                                  <option
                                                      <?php if($category_info[0]['acid_rating']==4){echo 'selected';}?>
                                                      value="4">4</option>
                                                  <option
                                                      <?php if($category_info[0]['acid_rating']==4.5){echo 'selected';}?>
                                                      value="4.5">4.5</option>
                                                  <option
                                                      <?php if($category_info[0]['acid_rating']==5){echo 'selected';}?>
                                                      value="5">5</option>
                                              </select>
                                          </div>
                                          <div class="col-sm-3">
                                              <input type="checkbox"
                                                  <?php if (in_array("wild", $acid)){ echo 'checked';}?> value="wild"
                                                  id="wild" name="acid[]">
                                              <label class="font-normal" for="wild">wild</label>
                                          </div>
                                          <div class="col-sm-3">
                                              <input type="checkbox"
                                                  <?php if (in_array("schwach", $acid)){ echo 'checked';}?>
                                                  value="schwach" id="schwach" name="acid[]">
                                              <label class="font-normal" for="schwach">schwach</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group row div_hide">
                                  <div class="col-sm-3 verticle-middle text-right">
                                      <label>Product Aftertaste</label>
                                  </div>
                                  <div class="col-sm-9">
                                      <div class="row">
                                          <div class="col-sm-3">
                                              <input type="checkbox"
                                                  <?php if (in_array("soft", $aftertaste)){ echo 'checked';}?>
                                                  value="soft" id="soft" name="aftertaste[]">
                                              <label class="font-normal" for="soft">Soft</label>
                                          </div>
                                          <div class="col-sm-3">
                                              <input type="checkbox"
                                                  <?php if (in_array("Komplex", $aftertaste)){ echo 'checked';}?>
                                                  value="Komplex" id="Komplex" name="aftertaste[]">
                                              <label class="font-normal" for="Komplex">Komplex</label>
                                          </div>
                                          <div class="col-sm-6">
                                              <select class="form-control" name="aftertaste_rating">
                                                  <option value="" disabled="" hidden="" selected="">Value</option>
                                                  <option
                                                      <?php if($category_info[0]['aftertaste_rating']==0){echo 'selected';}?>
                                                      value="0">0</option>
                                                  <option
                                                      <?php if($category_info[0]['aftertaste_rating']==1){echo 'selected';}?>
                                                      value="1">1</option>
                                                  <option
                                                      <?php if($category_info[0]['aftertaste_rating']==1.5){echo 'selected';}?>
                                                      value="1.5">1.5</option>
                                                  <option
                                                      <?php if($category_info[0]['aftertaste_rating']==2){echo 'selected';}?>
                                                      value="2">2</option>
                                                  <option
                                                      <?php if($category_info[0]['aftertaste_rating']==2.5){echo 'selected';}?>
                                                      value="2.5">2.5</option>
                                                  <option
                                                      <?php if($category_info[0]['aftertaste_rating']==3){echo 'selected';}?>
                                                      value="3">3</option>
                                                  <option
                                                      <?php if($category_info[0]['aftertaste_rating']==3.5){echo 'selected';}?>
                                                      value="3.5">3.5</option>
                                                  <option
                                                      <?php if($category_info[0]['aftertaste_rating']==4){echo 'selected';}?>
                                                      value="4">4</option>
                                                  <option
                                                      <?php if($category_info[0]['aftertaste_rating']==4.5){echo 'selected';}?>
                                                      value="4.5">4.5</option>
                                                  <option
                                                      <?php if($category_info[0]['aftertaste_rating']==5){echo 'selected';}?>
                                                      value="5">5</option>
                                              </select>
                                          </div>
                                          <div class="col-sm-3">
                                              <input type="checkbox"
                                                  <?php if (in_array("weich", $aftertaste)){ echo 'checked';}?>
                                                  value="weich" id="weich" name="aftertaste[]">
                                              <label class="font-normal" for="weich">weich</label>
                                          </div>
                                          <div class="col-sm-3">
                                              <input type="checkbox"
                                                  <?php if (in_array("leicht", $aftertaste)){ echo 'checked';}?>
                                                  value="leicht" id="leicht" name="aftertaste[]">
                                              <label class="font-normal" for="leicht">leicht</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group row div_hide">
                                  <div class="col-sm-3" style="text-align: right;">
                                      <label>Taste</label>
                                  </div>
                                  <div class="col-sm-9">
                                      <div class="row">
                                          <?php foreach($product_equipment as $cat){
                      if($cat['type']=='taste'){
                    ?>
                                          <div class="col-sm-3">
                                              <input type="checkbox" value="<?= $cat['id']; ?>"
                                                  id="taste<?= $cat['id']; ?>" name="taste<?= $cat['id']; ?>"
                                                  <?php if (in_array($cat['id'], $taste)){ echo 'checked';}?>>
                                              <label class="font-normal" for="taste<?= $cat['id']; ?>"><img style="width: 30px;height: 30px" title="<?=$cat['name']?>" src="<?= base_url()?><?=$cat['image']?>" /></label>
                                          </div>
                                          <?php } } ?>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group row">
                                  <div class="col-sm-3 verticle-middle text-right">
                                      <label>Product Detail</label>
                                  </div>
                                  <div class="col-sm-9">
                                      <textarea
                                          name="product_details"><?=$category_info[0]['product_detail']?></textarea>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group row">
                                  <div class="col-sm-3 verticle-middle text-right">
                                  </div>
                                  <div class="col-sm-9">
                                      <button type="submit" class="btn btn-primary">Update</button>
                                  </div>
                              </div>
                          </div>
                      </div>
              </div>
              </form>
          </div>
      </div>
      </div>

      </div>
      <!--/. container-fluid -->
  </section>
  <!-- /.content -->
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
  <script>
CKEDITOR.replace('product_details');
  </script>
  <script>
$(document).ready(function() {
var  cat = <?php echo $cat_idd;?>;
	if (cat ==19) {
            $('.div_hide').hide();

        } else {
            $('.div_hide').show();
        }
    $('#hide_select').change(function() {
        var categoryId = $(this).find('option:selected').val();
        $.ajax({
            url: "<?=base_url('products/subcategory_option')?>",
            type: "POST",
            data: "categoryId=" + categoryId,
            success: function(response) {
                $(".subcategory_select").html(response);
            },
        });
        if ($(this).find(':selected').data('id') == 19) {
            $('.div_hide').hide();

        } else {
            $('.div_hide').show();
        }
    });
    // $('.category_select').change(function() {
    //   var categoryId = $(this).find('option:selected').val();
    //   alert(categoryId);
    //     $.ajax({
    //         url: "<?=base_url('products/subcategory_option')?>",
    //         type: "POST",
    //         data: "categoryId="+categoryId,
    //         success: function (response) {
    //             $(".subcategory_select").html(response);
    //         },
    //     });

    // });
});

function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(f) {
            $('#image')
                .attr('src', f.target.result)
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function check_price1() {

    if ($("#250gm").is(":checked")) {
        document.getElementById('price1').style.visibility = 'visible';
    } else {
        document.getElementById('price1').style.visibility = 'hidden';
        document.getElementById('price1').value = "";
    }
}

function check_price2() {
    if ($("#500gm").is(":checked")) {
        document.getElementById('price2').style.visibility = 'visible';
    } else {
        document.getElementById('price2').style.visibility = 'hidden';
        document.getElementById('price2').value = "";
    }
}

function check_price3() {

    if ($("#1kg").is(":checked")) {
        document.getElementById('price3').style.visibility = 'visible';
    } else {
        document.getElementById('price3').style.visibility = 'hidden';
        document.getElementById('price3').value = "";
    }
}
  </script>

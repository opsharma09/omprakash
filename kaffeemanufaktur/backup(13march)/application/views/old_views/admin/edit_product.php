  <?php
   $country_e = explode(',',$category_info[0]['country']);
  $suitable_for = explode(',',$category_info[0]['product_equipment']);
$body = explode(',',$category_info[0]['body']);?>
          <?php $acid = explode(',',$category_info[0]['acid']);?>
          <?php $aftertaste = explode(',',$category_info[0]['aftertaste']);
  ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <form action="<?php echo base_url().'products/edit_product/'.$category_info[0]['id'] ?>" class="database_operations" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-8"><br>
                <div class="form-group">
                  <label>Product Name</label>
                  <input type="text" name="name" required="required" class="form-control" value="<?= $category_info[0]['name'] ?>">
                  <label>Slug Name</label>
                  <input type="text" name="e_name" required="required" placeholder=" (Please don't use spesial characters!)" class="form-control" value="<?= $category_info[0]['e_name'] ?>">
                  <label>Product Description</label>
                  <textarea name="description" required="required" class="form-control"><?= $category_info[0]['description'] ?></textarea>
                  <label>Product Quantity</label>
                  <input type="number" name="qty" class="form-control" value="<?= $category_info[0]['qty'] ?>">
                  <!-- <label>Product Price</label>
                  <input type="text" name="price" required="required" class="form-control" value="<?= $category_info[0]['Price'] ?>"> -->
                  <label>Product Image</label>
                  <input type="file" name="image" class="form-control" onchange="readURL(this);"> 
                  <img id="image" height="100px" style="padding-left:10px" src="<?= base_url()?><?=$category_info[0]['image']?>"/><br>
                  <label>Product Image 1</label>
                  <input type="file" name="image1" class="form-control" onchange="readURL1(this);">
                  <img id="image1" height="100px" style="padding-left:10px" src="<?= base_url()?><?=$category_info[0]['image1']?>"/><br>
                
                <div class="col-sm-12">
                <div class="form-group">
                  <label>Select Product Equipment</label>
                  <select class="form-control" name="product_equipment[]" multiple="multiple">
                    <?php 
                    foreach($product_equipment as $cat)
                    {
                      ?><option value="<?= $cat['id']; ?>"<?php if (in_array($cat['id'], $suitable_for)){ echo 'selected';}?>><?= $cat['name']; ?></option><?php 
                    }
                    ?>  
                  </select>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Select Country</label>
                    <select class="form-control" name="country[]" multiple="multiple">
                      <!-- <option value="">Select</option> -->
                      <?php 
                      foreach($country as $cat)
                      {?><option value="<?= $cat['id']; ?>"<?php if (in_array($cat['id'], $country_e)){ echo 'selected';}?>><?= $cat['name']; ?></option>
                    <?php 
                      }
                      ?>  
                    </select>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group">
                  <label>Select Category</label>
                  <select class="form-control" name="category" id="hide_select">
                    <option value="">Select</option>
                    <?php 
                    foreach($all_category as $cat)
                    {
                      if($category_info[0]['category']== $cat['id'])
                        {
                          ?><option selected="selected" value="<?= $cat['id']; ?>" data-id="<?= $cat['category']; ?>"><?= $cat['name']; ?></option><?php 
                        }
                        else
                        {
                          ?><option value="<?= $cat['id']; ?>" data-id="<?= $cat['category']; ?>"><?= $cat['name']; ?></option><?php 
                        }
                    }
                    ?>  
                  </select>
                </div>
              </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Sub Category</label>
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
              <!-- <?php var_dump($product_variation);?> -->
              <div class="col-sm-12">
                <div class="dropdown">
                    <button class="form-group dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product Variation
                    </button>               
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">  </a>
                        <div class="dropdown-item">
                          <?php 
                          foreach($product_variation as $cat)
                          {
                          ?>
                          <input type="checkbox" id="select" value="<?=$cat['id']?>" name="<?=$cat['id']?>"<?php if (in_array($cat['id'], $product_details)){ echo 'checked';}?>>
                          <label for="select"> <?php echo $cat['name']; ?> </n> </label> <?php
                          }
                          ?>  
                        </div>          
                      </div>
                  </div>
              </div>
              <!-- <div class="col-sm-12">
                <div class="dropdown">
                    <button class="form-group dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product Variation
                    </button>               
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">  </a>
                        <div class="dropdown-item">
                          <?php
                          foreach($product_variation as $cat)
                          {
                          ?>
                          <input type="checkbox" id="select" value="<?=$cat['id']?>" name="<?=$cat['id']?>">
                          <label for="select"> <?php echo $cat['name']; ?> <n> </label> <?php
                          }
                          ?>  
                        </div>          
                      </div>
                  </div>
              </div>


              <div class="col-sm-12">
              <div class="form-group">
                <label>Price Variations</label>
                
                <div class="form-group row">
                  <div class="col-sm-2">
                    <input type="checkbox" id="250gm" name="250gm" onclick="check_price1()">
                    <label for="250gm">250 gm</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" id="price1" name="price1" style="visibility:visible;">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">
                    <input type="checkbox" id="500gm" name="500gm" onclick="check_price2()">
                    <label for="500gm">500 gm</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" id="price2" name="price2" style="visibility:visible;">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-2">
                    <input type="checkbox" id="1kg" name="1kg" onclick="check_price3()">
                    <label for="1kg">1 kg</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" id="price3" name="price3" style="visibility:visible;">
                  </div>
                </div>

              </div>
             
          </div> -->
          
          <h3 class="div_hide">Additional Information</h3>
          <div class="col-sm-12 div_hide" >
              <div class="form-group">
                <label>Product Body</label>
                <select class="form-control" name="body[]" multiple="multiple">
                  <!-- <option value="">Select</option> -->
                  <option value="smooth" <?php if (in_array("smooth", $body)){ echo 'selected';}?>>Smooth</option>
                  <option value="round"<?php if (in_array("round", $body)){ echo 'selected';}?>>Round</option>
                  <option value="full"<?php if (in_array("full", $body)){ echo 'selected';}?>>Full</option>
                  <option value="supple"<?php if (in_array("supple", $body)){ echo 'selected';}?>>Supple</option>                    
                </select>
              </div>
            </div>

            <div class="col-sm-12 div_hide">
              <div class="form-group">
                <label>Product Acid</label>
                <select class="form-control" name="acid[]" multiple="multiple">
                  <!-- <option value="">Select</option> -->
                  <option value="balanced"<?php if (in_array("balanced", $acid)){ echo 'selected';}?>>Balanced</option>
                  <option value="fresh"<?php if (in_array("fresh", $acid)){ echo 'selected';}?>>Fresh</option>
                  <option value="wild"<?php if (in_array("wild", $acid)){ echo 'selected';}?>>Wild</option>
                  <option value="weak"<?php if (in_array("weak", $acid)){ echo 'selected';}?>>weak</option>
                </select>
              </div>
            </div>

            <div class="col-sm-12 div_hide">
              <div class="form-group">
                <label>Product Aftertaste</label>
                <select class="form-control" name="aftertaste[]" multiple="multiple">
                  <!-- <option value="">Select</option> -->
                  <option value="soft"<?php if (in_array("soft", $aftertaste)){ echo 'selected';}?>>Soft</option>
                  <option value="complex"<?php if (in_array("complex", $aftertaste)){ echo 'selected';}?>>Complex</option>
                  <option value="light"<?php if (in_array("light", $aftertaste)){ echo 'selected';}?>>light</option>
                </select>
              </div>
            </div>
            <div class="div_hide">
              
          <label>Product Image2</label>
          <input type="file" name="image2" class="form-control" onchange="readURL2(this);"> 
          <img id="image" height="100px" style="padding-left:10px" src="<?= base_url()?><?=$category_info[0]['image2']?>"/><br>
          <label>Product Image 3</label>
          <input type="file" name="image3" class="form-control" onchange="readURL3(this);">
          <img id="image1" height="100px" style="padding-left:10px" src="<?= base_url()?><?=$category_info[0]['image3']?>"/><br>
          <label>Product Image 4</label>
          <input type="file" name="image4" class="form-control" onchange="readURL4(this);">
          <img id="image1" height="100px" style="padding-left:10px" src="<?= base_url()?><?=$category_info[0]['image4']?>"/><br>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label>Product Detail</label>
                <textarea name="product_details"><?= $category_info[0]['product_detail'] ?></textarea>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'product_details' );
  </script>
 
<script>

$(document).ready(function() {
  $('#hide_select').change(function() {
    var categoryId = $(this).find('option:selected').val();
    alert(categoryId);
      $.ajax({
          url: "<?=base_url('products/subcategory_option')?>",
          type: "POST",
          data: "categoryId="+categoryId,
          success: function (response) {
            console.log(response);
              $(".subcategory_select").html(response);
          },
      });
    if($(this).find(':selected').data('id')==3){
      $('.div_hide').hide();

    }else{
      $('.div_hide').show();
    }
  });
});
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
    }function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (f) {
                $('#image2')
                    .attr('src', f.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (f) {
                $('#image3')
                    .attr('src', f.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }function readURL4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (f) {
                $('#image4')
                    .attr('src', f.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }


function check_price1() 
{
  if ($("#250gm").is(":checked"))
  {
    document.getElementById('price1').style.visibility='visible';     
  }

  else
  {
    document.getElementById('price1').style.visibility='hidden';
    document.getElementById('price1').value = "";   
  }
}

function check_price2()
{
  if ($("#500gm").is(":checked"))
  {
    document.getElementById('price2').style.visibility='visible';
  }

  else
  {
    document.getElementById('price2').style.visibility='hidden';
    document.getElementById('price2').value = "";   
  }
}

function check_price3()
{

  if ($("#1kg").is(":checked"))
  {
    document.getElementById('price3').style.visibility='visible';     
  }

  else
  {
    document.getElementById('price3').style.visibility='hidden';
    document.getElementById('price3').value = "";   
  }
}

</script>
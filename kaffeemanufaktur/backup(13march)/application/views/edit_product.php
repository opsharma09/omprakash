  <?php
   $country_e = explode(',',$category_info[0]['country']);
  $suitable_for = explode(',',$category_info[0]['suitable']);
  $taste = explode(',',$category_info[0]['taste']);
  $body = explode(',',$category_info[0]['body']);
  $acid = explode(',',$category_info[0]['acid']);
  $aftertaste = explode(',',$category_info[0]['aftertaste']);

  ?>
    <!-- Main content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="modal-body">
        <form action="<?php echo base_url().'products/edit_product/'.$category_info[0]['id'] ?>" class="database_operations" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-8">
            <div class="form-group row">
              <div class="col-sm-4" style="text-align:right">
                  <label>Enter Product Name </label>
              </div>
              <div class="col-sm-8">
                <input type="text" name="name" required="required" class="form-control" placeholder="Enter Product Name" value="<?= $category_info[0]['name'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-4" style="text-align:right">
                  <label>Enter Slug Name</label>
              </div>
              <div class="col-sm-8">
               <input type="text" name="e_name" required="required" class="form-control" placeholder="Enter Slug Name (Please don't use spesial characters!)" value="<?= $category_info[0]['e_name'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-4" style="text-align:right">
                <label>Select Category</label>
              </div>
              <div class="col-sm-8">
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
            <div class="form-group row">
              <div class="col-sm-4" style="text-align:right">
                <label>Select Sub Category</label>
              </div>
              <div class="col-sm-8">
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
              <div class="col-sm-4" style="text-align:right">
                <label>Enter Product Description</label>
              </div>
              <div class="col-sm-8">
                <textarea name="description" required="required" class="form-control" placeholder="Enter Product Description"><?= $category_info[0]['description'] ?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-4">
                <label>Enter Product Image</label>
              </div>
              <div class="col-sm-8">
                <input type="file" name="image" class="form-control" placeholder="Enter Product Image 1" onchange="readURL1(this);">
                <img id="image" height="100px" style="padding-left:10px" src="<?= base_url()?><?=$category_info[0]['image']?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-4" style="text-align: right">
                <label>Product Variation</label>
              </div>
              <div class="col-sm-8">
                  <div class="row">
                <?php foreach($product_details as $cat){?>
                  <div class="col-sm-6">
                    <input type="checkbox" value="<?= $cat['id']; ?>" id="<?= $cat['id']; ?>" name="<?= $cat['id']; ?>"<?php if (in_array($cat['id'], $availability)){ echo 'checked';}?>>
                    <label for="<?= $cat['id']; ?>"><?php echo $cat['product_variation_name'].' ( '.$cat['size'].' )'; ?> </label>
                  </div>
                <?php } ?>
                </div>  
              </div>
            </div>
            <div class="form-group row div_hide">
              <div class="col-sm-4" style="text-align: right;">
                <label>Suitable For</label>
              </div>
              <div class="col-sm-8">
                  <div class="row">
                <?php foreach($product_equipment as $cat){ 
                  if($cat['type']=='suitable'){
                  ?>
                  <div class="col-sm-4" >
                    <input type="checkbox" value="<?=$cat['id']; ?>" id="suitable<?= $cat['id']; ?>" name="suitable<?= $cat['id']; ?>"<?php if (in_array($cat['id'], $suitable_for)){ echo 'checked';}?>>
                    <label for="suitable<?= $cat['id']; ?>"><?= $cat['name']; ?></label>
                  </div>
                <?php } } ?>  
                </div>
              </div>
            </div>
            <div class="form-group row div_hide">
              <div class="col-sm-4" style="text-align: right;">
                <label>Country </label>
              </div>
              <div class="col-sm-8">
                  <div class="row">
                <?php foreach($product_equipment as $cat){
                  if($cat['type']=='country'){
                  ?>
                  <div class="col-sm-4" >
                    <input type="checkbox" value="<?=$cat['id']; ?>" id="country<?=$cat['id']; ?>" name="country<?= $cat['id']; ?>"<?php if (in_array($cat['id'], $country_e)){ echo 'checked';}?>>
                    <label for="country<?= $cat['id']; ?>"><?= $cat['name']; ?></label>
                  </div>
                <?php } } ?>
                </div>
              </div>  
            </div>
            <div class="form-group row div_hide">
                <div class="col-sm-4" style="text-align:right">
                  <label>Product Body</label>
                </div>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-3">
                      <input type="checkbox" <?php if (in_array("smooth", $body)){ echo 'checked';}?> value="smooth" id="smooth" name="body[]>">
                      <label for="smooth">Smooth</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="checkbox" <?php if (in_array("round", $body)){ echo 'checked';}?> value="round" id="round" name="body[]>">
                      <label for="round">Round</label>
                    </div>
                    <div class="col-sm-6">
                      <select class="form-control" name="body_rating">
                        <option value="" disabled="" hidden="" selected="">Value</option>
                        <option  <?php if($category_info[0]['body_rating']==0){echo 'selected';}?>  value="0">0</option>
                        <option  <?php if($category_info[0]['body_rating']==1){echo 'selected';}?>  value="1">1</option>
                        <option  <?php if($category_info[0]['body_rating']==1.5){echo 'selected';}?>  value="1.5">1.5</option>
                        <option  <?php if($category_info[0]['body_rating']==2){echo 'selected';}?>  value="2">2</option>
                        <option  <?php if($category_info[0]['body_rating']==2.5){echo 'selected';}?>  value="2.5">2.5</option>
                        <option  <?php if($category_info[0]['body_rating']==3){echo 'selected';}?>  value="3">3</option>
                        <option  <?php if($category_info[0]['body_rating']==3.5){echo 'selected';}?>  value="3.5">3.5</option>
                        <option  <?php if($category_info[0]['body_rating']==4){echo 'selected';}?>  value="4">4</option>
                        <option  <?php if($category_info[0]['body_rating']==4.5){echo 'selected';}?>  value="4.5">4.5</option>
                        <option  <?php if($category_info[0]['body_rating']==5){echo 'selected';}?>  value="5">5</option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <input type="checkbox" <?php if (in_array("full", $body)){ echo 'checked';}?> value="full" id="full" name="body[]>">
                      <label for="full">Full</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="checkbox" <?php if (in_array("supple", $body)){ echo 'checked';}?> value="supple" id="supple" name="body[]>">
                      <label for="supple">Supple</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row div_hide">
                <div class="col-sm-4" style="text-align:right">
                  <label>Product Acid</label>
                </div>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-3">
                      <input type="checkbox" <?php if (in_array("balanced", $acid)){ echo 'checked';}?> value="balanced" id="balanced" name="acid[]">
                      <label for="balanced">Balanced</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="checkbox" <?php if (in_array("fresh", $acid)){ echo 'checked';}?> value="fresh" id="fresh" name="acid[]">
                      <label for="fresh">Fresh</label>
                    </div>
                    <div class="col-sm-6">
                      <select class="form-control" name="acid_rating">
                        <option value="" disabled="" hidden="" selected="">Value</option>
                         <option  <?php if($category_info[0]['acid_rating']==0){echo 'selected';}?>  value="0">0</option>
                        <option  <?php if($category_info[0]['acid_rating']==1){echo 'selected';}?>  value="1">1</option>
                        <option  <?php if($category_info[0]['acid_rating']==1.5){echo 'selected';}?>  value="1.5">1.5</option>
                        <option  <?php if($category_info[0]['acid_rating']==2){echo 'selected';}?>  value="2">2</option>
                        <option  <?php if($category_info[0]['acid_rating']==2.5){echo 'selected';}?>  value="2.5">2.5</option>
                        <option  <?php if($category_info[0]['acid_rating']==3){echo 'selected';}?>  value="3">3</option>
                        <option  <?php if($category_info[0]['acid_rating']==3.5){echo 'selected';}?>  value="3.5">3.5</option>
                        <option  <?php if($category_info[0]['acid_rating']==4){echo 'selected';}?>  value="4">4</option>
                        <option  <?php if($category_info[0]['acid_rating']==4.5){echo 'selected';}?>  value="4.5">4.5</option>
                        <option  <?php if($category_info[0]['acid_rating']==5){echo 'selected';}?>  value="5">5</option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <input type="checkbox" <?php if (in_array("wild", $acid)){ echo 'checked';}?> value="wild" id="wild" name="acid[]">
                      <label for="wild">Wild</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="checkbox" <?php if (in_array("weak", $acid)){ echo 'checked';}?> value="weak" id="weak" name="acid[]">
                      <label for="weak">Weak</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row div_hide">
                <div class="col-sm-4" style="text-align:right">
                  <label>Product Aftertaste</label>
                </div>
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-3">
                      <input type="checkbox" <?php if (in_array("soft", $aftertaste)){ echo 'checked';}?> value="soft" id="soft" name="aftertaste[]">
                      <label for="soft">Soft</label>
                    </div>
                    <div class="col-sm-3">
                      <input type="checkbox" <?php if (in_array("complex", $aftertaste)){ echo 'checked';}?> value="complex" id="complex" name="aftertaste[]">
                      <label for="complex">Complex</label>
                    </div>
                    <div class="col-sm-6">
                      <select class="form-control" name="aftertaste_rating">
                        <option value="" disabled="" hidden="" selected="">Value</option>
                        <option  <?php if($category_info[0]['aftertaste_rating']==0){echo 'selected';}?>  value="0">0</option>
                        <option  <?php if($category_info[0]['aftertaste_rating']==1){echo 'selected';}?>  value="1">1</option>
                        <option  <?php if($category_info[0]['aftertaste_rating']==1.5){echo 'selected';}?>  value="1.5">1.5</option>
                        <option  <?php if($category_info[0]['aftertaste_rating']==2){echo 'selected';}?>  value="2">2</option>
                        <option  <?php if($category_info[0]['aftertaste_rating']==2.5){echo 'selected';}?>  value="2.5">2.5</option>
                        <option  <?php if($category_info[0]['aftertaste_rating']==3){echo 'selected';}?>  value="3">3</option>
                        <option  <?php if($category_info[0]['aftertaste_rating']==3.5){echo 'selected';}?>  value="3.5">3.5</option>
                        <option  <?php if($category_info[0]['aftertaste_rating']==4){echo 'selected';}?>  value="4">4</option>
                        <option  <?php if($category_info[0]['aftertaste_rating']==4.5){echo 'selected';}?>  value="4.5">4.5</option>
                        <option  <?php if($category_info[0]['aftertaste_rating']==5){echo 'selected';}?>  value="5">5</option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <input type="checkbox" <?php if (in_array("light", $aftertaste)){ echo 'checked';}?> value="light" id="light" name="aftertaste[]">
                      <label for="light">Light</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row div_hide">
                <div class="col-sm-4" style="text-align: right;">
                  <label>Taste</label>
                </div>
                <div class="col-sm-8">
                  <div class="row">
                  <?php foreach($product_equipment as $cat){
                      if($cat['type']=='taste'){
                    ?>
                    <div class="col-sm-3">
                      <input type="checkbox" value="<?= $cat['id']; ?>" id="taste<?= $cat['id']; ?>" name="taste<?= $cat['id']; ?>"<?php if (in_array($cat['id'], $taste)){ echo 'checked';}?>>
                      <label for="taste<?= $cat['id']; ?>"><?= $cat['name']; ?></label>
                    </div>
                  <?php } } ?>  
                  </div>
                </div>
              </div>
            </div>  
              <div class="col-sm-12">
                  <div class="form-group row">
                    <div class="col-sm-2" style="text-align:right">
                      <label>Product Detail</label>
                    </div>
                    <div class="col-sm-10">
                      <textarea name="product_details"><?=$category_info[0]['product_detail']?></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="form-group row">
                    <div class="col-sm-4" style="text-align:right">
                    </div>
                    <div class="col-sm-8">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        </form>
        </div>
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
      $.ajax({
          url: "<?=base_url('products/subcategory_option')?>",
          type: "POST",
          data: "categoryId="+categoryId,
          success: function (response) {
              $(".subcategory_select").html(response);
          },
      });
    if($(this).find(':selected').data('id')==3){
      $('.div_hide').hide();

    }else{
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

            reader.onload = function (f) {
                $('#image')
                    .attr('src', f.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    
  function check_price1() {

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

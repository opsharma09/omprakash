
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
          <form action="<?php echo base_url().'products/edit_product/'.$category_info[0]['id'] ?>" class="database_operations">
          <div class="row">
            <div class="col-sm-8"><br>
                <div class="form-group">
                  <label>Product Name</label>
                  <input type="text" name="name" required="required" class="form-control" value="<?= $category_info[0]['name'] ?>">
                  <label>Product Description</label>
                  <textarea name="description" required="required" class="form-control"><?= $category_info[0]['description'] ?></textarea>
                  <label>Product Quantity</label>
                  <input type="number" name="qty" class="form-control" value="<?= $category_info[0]['qty'] ?>">
                  <label>Product Price</label>
                  <input type="text" name="price" required="required" class="form-control" value="<?= $category_info[0]['Price'] ?>">
                  <label>Product Image</label>
                  <input type="file" name="image" class="form-control" onchange="readURL(this);"> 
                  <img id="image" height="100px" style="padding-left:10px" src="http://localhost/dev/kaffeemanufaktur/<?= $category_info[0]['image'] ?>"/><br>
                  <label>Product Image 1</label>
                  <input type="file" name="image1" class="form-control" onchange="readURL1(this);">
                  <img id="image1" height="100px" style="padding-left:10px" src="http://localhost/dev/kaffeemanufaktur/<?= $category_info[0]['image1'] ?>"/><br>

                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Sub Category</label>
                    <select class="form-control" name="subcategory">
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

              <div class="col-sm-12">
                <div class="form-group">
                  <label>Select Category</label>
                  <select class="form-control" name="category">
                    <option value="">Select</option>
                    <?php 
                    foreach($all_category as $cat)
                    {
                      if($category_info[0]['category']== $cat['id'])
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
                          <input type="checkbox" id="select" value="<?=$cat['id']?>" name="<?=$cat['id']?>">
                          <label for="select"> <?php echo $cat['name']; ?> </n> </label> <?php
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
             
          </div>

          <h3>Additional Information</h3>
          <div class="col-sm-12">
              <div class="form-group">
                <label>Product Body</label>
                <select class="form-control" name="body[]" multiple="multiple">
                  <!-- <option value="">Select</option> -->
                  <option value="smooth">Smooth</option>
                  <option value="round">Round</option>
                  <option value="full">Full</option>
                  <option value="supple">Supple</option>                    
                </select>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label>Product Acid</label>
                <select class="form-control" name="acid[]" multiple="multiple">
                  <!-- <option value="">Select</option> -->
                  <option value="balanced">Balanced</option>
                  <option value="fresh">Fresh</option>
                  <option value="wild">Wild</option>
                  <option value="weak">weak</option>
                </select>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label>Product Aftertaste</label>
                <select class="form-control" name="aftertaste[]" multiple="multiple">
                  <!-- <option value="">Select</option> -->
                  <option value="soft">Soft</option>
                  <option value="complex">Complex</option>
                  <option value="light">light</option>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

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
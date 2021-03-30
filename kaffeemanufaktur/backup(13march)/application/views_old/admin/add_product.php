
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="modal-body">
        <form action="<?php echo base_url().'products/add_product/' ?>" class="database_operations" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Enter Product Name</label>
              <input type="text" name="name" required="required" class="form-control" placeholder="Enter Product Name">
              <label>Enter Product Description</label>
              <textarea name="description" required="required" class="form-control" placeholder="Enter Product Description"></textarea>
              <!-- <input type="text" name="description" required="required" class="form-control" placeholder="Enter Product Description"> -->
              <label>Enter Product Quantity</label>
              <input type="number" name="qty" class="form-control" placeholder="Enter Product Quantity">
              <!-- <label>Enter Product Price</label>
              <input type="text" name="price" required="required" class="form-control" placeholder="Enter Product Price"> -->
              <label>Enter Product Image</label>
              <input type="file" name="image" required="required" class="form-control" placeholder="Enter Product Image" onchange="readURL(this);">
              <img id="image" height="100px" style="padding-left:10px" src="#"/><br>
              <label>Enter Product Image 1</label>
              <input type="file" name="image1" required="required" class="form-control" placeholder="Enter Product Image 1" onchange="readURL1(this);">
              <img id="image1" height="100px" style="padding-left:10px" src="#"/><br>
              
            </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label>Select Sub Category</label>
                <select class="form-control" name="subcategory">
                  <option value="">Select</option>
                  <?php 
                  foreach($all_sub_category as $cat)
                  {
                    ?><option value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option><?php 
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
                  ?><option value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option><?php 
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
                      foreach($product_details as $cat)
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
            <div class="col-sm-12">
              <div class="form-group">
                <label>Product Detail</label>
                <textarea name="product_details"></textarea>
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

$(document).ready(
  function() {
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

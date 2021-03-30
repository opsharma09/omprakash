<?php
   $country_e = explode(',',$category_info[0]['country']);
   $suitable_for = explode(',',$category_info[0]['suitable']);
   $taste = explode(',',$category_info[0]['taste']);
   $body = explode(',',$category_info[0]['body']);
   $acid = explode(',',$category_info[0]['acid']);
   $aftertaste = explode(',',$category_info[0]['aftertaste']);
   $coffee_drink = explode(',',$category_info[0]['coffee_drink']);
   $coffee_taste = explode(',',$category_info[0]['coffee_taste']);
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
               class="database_operations" enctype="multipart/form-data" id="product_form">
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
                           <select class="form-control category_valid" name="category" id="hide_select" required>
                              <option value="" disabled hidden selected >Select</option>
                              <?php 
                                 foreach($all_category as $cat)
                                 {
                                   if($category_info[0]['category']== $cat['id'])
                                     {
                                       ?>
                              <option selected="selected" value="<?= $cat['id']; ?>" data-id="<?= $cat['category']; ?>">
                                 <?= $cat['name']; ?>
                              </option>
                              <?php 
                                 }else{
                                   ?>
                              <option value="<?= $cat['id']; ?>" data-id="<?= $cat['category']; ?>"><?= $cat['name']; ?>
                              </option>
                              <?php 
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
                           <select class="form-control subcategory_select " name="subcategory" required>
                              <option value="" selected disabled hidden>Select</option>
                              <?php 
                                 foreach($all_sub_category as $cat)
                                 {
                                   if($category_info[0]['subcategory']== $cat['id'])
                                   {
                                     ?>
                              <option selected="selected" value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option>
                              <?php 
                                 }
                                 else
                                 {
                                   ?>
                              <option value="<?= $cat['id']; ?>"><?= $cat['name']; ?></option>
                              <?php 
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
                    <div class="form-group row div_hide" >
                      <div class="col-sm-4" style="text-align:right">
                        <label>Coffee Drink Type</label>
                      </div>
                      <div class="col-sm-8">
                        <div class="row">
                          <div class="col-sm-6">
                            <input type="checkbox"<?php if (in_array("black", $coffee_drink)){ echo 'checked';}?> value="black" id="black" name="coffee_drink[]">
                            <label for="black">Black</label>
                          </div>
                          <div class="col-sm-6">
                            <input type="checkbox"<?php if (in_array("milk", $coffee_drink)){ echo 'checked';}?> value="milk" id="milk" name="coffee_drink[]">
                            <label for="milk">With milk</label>
                          </div>
                          <div class="col-sm-6">
                            <input type="checkbox"<?php if (in_array("milksugar", $coffee_drink)){ echo 'checked';}?> value="milksugar" id="milksugar" name="coffee_drink[]">
                            <label for="milksugar">With milk and sugar</label>
                          </div>
                          <div class="col-sm-6">
                            <input type="checkbox"<?php if (in_array("decaf", $coffee_drink)){ echo 'checked';}?> value="decaf" id="decaf" name="coffee_drink[]">
                            <label for="decaf">Decaf</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row div_hide" >
                      <div class="col-sm-4" style="text-align:right">
                        <label>Taste In Coffee</label>
                      </div>
                      <div class="col-sm-8">
                        <div class="row">
                          <div class="col-sm-6">
                            <input type="checkbox" <?php if (in_array("clasic", $coffee_taste)){ echo 'checked';}?> value="clasic" id="clasic" name="coffee_taste[]">
                            <label for="clasic">Clasic</label>
                          </div>
                          <div class="col-sm-6">
                            <input type="checkbox" <?php if (in_array("curious", $coffee_taste)){ echo 'checked';}?> value="curious" id="curious" name="coffee_taste[]">
                            <label for="curious">Curious</label>
                          </div>
                          <div class="col-sm-6">
                            <input type="checkbox" <?php if (in_array("adventurous", $coffee_taste)){ echo 'checked';}?> value="adventurous" id="adventurous" name="coffee_taste[]">
                            <label for="adventurous">Adventurous</label>
                          </div>
                          
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
                        <div class="col-sm-12">
                           <textarea
                              name="product_details" id="product_details"><?=$category_info[0]['product_detail']?></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="form-group row">
                        <div class="col-sm-3 verticle-middle text-right">
                        </div>
                        <div class="col-sm-9">
                           <button type="button" class="btn btn-primary" id="submit_button">Update</button>
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
<script src="https://cdn.tiny.cloud/1/wqlkvo55irsnjvdva6wjjnc1p4du5u5v480rml0njp2airsa/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
   tinymce.init({
     selector: '#product_details',
     plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
     toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
     toolbar_mode: 'floating',
     tinycomments_mode: 'embedded',
     tinycomments_author: 'Author name',
     image_advtab: true,
     link_list: [
       { title: 'My page 1', value: 'https://www.tiny.cloud' },
       { title: 'My page 2', value: 'http://www.moxiecode.com' }
     ],
     image_list: [
       { title: 'My page 1', value: 'https://www.tiny.cloud' },
       { title: 'My page 2', value: 'http://www.moxiecode.com' }
     ],
     image_class_list: [
       { title: 'None', value: '' },
       { title: 'Some class', value: 'class-name' }
     ],
     menu: {
   tc: {
     title: 'TinyComments',
     items: 'addcomment showcomments deleteallconversations'
   }
   },
   menubar: 'file edit view insert format tools table tc help',
   toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
   mobile: {
   plugins: 'print preview powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker textpattern noneditable help formatpainter pageembed charmap mentions quickbars linkchecker emoticons advtable'
   },
   menu: {
   tc: {
     title: 'TinyComments',
     items: 'addcomment showcomments deleteallconversations'
   }
   },
   importcss_append: true,
   templates: [
       { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
   { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
   { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
   ],
   template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
   template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
   height: 600,
   image_caption: true,
   quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
   noneditable_noneditable_class: 'mceNonEditable',
   toolbar_mode: 'sliding',
   spellchecker_whitelist: ['Ephox', 'Moxiecode'],
   tinycomments_mode: 'embedded',
   content_style: '.mymention{ color: gray; }',
   contextmenu: 'link image imagetools table configurepermanentpen',
   a11y_advanced_options: true,
   setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    }
  });
</script>
<script>
   $(document).ready(function() {
   $('#submit_button').click(function(e) {
        e.preventDefault();
       var e_name1 = $('input[name=e_name]').val();
       if(!$('.category_valid').val()){
        alert('Please select product category');
       } else if(!$('.subcategory_select').val()){
        alert('Please select product sub category');
       }else{
        $('#product_form').submit();
       }
       // var name = 'products';
       // $.ajax({
       //         url: "<?=base_url('products/valid_slug')?>",
       //         type: "POST",
       //         data: {e_name:e_name1,table:name},
       //         success: function (response) {
       //             if(response =='ok'){
       //              alert('Slug Name is already exist');
       //               $('input[name=e_name]').css('border','1px solid red');
       //               $('#error_name').html('<span>Slug Name is already exist. </span>');
       //             }else{
       //               $('#product_form').submit();
       //             }
       //         }
       //     });
    });
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
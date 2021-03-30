<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row" style="padding-bottom: 20px">
                        <div class="col-sm-12">
                          <button class="btn btn-info float-right"><a href="<?php  echo base_url().'coupons'?>" class="btn btn-info btn-sm">List</a></button>
                        </div>
                      </div>
                    <div class="body">
                        <?php if (isset($error)){?>
                            <h2 class="title text-danger"><?=$error?></h2>
                        <?php }?>
                        <div class="row">
                            <div class="col-sm-8 m-auto">
                                <form method="post" id="coupon_form">
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Coupon Code  :  <?=$offers->offer_code?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Category<span class="text-danger">*</span> :</label>
                                                   <select class="form-control category_valid" name="category[]" id="hide_select" required multiple>
                                                      <option value="" disabled hidden select ed >Select</option>
                                                      <option value="0" data-id="0">All Category</option> 
                                                      <?php foreach($all_category as $cat) {?>
                                                           
                                                      <option <?php if(in_array($cat['id'], $offer_category)){ ?> selected="selected" <?php }?> value="<?= $cat['id'];?>" data-id="<?= $cat['category']; ?>"><?= $cat['name']; ?></option>
                                                         <?php }?>
                                                   </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix hide_sub_cat">
                                        <div class="col-sm-12">
                                            <label>Sub Category<span class="text-danger">*</span> :</label>
                                            <div class="row  showcategory_select">
                                                  <?php 
                                                  if(sizeof($offer_category)==1){?>
                                                <div class="form-group">

                                                    <div class="col-sm-6"><input type="checkbox" class="show_sub_category" value="0" id="show_sub_category0" <?php if(in_array(0,$offer_sub_category)){ echo 'checked';}?> name="show_sub_category[]"><label for="show_sub_category0">All subcategory</label></div>
                                                        <?php $category_id = $offer_category[0];
                                                        $all_sub_category1 = $this->db->query("select * from product_sub_category WHERE category = $category_id order by id desc")->result_array(); $is_package = ''; 
                                                        foreach($all_sub_category1 as $cat){
                                                        if($cat['is_package'] == 'Y'){
                                                            $is_package = '(P)';
                                                        }if($cat['is_country'] == 'Y'){
                                                            $is_package = '(C)';
                                                        }
                                                    ?>
                                                    
                                                    <div class="col-sm-6">  
                                                         <input type="checkbox"  class="show_sub_category" value="<?=$cat['id']?>" id="show_sub_category<?= $cat['id']; ?>" name="show_sub_category[]" <?php if(in_array($cat['id'],$offer_sub_category)){ echo 'checked';}?>>
                                                        <label for="show_sub_category<?= $cat['id']; ?>"><?=$cat['name'].' '.$is_package?></label>
                                                    </div>
                                                    <?php  $is_package = ''; } ?> 
                                                </div>
                                            <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Offer Type <span class="text-danger">*</span> :</label>
                                                <select class="form-control" name="offer_type" id="offer_type" required>
                                                    <option <?php if ($offers->offer_type == 'PERCENTAGE'){echo "selected";}?>>PERCENTAGE</option>
                                                    <option <?php if ($offers->offer_type == 'FIXED'){echo "selected";}?>>FIXED</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>News Letter<span class="text-danger">*</span> :</label>
                                                <select class="form-control" name="newsletter" id="newsletter" required>
                                                    <option selected="" value="N" <?php if ($offers->newsletter == 'N'){echo "selected";}?>>No</option>
                                                    <option value="Y" <?php if ($offers->newsletter == 'Y'){echo "selected";}?>>Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Offer Value <span class="text-danger">*</span> :</label>
                                                <input class="form-control" value="<?=$offers->offer_value?>" required type="number" placeholder="Enter Offer Value" name="offer_value" id="offer_value">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Min cart Value <span class="text-danger">*</span> :</label>
                                                <input class="form-control" required type="number" placeholder="Enter Min Cart Value" value="<?=$offers->min_cart_value?>" name="min_cart_value" id="min_cart_value">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Max Discount <span class="text-danger">*</span> :</label>
                                                <input class="form-control" required type="number" placeholder="Enter Max Discount" value="<?=$offers->max_discount?>" name="max_discount" id="max_discount">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Coupon Valid For<span class="text-danger">*</span> :</label>
                                                <select class="form-control" name="coupon_valid_for" id="coupon_valid_for" required>
                                                    <option value="" selected="" disabled="" hidden="">Select option coupon valid for</option>
                                                    <option value="TOTAL" selected="">Allowed Total User</option>
                                                    <option value="PER" <?=($offers->coupon_valid_for=='PER')?'selected':''?>>Allowed Per User (Times)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input class="form-control" required type="number" placeholder="Enter Number of coupon valid for" value="<?=$offers->allowed_user_times?>" name="allowed_user_times" id="allowed_user_times">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Start Date <span class="text-danger">*</span> :</label>
                                                <input class="form-control" required type="date" placeholder="Enter Start Date" name="start_date" id="start_date" value="<?=$offers->start_date?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>End Date <span class="text-danger">*</span> :</label>
                                                <input class="form-control" required type="date" placeholder="Enter End Date" name="end_date" id="end_date" value="<?=$offers->end_date?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Status <span class="text-danger">*</span> :</label>
                                                <select class="form-control" name="is_active" id="is_active" required>
                                                    <option value="Y" <?=($offers->is_active == 'Y')?"selected":'';?>>Active</option>
                                                    <option value="N" <?=($offers->is_active == 'N')?"selected":'';?>>InActive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Offer Description :</label>
                                                <textarea class="form-control" name="description" id="description" placeholder="Enter Description about this offer"><?=$offers->description?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Offer Terms :</label>
                                                <textarea class="form-control" name="terms" id="terms" placeholder="Enter Offer Terms"><?=$offers->terms?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <button  class="btn btn-primary" type="button" onclick="submit_coupon()">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        if($('#hide_select').val().length>1){
            $(".hide_sub_cat").hide();
        }
$('#hide_select').on('change',function() {
      var categoryId = $(this).val();
      if(categoryId.length<2 && categoryId[0]!=0){
        $.ajax({
            url: "<?=base_url('products/subcategory_option1')?>",
            type: "POST",
            data: "categoryId="+categoryId,
            success: function (response) {
              var data = JSON.parse(response);
                $(".showcategory_select").html(data.html1);
              $(".hide_sub_cat").show();
            },
        });
      }else{
        $(".hide_sub_cat").hide();
      }
    });
});
    function submit_coupon(){
        var date = new Date();
        now = ((date.getMonth() > 8) ? (date.getMonth() + 1) : ('0' + (date.getMonth() + 1))) + '-' + ((date.getDate() > 9) ? date.getDate() : ('0' + date.getDate())) + '-' + date.getFullYear();
        // var offer_code = $('#offer_code').val();
        var offer_type = $('#offer_type').val();
        var category = $('#hide_select').val();
        var subcategory = $('.show_sub_category').is(":checked");
        var offer_value = $('#offer_value').val();
        var min_cart_value = $('#min_cart_value').val();
        var max_discount = $('#max_discount').val();
        var allowed_user_times = $('#allowed_user_times').val();
        var start_date = $('#start_date').val();
        var end_date = $('#end_date').val();
        var is_active = $('#is_active').val();
        if(offer_type==''){
            alert('Please enter offer type');
            return false;
        } else if(start_date > end_date){
            alert('Please enter valid date');
            return false;
        } else if (start_date < now || end_date < now) {
            alert("Date must be in the future");
            return false;
        } else if(offer_value==''){
            alert('Please enter offer value');
            return false;
        } else if(offer_value<0){
            alert('Please enter positive offer value');
            return false;
        } else if(min_cart_value==''){
            alert('Please enter minimum cart value');
            return false;
        } else if(min_cart_value<0){
            alert('Please enter positive cart value');
            return false;
        } else if(max_discount==''){
            alert('Please enter max_discount');
            return false;
        }  else if(max_discount<0){
            alert('Please enter positive max_discount value');
            return false;
        } else if(allowed_user_times==''){
            alert('Please enter allowed user count');
            return false;
        } else if(allowed_user_times<0){
            alert('Please enter positive allowed user count');
            return false;
        } else if(start_date==''){
            alert('Please enter start_date');
            return false;
        } else if(end_date==''){
            alert('Please enter end date');
            return false;
        } else if(is_active==''){
            alert('Please select status');
            return false;
        } else if(category==''){
            alert('Please select product category');
            return false;
         } else if(subcategory && category ==0 || (!subcategory && category > 0)){
            alert('Please select product sub category');
            return false;
         } else {
            $('#coupon_form').submit();
            alert('Successfully Updated');
        }

    }
</script>
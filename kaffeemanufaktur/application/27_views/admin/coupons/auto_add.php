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
                                                <label>Number of coupon <span class="text-danger">*</span> :</label>
                                                <input style="text-transform: uppercase" class="form-control" required type="number" placeholder="Enter Number Of Coupon" name="length" id="length" min="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Category <span class="text-danger">*</span> :</label>
                                                    <select class="form-control category_select" name="category[]" id="hide_select" required>
                                                        <option value="" selected hidden disabled>Select</option>
                                                        <option value="0" data-id="0">All Category</option>  
                                                        <?php 
                                                        foreach($all_category as $cat){?>
                                                            <option value="<?= $cat['id']; ?>" data-id="<?= $cat['category']; ?>"><?= $cat['name']; ?></option>
                                                        <?php }?>  
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix hide_sub_cat">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Sub Category<span class="text-danger">*</span> :</label>
                                                <div class="row  showcategory_select">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Offer Type <span class="text-danger">*</span> :</label>
                                                <select class="form-control" name="offer_type" id="offer_type" required>
                                                    <option>PERCENTAGE</option>
                                                    <option>FIXED</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>News Letter<span class="text-danger">*</span> :</label>
                                                <select class="form-control" name="newsletter" id="newsletter" required>
                                                    <option selected="" value="N">No</option>
                                                    <option value="Y">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Offer Value <span class="text-danger">*</span> :</label>
                                                <input class="form-control" required type="number" placeholder="Enter Offer Value" name="offer_value" id="offer_value" min="1">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Min cart Value <span class="text-danger">*</span> :</label>
                                                <input class="form-control" required type="number" placeholder="Enter Min Cart Value" name="min_cart_value" id="min_cart_value" min="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Max Discount <span class="text-danger">*</span> :</label>
                                                <input class="form-control" required type="number" placeholder="Enter Max Discount" name="max_discount" id="max_discount" min="1">
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
                                                    <option value="PER">Allowed Per User (Times)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input class="form-control" required type="number" placeholder="Enter Number of coupon valid for"name="allowed_user_times" id="allowed_user_times">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Start Date <span class="text-danger">*</span> :</label>
                                                <input class="form-control" required type="date" placeholder="Enter Start Date" name="start_date" id="start_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>End Date <span class="text-danger">*</span> :</label>
                                                <input class="form-control" required type="date" placeholder="Enter End Date" name="end_date" id="end_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Status <span class="text-danger">*</span> :</label>
                                                <select class="form-control" name="is_active" id="is_active" required>
                                                    <option value="Y">Active</option>
                                                    <option value="N">InActive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Offer Description <span class="text-danger">*</span> :</label>
                                                <textarea class="form-control" name="description" id="description" placeholder="Enter Description about this offer"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Offer Terms <span class="text-danger">*</span> :</label>
                                                <textarea class="form-control" name="terms" id="terms" placeholder="Enter Offer Terms"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <button  class="btn btn-primary"  type="button" onclick="submit_coupon()"> Submit</button>
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
        <!-- #END# Input -->
    </div>
</section>
<script>
$(document).ready(function() {
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
 // f
    function submit_coupon(){
        var date = new Date();
        now = ((date.getMonth() > 8) ? (date.getMonth() + 1) : ('0' + (date.getMonth() + 1))) + '-' + ((date.getDate() > 9) ? date.getDate() : ('0' + date.getDate())) + '-' + date.getFullYear();
        var length = $('#length').val();
        var category = $('#hide_select').val();
        var subcategory = $('.show_sub_category').is(":checked");
        var offer_type = $('#offer_type').val();
        var offer_value = $('#offer_value').val();
        var min_cart_value = $('#min_cart_value').val();
        var max_discount = $('#max_discount').val();
        var allowed_user_times = $('#allowed_user_times').val();
        var start_date = $('#start_date').val();
        var end_date = $('#end_date').val();
        var is_active = $('#is_active').val();
        if(length==''){
            alert('Please enter number of coupon');
            return false;
        } else if(offer_type==''){
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
            alert('Successfully Added');
        }
    }
</script>
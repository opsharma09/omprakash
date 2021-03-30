
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="modal-body">
        <form action="<?php echo base_url('users/edit')?>" method="post">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Enter First Name</label>
              <input type="text" name="first_name" required="required" value="<?=$user_info->first_name?>" class="form-control" placeholder="Enter First Name">
              <label>Enter Last name</label>
              <input type="text" name="last_name" required="required" value="<?=$user_info->last_name?>" class="form-control" placeholder="Enter Last Name">
              <label>Enter Mobile Number</label>
              <input type="text" name="phone_no" required="required" value="<?=$user_info->phone_no?>" class="form-control" placeholder="Enter Mobile number">
              <label>Enter Email Id</label>
              <input type="email" name="email_id" class="form-control" value="<?=$user_info->email_id?>" placeholder="Enter Email">
              <label>Enter Password</label>
              <input type="password" name="password" required="required" id="password" value="<?=$user_info->password?>" class="form-control" placeholder="Enter Password">
              <label>Status</label>
              <select class="form-control" name="status">
              	<option value="1" <?php if($user_info->status== '1'){echo 'selected';}?>>Active</option>
              	<option value="0" <?php if($user_info->status== '0'){echo 'selected';}?>>In Active</option>
              </select> 
              <label>Address</label>
              <textarea name="address" required="required" class="form-control" placeholder="Enter address"><?=$user_info->address?></textarea>
          
               </div>     
          <div class="col-sm-12">
            <div class="form-group">
             <button type="submit" class="btn btn-primary">Add</button>
             <button type="reset" class="btn btn-default">Cancel</button>
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
  	$('#password').keyup(function () {
        var password = $('#password').val();
        if (password.match('[a-z]')) {
            if (password.match('[A-Z]')) {
                if (password.match('[0-9]')) {
                    if (password.length > 5) {
                        $('#password').parent().parent().find('.error-alert').hide();
                    } else {
                        $('#password').parent().parent().find('.error-alert').show();
                    }

                } else {
                    $('#password').parent().parent().find('.error-alert').show();
                }
            } else {
                $('#password').parent().parent().find('.error-alert').show();
            }
        } else {
            $('#password').parent().parent().find('.error-alert').show();
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

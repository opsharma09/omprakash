
    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
            <div class="row">
                <div class="col-sm-4" style="padding-bottom: 40px">
                  <button class="btn btn-info float-right ml-0"><a href="<?php  echo base_url().'coupons/add'?>" class="btn btn-info btn-sm">Add New</a></button>
                </div>
                <div class="col-sm-4 text-center" style="padding-bottom: 40px">
                  <a class="btn btn-primary" data-toggle="modal" data-target="#add_product_equipment" style="color:#ffffff"><i class="fas fa-plus" ></i> Import Or Export</a>
                </div>
                <div class="col-sm-4" style="padding-bottom: 40px">
                  <button class="btn btn-info float-right mr-0"><a href="<?php  echo base_url().'coupons/auto_add'?>" class="btn btn-info btn-sm">  Add Bulk Coupon</a></button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12"><br>
                    <table  id="posts" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Coupon Code</th>
                            <th>Type</th>
                            <th>Offer Value</th>
                            <th>Min cart Value</th>
                            <th>Max Discount</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Coupon Valid For</th>
                            <th>Allowed User Count</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal" id="add_product_equipment">
  <div class="modal-dialog">
    <div class="modal-content ">
        <form action="<?=base_url("coupons/coupons_bulk_import")?>" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <h4 id="defaultModalLabel">Coupons Bulk Import &nbsp;&nbsp;&nbsp;<a href="<?=base_url("coupons/sample_coupon_export")?>" class="btn btn-sm btn-light">Sample OR Export</a></h4>
            </div>
            <div class="modal-body">
                <h5 class="text-danger" id="import_error"></h5>
                <div class="form-group">
                    <label>File (only csv as per sample) <span class="text-danger">*</span> : </label>
                    <input class="form-control" name="file" id="file" type="file">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-round waves-effect">UPLOAD</button>
                <button type="button" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </form>
    </div>
  </div>
</div>
<script>
    $(document).ready(function () {
        $('#posts').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [[ 0, "desc" ]],
            "ajax":{
             "url": "<?php echo base_url('coupons/coupons_list') ?>",
             "dataType": "json",
             "type": "POST",
             "data":{  '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>' }
                           },
        "columns": [
                  { "data": "ID" },
                  { "data": "Coupon" },
                  { "data": "Type" },
                  { "data": "Offer Value" },
                  { "data": "Min cart Value" },
                  { "data": "Max Discount" },
                  { "data": "Start Date" },
                  { "data": "End Date" },
                  { "data": "Coupon Valid For" },
                  { "data": "Allowed User Count" },
                  { "data": "Status" },
                  { "data": "Action" },
               ]     

        });
    });
</script>
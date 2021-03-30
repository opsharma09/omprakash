<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<!-- <footer class="main-footer fs-14">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <p class='m-auto'>© Copyright 2020 | All Rights Reserved. </p>
            </div>
            <div class="col-md-6 text-md-right">
                <p class='m-auto'>Design and developed by <i class='fas fa-heart' style="color:red"></i> Enthuons</p>
            </div>
        </div>
    </div>
</footer> -->
</div>

<footer class="main-footer fs-14">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <p class='m-auto'>© Copyright 2020 | All Rights Reserved. </p>
            </div>
            <div class="col-md-6 text-md-right">
                <p class='m-auto'>Design and developed by <i class='fas fa-heart' style="color:red"></i> Enthuons</p>
            </div>
        </div>
    </div>
</footer>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!-- <script src="<?php echo base_url() ?>tools/admin/plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>tools/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url() ?>tools/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>tools/admin/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url() ?>tools/admin/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo base_url() ?>tools/admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url() ?>tools/admin/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>tools/admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url() ?>tools/admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>tools/admin/plugins/chart.js/Chart.min.js"></script>
<script
  src="https://code.jquery.com/jquery-1.10.2.js"
  integrity="sha256-it5nQKHTz+34HijZJQkpNBIHsjpV8b6QzMJs9tmOBSo="
  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js" integrity="sha256-EgPuQS+2I8bm2u3b3r1dJUEiO56a/xeZGXiTnNTvYZM=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'tools/admin/js/custom.js' ?>"></script>
<!-- PAGE SCRIPTS -->
<script src="<?php echo base_url() ?>tools/admin/js/pages/dashboard2.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->

<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.3.0/fullcalendar.min.js"></script>
  <script type="text/javascript">
        $(function () {

          var dateToday = new Date(); 
            // $('#datetimepickermonth,#datetimepickerday,#datetimepickertask').datetimepicker({
            //     inline: true,
                
            //     // sideBySide: true
            // });
            $('#start-date').datepicker({
                dateFormat:'dd-mm-yy',
                minDate: 0
                // minDate: dateToday,
            });
            $('#end-date').datepicker({
                dateFormat:'dd-mm-yy',
                minDate: 0
                // minDate: dateToday,
            });
            $('#start-time').datetimepicker({
                   format: 'HH:mm'
                });
            $('#end-time').datetimepicker({format: 'HH:mm'});
      // $('#datetimepickerstart,#datetimepickerend').datetimepicker({
      //           allowInputToggle: true,
      //           format: 'L',
      //           minDate: dateToday,
      // });
      // $('#datetimepicker1').datetimepicker({
      //           allowInputToggle: true,
      //           format: 'L',
                
      // });
      $('.event').not('.disabled').on('click',() => {
        $('.eventDetail').addClass('active');
      })
      $('.close').on('click',function() {
        $(this).parents('.eventDetail').removeClass('active');
      });
      // $('#selectTime1,#selectTime2').datetimepicker({
      //         format: 'LT',
      //         allowInputToggle: true
      //     });
        });
    </script>
</body>

</html>
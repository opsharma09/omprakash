<?php $user_id = $this->session->userdata('user')->user_id; ?>
            
<section class="content">
    <div class="container-fluid">
        <div class="header">
            <h4>Events</h4>
            <div class="buttonGroup">
                <a class="filterBtn"> 
                    My Events
                </a>
                <a class="event" href="<?php echo base_url(); ?>events/addEvent">                              
                    New Event
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="monthView">
                            <div id="datetimepickermonth"></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="events">
                            <?php if(!empty($event_list)) {
                                foreach ($event_list as $key => $value) { 
                                $university = $this->db->get_where('event_type', array('id' => $value['event_id']))->row_array();
                            ?>
                            <div class="feed-card list" id="event_id_div_<?= $value['id'] ?>">
                                 <div class="right">
                                     <div class="feed_card_inner">
                                        <h5>
                                            <a href="<?=base_url('events/eventDetails/'.base64_encode($value['id'])); ?>"><?php echo $value['event_name']; ?></a></h5>
                                        <div class="timeperiod">
                                            <div class="timeDetail"><?php echo date('d M, Y', strtotime($value['start_date'])); ?>                                           
                                            </div>
                                            <div class="timeDetail">
                                                <?php echo date('h:i A', strtotime($value['start_time'])); ?> 
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    <?php }  else { ?>
                    <?php echo '<p class="text-center">'.$text_msg.'</p>'; } ?>
                    </div>
                </dir>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    $(document).ready(function() {
        $('#datetimepickermonth').on('dp.change', function(e){ 
        var formatedValue = e.date.format(e.date._f);
        var fields = formatedValue.split('T');
        var url = '<?=base_url()?>events/getEventsDayWise';
        $('.events').html('<h6 class="loadingEvents">Loading Events</h6>');
         $.ajax({
              url: url,
              type: 'POST',
              data: {'date': fields[0]},
              success: function(result) {
                  $('.events').html(result);
              }
          });
        });
    });
  </script>
                
    

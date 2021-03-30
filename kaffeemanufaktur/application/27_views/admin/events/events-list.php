<?php $user_id = $this->session->userdata('user')->user_id; ?>

<section class="content">
    <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header mb-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- <h4>Events</h4> -->
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a class="event btn yellow btn-info"
                                            href="<?php echo base_url(); ?>events/addEvent">New Event</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="monthView">
                                <div id="mycalender1"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="events">
                                <h5 class="event_title">Event List</h5>
                                <div class="events_list">
                                <?php if(!empty($event_list)) {
                                    foreach ($event_list as $key => $value) { 
                                ?>
                                <div class="feed-card list" id="event_id_div_<?= $value['id'] ?>">
                                    <div class="feed_card_inner">
                                        <h5><b>Event Name - </b>
                                            <a
                                                href="<?=base_url('events/eventDetails/'.$value['id']); ?>"><?php echo $value['event_name']; ?></a>
                                        </h5>
                                        <div class="timeperiod">
                                            <div class="timeDetail">
                                                <b>Event Date -
                                                </b><?php echo date('M d, Y', strtotime($value['start_date'])); ?>
                                            </div>
                                            <div class="timeDetail">
                                                <b>Event Time -
                                                </b><?php echo date('h:i A', strtotime($value['start_time'])); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            </div>
                            <?php }  else { ?>
                            <?php echo '<p class="text-center">No Result Found</p>'; } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
$(document).ready(function() {
    var events = <?php echo json_encode($data) ?>;
    console.log(events);
    var date = new Date()
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear()
    var calendar = $("#mycalender1").fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
        },
        navLinks: true,
        editable: true,
        eventLimit: true,
        events: events

    });
    $('#datetimepickermonth').on('dp.change', function(e) {
        var formatedValue = e.date.format(e.date._f);
        var fields = formatedValue.split('T');
        var url = '<?=base_url()?>events/getEventsDayWise';
        $('.events').html('<h6 class="loadingEvents">Loading Events</h6>');
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                'date': fields[0]
            },
            success: function(result) {
                $('.events').html(result);
            }
        });
    });
});
</script>
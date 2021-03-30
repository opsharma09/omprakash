<section class="mainContent">
    <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
            <div class="scheduleWrapper row table-bordered py-4">
                <div class="col-sm-6">
					<h3 class="m-0">Event list</h3>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a class="backBtn btn yellow btn-info" href="<?php echo base_url('events'); ?>">Back to events</a>
                    </div>
                    <div class="col-sm-12">
                        <ul class="eventscheduledWrap">
                            <li><?php echo date('d M, Y', strtotime($event['start_date']));; ?> -
                                <?php echo date('d M, Y', strtotime($event['end_date']));; ?></li>
                            <li><?php echo date('h:i A', strtotime($event['start_time'])); ?> -
                                <?php echo date('h:i A', strtotime($event['end_time'])); ?></li>
                        </ul>
                    <h4 class="eventname"><?php echo $event['event_name']; ?></h4>
                    <div>
                        <div>
                            <div class="edit d-inline-block mr-4"><a href="<?php echo base_url('events/edit_event/'.$event['id']); ?>" class="btn btn-info yellow">Edit</a></div>
                            <div class="delete d-inline-block"><a class='text-danger' href="<?php echo base_url('events/remove_event/'.$event['id']); ?>"  onclick="return confirm('Are you sure you want to delete this event?')" style="margin-right:0;">Delete</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <h3 class="m-0">Booking List</h3>
                  <table  class="table table-striped table-bordered datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Info</th>
                                <th>Event Name</th>
                                <th>Event Date</th>
                                <th>Event Time</th>
                                <th>Event Price</th>
                                <th>Total Price</th>
                                <th>Person</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $i=1;
                        foreach($order_trips as $cat)
                        {
                        ?>
                            <tr>
                              <td><?php echo  $i; ?></td>
                              <td>
                                <p><strong>Name : </strong><?=$cat['customer_name']?></p>
                                <p><strong>Mobile : </strong><?=$cat['phone_no']?></p>
                              </td>
                              <td><p><strong><?=$cat['type']?></strong></p></td>
                              <td><?=date('d M Y',strtotime($cat['start_date']))?></td>
                              <td><?=date('H:i a',strtotime($cat['start_time']))?></td>
                              <td><?=$cat['aprice']?></td>
                              <td><?=$cat['acprice']?></td>
                              <td><?=$cat['person']?></td>
                            </tr>
                        <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="removeFromScheduleModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content"><button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="modal-body peers">
                <h4>Confirmation</h4>
                <div class="row">
                    <h6 class="modalText">Are you sure you want to remove this event <br> from your schedule?</h6>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="<?php echo base_url(); ?>events/removeEvent">
                            <div class="form-group button"><input type="hidden" id="remove_event_id"
                                    name="remove_event_id"><button type="button" data-dismiss="modal"
                                    class="transparentBtn highlight">No</button><button type="submit"
                                    class="filterBtn">Yes</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
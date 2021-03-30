<section class="mainContent">
	<div class="scheduleWrapper">
		<a class="backBtn col-sm-12" href="<?php echo base_url(); ?>">
			
			Back to events
		</a>
		<div class="col-sm-9">
			<ul class="eventscheduledWrap">
				<li>
					<?php echo date('d M, Y', strtotime($event['start_date']));; ?> - <?php echo date('d M, Y', strtotime($event['end_date']));; ?>
				</li>
				<li>
					<?php echo date('h:i A', strtotime($event['start_time'])); ?> - <?php echo date('h:i A', strtotime($event['end_time'])); ?>
				</li>
			</ul>
			<h4 class="eventname"><?php echo $event['event_name']; ?></h4>
			<div >
				<div>
					<div class="edit">
						<a href="<?php echo base_url('events/editEvent/'.$event['id']); ?>" style="margin-right:0;">
							 Edit
						</a>
					</div>
					<!-- <div class="delete">
						<a  href="<?php echo base_url('events/editEvent/'.$event['id']); ?>" style="margin-right:0;">
							 Delete
						</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</section>


<div class="modal fade" id="removeFromScheduleModal" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<div class="modal-body peers">
				<h4>Confirmation</h4>
				<div class="row">
					<h6 class="modalText">Are you sure you want to remove this event <br> from your schedule?</h6>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form method="post" action="<?php echo base_url(); ?>events/removeEvent">
							<div class="form-group button">
								<input type="hidden" id="remove_event_id" name="remove_event_id">
								<button type="button" data-dismiss="modal" class="transparentBtn highlight">No</button>
								<button type="submit" class="filterBtn">Yes</button>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>



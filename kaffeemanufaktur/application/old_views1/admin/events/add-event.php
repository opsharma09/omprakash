<section class="content">
	<div class="container-fluid">
		<div class="header">
            <h4>Events</h4>
            <div class="buttonGroup">
                <a class="filterBtn"> 
                    New Events
                </a>
                <a class="event" href="<?php echo base_url(); ?>events">                              
                    Event List
                </a>
            </div>
        </div>
		<div class="studySetWrapper list">
			<form method="post" action="<?php echo base_url(); ?>events/addEvent" enctype="multipart/form-data" onsubmit="return validateEvent()">	
				<div class="content-box">
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="event_name" id="event_name" class="form-control form-control--lg" placeholder="Event Name">
								<span class="custom_err" id="err_event_name"></span>
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Event Type</label>
								<select name="event_type" id="event_type" class="form-control form-control--lg">
									<?php foreach ($event_type as $key => $event) {?>
									<option value="<?=$event->id?>"><?=$event->name?></option>
									<?php } ?>
								</select>
								<span class="custom_err" id="err_event_name"></span>
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Event Person</label>
								<select name="day" id="day" class="form-control form-control--lg">
								</select>
								<span class="custom_err" id="err_event_name"></span>
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-row align-items-center mb-2 no-gutters">
								<div class="col  eventAdd">
									<div class="col-sm-6">
											<label>Start</label>
										<div class="form-group calendar event">
											<div class="row">
												<div class="col-sm-8">
													<div class="filtercalendar">
													  	<div class="input-group date" id="datetimepickerstart">
										                    <input type="text" class="form-control" name="start-date" id="start-date">
										                </div>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="input-group--overlap" id="selectTime1">
														<input type="text" class="form-control  form-control--lg" name="start-time" id="start-time">
														<span class="custom_err" id="err_start-time"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<label>End</label>
										<div class="form-group calendar event">
											<div class="row">
												<div class="col-sm-8">
													<div class="filtercalendar">
													  	<div class="input-group date" id="datetimepickerstart">
										                    <input type="text" class="form-control" name="end-date" id="end-date">
										                    <span class="custom_err" id="err_end-date"></span>
										                </div>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="input-group--overlap" id="selectTime2">
														<input type="text" class="form-control  form-control--lg" name="end-time" id="end-time">
														<span class="custom_err" id="err_end-time"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<label>Description</label>
							<div class="form-group">
								<textarea name="description" placeholder="Description" id="description" class="textarea-gray"></textarea>
								<span class="custom_err" id="err_description"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="studybuttonGroup">
					<a href="<?php echo base_url(); ?>events" type="button" class="transparentBtn cancelEvent" >Cancel</a>
					<button type="submit" class="filterBtn">
						
						Save
					</button>
				</div>
			</form>
		</div>
	</div>
</section>
<script type="text/javascript">
    $(document).ready(function() {
        $('#event_type').on('change', function(e){ 
        var event_type = $(this).val();
        var url = '<?=base_url()?>events/getEventsDay';
         $.ajax({
              url: url,
              type: 'POST',
              data: {'event_type': event_type},
              success: function(result) {
              	console.log(result);
                  $('#day').html(result);
              }
          });
        });
    });
  </script>

	
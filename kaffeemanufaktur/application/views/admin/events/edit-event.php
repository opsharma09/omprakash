<section class="content">
    <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
            <div class="header">
                <h4><a href="<?=base_url('events')?>" style="text-decoration: none;color: #343a40">Events</a></h4>
            </div>
            <div class="studySetWrapper list">
                <form method="post" action="<?php echo base_url('events/edit_event/'.$event->id); ?>" enctype="multipart/form-data" id="event_form">
                    <div class="content-box">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="form-group form-row">
                                    <div class="col-md-2 text-right">
                                        <label>Name *</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="event_name" id="event_name"
                                            class="form-control form-control--lg" placeholder="Event Name"
                                            value="<?=$event->event_name?>" required>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <div class="col-md-2 text-right">
                                        <label>Event Type *</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select name="event_type" id="event_type" class="form-control form-control--lg" required>
                                            <option value="" selected="" disabled="" hidden="">Select Event Type</option>
                                        <?php foreach ($event_type as $key => $even) {?>
                                            <option value="<?=$even->id?>" <?php if($even->id == $event->event_id){ echo 'selected';}?>><?=$even->name?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <div class="col-md-2 text-right">
                                        <label>Max Event Person *</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select name="day" id="day" class="form-control form-control--lg" required id="person">
                                            <option value="" selected="" disabled="" hidden="">Select Maximum event person</option>
                                            <option value="1" <?php if($event->day == '1'){ echo 'selected';}?>>1</option>
                                            <option value="2" <?php if($event->day == '2'){ echo 'selected';}?>>2</option>
                                            <option value="3" <?php if($event->day == '3'){ echo 'selected';}?>>3</option>
                                            <option value="4" <?php if($event->day == '4'){ echo 'selected';}?>>4</option>
                                            <option value="5" <?php if($event->day == '5'){ echo 'selected';}?>>5</option>
                                            <option value="6" <?php if($event->day == '6'){ echo 'selected';}?>>6</option>
                                            <option value="7" <?php if($event->day == '7'){ echo 'selected';}?>>7</option>
                                            <option value="8" <?php if($event->day == '8'){ echo 'selected';}?>>8</option>
                                            <option value="9" <?php if($event->day == '9'){ echo 'selected';}?>>9</option>
                                            <option value="10" <?php if($event->day == '10'){ echo 'selected';}?>>10</option>
                                            <option value="11" <?php if($event->day == '11'){ echo 'selected';}?>>11</option>
                                            <option value="12" <?php if($event->day == '12'){ echo 'selected';}?>>12</option>
                                            <option value="13" <?php if($event->day == '13'){ echo 'selected';}?>>13</option>
                                            <option value="14" <?php if($event->day == '14'){ echo 'selected';}?>>14</option>
                                            <option value="15" <?php if($event->day == '15'){ echo 'selected';}?>>15</option>
                                            <option value="16" <?php if($event->day == '16'){ echo 'selected';}?>>16</option>
                                            <option value="17" <?php if($event->day == '17'){ echo 'selected';}?>>17</option>
                                            <option value="18" <?php if($event->day == '18'){ echo 'selected';}?>>18</option>
                                            <option value="19" <?php if($event->day == '19'){ echo 'selected';}?>>19</option>
                                            <option value="20" <?php if($event->day == '20'){ echo 'selected';}?>>20</option>
                                            <option value="21" <?php if($event->day == '21'){ echo 'selected';}?>>21</option>
                                            <option value="22" <?php if($event->day == '22'){ echo 'selected';}?>>22</option>
                                            <option value="23" <?php if($event->day == '23'){ echo 'selected';}?>>23</option>
                                            <option value="24" <?php if($event->day == '24'){ echo 'selected';}?>>24</option>
                                        </select>
                                        <span class="custom_err" id="err_event_name"></span>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <div class="col-md-2 text-right">
                                        <label>Event Price (per person) *</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="price" id="price"
                                            class="form-control form-control--lg" placeholder="Event price per person" value="<?=$event->price?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row eventAdd">
                                        <div class="col-md-2 text-right">
                                            <label for="">Start * </label>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="form-row">
                                                <div class="col-sm-5">
                                                    <div class="form-group calendar event">
                                                        <div class="form-row">
                                                            <div class="col-sm-8">
                                                                <div class="filtercalendar">
                                                                    <div class="input-group date"
                                                                        id="datetimepickerstart">
                                                                        <input type="text" class="form-control"
                                                                            name="start-date" id="start-date"
                                                                            value="<?=date('d-m-Y',strtotime($event->start_date))?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="input-group--overlap" id="selectTime1">
                                                                    <input type="text"
                                                                        class="form-control  form-control--lg"
                                                                        name="start-time" id="start-time"
                                                                        value="<?=$event->start_time?>" required>
                                                                    <span class="custom_err" id="err_start-time"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1 text-right">
                                                    <label>End *</label>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group calendar event">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <div class="filtercalendar">
                                                                    <div class="input-group date"
                                                                        id="datetimepickerstart">
                                                                        <input type="text" class="form-control"
                                                                            name="end-date" id="end-date"
                                                                            value="<?=date('d-m-Y',strtotime($event->end_date))?>" required>
                                                                        <span class="custom_err"
                                                                            id="err_end-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="input-group--overlap" id="selectTime2">
                                                                    <input type="text"
                                                                        class="form-control  form-control--lg"
                                                                        name="end-time" id="end-time"
                                                                        value="<?=$event->end_date?>" required>
                                                                    <span class="custom_err" id="err_end-time"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <div class="col-md-2 text-right">
                                        <label>Description</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="description" placeholder="Description" id="description"
                                            class="textarea-gray form-control" rows="5"><?=$event->description?></textarea>
                                        <span class="custom_err" id="err_description"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="row">
                                <div class="col-md-10 ml-auto">
                                    <div class="studybuttonGroup">
                                        <a href="<?php echo base_url(); ?>events" type="button"
                                            class="transparentBtn cancelEvent text-danger mr-3">Cancel</a>
                                        <button type="button" class="filterBtn btn btn-info" onclick="submit_event()">Save </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
	
	function submit_event(){
		var date = new Date();
		now = ((date.getMonth() > 8) ? (date.getMonth() + 1) : ('0' + (date.getMonth() + 1))) + '-' + ((date.getDate() > 9) ? date.getDate() : ('0' + date.getDate())) + '-' + date.getFullYear();
		var event_name = $('#event_name').val();
		var event_type = $('#event_type').val();
		var person = $('#person').val();
		var price = $('#price').val();
		var start_date = $('#start-date').val();
		var start_time = $('#start-time').val();
		var end_date = $('#end-date').val();
		var end_time = $('#end-time').val();
		if(event_name ==''){
			alert('Please enter event name');
			return false;
		} else if(event_type ==''){
			alert('Please enter event type');
			return false;
		} else if(start_date > end_date){
			alert('Please enter valid date');
			return false;
		} else if (start_date < now || end_date < now) {
	    	alert("Date must be in the future");
	    	return false;
	    } else if(person ==''){
			alert('Please Select Person');
			return false;
		} else if(price ==''){
			alert('Please enter event price');
			return false;
		} else if(start_date ==''){
			alert('Please enter event start date');
			return false;
		} else if(start_time ==''){
			alert('Please enter event start time');
			return false;
		} else if(end_date ==''){
			alert('Please enter event end date');
			return false;
		} else if(end_time ==''){
			alert('Please enter event end time');
			return false;
		} else {
			$('#event_form').submit();
		}
	}
</script>
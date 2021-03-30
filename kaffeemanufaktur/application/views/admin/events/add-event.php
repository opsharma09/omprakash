<section class="content">
    <div class="container-fluid">
        <div class="card pl-4 pt-4 pr-4 pb-4">
            <div class="header">
                <h4><a href="<?=base_url('events')?>" style="text-decoration: none;color: #343a40">Events</a></h4>
            </div>
            <div class="studySetWrapper list">
                <form method="post" action="<?php echo base_url(); ?>events/addEvent" enctype="multipart/form-data"
                    id="event_form">
                    <div class="content-box">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="form-group form-row">
                                    <div class="col-md-2 text-right">
                                        <label>Name *</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="event_name" id="event_name"
                                            class="form-control form-control--lg" placeholder="Event Name" required>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <div class="col-md-2 text-right">
                                        <label>Event Type *</label>
                                    </div>
                                    <div class="col-md-10">
                                        <select name="event_type" id="event_type" class="form-control form-control--lg" required>
                                            <option value="" selected="" disabled="" hidden="">Select Event Type</option>
                                        <?php foreach ($event_type as $key => $event) {?>
                                            <option value="<?=$event->id?>"><?=$event->name?></option>
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
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-row">
                                    <div class="col-md-2 text-right">
                                        <label>Event Price (per person) *</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="price" id="price"
                                            class="form-control form-control--lg" placeholder="Event price per person" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-row eventAdd">
                                        <div class="col-md-2 text-right">
                                            <label for="">Start *</label>
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
                                                                            name="start-date" id="start-date" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="input-group--overlap" id="selectTime1">
                                                                    <input type="text"
                                                                        class="form-control  form-control--lg"
                                                                        name="start-time" id="start-time" required>
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
                                                        <div class="form-row">
                                                            <div class="col-sm-8">
                                                                <div class="filtercalendar">
                                                                    <div class="input-group date"
                                                                        id="datetimepickerstart">
                                                                        <input type="text" class="form-control"
                                                                            name="end-date" id="end-date" required>
                                                                        <span class="custom_err"
                                                                            id="err_end-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="input-group--overlap" id="selectTime2">
                                                                    <input type="text"
                                                                        class="form-control  form-control--lg"
                                                                        name="end-time" id="end-time" required="">
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
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-2">
                                            <label>Description</label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea name="description" placeholder="Description" id="description"
                                                class="textarea-gray form-control" rows='5'></textarea>
                                            <span class="custom_err" id="err_description"></span>
                                        </div>
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
                                        <button type="button" class="filterBtn btn btn-info" onclick="submit_event()">Save</button>
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
        var date_d = ((date.getDate() > 9) ? date.getDate() : ('0' + date.getDate()));
        var now = new Date(date_d + '-' + ((date.getMonth() > 8) ? (date.getMonth() + 1) : ('0' + (date.getMonth() + 1))) + '-' + date.getFullYear());
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
        } else if (start_date < now) {
            alert("Start date must be in the future");
            return false;
        }  else if (end_date < now) {
            alert("End date must be in the future");
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
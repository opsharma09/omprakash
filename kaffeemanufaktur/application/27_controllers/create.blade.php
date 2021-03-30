@extends ('layouts.app')
@section ('title', 'Add Assignment')
@section ('content')
<style>
    .error {color: #ed5565;}
</style>

<!-- Breadcrumb --> 
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Add Assignment</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a>Masters</a>
            </li>
            <li>
                <a href="/assignment">Assignment</a>
            </li>
            <li class="active">
                <strong>Add Assignment</strong>
            </li>
        </ol>
    </div>
</div>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Add Assignment</a></li>
                                <!-- <li class=""><a data-toggle="tab" href="#tab-2">Time Spent</a></li> -->
                                <!-- <li class=""><a data-toggle="tab" href="#tab-3">Notes -->
                                <!-- <span class="label label-warning">New Message</span> -->
                                <!-- </a></li> -->
                                <!-- <li class=""><a data-toggle="tab" href="#tab-4">Mail</a></li> -->
                                <!-- <li class=""><a data-toggle="tab" href="#tab-5">Upload</a></li> -->
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <strong>Add Assignment</strong>
                                        <form class="form-horizontal" method="POST" action="/assignment" role="form" onSubmit="return validate();">
                                            {{ csrf_field() }}
                                            <div class="ibox-content">                        
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Company Name:</label>
                                                    <div class="col-sm-10">
                                                        <!-- <input type="text" class="form-control" id="company_name" name="company_name" onKeyUp="createFolderPath()" onBlur="setCompanyId()"> -->
                                                        <span class="help-block m-b-none error" id="error_company_name" ></span>
                                                        <select class="form-control m-b" id="company_name" name="company_name" onclick="setCompanyId()" onchange="elementValidation(this)">
                                                            <option value="">--Select--</option>
                                                            @foreach($clients as $client)
                                                                <option value="{{$client->c_id}}">{{$client->company_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Company Id:</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control" id="company_id" name="company_id" readonly>
                                                    <!-- <span class="help-block m-b-none error" id="error_company_id" ></span> -->
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Assignment Title:</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control" id="assignment_title" name="assignment_title" onKeyUp="createFolderPath();elementValidation(this)">
                                                    <span class="help-block m-b-none error" id="error_assignment_title" ></span></div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Folder Path:</label>
                                                    <div class="col-sm-10"><input type="text" class="form-control" id="folder_path" name="folder_path" readonly>
                                                    <!-- <span class="help-block m-b-none error" id="error_folder_path" ></span> -->
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Date of Assignment:</label>
                                                    <div class="col-sm-10"><input type="date" class="form-control" id="date_assignment" name="date_assignment" onchange="elementValidation(this)">
                                                    <span class="help-block m-b-none error" id="error_date_assignment" ></span></div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Due Date:</label>
                                                    <div class="col-sm-10"><input type="date" class="form-control" id="due_date" name="due_date" onchange="elementValidation(this)">
                                                    <span class="help-block m-b-none error" id="error_due_date" ></span></div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Report to Client:</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control m-b" name="report" id="report_type" onchange="elementValidation(this)">
                                                            <option value="">Select Report Type</option>
                                                            <option value="daily">Daily</option>
                                                            <option value="weekly">Weekly</option>
                                                            <option value="hourly">Hourly</option>
                                                            <option value="fortnightly">Fortnightly</option>
                                                        </select>
                                                         <span class="help-block m-b-none error" id="error_report_type" ></span>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group"><label class="col-sm-2 control-label">Source:</label>
                                                    <div class="col-sm-10">
                                                        <label class="checkbox-inline i-checks"> <input type="checkbox" value="option1"> Meeting </label>
                                                        <label class="checkbox-inline i-checks"> <input type="checkbox" value="option2"> Mail </label>
                                                        <label class="checkbox-inline i-checks"> <input type="checkbox" value="option3"> Telecall </label>
                                                    </div>
                                                </div> -->
                                                <div class="form-group"><label class="col-sm-2 control-label">Source:</label>
                                                    <div class="col-sm-10">
                                                        <label class="checkbox-inline"> <input type="checkbox" name="source[]" value="meeting" id="source1"> Meeting </label> 
                                                        <label class="checkbox-inline"> <input type="checkbox" name="source[]" value="mail" id="source2"> Mail </label>
                                                        <label class="checkbox-inline"> <input type="checkbox" name="source[]" value="telecall" id="source3"> Telecall </label>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Reference:</label>
                                                    <div class="col-sm-10">
                                                    <textarea id="reference" type="text" class="form-control" name="reference" onkeyup="elementValidation(this)"></textarea>
                                                    <span id="error_reference" class="help-block m-b-none error"></span></div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Assigned To:</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control m-b" name="assigned_to">
                                                            @foreach($assigned_employees as $employee)
                                                                <option value="{{$employee->user_id}}">{{$employee->role}}({{$employee->firstname}})</option>
                                                            @endforeach
                                                            <!-- <option value="assistant">Assistant</option>
                                                            <option value="executive">Executive</option>
                                                            <option value="manager">Manager</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Reporting To:</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control m-b" name="reporting_to">
                                                            @foreach($report_employees as $employee)
                                                                <option value="{{$employee->user_id}}">{{$employee->role}}({{$employee->firstname}})</option>
                                                            @endforeach
                                                            <!-- <option value="admin">Admin</option>
                                                            <option value="qa">Q.A</option>
                                                            <option value="manager">Manager</option> -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group"><label class="col-sm-2 control-label">Assignment Status:</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control m-b" name="status">
                                                            <option value="pending">Pending</option>
                                                            <option value="complete">Complete</option>
                                                            <option value="defer">Defer</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ibox-content">
                                                <div class="form-group">
                                                    <div class="col-sm-4 col-sm-offset-2">
                                                        <span id="error_found" class="help-block m-b-none error"></span>
                                                        <input type="reset" class="btn btn-white" value="Cancel">
                                                        <input type="submit" class="btn btn-primary" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection      

@section ('scripts')
<script> 
    function createFolderPath() {
        var path = "Data-<?=date('Y')?>-<?=date('Y')+1?>/";
        var company_name = $("#company_name option:selected").text();
        var assignment_title = $('#assignment_title').val();
        if(company_name) {
            path += company_name + "/";
        }
        if(assignment_title) {
            path += assignment_title + "/";
        }
        $('#folder_path').val(path);
    }   

    function elementValidation(element) {
       var ele =    $("#" + "error_"+ $(element).attr('id')).html("");
    }     

    function setCompanyId() {
        var company_id = $('#company_name').val();
        // var company_id = Math.floor((Math.random() * 100) + 20);
        $('#company_id').val(company_id);
    }     
    function validate()
    {
        var company_name = $("#company_name").val();
        var assignment_title = $("#assignment_title").val();
        var date_assignment = $("#date_assignment").val();
        var due_date = $("#due_date").val();
        var reference = $("#reference").val();
        var report_type = $("#report_type").val();
        var validate = 1;
        var slide = '';

        // var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var spans = $('.error');
        spans.empty();
        
        if(company_name == ''){
            $('#error_company_name').html('Company Name is required.');
            $('#error_found').html('*Please fill all fields.');
            (slide=='') ? slide = '#company_name':'';
            validate = 0;
        }
        if(assignment_title == ''){
            $('#error_found').html('*Please enter all fields');
            $('#error_assignment_title').html('Assignment Title is required.');
            (slide=='') ? slide = '#assignment_title':'';
            validate = 0;
        }
        if(date_assignment == '' || date_assignment.length == 12){
            $('#error_found').html('*Please enter all fields');
            $('#error_date_assignment').html('Date Assignment is not appropriate.');
            (slide=='') ? slide = '#date_assignment':'';
            validate = 0;
        }
        if(due_date == '' || due_date.length == 12){
            $('#error_found').html('*Please enter all fields');
            $('#error_due_date').html('Due Date is not appropriate.');
            (slide=='') ? slide = '#due_date':'';
            validate = 0;
        }
        if(report_type == ''){
            $('#error_found').html('*Please enter all fields');
            $('#error_report_type').html('Please Select a Report Type');
            (slide=='') ? slide = '#report_type':'';
            validate = 0;
        }
        if(reference == ''){
            $('#error_found').html('*Please fill all fields.');
            $('#error_reference').html('Reference is required.');
            (slide=='') ? slide = '#reference':'';
            validate = 0;
        }
       
        if(validate)
        {
            return true;
        }
        $(slide).focus();
        return false;
    }
</script>
@endsection


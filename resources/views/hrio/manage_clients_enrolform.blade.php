<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
<div class="col-md-8 col-md-offset-2" style="margin-top:2.5%">
        <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/enrolment') }}">
                        {!! csrf_field() !!}
                       <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>   Enter Client's Details
                            </li>
                        </ol>

                       <div class="form-group{{ $errors->has('namehealthworker') ? ' has-error' : '' }}">
                           
                            <label for="enrol_form"style="margin-left:30px;"> 1.Name of health worker who conducted the screening
                           </br>
                            <input type="text" name="en1">
                        </div>

                       <div class="form-group{{ $errors->has('deshealthworker') ? ' has-error' : '' }}">
                           
                            <label for="enrol_form"style="margin-left:30px;"> 2.Designation of health worker who conducted the screening
                            </br>
                             <input
                                   name="en2"
                                   type="radio"
                                   value="nurse"
                                   id="en2"
                                   style="margin-left:20px;"
                                   > Nurse
                            <input name="en2"
                                   type="radio"
                                   value="adherenceofficer"
                                   id="en2"
                                   style="margin-left:10px;" 
                                   > Adherence Counsellor
                            <input name="en2"
                                   type="radio"
                                   value="doctor"
                                   id="en2"
                                   style="margin-left:10px;" 
                                   > Doctor
                            <input name="en2"
                                   type="radio"
                                   value="clinicalofficer"
                                   id="en2"
                                   style="margin-left:10px;" 
                                   > Clinical Officer
                                   </br>
                                   Other Specify
                                   </br>
                            <input type="text" name="healthworker"> 
                        </div>
                         <div class="form-group{{ $errors->has('clientgender') ? ' has-error' : '' }}">
                           
                            <label for="enrol_form"style="margin-left:30px;"> 3.Gender of Client
                            <br/>
                             <input checked="checked"
                                   name="en3"
                                   type="radio"
                                   value="male"
                                   id="en3"
                                   style="margin-left:20px;"
                                   > Male
                            <input name="en3"
                                   type="radio"
                                   value="female"
                                   id="en3"
                                   style="margin-left:10px;" 
                                   > Female
                        </div>

                         <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                           
                            <label for="enrol_form"style="margin-left:30px;"> 4.Date of Birth
                            <br/>
                             <input id="datepicker" type="date" name="en4">    
                        </div>

                        <div class="form-group{{ $errors->has('patunique') ? ' has-error' : '' }}">
                           
                            <label for="enrol_form"style="margin-left:30px;"> 5.Patient unique No.
                            <br/>
                             <input type="text" name="en5">
                        </div>
                        <div class="form-group{{ $errors->has('org') ? ' has-error' : '' }}">
                           
                            <label for="enrol_form"style="margin-left:30px;"> 6.Date of Screening
                            <br/>
                            <input class="datepicker" data-date-format="mm/dd/yyyy" id="datepicker" type="date" name="en6"> 
                            
                        </div>
                        
                        <div class="form-group{{ $errors->has('outcome') ? ' has-error' : '' }}">
                           
                            <label for="enrol_form"style="margin-left:30px;"> 7.Outcome of of Screening
                            <br/>
                            <input checked="checked"
                                   name="en7"
                                   type="radio"
                                   value="yes"
                                   id="en7"
                                   style="margin-left:20px;"
                                   > Yes
                            <input name="en7"
                                   type="radio"
                                   value="no"
                                   id="en7"
                                   style="margin-left:10px;" 
                                   > No
                        </div>

                        <div class="form-group{{ $errors->has('cemid') ? ' has-error' : '' }}">
                           
                            <label for="enrol_form"style="margin-left:30px;"> 8.CEM ID
                            <br/>
                            <input type="string" name="en8">
                        </div>

                        <div class="form-group{{ $errors->has('reason') ? ' has-error' : '' }}">
                           
                            <label for="enrol_form"style="margin-left:30px;"> 9.Reason for not enrolling
                            <br/>
                             <input checked="checked"
                                   name="en9"
                                   type="radio"
                                   value="declined"
                                   id="en9"
                                   style="margin-left:20px;"
                                   > Declined to participate
                            <input name="en9"
                                   type="radio"
                                   value="prisoner"
                                   id="en9"
                                   style="margin-left:10px;" 
                                   > Prisoner
                                   <input name="en9"
                                   type="radio"
                                   value="mental"
                                   id="en9"
                                   style="margin-left:10px;" 
                                   > Severe Mental Illness 
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
           </div>
    </div>

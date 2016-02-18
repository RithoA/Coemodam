<div class="col-md-8 col-md-offset-2" style="margin-top:2.5%">
        <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="GET" action="{{ url('/eligibility') }}">
                    {!! csrf_field() !!}
                       <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Client Inclusion Criteria
                            </li>
                        </ol>
                       <div class="form-group{{ $errors->has('adult') ? ' has-error' : '' }}">
                           
                            <label for="elig_form"style="margin-left:30px;">1. Adult or paediatric client initiating first line ART regimen at the site
                            <br/>
                             <input checked="checked"
                                   name="q1"
                                   type="radio"
                                   value="yes"
                                   id="q1"
                                   style="margin-left:20px;"
                                   > Yes
                            <input name="q1"
                                   type="radio"
                                   value="no"
                                   id="q1"
                                   style="margin-left:10px;" 
                                   > No
                        </div>

                       <div class="form-group{{ $errors->has('ability') ? ' has-error' : '' }}">
                           
                            <label for="elig_form"style="margin-left:30px;">2. Ability to provide written informed consent for > 18 years
                            <br/>
                             <input checked="checked"
                                   name="q2"
                                   type="radio"
                                   value="yes"
                                   id="q2"
                                   style="margin-left:20px;"
                                   > Yes
                            <input name="q2"
                                   type="radio"
                                   value="no"
                                   id="q2"
                                   style="margin-left:10px;" 
                                   > No
                        </div>
                         <div class="form-group{{ $errors->has('willing') ? ' has-error' : '' }}">
                           
                            <label for="elig_form"style="margin-left:30px;">3. Parents or caregivers of recruited pediatric clients of over 10 years
                                                                      willing to provide written consent for their children to participate in the study
                            <br/>
                             <input checked="checked"
                                   name="q3"
                                   type="radio"
                                   value="yes"
                                   id="q3"
                                   style="margin-left:20px;"
                                   > Yes
                            <input name="q3"
                                   type="radio"
                                   value="no"
                                   id="q3"
                                   style="margin-left:10px;" 
                                   > No
                            <input name="q3"
                                   type="radio"
                                   value="na"
                                   id="q3"
                                   style="margin-left:10px;" 
                                   > N/A
                        </div>

                         <div class="form-group{{ $errors->has('adol') ? ' has-error' : '' }}">
                           
                            <label for="elig_form"style="margin-left:30px;">4. Adolescents 10-17 years willing to provide assent in addition to
                                                                                parental/caregiver informed written consent
                            <br/>
                             <input checked="checked"
                                   name="q4"
                                   type="radio"
                                   value="yes"
                                   id="q4"
                                   style="margin-left:20px;"
                                   > Yes
                            <input name="q4"
                                   type="radio"
                                   value="no"
                                   id="q4"
                                   style="margin-left:10px;" 
                                   > No
                            <input name="q4"
                                   type="radio"
                                   value="na"
                                   id="q4"
                                   style="margin-left:10px;" 
                                   > N/A
                        </div>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Client Exclusion Criteria
                            </li>
                        </ol>
                        <div class="form-group{{ $errors->has('parentref') ? ' has-error' : '' }}">
                           
                            <label for="elig_form"style="margin-left:30px;">1. Parents'/ Caregivers'/ Client's refusal to participate in the CEM study and
d                                                                                 id not consent
                            <br/>
                             <input 
                                   name="q5"
                                   type="radio"
                                   value="yes"
                                   id="q5"
                                   style="margin-left:20px;"
                                   > Yes
                            <input checked="checked"
                                   name="q5"
                                   type="radio"
                                   value="no"
                                   id="q5"
                                   style="margin-left:10px;" 
                                   > No
                        </div>

                        <div class="form-group{{ $errors->has('prisoner') ? ' has-error' : '' }}">
                           
                            <label for="elig_form"style="margin-left:30px;">2. Prisoner status
                            <br/>
                             <input 
                                   name="q6"
                                   type="radio"
                                   value="yes"
                                   id="q6"
                                   style="margin-left:20px;"
                                   > Yes
                            <input checked="checked"
                                   name="q6"
                                   type="radio"
                                   value="no"
                                   id="q6"
                                   style="margin-left:10px;" 
                                   > No
                        </div>

                        <div class="form-group{{ $errors->has('mental') ? ' has-error' : '' }}">
                           
                            <label for="elig_form"style="margin-left:30px;">3. Severe mental illness
                            <br/>
                             <input 
                                   name="q7"
                                   type="radio"
                                   value="yes"
                                   id="q7"
                                   style="margin-left:20px;"
                                   > Yes
                            <input checked="checked"
                                   name="q7"
                                   type="radio"
                                   value="no"
                                   id="q7"
                                   style="margin-left:10px;" 
                                   > No
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" href= "/hrio.manage_client#client_enrolment">
                                    <i class="fa fa-btn fa-user"> </i> Submit
                                </button>
                            </div>
                        </div>
                      </form>
                </div>
           </div>
    </div>

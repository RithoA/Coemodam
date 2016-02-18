@extends('layouts.generalhrio')
@section('options')
       
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="/hrio"><i class="fa fa-fw fa-dashboard"></i> Add Client</a>
                    </li>
                    <li>
                        <a href="/hrio_manage_clients"><i class="fa fa-fw fa-table"></i> Manage Clients</a>
                    </li>

                    <li>
                        <a href="/hrio_reports"><i class="fa fa-fw fa-edit"></i> Reports</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        @endsection

@section('content')

 <div id="page-wrapper">

            <div class="container-fluid">

            </div>
            <!-- /.container-fluid -->

<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                          <h1 class="page-header">
                            Manage Clients
                          </h1>
                        <ul class="nav nav-tabs">
                        <li class="active"><a href="#search_client" data-toggle="tab">Search Client</a></li>
                        <li><a href="#client_eligibility" data-toggle="tab">Client Eligibility Form</a></li>
                        <li><a href="#client_enrolment" data-toggle="tab">Client Enrolment Form</a></li>
                        <li><a href="#cem_baseline" data-toggle="tab">Baseline Questionnaire</a></li>
                        <li><a href="#conduct_followup" data-toggle="tab">Conduct Followup</a></li>
                        
                       </ul>
                        <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="search_client">

                         @include('hrio.manage_clients_search')

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="client_eligibility">

                            @include('hrio.manage_clients_eligform') 
                    
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="client_enrolment">

                             @include('hrio.manage_clients_enrolform') 

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="cem_baseline">

                             @include('hrio.manage_clients_baseque') 

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="conduct_followup">
                            <p> System age group reports</p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="cem_report">
                            <p> System reports</p>
                        </div>
                    </div>
                  </div>
                </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    @endsection
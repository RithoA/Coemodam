@extends('layouts.generaladmin')
@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    View Reports
                </h1>
                <div class="containers" id="nav_tab">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#all_reports" data-toggle="tab">All Reports</a></li>
                        <li><a href="#outcome_summary" data-toggle="tab">Outcome Summary</a></li>
                        <li><a href="#unenrolled_client" data-toggle="tab">Unenrolled Client</a></li>
                        <li><a href="#agegroup_report" data-toggle="tab">Age group Report</a></li>
                        <li><a href="#cem_report" data-toggle="tab">CEM End point Report</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="all_reports">
                            <p> System reports</p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="outcome_summary">
                            <p> System outcome summary</p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="unenrolled_client">
                            <p> System unenrolled reports</p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="agegroup_report">
                            <p> System age group reports</p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="cem_report">
                            <p> System reports</p>
                        </div>

                    </div >

                </div>

            </div>

        </div>
        <!-- /.row -->


    </div>
</div>

@endsection
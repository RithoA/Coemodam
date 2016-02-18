@extends('layouts.generaladmin')

@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Manage Clients
                </h1>
                <div class="containers" id="nav_tab">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#view_client" data-toggle="tab">View Clients</a></li>
                        <li class="active"><a href="#transfer_client" data-toggle="tab">Transfer Client</a></li>
                        <li><a href="#remove_client" data-toggle="tab">Remove client</a></li>
                    </ul>

                    <!--tab panes-->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="view_client">
                            <p> All clients</p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="transfer_client">
                            <p> Transfer client form client database</p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="remove_client">
                            <p> remove selected client from the database</p>
                        </div>

                    </div >


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
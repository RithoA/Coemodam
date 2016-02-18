 @extends('layouts.generalhrio')
 @section('options')
       
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="/hrio"><i class="fa fa-fw fa-dashboard"></i> Add Clients</a>
                    </li>
                    <li>
                        <a href="/hrio_manage_clients"><i class="fa fa-fw fa-table"></i>Manage Clients</a>
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

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Reports
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Reports
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
     @endsection
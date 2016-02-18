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

    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Include library's JS files -->
    <script src="vendor/pickadate/compressed/picker.js"></script>
    <script src="vendor/pickadate/compressed/picker.date.js"></script>
<form>

  <input id="date" name="date" type="text" placeholder="Choose a date">
  
  <input type="submit" value="Submit" class="btn btn-info btn-block">
</form>


<!-- After including the date picker scripts -->
<script>
  $(function() {
    // Enable Pickadate on an input field
    $('#date').pickadate();
  });   
</script>

        <!-- /#page-wrapper -->

@endsection
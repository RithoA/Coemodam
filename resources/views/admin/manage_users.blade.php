@extends('layouts.generaladmin')
@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Manage Users
                </h1>
                <div class="containers" id="nav_tab">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#create_user" data-toggle="tab">Create User</a></li>
                        <li><a href="#update_user" data-toggle="tab">Update User</a></li>
                        <li><a href="#delete_user" data-toggle="tab">Drop User</a></li>
                    </ul>
                    <!--tab panes-->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active"  id="create_user">
                            <div>
                                <form action="" method="POST" role="registration_form">
                                    <legend>Enter Details Here</legend>

                                    <div class="form-group">
                                        <label for="">Firstname</label>
                                        <input type="text"  name="firstname" class="form-control" id="" placeholder="Firstname">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Lastname</label>
                                        <input type="text"  name="lastname" class="form-control" id="" placeholder="Lastname">
                                    </div>

                                    <div class="form-group">
                                        <label for="sel1">Select Organisation (select one):</label>
                                        <select class="form-control" id="sel1">
                                            <option>Select Option</option>
                                            <option>NASCOP</option>
                                            <option>PPB</option>
                                            <option>MSH</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Tel:</label>
                                        <input type="text"  name="telephone" class="form-control" id="" placeholder="Telephone">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text"  name="email" class="form-control" id="" placeholder="email">
                                    </div>



                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade"  id="update_user">
                            <p> query from database</p>
                        </div>

                        <div role="tabpanel" class="tab-pane fade"  id="delete_user">
                            <p> drop user</p>
                        </div>

                    </div >


                </div>
            </div>
        </div>




    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

@endsection
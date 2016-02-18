  <div class="col-md-8 col-md-offset-2" style="margin-top:5.5%">
        <div class="panel panel-default">
                <div class="panel-body">

                   <form class="form-horizontal" role="form" method="GET" action="{{ url('/search')}}">
                        {!! csrf_field() !!}
                       <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>   Enter Client's CEM ID
                            </li>
                        </ol>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Cem Id</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="search" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
               </div>
            </div>
            <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="all_reports">
                                
                                @include('layouts.results')
                                
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="outcome_summary">
                                 
                            </div>

                            
                            
                        </div >
        </div>
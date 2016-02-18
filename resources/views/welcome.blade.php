@extends('layouts.app1')

@section('welcome')
<div style = 'background:rgba(0,0,0,0.3.5);position:absolute;top:0;bottom:0;right:0;left:0;z-index:-10;'></div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

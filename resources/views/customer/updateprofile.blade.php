@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">  
        @include('layouts.dashboard_sidebar')

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Update Profile</div>

                <div class="panel-body">
                    
                    <div class="pull-right">
                       <a href="#"> 
                        <button type='button' class='btn btn-sm btn-success'>Change Password</button>
                    </a>
                    </div>   
                    Update Details Here !!



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">  
        @include('layouts.dashboard_sidebar')

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                 <p><b>  Welcome {{ Auth::user()->name }} !! </b></p>
                 <p> This is PhoneColony Dashboard Area, from where you can post new ads update existing ads and update your personal details.</p>

                <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Account Status :</th>
                    <tr>
                <thead>
                <tbody>
                    <tr>
                    <td>Number of ads posted : </td>  
                    </tr>
                    <tr> 
                    <td>Buyer's New Messages : </td>   
                    </tr>
                    <tr>
                    <td>Number of Ad views : </td>   
                    </tr>
                    </tbody>        
                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

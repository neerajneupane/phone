@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">  
        @include('layouts.dashboard_sidebar')

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Delete Ad</div>

                <div class="panel-body">
                
             <p class="text-center">Do you really want to delete <b>{{ $product->title }}</b> from your Ads list?</p>

                 <form action="/delete/{{$product->id}}" method="POST">

        {{ csrf_field() }}

                    <div class="form-group" align="center" style="padding:10px;">
                    <input class="btn btn-danger btn-sm" type="submit" name="delete_ad" value="Yes, Delete!" />
                    <a href="/myAds" class="btn btn-success btn-sm" >No, that was a mistake!</a>
                    </div>
                 </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">  
        @include('layouts.dashboard_sidebar')

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">My Ads</div>

                <div class="panel-body">
                  
                	<table class="table table-bordered table-condensed table-stripped">
		<thead>
		
				<th></th>
				<th>S/N</th>
				<th>Title</th>
				<th>Price (Rs.)</th>
				<th>Image</th>
				<th>Posted</th>
				<th>New Queries</th>

		</thead>
		<tbody>
			@php
				$sn = 0;				
			@endphp
			@foreach(Auth::user()->products as $product)
                <tr  align="center">
                	<td>
						<a href="editproduct/{{ $product->id }}" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
						<a href="deleteproduct/{{ $product->id }}" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a>
					</td>
                  <td>{{ ++$sn }}</td>
                  <td>{{ $product->title }}</td>
                  <td>{{ $product->price }}</td>
                  <td><img class="img img-responsive img-show" src="/<?= $product->photo ?>" alt='image' height="80" width="60"></td>
                  <td>{{ $product->created_at->diffForHumans() }}</td>
                  <td><a href="/{{ $product->id }}/comments">{{ $product->messages }}</a></td>
                </tr>
            @endforeach
	</table>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
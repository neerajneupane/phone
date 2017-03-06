@extends('layouts.app')

	@section('content')

		@php
		$comments = DB::table('comments')->where('product_id',$product->id)->orderBy('created_at','desc')->get();
		$i = 0;
		@endphp

		@foreach($comments as $comments)
		<form method="POST" action="{{$comments->id}}/reply">
		 {{ csrf_field() }}
 <div class="container">
    <div class="row">  
        @include('layouts.dashboard_sidebar')
		
			<div class="col-md-6">
			<ul style="list-style-type: none">
				<li>
					<div class="panel panel-default">
						<div class="panel-heading">Queries on {{ $product->title }}</div>
						<div class="panel-body">
						@php
							$replies = App\Replies::where('comment_id',$comments->id)->orderBy('created_at','desc')->get();
						@endphp
							Q. {{ $comments->body}}
						<br>
							@foreach($replies as $reply)
							A. {{ $reply->body }}<br>
							@endforeach
							<input type="text" class="form-control" name="reply" required>
							<button type="submit">Reply</button>
							<!-- <a href="{{$comments->id}}/reply"><button class="btn btn-primary">Reply</button></a> -->
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	</div>	
		</form>
		

		@endforeach

	@endsection



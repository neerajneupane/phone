@extends('layouts.app')
@section('head')
<style type="text/css">
	.img-show{
		max-height:400px;
		margin: auto;
	}
	.img-mini{
		max-height:100px;
		margin: auto;
	}
	.ask-section{
		width: 100%;
		position: absolute;
		bottom: 0;
	}
	#question-pane{
		position: relative;
		height: 500px;
	}
	#line{
		display: inline-block;
		margin: auto;
		width: 100%;
	}
	li{
		list-style-type: none;
	}
	.img-container{
		align-content: center;
	}
</style>
@endsection

@section('content')
<div class="col-md-10 col-md-offset-1">
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default img-container">
				<div class="panel-heading">
				<img class="img img-responsive img-show" src="/<?= $product->photo ?>" alt='image'>
				</div>
				<div class="panel-body">
					<img class="img img-responsive img-mini" src="/images/image4.jpg" alt="image">			
				</div>	
			</div>
		</div>

		<div class="col-md-8">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h2>{{ $product->title }}</h2>
				</div>
				<div class="panel-body">
					<ul id="line">
						<li class="col-md-4">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							{{ $product->user->phone }}
						</li>
						<li class="col-md-4"> 
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							{{ $product->user->address }}
						</li>
						<li class="col-md-4">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							{{ $product->user->email }}
						</li>
					</ul>
					<hr>
					<h2><b>{{ "Rs.".$product->price }}</b></h2>
					<h4>Sold By : {{$product->user->name}}</h4>
					<h4>Ad posted on  : {{$product->created_at}}</h4>
					<h4>Total Ad Views  : {{$product->total_views}}</h4>
					<hr>

					<h3>Descriptions</h3>

				</div>
				
			</div>
			<div class="panel panel-success" >
				<div class="panel-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">

						<li role="presentation" class="active"><a href="#specs-pane" aria-controls="specs" role="tab" data-toggle="tab"><h4>Specifications</h4></a></li>
						<li role="presentation"><a href="#question-pane" aria-controls="questions" role="tab" data-toggle="tab"><h4>Questions</h4></a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="specs-pane">
							<ul id="specs-info">                     
								<li><h4 style="color:#777777;">Model:</h4></li>
								<li><h4 style="color:#777777;">Screen:</h4></li>
								<li><h4 style="color:#777777;">CPU: </h4></li>
								<li><h4 style="color:#777777;">Colour: </h4></li>
								<li><h4 style="color:#777777;">Rear Camera:</h4></li>
								<li><h4 style="color:#777777;">Front Camera:</h4></li>
								<li><h4 style="color:#777777;">RAM: </h4></li>
								<li><h4 style="color:#777777;">Internal Memory: </h4></li>
								<li><h4 style="color:#777777;">Battery Capacity:</h4></li>
								<li><h4 style="color:#777777;">Battery type: </h4></li>
							</ul>
						</div>

						<div role="tabpanel" class="tab-pane" id="question-pane" >
							<br>                          	
							<div id="db_questions" style="overflow: auto; height: 70%;">  	

								<ul>
									@php
										$comments = App\Comments::where('product_id',$product->id)->orderBy('created_at','desc')->get();
									@endphp
									@if($comments->count() == 0)
										{{'No questions have been asked yet.'}}
									@else
										@foreach($comments as $comment)
										<li>
											<h5>
												<div class="panel panel-default">
												<div class="panel-body">
													<div class="panel panel-default" style="margin:5px;width: 60%; float:left;">
														<div class="panel-body bg-info">
															{{ 'Q. '.$comment->body }}
															<small>
																{{ 'Asked by .'.$comment->user->name }}
																{{ $comment->created_at->diffForHumans()}}
															</small>														
														</div>  
													</div>
										@php
										$replies = App\Replies::where('comment_id',$comment->id)->orderBy('created_at','desc')->get();
										@endphp
														@foreach($replies as $reply)															
														<div class="panel panel-default" style="margin:5px;width: 60%; float:right;">
															<div class="panel-body bg-success">
																{{ $reply->body}}
																<small>
																{{ 'Replied on ' }}
																
															</small>	
															</div>
														</div>	
														@endforeach	
												</div>				
												</div>
											</h5>
										</li>					
										@endforeach
									@endif
								</ul>
							</div>
							<div class="ask-section">

								@if (Auth::guest())
								<a href="{{ route('login') }}">
									<button class="btn btn-success btn-lg btn-block">Sign in to ask a question</button>
								</a>

								@else 
								<form method="POST" action="/products/{{ $product->id }}/comment">
									{{ csrf_field() }}
									<div class="form-group">
										<input type="textarea" class="form-control" name="question" Placeholder="Ask a question" required>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-success btn-lg btn-block" class="form-control" >Ask a question</button>
									</div>

								</form>


								@endif

							</div>
						</div>

					</div>
					<!-- /. Tab Pans-->
				</div> 
			</div>
		</div>
	</div>
</div>
</div>
</div>
<div class="container">

</div>
</div>
@endsection

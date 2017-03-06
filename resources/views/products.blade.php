@extends('layouts.app')

@section('content')
<div class="blog-header">
	<div class="container">
		<marquee scrolldelay='2000' scrollamount='150'><h1 class="blog-title">A place for featured products</h1></marquee>
	</div>
</div>
<hr>

<div class="container">

		<!--SideBar-->
		@include('layouts.sidebar')
		<!--Main section-->
		<div class="col-md-9">
				<ul>
					@foreach($products as $product)
					<a href="products/{{ $product->id }}">
						<div class="col-md-9 panel panel-default">
							<div class="panel-body">
								<div class="col-md-3">
									<img class="img-thumb" src="/<?= $product->photo ?>" alt='image'>
								</div><br>	

						<div class="col-md-6">
							<p style="font-size:20px; font-family:Sans-serif;">	{{ $product->title}} </p><hr>
							<p style="font-size:13px; font-family:Sans-serif; color:#837e7e; max-height:39px; overflow: hidden;">{{ $product->description}}</p><hr>
							<p style="font-size:11px; font-family:Sans-serif; color:#837e7e;">Ad Views(1891)</p>
						</div>
							<p style="font-size:20px; color:#646060; font-family:Sans-serif;">Rs. {{ $product->price}} </p>
							<p>	<button type='button' class='btn btn-md btn-success'>View Details</button></p>
						
							</div>
						</div>
					</a>
					
					@endforeach
				</ul>		
			
		</div><!-- /.blog-main -->


</div><!-- /.container -->

@endsection

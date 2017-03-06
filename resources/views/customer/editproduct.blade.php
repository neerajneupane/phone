@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">  
        @include('layouts.dashboard_sidebar')

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Update Ad Details</div>

                <div class="panel-body">
                 
                	<form method="POST" action="/edit/{{$product->id}}" enctype="multipart/form-data">
		{{ csrf_field() }}

			<div class="form-group">
				<label>Ad Title: (Not more than 50 words)</label>
				<input type="text" class="form-control" name="title" maxlength="50" value="{{ $product->title }}" required/>
			</div>

			<div class="form-group">
				<label>Category: </label>
			<select name="category" class="form-control" />
				<option value="{{ $product->category }}">{{$product->category}}</option>
				@foreach ($categories as $category)
	  			<option value="{{$category->id}}">{{$category->name}}</option>
	  			@endforeach
			</select>
			</div>

			<div class="form-group">
				<label>Brand: </label>
			<select name="brand" class="form-control"/>
				<option value="{{ $product->brand }}">{{ $product->brand }}</option>
				@foreach ($brands as $brand)
	  			<option value="{{$brand->id}}">{{$brand->name}}</option>
	  			@endforeach
			</select>
			</div>
			
			<div class="form-group">
				<label>Price (Rs.): </label>
				<input type="text" name="price" class="form-control" value="{{ $product->price }}" required/>
			</div>

			<div class="form-group">
					<label>Condition: </label>
					<select name="condition" class="form-control" value="{{ $product->condition }}">
													<option value="{{ $product->condition }}">{{ $product->condition }}</option>
													<option value="Brand New (Not Used)">Brand New (Not Used)</option>
													<option value="Like New (Used Few Times)">Like New (Used Few Times)</option>
													<option value="Good/Fair">Good/Fair</option>
													<option value="Not Working">Not Working</option>
											</select>
			</div>
					
			<div class="form-group">
					<label>Used For: </label>
					<input type="text" name="used_days" class="form-control" placeholder="Used for how many days" value="{{ $product->used_days }}"/>
			</div>
			
			<div class="form-group">
						<label>Product Description: </label>
						<input type="text" class="form-control" name="description" value="{{ $product->description }}"/>
			</div>

			<div class="form-group">
				<label for="exampleInputFile">Product Image:</label>
				<img class="img img-responsive img-show" src="/<?= $product->photo ?>" alt='image' height="80px" width="60px">
				<input type="file" id="exampleInputFile" name='photo'>
			</div>


			<h3 class="text-center">Phone Specifications</h3><hr>

					<div class="form-group">
					<label>Model Name: </label>
					<input type="text" name="model" class="form-control" value="{{ $product->model }}"/>
					</div>
					
					<div class="form-group">
					<label>Screen: </label>
					<select name="screen" class="form-control" value="{{ $product->screen }}">
													<option value="{{ $product->screen }}">{{ $product->screen }}</option>
													<option value="No Touch">No Touch</option>
													<option value="Touch Screen">Touch Screen</option>
													<option value="4 inch - 4.7 inch">4 inch - 4.7 inch</option>
													<option value="4.8 inch - 5 inch">4.8 inch - 5 inch</option>
													<option value="5.1 inch - 5.5 inch">5.1 inch - 5.5 inch</option>
													<option value="5.6 inch & Above">5.6 inch & Above</option>
											</select>
					</div>
					
					<div class="form-group">
					<label>Rear Camera: </label>
					<select name="rear_camera" class="form-control" value="{{ $product->rear_camera }}">
													<option value="{{ $product->rear_camera }}">{{ $product->rear_camera }}</option>
													<option value="No Camera">No Camera</option>
													<option value="0.3 MP - 2 MP">0.3 MP - 2 MP</option>
													<option value="2.1 MP - 5 MP">2.1 MP - 5 MP</option>
													<option value="5.1 MP - 8 MP">5.1 MP - 8 MP</option>
													<option value="8.1 MP - 13 MP">8.1 MP - 13 MP</option>
													<option value="13.1 MP & Above">13.1 MP & Above</option>
											</select>
					</div>
					
					<div class="form-group">
					<label>Front Camera: </label>
					<select name="front_camera" class="form-control" value="{{ $product->front_camera }}">
													<option value="{{ $product->front_camera }}">{{ $product->front_camera }}</option>
													<option value="No Camera">No Camera</option>
													<option value="0.3 MP - 2 MP">0.3 MP - 2 MP</option>
													<option value="2.1 MP - 5 MP">2.1 MP - 5 MP</option>
													<option value="5.1 MP - 8 MP">5.1 MP - 8 MP</option>
													<option value="8.1 MP - 13 MP">8.1 MP - 13 MP</option>
													<option value="13.1 MP & Above">13.1 MP & Above</option>
											</select>
					</div>
					
					<div class="form-group">
					<label>CPU: </label>
					<select name="cpu" class="form-control" value="{{ $product->cpu }}">
													<option value="{{ $product->cpu }}">{{ $product->cpu }}</option>
													<option value="Dual Core">Dual Core</option>
													<option value="Quad Core">Quad Core</option>
													<option value="Octa Core">Octa Core</option>
													<option value="Hexa Core">Hexa Core</option>
													<option value="1 GHz - 1.3 GHz">1 GHz - 1.3 GHz</option>
													<option value="1.4 GHz - 1.6 GHz">1.4 GHz - 1.6 GHz</option>
													<option value="1.7 GHz and Above">1.7 GHz and Above</option>
											</select>
					</div>
					
					<div class="form-group">
					<label>RAM Size: </label>
					<select name="ram" class="form-control" value="{{ $product->ram }}">
													<option value="{{ $product->ram }}">{{ $product->ram }}</option>
													<option value="Below 1 GB">Below 1 GB</option>
													<option value="1 GB - 2 GB">1 GB - 2 GB</option>
													<option value="2.1 GB - 3 GB">2.1 GB - 3 GB</option>
													<option value="3.1 GB - 4 GB">3.1 GB - 4 GB</option>
													<option value="4.1 GB & Above">4.1 GB & Above</option>
											</select>
					</div>
					
					<div class="form-group">
					<label>Internal Memory: </label>
					<select name="internal_memory" class="form-control" value="{{ $product->internal_memory }}">
													<option value="{{ $product->internal_memory }}">{{ $product->internal_memory }}</option>
													<option value="Below 1 GB">Below 1 GB</option>
													<option value="1 GB - 4 GB">1 GB - 4 GB</option>
													<option value="4.1 GB - 8 GB">4.1 GB - 8 GB</option>
													<option value="8.1 GB - 16 GB">8.1 GB - 16 GB</option>
													<option value="16.1 GB & Above">16.1 GB & Above</option>
											</select>
					</div>
					
					<div class="form-group">
					<label>Battery Capacity: </label>
					<select name="battery_capacity" class="form-control" value="{{ $product->battery_capacity }}">
													<option value="{{ $product->battery_capacity }}">{{ $product->battery_capacity }}</option>
													<option value="Long Battery Backup">Long Battery Backup</option>
													<option value="Below 2000 mAh">Below 2000 mAh</option>
													<option value="2000 mAh - 2500 mAh">2000 mAh - 2500 mAh</option>
													<option value="2501 mAh - 3000 mAh">2501 mAh - 3000 mAh</option>
													<option value="3001 mAh & Above">3001 mAh & Above</option>
											</select>
					</div>
					
					<div class="form-group ">
					<label>Battery Type: </label>
					<select name="battery_type" class="form-control" value="{{ $product->battery_type }}">
													<option value="{{ $product->battery_type }}">{{ $product->battery_type }}</option>
													<option value="Removable Battery">Removable Battery</option>
													<option value="Non Removable Battery">Non Removable Battery</option>
											</select>
					</div>
					
					<div class="form-group ">
					<label>Color: </label>
					<input type="text" name="color" class="form-control" value="{{ $product->color }}"/>
					</div>

		<div class="form-group">
			<input type="submit" value="Update Now" name="edit_ad" class="btn btn-success">
			<a href="/dashboard" class="btn btn-danger" >Cancel</a>
		</div>

		
	</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

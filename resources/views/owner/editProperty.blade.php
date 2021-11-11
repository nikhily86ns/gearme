@extends('layouts.app')

@section('title')
	Update Property 
@endsection

@section('extra-css')
<style>
    .preview-image img
    {
          padding: 10px;
          max-width: 150px;
    }
  </style>
@endsection

@section('content')                      
<?php $data = $data[0]  ?> 

    <div class="container">     
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center"><h3>{{ __('Update Property') }}</h3></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('owner.editProperties') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $data->id }}" name="id">

										<div class="form-group">
											<label for="exampleFormControlInput1" class="mb-3">List property for*</label> <br>
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-outline-primary mr-5 rounded-pill">
													<input type="radio" name="propertyFor" value="sell" id="sell" autocomplete="off"  {{ $data->propertyFor == 'sell' ? 'checked' : '' }}> Sell
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="propertyFor" value="rent" id="rent" autocomplete="off" {{ $data->propertyFor == 'rent' ? 'checked' : '' }}> Rent
												</label>
											</div>
										</div>
										@error('propertyFor')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group">
										    <label for="ptype" class="mb-3">Property Type*</label>
											<select class="form-select" name="propertyType" id="type" aria-label="Default select example">
												<option selected class="nun">Select Property Type</option>
												<option class="bg-secondary text-white">** ALL RESIDENTIAL **</option>
													<option class="ar" value="Apartment" {{ $data->propertyType == 'Apartment' ? 'selected' : '' }}>Flat/ Apartment</option>
													<option class="ar" value="Residential House" {{ $data->propertyType == 'Residential House' ? 'selected' : '' }}>Residential House</option>
													<option class="ar" value="Villa" {{ $data->propertyType == 'Villa' ? 'selected' : '' }}>Villa</option>
													<option class="ar" value="Builder Floor Apartment" {{ $data->propertyType == 'Builder Floor Apartment' ? 'selected' : '' }}>Builder Floor Apartment</option>
													<option class="ar" value="Penthouse" {{ $data->propertyType == 'Penthouse' ? 'selected' : '' }}>Penthouse</option>
													<option class="ar" value="Studio Apartment" {{ $data->propertyType == 'Studio Apartment' ? 'selected' : '' }}>Studio Apartment</option>
													<option class="ar" value="Service Apartment" {{ $data->propertyType == 'Service Apartment' ? 'selected' : '' }}>Service Apartment</option>
												<option class="bg-secondary text-white">** ALL COMMERCIAL **</option>	
													<option class="ac" value="Commercial Office Space" {{ $data->propertyType == 'Commercial Office Space' ? 'selected' : '' }}>Commercial Office Space</option>
													<option class="ac" value="Office in IT Park/ SEZ " {{ $data->propertyType == 'Office in IT Park/ SEZ' ? 'selected' : '' }}>Office in IT Park/ SEZ</option>
													<option class="ac" value="Commercial Shop" {{ $data->propertyType == 'Commercial Shop' ? 'selected' : '' }}>Commercial Shop</option>
													<option class="ac" value="Commercial Showroom" {{ $data->propertyType == 'Commercial Showroom' ? 'selected' : '' }}>Commercial Showroom</option>
													<option class="ac" value="Commercial Land" {{ $data->propertyType == 'Commercial Land' ? 'selected' : '' }}>Commercial Land</option>
													<option class="ac" value="Warehouse/ Godown" {{ $data->propertyType == 'Warehouse/ Godown' ? 'selected' : '' }}>Warehouse/ Godown</option>
													<option class="ac" value="Industrial Land" {{ $data->propertyType == 'Industrial Land' ? 'selected' : '' }}>Industrial Land</option>
													<option class="ac" value="Industrial Building" {{ $data->propertyType == 'Industrial Building' ? 'selected' : '' }}>Industrial Building</option>
													<option class="ac" value="Industrial Shed" {{ $data->propertyType == 'Industrial Shed' ? 'selected' : '' }}>Industrial Shed</option>
													<option class="ac" value="Co-working Space" {{ $data->propertyType == 'Co-working Space' ? 'selected' : '' }}>Co-working Space</option>
												<option class="bg-secondary text-white">** ALL AGRICULTURAL **</option>	
													<option class="aa" value="Agricultural Land" {{ $data->propertyType == 'Agricultural Land' ? 'selected' : '' }}>Agricultural Land</option>
													<option class="aa" value="Farm House" {{ $data->propertyType == 'Farm House' ? 'selected' : '' }}>Farm House</option>
											</select>
										</div>
										@error('propertyType')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<h5>Property Details</h5>
										<div class="form-group">
											<label for="exampleInputPassword1">City*</label>
    										<input type="text" class="form-control" id="city" name="city" value="{{ $data->city }}" placeholder="Enter City">
										</div>
										@error('city')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group"id="lockin">
											<label for="exampleInputPassword1">Lock-in-period*</label>
    										<input type="text" class="form-control" id="lock" value="{{ $data->lock }}" name="lock" placeholder="Enter In Years">
										</div>
										<div class="form-group" id="cafeterias">
											<label for="exampleInputPassword1" class="mb-3">Pantry/Cafeteria*</label> <br>
    										<div class="btn-group btn-group-toggle"  data-toggle="buttons">
												<label class="btn btn-outline-primary mr-5 rounded-pill">
													<input type="radio" name="cafeteria" value="dry" id="dry" autocomplete="off" {{ $data->cafeteria == 'dry' ? 'checked' : '' }}> Dry
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="cafeteria" value="wet" id="wet" autocomplete="off" {{ $data->cafeteria == 'wet' ? 'checked' : '' }}> Wet
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="cafeteria" value="not available" id="notavailable" autocomplete="off" {{ $data->cafeteria == 'not available' ? 'checked' : '' }}> Not Available
												</label>
											</div>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Locality*</label>
    										<input type="text" class="form-control" id="locality" value="{{ $data->locality }}" name="locality" placeholder="Enter Locality">
										</div>
										@error('locality')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group" id="bhks">
											<label for="exampleFormControlInput1" class="mb-3">Unit Type*</label> <br>
											<div class="btn-group btn-group-toggle"  data-toggle="buttons">
												<label class="btn btn-outline-primary mr-5 rounded-pill">
													<input type="radio" name="unitType" value="1rk" id="1rk" autocomplete="off" {{ $data->unitType == '1rk' ? 'checked' : '' }}> 1RK
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="unitType" value="1bhk" id="1bhk" autocomplete="off" {{ $data->unitType == '1bhk' ? 'checked' : '' }}> 1BHK
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="unitType" value="2bhk" id="2bhk" autocomplete="off" {{ $data->unitType == '2bhk' ? 'checked' : '' }}> 2BHK
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="unitType" value="3bhk" id="3bhk" autocomplete="off" {{ $data->unitType == '3bhk' ? 'checked' : '' }}> 3BHK
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="unitType" value="4bhk" id="4bhk" autocomplete="off" {{ $data->unitType == '4bhk' ? 'checked' : '' }}> 4+BHK
												</label>
											</div>
										</div>
										@error('unitType')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group" id="areas">
											<label for="exampleInputPassword1">Area*</label>
    										<input type="text" class="form-control" value="{{ $data->area }}" id="area" name="area" placeholder="Enter Area in Sq.ft">
										</div>
										@error('area')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group">
											<label for="exampleInputPassword1">Property Price*</label>
											<input type="text" class="form-control" value="{{ $data->price }}" id="price" name="price" placeholder="Enter Price">
										</div>
										@error('price')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group">
											<label class="mb-3" for="image">Add Photos of your property*</label><br>
											<input type="file" name="images[]" id="images" placeholder="Choose images" multiple>
										</div>
										@error('images')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="col-md-12">
											<div class="mt-1 text-center">
												<div class="preview-image"> </div>
											</div>  
										</div>
										<div class="form-group" id="bathrooms">
											<label for="exampleFormControlInput1" class="mb-3">No of Bathrooms*</label> <br>
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-outline-primary mr-5 rounded-pill">
													<input type="radio" name="bathroom" value="1" id="1bath" autocomplete="off"  {{ $data->bathroom == '1' ? 'checked' : '' }}> 1
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="bathroom" value="2" id="2bath" autocomplete="off"  {{ $data->bathroom == '2' ? 'checked' : '' }}> 2
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="bathroom" value="3" id="3bath" autocomplete="off"  {{ $data->bathroom == '3' ? 'checked' : '' }}> 3
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="bathroom" value="4" id="4bath" autocomplete="off"  {{ $data->bathroom == '4' ? 'checked' : '' }}> 4
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="bathroom" value="4+" id="bath" autocomplete="off"  {{ $data->bathroom == '4+' ? 'checked' : '' }}> 4+
												</label>
											</div>
										</div>
										@error('bathroom')
											<small id="bathroom" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<hr>
										<h5>Property Features</h5>
										<div class="form-group" id="furnish">
											<label for="exampleFormControlInput1" class="mb-3">Furnishing*</label> <br>
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-outline-primary mr-5 rounded-pill">
													<input type="radio" name="furnishing" value="fullFurnished" id="fullfurnished" autocomplete="off" {{ $data->furnishing == 'fullFurnished' ? 'checked' : '' }}> Full Furnished
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="furnishing" value="semiFurnished" id="semifurnished" autocomplete="off" {{ $data->furnishing == 'semiFurnished' ? 'checked' : '' }}> Semi Furnished
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="furnishing" value="unFurnished" id="unfurnished" autocomplete="off" {{ $data->furnishing == 'unFurnished' ? 'checked' : '' }}> UnFurnished
												</label>
											</div>
										</div>
										@error('furnishing')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group">
											<label class="mb-3" for="image">Add Photos of your property*</label><br>
											<input type="file" name="images[]" id="images" placeholder="Choose images" multiple>
										</div>
										<div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel">
											<div class="carousel-inner">
												@if($data->image)
													@foreach(json_decode($data->image) as $key=>$res)
														@if($key == 0)
															<div class="carousel-item active">
																<img class="d-block w-100"  src="{{ asset('property/'. $res) }}"/>
															</div>
														@else
														<div class="carousel-item">
															<img class="d-block w-100"  src="{{ asset('property/'. $res) }}"/>
														</div>
														@endif
													@endforeach
												@else
												@endif
											</div>
											<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
										<div class="col-md-12">
											<div class="mt-1 text-center">
												<div class="preview-image"> </div>
											</div>  
										</div>
										<div class="form-group" id="balcony">
											<label for="exampleFormControlInput1" class="mb-3">No of Balconies*</label> <br>
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-outline-primary mr-5 rounded-pill">
													<input type="radio" name="balconies" value="0" id="1bal" autocomplete="off"  {{ $data->balconies == '0' ? 'checked' : '' }}> 0
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="balconies" value="1" id="2bal" autocomplete="off"  {{ $data->balconies == '1' ? 'checked' : '' }}> 1
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="balconies" value="2" id="3bal" autocomplete="off"  {{ $data->balconies == '2' ? 'checked' : '' }}> 2
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="balconies" value="3" id="4bal" autocomplete="off"  {{ $data->balconies == '3' ? 'checked' : '' }}> 3
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="balconies" value="4+" id="bal" autocomplete="off"  {{ $data->balconies == '4+' ? 'checked' : '' }}> 4+
												</label>
											</div>
										</div>
										@error('balconies')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group" id="parkings">
											<label for="exampleFormControlInput1" class="mb-3">Parking*</label> <br>
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-outline-primary mr-5 rounded-pill">
													<input type="radio" name="parking" value="twoWheeler" id="2w" autocomplete="off" {{ $data->parking == 'twoWheeler' ? 'checked' : '' }}> Two Wheeler
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="parking" value="fourWheeler" id="4w" autocomplete="off" {{ $data->parking == 'fourWheeler' ? 'checked' : '' }}> Four Wheeler
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="parking" value="both" id="both" autocomplete="off" {{ $data->parking == 'both' ? 'checked' : '' }}> Both
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="parking" value="none" id="none" autocomplete="off" {{ $data->parking == 'none' ? 'checked' : '' }}> None
												</label>
											</div>
										</div>
										@error('parking')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<hr>
										<h5>More Information of your property</h5>
										<div class="form-group">
											<label for="exampleFormControlTextarea1">About Property*</label>
											<textarea class="form-control" value="{{old('about')}}" id="exampleFormControlTextarea1" name="about" rows="3" placeholder="About Property (Min 30 Characters*)">{{ $data->about }}</textarea>
										</div>
										@error('about')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<h5>Your Details</h5>
										<div class="form-group">
											<label for="exampleFormControlInput1" class="mb-3">You Are*</label> <br>
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-outline-primary mr-5 rounded-pill">
													<input type="radio" name="postedBy" value="owner" id="owner" autocomplete="off" {{ $data->posted_by == 'owner' ? 'checked' : '' }}> Owner
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="postedBy" value="agent" id="agnet" autocomplete="off" {{ $data->posted_by == 'agent' ? 'checked' : '' }}> Agent
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="postedBy" value="builder" id="builder" autocomplete="off" {{ $data->posted_by == 'builder' ? 'checked' : '' }}> Builder
												</label>
											</div>
										</div>
										@error('postedBy')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<input type="hidden" name="uid" value="{{ Auth::user()->id }}">
										<div class="form-group">
											<label for="exampleInputPassword1">Name*</label>
    										<input type="text" class="form-control" id="names" name="name" placeholder="Enter Name" value="{{ Auth::user()->name }}">
										</div>
										@error('name')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group">
											<label for="exampleInputPassword1">Email*</label>
    										<input type="text" class="form-control" id="emails" name="email" placeholder="Enter Email" value="{{ Auth::user()->email }}">
										</div>
										@error('email')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group">
											<label for="exampleInputPassword1">Mobile No.*</label>
    										<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Mobile No." value="{{ Auth::user()->phone }}">
										</div>
										@error('phone')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			<!-- <div class="col-md-4">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						@if($data->image)
							@foreach(json_decode($data->image) as $key=>$res)
								@if($key == 0)
									<div class="carousel-item active">
										<img class="d-block w-100"  src="{{ asset('property/'. $res) }}"/>
									</div>
								@else
								<div class="carousel-item">
									<img class="d-block w-100"  src="{{ asset('property/'. $res) }}"/>
								</div>
								@endif
							@endforeach
						@else
						@endif
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div> -->
        </div>
    </div>


@endsection

@section('extra-script')

<script>  
	$(function() {
		// Multiple images preview with JavaScript
		var multiImgPreview = function(input, imgPreviewPlaceholder) {
			if (input.files) {
				var filesAmount = input.files.length;
				for (i = 0; i < filesAmount; i++) {
					var reader = new FileReader();
					reader.onload = function(event) {
						$($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
					}
					reader.readAsDataURL(input.files[i]);
				}
			}
		};
		$('#images').on('change', function() {
			multiImgPreview(this, 'div.preview-image');
		});
	});  
</script>


<script>
	$(document).ready(function(){
		$("#cafeterias").hide();
		$("#areas").hide();
		$("#lockin").hide();
		$("#bhks").hide();
		$("#bathrooms").hide();
		$("#furnish").hide();
		$("#balcony").hide();
		$("#parkings").hide();
	});
	
	$('#type').on('change', function() {
		var res =  $(this).children("option:selected").attr('class');
		if(res == 'ar'){
			$("#cafeterias").hide();
			$("#areas").hide();
			$("#lockin").hide();
			$("#bhks").show();
			$("#bathrooms").show();
			$("#furnish").show();
			$("#balcony").show();
			$("#parkings").show();
		}
		if(res == 'ac'){
			$("#bhks").hide();
			$("#areas").hide();
			$("#cafeterias").show();
			$("#lockin").show();
			$("#bathrooms").show();
			$("#furnish").show();
			$("#balcony").show();
			$("#parkings").show();
		}
		if(res == 'aa'){
			$("#areas").show();
			$("#cafeterias").hide();
			$("#lockin").hide();
			$("#bhks").hide();
			$("#bathrooms").hide();
			$("#furnish").hide();
			$("#balcony").hide();
			$("#parkings").hide();
		}
		if(res == 'nun'){
			$("#cafeterias").hide();
			$("#areas").hide();
			$("#lockin").hide();
			$("#bhks").hide();
			$("#bathrooms").hide();
			$("#furnish").hide();
			$("#balcony").hide();
			$("#parkings").hide();
		}
	});
</script>
@endsection
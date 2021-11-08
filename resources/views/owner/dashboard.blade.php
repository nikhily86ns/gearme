@extends('owner.master')

@section('title')
	Dashboard
@endsection

@section('extra-css')
@endsection

@section('content')

			
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<h4>Your Current Package: <span class="pc-title theme-cl">Gold Package</span></h4>
								</div>
							</div>
							
							<div class="row">
					
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-1">
										<div class="dashboard-stat-content"><h4>607</h4> <span>Listings Included</span></div>
										<div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-2">
										<div class="dashboard-stat-content"><h4>102</h4> <span>Listings Remaining</span></div>
										<div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-3">
										<div class="dashboard-stat-content"><h4>70</h4> <span>Featured Included</span></div>
										<div class="dashboard-stat-icon"><i class="ti-user"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-4">
										<div class="dashboard-stat-content"><h4>30</h4> <span>Featured Remaining</span></div>
										<div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-5">
										<div class="dashboard-stat-content"><h4>Unlimited</h4> <span>Images / per listing</span></div>
										<div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-6">
										<div class="dashboard-stat-content"><h4>2021-02-26</h4> <span>Ends On</span></div>
										<div class="dashboard-stat-icon"><i class="ti-user"></i></div>
									</div>	
								</div>

							</div>
					
							<div class="dashboard-wraper">
							
								<!-- Basic Information -->
								<div class="form-submit">	
									<h4>My Account</h4>
									<div class="submit-section">
										<form action="updateOwnerProfile" method="POST" enctype="multipart/form-data">
										 @csrf
											<div class="row">
											
												<div class="form-group col-md-6">
													<label>Your Name</label>
													<input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
												</div>
												
												<div class="form-group col-md-6">
													<label>Email</label>
													<input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
												</div>
												
												<div class="form-group col-md-6">
													<label>Your Title</label>
													<input type="text" name="" class="form-control" value="{{ Auth::user()->roles == 1 ? 'Property Owner' : '' }}">
												</div>
												
												<div class="form-group col-md-6">
													<label>Phone</label>
													<input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone }}">
												</div>
												
												<div class="form-group col-md-6">
													<label>Address</label>
													<input type="text" name="address" class="form-control" value="{{ Auth::user()->address }}">
												</div>
												
												<div class="form-group col-md-6">
													<label>City</label>
													<input type="text" name="city" class="form-control" value="{{ Auth::user()->city }}">
												</div>
												
												<div class="form-group col-md-6">
													<label>State</label>
													<input type="text" name="state" class="form-control" value="{{ Auth::user()->state }}">
												</div>
												
												<div class="form-group col-md-6">
													<label>Zip</label>
													<input type="text" name="zip" class="form-control" value="{{ Auth::user()->zip }}">
												</div>
												
												<div class="form-group col-md-12">
													<label>About</label>
													<textarea class="form-control" name="about">{{ Auth::user()->about }}</textarea>
												</div>
												
											</div>
										
									</div>
								</div>
								
								<div class="form-submit">	
									<h4>Social Accounts</h4>
									<div class="submit-section">
										<div class="row">
										
											<div class="form-group col-md-6">
												<label>Facebook</label>
												<input type="text" name="facebook" class="form-control" value="{{ Auth::user()->facebook }}">
											</div>
											
											<div class="form-group col-md-6">
												<label>Twitter</label>
												<input type="text" name="twitter" class="form-control" value="{{ Auth::user()->twitter }}">
											</div>
											
											<div class="form-group col-md-6">
												<label>Google Plus</label>
												<input type="text" name="google" class="form-control" value="{{ Auth::user()->google }}">
											</div>
											
											<div class="form-group col-md-6">
												<label>LinkedIn</label>
												<input type="text" name="linkedin" class="form-control" value="{{ Auth::user()->linkedin }}">
											</div>
											
											<div class="form-group col-lg-12 col-md-12">
												<button class="btn btn-theme-light-2 rounded" type="submit">Save Changes</button>
											</div>
											
										</div>
										</form>
									</div>
								</div>
								
							</div>
						
			<!-- ============================ User Dashboard End ================================== -->

			<!-- ============================ Post Property Form ================================== -->

			<section>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="d-flex justify-content-center">
								<div class="col-lg-8 col-md-8 col-sm-10">
									<h3>Post Property</h3>
									<p>Sell/Rent your property in Simple Steps</p>
									<hr>
									<h5>Tell us about your property</h5>
									<form action="{{ route('owner.property') }}" method="POST" enctype="multipart/form-data">
									  @csrf
										<div class="form-group">
											<label for="exampleFormControlInput1" class="mb-3">List property for*</label> <br>
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-outline-primary mr-5 rounded-pill">
													<input type="radio" name="propertyFor" value="sell" id="sell" autocomplete="off"> Sell
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="propertyFor" value="rent" id="rent" autocomplete="off"> Rent
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
													<option class="ar" value="Apartment">Flat/ Apartment</option>
													<option class="ar" value="Residential House">Residential House</option>
													<option class="ar" value="Villa">Villa</option>
													<option class="ar" value="Builder Floor Apartment">Builder Floor Apartment</option>
													<option class="ar" value="Penthouse">Penthouse</option>
													<option class="ar" value="Studio Apartment">Studio Apartment</option>
													<option class="ar" value="Service Apartment">Service Apartment</option>
												<option class="bg-secondary text-white">** ALL COMMERCIAL **</option>	
													<option class="ac" value="Commercial Office Space">Commercial Office Space</option>
													<option class="ac" value="Office in IT Park/ SEZ ">Office in IT Park/ SEZ</option>
													<option class="ac" value="Commercial Shop">Commercial Shop</option>
													<option class="ac" value="Commercial Showroom">Commercial Showroom</option>
													<option class="ac" value="Commercial Land">Commercial Land</option>
													<option class="ac" value="Warehouse/ Godown">Warehouse/ Godown</option>
													<option class="ac" value="Industrial Land">Industrial Land</option>
													<option class="ac" value="Industrial Building">Industrial Building</option>
													<option class="ac" value="Industrial Shed">Industrial Shed</option>
													<option class="ac" value="Co-working Space">Co-working Space</option>
												<option class="bg-secondary text-white">** ALL AGRICULTURAL **</option>	
													<option class="aa" value="Agricultural Land">Agricultural Land</option>
													<option class="aa" value="Farm House">Farm House</option>
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
    										<input type="text" class="form-control" id="city" name="city" value="{{old('city')}}" placeholder="Enter City">
										</div>
										@error('city')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group"id="lockin">
											<label for="exampleInputPassword1">Lock-in-period*</label>
    										<input type="text" class="form-control" id="lock" value="{{old('lockin')}}" name="lock" placeholder="Enter In Years">
										</div>
										<div class="form-group" id="cafeterias">
											<label for="exampleInputPassword1" class="mb-3">Pantry/Cafeteria*</label> <br>
    										<div class="btn-group btn-group-toggle"  data-toggle="buttons">
												<label class="btn btn-outline-primary mr-5 rounded-pill">
													<input type="radio" name="cafeteria" value="dry" id="dry" autocomplete="off"> Dry
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="cafeteria" value="wet" id="wet" autocomplete="off"> Wet
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="cafeteria" value="not available" id="notavailable" autocomplete="off"> Not Available
												</label>
											</div>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Locality*</label>
    										<input type="text" class="form-control" id="locality" value="{{old('locality')}}" name="locality" placeholder="Enter Locality">
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
													<input type="radio" name="unitType" value="1rk" id="1rk" autocomplete="off"> 1RK
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="unitType" value="1bhk" id="1bhk" autocomplete="off"> 1BHK
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="unitType" value="2bhk" id="2bhk" autocomplete="off"> 2BHK
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="unitType" value="3bhk" id="3bhk" autocomplete="off"> 3BHK
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="unitType" value="4bhk" id="4bhk" autocomplete="off"> 4+BHK
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
    										<input type="text" class="form-control" value="{{old('area')}}" id="area" name="area" placeholder="Enter Area in Sq.ft">
										</div>
										@error('area')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group">
											<label for="exampleInputPassword1">Property Price*</label>
											<input type="text" class="form-control" value="{{old('price')}}" id="price" name="price" placeholder="Enter Price">
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
													<input type="radio" name="bathroom" value="1" id="1bath" autocomplete="off"> 1
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="bathroom" value="2" id="2bath" autocomplete="off"> 2
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="bathroom" value="3" id="3bath" autocomplete="off"> 3
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="bathroom" value="4" id="4bath" autocomplete="off"> 4
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="bathroom" value="4+" id="bath" autocomplete="off"> 4+
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
													<input type="radio" name="furnishing" value="fullFurnished" id="fullfurnished" autocomplete="off"> Full Furnished
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="furnishing" value="semiFurnished" id="semifurnished" autocomplete="off"> Semi Furnished
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="furnishing" value="unFurnished" id="unfurnished" autocomplete="off"> UnFurnished
												</label>
											</div>
										</div>
										@error('furnishing')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group" id="balcony">
											<label for="exampleFormControlInput1" class="mb-3">No of Balconies*</label> <br>
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-outline-primary mr-5 rounded-pill">
													<input type="radio" name="balconies" value="0" id="1bal" autocomplete="off"> 0
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="balconies" value="1" id="2bal" autocomplete="off"> 1
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="balconies" value="2" id="3bal" autocomplete="off"> 2
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="balconies" value="3" id="4bal" autocomplete="off"> 3
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="balconies" value="4+" id="bal" autocomplete="off"> 4+
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
													<input type="radio" name="parking" value="twoWheeler" id="2w" autocomplete="off"> Two Wheeler
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="parking" value="fourWheeler" id="4w" autocomplete="off"> Four Wheeler
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="parking" value="both" id="both" autocomplete="off"> Both
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="parking" value="none" id="none" autocomplete="off"> None
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
											<textarea class="form-control" value="{{old('about')}}" id="exampleFormControlTextarea1" name="about" rows="3" placeholder="About Property (Min 30 Characters*)">{{old('about')}}</textarea>
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
													<input type="radio" name="postedBy" value="owner" id="owner" autocomplete="off"> Owner
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="postedBy" value="agent" id="agnet" autocomplete="off"> Agent
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="postedBy" value="builder" id="builder" autocomplete="off"> Builder
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

										<div class="mt-5 text-center">
											<button class="btn btn-primary" type="submit">Post Ad Now</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-12 mt-3">
							<div class="d-flex justify-content-center">
								<div>
									<h3 class="mt-4">View Your Properties</h3>
								</div>
							</div>
							<div class="d-flex justify-content-center">
								<div>
									<a href="/viewOwnerProperty/{{ Auth::user()->id }}" class="btn btn-info mt-3">Click Here</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- ============================ Post Property Form End ================================== -->

	
@endsection

@section('extra-script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
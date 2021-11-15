@extends('owner.master')

@section('title')
	Dashboard
@endsection

@section('extra-css')
@endsection

@section('content')

			
							<!-- <div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<h4>Your Current Package: <span class="pc-title theme-cl">Gold Package</span></h4>
								</div>
							</div> -->
							
							<div class="row">
					
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-1">
										<div class="dashboard-stat-content"><h4>
										@if($data)
											{{ $data['totalProperties'] }}
										@else
											{{ 0 }}
										@endif
										</h4> <span>Total Properties</span></div>
										<div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-2">
										<div class="dashboard-stat-content"><h4>
										@if($data)
											{{ $data['approvedProperties'] }}
										@else
											{{ 0 }}
										@endif
										</h4> <span>Approved Properties</span></div>
										<div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
									</div>	
								</div>
								
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="dashboard-stat widget-3">
										<div class="dashboard-stat-content"><h4>
										@if($data)
											{{ $data['notApprovedProperties'] }}
										@else
											{{ 0 }}
										@endif
										</h4> <span>Not Approved Properties</span></div>
										<div class="dashboard-stat-icon"><i class="ti-user"></i></div>
									</div>	
								</div>
								<!-- 								
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
								</div> -->

							</div>
					
							<div class="dashboard-wraper">
							
								<!-- Basic Information -->
								<div class="form-submit">	
									<h4>My Account</h4>
									<div class="submit-section">
										<form action="{{ route('owner.updateProfile') }}" method="POST" enctype="multipart/form-data">
										 @csrf
											<div class="row">
											
												<div class="form-group col-md-6">
													<label>Your Name</label>
													<input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
												</div>
												
												<div class="form-group col-md-6">
													<label>Email</label>
													<input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
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


	
@endsection

@section('extra-script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- <script>  
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
</script> -->

<!-- <script>
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
</script> -->
@endsection
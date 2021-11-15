@extends('provider.master')

@section('title')
	Profile
@endsection

@section('extra-css')
@endsection

@section('content')

							<div class="dashboard-wraper">
							
								<!-- Basic Information -->
								<div class="form-submit">	
									<h4>My Account</h4>
									<div class="submit-section">
										<form action="updateProviderProfile" method="POST" enctype="multipart/form-data">
										@csrf
											<div class="image-upload d-flex flex-column align-items-center text-center p-3 py-5">
												<label for="file-input">
													<img class="rounded-circle mt-5" title="Click To Upload New Image" width="200px" height="200px" src="{{ asset('profile/'. Auth::user()->profileimage) }}"/>
													<img src="{{ asset('img/profile.png') }}" height="40px" width="40px" style="    
															background: #fff;
															margin-top: 185px;
															right: 45px;
															position: relative;
															border-radius: 25px;
															cursor: pointer;">
												</label>
												<input id="file-input" class="mt-3" name="file" style="display:none;" type="file" />
											</div>
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
													<input type="text" name="" class="form-control" value="{{ Auth::user()->roles == 2 ? 'Capital Provider' : '' }}">
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

@endsection

@section('extra-script')
@endsection
@extends('layouts.app')

@section('title')
	Property Owner
@endsection

@section('extra-css')
@endsection

@section('content')

<?php $data = $data[0]  ?>

<!-- ============================ Page Title Start================================== -->
<div class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Welcome!</h2>
							<span class="ipn-subtitle">Welcome To Your Account</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			

  			 <!-- ============================ User Dashboard Start================================== -->
   			<section class="bg-light">
				<div class="container-fluid">
				
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="filter_search_opt">
								<a href="javascript:void(0);" onclick="openFilterSearch()">Dashboard Navigation<i class="ml-2 ti-menu"></i></a>
							</div>
						</div>
					</div>
								
					<div class="row">
						
						<div class="col-lg-3 col-md-12">
							
							<div class="simple-sidebar sm-sidebar" id="filter_search">
								
								<div class="search-sidebar_header">
									<h4 class="ssh_heading">Close Filter</h4>
									<button onclick="closeFilterSearch()" class="w3-bar-item w3-button w3-large"><i class="ti-close"></i></button>
								</div>
								
								<div class="sidebar-widgets">
									<div class="dashboard-navbar">
										
										<div class="d-user-avater">
											<img src="{{ asset('profile/'. Auth::user()->profileimage) }}" class="img-fluid avater" alt="">
											<h4>{{ Auth::user()->name }}</h4>
											<span>{{ Auth::user()->country }}</span>
										</div>
										
										<div class="d-navigation">
											<ul>
												<li class="{{ Request::is('dashboardOwner') ? 'active' : '' }}"><a href="{{ route('owner.dashboard') }}"><i class="ti-dashboard"></i>Dashboard</a></li>
												<li class="{{ Request::is('ownerProfile') ? 'active' : '' }}"><a href="{{ route('owner.profile') }}"><i class="ti-user"></i>My Profile</a></li>
												<li><a href="bookmark-list.html"><i class="ti-bookmark"></i>Bookmarked Listings</a></li>
												<li><a href="my-property.html"><i class="ti-layers"></i>My Properties</a></li>
												<li><a href="submit-property-dashboard.html"><i class="ti-pencil-alt"></i>Submit New Property</a></li>
												<li><a href="change-password.html"><i class="ti-unlock"></i>Change Password</a></li>
												<li><a href="#"><i class="ti-power-off"></i>Log Out</a></li>
											</ul>
										</div>
										
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-9 col-md-12">
							
							<!-- <div class="row">
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

							</div> -->
					
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
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ User Dashboard End ================================== -->
<!-- <div class="container rounded bg-white">
    <div class="row">
                <div class="col-md-3 border-right">  
        <form action="updateOwnerProfile" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="image-upload d-flex flex-column align-items-center text-center p-3 py-5">
                        <label for="file-input">
                            <img class="rounded-circle mt-5" width="200px" height="200px" src="{{ asset('profile/'. $data->profileimage) }}"/>
                            <span>
                            <button type="button" id="pop" class="btn btn-info mt-3 btn-sm" data-toggle="modal" data-target="#imagemodal">
                                View Full Photo
                            </button>
                            </span>
                        </label>
                        <input id="file-input" class="mt-3" name="file" type="file" />
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12"><label class="labels">First Name</label><input type="text" class="form-control" name="name" value="{{ $data->name }}"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" name="phone" value="{{ $data->phone }}"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 mt-2"><label class="labels">Email ID</label><input type="text" class="form-control" name="email" value="{{ $data->email }}" readonly></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Country</label><input type="text" class="form-control" name="country" value="{{ $data->country }}"></div>
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary" type="submit" value="submit">Save Profile</button>
                            </div>
                    </div>
                </div>
        </form>
                <div class="col-md-3 py-5 border-right">
                    <form action="/resetOwnerPassword" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12"><label class="labels">Email ID</label><input type="email" class="form-control" name="email" value="{{ $data->email }}" readonly="true"></div>
                        <div class="col-md-12 mt-2"><label class="labels">Enter New Password</label><input type="password" class="form-control" name="password" placeholder="Enter New Password"></div>
                        <div class="mt-3 text-center">
                             <button class="btn btn-danger" type="submit">Reset Password</button>
                        </div>
                    </form>
                </div>
    </div>
</div>

<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Image Preview</h5>
      </div>
      <div class="modal-body">
        <img src="{{ asset('profile/'. $data->profileimage) }}" id="imagepreview" style="width: 100%; height: 100%;" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="closemodal" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->

@endsection

@section('extra-script')
@endsection
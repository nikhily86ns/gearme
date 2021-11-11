@extends('provider.master')

@section('title')
	Capital Provider
@endsection

@section('extra-css')
@endsection

@section('content')

			<!-- ============================ Post Plans Form ================================== -->
							<div class="dashboard-wraper">
								
								<div class="row">
									
									<!-- Submit Form -->
									<div class="col-lg-12 col-md-12">
									
										<div class="submit-page">
											
											<!-- Basic Information -->
                                            <form action="{{ route('provider.postPlan') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="uid" value="{{ Auth::user()->id }}">

                                                <div class="form-submit">	
                                                    <h3>Plan Information</h3>
                                                    <div class="submit-section">
                                                        <div class="row">
                                                        
                                                            <div class="form-group col-md-12">
                                                                <label>Plan Amount<span class="tip-topdata" data-tip="Plan Amount"><i class="ti-help"></i></span></label>
                                                                <input type="text" name="amount" value="{{old('amount')}}" class="form-control">
                                                            </div>
                                                            @error('title')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
															<div class="form-group col-md-6">
                                                                <label>Interest Minimum<span class="tip-topdata" data-tip="Interest Minimum"><i class="ti-help"></i></span></label>
                                                                <input type="text" name="interest_min" value="{{old('interest_min')}}" class="form-control">
                                                            </div>
                                                            @error('interest_min')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
															<div class="form-group col-md-6">
                                                                <label>Interest Maximum<span class="tip-topdata" data-tip="Interest Maximum"><i class="ti-help"></i></span></label>
                                                                <input type="text" name="interest_max" value="{{old('interest_max')}}" class="form-control">
                                                            </div>
                                                            @error('interest_max')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
                                                            <div class="form-group col-md-6">
                                                                <label>Duration</label>
                                                                <select id="status" name="duration" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="3 Months">3 Months</option>
                                                                    <option value="6 Months">6 Months</option>
                                                                    <option value="9 Months">9 Months</option>
                                                                    <option value="12 Months">12 Months</option>
                                                                    <option value="18 Months">18 Months</option>
                                                                    <option value="24 Months">24 Months</option>
                                                                    <option value="36 Months">36 Months</option>
                                                                    <option value="48 Months">48 Months</option>
                                                                    <option value="60 Months">60 Months</option>
                                                                </select>
                                                            </div>
                                                            @error('duration')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
															<div class="form-group col-md-6">
                                                                <label>Processing Fee<span class="tip-topdata" data-tip="Processing Fee"><i class="ti-help"></i></span></label>
                                                                <input type="text" name="processing_fee" value="{{old('processing_fee')}}" class="form-control">
                                                            </div>
                                                            @error('processing_fee')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
															<div class="form-group col-md-6">
                                                                <label>Valid From<span class="tip-topdata" data-tip="Valid From"><i class="ti-help"></i></span></label>
																<input type="date" class="form-control" value="{{old('validfrom')}}" min="<?php echo date("Y-m-d"); ?>" id="validfrom" name="validfrom" placeholder="Enter Valid From Date">
                                                            </div>
                                                            @error('validfrom')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
															<div class="form-group col-md-6">
                                                                <label>Valid Till<span class="tip-topdata" data-tip="Valid Till"><i class="ti-help"></i></span></label>
                                                                <input type="date" class="form-control" value="{{old('validto')}}" min="<?php echo date("Y-m-d"); ?>" id="validto" name="validto" placeholder="Enter Valid From Date">
                                                            </div>
                                                            @error('validto')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Gallery -->
                                                <div class="form-submit">	
                                                    <h3>Brochure</h3>
                                                    <div class="submit-section">
                                                        <div class="row">
                                                        
                                                            <div class="form-group col-md-12">
                                                                <label>Upload Brochure</label>
                                                                <div class="form-group" id="image">
																	<input type="file" class="form-control" value="{{old('image')}}" id="image" name="file">
																</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Contact Information -->
                                                <div class="form-submit">	
                                                    <h3>Contact Information</h3>
                                                    <div class="submit-section">
                                                        <div class="row">
                                                        <input type="hidden" name="providerId" value="{{ Auth::user()->id }}">
                                                            <div class="form-group col-md-4">
                                                                <label>Name</label>
                                                                <input type="text" name="postedBy" value="{{Auth::user()->name }}" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group col-md-4">
                                                                <label>Email</label>
                                                                <input type="text" value="{{Auth::user()->email }}" class="form-control" readonly>
                                                            </div>
                                                            
                                                            <div class="form-group col-md-4">
                                                                <label>Phone (optional)</label>
                                                                <input type="text" value="{{Auth::user()->phone }}" class="form-control">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group col-lg-12 col-md-12">
                                                    <button class="btn btn-theme-light-2 rounded" type="submit">Submit & Preview</button>
                                                </div>
                                            </form>
														
										</div>
									</div>
									
								</div>
								
							</div>
			<!-- <section>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="d-flex justify-content-center">
								<div class="col-lg-8 col-md-8 col-sm-10">
									<h3>Post Your Plan</h3>
									<p>Simple Finance Options for Property Investors</p>
									<hr>
									<h5>Tell us about your Plan</h5>
									<form action="{{ route('provider.postPlan') }}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="form-group" id="plans">
											<label for="plan">Amount*</label>
    										<input type="text" class="form-control" value="{{old('amount')}}" id="amount" name="amount" placeholder="Enter Amount ">
										</div>
										@error('amount')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="row">
											<div class="col-md-6 col-lg-6 col-sm-12">
												<div class="form-group" id="interest">
													<label for="interest">Interest Minimun*</label>
													<input type="text" class="form-control" value="{{old('interest_min')}}" id="interest_min" name="interest_min" placeholder="Enter Interest Minimum %">
												</div>
												@error('interest_min')
													<small id="usercheck" style="color: red;" >
														{{$message}}
													</small>
												@enderror
											</div>
											<div class="col-md-6 col-lg-6 col-sm-12">
												<div class="form-group" id="interest">
													<label for="interest">Interest Maximum*</label>
													<input type="text" class="form-control" value="{{old('interest_max')}}" id="interest_max" name="interest_max" placeholder="Enter Interest Maximum %">
												</div>
												@error('interest_max')
													<small id="usercheck" style="color: red;" >
														{{$message}}
													</small>
												@enderror
											</div>
										</div>
										
										<div class="form-group" id="duration">
											<label for="exampleFormControlInput1" class="mb-3">Duration*</label> <br>
											<div class="btn-group btn-group-toggle"  data-toggle="buttons">
												<label class="btn btn-outline-primary mr-5 rounded-pill">
													<input type="radio" name="duration" value="3 Months" id="3m" autocomplete="off"> 3 Months
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="duration" value="6 Months" id="6m" autocomplete="off"> 6 Months
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="duration" value="9 Months" id="9m" autocomplete="off"> 9 Months
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="duration" value="12 Months" id="12m" autocomplete="off"> 12 Months
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="duration" value="18 Months" id="18m" autocomplete="off"> 18 Months
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="duration" value="24 Months" id="24m" autocomplete="off"> 24 Months
												</label>
											</div>
										</div>
										@error('duration')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group" id="processfee">
											<label for="plan">Processing Fee*</label>
    										<input type="text" class="form-control" value="{{old('processing_fee')}}" id="processing_fee" name="processing_fee" placeholder="Enter Processing Fee ">
										</div>
										@error('processing_fee')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="row">
											<div class="col-md-6 col-lg-6 col-sm-12">
												<div class="form-group" id="validfrom">
													<label for="valid">Valid From*</label>
													<input type="date" class="form-control" value="{{old('validfrom')}}" min="<?php echo date("Y-m-d"); ?>" id="validfrom" name="validfrom" placeholder="Enter Valid From Date">
												</div>	
												@error('validfrom')
													<small id="usercheck" style="color: red;" >
														{{$message}}
													</small>
												@enderror
											</div>
											<div class="col-md-6 col-lg-6 col-sm-12">
												<div class="form-group" id="validto">
													<label for="plan">Valid Till*</label>
													<input type="date" class="form-control" value="{{old('validto')}}" min="<?php echo date("Y-m-d"); ?>" id="validto" name="validto" placeholder="Enter Valid Till Date ">
												</div>
												@error('validto')
													<small id="usercheck" style="color: red;" >
														{{$message}}
													</small>
												@enderror
											</div>
										</div>
										<div class="form-group" id="image">
											<label for="plan">Plan Brochure*</label>
    										<input type="file" value="{{old('image')}}" id="image" name="file">
										</div>
										<h5>Your Details</h5>
										<input type="hidden" name="providerId" value="{{ Auth::user()->id }}">
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
											<button class="btn btn-primary" type="submit">Post Plan</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			
			<!-- ============================ Post PLans Form End ================================== -->

			<!-- ============================ All Plans  ================================== -->


			<section>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="d-flex justify-content-center">
								<div class="col-lg-12 col-md-12 col-sm-12 card p-4">
									<h3>All Plans</h3>
									<table class="table text-nowrap" id="planTable">
										<thead>
											<tr>
												<th class="border-top-0">#</th>
												<th class="border-top-0">Plan Amount</th>
												<th class="border-top-0">Duration</th>
												<th class="border-top-0">Minimun Interest</th>
												<th class="border-top-0">Maximum Interest</th>
												<th class="border-top-0">Processing Fee</th>
												<th class="border-top-0">Valid From</th>
												<th class="border-top-0">Valid To</th>
												<th class="border-top-0">Action</th>
											</tr>
										</thead>
										<tbody>
												@foreach($data as $key=>$row)
													<tr>
													<td>{{ $key+1 }}</td>
													<td>${{ $row->amount }}</td>
													<td>{{ $row->duration }}</td>
													<td>{{ $row->interest_min }}%</td>
													<td>{{ $row->interest_max }}%</td>
													<td>${{ $row->processing_fee }}</td>
													<td>{{ $row->validfrom }}</td>
													<td>{{ $row->validto }}</td>
													<td> 
														<form method="POST" action="{{ route('provider.deletePlan', $row->id) }}">
															@csrf
															<a href="" class="show_confirm"><i class="fa fa-trash-alt"></i></a>&nbsp;&nbsp;
															<a href="/updatePlans/{{ $row->id }}"><i class="fas fa-edit"></i></a>
														</form>
													</td>
													</tr>
												@endforeach
										</tbody>											
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- ============================ All Plans End ================================== -->

			<!-- ============================ Interested & Potential Customers ================================== -->

			<section class="bg-orange">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<div class="d-flex justify-content-center">
								<div class="col-lg-8 col-md-8 col-sm-10 text-center">
									<h3>View Interested Customers</h3>
									<hr>
									<a href="{{ route('provider.interestedInvetors') }}" class="btn btn-info btn-lg">View</a>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="d-flex justify-content-center">
								<div class="col-lg-8 col-md-8 col-sm-10 text-center">
									<h3>View Potential Customers</h3>
									<hr>
									<a href="{{ route('provider.potentialInvetors') }}" class="btn btn-info btn-lg">View</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>

			<!-- ============================ Interested & Potential Customers End ================================== -->

			<!-- ========================== Download App Section =============================== -->
			<section class="bg-light">
				<div class="container">
					<div class="row align-items-center">
						
						<div class="col-lg-7 col-md-12 col-sm-12 content-column">
							<div class="content_block_2">
								<div class="content-box">
									<div class="sec-title light">
										<p class="text-blue">Download apps</p>
										<h2>Download App Free App For Android and iPhone</h2>
									</div>
									<div class="text">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto accusantium.</p>
									</div>
									<div class="btn-box clearfix mt-5">
										<a href="index.html" class="download-btn play-store">
											<i class="fab fa-google-play"></i>
											<span>Download on</span>
											<h3>Google Play</h3>
										</a>
										
										<a href="index.html" class="download-btn app-store">
											<i class="fab fa-apple"></i>
											<span>Download on</span>
											<h3>App Store</h3>
										</a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-5 col-md-12 col-sm-12 image-column">
							<div class="image-box">
								<figure class="image"><img src="{{ asset('img/app.png') }}" class="img-fluid" alt=""></figure>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ========================== Download App Section =============================== -->
			

@endsection

@section('extra-script')
@endsection
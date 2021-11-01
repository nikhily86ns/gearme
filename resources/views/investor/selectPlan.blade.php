@extends('layouts.app')

@section('title')
	Selected Plan
@endsection

@section('extra-css')
@endsection

@section('content')

            <!-- ============================ Hero Banner  Start================================== -->
            <div class="image-cover hero-banner" style="background:#eff6ff url({{ asset('img/home-2.png') }}) no-repeat;">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-9 col-md-11 col-sm-12">
							<div class="inner-banner-text text-center">
								<p class="lead-i">Amet consectetur adipisicing <span class="badge badge-success">New</span></p>
								<h2><span class="font-normal">Find Your</span> Perfect Place.</h2>
							</div>
							<div class="full-search-2 eclip-search italian-search hero-search-radius shadow-hard mt-5">
								<div class="hero-search-content">
									<form action="{{ route('investor.search') }}" method="POST">
									    @csrf
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 b-r mt-3 d-flex justify-content-center">
												<div class="form-group" id="bhks">
													<div class="btn-group btn-group-toggle"  data-toggle="buttons">
														<label class="btn btn-outline-primary mr-5 rounded-pill">
															<input type="radio" name="propertyFor" value="sell" id="buy" autocomplete="off" checked> Buy
														</label>
														<!-- <label class="btn btn-outline-primary ms-3 rounded-pill">
															<input type="radio" name="propertyFor" value="rent" id="rent" autocomplete="off"> Rent
														</label> -->
													</div>
												</div>
											</div>
											@error('propertyFor')
												<small id="usercheck" style="color: red;" >
													{{$message}}
												</small>
											@enderror
											</div>
										</div>	
										<div class="row">
											<div class="col-lg-3 col-md-3 col-sm-12 b-r mt-2">
												<div class="form-group">
													<div class="choose-propert-type">
													<select class="form-select" name="propertyType" id="type" aria-label="Default select example">
														<option selected class="nun"><i class="fa fa-home"></i>Property Type</option>
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
														<!-- <ul> -->
															<!-- <li> -->
																<!-- <input type="radio"  id="pfora" class="checkbox-custom" name="pfor" value="all" > -->
																<!-- <input type="radio"  name="pfor" id="pfora"  value="all" checked>
																<label for="cp-1" class="checkbox-custom-label">All</label>
															</li>
															<li> -->
																<!-- <input id="pforr" class="checkbox-custom" name="pfor" value="rent" type="radio"> -->
																<!-- <input type="radio" name="pfor" id="pforr"  value="rent">
																<label for="cp-2" class="checkbox-custom-label">Rent</label>
															</li>
															<li> -->
																<!-- <input id="pfors" class="checkbox-custom" name="pfor" value="sell" type="radio"> -->
																<!-- <input type="radio" name="pfor" id="pfors"  value="sell">
																<label for="cp-3" class="checkbox-custom-label">Sell</label>
															</li> -->
														<!-- </ul> -->
													</div>
												</div>
											</div>
											@error('propertyType')
												<small id="usercheck" style="color: red;" >
													{{$message}}
												</small>
											@enderror
											<div class="col-lg-2 col-md-2 col-sm-12 b-r mt-2">
												<div class="form-group">
													<div class="choose-propert-type">
													<select class="form-select" name="budget" id="type" aria-label="Default select example">
														<option selected class="nun">$ Budget</option>
															<option class="bd" value="0-5000">$5000</option>
															<option class="bd" value="5000-10000">$5000 - 10000</option>
															<option class="bd" value="10000-20000">$10000 - 20000</option>
															<option class="bd" value="20000-30000">$20000 - 30000</option>
															<option class="bd" value="30000-40000">$30000 - 40000</option>
															<option class="bd" value="40000-50000">$40000 - 50000</option>
															<option class="bd" value="50000-60000">$50000 - 60000</option>
															<option class="bd" value="60000-10000000">$60000+</option>
													</select>
													</div>
												</div>
											</div>
											@error('budget')
												<small id="usercheck" style="color: red;" >
													{{$message}}
												</small>
											@enderror
											<div class="col-lg-5 col-md-5 col-sm-12 p-0 elio">
												<div class="form-group">
													<div class="input-with-icon">
														<input type="text" name="search" class="form-control" placeholder="Search for a location">
														<img src="{{ asset('img/pin.svg') }}" width="20"></i>
													</div>
												</div>
											</div>
											@error('search')
												<small id="usercheck" style="color: red;" >
													{{$message}}
												</small>
											@enderror
											<div class="col-lg-2 col-md-2 col-sm-12">
												<div class="form-group">
													<button type="submit" class="btn search-btn black">Search</button>
												</div>
											</div>
										</div>
									</form>	
									<small id="emailHelp" class="form-text text-muted">--Please Fill All The Feilds For Searching--</small>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->

            <!-- ============================ Selected Plan Details Start ================================== -->

            <section class="bg-orange">
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="card p-3">
                                    <div class="form-group">
                                        <label for="plan">Plan Amount*  </label><h4>{{ $data->amount }}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Duration*  </label><h4>{{ $data->duration }}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Minimun Interest*  </label><h4>{{ $data->interest_min }}%</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Maximun Interest*  </label><h4>{{ $data->interest_max }}%</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Processing Fee*  </label><h4>{{ $data->processing_fee }}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Valid From*  </label><h4>{{ $data->validfrom }}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Valid Till*  </label><h4>{{ $data->validto }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card p-3">
                                    <img class="my-5" max-width="auto" max-height="auto" src="{{ asset('plan/'. $data->image) }}" alt="Brochure Image"/>    
                                </div>
                                <div class="text-center mt-3">
									<form action="{{ route('investor.requestProvider') }}" method="POST">
										@csrf
										<input type="hidden" value="{{ $data->id }}" name="planId">
										<input type="hidden" value="{{ $data->providerId }}" name="providerId">
										<input type="hidden" value="{{ Auth::user()->id }}" name="investorId">
                                    	<button type='submit' class="btn btn-success">Request</button>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ============================ Selected Plan Details End ================================== -->
			

@endsection

@section('extra-script')
@endsection
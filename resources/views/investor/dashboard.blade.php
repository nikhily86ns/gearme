@extends('layouts.app')

@section('title')
	Property Investor
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
			
			<!-- ================= Explore Property ================= -->
			<section>
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Explore Good places</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<!-- Single Property -->
						@foreach ($data as $row)
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div>
												@foreach(json_decode($row->image) as $key=>$res)
												@if($key == 0)
													<img class='img-size img-responsive' src="{{ asset('property/'. $res) }}" />
												@endif
												@endforeach
											</div>
											<!-- <div><a href="single-property-1.html"><img src="{{ asset('img/p-9.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-10.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div> -->
										</div>
									</div>
								</div>
								
								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">{{ $row->propertyFor }}</span>
											<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">{{ $row->propertyType }}</a></h4>
										</div>
										<div class="listing-short-detail-flex">
											<h6 class="listing-card-info-price">$ {{ $row->price }}</h6>
										</div>
									</div>
								</div>
								
								<div class="price-features-wrapper">
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('img/bed.svg') }}" width="13" alt="" /></div>{{ $row->unitType }}
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('img/bathtub.svg') }}" width="13" alt="" /></div>{{ $row->bathroom }}
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('img/move.svg') }}" width="13" alt="" /></div>{{ $row->area }}
										</div>
									</div>
								</div>
								
								<div class="listing-detail-footer">
									<div class="footer-first">
										<div class="foot-location"><img src="{{ asset('img/pin.svg') }}" width="18" alt="" />{{ $row->city }}, {{ $row->locality }} </div>
									</div>
									<div class="footer-flex">
										<a href="/propertyDetail/{{ $row->id }}" class="prt-view">View</a>
									</div>
								</div>
								
							</div>
						</div>
						@endforeach
						<!-- End Single Property -->
						
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="listings-list-with-sidebar.html" class="btn btn-theme-light-2 rounded">Browse More Properties</a>
						</div>
					</div>
					
				</div>	
			</section>
			<!-- ================================= Explore Property End =============================== -->

			<!-- ================= Finance Option  ================= -->
			<!-- <section class="bg-orange">
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>All Finance Options Available</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="d-flex justify-content-center">
								<div class="col-lg-10 col-md-10 col-sm-12 card p-4">
									<table class="table text-nowrap" id="financeTable">
										<thead>
											<tr>
												<th class="border-top-0">#</th>
												<th class="border-top-0">Capital Provider</th>
												<th class="border-top-0">Plan Amount</th>
												<th class="border-top-0">Duration</th>
												<th class="border-top-0">Minimun Interest</th>
												<th class="border-top-0">Maximum Interest</th>
												<th class="border-top-0">Processing Fee</th>
												<th class="border-top-0">Select</th>
											</tr>
										</thead>
										<tbody>
												@foreach($plan as $key=>$row)
													<tr>
													<td>{{ $key+1 }}</td>
													<td>{{ $row->name }}</td>
													<td>${{ $row->amount }}</td>
													<td>{{ $row->duration }}</td>
													<td>{{ $row->interest_min }}%</td>
													<td>{{ $row->interest_max }}%</td>
													<td>${{ $row->processing_fee }}</td>
													<td> 
														<form method="POST" action="{{ route('investor.selectPlan', $row->id) }}">
															@csrf
															<button type="submit" class="btn btn-success"><i class="far fa-hand-pointer"></i></button>
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
			</section> -->
			<!-- ================= Finance Option End  ================= -->

			<!-- ================= Finance Option Start Collapse  ================= -->
			
			<section class="bg-orange">
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Finance Options Available</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
					<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="d-flex justify-content-center">
								<div class="col-lg-12 col-md-12 col-sm-12 card p-4">
									<div class="accordion" id="accordionExample">
										@foreach($finance as $row)
										<div class="card">
											<div class="card-header" id="headingOne{{ $row->id }} ">
											<h2 class="mb-0">
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{ $row->id }}" aria-expanded="true" aria-controls="collapseOne">
												{{ $row->name }}
												</button>
											</h2>
											</div>
											
											<div id="collapseOne{{ $row->id }}" class="collapse" aria-labelledby="headingOne{{ $row->id }}" data-parent="#accordionExample">
												<div class="card-body">
													<table class="table text-nowrap" id="financeTable">
														<thead>
															<tr>
																<th class="border-top-0">#</th>
																<th class="border-top-0">Plan Amount</th>
																<th class="border-top-0">Duration</th>
																<th class="border-top-0">Minimun Interest</th>
																<th class="border-top-0">Maximum Interest</th>
																<th class="border-top-0">Processing Fee</th>
																<th class="border-top-0">Valid Till</th>
																<th class="border-top-0">Select</th>
																<th class="border-top-0">Download Brochure</th>
															</tr>
														</thead>
														<tbody>
														@foreach($row->plan as $key => $res)
															<tr>
															<td>{{ $key+1 }}</td>
															<td>${{ $res->amount }}</td>
															<td>{{ $res->duration }}</td>
															<td>{{ $res->interest_min }}%</td>
															<td>{{ $res->interest_max }}%</td>
															<td>${{ $res->processing_fee }}</td>
															<td>{{ $res->validto }}</td>
															@php
																$valid_till = $res->validto;
																$date = date_default_timezone_set('Asia/Kolkata');
																$today_date = date('Y-m-d');
																
																$valid_time = strtotime($valid_till);
																$today_time = strtotime($today_date);
															@endphp	
															@if($valid_time >= $today_time)
															<td> 
																<a href="/selectPlans/{{ $res->id }}" class="btn btn-sm btn-success"><i class="far fa-hand-pointer"></i></a>
															</td>			
															@else
															<td>
																<a href="#" class="btn btn-sm btn-danger">Expired**</a>
															</td>		
															@endif
															<td> <a class="btn btn-info btn-sm" href="/generatepdf/{{ $res->id }}">Download Document</a></td>
															</tr>
															@endforeach	
														</tbody>											
													</table>
												</div>
											</div>
											
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- ================= Finance Option End  ================= -->

			
			<!-- ============================ Property Location Start ================================== -->
			<!-- <section class="bg-light">
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Find By Locations</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
					
					<div class="row">
					
						<div class="col-lg-4 col-md-4">
							<div class="location-property-wrap">
								<div class="location-property-thumb">
									<a href="listings-list-with-sidebar.html"><img src="{{ asset('img/c-1.png') }}" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">San Francisco, California</h4>
										<span>12 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="lp-property-view"><i class="ti-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="location-property-wrap">
								<div class="location-property-thumb">
									<a href="listings-list-with-sidebar.html"><img src="{{ asset('img/c-2.png') }}" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">Dunao, California</h4>
										<span>142 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="lp-property-view"><i class="ti-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="location-property-wrap">
								<div class="location-property-thumb">
									<a href="listings-list-with-sidebar.html"><img src="{{ asset('img/c-3.png') }}" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">Liverpool, London</h4>
										<span>17 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="lp-property-view"><i class="ti-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="location-property-wrap">
								<div class="location-property-thumb">
									<a href="listings-list-with-sidebar.html"><img src="{{ asset('img/c-4.png') }}" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">San Francisco, New York</h4>
										<span>72 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="lp-property-view"><i class="ti-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="location-property-wrap">
								<div class="location-property-thumb">
									<a href="listings-list-with-sidebar.html"><img src="{{ asset('img/c-5.png') }}" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">New Orleans, Louisiana</h4>
										<span>102 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="lp-property-view"><i class="ti-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="location-property-wrap">
								<div class="location-property-thumb">
									<a href="listings-list-with-sidebar.html"><img src="{{ asset('img/c-6.png') }}" class="img-fluid" alt="" /></a>
								</div>
								<div class="location-property-content">
									<div class="lp-content-flex">
										<h4 class="lp-content-title">Los Angeles</h4>
										<span>95 Properties</span>
									</div>
									<div class="lp-content-right">
										<a href="listings-list-with-sidebar.html" class="lp-property-view"><i class="ti-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="listings-list-with-sidebar.html" class="btn btn-theme-light rounded">Browse More Locations</a>
						</div>
					</div>
					
				</div>
			</section> -->
			<!-- ============================ Property Location End ================================== -->
			
			<!-- ============================ All Property ================================== -->
			<!-- <section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Featured Property For Sale</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
				
					<div class="row list-layout">
						
						
						<div class="col-lg-6 col-md-12">
							<div class="property-listing property-1">
									
								<div class="listing-img-wrapper">
									<a href="single-property-2.html">
										<img src="{{ asset('img/p-1.jpg') }}" class="img-fluid mx-auto" alt="" />
									</a>
								</div>
								
								<div class="listing-content">
								
									<div class="listing-detail-wrapper-box">
										<div class="listing-detail-wrapper">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="single-property-2.html">Resort Valley Ocs</a></h4>
												<div class="fr-can-rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="reviews_text">(42 Reviews)</span>
												</div>
												<span class="prt-types sale">For Sale</span>
											</div>
											<div class="list-price">
												<h6 class="listing-card-info-price">$7,000</h6>
											</div>
										</div>
									</div>
									
									<div class="price-features-wrapper">
                                        <div class="list-fx-features">
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bed.svg') }}" width="13" alt="" /></div>3 Beds
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bathtub.svg') }}" width="13" alt="" /></div>1 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/move.svg') }}" width="13" alt="" /></div>800 sqft
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location"><img src="{{ asset('img/pin.svg') }}" width="18" alt="" />210 Zirak Road, Canada</div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="property-detail.html" class="prt-view">View</a>
                                        </div>
                                    </div>
									
								</div>
								
							</div>
						</div>
						
						
						
						<div class="col-lg-6 col-md-12">
							<div class="property-listing property-1">
									
								<div class="listing-img-wrapper">
									<a href="single-property-2.html">
										<img src="{{ asset('img/p-2.jpg') }}" class="img-fluid mx-auto" alt="" />
									</a>
								</div>
								
								<div class="listing-content">
								
									<div class="listing-detail-wrapper-box">
										<div class="listing-detail-wrapper">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="single-property-2.html">Adobe Property Advisors</a></h4>
												<div class="fr-can-rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="reviews_text">(42 Reviews)</span>
												</div>
												<span class="prt-types rent">For Rent</span>
											</div>
											<div class="list-price">
												<h6 class="listing-card-info-price">$6,800</h6>
											</div>
										</div>
									</div>
									
									<div class="price-features-wrapper">
                                        <div class="list-fx-features">
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bed.svg') }}" width="13" alt="" /></div>3 Beds
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bathtub.svg') }}" width="13" alt="" /></div>1 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/move.svg') }}" width="13" alt="" /></div>800 sqft
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location"><img src="{{ asset('img/pin.svg') }}" width="18" alt="" />210 Zirak Road, Canada</div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="property-detail.html" class="prt-view">View</a>
                                        </div>
                                    </div>
									
								</div>
								
							</div>
						</div>
						

						
						<div class="col-lg-6 col-md-12">
							<div class="property-listing property-1">
									
								<div class="listing-img-wrapper">
									<a href="single-property-2.html">
										<img src="{{ asset('img/p-3.jpg') }}" class="img-fluid mx-auto" alt="" />
									</a>
								</div>
								
								<div class="listing-content">
								
									<div class="listing-detail-wrapper-box">
										<div class="listing-detail-wrapper">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="single-property-2.html">Bluebell Real Estate</a></h4>
												<div class="fr-can-rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="reviews_text">(42 Reviews)</span>
												</div>
												<span class="prt-types rent">For Rent</span>
											</div>
											<div class="list-price">
												<h6 class="listing-card-info-price">$7,000</h6>
											</div>
										</div>
									</div>
									
									<div class="price-features-wrapper">
                                        <div class="list-fx-features">
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bed.svg') }}" width="13" alt="" /></div>3 Beds
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bathtub.svg') }}" width="13" alt="" /></div>1 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/move.svg') }}" width="13" alt="" /></div>800 sqft
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location"><img src="{{ asset('img/pin.svg') }}" width="18" alt="" />210 Zirak Road, Canada</div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="property-detail.html" class="prt-view">View</a>
                                        </div>
                                    </div>
									
								</div>
								
							</div>
						</div>
						

						
						<div class="col-lg-6 col-md-12">
							<div class="property-listing property-1">
									
								<div class="listing-img-wrapper">
									<a href="single-property-2.html">
										<img src="{{ asset('img/p-4.jpg') }}" class="img-fluid mx-auto" alt="" />
									</a>
								</div>
								
								<div class="listing-content">
								
									<div class="listing-detail-wrapper-box">
										<div class="listing-detail-wrapper">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="single-property-2.html">Agile Real Estate Group</a></h4>
												<div class="fr-can-rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="reviews_text">(42 Reviews)</span>
												</div>
												<span class="prt-types sale">For Sale</span>
											</div>
											<div class="list-price">
												<h6 class="listing-card-info-price">$8,100</h6>
											</div>
										</div>
									</div>
									
									<div class="price-features-wrapper">
                                        <div class="list-fx-features">
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bed.svg') }}" width="13" alt="" /></div>3 Beds
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bathtub.svg') }}" width="13" alt="" /></div>1 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/move.svg') }}" width="13" alt="" /></div>800 sqft
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location"><img src="{{ asset('img/pin.svg') }}" width="18" alt="" />210 Zirak Road, Canada</div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="property-detail.html" class="prt-view">View</a>
                                        </div>
                                    </div>
									
								</div>
								
							</div>
						</div>
						

						
						<div class="col-lg-6 col-md-12">
							<div class="property-listing property-1">
									
								<div class="listing-img-wrapper">
									<a href="single-property-2.html">
										<img src="{{ asset('img/p-5.jpg') }}" class="img-fluid mx-auto" alt="" />
									</a>
								</div>
								
								<div class="listing-content">
								
									<div class="listing-detail-wrapper-box">
										<div class="listing-detail-wrapper">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="single-property-2.html">Nestled Real Estate</a></h4>
												<div class="fr-can-rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="reviews_text">(42 Reviews)</span>
												</div>
												<span class="prt-types sale">For Sale</span>
											</div>
											<div class="list-price">
												<h6 class="listing-card-info-price">$5,700</h6>
											</div>
										</div>
									</div>
									
									<div class="price-features-wrapper">
                                        <div class="list-fx-features">
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bed.svg') }}" width="13" alt="" /></div>3 Beds
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bathtub.svg') }}" width="13" alt="" /></div>1 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/move.svg') }}" width="13" alt="" /></div>800 sqft
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location"><img src="{{ asset('img/pin.svg') }}" width="18" alt="" />210 Zirak Road, Canada</div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="property-detail.html" class="prt-view">View</a>
                                        </div>
                                    </div>
									
								</div>
								
							</div>
						</div>
						

						
						<div class="col-lg-6 col-md-12">
							<div class="property-listing property-1">
									
								<div class="listing-img-wrapper">
									<a href="single-property-2.html">
										<img src="{{ asset('img/p-6.jpg') }}" class="img-fluid mx-auto" alt="" />
									</a>
								</div>
								
								<div class="listing-content">
								
									<div class="listing-detail-wrapper-box">
										<div class="listing-detail-wrapper">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="single-property-2.html">Flow Group Real Estate</a></h4>
												<div class="fr-can-rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="reviews_text">(42 Reviews)</span>
												</div>
												<span class="prt-types rent">For Rent</span>
											</div>
											<div class="list-price">
												<h6 class="listing-card-info-price">$5,900</h6>
											</div>
										</div>
									</div>
									
									<div class="price-features-wrapper">
                                        <div class="list-fx-features">
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bed.svg') }}" width="13" alt="" /></div>3 Beds
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bathtub.svg') }}" width="13" alt="" /></div>1 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/move.svg') }}" width="13" alt="" /></div>800 sqft
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location"><img src="{{ asset('img/pin.svg') }}" width="18" alt="" />210 Zirak Road, Canada</div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="property-detail.html" class="prt-view">View</a>
                                        </div>
                                    </div>
									
								</div>
								
							</div>
						</div>
						

						
						<div class="col-lg-6 col-md-12">
							<div class="property-listing property-1">
									
								<div class="listing-img-wrapper">
									<a href="single-property-2.html">
										<img src="{{ asset('img/p-7.jpg') }}" class="img-fluid mx-auto" alt="" />
									</a>
								</div>
								
								<div class="listing-content">
								
									<div class="listing-detail-wrapper-box">
										<div class="listing-detail-wrapper">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="single-property-2.html">Strive Partners Realty</a></h4>
												<div class="fr-can-rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="reviews_text">(42 Reviews)</span>
												</div>
												<span class="prt-types sale">For Sale</span>
											</div>
											<div class="list-price">
												<h6 class="listing-card-info-price">$6,200</h6>
											</div>
										</div>
									</div>
									
									<div class="price-features-wrapper">
                                        <div class="list-fx-features">
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bed.svg') }}" width="13" alt="" /></div>3 Beds
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bathtub.svg') }}" width="13" alt="" /></div>1 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/move.svg') }}" width="13" alt="" /></div>800 sqft
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location"><img src="{{ asset('img/pin.svg') }}" width="18" alt="" />210 Zirak Road, Canada</div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="property-detail.html" class="prt-view">View</a>
                                        </div>
                                    </div>
									
								</div>
								
							</div>
						</div>
						

						
						<div class="col-lg-6 col-md-12">
							<div class="property-listing property-1">
									
								<div class="listing-img-wrapper">
									<a href="single-property-2.html">
										<img src="{{ asset('img/p-8.jpg') }}" class="img-fluid mx-auto" alt="" />
									</a>
								</div>
								
								<div class="listing-content">
								
									<div class="listing-detail-wrapper-box">
										<div class="listing-detail-wrapper">
											<div class="listing-short-detail">
												<h4 class="listing-name"><a href="single-property-2.html">Black Oak Realty</a></h4>
												<div class="fr-can-rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="reviews_text">(42 Reviews)</span>
												</div>
												<span class="prt-types rent">For Rent</span>
											</div>
											<div class="list-price">
												<h6 class="listing-card-info-price">$8,400</h6>
											</div>
										</div>
									</div>
									
									<div class="price-features-wrapper">
                                        <div class="list-fx-features">
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bed.svg') }}" width="13" alt="" /></div>3 Beds
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/bathtub.svg') }}" width="13" alt="" /></div>1 Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="{{ asset('img/move.svg') }}" width="13" alt="" /></div>800 sqft
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location"><img src="{{ asset('img/pin.svg') }}" width="18" alt="" />210 Zirak Road, Canada</div>
                                        </div>
                                        <div class="footer-flex">
                                            <a href="property-detail.html" class="prt-view">View</a>
                                        </div>
                                    </div>
									
								</div>
								
							</div>
						</div>
														
						
					</div>
							
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="listings-list-with-sidebar.html" class="btn btn-theme-light-2 rounded">Browse More Properties</a>
						</div>
					</div>
					
				</div>		
			</section> -->
			<!-- ============================ All Featured Property ================================== -->
			
			<!-- ============================ Smart Testimonials ================================== -->
			<!-- <section class="bg-orange">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Good Reviews by Customers</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
						
						<div class="col-lg-12 col-md-12">
							
							<div class="smart-textimonials smart-center" id="smart-textimonials">
								
								
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-blue"><i class="ti-quote-right"></i></div>
													<img src="{{ asset('img/user-3.jpg') }}" class="img-fluid" alt="" />
												</div>
											</div>
										</div>
										
										<div class="smart-tes-content">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
										</div>
										
										<div class="st-author-info">
											<h4 class="st-author-title">Adam Williams</h4>
											<span class="st-author-subtitle">CEO Of Microwoft</span>
										</div>
									</div>
								</div>
								
								
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-inverse"><i class="ti-quote-right"></i></div>
													<img src="{{ asset('img/user-8.jpg') }}" class="img-fluid" alt="" />
												</div>
											</div>
										</div>
										
										<div class="smart-tes-content">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
										</div>
										
										<div class="st-author-info">
											<h4 class="st-author-title">Retha Deowalim</h4>
											<span class="st-author-subtitle">CEO Of Apple</span>
										</div>
									</div>
								</div>
								
								
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-purple"><i class="ti-quote-right"></i></div>
													<img src="{{ asset('img/user-4.jpg') }}" class="img-fluid" alt="" />
												</div>
											</div>
										</div>
										
										<div class="smart-tes-content">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
										</div>
										
										<div class="st-author-info">
											<h4 class="st-author-title">Sam J. Wasim</h4>
											<span class="st-author-subtitle">Pio Founder</span>
										</div>
									</div>
								</div>
								
								
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-primary"><i class="ti-quote-right"></i></div>
													<img src="{{ asset('img/user-5.jpg') }}" class="img-fluid" alt="" />
												</div>
											</div>
										</div>
										
										<div class="smart-tes-content">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
										</div>
										
										<div class="st-author-info">
											<h4 class="st-author-title">Usan Gulwarm</h4>
											<span class="st-author-subtitle">CEO Of Facewarm</span>
										</div>
									</div>
								</div>
								
								
								<div class="item">
									<div class="item-box">
										<div class="smart-tes-author">
											<div class="st-author-box">
												<div class="st-author-thumb">
													<div class="quotes bg-success"><i class="ti-quote-right"></i></div>
													<img src="{{ asset('img/user-6.jpg') }}" class="img-fluid" alt="" />
												</div>
											</div>
										</div>
										
										<div class="smart-tes-content">
											<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
										</div>
										
										<div class="st-author-info">
											<h4 class="st-author-title">Shilpa Shethy</h4>
											<span class="st-author-subtitle">CEO Of Zapple</span>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section> -->
			<!-- ============================ Smart Testimonials End ================================== -->
			
			<!-- ============================ Price Table Start ================================== -->
			<!-- <section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>See our packages</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
					
					<div class="row">
					
					
						<div class="col-lg-4 col-md-4">
							<div class="pricing-wrap basic-pr">
								
								<div class="pricing-header">
									<h4 class="pr-value"><sup>$</sup>49</h4>
									<h4 class="pr-title">Basic Package</h4>
								</div>
								<div class="pricing-body">
									<ul>
										<li class="available">5+ Listings</li>
										<li class="available">Contact With Agent</li>
										<li class="available">3 Month Validity</li>
										<li>7x24 Fully Support</li>
										<li>50GB Space</li>
									</ul>
								</div>
								<div class="pricing-bottom">
									<a href="#" class="btn-pricing">Choose Plan</a>
								</div>
								
							</div>
						</div>
						
					
						<div class="col-lg-4 col-md-4">
							<div class="pricing-wrap platinum-pr recommended">
								
								<div class="pricing-header">
									<h4 class="pr-value"><sup>$</sup>99</h4>
									<h4 class="pr-title">Platinum Package</h4>
								</div>
								<div class="pricing-body">
									<ul>
										<li class="available">5+ Listings</li>
										<li class="available">Contact With Agent</li>
										<li class="available">3 Month Validity</li>
										<li class="available">7x24 Fully Support</li>
										<li>50GB Space</li>
									</ul>
								</div>
								<div class="pricing-bottom">
									<a href="#" class="btn-pricing">Choose Plan</a>
								</div>
								
							</div>
						</div>
						
					
						<div class="col-lg-4 col-md-4">
							<div class="pricing-wrap standard-pr">
								
								<div class="pricing-header">
									<h4 class="pr-value"><sup>$</sup>199</h4>
									<h4 class="pr-title">Standard Package</h4>
								</div>
								<div class="pricing-body">
									<ul>
										<li class="available">5+ Listings</li>
										<li class="available">Contact With Agent</li>
										<li class="available">3 Month Validity</li>
										<li class="available">7x24 Fully Support</li>
										<li class="available">50GB Space</li>
									</ul>
								</div>
								<div class="pricing-bottom">
									<a href="#" class="btn-pricing">Choose Plan</a>
								</div>
								
							</div>
						</div>
						
					</div>
					
				</div>	
			</section> -->
			<!-- ============================ Price Table End ================================== -->
			
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
			
			<!-- ============================ Call To Action ================================== -->
			<section class="theme-bg call-to-act-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							
							<div class="call-to-act">
								<div class="call-to-act-head">
									<h3>Want to Become a Real Estate Agent?</h3>
									<span>We'll help you to grow your career and growth.</span>
								</div>
								<a href="#" class="btn btn-call-to-act">SignUp Today</a>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Call To Action End ================================== -->

@endsection

@section('extra-script')
@endsection

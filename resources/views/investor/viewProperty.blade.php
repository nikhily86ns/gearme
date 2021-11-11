@extends('layouts.app')

@section('title')
	Search Result
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
															<input type="radio" name="propertyFor" value="sell" id="buy" autocomplete="off"> Buy
														</label>
														<label class="btn btn-outline-primary ms-3 rounded-pill">
															<input type="radio" name="propertyFor" value="rent" id="rent" autocomplete="off"> Rent
														</label>
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
															<option class="bd" value="0-5000">$ 5000</option>
															<option class="bd" value="5000-10000">$ 5000 - 10000</option>
															<option class="bd" value="10000-20000">$ 10000 - 20000</option>
															<option class="bd" value="20000-30000">$ 20000 - 30000</option>
															<option class="bd" value="30000-40000">$ 30000 - 40000</option>
															<option class="bd" value="40000-50000">$ 40000 - 50000</option>
															<option class="bd" value="50000-60000">$ 50000 - 60000</option>
															<option class="bd" value="60000-10000000">60000+</option>
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
								</div>
                                <small id="emailHelp" class="form-text text-muted">--Please Fill All The Feilds For Searching--</small>
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
								<h2>Result</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>

                    @if(count($data) > 0)
					
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

                    @else
                    <h3 class="text-center">No Properties</h3>
                    @endif
				</div>	
			</section>
			<!-- ================================= Explore Property =============================== -->
			
            <!-- Featured Property -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="sidebar-widgets">
                    
                    <h4>Related Property</h4>
                    
                    <div class="sidebar_featured_property">
                        
                        <!-- List Sibar Property -->
                        @foreach($property as $row)
                        <div class="sides_list_property">
                            <div class="sides_list_property_thumb">
                                @foreach(json_decode($row->image) as $key=>$res)
                                    @if($key == 0)
                                        <img class='img-fluid' src="{{ asset('property/'. $res) }}" />
                                    @endif
                                @endforeach
                            </div>
                            <div class="sides_list_property_detail">
                                <h4><a href="/propertyDetail/{{ $row->id }}">{{ $row->propertyType }}</a></h4>
                                <span><i class="ti-location-pin"></i>{{ $row->city }}</span>
                                <div class="lists_property_price">
                                    <div class="lists_property_types">
                                        <div class="property_types_vlix sale">{{ $row->propertyFor }}</div>
                                    </div>
                                    <div class="lists_property_price_value">
                                        <h4>${{ $row->price }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    
                </div>

            </div>


@endsection

@section('extra-script')
@endsection
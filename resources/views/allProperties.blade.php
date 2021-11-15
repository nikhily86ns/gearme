@extends('layouts.app')

@section('title')
	Result 
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
									<form action="{{ route('search-Properties') }}" method="POST">
									    @csrf	
										<div class="row">
											<div class="col-lg-5 col-md-5 col-sm-12 b-r mt-2">
												<div class="form-group">
													<div class="choose-propert-type">
													<select class="form-select" name="propertyType" id="type" aria-label="Default select example">
														<option value='' selected class="nun"><i class="fa fa-home"></i>Property Type</option>
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
											<div class="col-lg-5 col-md-5 col-sm-12 p-0 elio">
												<div class="form-group">
													<div class="input-with-icon">
														<input type="text" name="search" class="form-control" placeholder="Search for a city">
														<img src="{{ asset('img/pin.svg') }}" width="20"></i>
													</div>
												</div>
											</div>
											<div class="col-lg-2 col-md-2 col-sm-12">
												<div class="form-group">
													<button type="submit" class="btn search-btn black">Search</button>
												</div>
											</div>
										</div>
									</form>	
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
							</div>
						</div>
					</div>
					
					<div class="row">
						@if(count($data)>0)
						@foreach ($data as $row)
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div>
												@if($row->image)
												@foreach(json_decode($row->image) as $key=>$res)
												@if($key == 0)
													<img class='img-size img-responsive' src="{{ asset('property/'. $res) }}" />
												@endif
												@endforeach
												@endif
											</div>
										</div>
									</div>
								</div>
								
								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For {{ $row->propertyFor }}</span>
											<h4 class="listing-name verified"><a href="/propertyDetail/{{ $row->id }}" class="prt-link-detail">{{ $row->title }}</a></h4>
										</div>
										<div class="listing-short-detail-flex">
											<h6 class="listing-card-info-price">&#8377; {{ $row->price }}</h6>
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
										<div class="foot-location"><img src="{{ asset('img/pin.svg') }}" width="18" alt="" />{{ $row->country }}, {{ $row->city }} </div>
									</div>
									<div class="footer-flex">
										<a href="/propertyDetail/{{ $row->id }}" class="prt-view">View</a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						@else
                            <h4>No Result Found !!</h4>
                        @endif
					</div>
					
					<!-- <div class="row pt-5">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="{{ route('investor.viewAllProperty') }}" class="btn btn-dark btn-md rounded">Browse More Properties</a>
						</div>
					</div> -->
					
				</div>	
			</section>
			<!-- ================================= Explore Property =============================== -->


@endsection

@section('extra-script')
@endsection
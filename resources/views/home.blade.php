@extends('layouts.app')

@section('title')
	Home
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
									<div class="row">
									
										<div class="col-lg-4 col-md-4 col-sm-12 b-r">
											<div class="form-group">
												<div class="choose-propert-type">
													<ul>
														<li>
															<input id="cp-1" class="checkbox-custom" name="cpt" type="radio" checked>
															<label for="cp-1" class="checkbox-custom-label">Buy</label>
														</li>
														<li>
															<input id="cp-3" class="checkbox-custom" name="cpt" type="radio">
															<label for="cp-3" class="checkbox-custom-label">Sold</label>
														</li>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-5 col-sm-12 p-0 elio">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Search for a location">
													<img src="assets/img/pin.svg" width="20"></i>
												</div>
											</div>
										</div>
										
										<div class="col-lg-2 col-md-3 col-sm-12">
											<div class="form-group">
												<a href="#" class="btn search-btn black">Search</a>
											</div>
										</div>
												
									</div>
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
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-1.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-9.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-10.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
										</div>
									</div>
								</div>
								
								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For Rent</span>
											<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">Banyon Tree Realty</a></h4>
										</div>
										<div class="listing-short-detail-flex">
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
						<!-- End Single Property -->
						
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
										<div class="click">
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-2.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-11.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-12.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
										</div>
									</div>
								</div>
								
								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For Rent</span>
											<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">Blue Reef Properties</a></h4>
										</div>
										<div class="listing-short-detail-flex">
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
						<!-- End Single Property -->
						
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
                                        <div class="click">
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-3.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-13.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-14.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
										</div>
									</div>
								</div>
								
								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For Rent</span>
											<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">Beacon Homes LLC</a></h4>
										</div>
										<div class="listing-short-detail-flex">
											<h6 class="listing-card-info-price">$9,200</h6>
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
						<!-- End Single Property -->
						
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
                                        <div class="click">
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-4.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-15.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-16.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
										</div>
									</div>
								</div>
								
								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For Rent</span>
											<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">Bluebell Real Estate</a></h4>
										</div>
										<div class="listing-short-detail-flex">
											<h6 class="listing-card-info-price">$6,500</h6>
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
						<!-- End Single Property -->
						
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
                                        <div class="click">
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-5.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-16.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-17.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
										</div>
									</div>
								</div>
								
								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For Rent</span>
											<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">Found Property Group</a></h4>
										</div>
										<div class="listing-short-detail-flex">
											<h6 class="listing-card-info-price">$2,850</h6>
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
						<!-- End Single Property -->
						
						<!-- Single Property -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="property-listing property-2">
								
								<div class="listing-img-wrapper">
									<div class="list-img-slide">
                                        <div class="click">
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-6.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-12.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
											<div><a href="single-property-1.html"><img src="{{ asset('img/p-25.jpg') }}" class="img-fluid mx-auto" alt="" /></a></div>
										</div>
									</div>
								</div>
								
								<div class="listing-detail-wrapper">
									<div class="listing-short-detail-wrap">
										<div class="listing-short-detail">
											<span class="property-type">For Rent</span>
											<h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">Strive Partners Realty</a></h4>
										</div>
										<div class="listing-short-detail-flex">
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
						<!-- End Single Property -->
						
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="listings-list-with-sidebar.html" class="btn btn-theme-light-2 rounded">Browse More Properties</a>
						</div>
					</div>
					
				</div>	
			</section>
			<!-- ================================= Explore Property =============================== -->
			
			<!-- ============================ Property Location Start ================================== -->
			<section class="bg-light">
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
			</section>
			<!-- ============================ Property Location End ================================== -->
			
			<!-- ============================ All Property ================================== -->
			<section>
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
						
						<!-- Single Property Start -->
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
						<!-- Single Property End -->
						
						<!-- Single Property Start -->
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
						<!-- Single Property End -->

						<!-- Single Property Start -->
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
						<!-- Single Property End -->

						<!-- Single Property Start -->
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
						<!-- Single Property End -->

						<!-- Single Property Start -->
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
						<!-- Single Property End -->

						<!-- Single Property Start -->
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
						<!-- Single Property End -->

						<!-- Single Property Start -->
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
						<!-- Single Property End -->

						<!-- Single Property Start -->
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
						<!-- Single Property End -->								
						
					</div>
							
					<!-- Pagination -->
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="listings-list-with-sidebar.html" class="btn btn-theme-light-2 rounded">Browse More Properties</a>
						</div>
					</div>
					
				</div>		
			</section>
			<!-- ============================ All Featured Property ================================== -->
			
			<!-- ============================ Smart Testimonials ================================== -->
			<section class="bg-orange">
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
								
								<!-- Single Item -->
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
								
								<!-- Single Item -->
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
								
								<!-- Single Item -->
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
								
								<!-- Single Item -->
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
								
								<!-- Single Item -->
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
			</section>
			<!-- ============================ Smart Testimonials End ================================== -->
			
			<!-- ============================ Price Table Start ================================== -->
			<section>
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
					
						<!-- Single Package -->
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
						
						<!-- Single Package -->
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
						
						<!-- Single Package -->
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
			</section>
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
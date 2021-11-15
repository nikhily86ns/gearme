@extends('layouts.app')

@section('title')
	Welcome 
@endsection
 
@section('extra-css')
@endsection

@section('content')
@php 
use App\Models\Property;
$data = Property::where('status','=','Approved')->orderBy('created_at', 'desc')->paginate(6);

@endphp

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
											<div class="inc-fleat-icon"><img src="{{ asset('img/bed.svg') }}" width="13" alt="" /></div>{{ $row->unitType }} bedroom
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('img/bathtub.svg') }}" width="13" alt="" /></div>{{ $row->bathroom }} bath
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('img/move.svg') }}" width="13" alt="" /></div>{{ $row->area }} Sq ft
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
						
					</div>
					
					<div class="row pt-5">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="{{ route('investor.viewAllProperty') }}" class="btn btn-dark btn-md rounded">Browse More Properties</a>
						</div>
					</div>
					
				</div>	
			</section>
			<!-- ================================= Explore Property =============================== -->
			
			
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
			<!-- <section class="theme-bg call-to-act-wrap">
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
			</section> -->
			<!-- ============================ Call To Action End ================================== -->

			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Log In</h4>
							<div class="login-form">
								<form method="POST" action="{{ route('login') }}">
								@csrf
									<div class="form-group">
										<label>Email</label>
										<div class="input-with-icon">
											<input type="email" name="email" class="form-control" placeholder="Username">
											<i class="ti-user"></i>
										</div>
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<div class="input-with-icon">
											<input type="password" name="password" class="form-control" placeholder="*******">
											<i class="ti-unlock"></i>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Login</button>
									</div>
								
								</form>
							</div>
							<!-- <div class="modal-divider"><span>Or login via</span></div>
							<div class="social-login mb-3">
								<ul>
									<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
									<li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google+</a></li>
								</ul>
							</div> -->
							<div class="text-center">
								@if (Route::has('password.request'))
                                    <a class="link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
								<!-- <p class="mt-5"><a href="#" class="link">Forgot password?</a></p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->

@endsection

@section('extra-script')
@endsection
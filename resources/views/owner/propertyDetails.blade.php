@extends('owner.master')

@section('title')
	Property Detail
@endsection

@section('extra-css')
@endsection

@section('content')


				<div class="container">
					<div class="row">
						
						<!-- ============================ Hero Banner  Start================================== -->
						<div class="featured_slick_gallery gray mb-3">
							@if($data->image != '')
							<div class="featured_slick_gallery-slide">
								@foreach(json_decode($data->image) as $key=>$res)
									@if($key < 1)
										<div class="featured_slick_padd"><a href="#" class="mfp-gallery"><img src="{{ asset('property/'. $res) }}" class="img-fluid mx-auto" alt="" /></a></div>
									@else
										<div class="featured_slick_padd"><a href="#" class="mfp-gallery"><img src="{{ asset('property/'. $res) }}" class="img-fluid mx-auto" alt="" /></a></div>
									@endif
								@endforeach
								</div>
							@endif
							<!-- <div class="featured_slick_gallery-slide">
								<div class="featured_slick_padd"><a href="assets/img/p-1.jpg" class="mfp-gallery"><img src="{{ asset('property/'. $data->image) }}" class="img-fluid mx-auto" alt="" /></a></div>
							</div> -->
							<!-- <a href="JavaScript:Void(0);" class="btn-view-pic">View photos</a> -->
						</div>
						<!-- ============================ Hero Banner End ================================== -->
						
						<!-- property main detail -->
						<div class="col-lg-8 col-md-12 col-sm-12">
						
							<div class="property_block_wrap style-2 p-4">
								<div class="prt-detail-title-desc">
									<span class="prt-types sale">For {{ $data->propertyFor }}</span>
									<h3>{{ $data->title }} </h3>
									<span><i class="lni-map-marker"></i>  {{ $data->country }} ,{{ $data->city }}</span>
									<h3 class="prt-price-fix">&#8377; {{ $data->price }}</sub></h3>
									<div class="list-fx-features">
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('img/bed.svg') }}" width="13" alt=""></div>{{ $data->unitType }} Beds
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('img/bathtub.svg') }}" width="13" alt=""></div>{{ $data->bathroom }} Bath
										</div>
										<div class="listing-card-info-icon">
											<div class="inc-fleat-icon"><img src="{{ asset('img/move.svg') }}" width="13" alt=""></div>{{ $data->area }} sqft
										</div>
									</div>
								</div>
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#features" data-bs-target="#clOne" aria-controls="clOne" href="javascript:void(0);" aria-expanded="false"><h4 class="property_block_title">Detail & Features</h4></a>
								</div>
								<div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
									<div class="block-body">
										<ul class="deatil_features">
											<li><strong>Bedrooms:</strong>{{ $data->unitType }} Beds</li>
											<li><strong>Bathrooms:</strong>{{ $data->bathroom }} Bath</li>
											<li><strong>Areas:</strong>{{ $data->area }} sq ft</li>
											<li><strong>Parking:</strong>{{ $data->parking }}</li>
											<li><strong>Property Type:</strong>{{ $data->propertyType }}</li>
											<li><strong>Status:</strong>{{ $data->status }}</li>
											<li><strong>Furnishing:</strong>{{ $data->furnishing }}</li>
											<li><strong>Balconies:</strong> {{ $data->balconies }} </li>
											<li><strong>Lock In Period:</strong>{{ $data->lock }} Years</li>
											<!-- <li><strong>Exterior:</strong>FinishBrick</li>
											<li><strong>Swimming Pool:</strong>Yes</li>
											<li><strong>Elevetor:</strong>Yes</li>
											<li><strong>Fireplace:</strong>Yes</li>
											<li><strong>Free WiFi:</strong>No</li> -->
											
										</ul>
									</div>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#dsrp" data-bs-target="#clTwo" aria-controls="clTwo" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Description</h4></a>
								</div>
								<div id="clTwo" class="panel-collapse collapse show">
									<div class="block-body">
                                        {{ $data->about }}
										<!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p> -->
										<!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> -->
									</div>
								</div>
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#amen"  data-bs-target="#clThree" aria-controls="clThree" href="javascript:void(0);" aria-expanded="true"><h4 class="property_block_title">Ameneties</h4></a>
								</div>
								
								<div id="clThree" class="panel-collapse collapse show">
									<div class="block-body">
										<ul class="avl-features third color">
                                        @if($data->feature != '' && $data->feature != null && $data->feature != 'null' && $data->feature != NULL && is_array(json_decode($data->feature)))
                                   									
											<li>
												<input id="a-1" class="checkbox-custom " {{ in_array("AC", json_decode($data->feature)) ? 'checked' : 'disabled' }} value="AC" name="features[]" type="checkbox">
												<label for="a-1" class="checkbox-custom-label">Air Condition</label>
											</li>
											<li>
												<input id="a-3" class="checkbox-custom" {{ in_array("Heating", json_decode($data->feature)) ? 'checked' : 'disabled' }} value="Heating" name="features[]" type="checkbox">
												<label for="a-3" class="checkbox-custom-label">Heating</label>
											</li>
											<li>
												<input id="a-4" class="checkbox-custom" {{ in_array("Internet", json_decode($data->feature))  ? 'checked' : 'disabled' }} value="Internet" name="features[]" type="checkbox">
												<label for="a-4" class="checkbox-custom-label">Internet</label>
											</li>
											<li>
												<input id="a-5" class="checkbox-custom" {{ in_array("Microwave", json_decode($data->feature))  ? 'checked' : 'disabled' }} value="Microwave" name="features[]" type="checkbox">
												<label for="a-5" class="checkbox-custom-label">Microwave</label>
											</li>
											<li>
												<input id="a-6" class="checkbox-custom" {{ in_array("Smoking", json_decode($data->feature))  ? 'checked' : 'disabled' }} value="Smoking" name="features[]" type="checkbox">
												<label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
											</li>
											<li>
												<input id="a-7" class="checkbox-custom" {{ in_array("Terrace", json_decode($data->feature))  ? 'checked' : 'disabled' }} value="Terrace" name="features[]" type="checkbox">
												<label for="a-7" class="checkbox-custom-label">Terrace</label>
											</li>
											<li>
												<input id="a-11" class="checkbox-custom" {{ in_array("Beach", json_decode($data->feature))  ? 'checked' : 'disabled' }} value="Beach" name="features[]"" type="checkbox">
												<label for="a-11" class="checkbox-custom-label">Beach</label>
											</li>
											<li>
												<input id="a-9" class="checkbox-custom" {{ in_array("Bedding", json_decode($data->feature))  ? 'checked' : 'disabled' }} value="Bedding" name="features[]" type="checkbox">
												<label for="a-9" class="checkbox-custom-label">Bedding</label>
											</li>
											<li>
												<input id="a-14" class="checkbox-custom"  {{ in_array("Balcony", json_decode($data->feature))  ? 'checked' : 'disabled' }} value="Balcony" name="features[]" type="checkbox">
												<label for="a-14" class="checkbox-custom-label">Balcony</label>
											</li>
											<li>
												<input id="a-15" class="checkbox-custom" {{ in_array("Icon", json_decode($data->feature))  ? 'checked' : 'disabled' }} value="Icon" name="features[]" type="checkbox">
												<label for="a-15" class="checkbox-custom-label">Icon</label>
											</li>
											<li>
												<input id="1a-6" class="checkbox-custom"  {{ in_array("Parking", json_decode($data->feature))  ? 'checked' : 'disabled' }} value="Parking" name="features[]" type="checkbox">
												<label for="1a-6" class="checkbox-custom-label">Parking</label>
											</li>
											<li>
												<input id="a-10" class="checkbox-custom" {{ in_array("Wi-Fi", json_decode($data->feature))  ? 'checked' : 'disabled' }} value="Wi-Fi" name="features[]"" type="checkbox">
												<label for="a-10" class="checkbox-custom-label">Wi-Fi</label>
											</li>
                                            
                                            @endif
											<!-- <li>Air Conditioning</li>
											<li>Swimming Pool</li>
											<li>Central Heating</li>
											<li>Laundry Room</li>
											<li>Gym</li>
											<li>Alarm</li>
											<li>Window Covering</li>
											<li>Internet</li>
											<li>Pets Allow</li>
											<li>Free WiFi</li>
											<li>Car Parking</li>
											<li>Spa & Massage</li> -->
										</ul>
									</div>
								</div>
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#vid"  data-bs-target="#clFour" aria-controls="clFour" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Property video</h4></a>
								</div>
								
								<div id="clFour" class="panel-collapse collapse">
									<div class="block-body">
										<div class="property_video">
											<div class="thumb">
												<img class="pro_img img-fluid w100" src="assets/img/pl-6.jpg" alt="7.jpg">
												<div class="overlay_icon">
													<div class="bb-video-box">
														<div class="bb-video-box-inner">
															<div class="bb-video-box-innerup">
																<a href="https://www.youtube.com/watch?v=A8EI6JaFbv4" data-bs-toggle="modal" data-bs-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#floor"  data-bs-target="#clFive" aria-controls="clFive" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Floor Plan</h4></a>
								</div>
								
								<div id="clFive" class="panel-collapse collapse">
									<div class="block-body">
										<div class="accordion" id="floor-option">
											<div class="card">
												<div class="card-header" id="firstFloor">
													<h2 class="mb-0">
														<button type="button" class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#firstfloor" aria-controls="firstfloor">First Floor<span>740 sq ft</span></button>									
													</h2>
												</div>
												<div id="firstfloor" class="collapse" aria-labelledby="firstFloor" data-parent="#floor-option">
													<div class="card-body">
														<img src="assets/img/floor.jpg" class="img-fluid" alt="" />
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header" id="seconfFloor">
													<h2 class="mb-0">
														<button type="button" class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#secondfloor" aria-controls="secondfloor">Second Floor<span>710 sq ft</span></button>
													</h2>
												</div>
												<div id="secondfloor" class="collapse" aria-labelledby="seconfFloor" data-parent="#floor-option">
													<div class="card-body">
														<img src="assets/img/floor.jpg" class="img-fluid" alt="" />
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-header" id="third-garage">
													<h2 class="mb-0">
														<button type="button" class="btn btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#garages" aria-controls="garages">Garage<span>520 sq ft</span></button>                     
													</h2>
												</div>
												<div id="garages" class="collapse" aria-labelledby="third-garage" data-parent="#floor-option">
													<div class="card-body">
														<img src="assets/img/floor.jpg" class="img-fluid" alt="" />
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#loca"  data-bs-target="#clSix" aria-controls="clSix" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Location</h4></a>
								</div>
								
								<div id="clSix" class="panel-collapse collapse">
									<div class="block-body">
										<div class="map-container">
											<div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Our Location"></div>
										</div>

									</div>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap style-2">
								
								<div class="property_block_wrap_header">
									<a data-bs-toggle="collapse" data-parent="#clSev"  data-bs-target="#clSev" aria-controls="clOne" href="javascript:void(0);" aria-expanded="true" class="collapsed"><h4 class="property_block_title">Gallery</h4></a>
								</div>
								
								<div id="clSev" class="panel-collapse collapse">
									<div class="block-body">
										<ul class="list-gallery-inline">
											<li>
												<a href="assets/img/p-1.jpg" class="mfp-gallery"><img src="assets/img/p-1.jpg" class="img-fluid mx-auto" alt="" /></a>
											</li>
											<li>
												<a href="assets/img/p-2.jpg" class="mfp-gallery"><img src="assets/img/p-2.jpg" class="img-fluid mx-auto" alt="" /></a>
											</li>
											<li>
												<a href="assets/img/p-3.jpg" class="mfp-gallery"><img src="assets/img/p-3.jpg" class="img-fluid mx-auto" alt="" /></a>
											</li>
											<li>
												<a href="assets/img/p-4.jpg" class="mfp-gallery"><img src="assets/img/p-4.jpg" class="img-fluid mx-auto" alt="" /></a>
											</li>
											<li>
												<a href="assets/img/p-5.jpg" class="mfp-gallery"><img src="assets/img/p-5.jpg" class="img-fluid mx-auto" alt="" /></a>
											</li>
											<li>
												<a href="assets/img/p-6.jpg" class="mfp-gallery"><img src="assets/img/p-6.jpg" class="img-fluid mx-auto" alt="" /></a>
											</li>
										</ul>
									</div>
								</div>
								
							</div>
							
							
							
						</div>
						
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							
							<!-- Like And Share -->
							<!-- <div class="like_share_wrap b-0">
								<ul class="like_share_list">
									<li><a href="JavaScript:Void(0);" class="btn btn-likes" data-toggle="tooltip" data-original-title="Share"><i class="fas fa-share"></i>Share</a></li>
									<li><a href="JavaScript:Void(0);" class="btn btn-likes" data-toggle="tooltip" data-original-title="Save"><i class="fas fa-heart"></i>Save</a></li>
								</ul>
							</div> -->
                            <div class="row">
								<div class="col-lg-6">
									<h5>Share this to Social Media</h5>
								</div>
								<div class="col-lg-6" id="social-links">
									<a href="" id="facebook-btn" ><i class="fab fa-facebook" style="color: #3b5998; font-size: 2rem"></i></a>	
									<a href="" id="gmail-btn" ><i class="fas fa-envelope" style="color: #cf3e39; font-size: 2rem"></i></a>
									<a href="" id="twitter-btn" ><i class="fab fa-twitter" style="color: #1da1f2; font-size: 2rem"></i></a>
									<a href="" id="whatsapp-btn" ><i class="fab fa-whatsapp" style="color: #25d366; font-size: 2rem"></i></a>
									<a href="" id="linkedin-btn" ><i class="fab fa-linkedin-in" style="color: #0077b5; font-size: 2rem"></i></a>
								</div>
								
							</div>
							
							<div class="details-sidebar">

						

								
								<!-- Featured Property -->
								<div class="sidebar-widgets">
									
									<h4>Your Properties</h4>
									
									<div class="sidebar_featured_property">
										
										<!-- List Sibar Property -->
										@foreach($property as $row)
										<div class="sides_list_property">
											<div class="sides_list_property_thumb">
                                                @if($row->image != '')
												@foreach(json_decode($row->image) as $key=>$res)
													@if($key == 0)
														<img class='img-fluid' src="{{ asset('property/'. $res) }}" />
													@endif
												@endforeach
                                                @endif
											</div>
											<div class="sides_list_property_detail">
												<h4><a href="/propertyDetailOwner/{{ $row->id }}">{{ $row->title }}</a></h4>
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
						</div>
						
					</div>
				</div>

@endsection

@section('extra-script')
<script>
	const gmailBtn = document.getElementById('gmail-btn');
	const facebookBtn = document.getElementById('facebook-btn');
	const linkedinBtn = document.getElementById('linkedin-btn');
	const whatsappBtn = document.getElementById('whatsapp-btn');
	const twitterBtn = document.getElementById('twitter-btn');
	const socialLinks = document.getElementById('social-links');

	let postUrl = encodeURI(document.location.href);
	let postTitle = encodeURI('{{ $data->propertyType }}');

	facebookBtn.setAttribute("href",`https://www.facebook.com/sharer.php?u=${postUrl}`);
    twitterBtn.setAttribute("href", `https://twitter.com/share?url=${postUrl}&text=${postTitle}`);
    linkedinBtn.setAttribute("href", `https://www.linkedin.com/shareArticle?url=${postUrl}&title=${postTitle}`);
    whatsappBtn.setAttribute("href",`https://wa.me/?text=${postTitle} ${postUrl}`);
    gmailBtn.setAttribute("href",`https://mail.google.com/mail/?view=cm&su=${postTitle}&body=${postUrl}`);

	const shareBtn = document.getElementById('shareBtn');
    if(!navigator.share){
      shareBtn.style.display = 'block';
      socialLinks.style.display = 'none';
      shareBtn.addEventListener('click', ()=>{
        navigator.share({
          title: postTitle,
          url:postUrl
        }).then((result) => {
          alert('Thank You for Sharing.')
        }).catch((err) => {
          console.log(err);
        });;
      });
    }else{
    }

</script>
@endsection
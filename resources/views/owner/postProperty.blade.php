@extends('owner.master')

@section('title')
	Submit a Property
@endsection

@section('extra-css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />

@endsection

@section('content')
@php 
use App\Models\Country;
$data = Country::all();
@endphp

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
								
								<div class="row">
									
									<!-- Submit Form -->
									<div class="col-lg-12 col-md-12">
									
										<div class="submit-page">
											
											<!-- Basic Information -->
                                            <form action="{{ route('owner.property') }}" id="dropzone" class="dropzone" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="uid" value="{{ Auth::user()->id }}">

                                                <div class="form-submit">	
                                                    <h3>Basic Information</h3>
                                                    <div class="submit-section">
                                                        <div class="row">
                                                        
                                                            <div class="form-group col-md-12">
                                                                <label>Property Title<span class="tip-topdata" data-tip="Property Title"><i class="ti-help"></i></span></label>
                                                                <input type="text" name="title" value="{{old('title')}}" class="form-control">
                                                            </div>
                                                            @error('title')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
                                                            <div class="form-group col-md-6">
                                                                <label>Property For</label>
                                                                <select id="status" name="propertyFor" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="Sell">For Sell</option>
                                                                </select>
                                                            </div>
                                                            @error('propertyFor')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
                                                            <div class="form-group col-md-6">
                                                                <label>Property Type</label>
                                                                <select id="ptypes" name="propertyType" class="form-control">
                                                                    <option  class="nun" value=""></option>
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
                                                                        <option value="">&nbsp;</option>
                                                                </select>
                                                            </div>
                                                            @error('propertyType')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
                                                            <div class="form-group col-md-6">
                                                                <label>Price</label>
                                                                <input type="text" name="price" value="{{old('price')}}" class="form-control" placeholder="&#8377;">
                                                            </div>
                                                            @error('price')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
                                                            <div class="form-group col-md-6">
                                                                <label>Area</label>
                                                                <input type="text" name="area" value="{{old('area')}}" class="form-control">
                                                            </div>
                                                            @error('area')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
                                                            <div class="form-group col-md-6">
                                                                <label>Bedrooms</label>
                                                                <select id="bedrooms" name="unitType" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                            @error('unitType')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
                                                            <div class="form-group col-md-6">
                                                                <label>Bathrooms</label>
                                                                <select id="bathrooms" name="bathroom" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                            @error('bathroom')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Gallery -->
                                                <div class="form-submit">	
                                                    <h3>Gallery</h3>
                                                    <div class="submit-section">
                                                        <div class="row">
                                                        
                                                            <div class="form-group col-md-12">
                                                                <label>Upload Gallery</label>
                                                                <div class="dz-default dz-message dz-clickable primary-dropzone">
																	<i class="ti-gallery"></i>
																	<span>Drag & Drop To Change Logo</span>
																</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Location -->
                                                <div class="form-submit">	
                                                    <h3>Location</h3>
                                                    <div class="submit-section">
                                                        <div class="row">

                                                            <div class="form-group col-md-12">
                                                                <label>Country</label>
                                                                    <select class="form-control" name="country" id="country" data-parsley-required="true">
                                                                        <option value="">--Select Country--</option>
                                                                            @foreach ($data as $row) 
                                                                            {
                                                                                <option value="{{ $row->name }}">{{ $row->name }}</option>
                                                                            }
                                                                            @endforeach
                                                                    </select>
                                                            </div>
                                                            @error('country')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
                                                            <div class="form-group col-md-6">
                                                                <label>Address</label>
                                                                <input type="text" value="{{old('address')}}" name="address" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group col-md-6">
                                                                <label>City</label>
                                                                <input type="text" value="{{old('city')}}" name="city" class="form-control">
                                                            </div>
                                                            @error('city')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
                                                            <div class="form-group col-md-6">
                                                                <label>State</label>
                                                                <input type="text" value="{{old('state')}}" name="state" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group col-md-6">
                                                                <label>Zip Code</label>
                                                                <input type="text" value="{{old('zip')}}" name="zip" class="form-control">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <!-- Detailed Information -->
                                                <div class="form-submit">	
                                                    <h3>Detailed Information</h3>
                                                    <div class="submit-section">
                                                        <div class="row">
                                                        
                                                            <div class="form-group col-md-12">
                                                                <label>Description</label>
                                                                <textarea class="form-control h-120" name="about">{{old('about')}}</textarea>
                                                            </div>
                                                            
                                                            <div class="form-group col-md-4">
                                                                <label>Furnishing (optional)</label>
                                                                <select id="furnishing" name="furnishing" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="FullFurnished">Full Furnished</option>
                                                                    <option value="SemiFurnished">Semi Furnished</option>
                                                                    <option value="UnFurnished">Un Furnished</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-4">
                                                                <label>Parking (optional)</label>
                                                                <select id="parking" name="parking" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="TwoWheeler">TwoWheeler</option>
                                                                    <option value="FourWheeler">FourWheeler</option>
                                                                    <option value="Both">Both</option>
                                                                    <option value="None">None</option>
                                                                </select>
                                                            </div>
                                                            
                                                            <div class="form-group col-md-4">
                                                                <label>Balconies (optional)</label>
                                                                <select id="balconies" name="balconies" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Lock-In Period (optional)</label>
                                                                <input type="text" value="{{old('lock')}}" name="lock" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group col-md-6">
                                                                <label>Cafeteria (optional)</label>
                                                                <select id="cafeteria" name="cafeteria" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="Dry">Dry</option>
                                                                    <option value="Wet">Wet</option>
                                                                    <option value="NotAvailable">Not Available</option>
                                                                </select>
                                                            </div>
                                                            
                                                            <div class="form-group col-md-12">
                                                                <label>Other Features (optional)</label>
                                                                <div class="o-features">
                                                                    <ul class="no-ul-list third-row">
                                                                        <li>
                                                                            <input id="a-1" class="checkbox-custom" value="AC" name="features[]" type="checkbox">
                                                                            <label for="a-1" class="checkbox-custom-label">Air Condition</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-3" class="checkbox-custom" value="Heating" name="features[]" type="checkbox">
                                                                            <label for="a-3" class="checkbox-custom-label">Heating</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-4" class="checkbox-custom" value="Internet" name="features[]" type="checkbox">
                                                                            <label for="a-4" class="checkbox-custom-label">Internet</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-5" class="checkbox-custom" value="Microwave" name="features[]" type="checkbox">
                                                                            <label for="a-5" class="checkbox-custom-label">Microwave</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-6" class="checkbox-custom" value="Smoking" name="features[]" type="checkbox">
                                                                            <label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-7" class="checkbox-custom" value="Terrace" name="features[]" type="checkbox">
                                                                            <label for="a-7" class="checkbox-custom-label">Terrace</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-11" class="checkbox-custom" value="Beach" name="features[]"" type="checkbox">
                                                                            <label for="a-11" class="checkbox-custom-label">Beach</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-13" class="checkbox-custom" value="Bedding" name="features[]" type="checkbox">
                                                                            <label for="a-13" class="checkbox-custom-label">Bedding</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-14" class="checkbox-custom" value="Balcony" name="features[]" type="checkbox">
                                                                            <label for="a-14" class="checkbox-custom-label">Balcony</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-15" class="checkbox-custom" value="Icon" name="features[]" type="checkbox">
                                                                            <label for="a-15" class="checkbox-custom-label">Icon</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-16" class="checkbox-custom" value="Parking" name="features[]" type="checkbox">
                                                                            <label for="a-16" class="checkbox-custom-label">Parking</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-01" class="checkbox-custom" value="Wi-Fi" name="features[]"" type="checkbox">
                                                                            <label for="a-01" class="checkbox-custom-label">Wi-Fi</label>
                                                                        </li>
                                                                    </ul>
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
                                                    <label>GDPR Agreement *</label>
                                                    <ul class="no-ul-list">
                                                        <li>
                                                            <input id="aj-1" class="checkbox-custom" name="aj-1" type="checkbox">
                                                            <label for="aj-1" class="checkbox-custom-label">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                                <div class="form-group col-lg-12 col-md-12">
                                                    <button class="btn btn-theme-light-2 rounded" type="submit">Submit & Preview</button>
                                                </div>
                                            </form>
														
										</div>
									</div>
									
								</div>
								
							</div>


@endsection

@section('extra-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.js" integrity="sha512-9e9rr82F9BPzG81+6UrwWLFj8ZLf59jnuIA/tIf8dEGoQVu7l5qvr02G/BiAabsFOYrIUTMslVN+iDYuszftVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script src="{{ asset('js/dropzone.js') }}"></script>
        <script>
			function openFilterSearch() {
				document.getElementById("filter_search").style.display = "block";
			}
			function closeFilterSearch() {
				document.getElementById("filter_search").style.display = "none";
			}
		</script>

@endsection
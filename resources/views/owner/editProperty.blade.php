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
$country = Country::all();
@endphp            
<?php $data = $data[0]  ?> 
<div class="dashboard-wraper">
								
								<div class="row">
									
									<!-- Submit Form -->
									<div class="col-lg-12 col-md-12">
									
										<div class="submit-page">
											
											<!-- Basic Information -->
                                            <form action="{{ route('owner.editProperties') }}" id="dropzone" class="dropzone" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $data->id }}">

                                                <div class="form-submit">	
                                                    <h3>Basic Information</h3>
                                                    <div class="submit-section">
                                                        <div class="row">
                                                        
                                                            <div class="form-group col-md-12">
                                                                <label>Property Title<span class="tip-topdata" data-tip="Property Title"><i class="ti-help"></i></span></label>
                                                                <input type="text" name="title" value="{{$data->title}}" class="form-control">
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
                                                                    <option value="Sell" {{ $data->propertyFor == 'Sell' ? 'selected' : '' }}>For Sale</option>
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
																		<option class="ar" value="Apartment" {{ $data->propertyType == 'Apartment' ? 'selected' : '' }}>Flat/ Apartment</option>
																		<option class="ar" value="Residential House" {{ $data->propertyType == 'Residential House' ? 'selected' : '' }}>Residential House</option>
																		<option class="ar" value="Villa" {{ $data->propertyType == 'Villa' ? 'selected' : '' }}>Villa</option>
																		<option class="ar" value="Builder Floor Apartment" {{ $data->propertyType == 'Builder Floor Apartment' ? 'selected' : '' }}>Builder Floor Apartment</option>
																		<option class="ar" value="Penthouse" {{ $data->propertyType == 'Penthouse' ? 'selected' : '' }}>Penthouse</option>
																		<option class="ar" value="Studio Apartment" {{ $data->propertyType == 'Studio Apartment' ? 'selected' : '' }}>Studio Apartment</option>
																		<option class="ar" value="Service Apartment" {{ $data->propertyType == 'Service Apartment' ? 'selected' : '' }}>Service Apartment</option>
																	<option class="bg-secondary text-white">** ALL COMMERCIAL **</option>	
																		<option class="ac" value="Commercial Office Space" {{ $data->propertyType == 'Commercial Office Space' ? 'selected' : '' }}>Commercial Office Space</option>
																		<option class="ac" value="Office in IT Park/ SEZ " {{ $data->propertyType == 'Office in IT Park/ SEZ' ? 'selected' : '' }}>Office in IT Park/ SEZ</option>
																		<option class="ac" value="Commercial Shop" {{ $data->propertyType == 'Commercial Shop' ? 'selected' : '' }}>Commercial Shop</option>
																		<option class="ac" value="Commercial Showroom" {{ $data->propertyType == 'Commercial Showroom' ? 'selected' : '' }}>Commercial Showroom</option>
																		<option class="ac" value="Commercial Land" {{ $data->propertyType == 'Commercial Land' ? 'selected' : '' }}>Commercial Land</option>
																		<option class="ac" value="Warehouse/ Godown" {{ $data->propertyType == 'Warehouse/ Godown' ? 'selected' : '' }}>Warehouse/ Godown</option>
																		<option class="ac" value="Industrial Land" {{ $data->propertyType == 'Industrial Land' ? 'selected' : '' }}>Industrial Land</option>
																		<option class="ac" value="Industrial Building" {{ $data->propertyType == 'Industrial Building' ? 'selected' : '' }}>Industrial Building</option>
																		<option class="ac" value="Industrial Shed" {{ $data->propertyType == 'Industrial Shed' ? 'selected' : '' }}>Industrial Shed</option>
																		<option class="ac" value="Co-working Space" {{ $data->propertyType == 'Co-working Space' ? 'selected' : '' }}>Co-working Space</option>
																	<option class="bg-secondary text-white">** ALL AGRICULTURAL **</option>	
																		<option class="aa" value="Agricultural Land" {{ $data->propertyType == 'Agricultural Land' ? 'selected' : '' }}>Agricultural Land</option>
																		<option class="aa" value="Farm House" {{ $data->propertyType == 'Farm House' ? 'selected' : '' }}>Farm House</option>
											
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
                                                                <input type="text" name="price" value="{{$data->price}}" class="form-control" placeholder="USD">
                                                            </div>
                                                            @error('price')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
                                                            <div class="form-group col-md-6">
                                                                <label>Area</label>
                                                                <input type="text" name="area" value="{{$data->area}}" class="form-control">
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
                                                                    <option value="1" {{ $data->unitType == '1' ? 'selected' : '' }}>1</option>
                                                                    <option value="2" {{ $data->unitType == '2' ? 'selected' : '' }}>2</option>
                                                                    <option value="3" {{ $data->unitType == '3' ? 'selected' : '' }}>3</option>
                                                                    <option value="4" {{ $data->unitType == '4' ? 'selected' : '' }}>4</option>
                                                                    <option value="5" {{ $data->unitType == '5' ? 'selected' : '' }}>5</option>
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
																	<option value="1" {{ $data->bathroom == '1' ? 'selected' : '' }}>1</option>
                                                                    <option value="2" {{ $data->bathroom == '2' ? 'selected' : '' }}>2</option>
                                                                    <option value="3" {{ $data->bathroom == '3' ? 'selected' : '' }}>3</option>
                                                                    <option value="4" {{ $data->bathroom == '4' ? 'selected' : '' }}>4</option>
                                                                    <option value="5" {{ $data->bathroom == '5' ? 'selected' : '' }}>5</option>
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
                                                                            @foreach ($country as $row) 
                                                                            {
                                                                                <option value="{{ $row->name }}" {{$row->name == $data->country ? 'selected': ''  }}>{{ $row->name }}</option>
                                                                            }
                                                                            @endforeach
                                                                    </select>
                                                            </div>
                                                        
                                                            <div class="form-group col-md-6">
                                                                <label>Address</label>
                                                                <input type="text" value="{{$data->address}}" name="address" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group col-md-6">
                                                                <label>City</label>
                                                                <input type="text" value="{{$data->city}}" name="city" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group col-md-6">
                                                                <label>State</label>
                                                                <input type="text" value="{{$data->state}}" name="state" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group col-md-6">
                                                                <label>Zip Code</label>
                                                                <input type="text" value="{{$data->zip}}" name="zip" class="form-control">
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
                                                                <textarea class="form-control h-120" name="about">{{$data->about}}</textarea>
                                                            </div>
                                                            
                                                            <div class="form-group col-md-4">
                                                                <label>Furnishing (optional)</label>
                                                                <select id="furnishing" name="furnishing" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="FullFurnished" {{ $data->furnishing == 'FullFurnished' ? 'selected' : '' }}>Full Furnished</option>
                                                                    <option value="SemiFurnished" {{ $data->furnishing == 'SemiFurnished' ? 'selected' : '' }}>Semi Furnished</option>
                                                                    <option value="UnFurnished" {{ $data->furnishing == 'UnFurnished' ? 'selected' : '' }}>Un Furnished</option>
                                                                </select>
                                                            </div>
 
                                                            <div class="form-group col-md-4">
                                                                <label>Parking (optional)</label>
                                                                <select id="parking" name="parking" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="TwoWheeler" {{ $data->parking == 'TwoWheeler' ? 'selected' : '' }}>TwoWheeler</option>
                                                                    <option value="FourWheeler" {{ $data->parking == 'FourWheeler' ? 'selected' : '' }}>FourWheeler</option>
                                                                    <option value="Both" {{ $data->parking == 'Both' ? 'selected' : '' }}>Both</option>
                                                                    <option value="None" {{ $data->parking == 'None' ? 'selected' : '' }}>None</option>
                                                                </select>
                                                            </div>
                                                            
                                                            <div class="form-group col-md-4">
                                                                <label>Balconies (optional)</label>
                                                                <select id="balconies" name="balconies" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="1" {{ $data->balconies == '1' ? 'selected' : '' }}>1</option>
                                                                    <option value="2" {{ $data->balconies == '2' ? 'selected' : '' }}>2</option>
                                                                    <option value="3" {{ $data->balconies == '3' ? 'selected' : '' }}>3</option>
                                                                    <option value="4" {{ $data->balconies == '4' ? 'selected' : '' }}>4</option>
                                                                    <option value="5" {{ $data->balconies == '5' ? 'selected' : '' }}>5</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label>Lock-In Period (optional)</label>
                                                                <input type="text" value="{{$data->lock}}" name="lock" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group col-md-6">
                                                                <label>Cafeteria (optional)</label>
                                                                <select id="cafeteria" name="cafeteria" class="form-control">
                                                                    <option value="">&nbsp;</option>
                                                                    <option value="Dry" {{ $data->cafeteria == 'Dry' ? 'selected' : '' }}>Dry</option>
                                                                    <option value="Wet" {{ $data->cafeteria == 'Wet' ? 'selected' : '' }}>Wet</option>
                                                                    <option value="NotAvailable" {{ $data->cafeteria == 'NotAvailable' ? 'selected' : '' }}>Not Available</option>
                                                                </select> 
                                                            </div>
                                                            
                                                            <div class="form-group col-md-12">
                                                                <label>Other Features (optional)</label>
                                                                <div class="o-features">
                                                                    <ul class="no-ul-list third-row">
																	@if($data->feature != '' && $data->feature != null && $data->feature != 'null' && $data->feature != NULL && is_array(json_decode($data->feature)))
                                   									
                                                                        <li>
                                                                            <input id="a-1" class="checkbox-custom " {{ in_array("AC", json_decode($data->feature)) ? 'checked' : '' }} value="AC" name="features[]" type="checkbox">
                                                                            <label for="a-1" class="checkbox-custom-label">Air Condition</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-3" class="checkbox-custom" {{ in_array("Heating", json_decode($data->feature)) ? 'checked' : '' }} value="Heating" name="features[]" type="checkbox">
                                                                            <label for="a-3" class="checkbox-custom-label">Heating</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-4" class="checkbox-custom" {{ in_array("Internet", json_decode($data->feature))  ? 'checked' : '' }} value="Internet" name="features[]" type="checkbox">
                                                                            <label for="a-4" class="checkbox-custom-label">Internet</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-5" class="checkbox-custom" {{ in_array("Microwave", json_decode($data->feature))  ? 'checked' : '' }} value="Microwave" name="features[]" type="checkbox">
                                                                            <label for="a-5" class="checkbox-custom-label">Microwave</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-6" class="checkbox-custom" {{ in_array("Smoking", json_decode($data->feature))  ? 'checked' : '' }} value="Smoking" name="features[]" type="checkbox">
                                                                            <label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-7" class="checkbox-custom" {{ in_array("Terrace", json_decode($data->feature))  ? 'checked' : '' }} value="Terrace" name="features[]" type="checkbox">
                                                                            <label for="a-7" class="checkbox-custom-label">Terrace</label>
                                                                        </li>
                                                                        <li>
                                                                            <input id="a-11" class="checkbox-custom" {{ in_array("Beach", json_decode($data->feature))  ? 'checked' : '' }} value="Beach" name="features[]"" type="checkbox">
                                                                            <label for="a-11" class="checkbox-custom-label">Beach</label>
                                                                        </li>
																	@else 
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
                                                                            <input id="a-5" class="checkbox-custom" value="MIcrowave" name="features[]" type="checkbox">
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
                                									@endif
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
                                                    <button class="btn btn-theme-light-2 rounded" type="submit">Update</button>
                                                </div>
                                            </form>
														
										</div>
									</div>
									
								</div>
								
							</div>

    

@endsection

@section('extra-script')

@endsection
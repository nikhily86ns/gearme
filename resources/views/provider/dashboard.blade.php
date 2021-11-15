@extends('provider.master')

@section('title')
	Capital Provider
@endsection

@section('extra-css')
@endsection

@section('content')

				<div class="row">
					
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="dashboard-stat widget-1">
							<div class="dashboard-stat-content"><h4>
                            @if($data)
                                {{ $data['totalplans'] }}
                            @else
                                {{ 0 }}
                            @endif
                            </h4> <span>Total Plans</span></div>
							<div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
						</div>	
					</div>
					
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="dashboard-stat widget-2">
							<div class="dashboard-stat-content"><h4>
                            @if($data)
                                {{ $data['interestedinvestors'] }}
                            @else
                                {{ 0 }}
                            @endif
                            </h4> <span>Total Interested Investors</span></div>
							<div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
						</div>	
					</div>
					
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="dashboard-stat widget-3">
							<div class="dashboard-stat-content"><h4>
                            @if($data)
                                {{ $data['totalinvestors'] }}
                            @else
                                {{ 0 }}
                            @endif
                            </h4> <span>Total Investors</span></div>
							<div class="dashboard-stat-icon"><i class="ti-user"></i></div>
						</div>	
					</div>

				</div>

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


@endsection

@section('extra-script')
@endsection
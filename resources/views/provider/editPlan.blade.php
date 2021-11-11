@extends('provider.master')

@section('title')
	Edit Plan
@endsection

@section('extra-css')
@endsection

@section('content')

	        <!-- ============================ Update Plans Form ================================== -->
							<div class="dashboard-wraper">
								
								<div class="row">
									
									<!-- Submit Form -->
									<div class="col-lg-12 col-md-12">
									
										<div class="submit-page">
											
											<!-- Basic Information -->
                                            <form action="{{ route('provider.editPlan') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $data->id }}">

                                                <div class="form-submit">	
                                                    <h3>Plan Information</h3>
                                                    <div class="submit-section">
                                                        <div class="row">
                                                        
                                                            <div class="form-group col-md-12">
                                                                <label>Plan Amount<span class="tip-topdata" data-tip="Plan Amount"><i class="ti-help"></i></span></label>
                                                                <input type="text" name="amount" value="{{$data->amount}}" class="form-control">
                                                            </div>
                                                            @error('title')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
															<div class="form-group col-md-6">
                                                                <label>Interest Minimum<span class="tip-topdata" data-tip="Interest Minimum"><i class="ti-help"></i></span></label>
                                                                <input type="text" name="interest_min" value="{{$data->interest_min}}" class="form-control">
                                                            </div>
                                                            @error('interest_min')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
															<div class="form-group col-md-6">
                                                                <label>Interest Maximum<span class="tip-topdata" data-tip="Interest Maximum"><i class="ti-help"></i></span></label>
                                                                <input type="text" name="interest_max" value="{{$data->interest_max}}" class="form-control">
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
                                                                    <option value="3 Months" {{ $data->duration == '3 Months' ? 'selected' : '' }}>3 Months</option>
                                                                    <option value="6 Months" {{ $data->duration == '6 Months' ? 'selected' : '' }}>6 Months</option>
                                                                    <option value="9 Months" {{ $data->duration == '9 Months' ? 'selected' : '' }}>9 Months</option>
                                                                    <option value="12 Months" {{ $data->duration == '12 Months' ? 'selected' : '' }}>12 Months</option>
                                                                    <option value="18 Months" {{ $data->duration == '18 Months' ? 'selected' : '' }}>18 Months</option>
                                                                    <option value="24 Months" {{ $data->duration == '24 Months' ? 'selected' : '' }}>24 Months</option>
                                                                    <option value="36 Months" {{ $data->duration == '36 Months' ? 'selected' : '' }}>36 Months</option>
                                                                    <option value="48 Months" {{ $data->duration == '48 Months' ? 'selected' : '' }}>48 Months</option>
                                                                    <option value="60 Months" {{ $data->duration == '60 Months' ? 'selected' : '' }}>60 Months</option>
                                                                </select>
                                                            </div>
                                                            @error('duration')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
															<div class="form-group col-md-6">
                                                                <label>Processing Fee<span class="tip-topdata" data-tip="Processing Fee"><i class="ti-help"></i></span></label>
                                                                <input type="text" name="processing_fee" value="{{$data->processing_fee}}" class="form-control">
                                                            </div>
                                                            @error('processing_fee')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
															<div class="form-group col-md-6">
                                                                <label>Valid From<span class="tip-topdata" data-tip="Valid From"><i class="ti-help"></i></span></label>
																<input type="date" class="form-control" value="{{$data->validfrom}}" min="<?php echo date("Y-m-d"); ?>" id="validfrom" name="validfrom" placeholder="Enter Valid From Date">
                                                            </div>
                                                            @error('validfrom')
                                                                <small id="usercheck" style="color: red;" >
                                                                    {{$message}}
                                                                </small>
                                                            @enderror
															<div class="form-group col-md-6">
                                                                <label>Valid Till<span class="tip-topdata" data-tip="Valid Till"><i class="ti-help"></i></span></label>
                                                                <input type="date" class="form-control" value="{{$data->validto}}" min="<?php echo date("Y-m-d"); ?>" id="validto" name="validto" placeholder="Enter Valid From Date">
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
                                                    <h3>Upload Brochure</h3>
                                                    <div class="submit-section">
                                                        <div class="row">
                                                        
                                                            <div class="form-group col-md-12">
															<label for="file-input">
																<img class=" mt-5 mb-3" width="400px" height="300px" src="{{ asset('plan/'. $data->image) }}" alt="Brochure Image"/>
															</label>
															<input id="file-input" class="form-control" name="file" type="file" />
                                                                <!-- <label>Upload Brochure</label>
                                                                <div class="form-group" id="image">
																	<input type="file" class="form-control" value="{$data->image')}}" id="image" name="file">
																</div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<input type="hidden" name="providerId" value="{{ Auth::user()->id }}">
                                                
                                                <!-- Contact Information -->
                                                <!-- <div class="form-submit">	
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
                                                </div> -->
                                                
                                                
                                                <div class="form-group col-lg-12 col-md-12">
                                                    <button class="btn btn-theme-light-2 rounded" type="submit">Update</button>
                                                </div>
                                            </form>
														
										</div>
									</div>
									
								</div>
								
							</div>
            <!-- <section>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="d-flex justify-content-center">
								<div class="col-lg-8 col-md-8 col-sm-10">
									<h3>Update Your Plan</h3>
									<hr>
									<form action="{{ route('provider.editPlan') }}" method="POST" enctype="multipart/form-data">
										@csrf
                                        <div class="image-upload d-flex flex-column align-items-center text-center p-3 py-5">
                                            <label for="file-input">
                                                <img class=" mt-5 mb-3" width="400px" height="300px" src="{{ asset('plan/'. $data->image) }}" alt="Brochure Image"/>
                                            </label>
                                            <input id="file-input" name="file" type="file" />
                                        </div>
                                        <input type="hidden" value="{{ $data->id }}" name="id">
										<div class="form-group" id="plans">
											<label for="plan">Amount*</label>
    										<input type="text" class="form-control" value="{{ $data->amount }}" id="amount" name="amount" placeholder="Enter Amount ">
										</div>
										@error('amount')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="row">
											<div class="col-md-6 col-lg-6 col-sm-12">
												<div class="form-group" id="interest">
													<label for="interest">Interest Minimun*</label>
													<input type="text" class="form-control" value="{{ $data->interest_min }}" id="interest_min" name="interest_min" placeholder="Enter Interest Minimum %">
												</div>
												@error('interest_min')
													<small id="usercheck" style="color: red;" >
														{{$message}}
													</small>
												@enderror
											</div>
											<div class="col-md-6 col-lg-6 col-sm-12">
												<div class="form-group" id="interest">
													<label for="interest">Interest Maximum*</label>
													<input type="text" class="form-control" value="{{ $data->interest_max }}" id="interest_max" name="interest_max" placeholder="Enter Interest Maximum %">
												</div>
												@error('interest_max')
													<small id="usercheck" style="color: red;" >
														{{$message}}
													</small>
												@enderror
											</div>
										</div>
										
										<div class="form-group" id="duration">
											<label for="exampleFormControlInput1" class="mb-3">Duration*</label> <br>
											<div class="btn-group btn-group-toggle"  data-toggle="buttons">
												<label class="btn btn-outline-primary mr-5 rounded-pill">
													<input type="radio" name="duration" value="3 Months" {{ $data->duration == '3 Months' ? 'checked' : '' }} id="3m" autocomplete="off"> 3 Months
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="duration" value="6 Months" {{ $data->duration == '6 Months' ? 'checked' : '' }} id="6m" autocomplete="off"> 6 Months
												</label>
												<label class="btn btn-outline-primary ms-3 mr-5 rounded-pill">
													<input type="radio" name="duration" value="9 Months" {{ $data->duration == '9 Months' ? 'checked' : '' }} id="9m" autocomplete="off"> 9 Months
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="duration" value="12 Months" {{ $data->duration == '12 Months' ? 'checked' : '' }} id="12m" autocomplete="off"> 12 Months
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="duration" value="18 Months" {{ $data->duration == '18 Months' ? 'checked' : '' }} id="18m" autocomplete="off"> 18 Months
												</label>
												<label class="btn btn-outline-primary ms-3 rounded-pill">
													<input type="radio" name="duration" value="24 Months" {{ $data->duration == '24 Months' ? 'checked' : '' }} id="24m" autocomplete="off"> 24 Months
												</label>
											</div>
										</div>
										@error('duration')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="form-group" id="plans">
											<label for="plan">Processing Fee*</label>
    										<input type="text" class="form-control" value="{{ $data->processing_fee }}" id="processing_fee" name="processing_fee" placeholder="Enter Processing Fee ">
										</div>
										@error('processing_fee')
											<small id="usercheck" style="color: red;" >
												{{$message}}
											</small>
										@enderror
										<div class="row">
											<div class="col-md-6 col-lg-6 col-sm-12">
												<div class="form-group" id="validfrom">
													<label for="valid">Valid From*</label>
													<input type="date" class="form-control" value="{{ $data->validfrom }}" id="validfrom" name="validfrom" placeholder="Enter Valid From Date">
												</div>	
												@error('validfrom')
													<small id="usercheck" style="color: red;" >
														{{$message}}
													</small>
												@enderror
											</div>
											<div class="col-md-6 col-lg-6 col-sm-12">
												<div class="form-group" id="validto">
													<label for="plan">Valid To*</label>
													<input type="date" class="form-control" value="{{ $data->validto }}" id="validto" name="validto" placeholder="Enter Valid Till Date ">
												</div>
												@error('validto')
													<small id="usercheck" style="color: red;" >
														{{$message}}
													</small>
												@enderror
											</div>
										</div>

										<div class="mt-5 text-center">
											<button class="btn btn-primary" type="submit">Update Plan</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			 -->
			<!-- ============================ Post PLans Form End ================================== -->



@endsection

@section('extra-script')
@endsection
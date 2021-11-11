@extends('layouts.app')

@section('title')
	Capital Provider Edit Plan
@endsection

@section('extra-css')
@endsection

@section('content')

	        <!-- ============================ Post Plans Form ================================== -->

            <section>
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
			
			<!-- ============================ Post PLans Form End ================================== -->



@endsection

@section('extra-script')
@endsection
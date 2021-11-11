@extends('investor.master')

@section('title')
	Selected Plan
@endsection

@section('extra-css')
@endsection

@section('content')

         
            <!-- ============================ Selected Plan Details Start ================================== -->

            <section class="bg-orange">
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="card p-3">
                                    <div class="form-group">
                                        <label for="plan">Plan Amount*  </label><h4>{{ $data->amount }}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Duration*  </label><h4>{{ $data->duration }}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Minimun Interest*  </label><h4>{{ $data->interest_min }}%</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Maximun Interest*  </label><h4>{{ $data->interest_max }}%</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Processing Fee*  </label><h4>{{ $data->processing_fee }}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Valid From*  </label><h4>{{ $data->validfrom }}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Valid Till*  </label><h4>{{ $data->validto }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="card p-3">
                                    <img class="my-5" max-width="auto" max-height="auto" src="{{ asset('plan/'. $data->image) }}" alt="Brochure Image"/>    
                                </div>
                                <div class="text-center mt-3">
									<form action="{{ route('investor.requestProvider') }}" method="POST">
										@csrf
										<input type="hidden" value="{{ $data->id }}" name="planId">
										<input type="hidden" value="{{ $data->providerId }}" name="providerId">
										<input type="hidden" value="{{ Auth::user()->id }}" name="investorId">
                                    	<button type='submit' class="btn btn-success">Request</button>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ============================ Selected Plan Details End ================================== -->
			

@endsection

@section('extra-script')
@endsection
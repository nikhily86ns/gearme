@extends('provider.master')

@section('title')
    Potential Investor
@endsection

@section('extra-css')
@endsection

@section('content')

<div class="dashboard-wraper">
							
								<!-- Bookmark Property -->
								<div class="form-submit">	
									<h4>Potential Investor</h4>
								</div>
								
								<div class="row">
								@foreach($datap as $key=>$row)
									<!-- Single Property -->
									<div class="col-md-12 col-sm-12 col-md-12">
										<div class="singles-dashboard-list">
                                            <div class="sd-list-left">
												@if($row->profileimage != '')
												    <img class="img-fluid"  src="{{ asset('profile/'. $row->profileimage) }}"/>
												@endif
												<!-- <img src="assets/img/p-3.jpg" class="img-fluid" alt="" /> -->
											</div>
											<div class="sd-list-right">
												<h4 class="listing_dashboard_title"><a href="#" class="theme-cl">Interested in Amount :-  &#8377; {{ $row->amount }}</a></h4>
												<div class="user_dashboard_listed">
													Investor Name :- <a href="/investor-detail/{{ $row->notify_id }}">{{ $row->name }}</a>
												</div>
												<div class="mt-4">
													<a class="btn btn-secondary rounded-pill" title="Send Proposal" href="/provider-proposal/{{ $row->id }}">Send Proposal</a>
												</div>
											</div>
										</div>
									</div>
								@endforeach
								</div>
								
							</div>



@endsection

@section('extra-script')
@endsection
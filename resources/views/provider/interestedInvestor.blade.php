@extends('provider.master')

@section('title')
    Interested Investor
@endsection

@section('extra-css')
@endsection

@section('content')

                            <div class="dashboard-wraper">
								@if(count($data) > 0)
								<!-- Bookmark Property -->
								<div class="form-submit">	
									<h4>Interested Investor</h4>
								</div>
								
								<div class="row">
								@foreach($data as $key=>$row)
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
												<h4 class="listing_dashboard_title"><a href="#" class="theme-cl">Amount :-  &#8377; {{ $row->amount }}</a></h4>
												<div class="user_dashboard_listed">
													Minimun Interest :- {{ $row->interest_min }} %
												</div>
												<div class="user_dashboard_listed">
													Maximun Interest :- {{ $row->interest_max }} %
												</div>
												<div class="user_dashboard_listed">
													Processing Fee :- ${{ $row->processing_fee }}
												</div>
												<div class="user_dashboard_listed">
													Valid Till :- {{ $row->validto }}
												</div>
												<div class="user_dashboard_listed">
													Investor Name :- <a href="/investorDetail/{{ $row->notify_id }}">{{ $row->name }}</a>
												</div>
												<!-- <div class="action">
														<a href="/investorDetail/{{ $row->notify_id }}"><i class="ti-pencil"></i></a>
												</div> -->
											</div>
										</div>
									</div>
								@endforeach
								</div>
								@else
								<div class="form-submit">
									<h4>No Interested Investors !!</h4>
								</div>
								@endif
							</div>



@endsection

@section('extra-script')
@endsection
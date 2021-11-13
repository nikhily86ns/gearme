@extends('owner.master')

@section('title')
    Interested Investor
@endsection

@section('extra-css')
@endsection

@section('content')

                            <div class="dashboard-wraper">
							
								<!-- Bookmark Property -->
								@if(count($data) > 0)
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
												</div>
												<div class="sd-list-right">
													<h4 class="listing_dashboard_title"><a href="/propertyDetailOwner/{{ $row->property_id }}" class="theme-cl">Property Title :- {{ $row->title }}</a></h4>
													<div class="user_dashboard_listed">
														Investor Name :- <a href="/interestedInvestorDetail/{{ $row->notify_id }}">{{ $row->name }}</a>
													</div>
													<div class="user_dashboard_listed">
														Message :- {{ $row->description }}
													</div>
													<!-- <div class="action">
															<a href="/propertyDetailOwner/{{ $row->property_id }}" title="Property Details"><i class="ti-eye"></i></a>
															<a href="/interestedInvestorDetail/{{ $row->notify_id }}" title="Investor Details"><i class="ti-eye"></i></a>
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
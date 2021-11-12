@extends('investor.master')

@section('title')
    Requested Finance
@endsection

@section('extra-css')
@endsection

@section('content')

                            <div class="dashboard-wraper">
							
								<!-- Bookmark Property -->
								<div class="form-submit">	
									<h4>Requested Finance</h4>
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
												<h4 class="listing_dashboard_title"><a href="#" class="theme-cl">Plan Amount :- ${{ $row->amount }}</a></h4>
												<div class="user_dashboard_listed">
													Provider Name :- {{ $row->name }}
												</div>
												<div class="action">
														<!-- <a href="/investorDetail/{{ $row->notify_id }}"><i class="ti-pencil"></i></a> -->
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
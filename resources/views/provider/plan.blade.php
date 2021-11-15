@extends('provider.master')

@section('title')
	All Plans
@endsection

@section('extra-css')
@endsection

@section('content')

                            <div class="dashboard-wraper">
							
								<!-- Bookmark Property -->
								<div class="form-submit">	
									<h4>My Plans</h4>
								</div>
								
								<div class="row">
								@foreach($data as $key=>$row)
									<!-- Single Property -->
									<div class="col-md-12 col-sm-12 col-md-12">
										<div class="singles-dashboard-list">
											<div class="sd-list-right">
												<h4 class="listing_dashboard_title"><a href="#" class="theme-cl">Amount :- &#8377; {{ $row->amount }}</a></h4>
												<div class="user_dashboard_listed">
													Valid from :- {{ $row->validfrom }}
												</div>
                                                <div class="user_dashboard_listed">
													Valid To :- {{ $row->validto }}
												</div>
												<div class="user_dashboard_listed">
													Duration :- <a href="javascript:void(0);" class="theme-cl"></a> <a href="javascript:void(0);" class="theme-cl">{{ $row->duration }}</a>
												</div>
                                                <div class="user_dashboard_listed">
													Minimum Interest :- <a href="javascript:void(0);" class="theme-cl"></a> <a href="javascript:void(0);" class="theme-cl">{{ $row->interest_min }}%</a>
												</div>
                                                <div class="user_dashboard_listed">
													Maximum Interest :- <a href="javascript:void(0);" class="theme-cl"></a> <a href="javascript:void(0);" class="theme-cl">{{ $row->interest_max }}%</a>
												</div>
												<div class="user_dashboard_listed">
													Processing Fee: <a href="javascript:void(0);" class="">${{ $row->processing_fee }}</a>
												</div>
												<div class="user_dashboard_listed">
													Status: <a href="javascript:void(0);" class="theme-cl">{{ $row->status }}</a> 
												</div>
												<div class="action">
													<form method="POST" action="{{ route('provider.deletePlan', $row->id) }}">
														@csrf
														<a href="/updatePlans/{{ $row->id }}"><i class="ti-pencil"></i></a>
														<a href="" class="show_confirm"><i class="ti-close"></i></a>
													</form>
													<!-- <a href="/deleteProperty/{{$row->id}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Property" class="delete show_confirm"><i class="ti-close"></i> -->
													</a>
												</div>
											</div>
										</div>
									</div>
								@endforeach
								</div>
								
							</div>


            <!-- <section>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="d-flex justify-content-center">
								<div class="col-lg-12 col-md-12 col-sm-12 card p-4">
									<h3>All Plans</h3>
									<table class="table text-nowrap" id="planTable">
										<thead>
											<tr>
												<th class="border-top-0">#</th>
												<th class="border-top-0">Plan Amount</th>
												<th class="border-top-0">Duration</th>
												<th class="border-top-0">Minimun Interest</th>
												<th class="border-top-0">Maximum Interest</th>
												<th class="border-top-0">Processing Fee</th>
												<th class="border-top-0">Valid From</th>
												<th class="border-top-0">Valid To</th>
												<th class="border-top-0">Action</th>
											</tr>
										</thead>
										<tbody>
												@foreach($data as $key=>$row)
													<tr>
													<td>{{ $key+1 }}</td>
													<td>${{ $row->amount }}</td>
													<td>{{ $row->duration }}</td>
													<td>{{ $row->interest_min }}%</td>
													<td>{{ $row->interest_max }}%</td>
													<td>${{ $row->processing_fee }}</td>
													<td>{{ $row->validfrom }}</td>
													<td>{{ $row->validto }}</td>
													<td> 
														<form method="POST" action="{{ route('provider.deletePlan', $row->id) }}">
															@csrf
															<a href="" class="show_confirm"><i class="fa fa-trash-alt"></i></a>&nbsp;&nbsp;
															<a href="/updatePlans/{{ $row->id }}"><i class="fas fa-edit"></i></a>
														</form>
													</td>
													</tr>
												@endforeach
										</tbody>											
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->


@endsection

@section('extra-script')
@endsection
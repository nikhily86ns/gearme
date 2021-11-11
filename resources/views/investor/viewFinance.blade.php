@extends('investor.master')

@section('title')
	Finance Options
@endsection

@section('extra-css')
@endsection

@section('content')

                <div class="dashboard-wraper">
                    <div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Finance Options Available</h2>
							</div>
						</div>
					</div>
                    <div class="row">
                        @foreach($finance as $key=>$row)
                            <!-- Single Property -->
                            <div class="col-md-12 col-sm-12 col-md-12 ">
                                <div class="singles-dashboard-list shadow p-3 mb-5 bg-white rounded">
                                    <div class="sd-list-right">
                                        <h4 class="listing_dashboard_title">Capital Provider : {{ $row->name }}</h4> 
                                        @foreach($row->plan as $key => $res)
                                        <div class="user_dashboard_listed mt-2">
                                            Plan Amount: from $ {{ $res->amount }}
                                        </div>
                                        <div class="user_dashboard_listed">
                                            Duration: <a href="javascript:void(0);" class="theme-cl"></a> <a href="javascript:void(0);" class="theme-cl"></a>{{ $res->duration }}
                                        </div>
                                        <div class="user_dashboard_listed">
                                        Interest : <a href="javascript:void(0);" class="theme-cl"></a>{{ $res->interest_min }}% -  {{ $res->interest_max }}%
                                        </div>
                                        <div class="user_dashboard_listed">
                                            Processing Fee : <a href="javascript:void(0);" class="theme-cl"></a>{{ $res->processing_fee }} 
                                        </div>
                                        <div class="user_dashboard_listed">
                                            Valid Till : <a href="javascript:void(0);" class="theme-cl"></a> {{ $res->validto }}
                                        </div>
                                        <div class="action">
                                            @php
                                                $valid_till = $res->validto;
                                                $date = date_default_timezone_set('Asia/Kolkata');
                                                $today_date = date('Y-m-d');
                                                
                                                $valid_time = strtotime($valid_till);
                                                $today_time = strtotime($today_date);
                                            @endphp	
                                            @if($valid_time >= $today_time)
                                                <a href="/selectPlans/{{ $res->id }}"><i class="far fa-hand-pointer"></i></a>			
                                            @else	
                                            @endif
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Make Featured" class="delete"><i class="ti-star"></i></a>
                                                <a href="/generatepdf/{{ $res->id }}"><i class="ti-download"></i></a>
                                            </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
				
                </div>


@endsection

@section('extra-script')

@endsection
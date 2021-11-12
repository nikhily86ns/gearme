@extends('owner.master')

@section('title')
	Investor Details
@endsection

@section('extra-css')
@endsection

@section('content')

            <!-- ============================ Selected Plan Details Start ================================== -->
                        <div class="dashboard-wraper">
							
                            <!-- Bookmark Property -->
                            <div class="form-submit">	
                                <h4>Interested Investor</h4>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-md-12">
                                    <div class="singles-dashboard-list">
                                        <div class="sd-list-right">
                                            <h4 class="listing_dashboard_title"><a href="#" class="theme-cl">Email :- {{ $data->email }}</a></h4>
                                            <div class="user_dashboard_listed">
                                                Investor Name :- {{ $data->investor_name }}
                                            </div>
                                            <div class="user_dashboard_listed">
                                                Investor Country :- {{ $data->country }}
                                            </div>
                                            <div class="user_dashboard_listed">
                                                Investor Phone :- {{ $data->phone }}
                                            </div>
                                            <div class="user_dashboard_listed">
                                                Interested In :- {{ $data->owner_name }}
                                            </div>
                                            <!-- <div class="action">
                                                    <a href=""><i class="ti-pencil"></i></a>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
            

            <!-- ============================ Selected Plan Details End ================================== -->
			

@endsection

@section('extra-script')
@endsection
@extends('provider.master')

@section('title')
	Investor Details
@endsection

@section('extra-css')
<style>
    .chat {
    background-color: #555;
    color: white;
    text-decoration: none;
    /* padding: 15px 26px; */
    position: relative;
    display: inline-block;
    border-radius: 2px;
    }

    .chat:hover {
    background: red;
    }

    .chat .badge {
    position: absolute;
    top: -10px;
    right: -10px;
    padding: 5px 10px;
    border-radius: 50%;
    background-color: red;
    color: white;
    }
</style>
@endsection

@section('content')

            <!-- ============================ Selected Plan Details Start ================================== -->
                        <div class="dashboard-wraper">
							
                            <!-- Bookmark Property -->
                            <div class="form-submit">	
                                <h4>Investor Detail</h4>
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
                                                Interested In :- {{ $data->provider_name }}
                                            </div>
                                            <div class="action">
                                                @if(count($unseen) > 0)
                                                    <a class="chat" title="chat" href="/provider-chat/{{$data->id}}"><i class="far fa-comment"></i>
                                                        <span class="badge">{{ $data->id == $unseen[0]->user_id ? count($unseen) : '' }}</span>
                                                    </a>
                                                @else
                                                    <a class="chat" title="chat" href="/provider-chat/{{$data->id}}"><i class="far fa-comment"></i>
                                                    </a>
                                                @endif
                                            </div>
                                            <!-- <div class="action">
                                                <a class="chat" title="chat" href="/provider-chat/{{$data->id}}"><i class="far fa-comment"></i></a>
											</div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
            <!-- <section class="bg-orange">
                <div class="container">
                    <h5 class="text-end"><a href="{{ route('provider.dashboard') }}" class="btn btn-warning">Go Home</a></h5>
                    <div class="row">
                        <div class="d-flex justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="card p-3">
                                    <div class="form-group">
                                        <label for="plan">Name*  </label><h4>{{ $data->investor_name }}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Email*  </label><h4>{{ $data->email }}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Country*  </label><h4>{{ $data->country }}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Phone*  </label><h4>{{ $data->phone }}</h4>
                                    </div>
                                    <div class="form-group">
                                        <label for="plan">Interested In*  </label><h4>{{ $data->provider_name }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- ============================ Selected Plan Details End ================================== -->
			

@endsection

@section('extra-script')
@endsection
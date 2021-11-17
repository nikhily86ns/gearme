@extends('investor.master')

@section('title')
    Requested Finance Option
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

                            <div class="dashboard-wraper">
							
								<!-- Bookmark Property -->
								<div class="form-submit">	
									<h4>Requested Finance</h4>
								</div>
								
								<div class="row">
								@if(count($data) >0)
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
													<h4 class="listing_dashboard_title"><a href="#" class="theme-cl">Plan Amount :- &#8377; {{ $row->amount }}</a></h4>
														<div class="user_dashboard_listed">
													Duration: <a href="javascript:void(0);" class="theme-cl"></a> <a href="javascript:void(0);" class="theme-cl"></a>{{ $row->duration }}
												</div>
												<div class="user_dashboard_listed">
												Interest : <a href="javascript:void(0);" class="theme-cl"></a>{{ $row->interest_min }}% -  {{ $row->interest_max }}%
												</div>
												<div class="user_dashboard_listed">
													Processing Fee : <a href="javascript:void(0);" class="theme-cl"></a>&#8377; {{ $row->processing_fee }} 
												</div>
												<div class="user_dashboard_listed">
													Valid Till : <a href="javascript:void(0);" class="theme-cl"></a> {{ $row->validto }}
												</div>
												<div class="user_dashboard_listed">
													Provider Name :- {{ $row->name }}
												</div>
												<div class="action">
													@if(count($unseen) > 0)
														<a class="chat" title="chat" href="/investor-chat/{{$row->id}}"><i class="far fa-comment"></i>
															<span class="badge">{{ $row->id == $unseen[0]->user_id ? count($unseen) : '' }}</span>
														</a>
													@else
														<a class="chat" title="chat" href="/investor-chat/{{$row->id}}"><i class="far fa-comment"></i>
															Not Accepted
														</a>
													@endif
												</div>
											
											</div>
										</div>
									</div>
								@endforeach
								@else
								<h4 class="text-center">You Don't Requested Any Finance Option</h4>
								@endif
								</div>
								
							</div>



@endsection

@section('extra-script')
<!-- <script>
	$( document ).ready(function() {
		setInterval(function()
    	{
        var provider_id = $('#provider_id').val();
        $.ajax({
            url: '{{route('investor.getCounts')}}',
            type: 'POST',
            data: {
            "_token": "{{ csrf_token() }}",
            "provider_id": provider_id,
           },
            success:function(data)
            {
                $('.badge').text(data.count);
                console.log(data);
            }
        });
    	}, 3000);
	});
</script> -->
@endsection
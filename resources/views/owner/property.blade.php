@extends('owner.master')

@section('title')
	Properties
@endsection

@section('extra-css')
@endsection

@section('content')
							<div class="dashboard-wraper">
							
								<!-- Bookmark Property -->
								<div class="form-submit">	
									<h4>My Property</h4>
								</div>
								
								<div class="row">
								@foreach($data as $key=>$row)
									<!-- Single Property -->
									<div class="col-md-12 col-sm-12 col-md-12">
										<div class="singles-dashboard-list">
											<div class="sd-list-left">
												@if($row->image != '')
												@foreach(json_decode($row->image) as $key=>$res)
													@if($key < 1)
												<img class="img-fluid"  src="{{ asset('property/'. $res) }}"/>
													@endif
												@endforeach
												@endif
												<!-- <img src="assets/img/p-3.jpg" class="img-fluid" alt="" /> -->
											</div>
											<div class="sd-list-right">
												<h4 class="listing_dashboard_title"><a href="/propertyDetail-Owner/{{ $row->id }}" class="theme-cl">{{ $row->title }}</a></h4>
												<div class="user_dashboard_listed">
													Price: from &#8377; {{ $row->price }}
												</div>
												<div class="user_dashboard_listed">
													Listed in <a href="javascript:void(0);" class="theme-cl"></a> <a href="javascript:void(0);" class="theme-cl">{{ $row->propertyType }}</a>
												</div>
												<div class="user_dashboard_listed">
													Country: <a href="javascript:void(0);" class="theme-cl">{{ $row->country }}</a> , Area: {{ $row->area ? $row->area : ''}} Sq ft
												</div>
												<div class="user_dashboard_listed">
													Status: <a href="javascript:void(0);" class="theme-cl">{{ $row->status }}</a> 
												</div>
												<div class="action">
													<form method="POST" action="{{ route('owner.deleteProperty', $row->id) }}">
														@csrf
														<a href="/update-Property/{{ $row->id }}"><i class="ti-pencil"></i></a>
														<a href="/propertyDetail-Owner/{{ $row->id }}" ><i class="ti-eye"></i></a>
														<a href="" class="show_confirm"><i class="ti-close"></i></a>
													</form>
													<!-- <a href="/deleteProperty/{{$row->id}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Property" class="delete show_confirm"><i class="ti-close"></i> -->
													<!-- <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Make Featured" class="delete"><i class="ti-star"></i></a> -->
													<!-- </a> -->
												</div>
											</div>
										</div>
									</div>
								@endforeach
								</div>
								
							</div>


   

@endsection

@section('extra-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

$('.show_confirm').click(function(event) {
	var form =  $(this).closest("form");
	var name = $(this).data("name");
	event.preventDefault();
	swal({
		title: `Are you sure you want to delete this record?`,
		text: "If you delete this, it will be gone forever.",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
		form.submit();
		}
	});
});

</script>
@endsection
@extends('admin.master')

@section('title')
	Update Property Details
@endsection

@section('extra-css')
@endsection

@section('content')                      
<?php $data = $data[0]  ?> 
    <div class="container">     
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel">
                    <div class="carousel-inner">
                        @if($data->image)
                            @foreach(json_decode($data->image) as $key=>$res)
                                @if($key == 0)
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"  src="{{ asset('property/'. $res) }}"/>
                                    </div>
                                @else
                                <div class="carousel-item">
                                    <img class="d-block w-100"  src="{{ asset('property/'. $res) }}"/>
                                </div>
                                @endif
                            @endforeach
                        @else
                        @endif
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card">
                    <div class="card-header text-center"><h3>{{ __('Update Property') }}</h3></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.editProperty') }}">
                            @csrf
                            <input type="hidden" value="{{ $data->id }}" name="id">
                           
                            <div class="form-group row">
                                <label for="status" class="col-md-4 col-form-label text-md-right">Change Status</label>
                                <div class="form-check col-md-2">
                                    <input class="form-check-input" type="radio" name="status" id="propA" value="Approved" {{ $data->status == 'Approved' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleRadios1">
                                    Approve
                                    </label>
                                </div>
                                <div class="form-check col-md-2">
                                    <input class="form-check-input" type="radio" name="status" id="propR" value="Reject" {{ $data->status == 'Reject' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleRadios2">
                                    Reject
                                    </label>
                                </div>
                                <div class="form-check col-md-4">
                                    <input class="form-check-input" type="radio" name="status" id="propH" value="Hold" {{ $data->status == 'Hold' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleRadios3">
                                    Hold
                                    </label>
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right" for="exampleRadios3">
                                     Reason
                                    </label>
                                    <div class="col-md-6">
                                        ​<textarea id="txtArea" class="form-control" name="reason" rows="2" cols="25">{{ $data->reason }}</textarea>
                                    </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('extra-script')
@endsection
@extends('admin.master')

@section('title')
	Update Provider
@endsection

@section('extra-css')
@endsection

@section('content')                      
<?php $data = $data[0]  ?> 
    <div class="container">     
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center"><h3>{{ __('Update Capital Provider') }}</h3></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.editProvider') }}">
                            @csrf
                            <input type="hidden" value="{{ $data->id }}" name="id">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" required autocomplete="email" readonly>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                           

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ $data->phone }}" name="phone" required>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="country" id="country" data-parsley-required="true">
                                        <option value="">--Select Country--</option>
                                            @foreach ($country as $row) 
                                            {
                                                <option value="{{ $row->name }}" {{ $row->name ==$data->country ? 'selected' : '' }}>{{ $row->name }}</option>
                                            }
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-md-4 col-form-label text-md-right">Change Status</label>
                                <div class="form-check col-md-2">
                                    <input class="form-check-input" type="radio" name="status" id="investorA" value="Approved" {{ $data->status == 'Approved' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleRadios1">
                                    Approve
                                    </label>
                                </div>
                                <div class="form-check col-md-2">
                                    <input class="form-check-input" type="radio" name="status" id="investorR" value="Reject" {{ $data->status == 'Reject' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleRadios2">
                                    Reject
                                    </label>
                                </div>
                                <div class="form-check col-md-4">
                                    <input class="form-check-input" type="radio" name="status" id="investorH" value="Hold" {{ $data->status == 'Hold' ? 'checked' : '' }}>
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
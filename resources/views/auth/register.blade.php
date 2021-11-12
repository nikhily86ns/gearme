@extends('layouts.app')

@section('title')
    Register
@endsection

@section('extra-css')
<style>
    
</style>
@endsection

@section('content')

@php 
use App\Models\Country;
$data = Country::all();
@endphp

        <section class="startup_fuatures_area sec_pad">
            <div class="container">
                <div class="sec_title mb_70 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <h2 class="f_p f_size_30 l_height40 f_600 t_color text-center">Different Ways you Can <br> Use Gear Me</h2>
                </div>
                <ul class="nav nav-tabs startup_tab d-flex justify-content-center my-3" id="myTab" role="tablist">
                    <li class="nav-item" style="margin-right: 10px;">
                        <a class="nav-link active rounded-pill" id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market" aria-selected="true">
                            <span class="icon"><i class="icon-cloud-upload"></i></span>
                            <h4 class="text-white">Register Property Owner</h4>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-right: 10px;">
                        <a class="nav-link rounded-pill" id="app-tab" data-toggle="tab" href="#app" role="tab" aria-controls="app" aria-selected="false">
                            <span class="icon"><i class="icon-screen-tablet"></i></span>
                            <h4 class="text-white">Register Capital Provider</h4>
                        </a>
                    </li>
                    <li class="nav-item" style="margin-right: 10px;">
                        <a class="nav-link rounded-pill" id="hubstaff-tab" data-toggle="tab" href="#hubstaff" role="tab" aria-controls="hubstaff" aria-selected="false">
                            <span class="icon"><i class="icon-graduation"></i></span>
                            <h4 class="text-white">Register Property Investor</h4>
                        </a>
                    </li>
                </ul>
                <div class="tab-content startup_tab_content" id="myTabContent">
                    <div class="tab-pane fade show active" id="market" role="tabpanel" aria-labelledby="market-tab">
                        <div class="startup_tab_img">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header text-center"><h3>{{ __('Register Property Owner') }}</h3></div>
                                            <h4 class="modal-header-title">Sign Up</h4>
                                            <div class="card-body">
                                                <form method="POST" action="{{ route('registerOwner') }}">
                                                    @csrf

                                                    <div class="row">
										
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input type="text" name="name" class="form-control" placeholder="Full Name">
                                                                    <i class="ti-user"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                                                    <i class="ti-email"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input type="password" name="password" class="form-control" placeholder="password">
                                                                    <i class="ti-unlock"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input id="password-confirm" type="password" class="form-control" placeholder="confirm password" name="password_confirmation">
                                                                    <i class="ti-unlock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input type="text" class="form-control" name="phone" placeholder="123 546 5847">
                                                                    <i class="lni-phone-handset"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <select class="form-control" name="country" id="country" data-parsley-required="true">
                                                                        <option value="">--Select Country--</option>
                                                                            @foreach ($data as $row) 
                                                                            {
                                                                                <option value="{{ $row->name }}">{{ $row->name }}</option>
                                                                            }
                                                                            @endforeach
                                                                    </select>
                                                                    <!-- <select class="form-control">
                                                                        <option>As a Customer</option>
                                                                        <option>As a Agent</option>
                                                                        <option>As a Agency</option>
                                                                    </select> -->
                                                                    <i class="ti-briefcase"></i>
                                                                </div>
                                                            </div>
                                                        </div>
										
									                </div>

                                                   
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Sign Up</button>
                                                    </div>
                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="app" role="tabpanel" aria-labelledby="app-tab">
                        <div class="startup_tab_img">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header text-center"><h3>{{ __('Register Capital Provider') }}</h3></div>
                                            <h4 class="modal-header-title">Sign Up</h4>
                                            <div class="card-body">
                                                <form method="POST" action="{{ route('registerProvider') }}">
                                                    @csrf

                                                    <div class="row">
										
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input type="text" name="name" class="form-control" placeholder="Full Name">
                                                                    <i class="ti-user"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                                                    <i class="ti-email"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input type="password" name="password" class="form-control" placeholder="password">
                                                                    <i class="ti-unlock"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input id="password-confirm" type="password" class="form-control" placeholder="confirm password" name="password_confirmation">
                                                                    <i class="ti-unlock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input type="text" class="form-control" name="phone" placeholder="123 546 5847">
                                                                    <i class="lni-phone-handset"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <select class="form-control" name="country" id="country" data-parsley-required="true">
                                                                        <option value="">--Select Country--</option>
                                                                            @foreach ($data as $row) 
                                                                            {
                                                                                <option value="{{ $row->name }}">{{ $row->name }}</option>
                                                                            }
                                                                            @endforeach
                                                                    </select>
                                                                    <!-- <select class="form-control">
                                                                        <option>As a Customer</option>
                                                                        <option>As a Agent</option>
                                                                        <option>As a Agency</option>
                                                                    </select> -->
                                                                    <i class="ti-briefcase"></i>
                                                                </div>
                                                            </div>
                                                        </div>
										
									                </div>

                                                   
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Sign Up</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hubstaff" role="tabpanel" aria-labelledby="hubstaff-tab">
                        <div class="startup_tab_img">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header text-center"><h3>{{ __('Register Property Investor') }}</h3></div> 
                                            <h4 class="modal-header-title">Sign Up</h4>    
                                            <div class="card-body">
                                                <form method="POST" action="{{ route('registerInvestor') }}">
                                                    @csrf

                                                    <div class="row">
										
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input type="text" name="name" class="form-control" placeholder="Full Name">
                                                                    <i class="ti-user"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                                                    <i class="ti-email"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input type="password" name="password" class="form-control" placeholder="password">
                                                                    <i class="ti-unlock"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input id="password-confirm" type="password" class="form-control" placeholder="confirm password" name="password_confirmation">
                                                                    <i class="ti-unlock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <input type="text" class="form-control" name="phone" placeholder="123 546 5847">
                                                                    <i class="lni-phone-handset"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <div class="input-with-icon">
                                                                    <select class="form-control" name="country" id="country" data-parsley-required="true">
                                                                        <option value="">--Select Country--</option>
                                                                            @foreach ($data as $row) 
                                                                            {
                                                                                <option value="{{ $row->name }}">{{ $row->name }}</option>
                                                                            }
                                                                            @endforeach
                                                                    </select>
                                                                    <!-- <select class="form-control">
                                                                        <option>As a Customer</option>
                                                                        <option>As a Agent</option>
                                                                        <option>As a Agency</option>
                                                                    </select> -->
                                                                    <i class="ti-briefcase"></i>
                                                                </div>
                                                            </div>
                                                        </div>
										
									                </div>

                                                   
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-md full-width btn-theme-light-2 rounded">Sign Up</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- Register Property Owner  -->

<!-- <div id="form1">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Property Owner') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registerOwner') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div> -->

<!-- Register capital Provider  -->

<!-- <div id="form2">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Capital Provider') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registerProvider') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div> -->

<!-- Register Property Investor  -->

<!-- <div id="form3">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Property Investor') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registerInvestor') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div> -->


@endsection

@section('extra-script')


@endsection

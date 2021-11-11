@extends('investor.master')

@section('title')
	Change Password
@endsection

@section('extra-css')
@endsection

@section('content')


                            <div class="dashboard-wraper">
                                <form action="/resetInvestorPassword" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12"><label class="labels">Email ID</label><input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" readonly="true"></div>
                                    <div class="col-md-12 mt-2"><label class="labels">Enter New Password</label><input type="password" class="form-control" name="password" placeholder="Enter New Password"></div>
                                    <div class="mt-3 text-center">
                                        <button class="btn btn-danger" type="submit">Reset Password</button>
                                    </div>
                                </form>
								<!-- Basic Information -->
								<!-- <div class="form-submit">	
									<h4>Change Your Password</h4>
									<div class="submit-section">
										<div class="row">
                                            <form action="/resetOwnerPassword" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                                <div class="form-group col-lg-12 col-md-6">
                                                    <label>Old Password</label>
                                                    <input type="password" name="current_password" class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>New Password</label>
                                                    <input type="password" name="password" class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-md-6">
                                                    <label>Confirm password</label>
                                                    <input type="password" name="password_confirmation" class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-lg-12 col-md-12">
                                                    <button class="btn btn-theme-light-2 rounded" type="submit">Save Changes</button>
                                                </div>
                                            </form>
										</div>
									</div>
								</div> -->
								
							</div>


@endsection

@section('extra-script')
@endsection
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-transparent dark">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="#">
								<img src="{{ asset('img/logo-light.png') }}" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
								@if(Auth::check() && Auth::user()->roles == '1')
								<li class="{{ Request::is('dashboard-owner') ? 'active' : '' }}"><a href="/dashboard-owner">Home<span class="submenu-indicator"></span></a>
								</li>
								@elseif(Auth::check() && Auth::user()->roles == '2')
								<li class="{{ Request::is('dashboard-provider') ? 'active' : '' }}"><a href="/dashboard-provider">Home<span class="submenu-indicator"></span></a>
								</li>
								@elseif(Auth::check() && Auth::user()->roles == '3')
								<li class="{{ Request::is('dashboard-investor') ? 'active' : '' }}"><a href="/dashboard-investor">Home<span class="submenu-indicator"></span></a>
								</li>
								@else
								<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home<span class="submenu-indicator"></span></a>
								</li>
								@endif
								<!-- <li class="active"><a href="/dashboard">Home<span class="submenu-indicator"></span></a>
								</li> -->
								
								<li class="{{ Request::is('about-us') ? 'active' : '' }}"><a href="{{ route('aboutus') }}">About Us<span class="submenu-indicator"></span></a>
								</li>

								<li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{ route('contactus') }}">Contact Us<span class="submenu-indicator"></span></a>
								</li>


								
								
								<!-- <li><a href="JavaScript:Void(0);">Features<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="JavaScript:Void(0);">Single Property<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="single-property-1.html">Single Property 1</a></li>                                    
												<li><a href="single-property-2.html">Single Property 2</a></li>                                    
												<li><a href="single-property-3.html">Single Property 3</a></li>   
											</ul>
										</li>
										<li><a href="JavaScript:Void(0);">Agencies & Agents<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="agents.html">Agents List</a></li>                                    
												<li><a href="agent-page.html">Agent Page</a></li>                                    
												<li><a href="agencies.html">Agencies List</a></li>                                    
												<li><a href="agency-page.html">Agency Page</a></li> 
											</ul>
										</li>
										<li><a href="JavaScript:Void(0);">My Account<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="dashboard.html">User Dashboard</a></li><li><a href="payment.html">Payment Confirmation</a></li>
												<li><a href="my-profile.html">My Profile</a></li>                                    
												<li><a href="my-property.html">Property List</a></li>                                    
												<li><a href="bookmark-list.html">Bookmarked Listings</a></li>                                    
												<li><a href="change-password.html">Change Password</a></li> 
											</ul>
										</li>
										<li>
											<a href="compare-property.html">Compare Property</a>                                
										</li>
										<li>
											<a href="submit-property.html">Submit Property</a>                                
										</li>
									</ul>
								</li> -->
								
								<!-- <li><a href="JavaScript:Void(0);">Pages<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="blog.html">Blogs Page</a></li>                                    
										<li><a href="blog-detail.html">Blog Detail</a></li>                                    
										<li><a href="component.html">Shortcodes</a></li> 
										<li><a href="pricing.html">Pricing</a></li>  
										<li><a href="404.html">Error Page</a></li>
										<li><a href="contact.html">Contacts</a></li>
									</ul>
								</li> -->
								<li>
								@guest
									@if (Route::has('register'))
									<li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{ route('register') }}">Sign Up</a></li>
                                    @endif

                                    @if (Route::has('login'))
									<ul class="nav-menu nav-menu-social align-to-right">
									<li class="add-listing blue">
										<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><img src="{{ asset('/img/user-light.svg') }}" width="12" alt="" class="mr-2" />Sign In</a>
									</li>
									</ul>
                                    @endif  
                                @else
                                    <li class="nav-item dropdown" style="float:right;">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                         
										
											{{ Auth::user()->name }}
                                        </a>
									
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											@if(Auth::check() && Auth::user()->roles == '1')
												<a href="{{ route('owner.profile') }}" class="dropdown-item">Profile</a>
											@elseif(Auth::check() && Auth::user()->roles == '2')
												<a href="{{ route('provider.profile') }}" class="dropdown-item">Profile</a>
											@elseif(Auth::check() && Auth::user()->roles == '3')
												<a href="{{ route('investor.profile') }}" class="dropdown-item">Profile</a>
											@else
												<a href="#" class="dropdown-item">Profile</a>
											@endif
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
								</li>
								<!-- <li><a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#signup">Sign Up</a></li> -->
								<!-- <li><a href="{{ route('register') }}">Sign Up</a></li> -->
							
							<!-- </ul>
                            <ul class="navbar-nav ml-auto pt-3" style="float:right;"> -->
                                <!-- Authentication Links -->
								<ul class="nav-menu nav-menu-social align-to-right">
									@if(!Auth::check())
									<li>
										<a href="{{ route('owner.submitProperty') }}" class="text-success"><img src="{{ asset('/img/submit.svg') }}" width="20" alt="" class="mr-2" />Add Property</a>
									</li>
									@elseif(Auth::check() && Auth::user()->roles == '1')
									<li>
										<a href="{{ route('owner.submitProperty') }}" class="text-success"><img src="{{ asset('/img/submit.svg') }}" width="20" alt="" class="mr-2" />Add Property</a>
									</li>
									@else
									@endif
								</ul>
                               
                            </ul>   
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
		    <div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
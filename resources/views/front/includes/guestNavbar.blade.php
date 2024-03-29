<!-- Favicon -->
<link rel="icon" type="image/png" href="{{URL::asset('assets/images/icon/favicon.png')}}">
<header class="header-area">
    <style>
        .aactive {
            color: #F78154 ! importrant;
        }
    </style>

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="mobile-nav">
            <div class="container">
                <div class="mobile-menu">
                    <div class="logo">
                        <a href={{route('home')}}>
                            <img src="https://beauty-recruits.com/public/assets/images/logo-header.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href={{route('home')}}>
                        <img src="https://beauty-recruits.com/public/assets/images/logo-header.png" alt="logo">
                    </a>
                    <span class="label label-danger" style="color: red">Beta</span>


                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href={{route('home')}} class="nav-link {{ request()->is('home') ? 'a_actv' : ''}}">
                                Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href={{route('job-listing')}} class="nav-link {{ request()->is('job-listing') ? 'a_actv' : ''}}
                                ">
                                Jobs
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href={{route('applicant-listing')}} class="nav-link {{ request()->is('applicant-listing') ? 'a_actv' : ''}}
                                ">
                                Job Seekers
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href={{route('company-listing')}} class="nav-link {{ request()->is('company-listing') ? 'a_actv' : ''}}
                                ">
                                Employers
                                </a>
                            </li>
                            @if (!Auth::guard('applicant')->check())
                                <li class="nav-item">
                                    <a href={{route('price-listing')}} class="nav-link {{ request()->is('price-listing') ? 'a_actv' : ''}}
                                    ">
                                    Pricing
                                    </a>
                                </li>
                            @endif

                        </ul>

                        <div class="others-option">
                            @if (Auth::guard('applicant')->check() || Auth::guard('company')->check())
                                <div class="get-quote">
                                    <a href="{{url('/logout')}}" class="default-btn"
                                       style="background-color:  #F78154;">
                                        Logout
                                    </a>
                                </div>

                                @if (Auth::guard('applicant')->check())
                                    <div class="get-quote">
                                        <a href="{{url('/applicant-profile')}}" class="default-btn"
                                           style="background-color:  #336161;">
                                            My Profile
                                        </a>
                                    </div>
                                @elseif(Auth::guard('company')->check())
                                    <div class="get-quote">
                                        <a href="{{url('/company-profile')}}" class="default-btn"
                                           style="background-color:  #336161;">
                                            My Profile
                                        </a>
                                    </div>
                                @endif
                            @else

                                <div class="others-option">
                                    <div class="get-quote">
                                        <a href="{{url('/register-page')}}" class="default-btn"
                                           style="background-color: #336161;">
                                            Register
                                        </a>
                                    </div>
                                    <div class="get-quote">
                                        <a href="{{url('/login-page')}}" class="default-btn"
                                           style="background-color: #F78154;">
                                            Login
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                @if (Auth::guard('applicant')->check() || Auth::guard('company')->check())
                    <div class="container">
                        <div class="option-inner">
                            @if (Auth::guard('applicant')->check())
                                <div class="others-option justify-content-center d-flex align-items-center">
                                    <div class="get-quote">
                                        <a href="/applicant-profile"  class="default-btn" style="background-color:  #336161;
                                    ">
                                            My Profile
                                        </a>
                                    </div>
                                </div>
                            @else
                                <div class="others-option justify-content-center d-flex align-items-center">
                                    <div class="get-quote">
                                        <a href="{{url('/company-profile')}}"  class="default-btn" style="background-color:  #336161;
                                    ">
                                            My Profile
                                        </a>
                                    </div>
                                </div>
                            @endif
                            <div class="others-option justify-content-center d-flex align-items-center">
                                <div class="get-quote">
                                    <a href="{{url('/logout')}}" class="default-btn"
                                       style="background-color:  #F78154;">
                                        Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-option justify-content-center d-flex align-items-center">
                                <div class="get-quote">
                                    <a href="{{url('/register-page')}}" class="default-btn"
                                       style="background-color: #336161;">
                                        Register
                                    </a>
                                </div>
                            </div>
                            <div class="others-option justify-content-center d-flex align-items-center">
                                <div class="get-quote">
                                    <a href="{{url('/login-page')}}" class="default-btn">
                                        Login
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>

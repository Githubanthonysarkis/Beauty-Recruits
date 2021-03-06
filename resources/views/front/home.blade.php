@extends('layouts.site')

@section('content')
    <!-- Start Banner Area -->
    <section class="banner-area ptb-100"
             style="background-image: url('{{asset('public/assets/images/intro-image.jpg')}}'); background-repeat:no-repeat;
                 background-position:center;
                 background-attachment:fixed;
                 background-size:cover;
                 background-color:#336161;
                 width:100%;
                 height:750px;">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center mr-0 m-lg-3">
                        <div class="col-lg-6">
                            <div class="banner-content">
                                <div id="banner" class="page-title-content">
                                    <h1 style="color: #ffffff; ">Your Hair, Beauty and <br> Medical Spa Career <br>
                                        starts here!</h1>
                                    <p style="color: #ffffff;font size: 30px;">Register your profile or company <br>absolutely free!
                                    </p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    {{-- <section class="banner-area ptb-100" style="background-image: url('public/assets/images/intro-image.jpg');
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed; 
    background-size: cover;
    background-color: #336161;
    width: 100%;
    height: 750px;">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="banner-content">
                                <h1 style="color: #ffffff;">Your Hair, Beauty and Medical Spa Career starts here!</h1>
                                <p style="color: #ffffff;font size: 30px;">Register your profile or company absolutely free!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Banner Area -->

    <!-- Start Hot Jobs Area -->
    <section class="hot-jobs-area bg-color pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <br><br>
                        <span>Hot Jobs</span>
                        <h2>New & Random Jobs</h2>
                    </div>

                        @foreach ($data ?? [] as $item)
                            {{-- <div> {{$item->field_expertise}}</div>  --}}

                            {{--
                                            <div class="hot-jobs-list">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="hot-jobs-content">
                                                        <h3><a href="job-details.html">{{$item->job_title}}</a></h3>
                                                            <span class="sub-title">{{$item->field_expertise->expertise_name}}</span>
                                                            <ul>
                                                            <li><span>Job Type:</span> {{$item->job_type}}</li>
                                                            <li><span>Experience: </span>{{$item->years_of_experience}}</li>
                                                                <li><span>Location: </span>{{$item->company->location}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4">
                                                        <div class="hot-jobs-btn">
                                                        <a href="{{url('job-details/')}}/{{$item->id}}" class="default-btn">Browse Job</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}


                            <div class="hot-jobs-list">
                                <div class="row align-items-center">
{{--                                    <div class="col-lg-2">--}}
{{--                                        <a href="job-details.html" class="hot-jobs-img">--}}
{{--                                            <img src="assets/images/hot-jobs/hot-jobs-1.png" alt="Image">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}

                                    <div class="col-lg-6">
                                        <div class="hot-jobs-content">
                                            <h3><a href="{{url('job-details/')}}/{{$item->id}}">{{$item->job_title}}</a>
                                            </h3>
                                            <span class="sub-title">{{$item->field_expertise->expertise_name}}</span>
                                            <ul>
                                                <li><span>Job Type:</span> {{$item->job_type}}</li>
                                                <li><span>Experience: </span>{{$item->years_of_experience}}</li>
                                                <li><span>Location: </span>{{$item->company->location}}</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="hot-jobs-btn">
                                            <a href="{{url('job-details/')}}/{{$item->id}}" class="default-btn">Browse
                                                Job</a>
                                            <p><span>Deadline: </span>{{$item->time_frame}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach


                </div>
            </div>
        </div>
    </section>
    <!-- End Hot Jobs Area -->
@endsection

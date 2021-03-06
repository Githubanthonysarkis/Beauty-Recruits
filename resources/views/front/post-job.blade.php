@extends('layouts.site')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Post a job listing now and fill your vacancy faster!</h2>
                <ul>
                    <li>
                        <a href={{route('home')}}>
                            Home
                        </a>
                    </li>
                    <li class="active">Company Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Candidates Profile Area -->
    <section class="candidates-profile-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="avatar-sidebar">
                        {{-- <h3>Profile</h3>

                        <div class="avatar-img">
                            <img src="../assets/images/avatar-img.jpg" alt="Image">

                            <div class="avatar-mane">
                                <h4>Randall Guerrero</h4>
                                <span>UX/UI Designer</span>
                            </div>
                        </div> --}}

                        <ul>
                            <li>
                                <a href="{{url('/company-profile')}}">Profile</a>
                            </li>
                            <li>
                                <a  href="{{url('company-dashboard')}}">Dashboard</a>
                            </li>
                            <li>
                                <a class="active">Post a Job</a>
                            </li>
                            <li>
                                <a href="{{url('company-subscription')}}">Subscription</a>
                            </li>
                            <li>
                                <a href='/company-change-password?token={{auth()->user()->token}}'>Change Password</a>
                            </li>
                            <li>
                                <a href="{{url('/logout')}}">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="candidates-profile-content">
                        <form class="profile-info" action="{{url(env('APP_URL').'company-post-job')}}" method="post">
                            <h3>Job Description</h3>

                            <div class="row">
                                @csrf
                                <div hidden class="col-lg-12 col-md-12">
                                    <div hidden class="col-lg-12">
                                        <div hidden class="form-group">
                                            <label>Company ID*</label>
                                            <input value="{{auth()->guard('company')->id()}}" required
                                                   class="form-control" type="text" name="company_id">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12 col-md-12">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Job title*</label>
                                            <input required class="form-control" type="text" name="job_title">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Category*</label>
                                            <select required name="expertise_id">
                                                <option value="">Choose a category</option>

                                                @foreach ($categories as $category)

                                                    <option
                                                        value="{{$category->id}}">{{$category->expertise_name}}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Job Types*</label>
                                        <select required name="job_type">
                                            <option value="Full Time">Full Time</option>
                                            <option value="Part Time">Part Time</option>
                                            <option value="Contract">Contract</option>
                                            <option value="Internship">Internship</option>
                                            <option value="Office">Office</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Years of Experience*</label>
                                            <input required class="form-control" type="number"
                                                   name="years_of_experience">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Application Deadline</label>
                                        <div class="input-group date" id="datetimepicker">
                                            <input required type="text" class="form-control" placeholder="12/11/2021"
                                                   name="time_frame">
                                            <span class="input-group-addon"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Monthly salary rate ($) </label>
                                        <select required name="salary">
                                            <option value="default">Not Disclosed</option>
                                            <option value="Up to 1,000 USD ">Up to 1,000 USD</option>
                                            <option value="1,000 To 2,000 USD">1,000 To 2,000 USD</option>
                                            <option value="2,000 To 3,000 USD">2,000 To 3,000 USD</option>
                                            <option value="3,000 To 4,000 USD">3,000 To 4,000 USD</option>
                                            <option value="4,000 To 5,000 USD">4,000 To 5,000 USD</option>
                                            <option value="5,000 To 6,000 USD">5,000 To 6,000 USD</option>
                                            <option value="6,000 To 7,000 USD">6,000 To 7,000 USD</option>
                                            <option value="7,000 To 8,000 USD">7,000 To 8,000 USD</option>
                                            <option value="8,000 To 9,000 USD">8,000 To 9,000 USD</option>
                                            <option value="9,000 To 10,000 USD">9,000 To 10,000 USD</option>
                                            <option value="Over 10,000 USD">Over 10,000 USD</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Job Description*</label>
                                        <textarea required maxlength="200" name="job_description" class="form-control"
                                                  rows="6"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Job Question*</label>
                                        <textarea required maxlength="200" name="question" class="form-control"
                                                  rows="6"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Date Posted*</label>
                                            <input requiured class="form-control" type="date" name="date_posted"
                                                   placeholder="yyyy-mm-dd" value=""
                                                   min="1997-01-01" max="2030-12-31">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="default-btn">
                                        Post a Job
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Candidates Profile Area -->

@endsection

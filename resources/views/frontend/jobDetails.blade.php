@extends('frontend.layouts.app')

@section('title','Job Details')

@section('content')
<main class="main">
    <section class="section-box mt-50">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="box-border-single">
                        <div class="row mt-10">
                            <div class="col-lg-8 col-md-12">
                                <h3>{{$jobs->title}}</h3>
                                <div class="mt-0 mb-15"><span class="card-briefcase">{{$jobs->category->name}}</span><span class="card-time">{{$jobs->created_at}}</span></div>
                            </div>
                            {{-- <div class="col-lg-4 col-md-12 text-lg-end">
                                <a class="btn btn-apply-icon btn-apply btn-apply-big hover-up" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</a>
                            </div> --}}
                        </div>
                        <div class="border-bottom pt-10 pb-10"></div>
                        <div class="banner-hero banner-image-single mt-10 mb-20"><img src="{{ asset('uploads/' . $jobs->image) }}" alt="jobBox" height="300"></div>
                        <div class="job-overview">
                            <h5 class="border-bottom pb-15 mb-30">Overview</h5>
                            <div class="row">
                                <div class="col-md-6 d-flex">
                                    <div class="sidebar-icon-item"><img src="{{asset('frontend/imgs/page/job-single/industry.svg')}}" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description industry-icon mb-10">Industry</span><strong class="small-heading">{{$jobs->industry->name}}</strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="{{asset('frontend/imgs/page/job-single/job-level.svg')}}" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description joblevel-icon mb-10">Job level</span><strong class="small-heading">{{$jobs->position}}</strong></div>
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="{{asset('frontend/imgs/page/job-single/salary.svg')}}" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description salary-icon mb-10">Salary</span><strong class="small-heading">{{$jobs->salary}}</strong></div>
                                </div>
                                <div class="col-md-6 d-flex">
                                    <div class="sidebar-icon-item"><img src="{{asset('frontend/imgs/page/job-single/experience.svg')}}" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description experience-icon mb-10">Experience</span><strong class="small-heading">1 - 2 years</strong></div>
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="{{asset('frontend/imgs/page/job-single/job-type.svg')}}" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">Job type</span><strong class="small-heading">{{$jobs->category->name}}</strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="{{asset('frontend/imgs/page/job-single/deadline.svg')}}" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Deadline</span><strong class="small-heading">10/08/2022</strong></div>
                                </div>
                            </div>
                            <div class="row mt-25">
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="{{asset('frontend/imgs/page/job-single/updated.svg')}}" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">Updated</span><strong class="small-heading">{{$jobs->updated_at}}</strong></div>
                                </div>
                                <div class="col-md-6 d-flex mt-sm-15">
                                    <div class="sidebar-icon-item"><img src="{{asset('frontend/imgs/page/job-single/location.svg')}}" alt="jobBox"></div>
                                    <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Location</span><strong class="small-heading">{{$jobs->location->name}}</strong></div>
                                </div>
                            </div>
                        </div>
                        <div class="content-single">
                        {!!$jobs->description!!}
                        </div>
                        <div class="single-apply-jobs">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    @if (Auth::guard('candidate')->check())
                                        @if ($application)
                                            <button class="btn btn-danger mr-15">Already Applied</button>
                                        @else
                                            <a class="btn btn-default mr-15" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply Now</a>
                                            
                                        @endif
                                    <a class="btn btn-border" href="#">Save Job</a>
                                    @else
                                    <a class="btn btn-primary btn-shadow hover-up mx-2" href="{{ route('candidate_login_form') }}">Please Sign in First</a>
                                    @endif
                                </div>
                                <div class="col-md-6 text-lg-end social-share">
                                    <h6 class="color-text-paragraph-2 d-inline-block d-baseline mr-10">Share this</h6><a class="mr-5 d-inline-block d-middle" href="#"><img alt="jobBox" src="{{asset('frontend/imgs/template/icons/share-fb.svg')}}"></a><a class="mr-5 d-inline-block d-middle" href="#"><img alt="jobBox" src="{{asset('frontend/imgs/template/icons/share-tw.svg')}}"></a><a class="mr-5 d-inline-block d-middle" href="#"><img alt="jobBox" src="{{asset('frontend/imgs/template/icons/share-red.svg')}}"></a><a class="d-inline-block d-middle" href="#"><img alt="jobBox" src="{{asset('frontend/imgs/template/icons/share-whatsapp.svg')}}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                    <div class="sidebar-border">
                        <div class="sidebar-heading">
                            <div class="avatar-sidebar">
                                <figure><img alt="jobBox" src="{{asset('frontend/imgs/page/job-single/avatar.png')}}"></figure>
                                <div class="sidebar-info"><span class="sidebar-company">{{$jobs->company->name}}</span><span class="card-location">New York, US</span><a class="link-underline mt-15" href="#">02 Open Jobs</a></div>
                            </div>
                        </div>
                        <div class="sidebar-list-job">
                            <div class="box-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.3150609575905!2d-87.6235655!3d41.886080899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2ca8b34afe61%3A0x6caeb5f721ca846!2s205%20N%20Michigan%20Ave%20Suit%20810%2C%20Chicago%2C%20IL%2060601%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1658551322537!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <ul class="ul-disc">
                                <li>205 North Michigan Avenue, Suite 810 Chicago, 60601, USA</li>
                                <li>Phone: (123) 456-7890</li>
                                <li>Email: contact@Evara.com</li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-50 mb-20">
        <div class="container">
            <div class="box-newsletter">
                <div class="row">
                    <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="{{asset('frontend/imgs/template/newsletter-left.png')}}" alt="joxBox"></div>
                    <div class="col-lg-12 col-xl-6 col-12">
                        <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
                        <div class="box-form-newsletter mt-40">
                            <form class="form-newsletter">
                                <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                                <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="{{asset('frontend/imgs/template/newsletter-right.png')}}" alt="joxBox"></div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

<div class="modal fade" id="ModalApplyJobForm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content apply-job-form">
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body pl-30 pr-30 pt-50">
          <div class="text-center">
            <p class="font-sm text-brand-2">Job Application </p>
            <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Start your career today</h2>
            <p class="font-sm text-muted mb-30">Please fill in your information and send it to the employer. </p>
          </div>
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form class="login-register text-start mt-20 pb-30" action="{{route('apply.job',$jobs->id)}}" method="post" enctype="multipart/form-data"> 
            @csrf
            <input type="hidden" name="job_id" value="{{ $jobs->id }}">
            <input type="hidden" name="company_id" value="{{ $jobs->company_id }}">
            <input type="hidden" name="candidate_id" value="@if(Auth::guard('candidate')->check()){{Auth::guard('candidate')->user()->id }}@endif">
            @if(Auth::guard('candidate')->check())
            <div class="form-group">
              <label class="form-label" for="input-1">Full Name *</label>
              <input class="form-control" id="input-1" type="text" name="name" value="{{Auth::guard('candidate')->user()->name}}">
            </div>

            <div class="form-group">
              <label class="form-label" for="input-2">Email *</label>
              <input class="form-control" id="input-2" type="email"  name="email" value="{{Auth::guard('candidate')->user()->email}}">
            </div>
            <div class="form-group">
              <label class="form-label" for="number">Contact Number *</label>
              <input class="form-control" id="number" type="text" name="contact" value="{{ $canDetails->contact ?? ''}}">
            </div>
            <div class="form-group">
              <label class="form-label" for="des">Description</label>
              <input class="form-control" id="des" type="text"  name="bio" value="{{Auth::guard('candidate')->user()->bio}}">
            </div>
            <div class="form-group">
              <label class="form-label" for="file">Upload Resume</label>
              <input class="form-control" id="file" name="cv" type="file">
            </div>
            <div class="login_footer form-group d-flex justify-content-between">
              <label class="cb-container">
                <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span class="checkmark"></span>
              </label><a class="text-muted" href="contact">Lean more</a>
            </div>
            <div class="form-group">
              <button class="btn btn-default hover-up w-100" type="submit" name="apply">Apply Job</button>
            </div>
            <div class="text-muted text-center">Do you need support? <a href="contact">Contact Us</a></div>
            @endif
          </form>
        </div>
      </div>
    </div>
</div>
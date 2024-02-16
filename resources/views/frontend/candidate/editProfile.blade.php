@extends('frontend.layouts.app')

@section('title','Edit Profile')

@section('content')
<main class="main">
    
      <section class="section-box mt-50">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12">
              <div class="box-nav-tabs nav-tavs-profile mb-5">
                <ul class="nav" role="tablist">
                  <li><a class="btn btn-border aboutus-icon mb-20 active" href="#tab-my-profile" data-bs-toggle="tab" role="tab" aria-controls="tab-my-profile" aria-selected="true">My Profile</a></li>
                  <li><a class="btn btn-border recruitment-icon mb-20" href="#tab-my-jobs" data-bs-toggle="tab" role="tab" aria-controls="tab-my-jobs" aria-selected="false">My Jobs</a></li>
                  <li><a class="btn btn-border people-icon mb-20" href="#tab-saved-jobs" data-bs-toggle="tab" role="tab" aria-controls="tab-saved-jobs" aria-selected="false">Saved Jobs</a></li>
                </ul>
                <div class="border-bottom pt-10 pb-10"></div>
                <div class="mt-20 mb-20"><a class="link-red" href="#">Delete Account</a></div>
              </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
              <div class="content-single">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tab-my-profile" role="tabpanel" aria-labelledby="tab-my-profile">
                    <h3 class="mt-0 mb-15 color-brand-1 text-center">Edit Account</h3>
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                      </div>
                    @endif
                    @if (Auth::guard('candidate')->check())
                <form action="{{route('candidate.update.profile')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row" >
                      <div class="mt-35 mb-40 box-info-profie text-center">
                        <div>
                            <img src="{{asset('uploads/' . ($canDetails->image ?? 'candidate.jpg')) }}" alt="Image" width="120px" height="120px" class="rounded-circle">
                        </div>
                        <div class="m-auto p-10">
                            <button class="btn btn-primary"><input type="file" name="profile"></button>
                            {{-- <input type="file" name="profile"> --}}
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="lastName">Name</label>
                          <input type="text" name="name" class="form-control" value="{{ Auth::guard('candidate')->user()->name }}"/>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="lastName">Email</label>
                          <input type="email" name="email" class="form-control" value="{{ Auth::guard('candidate')->user()->email }}"/>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="lastName">Contact</label>
                          <input type="text" name="contact" class="form-control" value="{{ $canDetails->contact ?? '' }}"/>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="lastName">Address</label>
                          <input type="text" name="address" class="form-control" value="{{ $canDetails->address ?? '' }}"/>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for="lastName">Bio</label>
                          <textarea name="bio" class="form-control">{{ $canDetails->bio ?? '' }}</textarea>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="lastName">Old Password</label>
                          <input type="password" name="old_password" class="form-control" value=""/>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="lastName">New Password</label>
                          <input type="password" name="new_password" class="form-control" value=""/>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label for="lastName">Re-Password</label>
                          <input type="password" name="password_confirmation" class="form-control" value=""/>
                        </div>
                      </div>
                    </div>
                    <input type="hidden" name="candidate_id" value="@if (Auth::guard('candidate')->check())
                        {{ Auth::guard('candidate')->user()->id }}@endif">
                    <div class="mt-20 text-center">
                      <button class="btn btn-apply-big font-md font-bold" type="submit">Update Profile</button>
                    </div>
                </form>
                    @endif
                  </div>
                  </div>

                  <div class="tab-pane fade" id="tab-saved-jobs" role="tabpanel" aria-labelledby="tab-saved-jobs">
                    <h3 class="mt-0 color-brand-1 mb-50">Saved Jobs</h3>
                    <div class="row"> 
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card-grid-2 hover-up">
                          <div class="card-grid-2-image-left"><span class="flash"></span>
                            <div class="image-box"><img src="../frontend/imgs/brands/brand-1.png" alt="jobBox"></div>
                            <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                          </div>
                          <div class="card-block-info">
                            <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                            </div>
                            <div class="card-2-bottom mt-30">
                              <div class="row">
                                <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                <div class="col-lg-5 col-5 text-end">
                                  <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card-grid-2 hover-up">
                          <div class="card-grid-2-image-left"><span class="flash"></span>
                            <div class="image-box"><img src="../frontend/imgs/brands/brand-2.png" alt="jobBox"></div>
                            <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                          </div>
                          <div class="card-block-info">
                            <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                            </div>
                            <div class="card-2-bottom mt-30">
                              <div class="row">
                                <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                <div class="col-lg-5 col-5 text-end">
                                  <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card-grid-2 hover-up">
                          <div class="card-grid-2-image-left"><span class="flash"></span>
                            <div class="image-box"><img src="../frontend/imgs/brands/brand-3.png" alt="jobBox"></div>
                            <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                          </div>
                          <div class="card-block-info">
                            <h6><a href="job-details.html">Java Software Engineer</a></h6>
                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                            </div>
                            <div class="card-2-bottom mt-30">
                              <div class="row">
                                <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                <div class="col-lg-5 col-5 text-end">
                                  <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card-grid-2 hover-up">
                          <div class="card-grid-2-image-left"><span class="flash"></span>
                            <div class="image-box"><img src="../frontend/imgs/brands/brand-4.png" alt="jobBox"></div>
                            <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                          </div>
                          <div class="card-block-info">
                            <h6><a href="job-details.html">Frontend Developer</a></h6>
                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                            </div>
                            <div class="card-2-bottom mt-30">
                              <div class="row">
                                <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                <div class="col-lg-5 col-5 text-end">
                                  <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card-grid-2 hover-up">
                          <div class="card-grid-2-image-left"><span class="flash"></span>
                            <div class="image-box"><img src="../frontend/imgs/brands/brand-5.png" alt="jobBox"></div>
                            <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                          </div>
                          <div class="card-block-info">
                            <h6><a href="job-details.html">React Native Web Developer</a></h6>
                            <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                            </div>
                            <div class="card-2-bottom mt-30">
                              <div class="row">
                                <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                <div class="col-lg-5 col-5 text-end">
                                  <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card-grid-2 hover-up">
                          <div class="card-grid-2-image-left"><span class="flash"></span>
                            <div class="image-box"><img src="../frontend/imgs/brands/brand-6.png" alt="jobBox"></div>
                            <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                          </div>
                          <div class="card-block-info">
                            <h6><a href="job-details.html">Senior System Engineer</a></h6>
                            <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                            </div>
                            <div class="card-2-bottom mt-30">
                              <div class="row">
                                <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                <div class="col-lg-5 col-5 text-end">
                                  <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card-grid-2 hover-up">
                          <div class="card-grid-2-image-left"><span class="flash"></span>
                            <div class="image-box"><img src="../frontend/imgs/brands/brand-7.png" alt="jobBox"></div>
                            <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                          </div>
                          <div class="card-block-info">
                            <h6><a href="job-details.html">Products Manager</a></h6>
                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                            </div>
                            <div class="card-2-bottom mt-30">
                              <div class="row">
                                <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                <div class="col-lg-5 col-5 text-end">
                                  <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card-grid-2 hover-up">
                          <div class="card-grid-2-image-left"><span class="flash"></span>
                            <div class="image-box"><img src="../frontend/imgs/brands/brand-8.png" alt="jobBox"></div>
                            <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                          </div>
                          <div class="card-block-info">
                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                            </div>
                            <div class="card-2-bottom mt-30">
                              <div class="row">
                                <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                <div class="col-lg-5 col-5 text-end">
                                  <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card-grid-2 hover-up">
                          <div class="card-grid-2-image-left"><span class="flash"></span>
                            <div class="image-box"><img src="../frontend/imgs/brands/brand-8.png" alt="jobBox"></div>
                            <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                          </div>
                          <div class="card-block-info">
                            <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                            <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                            <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                            <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                            </div>
                            <div class="card-2-bottom mt-30">
                              <div class="row">
                                <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                <div class="col-lg-5 col-5 text-end">
                                  <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="paginations">
                      <ul class="pager">
                        <li><a class="pager-prev" href="#"></a></li>
                        <li><a class="pager-number" href="#">1</a></li>
                        <li><a class="pager-number" href="#">2</a></li>
                        <li><a class="pager-number" href="#">3</a></li>
                        <li><a class="pager-number" href="#">4</a></li>
                        <li><a class="pager-number" href="#">5</a></li>
                        <li><a class="pager-number active" href="#">6</a></li>
                        <li><a class="pager-number" href="#">7</a></li>
                        <li><a class="pager-next" href="#"></a></li>
                      </ul>
                    </div>
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
              <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="../frontend/imgs/template/newsletter-left.png" alt="joxBox"></div>
              <div class="col-lg-12 col-xl-6 col-12">
                <h2 class="text-md-newsletter text-center">New Things Will Always<br> Update Regularly</h2>
                <div class="box-form-newsletter mt-40">
                  <form class="form-newsletter">
                    <input class="input-newsletter" type="text" value="" placeholder="Enter your email here">
                    <button class="btn btn-default font-heading icon-send-letter">Subscribe</button>
                  </form>
                </div>
              </div>
              <div class="col-xl-3 col-12 text-center d-none d-xl-block"><img src="../frontend/imgs/template/newsletter-right.png" alt="joxBox"></div>
            </div>
          </div>
        </div>
      </section>
</main>
@endsection

<header class="header sticky-bar">
    <div class="container">
      <div class="main-header">
        @if (Auth::guard('candidate')->check())
        <div class="header-left">
          <div class="header-logo"><a class="d-flex" href="/"><img alt="jobBox" src="{{asset('frontend/imgs/template/jobhub-logo.svg')}}"></a></div>
        </div>
        <div class="header-nav">
          <nav class="nav-main-menu">
            <ul class="main-menu"> 
              <li><a class="active" href="/">Home</a></li>
              <li><a href="jobs">Jobs</a></li>
              <li class="has-children"><a href="companies">Recruiters</a>
                <ul class="sub-menu">
                  <li><a href="companies">Recruiters</a></li>
                  <li><a href="company-details">Company Details</a></li>
                </ul>
              </li>
              {{-- <li class="has-children"><a href="about">Pages</a>
                <ul class="sub-menu">
                  <li><a href="about">About Us</a></li>
                  <li><a href="pricing">Pricing Plan</a></li>
                  <li><a href="contact">Contact Us</a></li>
                  <li><a href="reset-password">Reset Password</a></li>
                  <li><a href="content-protected">Content Protected</a></li>
                </ul>
              </li> --}}
              <li class="has-children"><a href="blog">Blog</a>
                <ul class="sub-menu">
                  <li><a href="blog">Blog Grid</a></li>
                  <li><a href="blog-details">Blog Single</a></li>
                </ul>
              </li>
              <li class="dashboard"><a href="{{URL('candidate-profile')}}">Profile</a></li>
            </ul>
          </nav>
          <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
        </div>
        <div class="header-right">
          <div class="block-signin"><a class="btn btn-danger hover-up" href="{{ route('candidate_logout') }}">Logout</a></div>
        @else
        <div class="header-left">
          <div class="header-logo"><a class="d-flex" href="/"><img alt="jobBox" src="{{asset('frontend/imgs/template/jobhub-logo.svg')}}"></a></div>
        </div>
        <div class="header-nav">
          <nav class="nav-main-menu">
            <ul class="main-menu"> 
              <li><a class="active" href="/">Home</a></li>
              <li><a href="jobs">Jobs</a></li>
              <li class="has-children"><a href="companies">Recruiters</a>
                <ul class="sub-menu">
                  <li><a href="companies">Recruiters</a></li>
                  <li><a href="company-details">Company Details</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="candidates">Candidates</a>
                <ul class="sub-menu">
                  <li><a href="candidates">Candidates Grid</a></li>
                  <li><a href="candidate-details">Candidate Details</a></li>
                  <li><a href="candidate-profile">Candidate Profile</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="about">Pages</a>
                <ul class="sub-menu">
                  <li><a href="about">About Us</a></li>
                  <li><a href="pricing">Pricing Plan</a></li>
                  <li><a href="contact">Contact Us</a></li>
                  <li><a href="register">Register</a></li>
                  <li><a href="signin">Signin</a></li>
                  <li><a href="reset-password">Reset Password</a></li>
                  <li><a href="content-protected">Content Protected</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="blog">Blog</a>
                <ul class="sub-menu">
                  <li><a href="blog">Blog Grid</a></li>
                  <li><a href="blog-details">Blog Single</a></li>
                </ul>
              </li>
              <li class="dashboard"><a href="/admin" target="_blank">Dashboard</a></li>
            </ul>
          </nav>
          <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
        </div>
        <div class="header-right">
          <div class="block-signin"><a class="btn btn-primary btn-shadow hover-up mx-2" href="{{ route('candidate_login_form') }}">Sign in</a><a class="btn btn-success btn-shadow hover-up" href="{{route('candidate_register')}}">Sign Up</a>
        @endif
        </div>
      </div>
    </div>
  </header>
  <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
      <div class="mobile-header-content-area">
        <div class="perfect-scroll">
          <div class="mobile-search mobile-header-border mb-30">
            <form action="#">
              <input type="text" placeholder="Search…"><i class="fi-rr-search"></i>
            </form>
          </div>
          <div class="mobile-menu-wrap mobile-header-border">
            <!-- mobile menu start-->
            <nav>
              <ul class="mobile-menu font-heading">
                <li><a class="active" href="/">Home</a></li>
                <li class="has-children"><a href="jobs">Find a Job</a>
                  <ul class="sub-menu">
                    <li><a href="jobs">Jobs Grid</a></li>
                    <li><a href="job-details">Jobs Details 2 </a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="companies">Recruiters</a>
                  <ul class="sub-menu">
                    <li><a href="companies">Recruiters</a></li>
                    <li><a href="company-details">Company Details</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="candidates">Candidates</a>
                  <ul class="sub-menu">
                    <li><a href="candidates">Candidates Grid</a></li>
                    <li><a href="candidate-details">Candidate Details</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="about">Pages</a>
                  <ul class="sub-menu">
                    <li><a href="about">About Us</a></li>
                    <li><a href="pricing">Pricing Plan</a></li>
                    <li><a href="contact">Contact Us</a></li>
                    <li><a href="register">Register</a></li>
                    <li><a href="signin">Signin</a></li>
                    <li><a href="reset-password">Reset Password</a></li>
                    <li><a href="content-protected">Content Protected</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="blog">Blog</a>
                  <ul class="sub-menu">
                    <li><a href="blog">Blog Grid</a></li>
                    <li><a href="blog-details">Blog Single</a></li>
                  </ul>
                </li>
                <li><a href="http://wp.alithemes.com/html/jobbox/demos/dashboard" target="_blank">Dashboard</a></li>
              </ul>
            </nav>
          </div>
          <div class="mobile-account">
            <h6 class="mb-10">Your Account</h6>
            <ul class="mobile-menu font-heading">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Work Preferences</a></li>
              <li><a href="#">Account Settings</a></li>
              <li><a href="#">Go Pro</a></li>
              <li><a href="signin">Sign Out</a></li>
            </ul>
          </div>
          <div class="site-copyright">Copyright 2022 &copy; JobBox. <br>Designed by AliThemes.</div>
        </div>
      </div>
    </div>
  </div>
  
@section('script')
  <script>
    $('#ModalApplyJobForm').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var jobId = button.data('jobid');
        $('#job_id').val(jobId);
    });
</script>
@endsection
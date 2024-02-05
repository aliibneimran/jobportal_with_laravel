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
              <li><a href="{{route('jobs')}}">Jobs</a></li>
              <li><a href="{{route('about')}}">About</a></li>
              <li><a href="{{route('contact')}}">Contact</a></li>
              <li class="dashboard"><a href="{{route('candidate_profile')}}">Profile</a></li>
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
              <li><a href="{{route('jobs')}}">Jobs</a></li>
              <li><a href="{{route('about')}}">About Us</a></li>
              <li><a href="{{route('contact')}}">Contact Us</a></li>
              <li><a href="{{route('blog')}}">Blog</a></li>
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
            @if (Auth::guard('candidate')->check())
            <nav>
              <ul class="mobile-menu font-heading">
                <li><a class="active" href="/">Home</a></li>
                <li><a href="{{route('jobs')}}">Jobs</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li class="dashboard"><a href="{{route('candidate_profile')}}">Profile</a></li>
                <li><a class="btn btn-danger hover-up" href="{{ route('candidate_logout') }}">Logout</a></li>
              </ul>
            </nav>
            @else
            <nav>
              <ul class="mobile-menu font-heading">
                <li><a class="active" href="/">Home</a></li>
                <li><a href="{{route('jobs')}}">Jobs</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a class="btn btn-primary btn-shadow hover-up mx-2" href="{{ route('candidate_login_form') }}">Sign in</a></li>
                <li><a class="btn btn-success btn-shadow hover-up" href="{{route('candidate_register')}}">Sign Up</a></li>
              </ul>
            </nav>
            @endif
          </div>
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
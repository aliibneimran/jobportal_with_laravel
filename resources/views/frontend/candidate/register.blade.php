@extends('frontend.layouts.app')

@section('title','Registration')

@section('content')
<main class="main">
      <section class="pt-100 login-register">
        <div class="container"> 
          <div class="row login-register-cover">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
              <div class="text-center">
                <h2 class="mt-10 mb-5 text-brand-1">User Registration</h2>
                <button class="btn social-login hover-up mb-20"><img src="../frontend/imgs/template/icons/icon-google.svg" alt="jobbox"><strong>Sign up with Google</strong></button>
                <div class="divider-text-center"><span>Or continue with</span></div>
              </div>
              <form class="login-register text-start mt-20" action="{{route('candidate.register.create')}}" method="post">
                @csrf
                <div class="form-group">
                  <label class="form-label" for="input-1">Full Name *</label>
                  <input class="form-control" id="input-1" type="text" required="" name="name" placeholder="Steven Job">
                </div>
                <div class="form-group">
                  <label class="form-label" for="input-2">Email *</label>
                  <input class="form-control" id="input-2" type="email" required="" name="email" placeholder="stevenjob@gmail.com">
                </div>
                <div class="form-group">
                  <label class="form-label" for="input-4">Password *</label>
                  <input class="form-control" id="input-4" type="password" required="" name="password" placeholder="************">
                </div>
                <div class="form-group">
                  <label class="form-label" for="input-5">Re-Password *</label>
                  <input class="form-control" id="input-5" type="password" required="" name="password_confirmation" placeholder="************">
                </div>
                <div class="login_footer form-group d-flex justify-content-between">
                  <label class="cb-container">
                    <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span class="checkmark"></span>
                  </label><a class="text-muted" href="page-contact.html">Lean more</a>
                </div>
                <div class="form-group">
                  <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Submit &amp; Register</button>
                </div>
                <div class="text-muted text-center">Already have an account? <a href="{{route('candidate_login_form')}}">Sign in</a></div>
              </form>
            </div>
            <div class="img-1 d-none d-lg-block"><img class="shape-1" src="../frontend/imgs/page/login-register/img-1.svg" alt="JobBox"></div>
            <div class="img-2"><img src="../frontend/imgs/page/login-register/img-2.svg" alt="JobBox"></div>
          </div>
        </div>
      </section>
    </main>
@endsection

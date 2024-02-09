@extends('frontend.layouts.app')

@section('title','Singin')

@section('content')
<main class="main">
      <section class="pt-100 login-register">
        <div class="container"> 
          <div class="row login-register-cover">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
              <div class="text-center">
                <h2 class="mt-10 mb-5 text-brand-1">User Login</h2>

                <button class="btn social-login hover-up mb-20"><img src="../frontend/imgs/template/icons/icon-google.svg" alt="jobbox"><strong>Sign in with Google</strong></button>
                <div class="divider-text-center"><span>Or continue with</span></div>
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
              <form class="login-register text-start mt-20" action="{{route('candidate_login')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label class="form-label" for="input-1">Email address *</label>
                  <input class="form-control" id="input-1" type="text" required="" name="email" placeholder="Steven Job">
                </div>
                <div class="form-group">
                  <label class="form-label" for="input-4">Password *</label>
                  <input class="form-control" id="input-4" type="password" required="" name="password" placeholder="************">
                </div>
                <div class="login_footer form-group d-flex justify-content-between">
                  <label class="cb-container">
                    <input type="checkbox"><span class="text-small">Remenber me</span><span class="checkmark"></span>
                  </label><a class="text-muted" href="page-contact.html">Forgot Password</a>
                </div>
                <div class="form-group">
                  <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Login</button>
                </div>
                <div class="text-muted text-center">Don't have an Account? <a href="{{route('candidate_register')}}">Sign up</a></div>
              </form>
            </div>
            <div class="img-1 d-none d-lg-block"><img class="shape-1" src="../frontend/imgs/page/login-register/img-4.svg" alt="JobBox"></div>
            <div class="img-2"><img src="../frontend/imgs/page/login-register/img-3.svg" alt="JobBox"></div>
          </div>
        </div>
      </section>
</main>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Register Form</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  <link href="{{asset('assets/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/plugins/simplebar/simplebar.css" rel="stylesheet')}}" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  
  <!-- MONO CSS -->
  <link id="main-css-href" rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

  <!-- FAVICON -->
  <link href="{{asset('assets/images/favicon.png')}}" rel="shortcut icon" />
  <script src="{{asset('assets/plugins/nprogress/nprogress.js')}}"></script>
</head>

</head>
  <body class="bg-light-gray" id="body">
          <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
          <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center">
              <div class="col-lg-6 col-xl-5 col-md-10 ">
                <div class="card card-default mb-0">
                  <div class="card-header pb-0">
                    <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                      {{-- <a class="w-auto pl-0" href="/index.html">
                        <img src="{{asset('assets/images/logo.png')}}" alt="Mono">
                        <span class="brand-name text-dark">MONO</span>
                      </a> --}}
                    </div>
                  </div>
                  <div class="card-body px-5 pb-5 pt-0">
                    <h4 class="text-dark text-center mb-5"><b>Company Registration</b></h4>
                    <form action="{{route('company.register.create')}}" method="post">
                      @csrf
                      <div class="row">
                        <div class="form-group col-md-12 mb-4">
                          <input type="text" class="form-control input-lg" id="name" aria-describedby="nameHelp" placeholder="Name" name="name">
                        </div>
                        <div class="form-group col-md-12 mb-4">
                          <input type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="Email" name="email">
                        </div>
                        <div class="form-group col-md-12 ">
                          <input type="password" class="form-control input-lg" id="password" placeholder="Password" name="password">
                        </div>
                        <div class="form-group col-md-12 ">
                          <input type="password" class="form-control input-lg" id="cpassword" placeholder="Confirm Password" name="password_confirmation">
                        </div>
                        <div class="col-md-12">
                          <div class="d-flex justify-content-between mb-3">

                            <div class="custom-control custom-checkbox mr-3 mb-3">
                              <input type="checkbox" class="custom-control-input" id="customCheck2">
                              <label class="custom-control-label" for="customCheck2">I Agree the terms and conditions.</label>
                            </div>

                          </div>
                          <div id="center">
                            <button type="submit" class="btn btn-primary btn-pill mb-4">Sign Up</button>
                          </div>
                          <p>Already have an account?
                            <a class="text-blue" href="{{route('company_login_form')}}">Sign in</a>
                          </p>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</body>
</html>

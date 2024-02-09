<!DOCTYPE html>
<html lang="en">
  <head>
    <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <title>Mono - Responsive Admin & Dashboard Template</title>

      <!-- GOOGLE FONTS -->
      <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet"/>
      <link href="{{asset('assets/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet"/>
      <link href="{{asset('assets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />

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
        <div class="row justify-content-center mt-5">
          <div class="col-md-10">
            <div class="card card-default">
              <div class="card-header">
                <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                    <h2 class="brand-name text-dark">Reset Your Password</h2>
                </div>
              </div>
              <div class="card-body p-5">
                <form action="/index.html">
                  <div class="row">
                    <div class="form-group col-md-12 mb-4">
                      <input type="email" class="form-control input-lg" id="name" aria-describedby="nameHelp" placeholder="Email"/>
                    </div>

                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-primary btn-pill mb-4">Submit</button>

                      <p>Already have an account ?
                        <a class="text-blue" href="{{route('company_login_form')}}">Sign in</a>
                      </p>
                      <p>Don't have an account yet ?
                        <a class="text-blue" href="{{route('company_register')}}">Sign up</a>
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

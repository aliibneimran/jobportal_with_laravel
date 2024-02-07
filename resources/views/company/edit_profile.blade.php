@extends('layouts.app')
@section('title','Company Profile')
@section('content')

<div class="content">
  <!-- Card Profile -->
  <div class="card card-default card-profile">
    <div class="card-header-bg" style="background-image: url({{asset('assets/images/user/user-bg-01.jpg')}})"></div>

    <div class="card-body card-profile-body">
      <div class="profile-avata">
        <img class="rounded-circle" src="{{asset('assets/images/user/user-md-01.jpg')}}" alt="Avata Image"/>
        <a class="h5 d-block mt-3 mb-2" href="#">Albrecht Straub</a>
        <a class="d-block text-color" href="#">albercht@example.com</a>
      </div>
    </div>

    <div class="card-footer card-profile-footer">
      <ul class="nav nav-border-top justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="user-profile.html">Profile</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="row">
    {{-- <div class="col-xl-3">
      <!-- Settings -->
      <div class="card card-default">
        <div class="card-header">
          <h2>Settings</h2>
        </div>

        <div class="card-body pt-0">
          <ul class="nav nav-settings">
            <li class="nav-item">
              <a class="nav-link" href="user-profile-settings.html">
                <i class="mdi mdi-account-outline mr-1"></i> Profile
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="user-account-settings.html">
                <i class="mdi mdi-settings-outline mr-1"></i> Account
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user-planing-settings.html">
                <i class="mdi mdi-currency-usd mr-1"></i> Planing
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user-billing.html">
                <i class="mdi mdi-set-top-box mr-1"></i> Billing
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user-notify-settings.html">
                <i class="mdi mdi-bell-outline mr-1"></i>
                Notifications
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div> --}}
    <div class="col-xl-12">
      <!-- Account Settings -->
      <div class="card card-default">
        <div class="card-header">
          <h2 class="mb-5">Account Settings</h2>
        </div>

        <div class="card-body">
          
          <form>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="lastName">Name</label>
                  <input type="text" class="form-control" id="lastName"/>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="newPassword">New password</label>
                  <input type="password" class="form-control" id="newPassword"/>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="conPassword">Confirm password</label>
                  <input type="password" class="form-control" id="conPassword"/>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email">Profile Photo</label>
                  <input type="file" class="form-control" id="coverImage"required/>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email">Cover Photo</label>
                  <input type="file" class="form-control" id="coverImage"required/>
                </div>
              </div>
              <div class="m-auto p-4">
                <button type="submit" class="btn btn-primary mb-2 btn-pill">
                  Update Profile
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
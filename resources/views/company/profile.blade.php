@extends('layouts.app')
@section('title','Company Profile')
@section('content')

<div class="content">
  <!-- Card Profile -->
  <div class="card card-default card-profile">
    <div class="card-header-bg">
      <img src="{{asset('uploads/'.($comDetails->cover_image ?? ''))}}" alt="Image" width="100%" height="100%"/>
    </div>

    <div class="card-body card-profile-body">
      <div class="profile-avata">
        <img class="rounded-circle" src="{{asset('uploads/'.($comDetails->image ?? ''))}}" alt="Image" width="150" height="150"/>
        <a class="h5 d-block mt-3 mb-2" href="#">{{ Auth::guard('company')->user()->name }}</a>
        <a class="d-block text-color" href="#">{{ Auth::guard('company')->user()->email }}</a>
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
        <!-- Success Message -->
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('msg') }}
        </div>
        @endif
        <div class="card-body">
          <form>
            <div class="row">
              @if (Auth::guard('company')->check())
                  
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="lastName">Name</label>
                  <input type="text" class="form-control aria-disabled" @disabled(true) value="{{ Auth::guard('company')->user()->name }}"/>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="lastName">Type</label>
                  <input type="text" class="form-control aria-disabled" @disabled(true) value="{{ $comDetails->type ?? '' }}"/>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="lastName">Phone</label>
                  <input type="text" class="form-control aria-disabled" @disabled(true) value="{{ $comDetails->contact ?? '' }}"/>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" disabled="disabled" value="{{ Auth::guard('company')->user()->email }}" />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="lastName">Address</label>
                  <input type="text" class="form-control aria-disabled" @disabled(true) value="{{ $comDetails->address ?? '' }}"/>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="lastName">Bio</label>
                  <textarea name="" class="form-control aria-disabled" @disabled(true)>{{ $comDetails->bio ?? '' }}</textarea>
                </div>
              </div>
              @endif
              <div class="m-auto p-4">
                <a href="{{route('company.edit.profile')}}" type="submit" class="btn btn-primary mb-2 btn-pill">
                  Edit Profile
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
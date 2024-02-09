@extends('layouts.app')
@section('title','Edit Profile')
@section('content')

<div class="content">

  <div class="row">
    
    <div class="col-xl-12">
      <!-- Account Settings -->
      <div class="card card-default">
        <div class="card-header">
          <h2 class="mb-5">Edit Profile</h2>
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
        <div class="card-body">
          
          <form action="{{route('company.update.profile')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              @if (Auth::guard('company')->check())
              <input type="hidden" name="company_id" value="@if (Auth::guard('company')->check()){{ Auth::guard('company')->user()->id }}@endif">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="lastName">Name</label>
                  <input type="text" name="name" class="form-control" value="{{ Auth::guard('company')->user()->name }}"/>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" value="{{ Auth::guard('company')->user()->email }}" />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="lastName">Contact</label>
                  <input type="text" name="contact" class="form-control" value="{{ $comDetails->contact ?? ''}}"/>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="email">Address</label>
                  <input type="text" name="address" class="form-control" value="{{ $comDetails->address ?? ''}}" />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="email">Bio</label>
                  <textarea name="bio" class="form-control">{{ $comDetails->bio ?? ''}}</textarea>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email">Profile Photo</label>
                  <input type="file" name="profile" class="form-control"/>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email">Cover Photo</label>
                  <input type="file" name="cover" class="form-control"/>
                </div>
              </div>
              
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="newPassword">Old password</label>
                  <input type="password" name="old_password" class="form-control"/>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="conPassword">New password</label>
                  <input type="password" name="new_password" class="form-control"/>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="conPassword">Confirm password</label>
                  <input type="password" name="password_confirmation" class="form-control"/>
                </div>
              </div>
              @endif
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
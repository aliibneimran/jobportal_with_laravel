@extends('layouts.app')
@section('title','Add Payment')
@section('content')
<div class="content">
<form action="{{route('payments.store')}}" method="POST">
    @csrf
    <h4 class="p-4">Add Payment</h4>
    <input type="hidden" name="package_id" value="{{$package->id}}">
    <input type="hidden" name="company_id" value="{{Auth::guard('company')->user()->id}}">
    <div class="row mb-2">
      <div class="col-lg-6">
          <div class="form-group mb-4">
              <label for="">Name</label>
              <input type="text" name="name" class="form-control" value="{{Auth::guard('company')->user()->name}}"/>
          </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group mb-4">
            <label for="">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $company->contact ?? '' }}"/>
        </div>
    </div>
      <div class="col-lg-6">
          <div class="form-group mb-4">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control" value="{{Auth::guard('company')->user()->email}}"/>
          </div>
      </div>
      <div class="col-lg-6">
        <div class="form-group mb-4">
            <label for="">Transaction ID</label>
            <input type="text" name="tnx" class="form-control"/>
        </div>
    </div>
  </div>
    <div class="text-center">
      <button type="submit" class="btn btn-primary btn-pill">Add Payment</button>
    </div>
</form>
</div>
@endsection
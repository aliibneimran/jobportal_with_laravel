@extends('layouts.app')
@section('title','Payment')
@section('content')

<div class="row mb-2">
    <div class="col-lg-6">
        <div class="form-group mb-4">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control"/>
        </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group mb-4">
          <label for="">Phone</label>
          <input type="text" name="phone" class="form-control"/>
      </div>
  </div>
    <div class="col-lg-6">
        <div class="form-group mb-4">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control"/>
        </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group mb-4">
          <label for="">Transaction Number</label>
          <input type="text" name="tnx" class="form-control"/>
      </div>
  </div>
</div>

@endsection

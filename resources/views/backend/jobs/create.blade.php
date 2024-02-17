@extends('layouts.app')
@section('title','Add Jobs')
@section('content')
<div class="content">
<form action="{{route('jobs.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h4 class="p-4">Add Job</h4>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
      </ul>
    </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
        </div>
    @endif
  <div class="row">
    <div class="form-group col-12">
      <label for="">Job Title</label>
      <input type="text" name="title" value="{{old('title')}}" class="form-control" id="exampleFormControlInput1" placeholder="Job Title">
    </div>
    <div class="form-group col-12">
      <label for="">Position</label>
      <input type="text" name="position" value="{{old('position')}}" class="form-control" id="exampleFormControlInput1" placeholder="Position">
    </div>
    <div class="form-group col-6">
      <label for="">Salary</label>
      <input type="number" name="salary" value="{{old('salary')}}" class="form-control" id="exampleFormControlInput1" placeholder="Salary">
    </div>
    <div class="form-group col-6">
      <label for="">Vacancy</label>
      <input type="number" name="vacancy" value="{{old('vacancy')}}" class="form-control" id="exampleFormControlInput1" placeholder="vacancy">
    </div>
    <div class="form-group col-6">
      <label for="">Start Apply</label>
      <input type="date" name="start_date" value="{{old('start_date')}}" class="form-control" id="exampleFormControlInput1" >
    </div>
    <div class="form-group col-6">
      <label for="">Dateline</label>
      <input type="date" name="end_date" value="{{old('end_date')}}" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group col-4">
      <label for="">Category</label>
      <select class="form-control" name="category">
        <option>Select Category</option>
        @foreach($categories as $cat)
        <option value="{{$cat->id}}" {{old('category')==$cat->id?'selected':''}}>{{$cat->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group col-4">
      <label for="">Location</label>
      <select class="form-control" name="location">
        <option>Select Location</option>
        @foreach($locations as $item)
        <option value="{{$item->id}}" {{old('location')==$item->id?'selected':''}}>{{$item->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group col-4">
      <label for="">Industry</label>
      <select class="form-control" name="industry">
        <option>Select Industry</option>
        @foreach($industry as $item)
        <option value="{{$item->id}}" {{old('industry')==$item->id?'selected':''}}>{{$item->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group col-12">
      <label for="">Description</label>
      <textarea name="description" id="editor"  class="form-control" placeholder="Job Description">{{old('description')}}</textarea>
    </div>
    <div class="form-group col-6">
      <label for="">Availability</label>
      <div>
        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
          <input type="radio" id="customRadio1" name="availability" value="1" {{old('availability')?'checked':''}} class="custom-control-input">
          <label class="custom-control-label" for="customRadio1">Available</label>
        </div>
        <div class="custom-control custom-radio d-inline-block mr-3 mb-3">
          <input type="radio" id="customRadio2" name="availability" value="0" {{old('availability')?'':'checked'}}  class="custom-control-input">
          <label class="custom-control-label" for="customRadio2">Not Available</label>
        </div>
      </div>
    </div>
    <div class="form-group col-6">
      <label for="">Image</label>
      <input type="file" class="form-control-file" name="photo" id="exampleFormControlFile1">
    </div>
    <input type="hidden" name="company" value="@if (Auth::guard('company')->check())
      {{ Auth::guard('company')->user()->id }}@endif">
    <div class="form-footer mx-auto">
      <button type="submit" class="btn btn-primary btn-pill">Add</button>
    </div>
  </div>
</form>
</div>
@endsection


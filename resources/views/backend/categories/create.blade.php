@extends('layouts.app')
@section('title','Add Category')
@section('content')
<div class="content">
<form action="{{route('categories.store')}}" method="POST">
    @csrf
    <h4 class="p-4">Add Category</h4>
    <div class="form-group">
      <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <textarea name="description" class="form-control" placeholder="Enter Description"></textarea>
      </div>
    <div class="form-footer mt-6">
      <button type="submit" class="btn btn-primary btn-pill">Add</button>
    </div>
</form>
</div>
@endsection
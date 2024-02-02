@extends('layouts.app')
@section('title','Edit Industry')
@section('content')
<div class="content">
<form action="{{route('industries.update',$single->id)}}" method="POST">
    @csrf
    <h4 class="p-4">Edit Industry</h4>
    <div class="form-group">
      <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{old('name')?old('name'):$single->name}}">
    </div>
    <div class="form-group">
        <textarea name="description" class="form-control" placeholder="Enter Description">{{old('name')?old('name'):$single->description}}</textarea>
      </div>
    <div class="form-footer mt-6">
      <button type="submit" class="btn btn-primary btn-pill">Update</button>
    </div>
</form>
</div>
@endsection
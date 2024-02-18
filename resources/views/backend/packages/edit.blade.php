@extends('layouts.app')
@section('title','Edit Package')
@section('content')
<div class="content">
<form action="{{route('packages.update',$package->id)}}" method="POST">
    @csrf
    @method('PUT')
    @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
    @endif
    <h4 class="p-4">Add Package</h4>
    <div class="row">
        <div class="form-group col-12">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="name" value="{{old('name',$package->name)}}" class="form-control">
            </div>
        </div>
        <div class="form-group col-6">
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" name="price" value="{{old('price',$package->price)}}" class="form-control">
            </div>
        </div>
        <div class="form-group col-6">
            <div class="form-group">
                <label for="">Number of Post</label>
                <input type="number" name="posts" value="{{old('posts',$package->posts)}}" class="form-control">
            </div>
        </div>
        <div class="form-group col-12">
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control">{{old('description',$package->description)}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-footer text-center">
      <button type="submit" class="btn btn-primary btn-pill">Update</button>
    </div>
</form>
</div>
@endsection
@extends('layouts.app')
@section('title','Add Payment')
@section('content')
<div class="content">
<form action="{{route('payments.store')}}" method="POST">
    @csrf
    <h4 class="p-4">Add Payment</h4>
    <div class="form-group">
        <label for="">Transaction Number</label>
        <input type="text" name="name" class="form-control" >
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
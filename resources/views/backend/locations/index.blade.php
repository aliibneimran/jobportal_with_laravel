@extends('layouts.app')
@section('title','All Locations')
@section('content')
<div class="content">
    <div class="card card-default">
        <div class="card-header">
          <h2>All Locations</h2>
        </div>
        <!-- Success Message -->
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('msg') }}
        </div>
        @endif
        <div class="card-body">
          <table id="productsTable" class="table table-product" style="width:100%">
            <thead>
              <tr>
                <th>SI</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @php $no = 1 @endphp
            @foreach ($locations as $item)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$item->name}}</td>
                <td width="65%">{{$item->description}}</td>
                <td>
                    <a href="{{route('locations.edit',$item->id)}}" class="m-2"><i class="mdi mdi-square-edit-outline"></i></a>
                    <a href="{{route('locations.destroy',$item->id)}}" onclick="return confirm('Are you sure to delete')" ><i class="mdi mdi-trash-can-outline"></i></a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
      </div>
</div>
@endsection
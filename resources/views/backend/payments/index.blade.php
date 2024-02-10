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
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Tnx_Id</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
            @php $no = 1 @endphp
            @foreach ($payment as $item)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->tnx_number}}</td>
                <td>
                    @if (Auth::guard('company')->check())
                        
                        @if ($item->status == 0)
                        <button class="btn btn-warning" disabled>Pending</button>
                        @else
                        <button class="btn btn-success" disabled>Approved</button>
                        @endif
                    
                    @elseif (Auth::guard('admin')->check())
                        
                        @if ($item->status == 0)
                            <button class="btn btn-warning">Pending</button>
                        @else
                            <form action="{{route('approve',$item->id)}}" method="post">
                            @csrf
                            <button class="btn btn-success" type="submit">Approved</button>
                            </form>
                        @endif    
                    @endif

                    
                    
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
      </div>
</div>
@endsection

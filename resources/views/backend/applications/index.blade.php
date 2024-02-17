@extends('layouts.app')
@section('title','Applicants')
@section('content')

<div class="content">
    <div class="card card-default">
        <div class="card-header">
          <h2>Applicants</h2>
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
                <th>apply id</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Cv</th>
                <th>Job Id</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @if (Auth::guard('company')->check())
                
            @php $no = 1 @endphp
            @foreach ($applicants as $item)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->id}}</td>
                <td>{{$item->contact}}</td>
                <td>{{$item->email}}</td>
                <td>
                  <button type="button" data-toggle="modal" data-target="#cvModal{{ $item->id }}"><i class="mdi mdi-eye"></i></button>
                </td>
                <td>{{$item->job_id}}</td>
                <td>
                  @if (!$item->status==0)
                  <button class="btn btn-success">Approved</button>
                  @else
                  <form action="{{route('approve',$item->id)}}" method="post">
                    @csrf
                    <button class="btn btn-warning" type="submit">Pending</button>
                  </form>
                  @endif
                </td>
                <td>
                  <form method="POST" action="{{ route('jobs.destroy', $item->id) }}" style="display:inline;" onsubmit="return confirm('Are you sure to delete')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" style="border: none; background-color: transparent; cursor: pointer;">
                          <i class="mdi mdi-trash-can-outline"></i>
                      </button>
                  </form>
                </td>              
              </tr>
              <!-- Modal -->
              <div class="modal fade" id="cvModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="cvModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="cvModalLabel">Applicant CV</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{ $item->cv }}
                            <iframe src="{{asset('uploads/cv/'.$item->cv)}}" style="width: 100%; height: 400px;" frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
              </div>
            @endforeach
            @endif
            </tbody>
          </table>
      </div>
</div>

@endsection



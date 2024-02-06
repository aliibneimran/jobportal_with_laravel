@extends('layouts.app')
@section('title','All Jobs')
@section('content')

<div class="content">
    <div class="card card-default">
        <div class="card-header">
          <h2>All Jobs</h2>
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
            @php $no = 1 @endphp
            @foreach ($applicants as $item)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->id}}</td>
                <td>{{$item->contact}}</td>
                <td>{{$item->email}}</td>
                <td>
                  <a href="{{route('applications.show',$item->id) }}" class="view-cv-link" data-bs-toggle="modal" data-bs-target="#fileModal" data-cv="{{ $item->cv }}"><i class="mdi mdi-eye"></i></a>
                  {{-- <a href="#" class="open-modal" data-toggle="modal" data-target="#fileModal" data-id="{{$item->id}}"><i class="mdi mdi-eye"></i></a> --}}
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
            @endforeach
            </tbody>
          </table>
      </div>
</div>
@endsection
<!-- Modal -->
<div class="modal fade" id="fileModal" tabindex="-1" aria-labelledby="fileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="fileModalLabel">File Viewer</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            {{$item->id}}
          </div>  
      </div>
  </div>
</div>

@section('scripts')
    <script>
        // Add this script to handle dynamic content in the modal
        $(document).ready(function() {
            $('.open-modal').click(function() {
                var itemId = $(this).data('id');
                $('#modalContent').html(itemId);
            });
        });
    </script>
@endsection
{{-- <iframe src="{{ asset('uploads/cv/') }}" width="100%" height="500px" frameborder="0"></iframe> --}}

{{-- <a href="{{route('applications.show',$item->id) }}" class="view-cv-link" data-bs-toggle="modal" data-bs-target="#fileModal" data-cv="{{ $item->cv }}"><i class="mdi mdi-eye"></i></a> --}}
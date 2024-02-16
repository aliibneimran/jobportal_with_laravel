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
                  <button data-toggle="modal" data-target="#fileModal{{$item->id}}">
                    <i class="mdi mdi-eye"></i>
                  </button>
                  
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
            @endif
            </tbody>
          </table>
      </div>
</div>
@endsection
<!-- Modal -->
<div class="modal fade" id="fileModal{{$item->id}}" tabindex="-1" aria-labelledby="fileModalLabel{{$item->id}}" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="fileModalLabel">File Viewer</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" id="modalContent">
            <iframe id="pdfViewer" class="cv" src="{{asset('uploads/cv/'.$item->cv)}}" style="width: 100%; height: 400px;" frameborder="0"></iframe>
          </div>  
      </div>
  </div>
</div>

@section('scripts')

<script>
  $(document).ready(function () {
    $('#fileModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var applicantId = button.data('applicant-id');

      // Make an Ajax request to fetch the CV content
      $.ajax({
        url: '/cv/' + applicantId, // Adjust the route to match your setup
        method: 'GET',
        success: function (data) {
          // Update the modal body with the fetched content
          $('#fileModal .modal-body').html(data);
        },
        error: function (error) {
          console.error('Error fetching CV content:', error);
        }
      });
    });
  });
</script>



@endsection

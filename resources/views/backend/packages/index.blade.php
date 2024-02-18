@extends('layouts.app')
@section('title','All Packages')
@section('content')
<div class="content">
    <div class="col-xl-12">
        <!-- Choose Your Plan -->
        <div class="card card-default">
                  <!-- Success Message -->
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('msg') }}
        </div>
        @endif
          <div class="card-header">
            <h2 class="mb-5">Choose Your Plan</h2>
          </div>

          <div class="card-body">
            <div class="row justify-content-center">
              @foreach ($package as $item)
              <div class="col-lg-6 col-xl-4">
                <div class="card card-default">
                  <div class="card-header align-items-center flex-column">
                    <h3 class="h2 mb-2 font-weight-bold">{{$item->name}}</h3>
                  </div>
                  <div
                    class="card-body d-flex flex-column" style="min-height: 350px">
                    <ul class="d-flex flex-column align-items-center">
                      <li class="h2 text-primary mb-5">
                        TK. {{$item->price}} <span class="text-color h3">/ m</span>
                      </li>
                      <li class="mb-3 text-dark font-weight-bold">
                        <i class="mdi mdi-check text-primary"></i>
                        Total {{$item->posts}} item can post
                      </li>
                    </ul>
                    <p class="mb-3">{{ Str::words($item->description, $words = 20, $end = '...') }}</p>
                    <div class="d-flex justify-content-center mt-auto">
                      @if (Auth::guard('admin')->check())
                        <a href="{{ route('packages.edit', $item->id) }}" ><i class="mdi mdi-square-edit-outline"></i></a>
                        <form method="POST" action="{{ route('packages.destroy', $item->id) }}" style="display:inline;" onsubmit="return confirm('Are you sure to delete')">
                          @csrf
                          <button type="submit" style="border: none; background-color: transparent; cursor: pointer;">
                              <i class="mdi mdi-trash-can-outline"></i>
                          </button>
                        </form>
                    @else
                      <a href="{{route('packages.show',$item->id)}}" class="btn btn-outline-primary btn-pill">Select plan</a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>

              @endforeach           
            </div>
          </div>
        </div>
      </div>
</div>
@endsection


<!-- Modal -->
<div class="modal fade" id="package" tabindex="-1" role="dialog" aria-labelledby="packageModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
          <form action="" method="post">
            @csrf
            <input type="text" name="company_id" value="">
            <input type="text" name="package_id" value="">
              <div class="modal-header px-4">
                  <h5 class="modal-title" id="packageModal">
                      Make Payment
                  </h5>
              </div>
              <div class="modal-body px-4">

                  <div class="row mb-2">
                      <div class="col-lg-6">
                          <div class="form-group mb-4">
                              <label for="">Name</label>
                              <input type="text" name="name" class="form-control"/>
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label for="">Phone</label>
                            <input type="text" name="phone" class="form-control"/>
                        </div>
                    </div>
                      <div class="col-lg-6">
                          <div class="form-group mb-4">
                              <label for="">Email</label>
                              <input type="email" name="email" class="form-control"/>
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label for="">Transaction Number</label>
                            <input type="text" name="tnx" class="form-control"/>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer px-4">
                  <button type="button" class="btn btn-smoke btn-pill" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary btn-pill">Save Contact</button>
              </div>
          </form>
      </div>
  </div>
</div>


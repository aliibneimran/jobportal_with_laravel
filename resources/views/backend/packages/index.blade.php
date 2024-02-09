@extends('layouts.app')
@section('title','All Packages')
@section('content')
<div class="content">
    <div class="col-xl-12">
        <!-- Choose Your Plan -->
        <div class="card card-default">
          <div class="card-header">
            <h2 class="mb-5">Choose Your Plan</h2>
          </div>

          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-lg-6 col-xl-4">
                <div class="card card-default">
                  <div
                    class="card-header align-items-center flex-column"
                  >
                    <h3 class="h2 mb-2">Starter</h3>
                    <p class="text-center">
                      For those who want to look around
                    </p>
                  </div>
                  <div
                    class="card-body d-flex flex-column"
                    style="min-height: 350px"
                  >
                    <ul class="d-flex flex-column align-items-center">
                      <li class="h2 text-primary mb-5">
                        $0.00 <span class="text-color h3">/ m</span>
                      </li>
                      <li class="mb-3 text-dark font-weight-bold">
                        <i class="mdi mdi-check text-primary"></i>
                        1 User Acount
                      </li>
                      <li class="mb-3 text-dark font-weight-bold">
                        <i class="mdi mdi-check text-primary"></i>
                        1 Active Project
                      </li>
                      <li class="mb-3 text-dark font-weight-bold">
                        <i class="mdi mdi-check text-primary"></i>
                        1 GB Storage limit
                      </li>
                    </ul>
                    <div class="d-flex justify-content-center mt-auto">
                      <a
                        href="#"
                        class="btn btn-outline-primary btn-pill"
                        >Select plan</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card card-default">
                  <div
                    class="card-header align-items-center flex-column"
                  >
                    <h3 class="h2 mb-2">Basic</h3>
                    <p class="text-center">
                      For those who want to look around
                    </p>
                  </div>
                  <div
                    class="card-body d-flex flex-column"
                    style="min-height: 350px"
                  >
                    <ul class="d-flex flex-column align-items-center">
                      <li class="h2 text-primary mb-5">
                        $50.00 <span class="text-color h3">/ m</span>
                      </li>
                      <li class="mb-3 text-dark font-weight-bold">
                        <i class="mdi mdi-check text-primary"></i>
                        1 User Acount
                      </li>
                      <li class="mb-3 text-dark font-weight-bold">
                        <i class="mdi mdi-check text-primary"></i>
                        1 Active Project
                      </li>
                      <li class="mb-3 text-dark font-weight-bold">
                        <i class="mdi mdi-check text-primary"></i>
                        5GB Storage limit
                      </li>
                      <li class="mb-3 text-dark font-weight-bold">
                        <i class="mdi mdi-check text-primary"></i>
                        Email Support
                      </li>
                    </ul>
                    <div class="d-flex justify-content-center mt-auto">
                      <a
                        href="#"
                        class="btn btn-outline-primary btn-pill"
                        >Select plan</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4">
                <div class="card card-default">
                  <div
                    class="card-header align-items-center flex-column"
                  >
                    <h3 class="h2 mb-2">Ultra</h3>
                    <p class="text-center">
                      For those who want to look around
                    </p>
                  </div>
                  <div
                    class="card-body d-flex flex-column"
                    style="min-height: 350px"
                  >
                    <ul class="d-flex flex-column align-items-center">
                      <li class="h2 text-primary mb-5">
                        $70.00 <span class="text-color h3">/ m</span>
                      </li>
                      <li class="mb-3 text-dark font-weight-bold">
                        <i class="mdi mdi-check text-primary"></i>
                        1 User Acount
                      </li>
                      <li class="mb-3 text-dark font-weight-bold">
                        <i class="mdi mdi-check text-primary"></i>
                        1 Active Project
                      </li>
                      <li class="mb-3 text-dark font-weight-bold">
                        <i class="mdi mdi-check text-primary"></i>
                        25GB Storage limit
                      </li>
                      <li class="mb-3 text-dark font-weight-bold">
                        <i class="mdi mdi-check text-primary"></i>
                        Email & Phone Support
                      </li>
                    </ul>
                    <div class="d-flex justify-content-center mt-auto">
                      <a
                        href="#"
                        class="btn btn-outline-primary btn-pill"
                        >Select plan</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

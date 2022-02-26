@extends('layouts.basesection')
@section('profile')
<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient1-custom1 text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img
                  src="https://img.icons8.com/bubbles/100/000000/user.png"
                  alt="Avatar"
                  class="img-fluid my-10"
                  style="width: 120px;"
                />
                <h5>{{$user_details->name}}</h5>
                <h5 style="margin-top: 20px;">{{$user_details->role}}</h5>
                </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-12 mb-3">
                      <h6>Email</h6>
                      <p class="text-muted">{{$user_details->email}}</p>
                    </div>
                    {{-- <div class="col-6 mb-3">
                      <h6>user id</h6>
                      <p class="text-muted">jggkug</p>
                    </div> --}}
                  </div>
                  <!-- <h6>Projects</h6>
                  <hr class="mt-0 mb-4"> -->
                  <div class="row pt-1">
                    <div class="col-12 mb-3">
                      <h6>phone</h6>
                      <p class="text-muted">6645265</p>
                    </div>
                    <!-- <div class="col-6 mb-3">
                      <h6>Most Viewed</h6>
                      <p class="text-muted">Dolor sit amet</p>
                    </div> -->
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
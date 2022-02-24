@extends('layouts.admin')

@section('styles')

@endsection
@section('content')


  <div class="container-fluid px-4">
                          <h1 class="mt-4">Add Current Openning</h1>
                          <ol class="breadcrumb mb-4">
                              <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                              <li class="breadcrumb-item active">Add Current Openning</li>
                          </ol>
                          <div class="card mb-4">

                            
                            <div class="card-body">

                              <form action="/create_current_openning" method="post" >
                                     @csrf
                                
                                <div class="row">

                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Job Title</label>
                                      <input type="text" name="job_title" class="form-control">
                                      @error('job_title')
                                      <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                       @enderror
                                    </div>

                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Salary</label>
                                      <input type="text" name="salary" class="form-control ">
                                      @error('salary')
                                      <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                       @enderror
                                    </div>
                                  </div>
                                </div>
                                
                               
                                <div class="row">

                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Location</label>
                                      <input type="text" name="location" class="form-control">
                                      @error('location')
                                      <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                       @enderror
                                    </div>

                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Qualification</label>
                                      <input type="text" name="quali" class="form-control">
                                      @error('quali')
                                      <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                       @enderror
                                    </div>
                                  </div>
                                </div>
                                <div class="row">

                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Experience</label>
                                      <input type="text" name="exp" class="form-control">
                                      @error('exp')
                                      <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                       @enderror
                                    </div>

                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Last Date</label>
                                      <input type="date" name="last_date" class="form-control">
                                      @error('last_date')
                                      <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                       @enderror
                                    </div>
                                  </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Job Description</label>
                                        <textarea name="job_des" id="" cols="20" rows="5" class="form-control"></textarea>
                                                       @error('job_des')
                                                       <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                                         @enderror
                                      </div>
  
                                    </div>
                                    
                                  </div>
  



                                <button type="submit" class="btn btn-primary pull-right">Add</button>
                                <div class="clearfix"></div>
                              </form>
                            </div>
                          </div>
                      </div>





@endsection

{{-- @section('scripts')
  @if(Auth::user()->role == 'user')
  <script>window.location = '{{url('/')}}';</script>
  @endif
@endsection --}}

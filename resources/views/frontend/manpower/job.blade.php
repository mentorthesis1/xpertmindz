@extends('layouts.basesection')
@section('dashboard')
<section id="pricing" class="pricing" style="margin-top: -20px;">
    <div class="container" data-aos="fade-up" style="margin-top: 20px;s">

      <h1>Current Openning</h1>
      @foreach($jobs as $job)    
<div class="card border shadow mb-3">
 
    <div class="card-body">
        <form>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">Job title</label>
            <div class="col-sm-10">
            <label for="inputPassword3" class="col-sm-10 col-form-label" style="color: black; font-size: 20px;">{{$job->job_title}}</label>

            </div>
          </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">Experience</label>
              <div class="col-sm-10">
              <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">{{$job->experience}}</label>

              </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">Location</label>
                <div class="col-sm-10">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">{{$job->location}}</label>
  
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">job description</label>
                <div class="col-sm-10">
                <label for="inputPassword3" class="col-sm-10 col-form-label" style="color: black; font-size: 20px;">{{$job->job_description}}</label>
  
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">Qualification</label>
                <div class="col-sm-10">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">{{$job->qualification}}</label>
  
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">CTC</label>
                <div class="col-sm-10">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">{{$job->salary}}</label>
  
                </div>
              </div>


           
            <div class="form-group row">
              <div class="col-sm-10">


{{--             
              <a type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-buy">APPLY NOW</a>
           --}}
            <a type="button" class="btn btn-success" href="/job_apply/{{$job->id}}">APPLY NOW</a>
    
              </div>
              {{-- <a href="/job_apply_view" class="btn btn-success">Apply Now</a> --}}
            </div>
          </form>
    </div>
   
  
</div>







    </div>



    @endforeach

    
  </section>

  
  
    
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Fill your details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">JOB TITLE/SECTOR</label>
              <input type="text" class="form-control"  id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Name</label>
                <input type="text"  class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Email id</label>
                <input type="text"  class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Phone Number</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Resume</label>
                <input type="file" class="form-control" id="recipient-name">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">APPLY</button>
        </div>
      </div>
    </div>
  </div>



  


  @endsection
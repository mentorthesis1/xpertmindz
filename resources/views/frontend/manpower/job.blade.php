@extends('layouts.basesection')
@section('dashboard')
<section id="pricing" class="pricing" style="margin-top: -20px;">
    <div class="container" data-aos="fade-up" style="margin-top: 20px;s">

       
<div class="card border">
  {{-- <div class="card border"> --}}
    <div class="card-header">
        Job Title
    </div>
    <div class="card-body">
        <form>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;" >Sector</label>
              <div class="col-sm-10">
              <label for="inputEmail3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">IT</label>

              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">Experience</label>
              <div class="col-sm-10">
              <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">Fresher</label>

              </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">Location</label>
                <div class="col-sm-10">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">Marthandam</label>
  
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">job description</label>
                <div class="col-sm-10">
                <label for="inputPassword3" class="col-sm-10 col-form-label" style="color: black; font-size: 20px;">sdugfdshfvcgsjdfasyfvcsavcgadsfgasvhcvagvgvcHNGVScghsghvbsvfgsdfhvcvhvfhgvs</label>
  
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">Qualification</label>
                <div class="col-sm-10">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">Any Degree</label>
  
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">CTC</label>
                <div class="col-sm-10">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black; font-size: 20px;">7000-10,000</label>
  
                </div>
              </div>


           
            <div class="form-group row">
              <div class="col-sm-10">
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-buy">APPLY NOW</button>
                
              </div>
            </div>
          </form>
    </div>
  {{-- </div> --}}
</div>







    </div>

    
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
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Name</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Email id</label>
                <input type="text" class="form-control" id="recipient-name">
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
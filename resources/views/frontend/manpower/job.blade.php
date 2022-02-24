@extends('layouts.basesection')
@section('dashboard')
<section id="pricing" class="pricing" style="margin-top: -20px;">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>OUR CURRENT OPENINGS</h2>
      </div>

     
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
            <div class="box  featured" data-aos="fade-up" data-aos-delay="100">
                <h3>RESEARCH ANALYIST</h3>
                <h5 >salary : 10000</h5>
                <h5 style="margin-top: 20px;">Experience : Fresher</h5>
            
                <h5 style="margin-top: 20px;">Location : Marthandam</h5>
                <h5 style="margin-top: 20px;">Qualification:Any Degree</h5>
                
            
                <div class="btn-wrap">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-buy">Apply Now</button>

                </div>
            </div>
            </div>

            <div class="col">
                <div class="box  featured" data-aos="fade-up" data-aos-delay="100">
                    <h3>JAVA DEVELOPER</h3>
                    <h5 >salary : 10000</h5>
                    <h5 style="margin-top: 20px;">Experience:fresher</h5>
                
                    <h5 style="margin-top: 20px;">Location : Marthandam</h5>
                    <h5 style="margin-top: 20px;">Qualification:Any Degree</h5>
                    
                
                    <div class="btn-wrap">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-buy">Apply Now</button>
                   
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="box  featured" data-aos="fade-up" data-aos-delay="100">
                    <h3>WEB DEVELOPER</h3>
                    <h5>salary : 10000</h5>
                    <h5 style="margin-top: 20px;">Experience : Fresher</h5>
                    
                    <h5 style="margin-top: 20px;">Location : Marthandam</h5>
                    <h5 style="margin-top: 20px;">Qualification:Any Degree</h5>
                    
                
                    <div class="btn-wrap">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-buy">Apply Now</button>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="box  featured" data-aos="fade-up" data-aos-delay="100">
                    <h3>RESEARCH ANALYIST</h3>
                    <h5>salary : 10000</h5>
                    <h5 style="margin-top: 20px;">Experience : Fresher</h5>
                
                    <h5 style="margin-top: 20px;">Location : Marthandam</h5>
                    <h5 style="margin-top: 20px;">Qualification:Any Degree</h5>
                    
                
                    <div class="btn-wrap">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-buy">Apply Now</button>
                    </div>
                </div>
            </div>

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
              <label for="recipient-name" class="col-form-label">JOB TITLE</label>
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
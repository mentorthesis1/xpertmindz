@extends('layouts.basesection')
@section('dashboard')
<section id="services1" class="services1" style="margin-top: -20px;">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2 style="text-align: center;">Our Internship Roles</h2>

      </header>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            
            <h3>Java</h3>
            <p style="text-align: left;">It is a practice for a wide range of placements in businesses, non-profit organizations and government agencies. We are typically undertaken the students and graduates looking to gain relevant skills and experience in a particular field.</p>
            <p><strong>For more information</strong></p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Click   Here
            </button>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-box orange">
            {{-- <i class="ri-discuss-line icon"></i> --}}
            <h3>Python</h3>
            <p style="text-align: left;">It is a practice for a wide range of placements in businesses, non-profit organizations and government agencies. We are typically undertaken the students and graduates looking to gain relevant skills and experience in a particular field.</p>
            <p><strong>For more information</strong></p>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Click   Here
            </button>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-box green">
            {{-- <i class="ri-discuss-line icon"></i> --}}
            <h3>Matlab</h3>
            <p style="text-align: left;">It is a practice for a wide range of placements in businesses, non-profit organizations and government agencies. We are typically undertaken the students and graduates looking to gain relevant skills and experience in a particular field.</p>
            <p><strong>For more information</strong></p>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Click   Here
            </button>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-box red">
            {{-- <i class="ri-discuss-line icon"></i> --}}
            <h3>BIG-DATA</h3>
            <p style="text-align: left;">It is a practice for a wide range of placements in businesses, non-profit organizations and government agencies. We are typically undertaken the students and graduates looking to gain relevant skills and experience in a particular field.</p>
            <p><strong>For more information</strong></p>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Click   Here
            </button>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-box purple">
            {{-- <i class="ri-discuss-line icon"></i> --}}
            <h3>.Net</h3>
            <p style="text-align: left;">It is a practice for a wide range of placements in businesses, non-profit organizations and government agencies. We are typically undertaken the students and graduates looking to gain relevant skills and experience in a particular field.</p>
            <p><strong>For more information</strong></p>
            <button type="button" class="btn" style="background-color: #b50edf; color:white;"  data-bs-toggle="modal" data-bs-target="#exampleModal">
              Click   Here
            </button>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-box pink">
            {{-- <i class="ri-discuss-line icon"></i> --}}
            <h3>C++</h3>
            <p style="text-align: left;">It is a practice for a wide range of placements in businesses, non-profit organizations and government agencies. We are typically undertaken the students and graduates looking to gain relevant skills and experience in a particular field.</p>
            <p><strong>For more information</strong></p>
            <button type="button" class="btn" style="background-color: #f51f9c; color:white;" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Click   Here
            </button>
          </div>
        </div>

      </div>

    </div>

    <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">We would need your basic details to get started!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/talk_to_us" method="POST">
          @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control mb-2" name="name" placeholder="Enter your name " required />
                
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control mb-2" name="email" placeholder="Enter your email " required/>

          </div>
          <div class="form-group">
              <label>Mobile Number</label>
              <input type="number" class="form-control mb-2" name="mobile" placeholder="Enter your mobile number" required/>

          </div>
          
              <input type="hidden" class="form-control mb-2" name="req" value="web developement"/>

          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit"  class="btn btn-primary">Get a Call</button>
              <h6 class="py-2">Our expert will give you a call shortly</h6>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>










  </section>


@endsection
@extends('layouts.basesection')
@section('dashboard')
<section id="contact" class="contact" style="margin-top: -100px;">
    <div class="container">
    <div class="container">

      <div class="row mt-5">

        <div class="col-lg-12">

          {{-- <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
          </div> --}}
          <div class="section-title">
            <h3 style="text-align: center;">COURSES</h3>
          </div>

          <div class="row row-cols-1 row-cols-md-5 g-4" style="margin-top: -50px;">
            <div class="col">
              <a href="/java">
                <div class="card" id="company">
                  <img src="assets/image/java.jpg" class="card-img-top" alt="...">
                </div>
              </a>
            </div>

            <div class="col">
              <a href="/python">
                <div class="card" id="company">
                  <img src="assets/image/python.png" class="card-img-top" alt="...">
                </div>
              </a> 
            </div>

            <div class="col">
              <a href="/matlab">
                <div class="card" id="company">
                  <img src="assets/image/matlab.jpg" class="card-img-top" alt="...">
                </div>
              </a> 
            </div>
            <div class="col">
              <div class="card" id="company">
                <img src="assets/image/msoffice.jpg" class="card-img-top" alt="...">
                
              </div>
            </div>
          
            <div class="col">
              <div class="card" id="company">
                <img src="assets/image/tally.jpg" class="card-img-top" alt="...">
                
              </div>
            </div>
          </div>
        </div>






        </div>


      </div>
    </div>
</section>

   @endsection
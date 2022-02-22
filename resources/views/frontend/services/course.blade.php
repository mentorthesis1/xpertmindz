@extends('layouts.basesection')
@section('dashboard')
<section id="contact" class="contact" style="margin-top: -100px;">
    <div class="container">
    <div class="container">

      <div class="row mt-5">

        <div class="col-lg-7">

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
          <div class="section-title" style="margin-left: -450px;">
            <h3>COURSES</h3>
          </div>
        </div>

        <div class="col-lg-5">
            
              
              
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <h4>Register</h4>
            <div class="row">
              <div class="col form-group mt-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            {{-- <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div> --}}
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Address" required></textarea>
            </div>
            <div class="row">
                <div class="col form-group mt-3">
                  <input type="number" name="age" class="form-control" id="age" placeholder="age" required>
                </div>
                <div class="col form-group mt-3">
                  <input type="text" class="form-control" name="payment" id="payment" placeholder="Payment" required>
                </div>
              </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Buy Now</button></div>
          </form>
        </div>

      </div>
    </div>
</section>

   @endsection
@extends('layouts.BasePage')
@section('content')
<section>
    <div class="container"  style="margin-top: 60px;">

      <div class="section-title">
        <h2>Contact</h2>
      </div>

    </div>

   

    <div class="container" style="">

      <div class="row mt-5">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12" id="company">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p><strong>Xpert Mindz Innovative Solutions</strong><br>15/52-6,second floor,  Kuzhithurai, Tamil Nadu 629163</p>
              </div>
            </div>
            <div class="col-md-6" id="company">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>hr.solutionxm@gmail.com<br></p>
              </div>
            </div>
            <div class="col-md-6" id="company">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>7397705454<br>
                  8438565460<br>
                  8807845453
                  </p>
              </div>
            </div>
            <div class="col-md-12" style="margin-top: 20px;">
              {{-- <div class="info-box"> --}}
               
                  <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=xpert mindz in kulithurai&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
               
                <style>.gmap_iframe {height:400px!important;}</style>
                
              {{-- </div> --}}
            </div>


          </div>

        </div>

        <div class="col-lg-6">
          <form action="contact_create" method="post" >
            @csrf
            <div class="row">
              <div class="col form-group mt-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              
              </div>
              <div class="col form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            
            <div class="text-center my-3"><button type="submit" class="btn btn-info">Send Message</button></div>
          </form>
        </div>

      </div>

      
  </section>
@endsection


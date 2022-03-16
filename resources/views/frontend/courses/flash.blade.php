@extends('layouts.BasePage')
@section('content')
{{-- <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <a class="cta-btn scrollto" href="#appointment">LEARN ADOBE-FLASH</a>
      </div>

    </div>
  </section> --}}
  <div class="mb-3">
    <h2 class="text-info">Flash</h2>
  </div>
  <section id="services" class="services services page-margintop">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
          <P>Adobe Flash (formerly Macromedia Flash and FutureSplash) is a multimedia software platform used for production of animations, rich web applications, desktop applications, mobile apps, mobile games, and embedded web browser video players. Flash displays text, vector graphics, and raster graphics to provide animations, video games, and applications. It allows streaming of audio and video, and can capture mouse, keyboard, microphone, and camera input.

            Artists may produce Flash graphics and animations using Adobe Animate (formerly known as Adobe Flash Professional). Software developers may produce applications and video games using Adobe Flash Builder, FlashDevelop, Flash Catalyst, or any text editor combined with the Apache Flex SDK. End users view Flash content via Flash Player (for web browsers), Adobe AIR (for desktop or mobile apps), or third-party players such as Scaleform (for video games). Adobe Flash Player (which is available on Microsoft Windows, macOS, and Linux) enables end users to view Flash content using web browsers. Adobe Flash Lite enabled viewing Flash content on older smartphones, but since has been discontinued and superseded by Adobe AIR.</P>
      </div>

      <div class="text-center">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
        Talk to Us
      </button>
      @Auth
      <a href="/paywithrazorpay/flash course" class="btn btn-success">Pay Now</a>
      @else
      <a href="/login_view" class="btn btn-success">Pay Now</a>
      @endAuth
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
              
                  <input type="hidden" class="form-control mb-2" name="req" value="flash course"/>

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
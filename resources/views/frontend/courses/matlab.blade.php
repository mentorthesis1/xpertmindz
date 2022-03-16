@extends('layouts.BasePage')
@section('content')
{{-- <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <a class="cta-btn scrollto" href="#appointment">LEARN MATLAB</a>
      </div>

    </div>
  </section> --}}
  
  <section id="services" class="services services page-margintop">
    <div class="container" data-aos="fade-up">
      <div class="mb-3">
        <h2 class="text-info">Matlab</h2>
      </div>
      <div class="section-title">
        <p>MATLAB (an abbreviation of "MATrix LABoratory") is a proprietary multi-paradigm programming language and numeric computing environment developed by MathWorks. MATLAB allows matrix manipulations, plotting of functions and data, implementation of algorithms, creation of user interfaces, and interfacing with programs written in other languages.

            Although MATLAB is intended primarily for numeric computing, an optional toolbox uses the MuPAD symbolic engine allowing access to symbolic computing abilities. An additional package, Simulink, adds graphical multi-domain simulation and model-based design for dynamic and embedded systems.
            
            As of 2020, MATLAB has more than 4 million users worldwide.[22] They come from various backgrounds of engineering, science, and economics.</p>
      </div>

      <div class="text-center">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Talk to Us
      </button>
      @Auth
      <a href="/paywithrazorpay/matlab course" class="btn btn-success">Pay Now</a>
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
              
                  <input type="hidden" class="form-control mb-2" name="req" value="matlab course"/>

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
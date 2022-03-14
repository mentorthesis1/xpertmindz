@extends('layouts.basesection')

@section('dashboard')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">


            <div class="h-100 p-5 bg-light border rounded-3 ">
              <h2 class="text-info">Unique <span class="text-dark">WebApplication</span>
                Crafted For Your Business.</h2>
              <p class="mt-5">At Xpertmindz Innovative Solutions, we have been building secure, scalable, and intuitive web applications for over a decade. We have built solutions for every type of industry out there, from not-IT industries to IT enterprises, single-page apps, and e-commerce solutions. Hire us to create fully functional and robust web applications that deliver value to your customer.

              </p>
              <p class="mt-2">
                Our web app developers have ample expertise in various web-related integrations, including different Payment Gateways, CRM integrations, Map APIs, Cross-browser Applications, Email Services, Analytics, Push Notifications, and CMS. We develop custom web applications, e-commerce web applications, responsive web apps, and more. Our team can also help you re-engineer your application and manage the content in your web application.
              </p>
             
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Talk to Us
  </button>
  @Auth
  <a href="/paywithrazorpay/website" class="btn btn-success">Pay Now</a>
  @else
  <a href="/login_view" class="btn btn-success">Pay Now</a>
  @endAuth
  
  
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

  {{-- end model --}}

            </div>
          </div>
    </div>
</div>

</div>

<!-- ======= Services Section ======= -->
<section id="services" class="services services">
    <div class="container" data-aos="fade-up">

      <div class="section-title mb-5">
        <h3 class="text-info">Our
            WebApplication
            Development
            Process.</h3>
              </div>

      <div class="row">
        <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
        
          <h4 class="title"><a href="">Research & Analysis</a></h4>
          <p class="description">Any web application development strategy must start with understanding the client’s objectives and business to provide a better and more comfortable work experience.</p>
        </div>
        <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
        
          <h4 class="title"><a href="">Front-End Development</a></h4>
          <p class="description">Our UI team works on the client’s vision, incorporating colors and visuals that help users associate the application with the products. We make sure the system works well on all devices, and performance is fast for users on any connection.</p>
        </div>
        <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          
          <h4 class="title"><a href="">Back-End Development</a></h4>
          <p class="description">Our back-end development team works in tandem with the other stakeholders to ensure that the final product is delivered on time and without any hiccups.</p>
        </div>
        <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
          
          <h4 class="title"><a href="">QA and Testing</a></h4>
          <p class="description">The professional testing team helps us deliver a predictable result at all times. They make sure all applications conform to the latest web standards, thereby ensuring fast web page uploading, increased usability, and the best web design interfaces.</p>
        </div>
      
    </div>
  </section><!-- End Services Section -->










<!-- ======= Services Section ======= -->
<section id="services" class="services services">
    <div class="container" data-aos="fade-up">

      <div class="section-title mb-5">
        <h3 class="text-info">      Technologies We Are Expert In.</h3>
              </div>

      <div class="row">
        <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{asset('frontend/logo/laravel2.png')}}"  height="150px" width="150px">
         
        
                 
          
                  </div>
        <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{asset('frontend/logo/codeigniter2.png')}}"  height="150px" width="150px">
       
             </div>
        <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <img src="{{asset('frontend/logo/nodejs.png')}}" height="150px" width="150px">
              
       
             </div>
        <div class="col-lg-3 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{asset('frontend/logo/reactjs2.png')}}"  height="150px" width="150px">
              
         
              </div>
      
    </div>
  </section><!-- End Services Section -->
  

@endsection

@section('scripts')
<script>

</script>

@endsection


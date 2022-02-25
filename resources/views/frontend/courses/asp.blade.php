@extends('layouts.basesection')
@section('dashboard')
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <a class="cta-btn scrollto" href="#appointment">LEARN ASP.NET</a>
      </div>

    </div>
  </section>
  <section id="services" class="services services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
          <p>ASP.NET is an open-source,[2] server-side web-application framework designed for web development to produce dynamic web pages. It was developed by Microsoft to allow programmers to build dynamic web sites, applications and services.

            It was first released in January 2002 with version 1.0 of the .NET Framework and is the successor to Microsoft's Active Server Pages (ASP) technology. ASP.NET is built on the Common Language Runtime (CLR), allowing programmers to write ASP.NET code using any supported .NET language. The ASP.NET SOAP extension framework allows ASP.NET components to process SOAP messages.
            
            ASP.NET's successor is ASP.NET Core. It is a re-implementation of ASP.NET as a modular web framework, together with other frameworks like Entity Framework. The new framework uses the new open-source .NET Compiler Platform (codename "Roslyn") and is cross platform. ASP.NET MVC, ASP.NET Web API, and ASP.NET Web Pages (a platform using only Razor pages) have merged into a unified MVC 6.[3]</p>
      </div>

      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 46%;">
        Talk to Us
      </button>
      
     
     
    

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
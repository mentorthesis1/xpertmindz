@extends('layouts.BasePage')
@section('content')
{{-- <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <a class="cta-btn scrollto" href="#appointment">LEARN MS-OFFICE</a>
      </div>

    </div>
  </section> --}}
  <section id="services" class="services services page-margintop">
    <div class="container" data-aos="fade-up">
      <div class="mb-3">
        <h2 class="text-info">Ms Office</h2>
      </div>
      <div class="section-title">
          <p>Microsoft Office, or simply Office, is a family of client software, server software, and services developed by Microsoft. It was first announced by Bill Gates on August 1, 1988, at COMDEX in Las Vegas. Initially a marketing term for an office suite (bundled set of productivity applications), the first version of Office contained Microsoft Word, Microsoft Excel, and Microsoft PowerPoint. Over the years, Office applications have grown substantially closer with shared features such as a common spell checker, OLE data integration and Visual Basic for Applications scripting language. Microsoft also positions Office as a development platform for line-of-business software under the Office Business Applications brand. On July 10, 2012, Softpedia reported that Office was being used by over a billion people worldwide.[11]

            Office is produced in several versions targeted towards different end-users and computing environments. The original, and most widely used version, is the desktop version, available for PCs running the Windows and macOS operating systems. Microsoft also maintains mobile apps for Android and iOS. Office on the web is a version of the software that runs within a web browser.
            
            Since Office 2013, Microsoft has promoted Office 365 as the primary means of obtaining Microsoft Office: it allows the use of the software and other services on a subscription business model, and users receive feature updates to the software for the lifetime of the subscription, including new features and cloud computing integration that are not necessarily included in the "on-premises" releases of Office sold under conventional license terms. In 2017, revenue from Office 365 overtook conventional license sales. Microsoft also rebranded most of their standard Office 365 editions into Microsoft 365 to emphasize their current inclusion of products and services.
            
            The current on-premises, desktop version of Office is Office 2021, released on October 5, 2021.[12]</p>
      </div>

      <div class="text-center">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
        Talk to Us
      </button>

      @Auth
      <a href="/paywithrazorpay/msoffice course" class="btn btn-success">Pay Now</a>
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
              
                  <input type="hidden" class="form-control mb-2" name="req" value="msoffice course"/>

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
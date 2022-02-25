@extends('layouts.basesection')
@section('dashboard')
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <a class="cta-btn scrollto" href="#appointment">LEARN BIG-DATA</a>
      </div>

    </div>
  </section>
  <section id="services" class="services services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
          <P>Big data is a field that treats ways to analyze, systematically extract information from, or otherwise deal with data sets that are too large or complex to be dealt with by traditional data-processing application software. Data with many fields (columns) offer greater statistical power, while data with higher complexity (more attributes or columns) may lead to a higher false discovery rate.[2] Big data analysis challenges include capturing data, data storage, data analysis, search, sharing, transfer, visualization, querying, updating, information privacy, and data source. Big data was originally associated with three key concepts: volume, variety, and velocity.[3] The analysis of big data presents challenges in sampling, and thus previously allowing for only observations and sampling. Therefore, big data often includes data with sizes that exceed the capacity of traditional software to process within an acceptable time and value.</P>
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
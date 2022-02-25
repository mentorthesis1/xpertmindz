@extends('layouts.basesection')
@section('dashboard')
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <a class="cta-btn scrollto" href="#appointment">LEARN ADOBE-PHOTOSHOP</a>
      </div>

    </div>
  </section>
  <section id="services" class="services services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
          <p>Adobe Photoshop is a raster graphics editor developed and published by Adobe Inc. for Windows and macOS. It was originally created in 1988 by Thomas and John Knoll. Since then, the software has become the industry standard not only in raster graphics editing, but in digital art as a whole. The software's name has thus become a generic trademark, leading to its usage as a verb (e.g. "to photoshop an image", "photoshopping", and "photoshop contest") although Adobe discourages such use.[5] Photoshop can edit and compose raster images in multiple layers and supports masks, alpha compositing and several color models including RGB, CMYK, CIELAB, spot color, and duotone. Photoshop uses its own PSD and PSB file formats to support these features. In addition to raster graphics, Photoshop has limited abilities to edit or render text and vector graphics (especially through clipping path for the latter), as well as 3D graphics and video. Its feature set can be expanded by plug-ins; programs developed and distributed independently of Photoshop that run inside it and offer new or enhanced features.</p>
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
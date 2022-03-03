
@extends('layouts.basesection')
@section('dashboard')

    <div class="container12" style="margin-top: 20px;" >
            

        
            <img src="assets/image/cseproject.jpg" alt="" class="project">
        
            <img src="assets/image/eeeproject.jpg" alt=""class="project" >
       
            <img src="assets/image/eceproject.jpg" alt="" class="project">
        
    </div>
    <section id="contact" class="contact" >
        <div class="container">
    
          <div class="section-title">
            {{-- <a href="" type="button"  class="btn btn-primary">for your projects click here</a> --}}
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top: 50px;">
              for your projects click here
            </button>
          </div>
    
        </div>


  </section>

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
            
                <input type="hidden" class="form-control mb-2" name="req" value="ME project"/>
  
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




    
@endsection
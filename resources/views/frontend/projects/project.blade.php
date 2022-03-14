@extends('layouts.basesection')
@section('dashboard')
<section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">
       
          <div class="col-md-6 ">
            <a href="/beproject" style="color: black;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              {{-- <div class="icon"><i class="fas fa-heartbeat"></i></div> --}}
              <h4 class="title" style="text-align: center; ">B.E PROJECTS</h4>
              <p class="description"></p>
            </div>
          </a>
          </div>
       
        
        <div class="col-md-6 ">
          <a href="/meproject" style="color: black;">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            {{-- <div class="icon"><i class="fas fa-pills"></i></div> --}}
            <h4 class="title" style="text-align: center;">M.E projects</h4>
            <p class="description"></p>
          </div>
        </a>
        </div>
        
        

      </div>

    </div>
  </section>





@endsection
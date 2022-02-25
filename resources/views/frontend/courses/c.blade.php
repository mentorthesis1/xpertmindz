@extends('layouts.basesection')
@section('dashboard')
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <a class="cta-btn scrollto" href="#appointment">LEARN C++</a>
      </div>

    </div>
  </section>
  <section id="services" class="services services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
          <p>C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes". The language has expanded significantly over time, and modern C++ now has object-oriented, generic, and functional features in addition to facilities for low-level memory manipulation. It is almost always implemented as a compiled language, and many vendors provide C++ compilers, including the Free Software Foundation, LLVM, Microsoft, Intel, Oracle, and IBM, so it is available on many platforms.[10]

            C++ was designed with an orientation toward systems programming and embedded, resource-constrained software and large systems, with performance, efficiency, and flexibility of use as its design highlights.[11] C++ has also been found useful in many other contexts, with key strengths being software infrastructure and resource-constrained applications,[11] including desktop applications, video games, servers (e.g. e-commerce, web search, or databases), and performance-critical applications (e.g. telephone switches or space probes).[12]</p>
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
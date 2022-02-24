@extends('layouts.basesection')
@section('dashboard')
<section id="pricing" class="pricing" style="margin-top: -20px;">
    <div class="container" data-aos="fade-up">

        {{-- <div class="card">
            <div class="card-header">
              JOB  title
            </div>
            <div class="card-body">
                <div class="row">
                    <div class= "col-sm-4">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    <div class= "col-sm-8">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> --}}
        {{-- </div> --}}
<div class="card border">
    <div class="card-header">
        Job Title
    </div>
    <div class="card-body">
        <form>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label" style="color: black" >Sector</label>
              <div class="col-sm-10">
              <label for="inputEmail3" class="col-sm-2 col-form-label" style="color: black">IT</label>

                {{-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> --}}
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black">Experience</label>
              <div class="col-sm-10">
              <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black">Fresher</label>

                {{-- <input type="password" class="form-control" id="inputPassword3" placeholder="Password"> --}}
              </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black">Location</label>
                <div class="col-sm-10">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black">Marthandam</label>
  
                  {{-- <input type="password" class="form-control" id="inputPassword3" placeholder="Password"> --}}
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black">job description</label>
                <div class="col-sm-10">
                <label for="inputPassword3" class="col-sm-10 col-form-label" style="color: black">sdugfdshfvcgsjdfasyfvcsavcgadsfgasvhcvagvgvcHNGVScghsghvbsvfgsdfhvcvhvfhgvs</label>
  
                  {{-- <input type="password" class="form-control" id="inputPassword3" placeholder="Password"> --}}
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black">Qualification</label>
                <div class="col-sm-10">
                <label for="inputPassword3" class="col-sm-2 col-form-label" style="color: black">Any Degree</label>
  
                  {{-- <input type="password" class="form-control" id="inputPassword3" placeholder="Password"> --}}
                </div>
              </div>


            {{-- <fieldset class="form-group">
              <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      First radio
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                      Second radio
                    </label>
                  </div>
                  <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                    <label class="form-check-label" for="gridRadios3">
                      Third disabled radio
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="form-group row">
              <div class="col-sm-2">Checkbox</div>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck1">
                    Example checkbox
                  </label>
                </div>
              </div>
            </div> --}}
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </div>
          </form>
    </div>

</div>

    </div>
  </section>

  
  
  
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Fill your details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">JOB TITLE</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Name</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Email id</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Phone Number</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Resume</label>
                <input type="file" class="form-control" id="recipient-name">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">APPLY</button>
        </div>
      </div>
    </div>
  </div>





  @endsection
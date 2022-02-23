@extends('layouts.auth')
@section('styles')

<style>
.divider:after,
.divider:before {
  content: "";
  flex: 1;
  height: 1px;
  background: #eee;
}
.h-custom {
  height: calc(100% - 73px);
}
@media (max-width: 450px) {
  .h-custom {
    height: 100%;
  }
}
</style>
@endsection
@section('content')
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
       
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">
  
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">



        @if ($errors->any())
        <ul class="alert alert-danger">
            {!! implode('',$errors->all('<li class="list-group-item bg-danger">:message</li>')) !!}
        </ul>
    @endif


        <form action="register"  autocomplete="off">
          <div class="d-flex flex-row align-items-center justify-content-center py-3 mt-5">
            <p class="lead fw-normal mb-0 me-3 ">Institution Registeration</p>
            {{-- <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button> --}}
          </div>

          {{-- <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div> --}}

           <!-- name input -->
           <div class="form-outline mb-4">
            <input type="text" name="name" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter your name" />
            <label class="form-label" for="form3Example3">User Name</label>
          </div>
         

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>
        

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>
         

            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" name="password_confirmation" id="form3Example4" class="form-control form-control-lg"
                  placeholder="Enter password again" />
                <label class="form-label" for="form3Example4">Confirm Password</label>
              </div>
             

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Do you have already an account? <a href="/login_view"
                class="link-danger">Login</a></p>
          </div>

        </form>
      </div>
    </div>
         
    <div class="text-center">
      <a href="/" class=" p-2 btn btn-info btn-sm">go to home</a>
    </div>

  </div>
 
</section>
@endsection

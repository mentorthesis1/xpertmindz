@extends('layouts.basesection')
@section('dashboard')
<div class="container mt-2">
     
  <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">

        
          
              <div class="card">
                  <div class="card-header">
                      <h3>Apply for Job</h3>
                  </div>
                  <div class="card-body">
                    <form action="/job_apply_create" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="row">
                           <div class="col-md-6">
                              <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">JOB TITLE/SECTOR</label>
                                  <input type="text" class="form-control" name="job_title" value="{{$job->job_title}}"  id="recipient-name" required>
                                 <input type="hidden" name="job_id" value="{{$job->id}}">  
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Name</label>
                                  <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" id="recipient-name" required>
                              </div>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-md-6">
                                
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Email id</label>
                          <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" id="recipient-name" required>
                      </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3">
                                  <label for="recipient-name" class="col-form-label">Phone Number</label>
                                  <input type="text" class="form-control" name="phone" id="recipient-name" required>
                              </div>
                         </div>
                       </div>

                    
                  
                       
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Resume</label>
                            <input type="file" class="form-control" name="resume" id="recipient-name" >
                            
                        </div>

                        <input type="submit" class="btn btn-success" value="submit">
                      </form>
                      
                  </div>
              </div>
      </div>
      <div class="col-md-2">

      </div>
  </div>
</div>
@endsection



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    @if(session()->has('message'))
    <script>
      
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: "{{session()->get('message')}}",
        showConfirmButton: false,
        timer: 2000
      })
      </script>
    @endif
</body>
</html>
      



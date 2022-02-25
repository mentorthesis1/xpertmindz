<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
  <div class="container-fluid px-4">
    <h1 class="mt-4">Edit Current Openning</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/current_openning">Current Openning</a></li>
        <li class="breadcrumb-item active">Edit Current Openning</li>
    </ol>
    <div class="card mb-4">

      
      <div class="card-body">

        <form action="/edit_current_openning" method="post" >
               @csrf
          
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Job Title</label>
                <input type="text" name="job_title" value="{{$key->job_title}}" class="form-control">
                @error('job_title')
                <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                 @enderror
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Salary</label>
                <input type="text" name="salary" value="{{$key->salary}}" class="form-control ">
                @error('salary')
                <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                 @enderror
              </div>
            </div>
          </div>
          
         
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Location</label>
                <input type="text" name="location" value="{{$key->location}}" class="form-control">
                @error('location')
                <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                 @enderror
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Qualification</label>
                <input type="text" name="quali" value="{{$key->qualification}}" class="form-control">
                @error('quali')
                <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                 @enderror
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Experience</label>
                <input type="text" name="exp" value="{{$key->experience}}" class="form-control">
                @error('exp')
                <p class="text-danger mt-1 mb-1">{{ $message }}</p>
                 @enderror
              </div>

            </div>
            
          </div>

          <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating">Job Description</label>
                  <input name="job_des"  value="ghjtuyitky"  class="form-control">
                   
                </div>

              </div>
              
            </div>




          <button type="submit" class="btn btn-primary pull-right mt-3">Update</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>



@extends('layouts.admin')

@section('styles')

@endsection
@section('content')
  <div class="container-fluid px-4">

                          <h1 class="mt-4">Current Openning</h1>
                          <ol class="breadcrumb mb-4">
                              <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                              <li class="breadcrumb-item active">Current Openning</li>
                          </ol>
                         
                           
                          <div class="card mb-4">
                              

                              <div class="card-body">
                                  <div class="pb-5">
                                    <a href="/add_current_openning_view" class="btn btn-primary float-end ">Add</a>
                                  </div>
                                       <table id="datatablesSimple">
                                      <thead>
                                          <tr>
                                            <th>ID</th>
                                            <th>JOB NAME</th>
                                            <th>EXPERIENCE</th>
                                            <th>LOCATION</th>
                                            <th>QUALIFICATION</th>
                                            <th>SALARY</th>
                                            <th>JOB DESCRIPTION</th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($current as $key)
                                      <tr>
                                        <td>
                                          {{$key->id}}
                                        </td>
                                        <td>
                                          {{$key->job_title}}
                                        </td>
                                        <td>
                                          {{$key->experience}}
                                        </td>
                                        <td>
                                            {{$key->location}}
                                          </td>
                                          <td>
                                            {{$key->qualification}}
                                          </td>
                                          <td>
                                            {{$key->salary}}
                                          </td>
                                          <td>
                                            {{$key->job_description}}
                                          </td>
                                            </tr>
                                      @endforeach
                                      </tbody>


                                  </table>
                              </div>
                          </div>
                      </div>





@endsection

{{-- @section('scripts')

  @if(Auth::user()->role == 'user')
  <script>window.location = '{{url('/')}}';</script>
  @endif
@endsection --}}

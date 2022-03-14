@extends('layouts.admin')

@section('styles')

@endsection
@section('content')
  <div class="container-fluid px-4">
                          <h1 class="mt-4">Workshops</h1>
                          <ol class="breadcrumb mb-4">
                              <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                              <li class="breadcrumb-item active">Workshops</li>
                          </ol>
                      
                          <div class="card mb-4">

                              <div class="card-body">
                                  <table id="datatablesSimple">
                                      <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>Institution Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Topic</th>
                                            <th>Place</th>
                                            <th>Date</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($workshop as $key)
                                      <tr>
                                        <td>
                                          {{$key->id}}
                                        </td>
                                        <td>
                                          {{$key->institution_name}}
                                        </td>
                                        <td>
                                          {{$key->email}}
                                        </td>
                                        <td>
                                            {{$key->phone}}
                                          </td>
                                          <td>
                                            {{$key->workshop_topic}}
                                          </td>
                                          <td>
                                            {{$key->workshop_place}}
                                          </td> 
                                          <td>
                                            {{$key->workshop_date}}
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

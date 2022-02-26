@extends('layouts.admin')

@section('styles')

@endsection
@section('content')
  <div class="container-fluid px-4">
                          <h1 class="mt-4">Payments</h1>
                          <ol class="breadcrumb mb-4">
                              <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                              <li class="breadcrumb-item active">Payments</li>
                          </ol>
                      
                          <div class="card mb-4">

                              <div class="card-body">
                                  <table id="datatablesSimple">
                                      <thead>
                                          <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Amount</th>
                                            <th>Payment Id</th>
                                            <th>User Id</th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($payments as $key)
                                      <tr>
                                        <td>
                                          {{$key->id}}
                                        </td>
                                        <td>
                                          {{$key->name}}
                                        </td>
                                        <td>
                                          {{$key->email}}
                                        </td>
                                        <td>
                                            {{$key->phone}}
                                        </td>
                                        <td>
                                            {{$key->amount}}
                                        </td>
                                        <td>
                                            {{$key->payment_id}}
                                        </td>
                                        <td>
                                            {{$key->user_id}}
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

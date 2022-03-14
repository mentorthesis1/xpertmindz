@extends('layouts.basesection')
@section('dashboard')

<h1>my payment</h1>

<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th scope="col">Sl.no</th>
        <th scope="col">Name</th>
        <th scope="col">Email id</th>
        <th scope="col">Phone</th>
        <th scope="col">Payment ID</th>
        
        <th scope="col">Amount</th>
      </tr>
    </thead>
    <tbody>
      @foreach($payments as $key)
      <tr>
        <th scope="row">{{$key->id}}</th>
        <td>{{$key->name}}</td>
        <td>{{$key->email}}</td>
        <td>{{$key->phone}}</td>
        <td>{{$key->payment_id}}</td>
  
        <td>{{$key->amount}}</td>
      </tr>
      @endforeach
      
    </tbody>
  </table>


@endsection
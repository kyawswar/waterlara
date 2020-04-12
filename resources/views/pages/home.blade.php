@extends('layouts.master')
@section('content')
<div class="container p-5">
  <div class="row">
    <div class="col-md-12">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Name</th>
          <th>Age</th>
          <th>Address</th>
          <th>Phone</th>
        </tr>
      </thead>
      @foreach ($data as $item)
        <tr>
          <td>{{$item->name}}</td>
          <td>{{$item->age}}</td>
          <td>{{$item->address}}</td>
          <td>{{$item->phone}}</td>
        </tr>
      @endforeach
    </table>
    </div>
  </div>
</div>
@endsection

@extends('layouts.adminlayout')
@section('search')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($student as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->name}}</td>
      <td>{{$student->email}}</td>
      <td><a href="/moredetails/{{$student->id}}" class="btn">More Details</a></td>
    </tr>
 @endforeach
@endsection
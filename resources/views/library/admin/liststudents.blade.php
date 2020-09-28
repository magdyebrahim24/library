@extends('layouts.adminlayout')
<html>
<head>
  <title> Students List</title>
</head>
<body>
  

@section('liststudents')

<h2 ><i class="fa fa-th-list"></i> Students List :</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($all_students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->name}}</td>
      <td>{{$student->email}}</td>
      <td><a href="/moredetails/{{$student->id}}" class="btn">More Details</a></td>
    </tr>
  @endforeach
  </table>
@endsection
</body>
</html>
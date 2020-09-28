@extends('layouts.adminlayout')
<html>
  <head>
<title>Student Details</title>
</head>

<body>
  
@section('moredetails')

<h2 ><i class="fa fa-info-circle"></i> Student Details :</h2>

<table class="table">
  <tbody>
  @foreach($student_details as $student_details)
    <tr>
      <th scope="col">Student ID</th>
      <th scope="row">{{$student_details->id}}</th>
    </tr>
    <tr>
      <th scope="col">Student Name</th>
      <td>{{$student_details->name}}</td>
    </tr>
    <tr>
      <th scope="col">Student Email</th>
      <td>{{$student_details->email}}</td>
    </tr>
    <tr>
      <th scope="col">Profile Photo Path</th>
      <td>{{$student_details->profile_photo_path}}</td>
    </tr>
    <tr>
      <th scope="col">Created At</th>
      <td>{{$student_details->created_at}}</td>
    </tr>
    <tr>
      <th scope="col">Updated At</th>
      <td>{{$student_details->updated_at}}</td>
    </tr>
 @endforeach
@endsection

</body>
</html>
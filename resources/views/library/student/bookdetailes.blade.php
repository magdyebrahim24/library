@extends('layouts.studentlayout')
<html>
  <head>
<title>Book Details</title>
<style>
  th , td {
    text-align: left !important;
  }
</style>
</head>

<body>
  
@section('moredetails')

<h2 style="margin-bottom: 40px"><i class="fa fa-info-circle"></i> Book Details :</h2>

<table class="table">
  <tbody>
    <tr>
      <th scope="col">Book ID</th>
      <th scope="row">{{$book_data->id}}</th>
    </tr>
    <tr>
      <th scope="col">Book Name</th>
      <td>{{$book_data->book_name}}</td>
    </tr>
    <tr>
      <th scope="col">Book description</th>
      <td>{{$book_data->book_description}}</td>
    </tr>
    <tr>
      <th scope="col">Author name</th>
      <td>>{{$book_data->author_name}}</td>
    </tr>
    <tr>
      <th scope="col">Created At</th>
      <td>{{$book_data->created_at}}</td>
    </tr>
    <tr>
      <th scope="col">Updated At</th>
      <td>{{$book_data->updated_at}}</td>
    </tr>
@endsection

</body>
</html>


@extends('layouts.adminlayout')
<html>
<head>
  <title>Borrowed Books List</title>
</head>
<body>
  

@section('liststudents')
<h2><i class="fa fa-th-list"></i> Borrowed Books List :</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">Borrowed Book ID</th>
      <th scope="col">Borrowed Book Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach($books as $book)
  
    <tr>
      <th scope="row">{{$book->user_id}}</th>
      <td>{{$book->book_id}}</td>
      <td>{{$book->book_name}}</td>  
    </tr>

  @endforeach
@endsection
</body>
</html>

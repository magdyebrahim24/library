@extends('layouts.adminlayout')
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}" />

<title>Books List</title>
<meta charset="utf-8">  
</head>
<body>
@section('book')
<h2 ><i class="fa fa-book"></i> Books List :</h2><hr style="margin:0 300px 40px 0;">

@foreach($book as $book)

<table>
<tr>
<div class="content">
<div class="book-continer">
<p><h3 style="color: #504e4e">{{$book->book_name}}</h3></p>
<hr>
<p>Author Name : {{$book->author_name}}</p>
<p>Book Description : {{$book->book_description}}</p>
</div>

<div class="buttons">
<!-- <a href="#" class="btn btn-primary" role="button">Show</a> -->
<a href="/edit/{{$book->id}}" class="btn btn-primary" role="button">Update</a>
<a href="/adminbookdetailes/{{$book->id}}" class="btn" role="button">Details</a>
<a href="/delete/{{$book->id}}" class="btn btn-danger" role="button">Delete</a>
</div>
</div>
</tr>
</table>
@endforeach
@endsection

            


</body>
</html>

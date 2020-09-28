@extends('layouts.studentlayout')

<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/home.css') }}" />
<title>All Books List</title>
<meta charset="utf-8">  
</head>
<body>
    @section('booksbody')
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
<a href="/borrow/{{$book->id}}" class="btn" role="button">Borrow</a>
<a href="/bookdetailes/{{$book->id}}" class="btn" role="button">Details</a>
</div>
</tr>
</table>
@endforeach
@endsection

            


</body>
</html>

          
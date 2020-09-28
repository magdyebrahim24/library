@extends('layouts.adminlayout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
 @section('add')
 <h2 ><i class="fa fa-plus-circle"></i> Add Book</h2><hr style="padding-bottom: 30px">
 
 <form method='POST' action='/submit' >
 @csrf
 
  <div class="form-group" >
    <label for="1">book name</label>
    <input type="text" name="book_name" class="form-control" id="1" value='{{old("book_name")}}'>
    <label>{{$errors->first('book_name')}} </label>
  </div>

  <div class="form-group">
    <label for="2">author name</label>
    <input type="text" name="author_name" class="form-control" id="3" value='{{old("author_name")}}'>
    <label>{{$errors->first('author_name')}} </label>
  </div>
  <div class="form-group">
    <label for="3">Book Describtion</label>
    <textarea class="form-control" rows="3" name="book_description" ></textarea>
    <label>{{$errors->first('book_description')}} </label>

  </div>
  <button type="submit" class="btn">Submit</button>
</form>
    @endsection
</body>
</html>


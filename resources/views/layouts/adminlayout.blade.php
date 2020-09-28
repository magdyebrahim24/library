
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" >
    <script type="text/javascript" src="{{ url('/js/test.js') }}"></script>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
        <ul class="list-unstyled components mb-5">
          
          <li class="active">
            <a href="/home"><span class="fa fa-book"></span> Books List</a>
          </li>
          <li>
              <a href="/add"><span class="fa fa-plus"></span> Add Book</a>
          </li>
          <li>
            <a href="/liststudents"><span class="fa fa-list-ol"></span>Students List</a>
          </li>
          <li>
            <a href="/borrow"><span class="fa fa-list-alt"></span> Borrowed Books List</a>
          </li>
        </ul>
    	</nav>
    <div class="bodycontain">

        <ul class="topnav list-unstyled components">
          <li style="margin:0 !important; padding: 0 !important;">
            <button type="button" id="sidebarCollapse" class="btn btn-primary" style="margin:7px 0 !important;width: 40px;">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
          </button></li>
          <li><a>Library  <span class="fa fa-book"></span></a></li>
          <li class="right">
            <form method="POST" action="{{ route('logout') }}" style="margin-bottom: 0px;">
              @csrf
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        this.closest('form').submit();">Sign Out  <span class="fa fa-sign-out"></span></a>
                  </form> </li>   
          <li class="right"><a href="/adminprofile">Account  <span class="fa fa-user-circle"></span></a></li>
          <li class="right" style="margin: 4px 30px 0 0">    <form class="form-inline my-2 my-lg-0" method="POST" action="/search">
            @csrf
              <p style="color:white;" >{{$errors->first('id')}}</p>
              <input class="form-control mr-sm-2" name="id" type="search" placeholder="Get student by id" aria-label="Search">
              <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
              
            </form></li>
        </ul>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
          <div>@yield('book')</div>
          <div>@yield('add')</div>
          <div>@yield('search')</div>
          <div>@yield('moredetails')</div>
          <div>@yield('liststudents')</div>
      </div>
		</div>
  </div>
    <script type="text/javascript" src="{{ url('/js/jquery.min.js') }} "></script>
    <script  type="text/javascript" src="{{ url('/js/popper.js') }} "></script>
    <script  type="text/javascript" src="{{ url('/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/main.js') }} "></script>
  </body>
</html>
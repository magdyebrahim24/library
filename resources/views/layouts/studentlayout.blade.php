
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 07</title>
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
        <ul class="topnav list-unstyled components">      
          <li ><a>Library  <span class="fa fa-book"></span></a></li>
            <li class="active" style="margin-left: 520px">
              <a href="/myboooks"><span class="fa fa-book"></span> My Books</a>
            </li>
            <li>
              <a href="/allbooks"><span class="fa fa-list-ol"></span> Books List</a>
            
              <li class="right">
                <form method="POST" action="{{ route('logout') }}" style="margin-bottom: 0px;">
                  @csrf
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            this.closest('form').submit();">Sign Out  <span class="fa fa-sign-out"></span></a>
                      </form> </li>
          <li class="right"><a href="/user/profile">Account  <span class="fa fa-user-circle"></span></a></li>
          
        </ul>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
        <div>@yield('studenthome')</div>
        <div>@yield("booksbody")</div>
        <div>@yield("moredetails")</div>
        <div>@yield("account")</div>

  </div>
    <script type="text/javascript" src="{{ url('/js/jquery.min.js') }} "></script>
    <script  type="text/javascript" src="{{ url('/js/popper.js') }} "></script>
    <script  type="text/javascript" src="{{ url('/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/main.js') }} "></script>
  </body>
</html>
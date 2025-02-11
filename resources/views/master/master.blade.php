<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >

<head>
	<base href="{{ BASE }}">
	<meta http-equiv="refresh" content="{{ SESSIONTIMEOUT }}">
   	<meta charset="utf-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<title>{{ $title }}</title>
   	<link rel="stylesheet" href="css/bootstrap.css">
   	<link rel="stylesheet" href="css/styles.css">
   	<script src="js/jquery-3.7.1.min.js"></script>
</head>

<body>
  	<header id="header">
	    <nav>
		    <ul class="flx-se">
			    <li><a href="{{route('home')}}">Home</a></li>
				<li><a href="{{route('service')}}">Service</a></li>
				<li><a href="{{route('books')}}">books</a></li>
				<li><a href="{{route('levels')}}">levels</a></li>
				<li><a href="">Contact Us</a></li>
				<li><a href="{{route('administration')}}">Administration</a></li>
@if(!Auth::check())
				<li><a id="login-tag" href="javascript:void(0)">Sign In</a></li>
@else
				<li><a id="logout-tag" href="javascript:void(0)">Sign Out</a></li>
@endif				
			   
				
			</ul>
		</nav>
  	</header>
  	<form id="sign-in-form" action="{{ route('login') }}" method="post">
  		@csrf
  		<fieldset>
  			<label>EMAIL</label>
  			<input type="text" name="email">
  		</fieldset>
  		<fieldset>
  			<label>Password</label>
  			<input type="password" name="password">
  		</fieldset>
  		<div class="flx-cc">
  			<button class="btn btn-primary">Sign In</button>  		
  		</div>	
  	</form>

  	<form id="sign-out-form" action="{{ route('logout') }}" method="post">
  		@csrf
  		<div class="flx-cc">
  			<button class="btn btn-primary">Logout</button>  		
  		</div>	
  	</form>

  	<main>@yield('main')</main>
  
  	<footer></footer>

  	<script src="js/shipcda.js"></script>
</body>

</html> 
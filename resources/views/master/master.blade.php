<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >

<head>
	 <base href="{{ BASE }}">

   <meta charset="utf-8">
   
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>{{ $title }}</title>
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/styles.css">
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
		   
			
		</ul>
	</nav>
  </header>
  <main>@yield('main')</main>
  
  <footer></footer>
</body>

</html>
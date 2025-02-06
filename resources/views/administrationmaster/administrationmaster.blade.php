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
                <ul class="eight-cols">
                    <li><a href="administration/makes">MAKES</a></li>
                    <li><a href="administration/cars">CARS</a></li>
                    <li><a href="administration/books">BOOKS</a></li>
                    <li><a href="administration/levels">LEVELS</a></li>
                    <li><a href="administration/services">SERVICES</a></li>
                    <li><a href="administration/companies">COMPANIES</a></li>
                    <li><a href="administration/customers">CUSTOMERS</a></li>
                    <li><a href="administration/customer-margins">CUSTOMER MARGINS</a></li>
                </ul>
            </nav>
        </header>
      
        <main>@yield('main')</main>
      
        <footer></footer>
    </body>

</html>
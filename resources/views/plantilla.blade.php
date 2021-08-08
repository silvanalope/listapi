<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    .active a {
      color:red;
      text-decoration: none;
    }
    </style>

    <title>@yield('title', 'Aprendible')</title>
</head>
<body>
      <nav>
       <ul>
         <li class = "{{request()->route('home') ? 'active' : ''}}"><a href="/"> home</a></li>
         <li><a href="/about"> about</a></li>
         <li><a href="/portafolio"> portafolio</a></li>
         <li><a href="/contact"> contactos</a></li>
       </ul>
      </nav>
 @yield('contact')

</body>
</html>

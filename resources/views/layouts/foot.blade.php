<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/app.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>@yield('title')</title>
</head>
<body>

  <nav class="navbar  navbar-dark nav-test">
<a href="/" class="nav-brand">TITUS KLEIN</a>


  <i  class= "fa fa-2x fa-bars navbar-togglers"></i>


  

  </nav>

  <div class="sidebar">

    
      <ul class="navbar-nav p-5">
        <li class="nav-it mx-3">
          <a class="nav-link{{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
      </li>
      <li class="nav-it mx-3">
          <a class="nav-link{{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
      </li>
      <li class="nav-it mx-3">
          <a class="nav-link{{ request()->is('work') ? ' active' : '' }}" href="/work">Work</a>
      </li>
      </ul>
  
  </div>

  @yield('content')
  


          <script src="{{ asset("./js/app.js") }}"></script>


</body>
</html>
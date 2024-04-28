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
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js"></script>

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>@yield('title')</title>
</head>
<body>

  <nav class="navbar navbar-dark nav-test">
<a href="/" class="nav-brand">TITUS KLEIN</a>


  <i  class= "fa fa-2x fa-bars navbar-togglers"></i>


  

  </nav>

  <div class="sidebar">

    
      <ul class="navbar-nav me-auto p-5 mb-2 mb-lg-0">
        <li class="nav-item mx-3">
          <a class="nav-link fw-light{{ request()->is('/') ? ' clicked' : '' }}" href="/">HOME</a>
      </li>
      <li class="nav-item mx-3">
          <a class="nav-link  fw-light{{ request()->is('about') ? ' clicked' : '' }}" href="/about">ABOUT</a>
      </li>
      <li class="nav-item mx-3">
          <a class="nav-link  fw-light{{ request()->is('work') ? ' clicked' : '' }}" href="/work">WORK</a>
      </li>
      <li class="nav-item mx-3">
        <a class="nav-link  fw-light{{ request()->is('work') ? ' clicked' : '' }}" href="/work">PRESENTATIONS</a>
    </li>
    <li class="nav-item mx-3">
      <a class="nav-link  fw-light{{ request()->is('work') ? ' clicked' : '' }}" href="/work">FOCUS</a>
  </li>
  <li class="nav-item mx-3">
    <a class="nav-link  fw-light{{ request()->is('work') ? ' clicked' : '' }}" href="/work">CONTACT</a>
</li>
<li class="nav-item mx-3">
  <a class="nav-link  fw-light" href="/work">MWC 2020</a>
</li>

<li class="nav-item mob mx-3">
  <a class="nav-link  fw-light" href="/work">Start a Project-></a>
</li>     
       
      </ul>


  
  </div>

  @yield('content')
  
  <nav class="navbar  footer-bg g-0" >
    <div class="container-fluid footer-copy text-center  foot " >
        <div class="footer-group text-gap foot">
          
      <a class="foot-test px-4 gap-texts"> © 2021 Titus Klein</a>
      <a class="foot-test px-4 gap-texts">Contact</a>
    </div>
    <div class="footer-group foot">
      <a class="foot-link px-4 gap-texts" href="#"><img src="https://assets-global.website-files.com/615b66ec9bfbd548ea22bcf0/615cded80f2f2bf2f2e1bb67_linkedin2.svg" alt=""></a>
      <a class="foot-link px-4 gap-texts" href="#"><img src="https://assets-global.website-files.com/615b66ec9bfbd548ea22bcf0/615cdf01ad26527794e06a94_twitter.svg" alt=""></a>
      <a class="foot-link px-4 gap-texts" href="#"><button type="button" class="btn btn-dark">TOP</button></a>


          <script src="{{ asset("./js/app.js") }}"></script>

          
      </div>
    </div>
  </nav>

</body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quiz.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container">
               <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="img/logo.svg" alt="Turtles">
               </a>
               <ul class="navbar-nav me-auto ">
                  <li class="nav-item me-3">
                     <a class="nav-link" aria-current="page" href="#">Quizes</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">About</a>
                  </li>
               </ul>
               <div>
                @guest
                @if (Route::has('login'))
                  <a href="{{ route('login') }}" class="btn secondaryBtn me-1">{{ __('Login') }}</a>
                @endif
                @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="btn primaryBtn">{{ __('Register') }}</a>
                @endif
                @else
                {{ Auth::user()->name }}             
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }} </a>
                <a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form> 
                </a> 
                 @endguest
               </div>
            </div>
         </nav>
        <main class="py-4">
            @yield('content')
        </main>
    <footer>
        <div class="container">
           <div class="footer-link  d-flex justify-content-between">
              <div class="d-flex">
                 <div><a class="link" href="about.html">About</a></div>
                 <div><a class="link" href="#">Help</a></div>
                 <div><a class="link" href="#">Privacy</a></div>
                 <div><a class="link" href="#"> Terms </a></div>
                 <div><a class="link" href="#">Contact</a></div>
              </div>
              <div class="link copyright">Copyright © 2021 Turtles.</div>
           </div>
        </div>
     </footer>
    </div>
    <script src="js/registration.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="js/script.js"></script>
</body>
</html>

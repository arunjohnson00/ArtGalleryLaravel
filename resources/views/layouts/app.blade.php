<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" ></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        
            <div class="container-fluid">
            <a class="navbar-brand d-flex flex-wrap align-content-center  p-0" href="{{ url('/') }}">
                    <div >
                    <img src="../image/logo1.png" class="logo_image"  alt="logo"/>
                    </div>
                </a>
                
                <div class=" navbar-item d-flex" id="navbarSupportedContent">
                    
                        <!-- Authentication Links -->
                        @guest
                        
                            @if (Route::has('login'))
                            
                                <div class="nav-item">
                                    <a class="nav-link p-0 m-2" href="{{ route('login') }}"><button class="r-Btn bg_color text-white"><i class=" fas fa-sign-in-alt"></i></button></a>
                                </div >
                            @endif

                            @if (Route::has('register'))
                         
                                <div class="nav-item">
                                    <a class="nav-link p-0 m-2" href="{{ route('register') }}"><button class="r-Btn bg_2color text-white"><i class="fas fa-user-plus"></i></button></a>
                                </div >
                            @endif
                        @else
                        
                       
                        <div class=" d-flex flex-wrap align-content-center ">
                    <button type="button" class="r-Btn bg_color pt-2 pb-2 text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-plus"></i>
                    </button>
                        </div >

                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end bg_clr" aria-labelledby="navbarDropdown" >
                                    <a class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa-solid fa-right-from-bracket text-dark"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div >
                        @endguest
                </div>
            </div>
            
        </nav>

        <main class="">
            @yield('content')
        </main>

    </div>

    <script>

        </script>
</body>
</html>

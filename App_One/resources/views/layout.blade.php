<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App_One - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- bootstrap --}}
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" >
        {{-- this file from Public folder --}} 
        <link rel="stylesheet" href="{{url('css/style.css')}}">

    </head>
    <body>
        {{-- -------------- Navbar -------------- --}}
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark text-light fixed-top">
            <div class="container">
                <a href="{{route('home')}}" class="navbar-brand">App One</a>

                <button 
                    class="navbar-toggler" 
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navmenu"
                >
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('employees.index')}}">Employees</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- -------------- end Navbar -------------- --}}

        {{-- -------------- content all pages -------------- --}}
        <div class="container body">
                @yield('content')
        </div>
        {{-- -------------- end content -------------- --}}

        {{-- -------------- Footer -------------- --}}
        <footer class="py-2 bg-dark text-light text-center ">
            <div class="container">
                <p class="lead">
                    &copy;  2023 - <span class="">JimyRozany</span>
                </p>
            </div>
            
        </footer>
        {{-- -------------- end Footer -------------- --}}

        <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>
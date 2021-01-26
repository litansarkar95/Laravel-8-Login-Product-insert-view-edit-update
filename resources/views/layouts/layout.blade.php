<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposive Design</title>
    <link rel="stylesheet" href="/css/style.css" >
</head>
<body>
    
    <section class="sec">
<header>
    <a href="#" class="logo">LOGO</a>
    <div class="toggleMenu" onclick="menuToggle();"></div>
    <ul class="navigation">
        <li><a href="/">Home</a></li>
        <li><a href="#">About</a></li>
    

        @guest
                            @if (Route::has('login'))
    
        <li><a href="{{route('login')}}">Login </a></li>
        @endif  @if (Route::has('register'))
        <li><a href="{{route('register')}}">Register </a></li>
        @endif
                        @else
                        <li><a href="/pizza/create">Pizza Order</a></li>
        <li><a href="/pizza">Pizza List</a></li>
                        <li><a href="#">{{ Auth::user()->name }}</a></li>
                        <li>                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div></li>
                                <li><a href="#">Contact</a></li>
                        @endguest
    </ul>
</header>

 @yield('content')
    </section>

    <script>
        function menuToggle(){
            const toggleMenu=document.querySelector('.toggleMenu');
            const navigation=document.querySelector('.navigation');
            toggleMenu.classList.toggle('active')
            navigation.classList.toggle('active')
        }
    </script>
</body>
</html>
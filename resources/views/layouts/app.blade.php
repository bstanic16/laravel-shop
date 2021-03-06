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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class=" bg-dark">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
            <div class="container ">
                <a class="navbar-brand" href="{{ url('/categories') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="p-2"><a class="text-dark font-weight-bold" href="/categories">Categories</a></li>
                        <li class="p-2"><a class="text-dark  font-weight-bold"  href="/cart">Cart</a></li>
                        <li class="p-2"><a class="text-dark  font-weight-bold"  href="/products/sale">Sale</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="p-2"><a class="text-light font-weight-bold" href="/orders">Orders</a></li>

                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>

        </nav>
        <div>
            @yield('category')
        </div>
        <div>
            @yield('saleOn')
        </div>
        <div>
            @yield('categoryShow')
        </div>
        <main class="py-4">
            @yield('content')
        </main>
        <div class="container">
            @yield('sale')
        </div>
        <div class="container">
            @yield('newsletter')
        </div>
        <div class="container">
            @yield('createOrder')
        </div>
        <div class="container">
            @yield('createProd')
        </div>
        <div class="container">
            @yield('editCat')
        </div>
        <div class="container">
            @yield('editProd')
        </div>
        <div class="container">
            @yield('card')
        </div>
        <div class="container">
            @yield('products')
        </div>
        <div class="container">
            @yield('orders')
        </div>
        <div class="">
            @yield('prods')
        </div>
    </div>
</body>
</html>

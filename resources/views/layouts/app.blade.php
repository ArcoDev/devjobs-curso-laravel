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

    @yield('styles')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200 min-h-screen leading-none">
    <div id="app">
        <nav class="bg-gray-800 shadow-md p-2">
            <div class="container mx-auto md:px-0">
                <div class="flex items-center justify-around">
                    <a class="text-2xl text-white" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <nav class="flex justify-end gap-3 flex-1 text-right">
                        @guest
                        <a class="text-white no-underline hover:text-teal-300 p-3"
                            href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a class="text-white no-underline hover:text-teal-300 p-3"
                            href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                        <span class="text-gray-300 text-sm mt-3 circle-online">
                            {{ Auth::user()->name }}
                        </span>
                        <div class="no-underline text-gray-300 text-sm p-3" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @endguest
                    </nav>
                </div>
            </div>
        </nav>

        <div class="bg-gray-600">
            <nav class="container mx-auto flex space-x-1">
                @yield('navegacion')
            </nav>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @yield('scripts')

</body>

</html>

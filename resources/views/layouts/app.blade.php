<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MUMSA') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @stack('scripts')

</head>

<body class=" font-sans antialiased leading-none bg-gray-100">
    <div id="app">
        <div class="fixed top-0 z-50 w-full">

            <header class="h-24 bg-blue-900">
                <div class="pt-2 container flex items-center justify-between px-6 mx-auto">
                    <div>
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'MUMSA') }}
                        </a>
                    </div>
                    <nav class="space-x-4 text-sm text-gray-300 sm:text-base">
                        @guest
                            <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <span>{{ Auth::user()->firstName }}</span>

                            <a href="{{ route('logout') }}" class="no-underline hover:underline" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </nav>
                </div>
                @if (Auth::check())
                {{-- <div class="  pt-10 container    mx-auto flex  justify-start text-white  ">
                    <a class="pl-5 no-underline font-semibold hyper-style pr-2 hover:underline active:text-orange-200" href="{{ route('home') }} ">DASHBOARD</a>

                    <a class="no-underline hyper-style hover:underline active:text-orange-200 pr-2 " href="{{ route('list') }} ">LIST</a>
                    <a class="no-underline hyper-style hover:underline active:text-orange-200 " href="/blog ">BLOG</a> --}}

                    {{-- <a class="no-underline  hyper-style" href="{{ route('sell') }} ">SELL</a> --}}

                {{-- </div> --}}
                <div class="  pt-6 pb-3 container   mx-auto flex  justify-evenly  text-white  ">
                    <a class="no-underline  hyper-style hover:underline active:text-orange-200" href="{{ route('home') }} ">DASHBOARD</a>

                    <a class="no-underline hyper-style hover:underline active:text-orange-200 " href="{{ route('list') }} ">REGISTER</a>
                    <a class="no-underline  hyper-style hover:underline active:text-orange-200" href="/blog">BLOG</a>








                </div>


            @endif
            </header>
        </div>

        @yield('content')
    </div>
    {{-- the bottomNavBar should be static --}}
    {{-- removed footer for the time being --}}

    {{-- @if (Auth::check())
            <div>
                @include('layouts.bottomNavbar')



            </div>
        @endif --}}

</body>

</html>

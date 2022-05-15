<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MUMSA') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="h-screen font-sans antialiased leading-none bg-gray-100">
    <div class="flex flex-col">
        @if (Route::has('login'))
            <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
                @auth
                    <a href="{{ url('/home') }}"
                        class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline">{{ __('Home') }}</a>
                @else
                    <a href="/blog"
                        class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline">{{ __('BLOG') }}</a>

                    <a href="{{ route('login') }}"
                        class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline">{{ __('Login') }}</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline">{{ __('Register') }}</a>
                    @endif
                @endauth
            </div>
        @endif


        {{-- <div class="flex items-center justify-center min-h-screen style="background-image: url('images/pat-back.svg');background-position: center;	background-repeat: repeat; 	background-size: 7%;	background-color: #fff;	overflow-x: hidden;transition: all 200ms linear;"> --}}
            <div class=" min-h-screen flex items-center justify-center" style=" background-image: url('images/pat-back.svg');background-position: center;	background-repeat: repeat; 	background-size: 7%;	background-color: #fff;	overflow-x: hidden;    transition: all 200ms linear;

            <div class="flex flex-col justify-around h-full">
                <div>
                    <h1 class="mb-6 text-4xl font-light tracking-wider text-center text-gray-600 sm:mb-8 sm:text-6xl">
                        {{ config('app.name', 'MUMSA') }}
                    </h1>

                </div>
            </div>
        </div>


    </div>
</body>

</html>

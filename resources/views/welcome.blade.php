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
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ url('/home') }}" class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-sm font-normal text-teal-800 no-underline uppercase hover:underline">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    {{-- <div class="flex items-center justify-center min-h-screen">
        <div class="flex flex-col justify-around h-full">
            <div>
                <h1 class="mb-6 text-4xl font-light tracking-wider text-center text-gray-600 sm:mb-8 sm:text-6xl">
                    {{ config('app.name', 'MUMSA') }}
                </h1>

            </div>
        </div>
    </div> --}}
    <main class="mt-10 sm:container sm:mx-auto sm:mt-10">
        <div class="w-full ">

            @if (session('status'))
                <div class="px-3 py-4 mb-4 text-sm text-green-700 bg-green-100 border border-t-8 border-green-600 rounded"
                    role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-lg">

                <!-- component -->
                <div class="min-h-screen px-5 py-32 pt-20 pb-5 ">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-10 xl-grid-cols-4 gap-y-10 gap-x-6 ">

                        <div
                            class="container max-w-md mx-auto transition duration-300 rounded-lg shadow-lg hover:shadow-2xl">
                            <img src="{{URL('/images/Eid-Mubarak.jpg')}}" alt=""
                                class="w-full rounded-t-lg">
                            <div class="p-6">
                                <h1
                                    class="text-xl font-bold text-gray-900 transition duration-200 md:text-1xl hover:text-indigo-600 ">
                                    This is Amazing for people to visit.</h1>
                                <p class="my-2 text-gray-700 hover-text-900 ">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Praesentium quis.</p>
                            </div>
                        </div>

                        <div
                            class="container max-w-md mx-auto transition duration-300 rounded-lg shadow-lg hover:shadow-2xl">
                            <img src="{{URL('/images/Eid-ul-Adha.jpg')}}" alt=""
                                class="w-full rounded-t-lg">
                            <div class="p-6">
                                <h1
                                    class="text-xl font-bold text-gray-900 transition duration-200 md:text-1xl hover:text-indigo-600 ">
                                    This is Amazing for people to visit.</h1>
                                <p class="my-2 text-gray-700 hover-text-900 ">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Praesentium quis.</p>
                            </div>
                        </div>
                        <div
                            class="container max-w-md mx-auto transition duration-300 rounded-lg shadow-lg hover:shadow-2xl">
                            <img src="{{URL('/images/muslim-festival.jpg')}}" alt=""
                                class="w-full rounded-t-lg">
                            <div class="p-6">
                                <h1
                                    class="text-xl font-bold text-gray-900 transition duration-200 md:text-1xl hover:text-indigo-600 ">
                                    This is Amazing for people to visit.</h1>
                                <p class="my-2 text-gray-700 hover-text-900 ">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Praesentium quis.</p>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="container transition duration-300 rounded-lg shadow-lg max-w-screen-2xl hover:shadow-2xl"> --}}
                        {{-- <img src="images/money.jpg" alt="" class="w-full rounded-t-lg"> --}}
                        {{-- <div class="p-6">
                            <h1
                                class="text-xl font-bold text-gray-900 transition duration-200 md:text-1xl hover:text-indigo-600 ">
                                News/Admin Panel.</h1>
                            <p class="my-2 text-gray-700 hover-text-900 ">Administration Notification Panel .<br/>
                            Admin panel</p>
                        </div>
                    </div> --}}

                    {{-- <div class="container transition duration-300 rounded-lg shadow-lg max-w-screen-2xl hover:shadow-2xl"> --}}
                        {{-- <img src="images/money.jpg" alt="" class="w-full rounded-t-lg"> --}}
                        {{-- <div class="p-6">
                            <h1
                                class="text-xl font-bold text-gray-900 transition duration-200 md:text-1xl hover:text-indigo-600 ">
                                News/Admin Panel.</h1>
                            <p class="my-2 text-gray-700 hover-text-900 ">Activities .<br/></p>

                        </div>
                    </div> --}}

                </div>
            </section>
        </div>
    </main>

</div>
</body>
</html>

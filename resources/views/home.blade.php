@extends('layouts.app')
@push('scripts')
    <script src="{{ asset('chart.js/chart.js') }}"></script>


    <script src="{{ asset('js/chart_demo.js') }}" defer></script>
@endpush
@section('content')
    <main class="h-screen mt-10 sm:container sm:mx-auto sm:mt-10">
        <div class="w-full">

            @if (session('status'))
                <div class="px-3 py-4 mb-4 text-sm text-green-700 bg-green-100 border border-t-8 border-green-600 rounded "
                    role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm ">

                {{-- <header class="px-6 py-5 font-semibold text-gray-700 bg-gray-200 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
                {{-- include the navbar containing the buy sell hyperlinks --}}
                {{-- </header> --}}

                <div class="min-h-screen px-1 pt-20 pb-5 color ">
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 lg:m-2 md:gap-x-10 xl-grid-cols-4 gap-y-10 gap-x-6 ">

                        <div
                            class="container transition duration-300 rounded-lg shadow-lg max-w-screen-2xl hover:shadow-2xl">
                            {{-- chart js charting file injected here --}}
                            <canvas id="myChart" width="550" height="250"></canvas>
                            {{-- <div class="p-6"> --}}
                            {{-- <h1
                                class="text-xl font-bold text-gray-900 transition duration-200 md:text-1xl hover:text-indigo-600 ">
                             Payment statistics Statistics.</h1> --}}

                            {{-- </div> --}}
                        </div>


                    </div>


                    {{-- last card --}}



                    <div
                        class="container mb-5 transition duration-300 rounded-lg shadow-lg max-w-screen-2xl hover:shadow-2xl">
                        {{-- <img src="images/money.jpg" alt="" class="w-full rounded-t-lg"> --}}
                        <div class="p-6">
                            <h1
                                class="text-xl font-bold text-center text-gray-900 transition duration-200 md:text-1xl hover:text-indigo-600 ">
                                Financial Expenditure</h1>
                            {{-- @forelse ($shares) --}}
                            {{-- // displays the total amount of shares available .implemented in home controller --}}
                            {{-- @if ($shares) --}}
                            <p class="my-2 text-gray-700 hover-text-900 ">Total Billed <span
                                    class="font-bold">45000/=</span></p>
                            {{-- @else --}}
                            <p class="my-2 text-gray-700 hover-text-900 ">Total Paid<span
                                    class="font-bold">30000/=</span></p>
                            <p class="my-2 text-gray-700 hover-text-900 ">Balance<span class="font-bold">15000/=</span>
                            </p>
                            <p class="my-2 text-gray-700 hover-text-900 ">Contribution<span
                                    class="font-bold">10000/=</span></p>

                        </div>
                    </div>
                    <div class="container transition duration-300 rounded-lg shadow-lg max-w-screen-2xl hover:shadow-2xl">
                        {{-- <img src="images/money.jpg" alt="" class="w-full rounded-t-lg"> --}}
                        <div class="p-6">
                            <h1
                                class="text-xl font-bold text-gray-900 transition duration-200 md:text-1xl hover:text-indigo-600 ">
                                Admin Notification Panel .</h1>
                            <p class="my-2 text-gray-700 hover-text-900 "> All MuMSA official members meeting will be held
                                on 3rd August 2022.Purpose to Attend</p>

                        </div>
                    </div>

                    <div
                        class="py-6 px-2 container mb-5 transition duration-300 rounded-lg shadow-lg max-w-screen-2xl hover:shadow-2xl">
                        {{-- <img src="images/money.jpg" alt="" class="w-full rounded-t-lg"> --}}
                        <img src="{{ URL('/images/islamQuotes.jpg') }}" alt="" class="w-full rounded-t-lg">
                    </div>


                </div>
                <div class="  fixed bottom-0 bg-blue-200 pt-10 container pb-4    mx-auto flex  justify-start text-white  ">
                    <a class="px-5  no-underline font-semibold hyper-style hover:underline active:text-orange-200"
                        href="{{ route('home') }} ">HOME</a>

                    <i class="fa-primary-red fa-home" style="color:red"></i>

                    <a class="no-underline hyper-style hover:underline active:text-orange-200 "
                        href="{{ route('list') }} ">LIST</a>

                </div>
        </div>


        </section>
        </div>
    </main>
@endsection

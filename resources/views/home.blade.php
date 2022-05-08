@extends('layouts.app')

@section('content')
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
                            <img src="https://images.unsplash.com/photo-1627751476653-e954179b174a" alt=""
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
                            <img src="https://images.unsplash.com/photo-1572431447238-425af66a273b" alt=""
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
                            <img src="https://images.unsplash.com/photo-1540202404-1b927e27fa8b" alt=""
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
                    <div class="container transition duration-300 rounded-lg shadow-lg max-w-screen-2xl hover:shadow-2xl">
                        {{-- <img src="images/money.jpg" alt="" class="w-full rounded-t-lg"> --}}
                        <div class="p-6">
                            <h1
                                class="text-xl font-bold text-gray-900 transition duration-200 md:text-1xl hover:text-indigo-600 ">
                                News/Admin Panel.</h1>
                            <p class="my-2 text-gray-700 hover-text-900 ">Administration Notification Panel .<br/>
                            Admin panel</p>
                        </div>
                    </div>

                    <div class="container transition duration-300 rounded-lg shadow-lg max-w-screen-2xl hover:shadow-2xl">
                        {{-- <img src="images/money.jpg" alt="" class="w-full rounded-t-lg"> --}}
                        <div class="p-6">
                            <h1
                                class="text-xl font-bold text-gray-900 transition duration-200 md:text-1xl hover:text-indigo-600 ">
                                News/Admin Panel.</h1>
                            <p class="my-2 text-gray-700 hover-text-900 ">Activities .<br/></p>

                        </div>
                    </div>

                </div>
            </section>
        </div>
    </main>
@endsection

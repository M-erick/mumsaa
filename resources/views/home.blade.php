@extends('layouts.app')
@push('scripts')
    <script src="{{ asset('chart.js/chart.js') }}"></script>
@endpush
@section('content')
    <main class="h-screen mt-10 sm:container sm:mx-auto  bg-zinc-400 sm:mt-10">
        <div class="w-full">

            @if (session('status'))
                <div class="px-3 py-4 mb-4 text-sm text-green-700 bg-green-100 border border-t-8 border-green-600 rounded "
                    role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm ">
                <div class="min-h-screen px-1 pt-20 pb-5 color ">
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 lg:m-2 md:gap-x-10 xl-grid-cols-4 gap-y-10 gap-x-6 ">

                        <div
                            class="container transition duration-300 rounded-lg shadow-lg max-w-screen-2xl hover:shadow-2xl">
                            <canvas id="myChart" width="550" height="250"></canvas>
                        </div>


                    </div>

                    <div
                        class="container mb-5 transition duration-300 rounded-lg shadow-lg max-w-screen-2xl hover:shadow-2xl">
                        <div class="p-6">
                            <h1
                                class="text-xl font-bold text-center text-gray-900 transition duration-200 md:text-1xl hover:text-indigo-600 ">
                                Financial Expenditure</h1>
                            <p class="my-2 text-gray-700 hover-text-900 font-bold ">Total Billed :{{ $totalBilled}}/=</p>
                            <p class="my-2 text-gray-700 hover-text-900  font-bold">Total Paid :{{ $totalPaid }}/=</span></p>
                            <p class="my-2 text-gray-700 hover-text-900  font-bold">Balance :{{ $balance }}/=
                            </p>

                        </div>

                    </div>
                    <div class="container transition duration-300 rounded-lg shadow-lg max-w-screen-2xl hover:shadow-2xl">
                        <div class="p-6">
                            <h1
                                class="text-xl font-bold text-gray-900 transition duration-200 md:text-1xl hover:text-indigo-600 ">
                                Admin Notification Panel .</h1>
                            <p class="my-2 text-gray-700 hover-text-900 "> All MUMSA official members meeting will be held
                                on 3rd August 2022.Purpose to Attend</p>

                        </div>
                    </div>

                    {{-- Alternate this images --}}
                    {{-- <div
                        class="py-6 px-2 container mb-5 transition duration-300 rounded-lg shadow-lg max-w-screen-2xl hover:shadow-2xl">
                        <img src="{{ URL('/images/islamQuotes.jpg') }}" alt="" class="w-full rounded-t-lg">
                    </div> --}}


                </div>
                {{-- <div class="  fixed bottom-0 bg-blue-200 pt-10 container pb-4    mx-auto flex  justify-start text-white  ">
                    <a class="px-5  no-underline font-semibold hyper-style hover:underline active:text-orange-200"
                        href="{{ route('home') }} ">HOME</a>

                    <i class="fa-primary-red fa-home" style="color:red"></i>

                    <a class="no-underline hyper-style hover:underline active:text-orange-200 "
                        href="{{ route('list') }} ">LIST</a>

                </div> --}}
        </div>


        </section>
        </div>
        <script type="text/javascript">
            var labels = {{ Js::from($labels) }};
            var data = {{ Js::from($data) }};

            let myChart = document.getElementById('myChart').getContext('2d');
            let massPopChart = new Chart(myChart, {
                type: 'bar', //horizontalBar bar line ,doughnut
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Population of year',
                        data: data,

                        backgroundColor: [
                            'rgba(255,99,132,0.6)',
                            'rgba(54,162,235,0.6)',
                            'rgba(255,206,86,0.6)',
                            'rgba(75,192,192,0.6)',
                            'rgba(153,102,255,0.6)',
                            'rgba(255,159,64,0.6)',
                            'rgba(255,99,132,0.6)'
                        ],
                        borderWidth: 1,
                        borderColor: '#777',

                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        yAxes: [{
                            gridLines: {
                                // drawBorder:false
                                display: false

                            }
                        }],
                        xAxes: [{
                            gridLines: {
                                // drawBorder:false
                                display: false

                            }
                        }]


                    },
                    plugins: {
                        title: {
                            display: true,
                            text: '2022 Payment Expenditure statistics',
                            fontSize: 25

                        },
                        legend: {
                            display: false,
                            position: 'right',
                            labels: {
                                fontColor: '#000'

                            }
                        },

                        layout: {
                            padding: {
                                left: 50,
                                right: 0,
                                bottom: 0,
                                top: 0
                            }
                        },
                        tooltips: {
                            enabled: false
                        }
                    }
                }
            });
        </script>
    </main>
@endsection

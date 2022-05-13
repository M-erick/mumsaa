@extends('layouts.app')
@section('content')
    <!-- component -->
    <div class="bg-gray-50 min-h-screen pb-3   m-auto mt-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 md:m-2 md:gap-x-10 xl-grid-cols-4 gap-y-3 gap-x-6 ">

            <div class="container bg-white  w-full border-b  border-gray-300 ">
                {{-- bid success message --}}
                @if (session()->has('message'))
                    <div class="w-full m-auto mt-10 p-auto">
                        <p class="w-full mb-4 text-gray-50 bg-gray-500 rounded-2xl py-4">
                            {{ session()->get('message') }}

                        </p>

                    </div>
                @endif


                {{-- display error messages if any --}}
                @if ($errors->any())
                    <div class="w-4/5 self-center m-auto p-6">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="w-full mb-4 text-gray-50 bg-red-700 rounded-2xl  p-4">

                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>

                    </div>
                @endif

                <div class="p-6">


                    <x-payment-form />
                </div>

            </div>
            {{-- card two --}}

            <div class="container   bg-white w-full   border-t border-b border-gray-300 ">

                <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                       Registered Members</h1>

                </div>
            </div>


            <div class="container w-full   bg-white border-t border-b border-gray-300 ">




                <div>

                    <!-- component -->
                    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">

                        <div
                            class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                            <table class="min-w-full">
                                {{-- display data that belongs to other user --}}
                                <thead>
                                    <tr>
                                        <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                        ADMIN_NAME</th>
                                        <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                        NAME</th>
                                        <th
                                        class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                        ADMISSION</th>
                                        <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">
                                            AMOUNT</th>
                                        {{-- <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                            USERNAME</th> --}}
                                        {{-- <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                            Email</th> --}}
                                        {{-- <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                            NAME</th>
                                            <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                            NAME</th> --}}

                                        <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                            Status</th>
                                        <th
                                            class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                                            Date</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($usersData as $data)
                                        {{-- @if ($data->firstName == auth()->user()->firstName) --}}
                                            <tr>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <div class="text-sm leading-5 text-gray-800">
                                                                {{ $data->adminName }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <div class="text-sm leading-5 text-gray-800">
                                                                {{ $data->name }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <div class="text-sm leading-5 text-gray-800">
                                                                {{ $data->admission}}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <div class="text-sm leading-5 text-gray-800">
                                                                {{ $data->amount }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                    <div class="text-sm leading-5 text-blue-900">{{ $data->name }}</div>
                                                </td> --}}
                                                {{-- <td
                                                    class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                                    {{ Auth::user()->phone_number }}</td> --}}
                                                <td
                                                    class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                                    <span
                                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                        <span aria-hidden
                                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                        <span class="relative text-xs">active</span>
                                                    </span>
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">
                                                    {{ $data->created_at->format('d/m/Y') }}</td>
                                                <td
                                                    class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                                    <button
                                                        class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Notify
                                                        Seller</button>
                                                </td>
                                            </tr>
                                            {{-- @endif --}}
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                {{-- <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                        DIsplay currently plus history  bought shares in tabular form .Maximum inputs to be 10.Table should auto itself .</h1>
                    <p class="text-gray-700 my-2 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium quis.</p>
                    <p class="text-gray-700 my-2 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
                        deserunt, culpa mollitia quisquam minus
                        vel architecto pariatur maiores eligendi aperiam nobis numquam consequuntur sint modi, eaque
                        adipisci animi distinctio iusto.</p>
                </div> --}}
            </div>








        </div>
    </div>

@endsection

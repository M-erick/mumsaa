<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->


    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->

<!-- component -->
<div class="container">
    <div class="mt-5">
        <div class="w-1/2 mx-auto bg-white rounded-md">
            <!-- first -->
            <div class="flex flex-col justify-center items-center">
                <h6 class="text-black font-medium my-4">Register User</h6>
                {{-- undefined action --}}
                <form action="{{ route('list') }}" method="POST">
                    @csrf
                    <div class="  flex  justify-between items-center  w-full  py-5  border-b-2 border-gray-200 ">

                        {{-- <p class="text-gray-400 ml-4">Days</p> --}}
                        <label for="admission" class="text-gray-400 ml-4  " >Admission:</label>
                        {{-- <p class="text-black mr-4">$2,650</p> --}}
                        <input type="text" class="text-black mr-4 outline-none" name="admission" placeholder="CCS/00123/019" autocomplete="off">

                    </div>
                    <div class="  flex  justify-between items-center  w-full  py-5  border-b-2 border-gray-200 ">

                        {{-- <p class="text-gray-400 ml-4">Days</p> --}}
                        <label for="name" class="text-gray-400 ml-4  " >Name:</label>
                        {{-- <p class="text-black mr-4">$2,650</p> --}}
                        <input type="text" class="text-black mr-4 outline-none" name="name" placeholder="jame" autocomplete="off">

                    </div>
                    

                    <div class="   flex justify-between items-center   w-full py-5 border-b-2 border-gray-200 ">



                        <label for="amount" class="text-gray-400 ml-4 mr-2 ">Amount:</label>
                        <input type="text" class="text-black mr-4 outline-none" name="amount" autocomplete="off" placeholder="1200">

                    </div>


                    <div class="  flex flex-col  justify-between items-center  px-3 py-5 w-full    ">


                        <button  type = "submit" class="w-full bg-indigo-600 text-white px-2 py-2 rounded-md">
                            Submit
                        </button>

                    </div>

                    {{-- <div class="px-3 py-5 border-b-2 border-gray-200">
                        <button class=" min-w-full bg-gray-400 font-semibold  text-white px-2  py-2 rounded-md  ">
                           Abort
                        </button>

                    </div> --}}
                </form>
            </div>
            <!-- end -->
        </div>
    </div>
</div>

</div>

<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //only authenticated users can view this page
    public function __constructor() {
        $this->middleware('auth');
    }
    public function index() {
        $payment = Payment::select('adminName','admission','amount','name','created_at')
        // ->where('adminName','=',Auth::user()->firstName)
        ->get();

        return view('paymentPanel')
        ->with('usersData',$payment);


    }
    /**
     * Store a newly created resource in storage
     *
      * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentRequest $request) {

        Payment::create([

            'admission' =>$request->input('admission'),
            'amount'=>$request->input('amount'),
            'name'=>$request->input('name'),
            'adminName'=>auth()->user()->firstName,


            // Display Admin first name for each user he registers  .
        ]);
        return redirect('/userList')
        ->with('message','successful User Registration  ');
    }
}

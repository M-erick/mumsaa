<?php

namespace App\Http\Controllers;

use App\Models\ChartData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chartData = ChartData::select('Year','amount','month')
        ->pluck('amount','month');

       $labels = $chartData->keys('month');
       $data =$chartData->values();


        return view('home',compact('labels','data'));

    }
}

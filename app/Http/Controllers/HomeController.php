<?php

namespace App\Http\Controllers;

use App\Models\ChartData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $totalPaid = DB::table('chart_data')->sum('amount');

       $labels = $chartData->keys('month');
       $data =$chartData->values();

       $totalBilled = 115000;

       $balance = number_format($totalBilled - $totalPaid);



        return view('home',compact('labels','data'))->with([
            'totalPaid'=>number_format($totalPaid),
            'totalBilled' =>number_format($totalBilled),
            'balance' =>$balance

        ]);

    }
}

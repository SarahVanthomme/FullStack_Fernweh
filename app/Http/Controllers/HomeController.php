<?php

namespace App\Http\Controllers;

use App\Currency;
use App\PaymentPlatform;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //dit was de index functie voor de pp payments
    public function index()
    {
        //dit is de link naar de backend dus hier aanpassen om terug naar frontend te gaan
        return view('admin.index');
    }

/*    public function payment()
    {
        $currencies = Currency::all();
        $paymentPlatforms = PaymentPlatform::all();
        return view('home')->with(['currencies'=>$currencies, 'paymentPlatforms'=>$paymentPlatforms]);
    }*/
}

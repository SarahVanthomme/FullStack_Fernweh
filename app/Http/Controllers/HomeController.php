<?php

namespace App\Http\Controllers;

use App\Continent;
use App\User;
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

    public function index()
    {
        $users = User::all();
        $continents = Continent::all();
        //dit is de link naar de backend dus hier aanpassen om terug naar frontend te gaan
        return view('admin.index',compact('users', 'continents'));
    }

}

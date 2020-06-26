<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class AdminAddressesController extends Controller
{
    //

    public function index(){

        $addresses =  Address::all();
        return view('admin.addresses.index', compact('addresses'));
    }


    public function destroy(){

    }
}

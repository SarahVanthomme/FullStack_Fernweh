<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class AdminAddressesController extends Controller
{
    //

    public function index(){

        $addresses =  Address::all();
        //cities
        return view('admin.addresses.index', compact('addresses'));
    }

    public function create()
    {
        return view('admin.addresses.create');

    }

    public function store(Request $request)
    {
        Address::create($request->all());
        return redirect('/admin/addresses');

    }

    public function edit(Address $address)
    {
        return view ('admin.addresses.edit', compact('address'));

    }

    public function update(Request $request, Address $address)
    {
        $address->update($request->all());
        return redirect('/admin/addresses');
    }


    public function destroy(Address $address)
    {
        $address->delete();
        return redirect('/admin/addresses');
    }
}

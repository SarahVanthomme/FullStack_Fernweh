<?php

namespace App\Http\Controllers;

use App\Continent;
use App\Order;
use App\Translation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe;

class StripePaymentController extends Controller
{
    //

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        $continents = Continent::all();
        $translation = Translation::all()->first();

        return view('front.stripe', compact('continents', 'translation'));
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey('sk_test_51GwZBtG0dm6lqSBD177SisOW7umRjfhEKEsK9lAMGw1s9KRp0HC8JBNzQEpi3ztU4QPzBURSQIFmaXuS5NQAeTSp00zWRT2ASV');
        Stripe\Charge::create ([
            "amount" => (Session::get('cart')->totalPrice) * 100 +500,
            "currency" => "eur",
            "source" => $request->stripeToken,
            "description" => "Betaling Fernweh."
        ]);
       // dd($request);
        $token = $request->stripeToken;
        $userId = Auth::id();

        Order::create([
            'user_id' => $userId,
            'amount' => Session::get('cart')->totalPrice,
            'token' => $token
        ]);

       Session::forget('cart');

        return view('front.confirmation');
    }

    public function store(){

    }

    public function index(){
        $orders = Order::withTrashed()->paginate(100);
        return view('admin.orders.index', compact('orders'));
    }

    public function edit($id){
        $order = Order::findOrFail($id);
        return view ('admin.orders.edit',compact('order'));
    }

    public function update(Request $request, $id){
        $order = Order::findOrFail($id);


        $input = $request->all();

        $order->update($input);
        return redirect('/admin/orders');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        Session::flash('deleted_order', 'The order is deleted');
        return redirect('admin/orders');
    }

    public function orderRestore($id){
        Order::onlyTrashed()->where('id', $id)->restore();
        Session::flash('restored_order', 'The order is restored');
        return redirect('admin/orders');
    }

}

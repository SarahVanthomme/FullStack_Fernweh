<?php
namespace App\Http\Controllers;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function create(){
        return view('front.contact');
    }
    public function store(Request $request){
        $data = $request->all();
        Mail::to(request('email'))->send(new Contact($data));
        return redirect('/contact');
    }

    public function sent(){
        return view('front.message-sent');
    }
}

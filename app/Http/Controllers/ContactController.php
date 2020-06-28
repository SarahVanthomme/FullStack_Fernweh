<?php
namespace App\Http\Controllers;
use App\Continent;
use App\Mail\Contact;
use App\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    public function create(){
        $continents = Continent::all();
        $translation = Translation::all()->first();

        return view('front.contact', compact('continents', 'translation'));
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

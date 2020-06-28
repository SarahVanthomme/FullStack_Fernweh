<?php

namespace App\Http\Controllers;

use App\Translation;
use Illuminate\Http\Request;

class TranslationsController extends Controller
{
    //
    public function index()
    {
        //
        $translations = Translation::all();
        return view('admin.translations.index',compact('translations'));
    }


    public function create(){
        return view('admin.translations.create');
    }

    public function store(Request $request)
    {
        //
        $input = $request->all();
        Translation::create($input);
        return redirect('/admin/translations');
    }
}

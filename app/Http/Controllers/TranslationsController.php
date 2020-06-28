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

    public function edit($id){
        $translation = Translation::findOrFail($id);
        return view ('admin.translations.edit',compact('translation'));
    }

    public function update(Request $request, $id)
    {
        //
        $translation = Translation::findOrFail($id);
        $input = $request->all();
        $translation->update($input);
        return redirect('admin/translations');
    }


    public function store(Request $request)
    {
        //
        $input = $request->all();
        Translation::create($input);
        return redirect('/admin/translations');
    }

    public function destroy($id)
    {
        //
        $translation = Translation::findOrFail($id);
        $translation->delete();
        return redirect('/admin/translations');
    }
}

<?php

namespace App\Http\Controllers;

use App\Continent;
use App\ContinentPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminContinentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        //
        $continents = Continent::with(['photo'])->get();
        return view('admin.continents.index',compact('continents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.continents.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $input = $request->all();

        if($file=$request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/continents', $name);
            $photo = ContinentPhoto::create(['file'=>$name]);
            $input['photo_id']=$photo->id;
        }
        Continent::create($input);
        return redirect('/admin/continents');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $continent = Continent::findOrFail($id);
        return view ('admin.continents.edit',compact('continent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $continent = Continent::findOrFail($id);
        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/continents', $name);
            File::delete('images/continents/'.$continent->photo);
            // File::delete('images/banners/'.$banner->photo->file);
            $photo = ContinentPhoto::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $continent->update($input);
        return redirect('admin/continents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

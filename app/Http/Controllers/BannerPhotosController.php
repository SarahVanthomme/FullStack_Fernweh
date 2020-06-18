<?php

namespace App\Http\Controllers;

use App\BannerPhoto;
use Illuminate\Http\Request;

class BannerPhotosController extends Controller
{
    //
    public function index()
    {
        //
        $photos = BannerPhoto::all();
       // return view('admin.banners.index', compact('photos'));
    }

    public function create()
    {
        //
        //return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        //

        $input = $request->all();
        if($file=$request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/banners', $name);
            $photo = BannerPhoto::create(['file'=>$name]);
            $input['photo_id']=$photo->id;
        }
        BannerPhoto::create($input);
        //return redirect('/admin/banners');
    }

    public function destroy($id)
    {
        //
    }

}

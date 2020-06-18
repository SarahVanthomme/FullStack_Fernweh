<?php

namespace App\Http\Controllers;

use App\IndexBannerPhoto;
use Illuminate\Http\Request;

class IndexBannerPhotosController extends Controller
{
    //

    public function index()
    {
        //
        $photos = IndexBannerPhoto::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //

        $input = $request->all();
        if($file=$request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/index', $name);
            $photo = IndexBannerPhoto::create(['file'=>$name]);
            $input['photo_id']=$photo->id;
        }
        IndexBannerPhoto::create($input);
    }

    public function destroy($id)
    {
        //
    }

}

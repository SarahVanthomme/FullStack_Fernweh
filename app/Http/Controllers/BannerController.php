<?php

namespace App\Http\Controllers;

use App\Banner;
use App\BannerPhoto;
use App\Continent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    //

    public function index()
    {
        //
        $continents = Continent::all();
        $banners = Banner::with(['continent', 'photo'])->get(); //moet photo hierbij??
        return view('admin.banners.index', compact('banners', 'continents'));
    }

    public function create()
    {
        //

        $continents = Continent::select('name', 'id')->get();
        return view('admin.banners.create', compact('continents'));

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
        Banner::create($input);
        return redirect('/admin/banners');
    }

    public function edit($id)
    {
        //
        $banner = Banner::findOrFail($id);
        $continents = Continent::select('name', 'id')->get();
        return view('admin.banners.edit', compact('banner','continents'));
    }


    public function update(Request $request, $id)
    {
        //
        $banner = Banner::findOrFail($id);

        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/banners', $name);
            File::delete('images/banners/'.$banner->photo);
           // File::delete('images/banners/'.$banner->photo->file);
            $photo = BannerPhoto::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $banner->update($input);
        return redirect('/admin/banners');

    }

    public function destroy($id)
    {
        //
        $banner = Banner::findOrFail($id);
        $banner->delete();
        return redirect('admin/banners');
    }

}



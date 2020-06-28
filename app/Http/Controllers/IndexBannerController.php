<?php

namespace App\Http\Controllers;

use App\IndexBanner;
use App\IndexBannerPhoto;
use Cassandra\Index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\DocBlock\Tags\Covers;

class IndexBannerController extends Controller
{
    //
    public function index(){
        $covers = IndexBanner::with(['photo'])->get(); //moet photo hierbij??
        return view('admin.index-banners.index', compact('covers'));
    }

    public function create()
    {
        //

        return view('admin.index-banners.create');
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
        IndexBanner::create($input);
        return redirect('/admin/index-banners');
    }

    public function edit($id)
    {
        //
        $cover = IndexBanner::findOrFail($id);
        return view('admin.index-banners.edit', compact('cover'));
    }


    public function update(Request $request, $id)
    {
        //
        $cover = IndexBanner::findOrFail($id);

        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/index', $name);
            File::delete('images/index/'.$cover->photo);
            // File::delete('images/banners/'.$banner->photo->file);
            $photo = IndexBannerPhoto::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $cover->update($input);
        return redirect('/admin/index-banners');

    }

    public function destroy($id)
    {
        //
        $cover = IndexBanner::findOrFail($id);
        $cover->delete();
        return redirect('admin/index-banners');
    }
}

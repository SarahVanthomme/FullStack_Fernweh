<?php

namespace App\Http\Controllers;

use App\Category;
use App\City;
use App\Continent;
use App\Country;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter\AlignFormatter;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $products = Product::with(['category', 'continent', 'photo', 'country', 'city'])->get();
        return view('admin.products.index', compact('products', 'continents', 'countries', 'cities', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $categories = Category::select('name', 'id')->get();
        $continents = Continent::select('name', 'id')->get();
        $countries = Country::select('name', 'id')->get();
        $cities = City::select('name', 'id')->get();
        return view('admin.products.create', compact('categories', 'continents', 'countries', 'cities'));

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

       /* if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //neemt image extension
            $filename = time() . '.' . $extension;
            $file->move('images/products/', $filename);
            $input->image = $filename;
        }else{
            return $request;
            $input->image = '';
        }
        $input->save();
        return redirect('/admin/products');*/

        if($file=$request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/products', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id']=$photo->id;
        }
        product::create($input);
        return redirect('/admin/products');
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
        $product = Product::findOrFail($id);
        $categories = Category::select('name', 'id')->get();
        $continents = Continent::select('name', 'id')->get();
        $countries = Country::select('name', 'id')->get();
        $cities = City::select('name', 'id')->get();
        return view('admin.products.edit', compact('product', 'categories', 'continents', 'countries', 'cities'));
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
        $product = Product::findOrFail($id);


        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images/products', $name);
            //$file->unlink('images/products',$oldImage);
            File::delete('images/products/'.$product->photo->file);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $product->update($input);
        return redirect('/admin/products');
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
        $product = Product::findOrFail($id);
        $product->delete();
        //flash is weergave message, deleted user is de message naam en the user deleted is wat er getoond wordt aan de gebruiker.
        return redirect('admin/products');



    }

    public function productsPerContinent($id){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $products = Product::with(['category', 'continent', 'country', 'city', 'photo'])->where('continent_id', '=', $id)->get();
        return view('admin.products.index', compact('products', 'continents', 'countries', 'cities', 'categories'));
    }
    public function productsPerCountry($id){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $products = Product::with(['category', 'continent', 'country', 'city', 'photo'])->where('country_id', '=', $id)->get();
        return view('admin.products.index', compact('products', 'continents', 'countries', 'cities', 'categories'));
    }

    public function productsPerCity($id){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $products = Product::with(['category', 'continent', 'country', 'city', 'photo'])->where('city_id', '=', $id)->get();
        return view('admin.products.index', compact('products', 'continents', 'countries', 'cities', 'categories'));
    }

    public function productsPerCategory($id){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $products = Product::with(['category', 'continent', 'country', 'city', 'photo'])->where('category_id', '=', $id)->get();
        return view('admin.products.index', compact('products', 'continents', 'countries', 'cities', 'categories'));
    }

}

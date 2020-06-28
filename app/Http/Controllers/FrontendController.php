<?php

namespace App\Http\Controllers;

use App\Address;
use App\Banner;
use App\Cart;
use App\Category;
use App\City;
use App\Continent;
use App\Country;
use App\IndexBanner;
use App\Post;
use App\PostComment;
use App\Product;
use App\Translation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class FrontendController extends Controller
{
    //


    public function index(){
        $continents = Continent::with(['photo'])->get();
        $categories = Category::with(['photo'])->get();
        $products = Product::with(['photo'])->get();
        $covers = IndexBanner::all();
        $translation = Translation::all()->first();
        return view('front.home',compact('covers', 'continents', 'categories', 'products', 'translation'));
    }

    public function shop(){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $banners = Banner::with(['continent','photo'])->get();
        $products = Product::with(['continent', 'country', 'city', 'category', 'photo'])->get();
        $translation = Translation::all()->first();
        return view('front.shop-product-overview', compact('products', 'continents', 'countries', 'cities', 'categories', 'banners', 'translation'));
    }

//    FILTERS SHOP

    public function productsPerContinent($id){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $banners = Banner::with(['continent','photo'])->get();
        $products = Product::with(['continent', 'country', 'city', 'category', 'photo'])->where('continent_id', '=', $id)->get();
        return view('front.shop-product-overview', compact('products', 'continents', 'countries', 'cities', 'categories', 'banners'));
    }

    public function productsPerCountry($id){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $banners = Banner::with(['continent','photo'])->get();
        $products = Product::with(['continent', 'country', 'city', 'category', 'photo'])->where('country_id', '=', $id)->get();
        return view('front.shop-product-overview', compact('products', 'continents', 'countries', 'cities', 'categories', 'banners'));
    }

    public function productsPerCity($id){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $banners = Banner::with(['continent','photo'])->get();
        $products = Product::with(['continent', 'country', 'city', 'category',  'photo'])->where('city_id', '=', $id)->get();
        return view('front.shop-product-overview', compact('products', 'continents', 'countries', 'cities', 'categories', 'banners'));
    }

    public function productsPerCategory($id){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $banners = Banner::with(['continent','photo'])->get();
        $products = Product::with(['continent', 'country', 'city', 'category', 'photo'])->where('city_id', '=', $id)->get();
        return view('front.shop-product-overview', compact('products', 'continents', 'countries', 'cities', 'categories', 'banners'));
    }

    //SHOPPING CART FUNCTIONS

    public function addToCart($id){
        $product = Product::with(['category', 'continent', 'country', 'city', 'photo'])->where('id','=', $id)->first();

        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        Session::put('cart', $cart);
        Session::flash('log_in', 'Please sign in to continue shopping');
      //  return redirect('/shop');
        return Redirect::back();
    }

    public function cart(){
        $continents = Continent::all();
        $translation = Translation::all()->first();


        if(!Session::has('cart')){
            return Redirect::back();
        }else{
            $currentCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($currentCart);
            $cart = $cart->products;
            return view('front.checkout',compact('cart', 'continents', 'translation'));
        }
    }

    public function updateQuantity(Request $request){
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->updateQuantity($request->id, $request->quantity);
        //(Session('cart'));
        Session::put('cart', $cart);

        return redirect('/checkout');
    }

    public function removeItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        //(Session('cart'));
        Session::put('cart', $cart);

        return redirect('/checkout');
    }

    //

    public function product_detail($id){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $product = Product::with(['category', 'continent', 'country', 'city', 'photo'])->where('id','=', $id)->first();
        $postcomments = PostComment::all();
        $translation = Translation::all()->first();
        return view('front.product_detail', compact('postcomments', 'product', 'continents', 'countries', 'cities', 'categories', 'translation'));
    }

    public function account(){
        $user = User::all();
        $continents = Continent::all();
        return view('front.account', compact('user', 'continents'));
    }

    public function update(Request $request, User $user){
        $user = Auth::user();

        if (trim($request->password) == '') {
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = Hash::make($request['password']);

    }

        $input['street'] = $request['street'];

        $user->update($input);

        //Session::flash('updated_user', 'User Updated!');
        return redirect('account');
    }

    public function admin(){
        return view('admin.index');
    }

    public function footer(){
        $translation = Translation::all()->first();
        return view('partials.footer', compact('translation'));

    }

}

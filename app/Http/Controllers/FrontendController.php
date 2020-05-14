<?php

namespace App\Http\Controllers;

use App\Category;
use App\City;
use App\Continent;
use App\Country;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $products = Product::with(['continent', 'country', 'city', 'category', 'photo'])->get();
        return view('index', compact('products', 'continents', 'countries', 'cities', 'categories'));
    }

    public function productsPerContinent($id){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $products = Product::with(['continent', 'country', 'city', 'category', 'photo'])->where('continent_id', '=', $id)->get();
        return view('index', compact('products', 'continents', 'countries', 'cities', 'categories'));
    }

    public function productsPerCountry($id){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $products = Product::with(['continent', 'country', 'city', 'category', 'photo'])->where('country_id', '=', $id)->get();
        return view('index', compact('products', 'continents', 'countries', 'cities', 'categories'));
    }

    public function productsPerCity($id){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $products = Product::with(['continent', 'country', 'city', 'category',  'photo'])->where('city_id', '=', $id)->get();
        return view('index', compact('products', 'continents', 'countries', 'cities', 'categories'));
    }

    public function productsPerCategory($id){
        $continents = Continent::all();
        $countries = Country::all();
        $cities = City::all();
        $categories = Category::all();
        $products = Product::with(['continent', 'country', 'city', 'category', 'photo'])->where('city_id', '=', $id)->get();
        return view('index', compact('products', 'continents', 'countries', 'cities', 'categories'));
    }

}

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/admin', 'HomeController@index')->name('admin');

Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin',function() {
        return view('admin.index');
    })->name('admin');
});

Route::resource('admin/users', 'AdminUsersController');
//Route::get('admin/users/restore/{user}','AdminUsersController@userRestore')->name('admin.userrestore');
Route::resource('admin/categories','AdminCategoriesController');
Route::resource('admin/cities','AdminCitiesController');
Route::resource('admin/countries','AdminCountriesController');
Route::resource('admin/continents','AdminContinentsController');
Route::resource('admin/posts','AdminPostsController');
//Route::resource('admin/comments','PostCommentsController');
//Route::resource('admin/commentreplies','CommentRepliesController');
Route::resource('admin/products','AdminProductsController', ['index'=>'admin.products.index']);
Route::get('admin/products/continent/{id}','AdminProductsController@productsPerContinent')->name('admin.productsPerContinent');
Route::get('admin/products/country/{id}','AdminProductsController@productsPerCountry')->name('admin.productsPerCountry');
Route::resource('admin/discounts','AdminDiscountsController');
Route::resource('admin/photos','AdminPhotosController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

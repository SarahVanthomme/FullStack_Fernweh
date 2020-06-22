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


Auth::routes();

/*home van back end*/
Route::get('/admin', 'HomeController@index')->name('admin');

/*front end*/
Route::get('/home', 'FrontendController@index')->name('home');
Route::get('/shop', 'FrontendController@shop')->name('shop');
Route::get('/products/continent/{id}', 'FrontendController@productsPerContinent')->name('productsPerContinent');
Route::get('/products/country/{id}', 'FrontendController@productsPerCountry')->name('productsPerCountry');
Route::get('/products/city/{id}', 'FrontendController@productsPerCity')->name('productsPerCity');
Route::get('/products/category/{id}', 'FrontendController@productsPerCategory')->name('productsPerCategory');
Route::get('/products/addToCart/{id}','FrontendController@addToCart')->name('addToCart');
Route::get('/checkout', 'FrontendController@cart')->name('checkout');
Route::post('/checkout','FrontendController@updateQuantity')->name('quantity');
Route::get('/product_detail/{id}', 'FrontendController@product_detail')->name('product_detail');
Route::get('/account','FrontendController@account')->name('account');
Route::post('/account','FrontendController@updateAccount')->name('update');
//Route::get('test','FrontendController@test')->name('test');

//Routes payments - front

Route::get('payment', 'StripePaymentController@stripe');
Route::post('payment', 'StripePaymentController@stripePost')->name('stripe.post');
Route::get('/confirmation', 'StripePaymentController@confirmation')->name('confirmation');


//Route::get('/payment', 'HomeController@payment')->name('payment');

//Route::post('/payments/pay', 'PaymentController@pay')->name('pay');
//Route::get('/payments/approval', 'PaymentController@approval')->name('approval');
//Route::get('/payments/cancelled', 'PaymentController@cancelled')->name('cancelled');


/*Routes mailables*/
Route::get('/post/{slug}', 'AdminPostsController@post')->name('home.post');
Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');




/*backend*/
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
Route::resource('admin/comments', 'PostCommentController');
Route::resource('admin/banners', 'BannerController');
Route::resource('admin/index-banners', 'IndexBannerController');


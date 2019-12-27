<?php

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
/*User interface route*/
Route::group(['namespace' => 'User'],function(){
  Route::get('user/home','HomepageController@index')->name('home');
  Route::get('user/products/{product}','ProductController@products')->name('products');
  Route::get('user/catalog','CatalogController@index')->name('catalog');
  Route::get('user/category1','Portfolio1Controller@index')->name('category1');
  Route::get('user/category2','Portfolio2Controller@index')->name('category2');
  Route::get('user/category3','Portfolio3Controller@index')->name('category3');
  Route::get('user/category4','Portfolio4Controller@index')->name('category4');
  Route::get('user/category5','Portfolio5Controller@index')->name('category5');
  Route::get('user/category6','Portfolio6Controller@index')->name('category6');

});



/*
Admin panel routes
*/
Route::group(['namespace' => 'Admin'],function(){
  Route::get('admin/home','HomeController@home');
  Route::resource('admin/gallery','GalleryController');
  Route::resource('admin/product','ProductController');
  Route::resource('admin/tag','TagController');
  Route::resource('admin/portfolio','PortfolioController');
  Route::resource('admin/catalog','CatalogController');
  Route::resource('admin/category','CategoryController');
});

/*
login and registration
*/
//Route::get('login', 'AuthController@index');
// Route::post('post-login', 'AuthController@postLogin');
 //Route::get('registration', 'AuthController@registration');
// Route::post('post-registration', 'AuthController@postRegistration');
// Route::get('dashboard', 'AuthController@dashboard');
// Route::get('logout', 'AuthController@logout');

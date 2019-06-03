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

Route::get('/','Common\DashboardController@index');

Route::get('dashboard','Common\DashboardController@index');
Route::get('test', function () {
    return view('layout.test');
});



Route::resource('orders','Checkout\OrderController');
Route::resource('category','Catalog\CategoryController');
Route::resource('product','Catalog\ProductController');
Route::post('product-variation','Catalog\ProductController@VariationOption');
Route::get('file-manager','Common\FileManager@index');
Route::post('file-manager','Common\FileManager@upload');
Route::delete('file-manager-remove','Common\FileManager@delete');
Route::post('file-manager-folder','Common\FileManager@folder');









/* public function index(){}
    public function create(){}
    public function store(Request $request){}
    public function show(){}
    public function edit($id){}
    public function update(Request $request){}
    public function destroy(Request $request){}*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

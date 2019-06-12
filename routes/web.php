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

Route::get('/','Common\DashboardController@index')->middleware('auth');;
Route::resource('orders','Checkout\OrderController')->middleware('auth');;
Route::resource('category','Catalog\CategoryController')->middleware('auth');
Route::resource('product','Catalog\ProductController')->middleware('auth');
Route::post('product-variation','Catalog\ProductController@VariationOption')->middleware('auth');
Route::get('file-manager','Common\FileManager@index')->middleware('auth');
Route::post('file-manager','Common\FileManager@upload')->middleware('auth');
Route::delete('file-manager-remove','Common\FileManager@delete')->middleware('auth');
Route::post('file-manager-folder','Common\FileManager@folder')->middleware('auth');









/* public function index(){}
    public function create(){}
    public function store(Request $request){}
    public function show(){}
    public function edit($id){}
    public function update(Request $request){}
    public function destroy(Request $request){}*/

Auth::routes();

Route::get('reset', [
    'as' => 'password.reset',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
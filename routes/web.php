<?php

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
})->name('welcome');
Route::get('/forum', 'HomeController@forum_page')->name('forum');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
    //Manage Brand
    Route::get('/admin/manage_brands', 'BrandController@index')->name('brands.index');
    Route::get('/admin/manage_brands/add', 'BrandController@create')->name('brands.create');
    Route::post('/admin/manage_brands/store', 'BrandController@store')->name('brands.store');
    Route::post('/admin/manage_brands/delete/{id}', 'BrandController@destroy')->name('brands.delete');
    Route::get('/admin/manage_brands/edit/{id}', 'BrandController@edit')->name('brands.edit');
    Route::post('/admin/manage_brands/update/{id}', 'BrandController@update')->name('brands.update');
    //Manage Gadget
    Route::get('/admin/manage_gadgets', 'GadgetController@index')->name('gadgets.index');
    Route::get('/admin/manage_gadgets/add', 'GadgetController@create')->name('gadgets.create');
    Route::post('/admin/manage_gadgets/store', 'GadgetController@store')->name('gadgets.store');
    Route::post('/admin/manage_gadgets/delete/{id}', 'GadgetController@destroy')->name('gadgets.delete');
    Route::get('/admin/manage_gadgets/edit/{id}', 'GadgetController@edit')->name('gadgets.edit');
    Route::post('/admin/manage_gadgets/update/{id}', 'GadgetController@update')->name('gadgets.update');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

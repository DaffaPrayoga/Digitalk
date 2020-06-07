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
Route::get('/forum/brand/{name}', 'HomeController@brand_page')->name('brand_home');
Route::get('/forum/brand/{name}/{slug}', 'HomeController@gadget_page')->name('gadget_home');
Route::get('/thread/{thread_key}', 'HomeController@thread_detail_page')->name('thread_detail');
//create thread
Route::post('/create_thread', 'ThreadController@store')->name('create_thread');
//create account
Route::post('/register_account', 'UserController@register_account')->name('register_account');
//report thread
Route::post('/spam_report', 'UserController@register_account')->name('register_account');
//admin
Route::group(['middleware' => ['auth','admin']], function () {
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
Route::group(['middleware' => ['auth','super_admin']], function () {
    Route::get('/super_admin', 'AdminController@super_index')->name('super_admin');
    //Manage Admins
    Route::get('/super_admin/manage_admins', 'AdminController@index_manage')->name('admins.index');
    Route::get('/super_admin/manage_admins/add', 'AdminController@create')->name('admins.create');
    Route::post('/super_admin/manage_admins/store', 'AdminController@store')->name('admins.store');
    Route::post('/super_admin/manage_admins/delete/{id}', 'AdminController@destroy')->name('admins.delete');
    Route::get('/super_admin/manage_admins/edit/{id}', 'AdminController@edit')->name('admins.edit');
    Route::post('/super_admin/manage_admins/update/{id}', 'AdminController@update')->name('admins.update');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

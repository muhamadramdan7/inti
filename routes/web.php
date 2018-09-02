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
use Spatie\Permission\Models\Role;

Route::get('/', function () {
    return view('welcome');
    //$user = auth()->user();
  	//$role = Role::find(3);
  	//$user = auth()->user();

  //$role->givePermissionTo('add post','edit post','delete post','view post');
  	//auth()->user()->assignRole('superadmin');
  	/*if (auth()->user()->hasRole('superadmin')){
  		return 'oke';
  	}*/


  	//$role->givePermissionTo('add post','view post');

    //$role->givePermissionTo('edit post');
    //$role->revokePermissionTo('delete post');
    //$role->syncPermissions(['add post','edit post','delete post','view post']);
    //dd($user->can('view post'));
    //dd($role->hasAnyPermission(['view post']));
    //dd($user->hasPermissionTo('view post'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','adminController@index');
Route::get('admin/goods','itemController@index'); 
Route::get('/admin/checkout','checkoutController@index');
Route::get('/admin/checkin','checkinController@index');
Route::post('/item/add','itemController@store');
Route::post('/checkout/add','checkoutController@store');
Route::post('/checkin/add','checkinController@store');
Route::delete('item/{id}','itemController@destroy')->name('item-delete');
Route::resource('item','itemController');


Route::get('logout', 'Auth\LoginController@logout')->name('logout');
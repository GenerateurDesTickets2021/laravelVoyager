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
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/Ensaj', 'App\Http\Controllers\SiteController@index');

Route::get('/test', 'App\Http\Controllers\SiteController@affich');

Route::get('/Filieres', 'App\Http\Controllers\SiteController@afficFilieres');
Route::post('/Filieres', 'App\Http\Controllers\SiteController@storeFilieres');
Route::get('/Classes', 'App\Http\Controllers\SiteController@afficClasses');
Route::post('/Classes', 'App\Http\Controllers\SiteController@storeClasses');

Route::get('/Filieres/permanentDelete/{id}','App\Http\Controllers\SiteController@permanentDelete');

Route::get('/home', function () {
    return view('home');
});
Route::get('/test', function () {
    return view('ensaj.admin');
});
Route::get('/login', function () {
    return view('ensaj.login');
});
Route::get('/admin', function () {
    return view('admin');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

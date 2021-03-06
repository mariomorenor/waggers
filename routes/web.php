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
    return redirect()->route('home');
});

Auth::routes(['verify'=>true]);
Route::middleware(['auth','verified'])->group(function(){
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/register/verify/{code}', 'GuestController@verify');
    Route::get('find_players','WaggerController@list_wagger_users')->name('list_players');
    Route::get('list_waggers/{user}','WaggerController@list_waggers');
    Route::resource('users','UserController');

});

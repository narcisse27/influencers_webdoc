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

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    '\vendor\uniSharp\LaravelFilemanager\Lfm::routes()';
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'dashboard', 'middleware' => ['web', 'auth']], function()
{
    Route::get('/', 'DashboardController@renderDashboard')->name('dashboard');
    //Route::get('/conversations', 'ConversationController@index')->name('conversation');
    Route::get('/conversation/{slug}', 'ConversationController@show')->name('conversation_show');

});



Auth::routes();


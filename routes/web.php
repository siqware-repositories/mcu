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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/demo', function () {
    return view('filemanager');
});
Route::get('/', function () {
    return view('front.index');
});

Route::get('/back_end', function () {
    return view('backend.blank');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/back_end/setting', 'SettingController');
Route::get('/back_end/setting-rector', 'SettingController@rector_index')->name('backend.rector.index');
Route::put('/back_end/setting-rector-update/{id}', 'SettingController@rector_update')->name('backend.rector.update');
Route::get('/back_end/setting-history', 'SettingController@history_index')->name('backend.history.index');
Route::put('/back_end/setting-history-update/{id}', 'SettingController@history_update')->name('backend.history.update');
Route::get('/back_end/setting-founder', 'SettingController@founder_index')->name('backend.founder.index');
Route::put('/back_end/setting-founder-update/{id}', 'SettingController@founder_update')->name('backend.founder.update');
Route::get('/back_end/setting-corporation', 'SettingController@corporation_index')->name('backend.corporation.index');
/*media*/
Route::resource('/back_end/media', 'MediaController');
Route::get('/back_end/media-list', 'MediaController@list')->name('media.list');

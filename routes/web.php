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
Route::put('/back_end/setting-corporation-update/{id}', 'SettingController@corporation_update')->name('backend.corporation.update');
Route::get('/back_end/setting-commitment', 'SettingController@commitment_index')->name('backend.commitment.index');
Route::put('/back_end/setting-commitment-update/{id}', 'SettingController@commitment_update')->name('backend.commitment.update');
/*media*/
Route::resource('/back_end/media', 'MediaController');
Route::get('/back_end/media-list', 'MediaController@list')->name('media.list');
/*News backend*/
Route::get('/back_end/news','NewsController@index')->name('backend.news.index');
Route::post('/back_end/news-list','NewsController@list')->name('backend.news.list');
Route::get('/back_end/news/create','NewsController@create')->name('backend.news.create');
Route::post('/back_end/news','NewsController@store')->name('backend.news.store');
Route::get('/back_end/news/{id}/edit','NewsController@edit')->name('backend.news.edit');
Route::put('/back_end/news/{id}','NewsController@update')->name('backend.news.update');
Route::get('/back_end/news-remove/{id}','NewsController@remove')->name('backend.news.remove');
Route::get('/back_end/news/{id}','NewsController@is_publish')->name('backend.news.is_publish');
/*Event backend*/
Route::get('/back_end/event','EventController@index')->name('backend.event.index');
Route::post('/back_end/event-list','EventController@list')->name('backend.event.list');
Route::get('/back_end/event/create','EventController@create')->name('backend.event.create');
Route::post('/back_end/event','EventController@store')->name('backend.event.store');
Route::get('/back_end/event/{id}/edit','EventController@edit')->name('backend.event.edit');
Route::put('/back_end/event/{id}','EventController@update')->name('backend.event.update');
Route::get('/back_end/event-remove/{id}','EventController@remove')->name('backend.event.remove');
Route::get('/back_end/event/{id}','EventController@is_publish')->name('backend.event.is_publish');
/*Video Backend*/
Route::get('/back_end/video','VideoController@index')->name('backend.video.index');
Route::get('/back_end/video-list','VideoController@list')->name('backend.video.list');
Route::get('/back_end/video/create','VideoController@create')->name('backend.video.create');
Route::post('/back_end/video','VideoController@store')->name('backend.video.store');
Route::get('/back_end/video/{id}/edit','VideoController@edit')->name('backend.video.edit');
Route::put('/back_end/video/{id}','VideoController@update')->name('backend.video.update');
Route::get('/back_end/video-remove/{id}','VideoController@remove')->name('backend.video.remove');
Route::get('/back_end/video/{id}','VideoController@is_publish')->name('backend.video.is_publish');

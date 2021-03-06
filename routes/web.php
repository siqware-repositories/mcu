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
Route::get('/back_end', function () {
    return view('backend.blank');
});
Auth::routes();
/*Front*/
Route::get('/', 'FrontHomeController@index')->name('front.home');
Route::get('/rector-welcome', 'FrontHomeController@rector_show')->name('front.rector.show');
Route::get('/commitment', 'FrontHomeController@commitment_show')->name('front.commitment.show');
Route::get('/news', 'FrontNewsController@index')->name('front.news');
Route::get('/news/{id}', 'FrontNewsController@show')->name('front.news.show');
Route::get('/event', 'FrontEventController@index')->name('front.event');
Route::get('/video', 'FrontVideoController@index')->name('front.video');
Route::get('/gallery', 'FrontGalleryController@index')->name('front.gallery');
Route::get('/gallery/{id}', 'FrontGalleryController@show')->name('front.gallery.show');
Route::get('/founder', 'FrontFounderController@index')->name('front.founder');
Route::get('/about', 'FrontAboutController@index')->name('front.about');
Route::get('/contact', 'FrontContactController@index')->name('front.contact');
Route::get('/staff', 'FrontTeacherController@index')->name('front.staff');
Route::get('/academic', 'FrontAcademicController@index')->name('front.academic');
Route::post('/academic-add-major/{id}', 'FrontAcademicController@add_major')->name('front.academic.major.add');
Route::post('/academic-update-home/{id}', 'FrontAcademicController@update_home')->name('front.academic.update.home');
Route::post('/academic-detail-update-home/{id}', 'FrontAcademicController@update_home_detail')->name('front.academic.detail.update.home');
Route::post('/academic-detail-update-course/{id}', 'FrontAcademicController@update_course')->name('front.academic.detail.update.course');
Route::post('/academic-detail-update-schedule/{id}', 'FrontAcademicController@update_schedule')->name('front.academic.detail.update.schedule');
Route::post('/academic-detail-update-teacher/{id}', 'FrontAcademicController@update_teacher')->name('front.academic.detail.update.teacher');
Route::post('/academic-add-news/{id}', 'FrontAcademicController@store_news')->name('front.academic.store.news');
Route::get('/academic-remove-news/{id}', 'FrontAcademicController@news_remove')->name('front.academic.remove.news');
Route::get('/academic-edit-news/{id}', 'FrontAcademicController@news_edit')->name('front.academic.edit.news');
Route::post('/academic-update-news/{id}', 'FrontAcademicController@news_update')->name('front.academic.update.news');
Route::get('/academic/{id}', 'FrontAcademicController@show')->name('front.academic.show');
Route::get('/office/{id}', 'FrontOfficeController@show')->name('front.office.show');
Route::post('/office-add-news/{id}', 'FrontOfficeController@store_news')->name('front.office.store.news');
Route::get('/office-remove-news/{id}', 'FrontOfficeController@news_remove')->name('front.office.remove.news');
Route::get('/office-edit-news/{id}', 'FrontOfficeController@news_edit')->name('front.office.edit.news');
Route::post('/office-update-news/{id}', 'FrontOfficeController@news_update')->name('front.office.update.news');
/*\Front*/
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
Route::post('/back_end/video-list','VideoController@list')->name('backend.video.list');
Route::post('/back_end/video','VideoController@store')->name('backend.video.store');
Route::get('/back_end/video-remove/{id}','VideoController@remove')->name('backend.video.remove');
/*Gallery Backend*/
Route::get('/back_end/gallery','GalleryController@index')->name('backend.gallery.index');
Route::post('/back_end/gallery-list','GalleryController@list')->name('backend.gallery.list');
Route::post('/back_end/gallery','GalleryController@store')->name('backend.gallery.store');
Route::get('/back_end/gallery-remove/{id}','GalleryController@remove')->name('backend.gallery.remove');
/*Testimonial Backend*/
Route::get('/back_end/testimonial','TestimonialController@index')->name('backend.testimonial.index');
Route::post('/back_end/testimonial-list','TestimonialController@list')->name('backend.testimonial.list');
Route::post('/back_end/testimonial','TestimonialController@store')->name('backend.testimonial.store');
Route::get('/back_end/testimonial-remove/{id}','TestimonialController@remove')->name('backend.testimonial.remove');
/*Teacher Backend*/
Route::get('/back_end/staff','TeacherController@index')->name('backend.teacher.index');
Route::post('/back_end/teacher-list','TeacherController@list')->name('backend.teacher.list');
Route::post('/back_end/teacher','TeacherController@store')->name('backend.teacher.store');
Route::get('/back_end/teacher-remove/{id}','TeacherController@remove')->name('backend.teacher.remove');
/*Academic Backend*/
Route::get('/back_end/academic','AcademicController@index')->name('backend.academic.index');
Route::get('/back_end/academic/create','AcademicController@create')->name('backend.academic.create');
Route::post('/back_end/academic-list','AcademicController@list')->name('backend.academic.list');
Route::post('/back_end/academic','AcademicController@store')->name('backend.academic.store');
Route::get('/back_end/academic-remove/{id}','AcademicController@remove')->name('backend.academic.remove');
/*Office backend*/
Route::get('/back_end/office','OfficeController@index')->name('backend.office.index');
Route::get('/back_end/office/create','OfficeController@create')->name('backend.office.create');
Route::post('/back_end/office-list','OfficeController@list')->name('backend.office.list');
Route::post('/back_end/office','OfficeController@store')->name('backend.office.store');
Route::get('/back_end/office-remove/{id}','OfficeController@remove')->name('backend.office.remove');
/*User Backend*/
Route::resource('/back_end/user','UserController');
Route::get('/back_end/user-list','UserController@list')->name('user.list');
Route::get('/back_end/user-inactive/{id}','UserController@inactive')->name('user.inactive');

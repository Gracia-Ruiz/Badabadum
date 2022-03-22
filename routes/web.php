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

Auth::routes();

/* publicController*/
Route::get('/', 'PublicController@index');
Route::get('/category/{name}/{id}/announcements', 'PublicController@announcementsByCategory')->name('public.announcements.category');
Route::get('/announcements','PublicController@announcements')->name ('annoucements.all');
Route::get('/{id}', 'PublicController@show')->name('announcement.show');

/* homeController*/
Route::get('/announcement/new', 'HomeController@newAnnouncement')->name('announcement.new');
Route::post('/announcement/create', 'HomeController@createAnnouncement')->name('announcement.create');
Route::post('/announcement/images/upload', 'HomeController@uploadImages')->name('announcement.images.upload');
Route::delete('/announcement/images/remove', 'HomeController@removeImages')->name('announcement.images.remove');

Route::get('/announcement/images', 'HomeController@getImages')->name('announcement.images');

/* revisor area  */

Route::get('/revisor/home', 'RevisorController@index')->name('revisor.home');
Route::post('/revisor/announcement/{id}/accept', 'RevisorController@accept')->name('revisor.accept');
Route::post('/revisor/announcement/{id}/reject', 'RevisorController@reject')->name('revisor.reject');
/* idiomas */
Route::post('/locale/{locale}', 'PublicController@locale')->name('locale');





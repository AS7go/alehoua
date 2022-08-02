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
    return view('home');
})->name('home');;

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Route::post('/contact/submit/', function () {
////    return Request::all();
//    dd(Request::all());
////    return view('contact');
//})->name('contact-form');

Route::get('/contact/all/{id}', 'App\Http\Controllers\ContactController@showOneMessage')->name('contact-data-one');

Route::get(
    '/contact/all{id}/update',
    'App\Http\Controllers\ContactController@updateMessage')
    ->name('contact-update');

Route::post(
    '/contact/all{id}/update',
    'App\Http\Controllers\ContactController@updateMessageSubmit')
    ->name('contact-update-submit');

Route::get(
    '/contact/all{id}/delete',
    'App\Http\Controllers\ContactController@deleteMessage')
    ->name('contact-delete');

Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');
Route::post('/contact/submit/', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
Route::get('/review', '\App\Http\Controllers\ContactController@review')->name('review'); //+++
//Route::get('/review', [\App\Http\Controllers\ContactController::class, 'review'])->name('review'); //+++
//Route::get('/review', [\App\Http\Controllers\MainController::class, 'review'])->name('review'); //+++
//Route::post('/review/check', [\App\Http\Controllers\ContactController::class, 'review_check']); //+++

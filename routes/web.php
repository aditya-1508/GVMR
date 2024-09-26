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
    return view('index');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/principle_note', function () {
    return view('principle_note');
});
Route::get('/add-user', function () {
    return view('add-users');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/new_notice', function () {
    return view('new_notice');
});
Route::get('/admin', function () {
    return view('admin_login');
});


use App\Http\Controllers\NoticeController;

Route::post('/notices', [NoticeController::class, 'store']);


use App\Http\Controllers\AuthController;


Route::post('/login', [AuthController::class, 'login']);
Route::get('/send-notice', function () {
    return view('send-notice');
});
Route::get('/notice', function () {
    return view('notice');
});

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'handleForm'])->name('contact.submit');

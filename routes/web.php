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
Route::get('/add-user', function () {
    return view('add-users');
});
// routes/web.php

use App\Http\Controllers\NoticeController;

Route::get('/send-notice', function () {
    return view('send-notice');
});

Route::post('/send-notice', [NoticeController::class, 'sendEmails'])->name('sendEmails');
Route::post('/store', [NoticeController::class, 'store']);

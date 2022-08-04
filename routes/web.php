<?php

use GuzzleHttp\Psr7\Request;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/course', function () {
    return view('course');
})->name('course');


/* services */
Route::get('/web-development', function () {
    return view('/services/web');
})->name('web');

Route::get('/digital-marketing', function () {
    return view('/services/digital');
})->name('digital');

Route::get('/hadoop', function () {
    return view('/services/hadoop');
})->name('hadoop');

Route::get('/seo', function () {
    return view('/services/seo');
})->name('seo');

Route::get('/data-warehousing', function () {
    return view('/services/data');
})->name('data');
/* end services */

/* industries */
Route::get('/pharmaceuticals', function () {
    return view('/industries/pharma');
})->name('pharma');

Route::get('/bpo', function () {
    return view('/industries/bpo');
})->name('bpo');

Route::get('/product-engineering', function () {
    return view('/industries/product');
})->name('product');

Route::get('/manufacturing', function () {
    return view('/industries/manu');
})->name('manu');

Route::get('/life-services', function () {
    return view('/industries/life');
})->name('life');
/* end industries */


Route::get('/IT-training', function () {
    return view('training');
})->name('training');

Route::get('/IT-staffing', function () {
    return view('staffing');
})->name('staffing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('send-mail', [App\Http\Controllers\MailController::class, 'mail_sent'])->name('mail_sent');
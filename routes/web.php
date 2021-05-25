<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrcodeController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\Controller;




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


Route::get('/',[QrcodeController::class, 'index'])->name('index');//ok

Route::get('/qr-mail',[QrcodeController::class, 'mail'])->name('mail');//ok

Route::get('/qr-vcard', [QrcodeController::class, 'vcard'])->name('vcard');//ok

Route::get('/qr-geo', [QrcodeController::class, 'geo'])->name('geo');//ok

Route::get('/qr-url', [QrcodeController::class, 'url'])->name('url');//ok

Route::get('/qr-phone', [QrcodeController::class, 'phone'])->name('phone');//ok

Route::get('/qr-mail-code',[CodeController::class, 'mailcode'])->name('mailcode')->middleware('mail');//ok

Route::get('/qr-vcard-code', [CodeController::class, 'vcardcode'])->name('vcardcode')->middleware('vcard');//ok

Route::get('/qr-geo-code', [CodeController::class, 'geocode'])->name('geocode')->middleware('geo');//ok

Route::get('/qr-url-code', [CodeController::class, 'urlcode'])->name('urlcode')->middleware('url');//ok

Route::get('/qr-phone-code', [CodeController::class, 'phonecode'])->name('phonecode')->middleware('phone');//ok



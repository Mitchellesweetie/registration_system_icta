<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EventForms;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\QrCodeGeneratorController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('index')->middleware('auth');;
Route::get('/admin', function () {
    return view('pages.Admin Dashboard');
});
Route::get('/eventsedit', function () {
    return view('pages.eventsedit');
});

//PageController
Route::get('/eventform', [PageController::class,'eventform'])->name('eventform')->middleware('auth');



// AuthController Authentication Controller

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/authregister',[AuthController::class,'authregister'])->name('authregister');
Route::post('/authlogin',[AuthController::class,'authlogin'])->name('authlogin');
Route::get('/forgetpassword',[AuthController::class,'forgetpassword'])->name('forgetpassword');

//Event Controller

Route::resource('events', EventsController::class)->middleware('auth');

//EventForms Controller
// Route::resource('questions',[EventformController::class])->middleware('auth');

//ReportController
Route::get('/download/{id}',[ReportController::class,'download'])->name('download')->middleware('auth');
Route::get('/reports',[ReportController::class,'reports'])->name('reports')->middleware('auth');


//QRController
Route::get('/qr/{eventId}', [QrCodeGeneratorController::class, 'generate'])->name('generate')->middleware('auth');;
Route::get('/qrform/{id}', [QrCodeGeneratorController::class, 'qrform'])->middleware('auth');;
Route::get('/event/{id}', [QrCodeGeneratorController::class, 'selected'])->middleware('auth');

//AnswerController





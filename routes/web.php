<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ConditionsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CurrentaffairsController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\PdfController;
use App\Models\Dynamicheader;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about',[FrontendController::class,''])

Route::get('/home',[IndexController::class,'index']);
Route::post('/home',[IndexController::class,'inquiry']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/conditions',[ConditionsController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::post('/contact',[ContactController::class,'contact']);
Route::get('/currentaffairs',[CurrentaffairsController::class,'index']);
Route::get('/materials',[MaterialsController::class,'index']);
Route::get('/privacy',[PrivacyController::class,'index']);
Route::get('/course',[PrivacyController::class,'index']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);


Route::get('/makepdf', [PdfController::class, 'makepdf']);
Route::post('/makepdf', [PdfController::class, 'makepdf']);


Route::post('/generatepdf', [PdfController::class, 'generatePDF']);
Route::get('/generatepdf', [PdfController::class, 'generatePDF']);

// Auth::routes();

// Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

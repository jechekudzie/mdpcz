<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/faqs', [WebsiteController::class, 'faqs'])->name('faqs');
Route::get('/contact-us', [WebsiteController::class, 'contactUs'])->name('contactUs');
Route::get('/registrar', [WebsiteController::class, 'registrar'])->name('registrar');
Route::get('/what-we-do', [WebsiteController::class, 'whatWeDo'])->name('whatwedo');
Route::get('/our-history', [WebsiteController::class, 'ourHistory'])->name('our-history');
Route::get('/council-structure', [WebsiteController::class, 'councilStructure'])->name('council.structure');
Route::get('/council-members', [WebsiteController::class, 'councilMembers'])->name('council.members');
Route::get('/committees', [WebsiteController::class, 'committees'])->name('committees');
Route::get('/registration-pathway', [WebsiteController::class, 'regPathway'])->name('reg.path');
Route::get('/registration-forms', [WebsiteController::class, 'regForms'])->name('reg.forms');
Route::get('/banking-details', [WebsiteController::class, 'bankingDetails'])->name('bank.dets');
Route::get('/online-services', [WebsiteController::class, 'onlineServices'])->name('online.services');
Route::get('/council-examination', [WebsiteController::class, 'councilExamination'])->name('council.examination');
Route::get('/fitness-to-practice', [WebsiteController::class, 'fitnessToPractice'])->name('council.examination');

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


//admin

Route::get('/admin', function () {
    return view('admin.index');
});

Route::resource('/admin/act', \App\Http\Controllers\ActController::class);
Route::resource('/admin/blog', \App\Http\Controllers\BlogController::class);
Route::resource('/admin/committee', \App\Http\Controllers\CommitteeController::class);
Route::resource('/admin/complaint', \App\Http\Controllers\ComplaintController::class);
Route::resource('/admin/council_member', \App\Http\Controllers\CouncilMemberController::class);
Route::resource('/admin/council_structure', \App\Http\Controllers\CouncilStructureController::class);
Route::resource('/admin/downloads', \App\Http\Controllers\DownloadController::class);
Route::resource('/admin/event', \App\Http\Controllers\EventController::class);
Route::resource('/admin/exam', \App\Http\Controllers\ExamController::class);
Route::resource('/admin/exam_guideline', \App\Http\Controllers\ExamGuidelineController::class);
Route::resource('/admin/exam_date', \App\Http\Controllers\ExamDateController::class);

Route::resource('/admin/faq_category', \App\Http\Controllers\FaqCategoryController::class);
Route::get('/admin/faq/{faqCategory}/index', [\App\Http\Controllers\FaqController::class,'index']);
Route::post('/admin/faq/{faqCategory}/store', [\App\Http\Controllers\FaqController::class,'store']);
Route::get('/admin/faq/{faq}/edit', [\App\Http\Controllers\FaqController::class,'edit']);
Route::patch('/admin/faq/{faq}/update', [\App\Http\Controllers\FaqController::class,'update']);

Route::resource('/admin/fitness_practice', \App\Http\Controllers\FitnessPracticeController::class);

Route::resource('/admin/form_category', \App\Http\Controllers\FormCategoryController::class);
Route::get('/admin/form/{formCategory}/index', [\App\Http\Controllers\FormController::class,'index']);
Route::post('/admin/form/{formCategory}/store', [\App\Http\Controllers\FormController::class,'store']);
Route::get('/admin/form/{form}/edit', [\App\Http\Controllers\FormController::class,'edit']);
Route::patch('/admin/form/{form}/update', [\App\Http\Controllers\FormController::class,'update']);

Route::resource('/admin/our_history', \App\Http\Controllers\HistoryController::class);
Route::resource('/admin/important_link', \App\Http\Controllers\ImportantLinkController::class);
Route::resource('/admin/policy_guideline', \App\Http\Controllers\PolicyGuidelineController::class);
Route::resource('/admin/registrar', \App\Http\Controllers\RegistrarController::class);
Route::resource('/admin/registration_pathway', \App\Http\Controllers\RegistrationPathWayController::class);
Route::resource('/admin/strategic_goal', \App\Http\Controllers\StrategicGoalController::class);
Route::resource('/admin/vision_and_mission', \App\Http\Controllers\VisionAndMissionController::class);
Route::resource('/admin/what_we_do', \App\Http\Controllers\WhatWeDoController::class);
Route::resource('/admin/newsletter', \App\Http\Controllers\NewsLetterController::class);



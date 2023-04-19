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
    $newsletters = \App\Models\NewsLetter::all();
    return view('welcome',compact('newsletters'));
});

Route::get('/tables', function () {
    $newsletters = \App\Models\NewsLetter::all();
    return view('emails.contact_form',compact('newsletters'));
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| About Us
|--------------------------------------------------------------------------
*/
Route::get('/registrar', [WebsiteController::class, 'registrar'])->name('registrar');
Route::get('/who_we_are', [WebsiteController::class, 'whoWeAre'])->name('whoWeAre');
Route::get('/what_we_do', [WebsiteController::class, 'whatWeDo'])->name('whatwedo');
Route::get('/our_history', [WebsiteController::class, 'ourHistory'])->name('our_history');
Route::get('/council_structure', [WebsiteController::class, 'councilStructure'])->name('council.structure');
Route::get('/council_member', [WebsiteController::class, 'councilMembers'])->name('council.members');
Route::get('/committees', [WebsiteController::class, 'committees'])->name('committees');



Route::get('/registration_pathway', [WebsiteController::class, 'regPathway'])->name('reg.path');
Route::get('/registration_forms', [WebsiteController::class, 'regForms'])->name('reg.forms');
Route::get('/banking_details', [WebsiteController::class, 'bankingDetails'])->name('bank.dets');
Route::get('/online_services', [WebsiteController::class, 'onlineServices'])->name('online.services');
Route::get('/council_examination', [WebsiteController::class, 'councilExamination'])->name('council.examination');
Route::get('/fitness_to_practice', [WebsiteController::class, 'fitnessToPractice']);
Route::get('/training_institution', [WebsiteController::class, 'training_institution']);
Route::get('/log_book', [WebsiteController::class, 'logBooks']);

Route::get('/policy_guideline', [WebsiteController::class, 'policy_guideline']);
Route::get('/complaint', [WebsiteController::class, 'complaint']);
Route::get('/our_resource', [WebsiteController::class, 'our_resource']);

Route::get('/faqs', [WebsiteController::class, 'faqs'])->name('faqs');
Route::get('/contact_us', [WebsiteController::class, 'contactUs'])->name('contactUs');

Route::post('/submitContactForm', [WebsiteController::class, 'submitContactForm'])->name('submitContactForm');
Route::post('/submitComplaintForm', [WebsiteController::class, 'submitComplaintForm'])->name('submitComplaintForm');

Route::get('/act', [WebsiteController::class, 'acts'])->name('acts');


//admin
Route::middleware(['auth'])->group(function () {

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
    Route::get('/admin/faq/{faqCategory}/index', [\App\Http\Controllers\FaqController::class, 'index']);
    Route::post('/admin/faq/{faqCategory}/store', [\App\Http\Controllers\FaqController::class, 'store']);
    Route::get('/admin/faq/{faq}/edit', [\App\Http\Controllers\FaqController::class, 'edit']);
    Route::patch('/admin/faq/{faq}/update', [\App\Http\Controllers\FaqController::class, 'update']);

    Route::resource('/admin/fitness_practice', \App\Http\Controllers\FitnessPracticeController::class);

    Route::resource('/admin/form_category', \App\Http\Controllers\FormCategoryController::class);
    Route::get('/admin/form/{formCategory}/index', [\App\Http\Controllers\FormController::class, 'index']);
    Route::post('/admin/form/{formCategory}/store', [\App\Http\Controllers\FormController::class, 'store']);
    Route::get('/admin/form/{form}/edit', [\App\Http\Controllers\FormController::class, 'edit']);
    Route::patch('/admin/form/{form}/update', [\App\Http\Controllers\FormController::class, 'update']);

    Route::resource('/admin/our_history', \App\Http\Controllers\HistoryController::class);
    Route::resource('/admin/important_link', \App\Http\Controllers\ImportantLinkController::class);
    Route::resource('/admin/policy_guideline', \App\Http\Controllers\PolicyGuidelineController::class);
    Route::resource('/admin/registrar', \App\Http\Controllers\RegistrarController::class);
    Route::resource('/admin/registration_pathway', \App\Http\Controllers\RegistrationPathWayController::class);
    Route::resource('/admin/designated_institution', \App\Http\Controllers\DesignatedInstitutionController::class);
    Route::resource('/admin/training_institution', \App\Http\Controllers\TrainingInstitutionController::class);
    Route::resource('/admin/log_book', \App\Http\Controllers\LogBookController::class);
    Route::resource('/admin/banking_detail', \App\Http\Controllers\BankingDetailController::class);
    Route::resource('/admin/strategic_goal', \App\Http\Controllers\StrategicGoalController::class);

    Route::resource('/admin/vision_and_mission', \App\Http\Controllers\VisionAndMissionController::class);

    Route::resource('/admin/what_we_do', \App\Http\Controllers\WhatWeDoController::class);
    Route::resource('/admin/who_we_are', \App\Http\Controllers\WhoWeAreController::class);
    Route::resource('/admin/newsletter', \App\Http\Controllers\NewsLetterController::class);
    Route::resource('/admin/our_resource', \App\Http\Controllers\OurResourceController::class);
});


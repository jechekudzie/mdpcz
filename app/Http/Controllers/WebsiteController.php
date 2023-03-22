<?php

namespace App\Http\Controllers;

use App\Models\Act;
use App\Models\BankingDetail;
use App\Models\Committee;
use App\Models\CouncilMember;
use App\Models\Exam;
use App\Models\ExamGuideline;
use App\Models\FaqCategory;
use App\Models\FitnessPractice;
use App\Models\FormCategory;
use App\Models\OurResource;
use App\Models\PolicyGuideline;
use App\Models\Registrar;
use App\Models\RegistrationPathWay;
use App\Models\WhatWeDo;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function registrar()
    {
        $registrar = Registrar::find(1);
        return view('website.pages.registrar', compact('registrar'));
    }

    public function whatWeDo()
    {
        $what_we_do = WhatWeDo::find(1);
        return view('website.pages.what-we-do', compact('what_we_do'));
    }

    public function ourHistory()
    {
        return view('website.pages.our-history');
    }

    public function councilStructure()
    {
        return view('website.pages.council-structure');
    }

    public function councilMembers()
    {
        $council_members = CouncilMember::all();
        return view('website.pages.council-members', compact('council_members'));
    }

    public function committees()
    {
        $committees = Committee::all();
        return view('website.pages.committees',compact('committees'));
    }


    //REGISTRATION TAB
    public function regPathway()
    {
        $registration_pathway = RegistrationPathWay::find(1);
        return view('website.pages.registration-pathway', compact('registration_pathway'));
    }

    public function bankingDetails()
    {
        $banking_details = BankingDetail::all();
        return view('website.pages.banking-details', compact('banking_details'));
    }

    public function regForms()
    {
        $forms_categories = FormCategory::all();
        return view('website.pages.registration-forms', compact('forms_categories'));
    }


    //THE PROFESSION TAB
    public function onlineServices()
    {
        return view('website.pages.online-services');
    }

    public function councilExamination()
    {
        $exams = Exam::all();
        $exam_guidelines = ExamGuideline::all();
        return view('website.pages.council-examination', compact('exams', 'exam_guidelines'));
    }

    public function fitnessToPractice()
    {
        $fitness_to_practice = FitnessPractice::find(1);
        return view('website.pages.practice-fitness', compact('fitness_to_practice'));
    }

    public function policy_guideline()
    {
        $policy_guidelines = PolicyGuideline::all();
        return view('website.pages.policy_guideline', compact('policy_guidelines'));
    }

    public function complaint()
    {
        return view('website.pages.complaint');
    }


    public function acts()
    {
        $acts = Act::all();
        return view('website.pages.acts', compact('acts'));
    }

    public function faqs()
    {
        $faq_categories = FaqCategory::all();
        return view('website.pages.faqs',compact('faq_categories'));
    }
    public function our_resource()
    {
        $our_resources = OurResource::all();
        return view('website.pages.our_resource',compact('our_resources'));
    }

    public function contactUs()
    {
        return view('website.pages.contact-us');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Act;
use App\Models\BankingDetail;
use App\Models\Committee;
use App\Models\CouncilMember;
use App\Models\Exam;
use App\Models\ExamDate;
use App\Models\ExamGuideline;
use App\Models\FaqCategory;
use App\Models\FitnessPractice;
use App\Models\FormCategory;
use App\Models\ImportantLink;
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
        $quick_links = ImportantLink::all();
        return view('website.pages.registrar', compact('registrar','quick_links'));
    }

    public function whatWeDo()
    {
        $what_we_do = WhatWeDo::find(1);
        $quick_links = ImportantLink::all();
        return view('website.pages.what-we-do', compact('what_we_do','quick_links'));
    }

    public function ourHistory()
    {

        $quick_links = ImportantLink::all();
        return view('website.pages.our-history',compact('quick_links'));
    }

    public function councilStructure()
    {
        $quick_links = ImportantLink::all();
        return view('website.pages.council-structure',compact('quick_links'));
    }

    public function councilMembers()
    {
        $council_members = CouncilMember::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.council-members', compact('council_members','quick_links'));
    }

    public function committees()
    {
        $committees = Committee::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.committees',compact('committees','quick_links'));
    }


    //REGISTRATION TAB
    public function regPathway()
    {
        $quick_links = ImportantLink::all();
        $registration_pathway = RegistrationPathWay::find(1);
        return view('website.pages.registration-pathway', compact('registration_pathway','quick_links'));
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
        $quick_links = ImportantLink::all();
        return view('website.pages.online-services',compact('quick_links'));
    }

    public function councilExamination()
    {
        $exams = Exam::all();
        $exam_guidelines = ExamGuideline::all();
        $exam_dates = ExamDate::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.council-examination', compact('exams', 'exam_guidelines','quick_links','exam_dates'));
    }

    public function fitnessToPractice()
    {
        $fitness_to_practice = FitnessPractice::find(1);
        $quick_links = ImportantLink::all();
        return view('website.pages.practice-fitness', compact('fitness_to_practice','quick_links'));
    }

    public function policy_guideline()
    {
        $policy_guidelines = PolicyGuideline::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.policy_guideline', compact('policy_guidelines','quick_links'));
    }

    public function complaint()
    {
        $quick_links = ImportantLink::all();
        return view('website.pages.complaint',compact('quick_links'));
    }


    public function acts()
    {
        $acts = Act::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.acts', compact('acts','quick_links'));
    }

    public function faqs()
    {
        $faq_categories = FaqCategory::all();
        return view('website.pages.faqs',compact('faq_categories'));
    }
    public function our_resource()
    {
        $our_resources = OurResource::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.our_resource',compact('our_resources','quick_links'));
    }

    public function contactUs()
    {
        return view('website.pages.contact-us');
    }


}

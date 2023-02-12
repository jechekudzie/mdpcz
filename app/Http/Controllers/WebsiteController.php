<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function faqs(){
        return view('website.pages.faqs');
    }

    public function contactUs(){
        return view('website.pages.contact-us');
    }

    public function registrar(){
        return view('website.pages.registrar');
    }

    public function whatWeDo(){
        return view('website.pages.what-we-do');
    }

    public function ourHistory(){
        return view('website.pages.our-history');
    }

    public function councilStructure(){
        return view('website.pages.council-structure');
    }

    public function councilMembers(){
        return view('website.pages.council-members');
    }

    public function committees(){
        return view('website.pages.committees');
    }

    public function regPathway(){
        return view('website.pages.registration-pathway');
    }

    public function regForms(){
        return view('website.pages.registration-forms');
    }

    public function bankingDetails(){
        return view('website.pages.banking-details');
    }

    public function onlineServices(){
        return view('website.pages.online-services');
    }

    public function councilExamination(){
        return view('website.pages.council-examination');
    }

    public function fitnessToPractice(){
        return view('website.pages.practice-fitness');
    }
}

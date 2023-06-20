<?php

namespace App\Http\Controllers;

use App\Mail\ComplaintFormMail;
use App\Mail\ContactFormMail;
use App\Models\Act;
use App\Models\BankingDetail;
use App\Models\Committee;
use App\Models\Complaint;
use App\Models\CouncilMember;
use App\Models\CouncilStructure;
use App\Models\DesignatedInstitution;
use App\Models\Exam;
use App\Models\ExamDate;
use App\Models\ExamGuideline;
use App\Models\ExternalPolicy;
use App\Models\FaqCategory;
use App\Models\FitnessPractice;
use App\Models\FormCategory;
use App\Models\ImportantLink;
use App\Models\InternshipInstitution;
use App\Models\LogBook;
use App\Models\OurResource;
use App\Models\PolicyGuideline;
use App\Models\PractitionersSearch;
use App\Models\Registrar;
use App\Models\RegistrationPathWay;
use App\Models\Speciality;
use App\Models\TrainingInstitution;
use App\Models\WhatWeDo;
use App\Models\WhoWeAre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{

    public function registrar()
    {
        $registrar = Registrar::find(1);
        $quick_links = ImportantLink::all();
        return view('website.pages.registrar', compact('registrar', 'quick_links'));
    }

    public function whoWeAre()
    {
        $who_we_are = WhoWeAre::find(1);
        $quick_links = ImportantLink::all();
        return view('website.pages.who_we_are', compact('who_we_are', 'quick_links'));
    }

    public function whatWeDo()
    {
        $what_we_do = WhatWeDo::find(1);
        $quick_links = ImportantLink::all();
        return view('website.pages.what_we_do', compact('what_we_do', 'quick_links'));
    }

    public function ourHistory()
    {

        $quick_links = ImportantLink::all();
        return view('website.pages.our_history', compact('quick_links'));
    }

    public function councilStructure()
    {
        $quick_links = ImportantLink::all();
        $council_structure = CouncilStructure::find(1);
        $committees = Committee::all();
        return view('website.pages.council_structure', compact('quick_links','council_structure','committees'));
    }

    public function councilMembers()
    {
        $council_members = CouncilMember::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.council_members', compact('council_members', 'quick_links'));
    }

    public function committees()
    {
        $committees = Committee::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.committees', compact('committees', 'quick_links'));
    }


    //REGISTRATION TAB
    public function regPathway()
    {
        $designated_institutions = DesignatedInstitution::all();
        $quick_links = ImportantLink::all();
        $registration_pathway = RegistrationPathWay::find(1);

        return view('website.pages.registration_pathway', compact('registration_pathway', 'quick_links', 'designated_institutions'));
    }

    public function bankingDetails()
    {
        $banking_details = BankingDetail::all();
        return view('website.pages.banking_details', compact('banking_details'));
    }

    public function regForms()
    {
        $forms_categories = FormCategory::all()->sortBy('order');
        return view('website.pages.registration_forms', compact('forms_categories'));
    }


    //THE EDUCATION TAB
    public function onlineServices()
    {
        $quick_links = ImportantLink::all();
        return view('website.pages.online_services', compact('quick_links'));
    }

    public function councilExamination()
    {
        $exams = Exam::all();
        $exam = Exam::find(1);
        $exam_guidelines = ExamGuideline::all();
        $exam_date = ExamDate::find(1);
        $quick_links = ImportantLink::all();
        return view('website.pages.council_examination', compact('exam','exams', 'exam_guidelines', 'quick_links', 'exam_date'));
    }

    public function fitnessToPractice()
    {
        $fitness_to_practice = FitnessPractice::find(1);
        $quick_links = ImportantLink::all();
        return view('website.pages.practice_fitness', compact('fitness_to_practice', 'quick_links'));
    }

    public function training_institution()
    {
        $training_institutions = TrainingInstitution::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.training_institution', compact('training_institutions', 'quick_links'));
    }

    public function internship_institution()
    {
        $internship_institutions = InternshipInstitution::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.internship_institution', compact('internship_institutions', 'quick_links'));
    }

    public function designated_institution()
    {
        $designated_institutions = DesignatedInstitution::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.designated_institution', compact('designated_institutions', 'quick_links'));
    }

    public function logBooks()
    {
        $log_books = LogBook::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.log_books', compact('log_books', 'quick_links'));
    }

    public function policy_guideline()
    {
        $policy_guidelines = PolicyGuideline::all();
        $committees = Committee::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.policy_guideline', compact('policy_guidelines', 'quick_links', 'committees'));
    }

    public function external_policy()
    {
        $external_policies = ExternalPolicy::all()->sortBy('order');
        $quick_links = ImportantLink::all();

        return view('website.pages.external_policies', compact('external_policies','quick_links'));
    }

    public function complaint()
    {
        $quick_links = ImportantLink::all();
        return view('website.pages.complaint', compact('quick_links'));
    }


    public function acts()
    {
        $acts = Act::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.acts', compact('acts', 'quick_links'));
    }

    public function faqs()
    {
        $faq_categories = FaqCategory::all();
        return view('website.pages.faqs', compact('faq_categories'));
    }

    public function our_resource()
    {
        $our_resources = OurResource::all();
        $quick_links = ImportantLink::all();
        return view('website.pages.our_resource', compact('our_resources', 'quick_links'));
    }

    public function contactUs()
    {
        return view('website.pages.contact_us');
    }

    public function submitContactForm(Request $request)
    {
        // Validate the contact form data
        $validatedData = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'subject' => 'nullable',
            'message' => 'nullable',
        ]);


        // Send the email using the user's email as the "from" address
        Mail::to('mdpcz@mdpcz.co.zw')->send(new ContactFormMail($validatedData));

        // Redirect back to the contact form with a success message
        return redirect()->back()->with('message', 'Your message has been sent successfully!');
    }

    public function submitComplaintForm(Request $request)
    {
        // Validate the contact form data
        $validatedData = request()->validate([
            'category' => 'required',
            'name' => 'nullable',
            'email' => 'nullable',
            'subject' => 'nullable',
            'message' => 'nullable',
        ]);

        Complaint::create($validatedData);

        // Send the email using the user's email as the "from" address
        Mail::to('compliants@mdpcz.co.zw')->send(new ComplaintFormMail($validatedData));

        // Redirect back to the contact form with a success message
        return redirect()->back()->with('message', 'Your message has been sent successfully!');
    }


    public function public_register()
    {
        return view('website.pages.public_register');
    }

}

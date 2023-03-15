<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        //
        $faqs = Faq::all();
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        //
        $faq_categories = FaqCategory::all();
        return view('admin.faqs.create', compact('faq_categories'));
    }

    public function store(Request $request)
    {
        //

        $faq = Faq::create(request()->validate([
            'faq_category_id' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]));


        return back()->with('message', 'faq added successfully');
    }


    public function show(Faq $faq)
    {
        //
        return view('admin.faqs.show', compact('faq'));
    }


    public function edit(Faq $faq)
    {
        //
        $faq_categories = FaqCategory::all();
        return view('admin.faqs.edit', compact('faq', 'faq_categories'));
    }

    public function update(Request $request, Faq $faq)
    {
        //
        $faq->update(request()->validate([
            'faq_category_id' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]));


        return back()->with('message', 'faq updated successfully');
    }

    public function destroy(Faq $faq)
    {
        //
        $faq->delete();

        return redirect('/admin/faq')->with('message', 'faq deleted successfully');
    }
}

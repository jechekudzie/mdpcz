<?php

namespace App\Http\Controllers;

use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqCategoryController extends Controller
{
    public function index()
    {
        //
        $faq_categories = FaqCategory::all();
        return view('admin.faq_categories.index', compact('faq_categories'));
    }

    public function create()
    {
        //
        return view('admin.faq_categories.create');
    }

    public function store(Request $request)
    {
        //
        $faq_category = FaqCategory::create(request()->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]));


        return back()->with('message', 'faq_category added successfully');
    }


    public function show(FaqCategory $faq_category)
    {
        //
        return view('admin.faq_categories.show', compact('faq_category'));
    }


    public function edit(FaqCategory $faq_category)
    {
        //
        return view('admin.faq_categories.edit', compact('faq_category'));
    }

    public function update(Request $request, FaqCategory $faq_category)
    {
        //
        $faq_category->update(request()->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]));

        return back()->with('message', 'faq category updated successfully');
    }

    public function destroy(FaqCategory $faq_category)
    {
        //
        $faq_category->delete();

        return redirect('/admin/faq_category')->with('message', 'faq_category deleted successfully');
    }
}

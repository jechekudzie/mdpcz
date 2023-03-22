<?php

namespace App\Http\Controllers;

use App\Models\FormCategory;
use Illuminate\Http\Request;

class FormCategoryController extends Controller
{
    public function index()
    {
        //
        $form_categories = FormCategory::all();
        return view('admin.form_categories.index', compact('form_categories'));
    }

    public function create()
    {
        //
        return view('admin.form_categories.create');
    }

    public function store(Request $request)
    {
        //

        $form_category = FormCategory::create(request()->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]));


        return back()->with('message', 'form_category added successfully');
    }


    public function show(FormCategory $form_category)
    {
        //
        return view('admin.form_categories.show', compact('form_category'));
    }


    public function edit(FormCategory $form_category)
    {
        //
        return view('admin.form_categories.edit', compact('form_category'));
    }

    public function update(Request $request, FormCategory $form_category)
    {
        //
        $form_category->update(request()->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]));


        return back()->with('message', 'faq category updated successfully');
    }

    public function destroy(FormCategory $form_category)
    {
        //
        $form_category->delete();

        return redirect('/admin/form_category')->with('message', 'form_category deleted successfully');
    }
}

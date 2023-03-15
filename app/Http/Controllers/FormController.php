<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormCategory;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        //
        $forms = Form::all();
        return view('admin.forms.index', compact('forms'));
    }

    public function create()
    {
        //
        $form_categories = FormCategory::all();
        return view('admin.forms.create', compact('form_categories'));
    }

    public function store(Request $request)
    {
        //

        $form = request()->validate([
            'form_category_id' => 'required',
            'title' => 'required',
        ]);

        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $form_file = $file->move('forms', $file_name);

        }
        Form::create($form);


        return back()->with('message', 'form added successfully');
    }


    public function show(Form $form)
    {
        //
        return view('admin.forms.show', compact('form'));
    }


    public function edit(Form $form)
    {
        //
        $form_categories = FormCategory::all();
        return view('admin.forms.edit', compact('form', 'form_categories'));
    }

    public function update(Request $request, Form $form)
    {
        //
        $new_form_file = '';
        $update = request()->validate([
            'form_category_id' => 'required',
            'title' => 'required',
        ]);

        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $new_form_file = $file->move('forms', $file_name);

            $old_path = $form->file;
            if ($old_path != null) {
                unlink($old_path);
            }
        }

        $update['file'] = $new_form_file;

        $form->update($update);


        return back()->with('message', 'form updated successfully');
    }

    public function destroy(Form $form)
    {
        //
        $form->delete();

        return redirect('/admin/form')->with('message', 'form deleted successfully');
    }
}

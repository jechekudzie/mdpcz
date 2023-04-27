<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormCategory;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index(FormCategory $formCategory)
    {
        //
        return view('admin.forms.index', compact('formCategory'));
    }

    public function create()
    {
        //
        $form_categories = FormCategory::all();
        return view('admin.forms.create', compact('form_categories'));
    }

    public function store(FormCategory $formCategory)
    {
        //
        $form_file = '';

        $form = request()->validate([
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
        $form['file'] = $form_file;
        $formCategory->add_forms($form);

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
        return view('admin.forms.edit', compact('form'));
    }

    public function update(Request $request, Form $form)
    {
        //
        $new_form_file = '';
        $update = request()->validate([
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
            $update['file'] = $new_form_file;
        }

        $form->update($update);


        return back()->with('message', 'form updated successfully');
    }

    public function destroy(Form $form)
    {
        //
        $form_category = $form->form_category;
        $form->delete();

        return redirect('/admin/form/'.$form_category->id.'/index')->with('message', 'form deleted successfully');
    }
}

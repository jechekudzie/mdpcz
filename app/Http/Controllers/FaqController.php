<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(FaqCategory $faqCategory)
    {
        //
        return view('admin.faqs.index', compact('faqCategory'));
    }

    public function create(FaqCategory $faqCategory)
    {
        //
        $faq_categories = FaqCategory::all();
        return view('admin.faqs.create', compact('faq_categories'));
    }

    public function store(FaqCategory $faqCategory)
    {
        //

        $faq = request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq_file = '';
        if (request()->hasfile('file')) {
            //get the file field data and name field from faq submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $faq_file = $file->move('faqs', $file_name);

            $faq['file'] = $faq_file;
        }

        $faqCategory->add_faqs($faq);


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
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        //

        $update = request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        if (request()->hasfile('file')) {
            //get the file field data and name field from faq submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $new_faq_file = $file->move('faqs', $file_name);

            $old_path = $faq->file;
            if ($old_path != null) {
                unlink($old_path);
            }
            $update['file'] = $new_faq_file;
        }

        $faq->update($update);


        return back()->with('message', 'faq updated successfully');
    }

    public function destroy(Faq $faq)
    {
        //
        $faq->delete();

        return redirect('/admin/faq')->with('message', 'faq deleted successfully');
    }
}

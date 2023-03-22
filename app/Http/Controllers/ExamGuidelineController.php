<?php

namespace App\Http\Controllers;

use App\Models\ExamGuideline;
use Illuminate\Http\Request;

class ExamGuidelineController extends Controller
{
    public function index()
    {
        //
        $exam_guidelines = ExamGuideline::all();
        return view('admin.exam_guidelines.index', compact('exam_guidelines'));
    }

    public function create()
    {
        //
        return view('admin.exam_guidelines.create');
    }

    public function store(Request $request)
    {
        //
        $exam_guideline = request()->validate([
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
            $exam_guideline_file = $file->move('exam_guidelines', $file_name);

            $exam_guideline['file'] = $exam_guideline_file;
        }


        ExamGuideline::create($exam_guideline);

        return back()->with('message', 'exam guideline uploaded successfully');
    }


    public function show(ExamGuideline $exam_guideline)
    {
        //
        return view('admin.exam_guidelines.show', compact('exam_guideline'));
    }


    public function edit(ExamGuideline $exam_guideline)
    {
        //
        return view('admin.exam_guidelines.edit', compact('exam_guideline'));
    }

    public function update(Request $request, ExamGuideline $exam_guideline)
    {

        //$new_exam_guideline_file = '';
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

            //get the old file path before you update
            $old_path = $exam_guideline->file;

            //upload the file to a directory in Public folder
            $new_exam_guideline_file = $file->move('exam_guidelines', $file_name);

            if ($old_path != null) {
                unlink($old_path);
            }

            $update['file'] = $new_exam_guideline_file;

        }


        $exam_guideline->update($update);

        return back()->with('message', 'exam_guideline updated successfully');
    }

    public function destroy(ExamGuideline $exam_guideline)
    {
        //
        $exam_guideline->delete();

        return redirect('/admin/exam_guideline')->with('message', 'exam_guideline deleted successfully');
    }
}

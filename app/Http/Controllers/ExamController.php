<?php

namespace App\Http\Controllers;

use App\Models\Exam;

use App\Models\ExamDate;
use App\Models\ExamGuideline;
use Illuminate\Http\Request;

class ExamController extends Controller
{

    public function index()
    {
        //
        $exam_dates = ExamDate::all();
        $exams = Exam::all();
        $exam_guidelines = ExamGuideline::all();
        return view('admin.exams.index', compact('exams','exam_guidelines','exam_dates'));
    }

    public function create()
    {
        //
        return view('admin.exams.create');
    }

    public function store(Request $request)
    {
        //

        $exam = Exam::create(request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]));


        return back()->with('message', 'exam added successfully');
    }


    public function show(Exam $exam)
    {
        //
        return view('admin.exams.show', compact('exam'));
    }


    public function edit(Exam $exam)
    {
        //
        return view('admin.exams.edit', compact('exam'));
    }

    public function update(Request $request, Exam $exam)
    {
        //
        $exam->update(request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]));


        return back()->with('message', 'exam updated successfully');
    }

    public function destroy(Exam $exam)
    {
        //
        $exam->delete();

        return redirect('/admin/exam')->with('message', 'exam deleted successfully');
    }
}

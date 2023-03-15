<?php

namespace App\Http\Controllers;

use App\Models\Exam;

use Illuminate\Http\Request;

class ExamController extends Controller
{

    public function index()
    {
        //
        $exams = Exam::all();
        return view('admin.exams.index', compact('exams'));
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

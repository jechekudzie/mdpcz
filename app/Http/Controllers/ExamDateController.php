<?php

namespace App\Http\Controllers;

use App\Models\ExamDate;
use Illuminate\Http\Request;

class ExamDateController extends Controller
{


    public function index()
    {
        //
        $exam_dates = ExamDate::all();
        return view('admin.exam_dates.index', compact('exam_dates'));
    }

    public function create()
    {
        //
        return view('admin.exam_dates.create');
    }

    public function store(Request $request)
    {
        //

        $exam_date = ExamDate::create(request()->validate([
            'first_exam' => 'required',
            'second_exam' => 'required',
            'third_exam' => 'required',

        ]));


        return back()->with('message', 'exam date added successfully');
    }


    public function show(ExamDate $exam_date)
    {
        //
        return view('admin.exam_dates.show', compact('exam_date'));
    }


    public function edit(ExamDate $exam_date)
    {
        //
        return view('admin.exam_dates.edit', compact('exam_date'));
    }

    public function update(Request $request, ExamDate $exam_date)
    {
        //
        $exam_date->update(request()->validate([
            'first_exam' => 'required',
            'second_exam' => 'required',
            'third_exam' => 'required',
        ]));


        return back()->with('message', 'exam_date updated successfully');
    }

    public function destroy(ExamDate $exam_date)
    {
        //
        $exam_date->delete();

        return redirect('/admin/exam_date')->with('message', 'exam_date deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Committee;

use Illuminate\Http\Request;

class CommitteeController extends Controller
{

    public function index()
    {
        //
        $committees = Committee::all();
        return view('admin.committees.index', compact('committees'));
    }

    public function create()
    {
        //
        return view('admin.committees.create');
    }

    public function store(Request $request)
    {
        //

        $committee = Committee::create(request()->validate([
            'name' => 'required',
            'section' => 'nullable',
            'description' => 'nullable',
        ]));


        return back()->with('message', 'committee added successfully');
    }


    public function show(Committee $committee)
    {
        //
        return view('admin.committees.show', compact('committee'));
    }


    public function edit(Committee $committee)
    {
        //
        return view('admin.committees.edit', compact('committee'));
    }

    public function update(Request $request, Committee $committee)
    {
        //
        $committee->update(request()->validate([
            'name' => 'required',
            'section' => 'nullable',
            'description' => 'nullable',
        ]));


        return back()->with('message', 'committee updated successfully');
    }

    public function destroy(Committee $committee)
    {
        //
        $committee->delete();

        return redirect('/admin/committee')->with('message', 'committee deleted successfully');
    }
}

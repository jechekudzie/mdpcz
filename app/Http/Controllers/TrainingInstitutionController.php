<?php

namespace App\Http\Controllers;

use App\Models\TrainingInstitution;

use Illuminate\Http\Request;

class TrainingInstitutionController extends Controller
{
    public function index()
    {
        //
        $training_institutions = TrainingInstitution::all();
        return view('admin.training_institutions.index', compact('training_institutions'));
    }

    public function create()
    {
        //
        return view('admin.training_institutions.create');
    }

    public function store(Request $request)
    {
        //

        $training_institution = TrainingInstitution::create(request()->validate([
            'name' => 'required',
            'address' => 'nullable',
            'website_link' => 'nullable',
        ]));


        return back()->with('message', 'training institution added successfully');
    }


    public function show(TrainingInstitution $training_institution)
    {
        //
        return view('admin.training_institutions.show', compact('training_institution'));
    }


    public function edit(TrainingInstitution $training_institution)
    {
        //
        return view('admin.training_institutions.edit', compact('training_institution'));
    }

    public function update(Request $request, TrainingInstitution $training_institution)
    {
        //
        $training_institution->update(request()->validate([
            'name' => 'required',
            'address' => 'nullable',
            'website_link' => 'nullable',
        ]));


        return back()->with('message', 'training institution updated successfully');
    }

    public function destroy(TrainingInstitution $training_institution)
    {
        //
        $training_institution->delete();

        return redirect('/admin/training_institution')->with('message', 'training institution deleted successfully');
    }
}

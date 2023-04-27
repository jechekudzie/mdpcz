<?php

namespace App\Http\Controllers;

;
use App\Models\InternshipInstitution;
use Illuminate\Http\Request;

class InternshipInstitutionController extends Controller
{
    public function index()
    {
        //
        $internship_institutions = InternshipInstitution::all();
        return view('admin.internship_institutions.index', compact('internship_institutions'));
    }

    public function create()
    {
        //
        return view('admin.internship_institutions.create');
    }

    public function store(Request $request)
    {
        //

        $internship_institution = InternshipInstitution::create(request()->validate([
            'name' => 'required',
            'address' => 'nullable',
            'website_link' => 'nullable',
        ]));


        return back()->with('message', 'training institution added successfully');
    }


    public function show(InternshipInstitution $internship_institution)
    {
        //
        return view('admin.internship_institutions.show', compact('internship_institution'));
    }


    public function edit(InternshipInstitution $internship_institution)
    {
        //
        return view('admin.internship_institutions.edit', compact('internship_institution'));
    }

    public function update(Request $request, InternshipInstitution $internship_institution)
    {
        //
        $internship_institution->update(request()->validate([
            'name' => 'required',
            'address' => 'nullable',
            'website_link' => 'nullable',
        ]));


        return back()->with('message', 'training institution updated successfully');
    }

    public function destroy(InternshipInstitution $internship_institution)
    {
        //
        $internship_institution->delete();

        return redirect('/admin/internship_institution')->with('message', 'training institution deleted successfully');
    }
}

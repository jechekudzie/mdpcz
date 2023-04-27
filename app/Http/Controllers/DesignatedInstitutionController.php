<?php

namespace App\Http\Controllers;

use App\Models\DesignatedInstitution;
use Illuminate\Http\Request;

class DesignatedInstitutionController extends Controller
{
    public function index()
    {
        //
        $designated_institutions = DesignatedInstitution::all();
        return view('admin.designated_institutions.index', compact('designated_institutions'));
    }

    public function create()
    {
        //
        return view('admin.designated_institutions.create');
    }

    public function store(Request $request)
    {
        //

        $designated_institution = DesignatedInstitution::create(request()->validate([
            'category' => 'required',
            'name' => 'required',
            'address' => 'nullable',
            'website_link' => 'nullable',
        ]));


        return back()->with('message', 'designated institution added successfully');
    }


    public function show(DesignatedInstitution $designated_institution)
    {
        //
        return view('admin.designated_institutions.show', compact('designated_institution'));
    }


    public function edit(DesignatedInstitution $designated_institution)
    {
        //
        return view('admin.designated_institutions.edit', compact('designated_institution'));
    }

    public function update(Request $request, DesignatedInstitution $designated_institution)
    {
        //
        $designated_institution->update(request()->validate([
            'category' => 'required',
            'name' => 'required',
            'address' => 'nullable',
            'website_link' => 'nullable',
        ]));


        return back()->with('message', 'designated institution updated successfully');
    }

    public function destroy(DesignatedInstitution $designated_institution)
    {
        //
        $designated_institution->delete();

        return redirect('/admin/designated_institution')->with('message', 'designated institution deleted successfully');
    }
}

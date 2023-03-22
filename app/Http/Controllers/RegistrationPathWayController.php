<?php

namespace App\Http\Controllers;

use App\Models\RegistrationPathWay;
use Illuminate\Http\Request;

class RegistrationPathWayController extends Controller
{

    public function index()
    {
        //
        $registration_pathways = RegistrationPathWay::all();
        return view('admin.registration_pathways.index', compact('registration_pathways'));
    }

    public function create()
    {
        //
        return view('admin.registration_pathways.create');
    }

    public function store(Request $request)
    {
        //
        $registration_pathway_file = '';
        $registration_pathway = request()->validate([
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
            $registration_pathway_file = $file->move('registration_pathways', $file_name);
        }
        $registration_pathway['file'] = $registration_pathway_file;

        RegistrationPathWay::create($registration_pathway);

        return back()->with('message', 'registration pathway uploaded successfully');
    }


    public function show(RegistrationPathWay $registration_pathway)
    {
        //
        return view('admin.registration_pathways.show', compact('registration_pathway'));
    }


    public function edit(RegistrationPathWay $registration_pathway)
    {
        //
        return view('admin.registration_pathways.edit', compact('registration_pathway'));
    }

    public function update(Request $request, RegistrationPathWay $registration_pathway)
    {
        //

        $new_registration_pathway_file = '';
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
            $new_registration_pathway_file = $file->move('registration_pathways', $file_name);

            $old_path = $registration_pathway->file;
            if ($old_path != null) {
                unlink($old_path);
            }
            $update['file'] = $new_registration_pathway_file;
        }

        $registration_pathway->update($update);

        return back()->with('message', 'registration pathway updated successfully');
    }

    public function destroy(RegistrationPathWay $registration_pathway)
    {
        //
        $registration_pathway->delete();

        return redirect('/admin/act')->with('message', 'act deleted successfully');
    }
}

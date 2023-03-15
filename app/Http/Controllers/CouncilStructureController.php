<?php

namespace App\Http\Controllers;

use App\Models\CouncilStructure;
use Illuminate\Http\Request;

class CouncilStructureController extends Controller
{
    public function index()
    {
        //
        $council_structures = CouncilStructure::all();
        return view('admin.council_structures.index', compact('council_structures'));
    }

    public function create()
    {
        //
        return view('admin.council_structures.create');
    }

    public function store(Request $request)
    {
        //
        $structure_file = '';
        $councilStructure = request()->validate([
            'description' => 'required',
        ]);

        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $structure_file = $file->move('council_structures', $file_name);
        }
        $councilStructure['image'] = $structure_file;

        CouncilStructure::create($councilStructure);

        return back()->with('message', 'structure added successfully');
    }


    public function show(CouncilStructure $councilStructure)
    {
        //
        return view('admin.council_structures.show', compact('councilMember'));
    }


    public function edit(CouncilStructure $councilStructure)
    {
        //
        return view('admin.council_structures.edit', compact('councilMember'));
    }

    public function update(Request $request, CouncilStructure $councilStructure)
    {
        //

        $new_structure_file = '';
        $update = request()->validate([
            'description' => 'required',
        ]);

        $structure_file = $councilStructure->file;

        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $new_structure_file = $file->move('council_structures', $file_name);

            $old_path = $structure_file->file;
            if ($old_path != null) {
                unlink($old_path);
            }
        }

        $update['file'] = $new_structure_file;

        $councilStructure->update($update);

        return back()->with('message', 'structure updated successfully');
    }

    public function destroy(CouncilStructure $councilStructure)
    {
        //
        $councilStructure->delete();

        return redirect('/admin/council_structure')->with('message', 'structure deleted successfully');
    }
}

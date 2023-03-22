<?php

namespace App\Http\Controllers;


use App\Models\CouncilMember;
use Illuminate\Http\Request;

class CouncilMemberController extends Controller
{
    public function index()
    {
        //
        $council_members = CouncilMember::all();
        return view('admin.council_members.index', compact('council_members'));
    }

    public function create()
    {
        //
        return view('admin.council_members.create');
    }

    public function store(Request $request)
    {
        //
        $member_file = '';
        $councilMember = request()->validate([
            'name' => 'required',
            'title' => 'nullable',
            'bio' => 'nullable',
        ]);

        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $member_file = $file->move('council_members', $file_name);
        }
        $councilMember['file'] = $member_file;

        CouncilMember::create($councilMember);

        return back()->with('message', 'member added successfully');
    }


    public function show(CouncilMember $councilMember)
    {
        //
        return view('admin.council_members.show', compact('councilMember'));
    }


    public function edit(CouncilMember $councilMember)
    {
        //
        return view('admin.council_members.edit', compact('councilMember'));
    }

    public function update(Request $request, CouncilMember $councilMember)
    {
        //
        $new_member_file = '';
        $update = request()->validate([
            'name' => 'required',
            'title' => 'nullable',
            'bio' => 'nullable',
        ]);


        if (request()->hasFile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $new_member_file = $file->move('council_members', $file_name);

            $old_path = $councilMember->file;
            if ($old_path != null) {
                unlink($old_path);
            }

            $update['file'] = $new_member_file;
        }



        $councilMember->update($update);

        return back()->with('message', 'member updated successfully');
    }

    public function destroy(CouncilMember $councilMember)
    {
        //
        $councilMember->delete();

        return redirect('/admin/council_member')->with('message', 'member deleted successfully');
    }
}

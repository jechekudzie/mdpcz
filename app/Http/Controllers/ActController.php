<?php

namespace App\Http\Controllers;

use App\Models\Act;
use Illuminate\Http\Request;

class ActController extends Controller
{

    public function index()
    {
        //
        $acts = Act::all();
        return view('admin.acts.index', compact('acts'));
    }

    public function create()
    {
        //
        return view('admin.acts.create');
    }

    public function store(Request $request)
    {
        //
        $act = request()->validate([
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
            $act_file = $file->move('acts', $file_name);

            $act['file'] = $act_file;
        }


        Act::create($act);

        return back()->with('message', 'act uploaded successfully');
    }


    public function show(Act $act)
    {
        //
        return view('admin.acts.show', compact('act'));
    }


    public function edit(Act $act)
    {
        //
        return view('admin.acts.edit', compact('act'));
    }

    public function update(Request $request, Act $act)
    {

        //$new_act_file = '';
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

            //get the old file path before you update
            $old_path = $act->file;

            //upload the file to a directory in Public folder
            $new_act_file = $file->move('acts', $file_name);

            if ($old_path != null) {
                unlink($old_path);
            }

            $update['file'] = $new_act_file;

        }


        $act->update($update);

        return back()->with('message', 'act updated successfully');
    }

    public function destroy(Act $act)
    {
        //
        $act->delete();

        return redirect('/admin/act')->with('message', 'act deleted successfully');
    }
}

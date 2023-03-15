<?php

namespace App\Http\Controllers;

use App\Models\Registrar;
use Illuminate\Http\Request;

class RegistrarController extends Controller
{

    public function index()
    {
        //
        $registrars = Registrar::all();
        return view('admin.registrars.index', compact('registrars'));
    }

    public function create()
    {
        //
        return view('admin.registrars.create');
    }

    public function store(Request $request)
    {
        //
        $registrar_file = '';
        $registrar = request()->validate([
            'name' => 'required',
            'qualifications' => 'nullable',
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
            $registrar_file = $file->move('registrars', $file_name);
        }
        $registrar['file'] = $registrar_file;

        Registrar::create($registrar);

        return back()->with('message', 'registrar uploaded successfully');
    }


    public function show(Registrar $registrar)
    {
        //
        return view('admin.registrars.show', compact('registrar'));
    }


    public function edit(Registrar $registrar)
    {
        //
        return view('admin.registrars.edit', compact('registrar'));
    }

    public function update(Request $request, Registrar $registrar)
    {
        //

        $new_registrar_file = '';
        $update = request()->validate([
            'name' => 'required',
            'qualifications' => 'nullable',
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
            $new_registrar_file = $file->move('registrars', $file_name);

            $old_path = $registrar->file;
            if ($old_path != null) {
                unlink($old_path);
            }
        }

        $update['file'] = $new_registrar_file;

        $registrar->update($update);

        return back()->with('message', 'registrar updated successfully');
    }

    public function destroy(Registrar $registrar)
    {
        //
        $registrar->delete();

        return redirect('/admin/registrar')->with('message', 'registrar deleted successfully');
    }
}

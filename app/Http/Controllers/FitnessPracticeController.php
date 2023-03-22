<?php

namespace App\Http\Controllers;

use App\Models\FitnessPractice;
use Illuminate\Http\Request;

class FitnessPracticeController extends Controller
{
    public function index()
    {
        //
        $fitness_practices = FitnessPractice::all();
        return view('admin.fitness_practices.index', compact('fitness_practices'));
    }

    public function create()
    {
        //
        return view('admin.fitness_practices.create');
    }

    public function store(Request $request)
    {
        //
        $fitness_practice_file = '';
        $fitness_practice = request()->validate([
            'title' => 'nullable',
            'description' => 'nullable',
        ]);

        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $fitness_practice_file = $file->move('fitness_practices', $file_name);
        }
        $fitness_practice['file'] = $fitness_practice_file;

        FitnessPractice::create($fitness_practice);

        return back()->with('message', 'fitness practice added successfully');
    }


    public function show(FitnessPractice $fitness_practice)
    {
        //

        return view('admin.fitness_practices.show', compact('fitness_practice'));
    }


    public function edit(FitnessPractice $fitness_practice)
    {

        return view('admin.fitness_practices.edit', compact('fitness_practice'));
    }

    public function update(Request $request, FitnessPractice $fitness_practice)
    {
        //
        $new_fitness_practice_file = '';
        $update = request()->validate([
            'title' => 'nullable',
            'description' => 'nullable',
        ]);

        $fitness_practice_file = $fitness_practice->file;

        if (request()->hasFile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $new_fitness_practice_file = $file->move('fitness_practices', $file_name);

            $old_path = $fitness_practice_file->file;
            if ($old_path != null) {
                unlink($old_path);
            }

            $update['file'] = $new_fitness_practice_file;
        }

        $fitness_practice->update($update);

        return back()->with('message', 'fitness practice updated successfully');
    }

    public function destroy(FitnessPractice $fitness_practice)
    {
        //
        $fitness_practice->delete();

        return redirect('/admin/fitness_practice')->with('message', 'fitness practice deleted successfully');
    }
}

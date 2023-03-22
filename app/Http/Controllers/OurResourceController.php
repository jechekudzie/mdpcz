<?php

namespace App\Http\Controllers;

use App\Models\OurResource;
use Illuminate\Http\Request;

class OurResourceController extends Controller
{
    public function index()
    {
        //
        $our_resources = OurResource::all();
        return view('admin.our_resources.index', compact('our_resources'));
    }

    public function create()
    {
        //
        return view('admin.our_resources.create');
    }

    public function store(Request $request)
    {
        //
        $our_resource = request()->validate([
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
            $our_resource_file = $file->move('our_resources', $file_name);

            $our_resource['file'] = $our_resource_file;
        }


        OurResource::create($our_resource);

        return back()->with('message', 'our_resource uploaded successfully');
    }


    public function show(OurResource $our_resource)
    {
        //
        return view('admin.our_resources.show', compact('our_resource'));
    }


    public function edit(OurResource $our_resource)
    {
        //
        return view('admin.our_resources.edit', compact('our_resource'));
    }

    public function update(Request $request, OurResource $our_resource)
    {

        //$new_our_resource_file = '';
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
            $old_path = $our_resource->file;

            //upload the file to a directory in Public folder
            $new_our_resource_file = $file->move('our_resources', $file_name);

            if ($old_path != null) {
                unlink($old_path);
            }

            $update['file'] = $new_our_resource_file;

        }


        $our_resource->update($update);

        return back()->with('message', 'our_resource updated successfully');
    }

    public function destroy(OurResource $our_resource)
    {
        //
        $our_resource->delete();

        return redirect('/admin/our_resource')->with('message', 'our_resource deleted successfully');
    }
}

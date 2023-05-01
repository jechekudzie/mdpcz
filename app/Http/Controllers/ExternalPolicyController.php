<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\ExternalPolicy;
use Illuminate\Http\Request;

class ExternalPolicyController extends Controller
{

    public function index()
    {
        //
        $externalPolicies = ExternalPolicy::all();
        return view('admin.external_policies.index', compact('externalPolicies'));
    }

    public function create()
    {
        //
        return view('admin.external_policies.create');
    }


    public function store()
    {
        //
        $external = request()->validate(['title' => 'required']);

        $externalPolicy_file = '';

        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;
            //upload the file to a directory in Public folder
            $externalPolicy_file = $file->move('external_policies', $file_name);


        }
        $external['file'] = $externalPolicy_file;
        ExternalPolicy::create($external);

        return back()->with('message', 'policy guideline uploaded successfully');
    }

    /*  public function store()
      {
          //
          if (request()->hasfile('file')) {
              $uploadedFiles = request()->file('file');

              foreach ($uploadedFiles as $file) {

                  //get file original name
                  $name = $file->getClientOriginalName();

                  $fileNameWithoutExtension = pathinfo($name, PATHINFO_FILENAME);

                  //create a unique file name using the time variable plus the name
                  $file_name = time() . $name;

                  //upload the file to a directory in Public folder
                  $externalPolicy_file = $file->move('external_policies', $file_name);

                  $externalPolicy['file'] = $externalPolicy_file;
                  $externalPolicy['title'] = $fileNameWithoutExtension;

                  ExternalPolicy::create($externalPolicy);
              }
          }


          return back()->with('message', 'policy guideline uploaded successfully');
      }*/


    public function show(ExternalPolicy $externalPolicy)
    {
        //
        return view('admin.external_policies.show', compact('externalPolicy'));
    }


    public function edit(ExternalPolicy $externalPolicy)
    {
        //
        return view('admin.external_policies.edit', compact('externalPolicy'));
    }

    public function update(ExternalPolicy $externalPolicy)
    {
        //
        $title = request('title');
        $new_external_policy_file = '';
        $update = null;
        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $new_external_policy_file = $file->move('external_policies', $file_name);

            $old_path = $externalPolicy->file;
            if ($old_path != null) {
                unlink($old_path);
            }

            $update['file'] = $new_external_policy_file;

        }
        $update['title'] = $title;
        $externalPolicy->update($update);

        return back()->with('message', 'policy guideline updated successfully');
    }

    public function destroy(ExternalPolicy $externalPolicy)
    {
        //

        $externalPolicy->delete();

        return redirect('/admin/external_policy')->with('message', 'policy guideline deleted successfully');
    }

    public function published_unpublished(ExternalPolicy $externalPolicy)
    {
        //
        if ($externalPolicy->is_published == 0) {
            $externalPolicy->update([
                'is_published' => 1
            ]);
        } else {
            $externalPolicy->update([
                'is_published' => 0
            ]);
        }

        return redirect('/admin/external_policy')->with('message', 'Policy has been updated successfully');
    }
}

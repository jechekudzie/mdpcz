<?php

namespace App\Http\Controllers;


use App\Models\Committee;
use App\Models\PolicyCategory;
use App\Models\PolicyGuideline;
use App\Models\PolicyType;
use Illuminate\Http\Request;

class PolicyGuidelineController extends Controller
{

    public function internal_policies()
    {
        $internal_policies = PolicyGuideline::all();
        return view('admin.policy_guidelines.internal_policies', compact('internal_policies'));

    }

    public function index(Committee $committee)
    {
        //
        $policyGuidelines = PolicyGuideline::all();
        return view('admin.policy_guidelines.index', compact('committee'));
    }

    public function create(Committee $committee)
    {
        //
        return view('admin.policy_guidelines.create', compact('committee'));
    }

    public function store(Committee $committee)
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
                $policyGuideline_file = $file->move('policy_guidelines', $file_name);

                $policyGuideline['file'] = $policyGuideline_file;
                $policyGuideline['title'] = $fileNameWithoutExtension;

                $committee->add_policy_guidelines($policyGuideline);
            }
        }


        return back()->with('message', 'policy guideline uploaded successfully');
    }


    public function show(PolicyGuideline $policyGuideline)
    {
        //
        return view('admin.policy_guidelines.show', compact('policyGuideline'));
    }


    public function edit(PolicyGuideline $policyGuideline)
    {
        //
        return view('admin.policy_guidelines.edit', compact('policyGuideline'));
    }

    public function update(PolicyGuideline $policyGuideline)
    {
        //
        $title = request('title');
        $new_policy_guideline_file = '';
        $update = null;
        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $new_policy_guideline_file = $file->move('policy_guidelines', $file_name);

            $old_path = $policyGuideline->file;
            if ($old_path != null) {
                unlink($old_path);
            }

            $update['file'] = $new_policy_guideline_file;

        }
        $update['title'] = $title;
        $policyGuideline->update($update);

        return back()->with('message', 'policy guideline updated successfully');
    }

    public function destroy(PolicyGuideline $policyGuideline)
    {
        //
        $committee = $policyGuideline->committee;
        $policyGuideline->delete();

        return redirect('/admin/policy_guideline/' . $committee->id . '/index')->with('message', 'policy guideline deleted successfully');
    }

    public function published_unpublished(PolicyGuideline $policyGuideline)
    {
        //
        $committee = $policyGuideline->committee;
        if ($policyGuideline->is_published == 0) {
            $policyGuideline->update([
                'is_published' => 1
            ]);
        } else {
            $policyGuideline->update([
                'is_published' => 0
            ]);
        }

        return redirect('/admin/policy_guideline/' . $committee.'/index')->with('message', $policyGuideline . ' has been updated successfully');
    }
}

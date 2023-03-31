<?php

namespace App\Http\Controllers;


use App\Models\PolicyCategory;
use App\Models\PolicyGuideline;
use App\Models\PolicyType;
use Illuminate\Http\Request;

class PolicyGuidelineController extends Controller
{

    public function index()
    {
        //
        $policy_guidelines = PolicyGuideline::all();
        return view('admin.policy_guidelines.index', compact('policy_guidelines'));
    }

    public function create()
    {
        //
        $policy_categories = PolicyCategory::all();
        $policy_types = PolicyType::all();
        return view('admin.policy_guidelines.create', compact('policy_categories', 'policy_types'));
    }

    public function store(Request $request)
    {
        //
        $policy_guideline_file = '';
        $policy_guideline = request()->validate([
            'policy_category_id' => 'required',
            'policy_type_id' => 'required',
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
            $policy_guideline_file = $file->move('policy_guidelines', $file_name);
        }
        $policy_guideline['file'] = $policy_guideline_file;

        PolicyGuideline::create($policy_guideline);

        return back()->with('message', 'policy guideline uploaded successfully');
    }


    public function show(PolicyGuideline $policy_guideline)
    {
        //
        return view('admin.policy_guidelines.show', compact('policy_guideline'));
    }


    public function edit(PolicyGuideline $policy_guideline)
    {
        //
        $policy_categories = PolicyCategory::all();
        $policy_types = PolicyType::all();
        return view('admin.policy_guidelines.edit', compact('policy_guideline', 'policy_categories', 'policy_types'));
    }

    public function update(Request $request, PolicyGuideline $policy_guideline)
    {
        //

        $new_policy_guideline_file = '';
        $update = request()->validate([
            'policy_category_id' => 'required',
            'policy_type_id' => 'required',
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
            $new_policy_guideline_file = $file->move('policy_guidelines', $file_name);

            $old_path = $policy_guideline->file;
            if ($old_path != null) {
                unlink($old_path);
            }
            $update['file'] = $new_policy_guideline_file;

        }

        $policy_guideline->update($update);

        return back()->with('message', 'policy guideline updated successfully');
    }

    public function destroy(PolicyGuideline $policy_guideline)
    {
        //
        $policy_guideline->delete();

        return redirect('/admin/policy_guideline')->with('message', 'policy guideline deleted successfully');
    }
}

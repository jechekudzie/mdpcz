<?php

namespace App\Http\Controllers;


use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        //
        $complaints = Complaint::all();
        return view('admin.complaints.index', compact('complaints'));
    }

    public function create()
    {
        //
        return view('admin.complaints.create');
    }

    public function store(Request $request)
    {
        //

        $complaint = Complaint::create(request()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]));


        return back()->with('message', 'complaint submitted successfully');
    }


    public function show(Complaint $complaint)
    {
        //
        return view('admin.complaints.show', compact('complaint'));
    }


    public function edit(Complaint $complaint)
    {
        //
        return view('admin.complaints.edit', compact('complaint'));
    }

    public function update(Request $request, Complaint $complaint)
    {
        //
        $complaint->update(request()->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]));


        return back()->with('message', 'complaint updated successfully');
    }

    public function destroy(Complaint $complaint)
    {
        //
        $complaint->delete();

        return redirect('/admin/complaint')->with('message', 'complaint deleted successfully');
    }
}

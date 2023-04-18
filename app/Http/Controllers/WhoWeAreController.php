<?php

namespace App\Http\Controllers;


use App\Models\WhoWeAre;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{
    public function index()
    {
        //
        $who_we_ares = WhoWeAre::all();
        return view('admin.who_we_ares.index', compact('who_we_ares'));
    }

    public function create()
    {
        //
        return view('admin.who_we_ares.create');
    }

    public function store(Request $request)
    {
        //

        $who_we_are = WhoWeAre::create(request()->validate([
            'vision' => 'required',
            'mission' => 'required',
            'core_values' => 'required',
            'strategic_goals' => 'nullable',
        ]));


        return back()->with('message', 'who we are added successfully');
    }


    public function show(WhoWeAre $who_we_are)
    {
        //
        return view('admin.who_we_ares.show', compact('who_we_are'));
    }


    public function edit(WhoWeAre $who_we_are)
    {
        //
        return view('admin.who_we_ares.edit', compact('who_we_are'));
    }

    public function update(Request $request, WhoWeAre $who_we_are)
    {
        //
        $who_we_are->update(request()->validate([

            'vision' => 'required',
            'mission' => 'required',
            'core_values' => 'required',
            'strategic_goals' => 'nullable',

        ]));


        return back()->with('message', 'who we are updated successfully');
    }

    public function destroy(WhoWeAre $who_we_are)
    {
        //
        $who_we_are->delete();

        return redirect('/admin/who_we_are')->with('message', 'who we are deleted successfully');
    }
}

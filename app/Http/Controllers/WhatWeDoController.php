<?php

namespace App\Http\Controllers;


use App\Models\WhatWeDo;
use Illuminate\Http\Request;

class WhatWeDoController extends Controller
{
    public function index()
    {
        //
        $what_we_dos = WhatWeDo::all();
        return view('admin.what_we_dos.index', compact('what_we_dos'));
    }

    public function create()
    {
        //
        return view('admin.what_we_dos.create');
    }

    public function store(Request $request)
    {
        //

        $what_we_do = WhatWeDo::create(request()->validate([

            'council_functions' => 'required',
            'description' => 'required',
        ]));


        return back()->with('message', 'what_we_do added successfully');
    }


    public function show(WhatWeDo $what_we_do)
    {
        //
        return view('admin.what_we_dos.show', compact('what_we_do'));
    }


    public function edit(WhatWeDo $what_we_do)
    {
        //
        return view('admin.what_we_dos.edit', compact('what_we_do'));
    }

    public function update(Request $request, WhatWeDo $what_we_do)
    {
        //
        $what_we_do->update(request()->validate([

            'council_functions' => 'required',
            'description' => 'required',
        ]));


        return back()->with('message', 'what_we_do updated successfully');
    }

    public function destroy(WhatWeDo $what_we_do)
    {
        //
        $what_we_do->delete();

        return redirect('/admin/what_we_do')->with('message', 'what_we_do deleted successfully');
    }
}

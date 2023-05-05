<?php

namespace App\Http\Controllers;

use App\Models\ImportantLink;
use Illuminate\Http\Request;

class ImportantLinkController extends Controller
{
    public function index()
    {
        //
        $important_links = ImportantLink::all();
        return view('admin.important_links.index', compact('important_links'));
    }

    public function create()
    {
        //
        return view('admin.important_links.create');
    }

    public function store(Request $request)
    {
        //

        $important_link = ImportantLink::create(request()->validate([
            'title' => 'required',
            'url' => 'nullable',
        ]));


        return back()->with('message', 'important link added successfully');
    }


    public function show(ImportantLink $important_link)
    {
        //
        return view('admin.important_links.show', compact('important_link'));
    }


    public function edit(ImportantLink $important_link)
    {
        //
        return view('admin.important_links.edit', compact('important_link'));
    }

    public function update(Request $request, ImportantLink $important_link)
    {
        //
        $important_link->update(request()->validate([
            'title' => 'required',
            'url' => 'required'
        ]));


        return back()->with('message', 'important link updated successfully');
    }

    public function destroy(ImportantLink $important_link)
    {
        //
        $important_link->delete();

        return redirect('/admin/important_link')->with('message', 'important link deleted successfully');
    }
}

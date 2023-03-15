<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        //
        $history = History::find(1);
        return view('admin.history.index', compact('history'));
    }

    public function create()
    {
        //
        return view('admin.history.create');
    }

    public function store(Request $request)
    {
        //

        $history = History::create(request()->validate([
            'description' => 'required',
        ]));


        return back()->with('message', 'history added successfully');
    }


    public function show(History $history)
    {
        //
        return view('admin.history.show', compact('history'));
    }


    public function edit(History $history)
    {
        //
        return view('admin.history.edit', compact('history'));
    }

    public function update(Request $request, History $history)
    {
        //
        $history->update(request()->validate([

            'description' => 'required',
        ]));


        return back()->with('message', 'history updated successfully');
    }

    public function destroy(History $history)
    {
        //
        $history->delete();

        return redirect('/admin/our_history')->with('message', 'history deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;


use App\Models\StrategicGoal;
use Illuminate\Http\Request;

class StrategicGoalController extends Controller
{
    public function index()
    {
        //
        $strategic_goals = StrategicGoal::all();
        return view('admin.strategic_goals.index', compact('strategic_goals'));
    }

    public function create()
    {
        //
        return view('admin.strategic_goals.create');
    }

    public function store(Request $request)
    {
        //

        $strategic_goal = StrategicGoal::create(request()->validate([
            'period' => 'required',
            'description' => 'required',
        ]));


        return back()->with('message', 'strategic goal added successfully');
    }


    public function show(StrategicGoal $strategic_goal)
    {
        //
        return view('admin.strategic_goals.show', compact('strategic_goal'));
    }


    public function edit(StrategicGoal $strategic_goal)
    {
        //
        return view('admin.strategic_goals.edit', compact('strategic_goal'));
    }

    public function update(Request $request, StrategicGoal $strategic_goal)
    {
        //
        $strategic_goal->update(request()->validate([
            'period' => 'required',
            'description' => 'required',
        ]));


        return back()->with('message', 'strategic_goal updated successfully');
    }

    public function destroy(StrategicGoal $strategic_goal)
    {
        //
        $strategic_goal->delete();

        return redirect('/admin/strategic_goal')->with('message', 'strategic goal deleted successfully');
    }
}

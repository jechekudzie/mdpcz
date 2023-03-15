<?php

namespace App\Http\Controllers;

use App\Models\VisionAndMission;
use Illuminate\Http\Request;

class VisionAndMissionController extends Controller
{
    public function index()
    {
        //
        $vision_missions = VisionAndMission::all();
        return view('admin.vision_missions.index', compact('vision_missions'));
    }

    public function create()
    {
        //
        return view('admin.vision_missions.create');
    }

    public function store(Request $request)
    {
        //

        $vision_and_mission = VisionAndMission::create(request()->validate([
            'vision' => 'required',
            'mission' => 'required',
        ]));


        return back()->with('message', 'vision_and_mission added successfully');
    }


    public function show(VisionAndMission $vision_and_mission)
    {
        //
        return view('admin.vision_missions.show', compact('vision_and_mission'));
    }


    public function edit(VisionAndMission $vision_and_mission)
    {
        //
        return view('admin.vision_missions.edit', compact('vision_and_mission'));
    }

    public function update(Request $request, VisionAndMission $vision_and_mission)
    {
        //
        $vision_and_mission->update(request()->validate([
            'vision' => 'required',
            'mission' => 'required',
        ]));


        return back()->with('message', 'vision_and_mission updated successfully');
    }

    public function destroy(VisionAndMission $vision_and_mission)
    {
        //
        $vision_and_mission->delete();

        return redirect('/admin/vision_and_mission')->with('message', 'vision_and_mission deleted successfully');
    }
}

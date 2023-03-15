<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        //
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        //
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        //
        $event_file = '';
        $event = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'venue' => 'required',
            'date' => 'required',
        ]);

        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $event_file = $file->move('events', $file_name);
        }
        $event['file'] = $event_file;

        Event::create($event);

        return back()->with('message', 'act uploaded successfully');
    }


    public function show(Event $event)
    {
        //
        return view('admin.events.show', compact('event'));
    }


    public function edit(Event $event)
    {
        //
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        //

        $new_event_file = '';
        $update = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'venue' => 'required',
            'date' => 'required',
        ]);


        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $new_event_file = $file->move('events', $file_name);

            $old_path = $event->file;
            if ($old_path != null) {
                unlink($old_path);
            }
        }

        $update['file'] = $new_event_file;

        $event->update($update);

        return back()->with('message', 'event updated successfully');
    }

    public function destroy(Event $event)
    {
        //
        $event->delete();

        return redirect('/admin/event')->with('message', 'event deleted successfully');
    }
}

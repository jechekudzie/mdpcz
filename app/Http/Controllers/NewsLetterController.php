<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;

use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index()
    {
        //
        $newsletters = NewsLetter::all();
        return view('admin.newsletters.index', compact('newsletters'));
    }

    public function create()
    {
        //
        return view('admin.newsletters.create');
    }

    public function store(Request $request)
    {
        //
        $newsletter = request()->validate([
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
            $newsletter_file = $file->move('newsletters', $file_name);

            $newsletter['file'] = $newsletter_file;
        }


        NewsLetter::create($newsletter);

        return back()->with('message', 'newsletter uploaded successfully');
    }


    public function show(NewsLetter $newsletter)
    {
        //
        return view('admin.newsletters.show', compact('newsletter'));
    }


    public function edit(NewsLetter $newsletter)
    {
        //
        return view('admin.newsletters.edit', compact('newsletter'));
    }

    public function update(Request $request, NewsLetter $newsletter)
    {

        //$new_newsletter_file = '';
        $update = request()->validate([
            'title' => 'required',
        ]);

        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //get the old file path before you update
            $old_path = $newsletter->file;

            //upload the file to a directory in Public folder
            $new_newsletter_file = $file->move('newsletters', $file_name);

            if ($old_path != null) {
                unlink($old_path);
            }

            $update['file'] = $new_newsletter_file;

        }


        $newsletter->update($update);

        return back()->with('message', 'newsletter updated successfully');
    }

    public function destroy(NewsLetter $newsletter)
    {
        //
        $newsletter->delete();

        return redirect('/admin/newsletter')->with('message', 'newsletter deleted successfully');
    }

    public function published_unpublished(NewsLetter $newsletter)
    {
        //

        if ($newsletter->is_published == 0) {
            $newsletter->update([
                'is_published' => 1
            ]);
        } else {
            $newsletter->update([
                'is_published' => 0
            ]);
        }

        return redirect('/admin/newsletter')->with('message',  'Newsletter has been updated successfully');
    }
}

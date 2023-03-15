<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        //
        $downloads = Download::all();
        return view('admin.downloads.index', compact('downloads'));
    }

    public function create()
    {
        //
        return view('admin.downloads.create');
    }

    public function store(Request $request)
    {
        //
        $download_file = '';
        $download = request()->validate([
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
            $download_file = $file->move('downloads', $file_name);
        }
        $download['file'] = $download_file;

        Download::create($download);

        return back()->with('message', 'act uploaded successfully');
    }


    public function show(Download $download)
    {
        //
        return view('admin.downloads.show', compact('download'));
    }


    public function edit(Download $download)
    {
        //
        return view('admin.downloads.edit', compact('download'));
    }

    public function update(Request $request, Download $download)
    {
        //

        $new_download_file = '';
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

            //upload the file to a directory in Public folder
            $new_download_file = $file->move('downloads', $file_name);

            $old_path = $download->file;
            if ($old_path != null) {
                unlink($old_path);
            }
        }

        $update['file'] = $new_download_file;

        $download->update($update);

        return back()->with('message', 'download updated successfully');
    }

    public function destroy(Download $download)
    {
        //
        $download->delete();

        return redirect('/admin/download')->with('message', 'download deleted successfully');
    }
}

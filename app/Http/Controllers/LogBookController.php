<?php

namespace App\Http\Controllers;

use App\Models\LogBook;
use Illuminate\Http\Request;

class LogBookController extends Controller
{
    public function index()
    {
        //
        $log_books = LogBook::all();
        return view('admin.log_books.index', compact('log_books'));
    }

    public function create()
    {
        //
        return view('admin.log_books.create');
    }

    public function store(Request $request)
    {
        //
        $log_book = request()->validate([
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
            $log_book_file = $file->move('log_books', $file_name);

            $log_book['file'] = $log_book_file;
        }


        LogBook::create($log_book);

        return back()->with('message', 'log book uploaded successfully');
    }


    public function show(LogBook $log_book)
    {
        //
        return view('admin.log_books.show', compact('log_book'));
    }


    public function edit(LogBook $log_book)
    {
        //
        return view('admin.log_books.edit', compact('log_book'));
    }

    public function update(Request $request, LogBook $log_book)
    {

        //$new_log_book_file = '';
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
            $old_path = $log_book->file;

            //upload the file to a directory in Public folder
            $new_log_book_file = $file->move('log_books', $file_name);

            if ($old_path != null) {
                unlink($old_path);
            }

            $update['file'] = $new_log_book_file;

        }


        $log_book->update($update);

        return back()->with('message', 'log book updated successfully');
    }

    public function destroy(LogBook $log_book)
    {
        //
        $log_book->delete();

        return redirect('/admin/log_book')->with('message', 'log book deleted successfully');
    }
}

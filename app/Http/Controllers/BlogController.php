<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        //
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        //
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        //
        $blog = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'nullable',
        ]);

        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //upload the file to a directory in Public folder
            $blog_file = $file->move('blogs', $file_name);

            $blog['file'] = $blog_file;
        }


        Blog::create($blog);

        return back()->with('message', 'blog uploaded successfully');
    }


    public function show(Blog $blog)
    {
        //
        return view('admin.blogs.show', compact('blog'));
    }


    public function edit(Blog $blog)
    {
        //
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {

        //$new_blog_file = '';
        $update = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'nullable',
        ]);

        if (request()->hasfile('file')) {
            //get the file field data and name field from form submission
            $file = request()->file('file');

            //get file original name
            $name = $file->getClientOriginalName();

            //create a unique file name using the time variable plus the name
            $file_name = time() . $name;

            //get the old file path before you update
            $old_path = $blog->file;

            //upload the file to a directory in Public folder
            $new_blog_file = $file->move('blogs', $file_name);

            if ($old_path != null) {
                unlink($old_path);
            }

            $update['file'] = $new_blog_file;

        }


        $blog->update($update);

        return back()->with('message', 'blog updated successfully');
    }

    public function destroy(Blog $blog)
    {
        //
        $blog->delete();

        return redirect('/admin/blog')->with('message', 'blog deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'asc')->paginate(5);
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request-> validate([
            'title' => 'required',
            'author' => 'required',
            'date' => 'required',
            'desc' => 'nullable',
            'main_image' => 'required',
            'status' => 'required'
        ]);

        if ($request->hasFile('main_image')) {

            $file = $request->main_image;

            $file_name = $file->getClientOriginalName();

            if (!file_exists(public_path('images/blog')))
                @mkdir(public_path('images/blog'));


            $file->move(public_path('images/blog'), $file_name);

            $request->merge([
                'image' => $file_name
            ]);
        }

        Blog::create($request->post());
        return redirect()->route('blog.index')->with('success','Blog has been created sucessfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= [];
        $data['row'] = Blog::find($id);
        return view('admin.blog.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request-> validate([
            'title' => 'required',
            'author' => 'required',
            'date' => 'required',
            'desc' => 'nullable',
            'main_image' => 'required',
            'status' => 'required'
        ]);

        if ($request->hasFile('main_image')) {

            $file = $request->main_image;

            $file_name = $file->getClientOriginalName();

            if (!file_exists(public_path('images/blog')))
                @mkdir(public_path('images/blog'));


            $file->move(public_path('images/blog'), $file_name);

            $request->merge([
                'image' => $file_name
            ]);

            if(file_exists(public_path('images/blog/'.$blog->image))){
                @unlink(public_path('images/blog/'.$blog->image));
            }
        }

        $blog->fill($request->all())->save();

        return redirect()->route('blog.index')->with('success', 'Blog has been updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if(file_exists(public_path('images/blog/'.$blog->image))){
            @unlink(public_path('images/blog/'.$blog->image));
        }

        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog has been deleted Successfully');
    }
}

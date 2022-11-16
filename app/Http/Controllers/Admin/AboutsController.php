<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\AboutUs;
use Illuminate\Http\Request;

class AboutsController extends Controller
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
        $abouts = AboutUs::orderBy('id','asc')
            ->paginate(5);
        return view('admin.about.index' , compact(var_name: 'abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'status' => 'required'
        ]);

        AboutUs::create($request->post());
        return redirect()->route('about.index')->with('success','AboutUs has been created sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\AboutUs  $about
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\AboutUs  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= [];
        $data['row'] = AboutUs::find($id);
        return view('admin.about.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\AboutUs  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUs $about)
    {
        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'status' => 'required'
        ]);

        $about->fill($request->all())->save();

        return redirect()->route('about.index')->with('success', 'AboutUs has been updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\AboutUs  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUs $about)
    {
        if(file_exists(public_path('images/'.$about->photo))){
            @unlink(public_path('images/'.$about->photo));
        }

        $about->delete();
        return redirect()->route('about.index')->with('success', 'AboutUs has been deleted Successfully');
    }
}

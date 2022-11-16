<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
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
        $sliders = Slider::orderBy('id','asc')
            ->paginate(5);
        return view('admin.slider.index' , compact(var_name: 'sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'alt_text' => 'required',
            'main_photo' => 'required',
            'status' => 'required'
        ]);

        if ($request->hasFile('main_photo')) {

            $file = $request->main_photo;

            $file_name = $file->getClientOriginalName();

            if (!file_exists(public_path('images/slider')))
                @mkdir(public_path('images/slider'));


            $file->move(public_path('images/slider'), $file_name);

            $request->merge([
                'photo' => $file_name
            ]);
        }

        Slider::create($request->post());
        return redirect()->route('slider.index')->with('success','Slider has been created sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= [];
        $data['row'] = Slider::find($id);
        return view('admin.slider.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required',
            'alt_text' => 'required',
            'main_photo' => 'required',
            'status' => 'required'
        ]);

        if ($request->hasFile('main_photo')) {

            $file = $request->main_photo;

            $file_name = $file->getClientOriginalName();

            if (!file_exists(public_path('images/slider')))
                @mkdir(public_path('images/slider'));


            $file->move(public_path('images/slider'), $file_name);

            $request->merge([
                'photo' => $file_name
            ]);

            if(file_exists(public_path('images/slider/'.$slider->photo))){
                @unlink(public_path('images/slider/'.$slider->photo));
            }
        }

        $slider->fill($request->all())->save();

        return redirect()->route('slider.index')->with('success', 'Slider has been updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if(file_exists(public_path('images/slider/'.$slider->photo))){
            @unlink(public_path('images/slider/'.$slider->photo));
        }

        $slider->delete();
        return redirect()->route('slider.index')->with('success', 'Slider has been deleted Successfully');
    }
}

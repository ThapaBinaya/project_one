<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus= Menu::orderBy('id', 'asc')-> paginate(5);
        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'menu1' => 'required',
            'menu2' => 'required',
            'menu3' => 'required'
        ]);

        Menu::create($request->post());
        return redirect()->route('menu.index')->with('success','Menu has been created sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data= [];
        $data['row']= Menu::find($id);
        return view('admin.menu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $request -> validate([
            'menu1' => 'required',
            'menu2' => 'required',
            'menu3' => 'required'
        ]);

        $menu->fill($request->all())->save();
        return redirect()->route('menu.index')->with('success', 'Menu has been updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Menu has been deleted sucessfully');
    }
}

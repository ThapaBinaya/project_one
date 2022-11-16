<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function edit()
    {
        $data= [];
        $data['row'] = SiteSetting::first() ?? null;
        return view('admin.siteSetting.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteSetting $siteSetting)
    {
        $validated = $request->validate([
            'title' => 'required',
            'alias' => 'required',
            'main_logo'  => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'tiktok' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);
//        dd($validated);
        $siteSetting = SiteSetting::first();

        if ($request->hasFile('main_logo')) {

            $file = $request->main_logo;

            $file_name = $file->getClientOriginalName();

            if (!file_exists(public_path('images/siteSetting')))
                @mkdir(public_path('images/siteSetting'));


            $file->move(public_path('images/siteSetting'), $file_name);

//            $request->merge(['logo' => $file_name]);
            $validated['logo'] = $file_name;

            if(file_exists(public_path('images/siteSetting/'.$siteSetting->logo))){
                @unlink(public_path('images/siteSetting/'.$siteSetting->logo));
            }
        }
        if ($siteSetting){
            $siteSetting ->update($validated);
        }else{
            SiteSetting:: create($validated);
        }

        $siteSetting->fill($validated)->save();



        return redirect()->route('siteSetting.edit')->with('success', 'AboutUs has been updated sucessfully');
    }
}

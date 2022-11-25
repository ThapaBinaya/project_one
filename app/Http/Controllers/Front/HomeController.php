<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\AboutUs;
use App\Models\Admin\Blog;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data = [];
        $data['slider'] = Slider::latest()
            ->limit(3)
            ->get();
        $data['about'] = AboutUs::latest()
            ->limit(1)
            ->get();

        $data['blog'] = Blog::latest()

            ->limit(3)
            ->get();

        return view('frontend.index', compact('data'));
    }

    public function blog()
    {
        $data = [];
        $data['blog'] = Blog::active() ->get();

        return view('frontend.blog', compact('data'));
    }

    public function aboutUs()
    {
        $data = [];
        $data['aboutUs'] = AboutUs::active() ->get();

        return view('frontend.aboutUs', compact('data'));
    }

    public function contact()
    {
        $data = [];
        $data['contact'] = AboutUs::active() ->get();

        return view('frontend.aboutUS', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->post());
        return redirect()->route('contact.index')->with('success','Contact has been created sucessfully');
    }
}

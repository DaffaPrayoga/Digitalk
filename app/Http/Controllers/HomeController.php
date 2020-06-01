<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Gadget;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function forum_page()
    {
        $brands = Brand::all();
        return view('forum', compact('brands'));
    }

    public function brand_page($name)
    {
        $brands = Brand::where('name', $name)->first();
        if (empty($brands)) {
            return redirect()->route('forum');
        } else {
            $data = Gadget::where('brand_id', $brands->id)->orderBy('created_at', 'desc')->get();
        }
        return view('brand', compact('brands', 'data'));
    }

    public function gadget_page($name, $slug)
    {
        $brands = Brand::where('name', $name)->first();
        $gadget = Gadget::where('slug', $slug)->first();
        if (empty($brands)) {
            return redirect()->route('forum');
        } else {
            if (empty($gadget)) {
                return redirect()->route('brand_home', $brands->name);
            } else {
                return view('gadget', compact('brands', 'gadget'));
            }
        }
    }
}

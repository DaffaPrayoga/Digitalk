<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Gadget;
use App\Thread;
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
            $threads = Thread::where([
                ['brand_id', $brands->id],
                ['show_status', 0],
            ])->orderBy('created_at', 'desc')->paginate(10);
        }
        return view('brand', compact('brands', 'data', 'threads'));
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
                $threads = Thread::where([
                    ['brand_id', $brands->id],
                    ['gadget_id', $gadget->id],
                    ['show_status', 0],
                ])->orderBy('created_at', 'desc')->paginate(10);
                return view('gadget', compact('brands', 'gadget', 'threads'));
            }
        }
    }

    public function thread_detail_page($thread_key)
    {
        $data = Thread::where('thread_key', $thread_key)->first();
        return view('thread_detail', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Gadget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GadgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gadget::orderBy('created_at','desc')->get();
        return view('admin.gadget.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::orderBy('name')->get();
        return view('admin.gadget.add',compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $new = new Gadget();
            $new->name = $request['name'];
            $new->brand_id = $request['brand_id'];
            $new->price = $request['price'];
            $new->year_released = $request['year_released'];
            $new->screen_size = $request['screen_size'];
            $new->resolution = $request['resolution'];
            $new->camera_pixel = $request['camera_pixel'];
            $new->ram = $request['ram'];
            $new->chip = $request['chip'];
            $new->battery = $request['battery'];
            $new->os = $request['os'];
            $new->storage = $request['storage'];
            if (!empty($request->file('image'))) {
                $file = $request->file('image');
                $fileName = $file->getClientOriginalName();
                $namafile = "gadget_" . $fileName;
                $request->file('image')->move("img/gadgets/", $namafile);
                $new->image = $namafile;
            }
            $new->save();

            DB::commit();
            return redirect()->route('gadgets.index')->with('alert', 'Data saved');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('gadgets.index')->with('whythehell', 'Data fail to save :(');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Gadget::find($id);
        $brand = Brand::orderBy('name')->get();
        return view('admin.gadget.edit', compact('data','brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $update = Gadget::find($id);
            $update->name = $request['name'];
            if (!empty($request->file('image'))) {
                $file = $request->file('image');
                $fileName = $file->getClientOriginalName();
                $namafile = "gadget_" . $fileName;
                $request->file('image')->move("img/gadgets/", $namafile);
                $update->image = $namafile;
            }
            $update->update();

            DB::commit();
            return redirect()->route('gadgets.index')->with('alert', 'Data updated');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('gadgets.index')->with('whythehell', 'Data fail to update :(');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Gadget::find($id);
        $delete->delete();

        return redirect()->route('gadgets.index')->with('alert', 'Data deleted!');
    }
}

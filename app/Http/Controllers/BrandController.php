<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Brand::orderBy('created_at','desc')->get();
        return view('admin.brand.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.add');
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
            $new = new Brand();
            $new->name = $request['name'];
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $namafile = "brand_" . $fileName;
            $request->file('image')->move("img/brand_logo/", $namafile);
            $new->image = $namafile;
            $new->save();

            DB::commit();
            return redirect()->route('brands.index')->with('alert', 'Data saved');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('brands.index')->with('whythehell', 'Data fail to save :(');
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
        $data = Brand::find($id);
        return view('admin.brand.edit', compact('data'));
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
            $update = Brand::find($id);
            $update->name = $request['name'];
            if (!empty($request->file('image'))) {
                $file = $request->file('image');
                $fileName = $file->getClientOriginalName();
                $namafile = "brand_" . $fileName;
                $request->file('image')->move("img/brand_logo/", $namafile);
                $update->image = $namafile;
            }
            $update->update();

            DB::commit();
            return redirect()->route('brands.index')->with('alert', 'Data updated');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('brands.index')->with('whythehell', 'Data fail to update :(');
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
        $delete = Brand::find($id);
        $delete->delete();

        return redirect()->route('brands.index')->with('alert', 'Data deleted!');
    }
}
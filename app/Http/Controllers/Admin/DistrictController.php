<?php

namespace App\Http\Controllers\Admin;

use App\District;
use App\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $area = Area::find($id);
        return view('district.index',compact('area'));
    }

    /**
     * Print a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {
        $area = Area::find($id);
        return view('district.print',compact('area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('district.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $district = District::create([
            'name' => $request->name,
            'area_id' => $request->area_id,
        ]);

        if($district){
            return redirect()->route('district.index',$request->area_id);
        }else{
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $district = District::find($id);
        return view('district.edit',compact('district'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $district = District::find($request->id);
        $district->update([
            'name' => $request->name,
        ]);

        if($district){
            return redirect()->route('district.index',$request->area_id);
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $district = District::find($id);
        $district->delete();
        if($district){
            return redirect()->route('district.index',$district->area_id);
        }else{
            return redirect()->back();
        }
    }
}

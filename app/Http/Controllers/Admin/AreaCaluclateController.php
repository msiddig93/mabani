<?php

namespace App\Http\Controllers\Admin;

use App\AreaCaluclate;
use App\Licence;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AreaCaluclateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $licence = Licence::find($id);
        return view("area_calculate.create",compact('licence'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AreaCaluclate::create($request->except('_token'));
        return redirect()->route('licence.manage',$request->licence_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AreaCaluclate  $areaCaluclate
     * @return \Illuminate\Http\Response
     */
    public function show(AreaCaluclate $areaCaluclate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AreaCaluclate  $areaCaluclate
     * @return \Illuminate\Http\Response
     */
    public function edit(AreaCaluclate $areaCaluclate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AreaCaluclate  $areaCaluclate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AreaCaluclate $areaCaluclate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AreaCaluclate  $areaCaluclate
     * @return \Illuminate\Http\Response
     */
    public function destroy(AreaCaluclate $areaCaluclate)
    {
        //
    }
}

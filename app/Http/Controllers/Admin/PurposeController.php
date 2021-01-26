<?php

namespace App\Http\Controllers\Admin;

use App\Purpose;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purposes = Purpose::all();
        return view('purpose.index', compact('purposes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('purpose.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purpose = Purpose::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        if($purpose){
            return redirect()->route('purpose.index');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function show(Purpose $purpose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purpose = Purpose::find($id);
        return view('purpose.edit', compact('purpose'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purpose $purpose)
    {
        $purpose = Purpose::find($request->id);
        $purpose->update([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        if($purpose){
            return redirect()->route('purpose.index');
        }else{
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Purpose  $purpose
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try{
            $purpose = Purpose::find($id);
            $purpose->delete();

            return redirect()->route('purpose.index');
        }catch(Exciption $ex){
            return redirect()->back();
        }

    }
}

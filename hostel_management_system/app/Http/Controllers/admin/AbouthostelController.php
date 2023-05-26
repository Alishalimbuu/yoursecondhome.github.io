<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Abouthostel;
use Illuminate\Http\Request;

class AbouthostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouthostel = Abouthostel::first();
        return view('admin.abouthostel.index', compact('abouthostel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abouthostel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $abouthostel = new Abouthostel();
        $abouthostel->title = $request->title;
        $abouthostel->description = $request->description;
        uploadImage($request, $abouthostel, 'image');
        $abouthostel->save();
        return redirect()->route('abouthostel.index');
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
        $abouthostel = Abouthostel::find($id);
        return view('admin.abouthostel.edit', compact('abouthostel'));
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
        $abouthostel = Abouthostel::find($id);
        $abouthostel->title = $request->title;
        $abouthostel->description = $request->description;
        uploadImage($request, $abouthostel, 'image');
        $abouthostel->update();
        return redirect()->route('abouthostel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abouthostel = Abouthostel::find($id);
        $abouthostel->delete();
        return redirect()->route('abouthostel.index');
    }
}

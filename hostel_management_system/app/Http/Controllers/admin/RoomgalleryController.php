<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Roomgallery;
use Illuminate\Http\Request;

class RoomgalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomgallery = Roomgallery::all();
        return view('admin.roomgallery.index', compact('roomgallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roomgallery.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roomgallery = new Roomgallery();
        uploadImage($request, $roomgallery, 'image');
        $roomgallery->save();
        return redirect()->route('roomgallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomgallery = Roomgallery::find($id);
        return view('admin.roomgallery.edit', compact('roomgallery'));
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
        $roomgallery = Roomgallery::find($id);
        uploadImage($request, $roomgallery, 'image');
        $roomgallery->update();
        return redirect()->route('roomgallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomgallery = Roomgallery::find($id);
        $roomgallery->delete();
        return redirect()->route('roomgallery.index');
    
    }
}

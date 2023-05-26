<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bed;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::all();
        return view('admin.booking.index', compact('booking'));
    }

    public function edit($id)
    {
        $booking = Booking::find($id);
        $rooms = Room::all();
        $beds = Bed::all();
        return view('admin.booking.edit', compact('booking','rooms','beds'));
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        $booking->name = $request->name;
        $booking->address = $request->address;
        $booking->contact = $request->contact;
        $booking->email = $request->email;
        $booking->room_id = $request->room_id;
        $booking->bed_id = $request->bed_id;
        $booking->update();
        return redirect()->route('booking.index');
    }


}

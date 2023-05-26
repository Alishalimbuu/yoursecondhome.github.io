<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Room;
use App\Notifications\BookingNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Booking::all();
        return response()->json($book);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = Room::where('id', $request->room)->first();
        // return $room;
        $book = new Booking();
        $book->name = $request->name;
        $book->address = $request->address;
        $book->contact = $request->contact;
        $book->email = $request->email;
        $book->room_id = $request->room;
        $book->bed_id = $request->bed;
        $book->save();


        $room->beds()->syncwithoutDetaching([$request->bed => ['status' => 'not available']]);
        $roomName = $book->room->name;
        $bedName = $book->bed->name;
        $data = [
            "message" => "Dear $request->name, your booking has been confirm. You have booked $roomName, $bedName. Note: You have to bring this booking message while entering hostel."
        ];
        Notification::send($book, new BookingNotification($data));
        return response()->json(['message' => 'Room Booked successfully']);
    }
}

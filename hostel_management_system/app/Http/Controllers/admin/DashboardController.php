<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        $user = User::all();
        $totalUser = $user->count();
        $room = Room::all();
        $totalRoom = $room->count();
        $visitor = Visitor::all();
        $totalVisitor = $visitor->count();
        $booking = Booking::all();
        $totalBooking = $booking->count();
        $students = User::all();
        return view('admin.dashboard',compact('totalUser','totalRoom','totalVisitor','totalBooking','students'));
    }
}

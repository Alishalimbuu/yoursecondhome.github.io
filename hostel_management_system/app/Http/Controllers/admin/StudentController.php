<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Bed;
use App\Models\Room;
use App\Models\Student;
use App\Models\User;
use App\Notifications\OtpNotification;
use App\Notifications\PaymentNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::all();
        return view('admin.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $beds = Bed::all();
        $rooms = Room::all();
        return view('admin.student.create', compact('beds', 'rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'email'=>'required|unique:users,email',
        ]);

        $student = new User();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->address = $request->address;
        $student->contact = $request->contact;
        $student->email = $request->email;
        $student->room_id = $request->room_id;
        $student->bed_id = $request->bed_id;
        $student->dob = $request->parent;
        $otp = rand(111111, 999999);
        $student->password = Hash::make($otp);
        uploadImage($request, $student, 'photo');
        $student->save();

        $data = [
            "message" => "Dear $request->first_name, Your temporary password is $otp, please don't share your password with others. You can change your password later if you want to."
        ];
        Notification::send($student, new OtpNotification($data));
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = User::find($id);
        $data = [
            "subject" => 'Payment Reminder - Clear Dues',
            "line1" => "Dear $student->first_name",
            "line2" => "I hope this email finds you well. I am writing to remind you about the outstanding payment of hostel for the monthly fees. As per our records, your dues for this month is still pending.",
            "line3" => "We kindly request you to clear the dues as soon as possible. It is important to note that unpaid dues can result in the suspension of your activities, including accessing course materials, participating in classes, and receiving grades. We would like to avoid any inconvenience to you and ensure that you have uninterrupted access to your courses."
        ];
        Notification::send($student, new PaymentNotification($data));
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = User::find($id);
        $rooms = Room::all();
        $beds = Bed::all();
        return view('admin.student.edit', compact('student', 'rooms', 'beds'));
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
        $request->validate([
            'email' => 'required'
        ]);
        $student = User::find($id);
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->address = $request->address;
        $student->contact = $request->contact;
        $student->email = $request->email;
        $student->room_id = $request->room_id;
        $student->bed_id = $request->bed_id;
        $student->dob = $request->parent;
        $student->status = $request->status;
        uploadImage($request, $student, 'photo');
        $student->update();
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

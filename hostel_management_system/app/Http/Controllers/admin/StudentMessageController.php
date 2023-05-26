<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Studentmessage;
use App\Models\User;
use App\Notifications\EmailNotification;
use App\Notifications\MessageNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class StudentMessageController extends Controller
{
    public function index()
    {
        $studentmessage = Studentmessage::all();
        return view('admin.studentmessage.index', compact('studentmessage'));
    }
    public function show($id)
    {
        $studentmessage = Studentmessage::find($id);
        return view('admin.studentmessage.show', compact('studentmessage'));
    }

    public function update(Request $request, $id)
    {
        $message = Studentmessage::find($id);
        $message->status = $request->status;
        $message->update();
        // return $message;
        $user = User::where('id', $message->user_id)->first();
        $data = [
            "message" => "Dear $user->first_name, your request has been $request->status"
        ];

        Notification::send($user, new EmailNotification($data));
        return redirect()->route('studentmessage.index');
    }
}

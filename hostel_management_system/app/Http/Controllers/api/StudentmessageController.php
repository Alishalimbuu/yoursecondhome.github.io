<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Studentmessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentmessageController extends Controller
{
    public function index()
    {
        $studentmessage = Studentmessage::all();
        return response()->json($studentmessage);
    }

    public function store(Request $request)
    {
        $studentmessage = new Studentmessage();
        $studentmessage->user_id = Auth::user()->id;
        $studentmessage->description = $request->description;
        $studentmessage->save();

        return response()->json(['message' => 'Message sent successfully']);
    }
}

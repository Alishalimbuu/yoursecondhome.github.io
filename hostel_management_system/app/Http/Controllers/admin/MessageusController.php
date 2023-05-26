<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageusController extends Controller
{
    public function index()
    {
        $message = Message::all();
        return view('admin.message.index', compact('message'));
    }

    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();
        return redirect()->route('message.index');
    }
}

<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Uuid;

class ChatController extends Controller
{

    public function index()
    {
        if (Auth::user()) {
            return view('chat', ['data' => Message::where(['user_id' => Auth::user()->id])->get()]);
        }
        return view('chat', ['data' => []]);
    }
    public function create()
    {

        dd(Auth::user()->id);
    }

    public function store(Request $request)
    {
        $message = new Message;

        if ($files = $request->file('file')) {
            $uuid = Uuid::generate()->string;
            $path = $uuid . "." . $request->file('file')->getClientOriginalExtension();
            $desti = 'chatfiles/';
            $files->move($desti, $path);
            $message->img = $path;
        }

        $message->writter = Auth::user()->name;
        $message->body = $request->body;
        $message->user_id = Auth::user()->id;
        $res = $message->save();

        return response()->json([
            'message' => 'User status updated successfully',
            'data' => $res
        ]);
    }
}

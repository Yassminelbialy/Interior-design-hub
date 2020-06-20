<?php

namespace App\Http\Controllers\CompanyAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Message;
use Auth;
use Uuid;
class ChatAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        $users = User::where('id', '!=', auth()->id())->get();

        $chatData = Message::where('user_id', '=', $id)->get();
        // dd($id);
        return view('manager.adminChat', [
            'users' => $users, 'data' => [],
            'chatData' => $chatData,
            'userID' => $id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json([
            'message' => $request->all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $message->writter = 'admin';
        $message->body = $request->body;
        $message->user_id = $request->writter;
        $message->type = 'admin';

        $res = $message->save();

        return response()->json([
            'message' => 'User status updated successfully',
            'data' => $res
        ]);
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
        //
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
        //
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

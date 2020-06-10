<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Uuid ;
class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user())
        {
            return view('chat',['data'=>Message::where(['user_id'=>Auth::user()->id])->get()]);
        }
        return view('chat',['data'=>[]]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        dd(Auth::user()->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=new Message;

        if ($files = $request->file('file'))
        {
                        $uuid =Uuid::generate()->string;
                        $path=$uuid.".".$request->file('file')->getClientOriginalExtension();
                        $desti='chatfiles/';
                        $files->move($desti,$path);
                        $message->img=$path;

        }

        $message->writter=Auth::user()->name;
        $message->body=$request->body;
        $message->user_id=Auth::user()->id;
        $res=$message->save();

         return response()->json(['message' => 'User status updated successfully',
         'data'=>$res]);
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

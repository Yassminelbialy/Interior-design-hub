<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fbpost;

class FacebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        return view('manager.facebook' , ['dataOfPosts' => Fbpost::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.addImage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $imgInstance = new Fbpost();
        $imgInstance->fbLink = $request->linkinput;
        if($request->hasfile('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/fbimages' , $fileName);
            $imgInstance->image = $fileName;
        }else{
            return $request;
            $imgInstance->image = '';
        }

        $imgInstance->save();

        return redirect('/manager/fbPosts');
       
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
        return view('manager.facebookEdit',['facebppkImage' => Fbpost::find($id)]);
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
        
        $imgInstance = Fbpost::find($id);
       
        $imgInstance->fbLink = $request->fbLink;
        if($request->hasfile('image'))
        {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/fbimages' , $fileName);
            $imgInstance->image = $fileName; 
        }
       
        $imgInstance->save();

        return redirect('/manager/fbPosts');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delImage = Fbpost::find($id);
        $delImage->delete();

        return redirect('/manager/fbPosts');
        
    }
}

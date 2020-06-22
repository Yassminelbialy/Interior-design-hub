<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fbpost;

class FacebookController extends Controller
{
    public function index()
    {

        return view('manager.facebook', ['dataOfPosts' => Fbpost::all()]);
    }

    public function create()
    {
        return view('manager.addImage');
    }

    public function store(Request $request)
    {

        $imgInstance = new Fbpost();
        $imgInstance->fbLink = $request->linkinput;
        if ($request->hasfile('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/fbimages', $fileName);
            $imgInstance->image = $fileName;
        } else {
            return $request;
            $imgInstance->image = '';
        }
        $imgInstance->save();
        return redirect('/manager/fbPosts');
    }

    public function edit($id)
    {
        return view('manager.facebookEdit', ['facebppkImage' => Fbpost::find($id)]);
    }

    public function update(Request $request, $id)
    {

        $imgInstance = Fbpost::find($id);

        $imgInstance->fbLink = $request->fbLink;
        if ($request->hasfile('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/fbimages', $fileName);
            $imgInstance->image = $fileName;
        }

        $imgInstance->save();

        return redirect('/manager/fbPosts');
    }
    public function destroy($id)
    {
        $delImage = Fbpost::find($id);
        $delImage->delete();

        return redirect('/manager/fbPosts');
    }
}

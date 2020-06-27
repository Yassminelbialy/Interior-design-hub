<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AllUsersController extends Controller
{
    public function index()
    {
        return view('manager.user', ['data' => User::all()]);
    }

    public function destroy($id)
    {
        $delImage = User::find($id);
        $delImage->delete();

        return redirect('/manager/user');
    }
}

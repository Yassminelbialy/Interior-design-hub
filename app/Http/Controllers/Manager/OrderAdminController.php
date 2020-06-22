<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Quiz;
use App\User;

class OrderAdminController extends Controller
{
    public function index()
    {

        $OrderDetails = Order::all();
        return view('manager.orderViewAdmin', ['OrdersDetails' => $OrderDetails]);
    }

    public function create()
    {
        $quiz = Quiz::pluck('customerPhoneNo')->all();
        $user = User::whereIn('phone', $quiz)->whereIn('state', [0])->where('adminRole', '=', NULL)->pluck('name', 'id')->toArray();
        return view('manager.addOrderForm', compact('user'));
    }

    public function store(Request $request)
    {

        $req = $request->all();

        if ($request->file('contractImg')) {

            $file = $request->file('contractImg');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/AdminOrderImages', $fileName);
            $req['contractImg'] = $fileName;
        }

        $order = Order::create($req);

        return redirect('/manager/AdminOrder');
    }
    public function edit($id)
    {
        return view('manager.editAdminOrder', ['orderUpdated' => Order::find($id)]);
    }
    public function updateOrder(User $users)
    {
        $id = $users->id;
        $user = User::find($id);
        if ($user) {
            $user->state = 1;
            $user->save();
        }
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $updatedOrder = Order::find($id);
        $updatedOrder->description = $request->description;
        $updatedOrder->cost = $request->cost;
        $updatedOrder->state = $request->state;
        if ($request->hasfile('contractImg')) {

            $file = $request->file('contractImg');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/AdminOrderImages', $fileName);
            $updatedOrder->contractImg = $fileName;
        }

        $updatedOrder->save();
        return redirect('/manager/AdminOrder');
    }

    public function destroy($id)
    {
        $trashOrder = Order::find($id);
        $trashOrder->delete();
        return redirect('/manager/AdminOrder');
    }
}

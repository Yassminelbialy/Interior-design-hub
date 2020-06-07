<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $OrderDetails = Order::all();
        return view('manager.orderViewAdmin',['OrdersDetails'=>$OrderDetails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('manager.addOrderForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newOrder = new Order();
        $newOrder->description = $request->orderDesc;
        $newOrder->state = $request->orderState;
        $newOrder->cost = $request->orderCost;
        if($request->hasfile('orderImg')){

            $file = $request->file('orderImg');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/AdminOrderImages' , $fileName);
            $newOrder->contractImg = $fileName;
        }

        $newOrder->save();

        return redirect('/manager/AdminOrder');

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
        return view('manager.editAdminOrder' , ['orderUpdated'=>Order::find($id)]);
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
        $updatedOrder = Order::find($id);
        $updatedOrder->description = $request->description;
        $updatedOrder->cost = $request->cost;
        $updatedOrder->state = $request->state;
        if($request->hasfile('orderImg'))
        {

            $file = $request->file('orderImg');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/AdminOrderImages' , $fileName);
            $updatedOrder->image = $fileName; 
        }
       
        $updatedOrder->save();
        return redirect('/manager/AdminOrder');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trashOrder = Order::find($id);
        $trashOrder->delete();
        return redirect('/manager/AdminOrder');
        
    }
}

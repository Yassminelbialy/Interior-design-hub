<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Quiz;
use App\User;

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
        $quiz = Quiz::pluck('customerPhoneNo')->all();
        $user = User::whereIn('phone' ,$quiz)->whereIn('state',[0])->pluck('name','id')->toArray();
        return view('manager.addOrderForm',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $req=$request->all();
        
        if($request->file('contractImg')){

            $file = $request->file('contractImg');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/AdminOrderImages' , $fileName);
            $req['contractImg']=$fileName;
        }

        $order = Order::create($req);

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
    public function updateOrder(User $users){
        $id = $users->id;
        $user=User::find($id);
        if($user){
            $user->state = 1 ;
            $user->save();
        }
        return redirect()->back();   
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

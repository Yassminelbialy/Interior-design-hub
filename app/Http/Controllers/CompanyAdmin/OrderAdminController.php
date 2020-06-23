<?php

namespace App\Http\Controllers\CompanyAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\Quiz;
use App\User;
use Auth;

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
        return view('CompanyAdmin.orderViewAdmin',['OrdersDetails'=>$OrderDetails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $quiz = Quiz::pluck('customerPhoneNo')->all();
         $company_id = Auth::user()->company_id;
         
         if($company_id){

            $quiz = Quiz::where('company_id',$company_id)->pluck('customerPhoneNo');
            $user = User::whereIn('phone' ,$quiz)->whereIn('state',[0])->where('adminRole','=',NULL)->pluck('name','id')->toArray();
         }
        
        return view('CompanyAdmin.addOrderForm',compact('user'));
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

        return redirect('/companypanel/AdminOrder');

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
        return view('CompanyAdmin.editAdminOrder' , ['orderUpdated'=>Order::find($id)]);
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
        return redirect('/companypanel/AdminOrder');
        
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
        return redirect('/companypanel/AdminOrder');
        
    }
}

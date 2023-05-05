<?php

namespace App\Http\Controllers;
use App\Models\Prouducts;
use App\Models\CartItem;
use App\Models\order;
use App\Models\sessions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

        $userId=Auth::user()->id;


       if (isset(order::where('UserId',$userId)->where('surly' , '1')->first()->id)) {
        $order=order::where('UserId',$userId)->where('surly' , '1')->first()->id;
        $cartItem = CartItem::where('order_Id', $order)->get();
        return view('invoices.cart', compact('cartItem'));
       }else{
        $data="Is Not data .";
        return view('invoices.cartClear',compact('data'));
       }


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return "تم حفظ البنات ";
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function show( )
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CartItem $cartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return$id;

        $cartItem=CartItem::find($id);
        $cartItem->quantity=$request->quantity;
        $cartItem->total_price=$request->quantity * $cartItem->unit_price;
        $cartItem->save();
        return back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        $item=CartItem::find($id);
        $item->delete();
        return back();
    }


    public function Confirmation()
    {
        $user= Auth::user()->id;

        $order=order::where('UserId',$user)->where('surly',1)->find();

        //$surly = CartItem::where('order_Id', $order)->where('surly',1)->first();
        $order->surly= 2 ;
        $order->save();

        return$order;
    }


}

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

        $order=order::where('UserId',$userId)->where('surly' , '1')->first()->id;
       // $cartItem = CartItem::where('order_Id', $order)->where('product_id', $productId)->first();
      /* if (isset($order)) {
        $cartItem = CartItem::where('order_Id', $order)->get();
       }*/
       $cartItem = CartItem::where('order_Id', $order)->get();
        return view('invoices.cart', compact('cartItem'));

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
        return $cartItem;
      //  $cart = session()->get('cart');

        $productId=$request->get('product_id');
        return$productId;
        $userId=Auth::user()->id;
        $order=order::where('UserId',$userId)->first()->id;
        $cartItem = CartItem::where('order_Id', $order)->where('product_id', $productId)->find($id);
        return $cartItem;
        $cartItem->quantity=$request->quantity;
        $cartItem->total_price=$request->quantity * $cartItem->unit_price;
        $cartItem->save();


       /* return back();
        //return $productId;
            if(isset($cart[$productId])) {
                $cart[$id]['quantity'] = $request->quantity;
                $cart[$id]['total_price']=$cart[$id]['unit_price'] * $cart[$id]['quantity'];
                session()->put('cart', $cart);
            }
            $updat_quntity= CartItem::findOrFail($request->product_id);
            return back();*/

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
    }/*
    public function removeCartItem(Request $request)
    {



        $productId=$request->get('product_id');
        $userId=Auth::user()->id;
        $order=order::where('UserId',$userId)->first()->id;

        $cartItem = CartItem::where('order_Id', $order)->where('product_id', $productId)->first()->id;
        return $cartItem;
        //return $cartItem;

        $cartItem->delete();/*
        $productId = $request->get('product_id');
        $cart = session()->get('cart');
        //return $productId;
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }
       // $prducts=Prouducts::all();
        return back();
    }*/



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

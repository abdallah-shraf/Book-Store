<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class OrderController extends Controller
{



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     * thise function conferm the order
     */

    public function update( $order)
    {

        $user= Auth::user()->id;

        $order=order::find($order);
        $order->surly= '2' ;
        $order->save();
        return back();
    }

    public function user($id){

       // $user = Auth::user()->id;
        $orders=order::where('UserId',$id)->get();
      //  return $orders;
        return view("user",compact('orders'));
    }

}

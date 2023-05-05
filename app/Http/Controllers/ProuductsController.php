<?php

namespace App\Http\Controllers;
use App\Models\CartItem;
use App\Models\Prouducts;
use App\Models\Sections;
use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use Cart;
use PhpParser\Node\Expr\New_;

class ProuductsController extends Controller
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
    public function index()
    {
        $section= Sections::all();
        $product= Prouducts::all();
        return view("productes.creatProduct",compact('section','product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $section= Sections::all();

        return view('productes.creatProduct',compact('section'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$attachments->Created_by = Auth::user()->name;
        $product= new Prouducts();
        $product->ProductsName=$request->Book_Name;

        $product->AboutProduct=$request->about;
        $product->sectionID=$request->section_id;
        $product->UnitePrice=$request->Price;
        $product->Author=$request->Auther_Name;
        $image=$request->Image_Product->getClientOriginalName();
        $imagName=time().'.'.$image;
        $pathe=$request->Image_Product->storeAs('Product',$imagName,'proudacts');
        $product->ProductImage=$imagName;
        $product->Created_by= Auth::user()->name;

        $product->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prouducts  $prouducts
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $product=Prouducts::where('id',$id)->first();

        return view("productes.proudactshow", compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prouducts  $prouducts
     * @return \Illuminate\Http\Response
     */
    public function edit(Prouducts $prouducts)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prouducts  $prouducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prouducts $prouducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prouducts  $prouducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prouducts $prouducts)
    {
        //
    }
    /*
        this add product in car function add
    */
    //$id = product Id of the product   
    public function add(Request $request, $id){
        $userId=Auth::user()->id;
        $order=order::where('UserId',$userId)->where('surly',1)->first();
      //  return $order;
        $cartItem = CartItem::where('order_Id', $order)->where('product_id', $id)->first();
        if(isset($order)){
            $cartItem = CartItem::where('order_Id', $order->id)->where('product_id', $id)->first();
            if(isset($cartItem)){
                $cartItem->quantity ++ ;
                $cartItem->total_price=$request->price * $cartItem->quantity;
                $cartItem->save();
                return back();
            }
                //لحفظ البنات داخل الداتا بيز
                $product_cart = new CartItem;
                $product_cart->product_id=$id;
                $product_cart->quantity=$request->quantity;
                $product_cart->unit_price= $request->price;
                $product_cart->order_Id= $order->id;
                $product_cart->total_price=$request->price * $request->quantity;
                $product_cart->save();
                return back();
        }else{
            $order_create=new order;
            $order_create->UserId=Auth::user()->id;
            $order_create->surly="1";
            $order_create->save();
            $order_id= order::latest()->first()->id;
            if(isset($cartItem)){
                $cartItem->quantity ++ ;
                $cartItem->total_price=$request->price * $cartItem->quantity;
                $cartItem->save();
                return back();
            }
                //لحفظ البنات داخل الداتا بيز
                $product_cart = new CartItem;
                $product_cart->product_id=$id;
                $product_cart->quantity=$request->quantity;
                $product_cart->unit_price= $request->price;
                $product_cart->order_Id= $order_id;
                $product_cart->total_price=$request->price * $request->quantity;
                $product_cart->save();
                return back();
        }


    }
    /*
        this research product on data
    */

    public function research(Request $request){
      $search=$request->search;
        $products =Prouducts::where('ProductsName', 'LIKE', "%$search%")->get();
        return view("productes.sereachProduct",compact('products'));
    }

    public function shop()
    {
       // $inv=Invoices::all();
        $prducts= Prouducts::all();
        return view('productes.product',compact('prducts'));
    }



}

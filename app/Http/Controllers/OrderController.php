<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders  = Order::all();

        $order_arrs = [];
        $address_arr = [];


        foreach($orders as $order){
            $order_arrs[] = array_merge(json_decode($order->order,true));
            $address_arr[] = $order->address;


                // array_push($order_arr,['address'=>'re']);

            }



        return view('order.index',compact('order_arrs','address_arr'));
        // return view('order.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'address'=>['required','regex:/^[\w\s]+$/iu','max:300',"string"]
       ]);
       if(count(Session::get('cart')) === 0){
           Session::put('empty__cart','سبد خرید خالی است');
           return back();
       }
       $order  = Order::create([
           'address'=>$request->address,
           'order'=>json_encode(Session::get('cart')),
       ]);
       if($order){
           return redirect()->route('home')->with('success_order','با موفقیت سفارش ثبت شد');
       }else{
           return back();
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function cart(){

        return view('order.cart');

    }

    public function addToCart($id){
        $product  = Product::findOrFail($id);

        $cart = Session::get('cart',[]);


        if(isset($cart[$id])){
            $cart[$id]['quantity']++;

        }else{

            $cart[$id] = [

                'name'=>$product->name,
                'price'=>$product->price,
                'quantity'=>1,
                'discount'=>$product->discount,
                'img'=>$product->img
            ];

        }

        Session::put('cart',$cart);


        return response()->json(['status'=>200,'cart'=>$cart]);



    }
    public function updateCart($id,$quty){

        $cart = Session::get('cart');
        $cart[$id]['quantity'] = $quty;
        Session::put('cart',$cart);

        return response()->json(['status'=>200,'cart'=>$cart[$id]]);

    }
    public function deleteCart($id){

        $cart = Session::get('cart');

        if(isset($cart[$id])){
            unset($cart[$id]);
            Session::put('cart',$cart);
            $r ='yes';
        }

        return response()->json(['status'=>200]);

    }
}

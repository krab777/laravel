<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Item;
use App\Models\User;

class OrderController extends Controller
{
    public function addToOrder(Request $request, User $user)
    {
        $cartItems = ( new Cart())->getCartItems();
        $serializedCartItems = serialize($cartItems);
        // $unSerializedCartItems = unserialize($serializedCartItems);
        // dd($request->user()->id);
        // dd($request, $cartItems, $serializedCartItems, $serializedCartItems);

        // $item = Item::find($id);
        // dd(Cart::where("user_id", $request->user()->id)->sum('sum'));
        
        $order = Order::create([
            'user_id' => $request->user()->id,
            'cart' => $serializedCartItems,
            'sum' => Cart::where("user_id", $request->user()->id)->sum('sum'),
            // 'price' => $item->price,
            // 'sum' => $item->price 
        ]);

        $clearCart = ( new Cart())->clearCart();

        return redirect()->route('homePage')->with('success', "Your order was successfully made!");
        // return redirect()->back();       


    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userOrders = ( new Order())->getOrders();

        return view('shop.orders', compact('userOrders'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
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
}

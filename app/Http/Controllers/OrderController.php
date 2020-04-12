<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function addToOrder(Request $request, User $user)
    {
        $cartItems = ( new Cart())->getCartItems();
        $serializedCartItems = serialize($cartItems);
        
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'cart' => $serializedCartItems,
            'sum' => Cart::where("user_id", Auth::user()->id)->sum('sum'),
        ]);

        $clearCart = ( new Cart())->clearCart();

        return redirect()->route('homePage')->with('success', "Your order was successfully made!");
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

    public function getAll()
    {
        $userOrders = ( new Order())->getOrdersDash();

        return view('dashboard.orders.index', compact('userOrders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userOrder = (new Order())->getOneOrder($id);
        // dd($userOrder);
        return view('dashboard.orders.show', compact('userOrder'));
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
        // dd($order->id);

        $order = Order::find($order->id);
        // dd($order);
        $data = $request->only(['status_id']);

        $order->update($data);
        // return redirect()->route('dashboard.order', $order->id)->with('success', "Order was Updated Successfully!");

        return redirect()->back();
        // return view('dashboard.orders.show', compact('userOrder'));
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

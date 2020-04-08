<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Item;
use App\Models\User;

class CartController extends Controller
{

    public function addToCart(Request $request, $id, User $user)
    {
        $cartItems = ( new Cart())->getCartItems();

        $item = Item::find($id);
        $cart = Cart::create(['user_id' => $request->user()->id, 'item_id' => $item->id, 'price' => $item->price]);

        // return redirect()->route('cart.index');
        return redirect()->back();

        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = ( new Cart())->getCartItems();
        // dd($cart);
        return view('cart.index', compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request, Item $item, User $user)
    public function store(Request $request)    
    {
        dd($request);
        // $data = Item::find($item);
        // dd($request->user()->id, $request);

        // $data = ($request->only(['item_id']));
        // // $data->fill([
        // //     'user_id' => $request->user()->id,
        // //     // 'item_id' => $item->id
        // // ])->save();
        // dd($data);
        // return redirect()->route('dashboard.users.index')->with('success', "User with name: $request->name and email: $request->email was Created Successfully!");
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $id)
    {
        $item = Item::find($id);
        // $cartItems = ( new Cart())->getCartItems();

        // dd($item);
        // return view('cart.index', compact('cartItems'));

        $data = $request->only(['name', 'password', 'email', 'role_id']);

        $item->save($data);
        dd($item);
        // return redirect()->route('cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

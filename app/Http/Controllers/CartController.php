<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Cart\UpdateRequest;


class CartController extends Controller
{
    public function addToCart(Request $request, $id, User $user)
    {
        $cartItems = ( new Cart())->getCartItems();
        $item = Item::find($id);
        $cart = Cart::create([
            'user_id' => Auth::user()->id,
            'item_id' => $item->id,
            'price' => $item->price,
            'sum' => $item->price 
        ]);

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
        // dd($cartItems);

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
    public function update(Request $request, $id)
    {
        $data = Cart::findOrFail($id);
        $item = Item::find($data->item_id);
        // dd($item->total_count);

        $totalCount = $item->total_count;
        // dd($totalCount);

        $validatedCount = $request->validate([
            'count' => 'required|integer|max:10',
        ]);

        $item = Item::find($id);
        if ($validatedCount['count'] <= 0) {
            $cart = Cart::find($id);
            $cart->delete();
        }
        
        $data->fill(['count' => $validatedCount['count'],  'sum' => $data->price * $validatedCount['count']])->update();

        return redirect()->route('cart.index')->with('success', "Items in Your cart was Updated Successfully!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->route('cart.index')->with('success', "Item was Deleted Successfully!");
    }
}

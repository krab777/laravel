<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests\Item\CreateRequest;



class ItemController extends Controller
{

    public function index()
    {
        $items = (new Item())->getItems();

        return view('shop.index', compact('items'));
    }

    public function getAll()
    {
        $items = (new Item())->getItems();
        // dd($items);
        // dd($items->image);


        return view('dashboard.items.index', compact('items'));
    }

    public function show($id)
    {       
        $item = (new Item())->getOneItem($id);
        // dd($item->image);

        return view('shop.show', compact('item'));
    }

    public function getOneItem ($id)
    {
        $item = (new Item())->getOneItem($id);
        // dd($item->image);

        return view('dashboard.items.show', compact('item'));
    }

    public function create()
    {
        return view('dashboard.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request, Item $item)
    {

        $item = Item::create($request->all());

        $item->save();

        return redirect()->route('dashboard.watchItems')->with('success', "Item with name: $request->name and price: $request->price was Created Successfully!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('dashboard.items.edit', compact('item'));
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
        $item = Item::findOrFail($id);

        $data = $request->all();

        $item->update($data);
        return redirect()->route('dashboard.watchItems')->with('success', "Item with id: $item->id and email: $item->name was Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect()->route('dashboard.watchItems')->with('success', "Item with id: $id and name: $item->name was Deleted Successfully!");
    }
}

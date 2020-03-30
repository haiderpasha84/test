<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('cart');
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
    public function store(Request $request)
    {
        //
        $duplicates = Cart::search(function($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id;
        });
        if ($duplicates->isNotEmpty()){
            return redirect()->route('cart.index')->with('success_message', 'item is already in your cart!');
        }

        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message', 'item was added to your cart!');
    }

    // public function empty(){
    //     Cart::destroy
    // }

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
        //
        $validator = Validator::make($request->all(),[
            'quantity' => 'required|numeric|between:0,16'

        ]);

        if($validator->fails()){
            session()->flash('errors',collect(['Quantity can be minimum 1 and maximum 15. ']) );
            return responce()->json(['success' => false], 400);
        }
        Cart::update($id, $request->quantity);

        session()->flash('success_message', 'Quantity was updated successfully!');
        return responce()->json(['success' => true]);
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
        Cart::remove($id);


        return back()->with('success_message', 'item has been removed!');
    }

        /**
     * switch item for shopping cart to save for later
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToSaveForLater($id)
    {
        //
      $item= Cart::get($id);
      Cart::remove($id);



      $duplicates = Cart::instance('saveForLater')->search(function($cartItem, $rowId) use ($id){

            return $rowId === $id;

      });

      if ($duplicates->isNotEmpty()){
          return redirect()->route('cart.index')->with('success_message', 'item is already Saved for later!');
      }







      Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)->associate('App\Product');

      return redirect()->route('cart.index')->with('success_message', 'item has been saved for later!');
        
    }





}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Products;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
class LargoPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::where('product_category','=','largo')->get();
        $total = Products::where('product_category','=','largo')->get()->sum('product_price');
        return view('pages.largo')->with(compact('products','total'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Products::find($id);
        $products = Products::where('product_category','=','largo')->get();
        return view('pages.item_detail')->with(compact('product','products'));
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

    function addtocart(Request $request){
     $id = Auth::id();

       $cart = new Cart;
       $cart->product_id=$request->product_id;
       $cart->user_id=$id;
       $cart->save();

       return redirect('/largo');
    }

     static function cartitem(){
        $user_id = Auth::id();
        return Cart::where('user_id',$user_id)->count();
    }
}

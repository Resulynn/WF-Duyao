<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $products = Cart::leftjoin('products','cart.product_id','=','products.id')
        ->where('cart.user_id', Auth::user()->id)
        ->select('cart.status','products.*')
        ->get();


        $total = Cart::join('products','cart.product_id','=','products.id')
        ->where('cart.user_id', Auth::user()->id)
        ->where('cart.status', 1)
        ->sum('products.product_price');

        $status = Cart::where('user_id', Auth::user()->id)->get();

        return view('pages.cart')->with(compact('products','total','status'));
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
        $del=Cart::where('user_id', Auth::user()->id)
        ->where('product_id', $id)
        ->first();
        
        $del->delete();
        return back();
        
    }

    function addtocart(Request $request){
        $id = Auth::id();
   
          $cart = new Cart;
          $cart->product_id=$request->product_id;
          $cart->user_id=$id;
          $cart->save();
   
          return back();
       }
   
    static function cartitem(){
           $user_id = Auth::id();
           return Cart::where('user_id',$user_id)->count();
       }
}

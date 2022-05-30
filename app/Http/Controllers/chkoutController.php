<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Session;

class chkoutController extends Controller
{
    public function chckout(Request $request){
        $amt = $request->amount;
        $total = Cart::join('products','cart.product_id','=','products.id')
        ->where('cart.user_id', Auth::user()->id)
        ->where('cart.status', 1)
        ->sum('products.product_price');

        if($amt<$total){
            Session::flash('error', "Insufficient Amount.");
            return back()->withInput();
        }
        else{
        Cart::where('user_id', Auth::user()->id)
        ->update (['status'=>'2']);

        Session::flash('success', "Paid Successfully.");
        return back();
        }

       
    }


}

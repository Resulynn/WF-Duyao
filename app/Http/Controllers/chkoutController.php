<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class chkoutController extends Controller
{
    public function chckout(){
        Cart::where('user_id', Auth::user()->id)
        ->update (['status'=>'2']);

        return redirect('/largo');
    }
}

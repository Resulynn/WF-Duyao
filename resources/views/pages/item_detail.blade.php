@extends('layouts.app')

@section('bg')
    <img src="/assets/6.jpg" class="bg-img">
@endsection

@section('content')
<div class="prodHead text-center">
    <h1><a href="/largo/item/{{$product->product_id}}" style="text-decoration: none; color: #000000;">{{$product->product_name}}</a>
        @guest
                @if (Route::has('login'))
                       
                @endif
            @else
                <form action="/addtocart" method="GET">
                    <button class="btn btn-dark " style="border-radius: 0%;">
                        <i class="bi bi-cart-plus" style="font-size: 18px;"></i>
                        Add to Cart
                    </button>

                    <input type="hidden" name="product_id" value={{$product->product_id}}>
                </form>
                            
                    
            
         @endguest
        </h1>
    
</div>
    <div class="prodDesc">
    <p>{{$product->product_desc}}
        {{$product->product_price}} Php
    <p>
    </div>
    <div class="lrgPullover">
        <div class="d-flex justify-content-around">
            <div>
                <img src="/{{$product->img1st}}">
            </div>
        </div>
        <div class="d-flex justify-content-around">
            <div class="img2nd">
                <img src="/{{$product->img2nd}}">
            </div>
        </div>
    </div>
@endsection
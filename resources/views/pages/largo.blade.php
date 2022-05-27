
@extends('layouts.app')

    @section('bg')
    <img src="assets/6.jpg" class="bg-img">
    @endsection

    @section('content')

    <div class="quote2">
        COMFORT:
        REIMAGINED.
    </div>

  
@foreach($products as $prod)
<div class="prodHead">
    <h1><a href="/largo/item/{{$prod->product_id}}" style="text-decoration: none; color: #000000;">{{$prod->product_name}}</a></h1>
    
</div>

{{-- <div class="prodDesc">
   
    <p>{{$prod->product_desc}}
        {{$prod->product_price}} Php
    <p>
</div> --}}
<div class="lrgPullover">
    <div class="d-flex justify-content-around">
        <div>
            <img src="{{$prod->img1st}}">
        </div>
    </div>
    <div class="d-flex justify-content-around">
        <div class="img2nd">
            <img src="{{$prod->img2nd}}">
        </div>
    </div>
</div>

@endforeach

   
@endsection
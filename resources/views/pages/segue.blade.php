@extends('layouts.app')

    @section('bg')
    <img src="assets/b2.jpg" class="bg-img">
    @endsection

    @section('content')
    @foreach($products as $prod)
    <div class="prodHead3">
        <h1><a href="/largo/item/{{$prod->product_id}}" style="text-decoration: none; color: #ffffff;">{{$prod->product_name}}</a></h1>
    </div>


<div class="segPullover">
    <div class="d-flex justify-content-around">
        <div>
            <img src="{{$prod->img1st}}">
        </div>
    </div>
    <div class="d-flex justify-content-around">
        <div>
            <img src="{{$prod->img2nd}}">
        </div>
    </div>
</div>
@endforeach
    
@endsection
@extends('layouts.app')

@section('bg')
    <img src="/assets/6.jpg" class="bg-img">
@endsection
@section('content')
<div class="row ps-3 w-25 " style="color:white; overflow:auto;">
    @foreach ($products as $item)
    <div class="col pb-3">
         <img src="/{{$item->img1st}}" width="120px" height="120px" 
            style="object-fit: cover;" 
            class="rounded-circle ">
    </div>
    <div class="col">
        {{$item->product_name}}<br>
        Price: {{$item->product_price}}
        <form action="/checkout" method="GET">
            <button class="btn btn-danger mt-2 " style="border-radius: 0%;">
                <i class="bi bi-trash" style="font-size: 18px;"></i>
                Remove
            </button>
        </form>
    </div>
</div>
<div class="px-3 w-100" style="color: white;">
    <hr>
</div>
@endforeach

<div class="col pe-5 w-100" style="text-align: end; color:white;">
Total: {{$total}} Php
<form action="/checkout" method="GET">
    <button class="btn btn-success mt-2 " style="border-radius: 0%;">
        <i class="bi bi-cart-check" style="font-size: 18px;"></i>
       Checkout
    </button>
</form>
</div>
@endsection
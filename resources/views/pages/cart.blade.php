@extends('layouts.app')

@section('bg')
    <img src="/assets/6.jpg" class="bg-img">
@endsection
@section('content')
<div class="px-3 w-100" style="color: white;">
    <hr>
</div>
@foreach ($products as $item)

<div class="row ps-3 w-25 " style="color:white;">
    <div class="col pb-3">
         <img src="/{{$item->img1st}}" width="120px" height="120px" 
            style="object-fit: cover;" 
            class="rounded-circle ">
    </div>
    <div class="col">
        {{$item->product_name}}<br>
        Price: {{$item->product_price}}
<br>
       
        @if ($item->status==1)
           <b><p class='text-danger'>To pay</p></b>
        @endif
        @if ($item->status==2)
        <b><p class='text-success'>Paid</p></b>
        @endif
       
        {!! Form::open(['action'=>['App\Http\Controllers\CartController@destroy',$item->id],
                            'method'=>'POST'])!!}
        {{ Form::hidden('_method','DELETE') }}
            <button class="btn btn-danger mt-2 " style="border-radius: 0%;">
            <i class="bi bi-trash" style="font-size: 18px;"></i>
            Remove
            </button>
        {!! Form::close() !!} 
    </div>
</div>
<div class="px-3 w-100" style="color: white;">
    <hr>
</div>
@endforeach

<div class="col pe-5 w-100 ms-4 " style=" color:white;">
Total: {{$total}} Php

{!! Form::open(['action'=>['App\Http\Controllers\chkoutController@chckout'],
'method'=>'POST'])!!}

    {!! Form::number('amount', '', ['class'=>'form-control mt-3 w-25 ', 'placeholder'=>'Input Amount','required']) !!} <br>

@if($total == 0)
    <button class="btn btn-success  " style="border-radius: 0%;" disabled>
            <i class="bi bi-cart-check" style="font-size: 18px;"></i>
        Checkout
        </button> 
 @else
     <button class="btn btn-success  " style="border-radius: 0%;">
        <i class="bi bi-cart-check" style="font-size: 18px;"></i>
         Checkout
    </button>  
 @endif 
  
{!! Form::close() !!} 
</div>
@endsection
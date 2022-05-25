@extends('layout.app')

@section('content')
@section('bg')
    <img src="{{URL::asset('assets/3.jpg')}}" class="bg-img">
@endsection
    <div class="mb-3 text-light text-center">
        <h1>Blog Board.</h1>
        <small><a href="/blog/create" class="text-decoration-none">Create Here</a></small>
    </div>

    @if (count($blogs)>0)
        @foreach ($blogs as $blog)
            <div class="container w-75 bg-dark mb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{URL::asset('pictures/'.$blog->img)}}" class="mt-3 mb-3 boardImage">
                        </div>
                        <div class="col-6 text-light mt-3">
                            <h3 ><a href="/blog/{{$blog->id}}" class="text-decoration-none">{{$blog->title}}</a></h3>
                            <small>Written on {{$blog->created_at}}</small>
                            <br>
                            <div class = "ms-5 mt-2">
                                <p>{!!$blog->body!!}</p>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        @endforeach
    @endif

@endsection
@extends('layout.app')

@section('content')

@section('bg')
    <img src="{{URL::asset('assets/3.jpg')}}" class="bg-img">
@endsection

    <div>
        <div class="container bg-light mt-5">
            <div class="text-center">
                <h1>{!!$blog->title!!}</h1>
            </div>
            <hr>
            <div>
                <div class="row">
                    <div class="col-3">
                        <img src="{{URL::asset('pictures/'.$blog->img)}}" class="mt-3 mb-3 boardImage">
                    </div>
                    <div class="col-6 mt-3">
                        <small>Written on {{$blog->created_at}}</small>
                        <br>
                        <div class = "ms-5 mt-2">
                            <p>{!!$blog->body!!}</p>
                            {!! Form::open(['action'=>['App\Http\Controllers\BlogController@destroy',$blog->id],
                            'method'=>'POST'])!!}
                            {{ Form::hidden('_method','DELETE') }}
                            <div class="row" style="margin-top: 23vh;">
                                <div class="col-2">
                                    <a href="/blog/{{$blog->id}}/edit" class="btn btn-primary">Edit</a>
                                </div>
                                <div class="col">
                                    {{ Form::submit('Delete',['class' => 'h4']) }}
                                </div>
                            {!! Form::close() !!}    
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
    </div>
@endsection

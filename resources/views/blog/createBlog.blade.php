@extends('layout.app')

    @section('content')


    {!! Form::open(['action'=>'App\Http\Controllers\BlogController@store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    
    <div>
        {{Form::file('img')}}
    </div>
    <div>        
        {{Form::label('','Title','title')}}
        {{Form::text('Title','',['class'=>'form-control',
        'placeholder'=>'Title'
        ])}}
    </div>
    <div>
        {{ Form::label('','Body','body')}}
        {{Form::textarea('Body','',['class'=>'form-control',
        'placeholder'=>'Body Text'
        ])}}
    </div>
    <div>
        {{Form::submit('Submit',['class'=>'btn btn-primary mt-3'])}}
    </div>
    {!! Form::close() !!}           


    @endsection
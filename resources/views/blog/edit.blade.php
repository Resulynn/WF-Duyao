@extends('layout.app')

    @section('content')


    {!! Form::open(['action'=>['App\Http\Controllers\BlogController@update',$blog->id],
    'method'=>'POST']) !!}
        
    <div>
        <h1>EDIT MESSAGE</h1>
        {{ Form::label('','Title','title')}}
        {{Form::text('Title',$blog->title,['class'=>'form-control',
        'placeholder'=>'Title'
        ])}}
    </div>
    <div>
        {{ Form::label('','Body','body')}}
        {{Form::textarea('Body',$blog->body,['class'=>'form-control',
        'placeholder'=>'Body Text'
        ])}}
    </div>
    <div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary mt-3'])}}
    </div>
    {!! Form::close() !!}           


    @endsection
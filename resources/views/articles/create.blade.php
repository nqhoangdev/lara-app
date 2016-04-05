@extends('app')


@section('content')

<h1>Create an Article</h1>

<hr/>

{!! Form::open(['url' => 'articles']) !!}
    <div class="form-group">
       
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}     
        
    </div>
    
    <div class="form-group">
       
        {!! Form::label('body', 'Name:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}     
        
    </div>
    
    <div class="form-group">
       
        {!! Form::label('published_at', 'Published on:') !!}
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}     
        
    </div>
    
    
    <div class="form-group">
        
        {!! Form::submit('Add Article', ['class' => 'btn btn-success form-control']) !!}
        
    </div>
   
{!! Form::close() !!}

@if ($errors->any())
   <h1>Errors:</h1>
    <ul class="alert alert-danger">
        @foreach($errors as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
@stop
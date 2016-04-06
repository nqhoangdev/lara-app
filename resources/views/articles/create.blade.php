@extends('app')


@section('content')

<h1>Create an Article</h1>

<hr/>

{!! Form::open(['url' => 'articles']) !!}
    
    @include('articles._form', ['submitButtonLabel' => 'Create'])
   
{!! Form::close() !!}

@include('errors.list')

@stopß
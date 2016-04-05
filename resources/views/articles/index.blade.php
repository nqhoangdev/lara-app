@extends('app')


@section('content')

<h1>Articles</h1>

@foreach($articles as $article)

    <h2>
        
        <a href="{{ action('ArticlesController@show', [$article->id]) }}"> {{$article->name}} </a>
        
    </h2>
    <p> {{$article->body}} </p>
    
@endforeach

@stop
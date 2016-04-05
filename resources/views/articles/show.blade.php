@extends('app')


@section('content')

<h1> {{ $article->name }} </h1>
<p> {{ $article->body }} </p>
@stop
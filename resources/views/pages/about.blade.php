@extends('app')



@section('content')

@if ($job == 'freelancer')
<h1>name = {{ $name }}, job = {{ $job }} </h1>
<p>Hi Freelancer</p>

@else
<p>Hi nonFreelancer</p>

@endif

@stop

<!--Temporary-->

{!! Form::hidden('user_id', 1) !!}


<div class="form-group">


    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}     

</div>

<div class="form-group">

    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}     

</div>

<div class="form-group">

    {!! Form::label('published_at', 'Published on:') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}     

</div>


<div class="form-group">

    {!! Form::submit($submitButtonLabel, ['class' => 'btn btn-success form-control']) !!}

</div>
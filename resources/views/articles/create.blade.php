@extends('app')
@section('content')
    <h1>撰寫新文章</h1>
    {!! Form::open(['url'=>'/articles']) !!}
        <div class="form-group">
            {!! Form::label('title') !!}
            {!! Form::text('title',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content','Content:') !!}
            {!! Form::textarea('content',null,['class' => 'form-control']) !!}
        </div>
    {!! Form::submit('發表文章',['class'=>'btn btn-primary form-control']) !!}
    {!! Form::close() !!}
@stop
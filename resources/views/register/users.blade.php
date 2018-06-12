@extends('app')

@section('title')
{{$users->name}}
@stop

@section('content')
<h1>{{$users->name}}</h1>
<hr>
<br>
Пароль рабочего: {{$users->password}}
<br>

{!! Form::open() !!}
{!! Form::close()!!}

@stop

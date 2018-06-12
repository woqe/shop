@extends('app')

@section('title')
заголовок
@stop

@section('content')
  @foreach($name as $obj)
    <li>{{$obj}}</li>
  @endforeach
@stop

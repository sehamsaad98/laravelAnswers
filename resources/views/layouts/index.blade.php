@extends('layouts.app')

@section('content')
@section('content')

@foreach ($phones as $ph)
    <h3 >{{$ph->phone}}</h3>
    <br>
    <a href="{{route('phones.edit', $ph->id)}}">edit</a>


    {!! Form::open(['route'=>['phones.destroy',$ph->id],'method'=>'delete']) !!}
    <button type="submit">Delete</button>

    {!!form::close()  !!}
    {{-- <a href="{{route('phones.destroy', $ph->id)}}">delete</a> --}}
    <br>

@endforeach
@endsection

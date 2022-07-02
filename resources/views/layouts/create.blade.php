@extends('layouts.app')

@section('title')
phones
@endsection


@section('content')
@foreach ($errors->all() as $error)
{{$error}}
@endforeach
{!! Form::open(['route' => 'phones.store' ]) !!}

{{-- @csrf --}}

{{-- @method('PUT') --}}

<div class="mb-3">
    <label for="phone">Enter your phone number:</label>
  {!!form::text ('phone') !!}


  {{-- {!!Form::submit('Click Me!')!!} --}}
  <button type="submit" class="btn btn-primary" style="background-color: aqua;"> Submit</button>

</div>
{!! Form::close() !!}
@endsection

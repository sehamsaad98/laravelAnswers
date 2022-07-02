@extends('layouts.app')

@section('title')
phones
@endsection




@section('content')

@foreach ($errors->all() as $error)
{{$error}}
@endforeach

{!! Form::model($phone,['route' => ['phones.update', $phone->id ] , 'method'=> 'PUT']) !!}

{{-- @csrf --}}

{{-- @method('PUT') --}}

<div class="mb-3">
    <label for="phone">update your number</label>
  {!!form::text ('phone') !!}


  {{-- {!!Form::submit('Click Me!')!!} --}}
  <button type="submit" class="btn btn-primary" style="background-color: aqua;"> Submit</button>

</div>
{!! Form::close() !!}
@endsection

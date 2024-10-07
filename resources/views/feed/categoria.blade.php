@extends('layouts.app')

@section('content')

@foreach($categoria as $value)
    <p><strong><a href="{{ url('/feed/categoria' . $value->id) }}"> {{ $value->nome }} </strong></a></p>
@endforeach

@endsection

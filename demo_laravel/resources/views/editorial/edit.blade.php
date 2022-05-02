@extends('layout.template')

@section('title', 'Modificando Editorial')

@section('content')
    <h1>Modificando Editorial con id {{ $id }}</h1>
    <h3>{{ $nombre }}</h3>
    
    @if ($edad >= 18)
        <h4>Eres mayor de edad</h4>
    @else
        <h4>Eres menor de edad</h4>
    @endif


@endsection
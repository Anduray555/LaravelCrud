@extends('layouts.app')

@section('content')
    <h2>Agregar artículo</h2>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        @include('items._form')
        <br>
        <button type="submit">Guardar</button>
        <a href="{{ route('items.index') }}">Cancelar</a>
    </form>
@endsection
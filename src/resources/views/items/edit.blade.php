@extends('layouts.app')

@section('content')
    <h2>Editar artículo</h2>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('items._form')
        <br>
        <button type="submit">Actualizar</button>
        <a href="{{ route('items.index') }}">Cancelar</a>
    </form>
@endsection
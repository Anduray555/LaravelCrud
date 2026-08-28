@extends('layouts.app')

@section('content')

    <a href="{{ route('items.create') }}" class="btn" style="background:#4CAF50; color:white;">
        + Agregar artículo
    </a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Unidad</th>
                <th>Precio</th>
                <th>Comprado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->unit ?? '-' }}</td>
                    <td>{{ $item->price ? '$'.number_format($item->price, 2) : '-' }}</td>
                    <td>{{ $item->purchased ? '✅' : '❌' }}</td>
                    <td>
                        <a href="{{ route('items.edit', $item->id) }}">Editar</a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Eliminar este artículo?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="color:red; background:none; border:none; cursor:pointer;">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay artículos todavía.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection
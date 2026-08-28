<div>
    <label>Nombre</label><br>
    <input type="text" name="name" value="{{ old('name', $item->name ?? '') }}">
    @error('name') <div style="color:red;">{{ $message }}</div> @enderror
</div>

<div>
    <label>Cantidad</label><br>
    <input type="number" name="quantity" value="{{ old('quantity', $item->quantity ?? 1) }}">
</div>

<div>
    <label>Unidad</label><br>
    <input type="text" name="unit" value="{{ old('unit', $item->unit ?? '') }}">
</div>

<div>
    <label>Precio</label><br>
    <input type="number" step="0.01" name="price" value="{{ old('price', $item->price ?? '') }}">
</div>

@isset($item)
<div>
    <label>
        <input type="checkbox" name="purchased" value="1" {{ old('purchased', $item->purchased) ? 'checked' : '' }}>
        Ya comprado
    </label>
</div>
@endisset
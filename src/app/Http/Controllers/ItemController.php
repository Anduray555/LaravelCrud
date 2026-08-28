<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests\ItemRequest;

class ItemController extends Controller
{

    public function index()
    {
        $items = Item::latest()->get();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(ItemRequest $request)
    {
        Item::create($request->validated());
        return redirect()->route('items.index')->with('success', 'Artículo agregado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(ItemRequest $request, Item $item)
    {
        $validated = $request->validated();
        $validated['purchased'] = $request->has('purchased');
        $item->update($validated);
        return redirect()->route('items.index')->with('success', 'Artículo actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Artículo eliminado.');
    }
}

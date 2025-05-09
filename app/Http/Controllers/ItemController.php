<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Type;
use App\Models\Color;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function create()
    {
        $types = Type::all();
        $colors = Color::all();

        return view('item.create', compact('types', 'colors'));
    }
    public function store(Request $request)
    {
        //  dd($request->all());
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'color' => 'required',
            'quantity' => 'required|integer',
        ]);
        //   dd($request->all());

        Item::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'type_id' => $request->type,
            'color_id' => $request->color,
            'quantity' => $request->quantity,
        ]);
        Auth::user()->items()->create([
            'name' => $request->name,
            'type_id' => $request->type,
            ''=> $request->color,
        ]);
        return redirect()->route('home');
    }

    public function show(Item $item)
    {
        return view('item.show ', compact('item'));
    }
    public function edit(Item $item)
    {
        $this->authorize('update', $item);

        $types = Type::all();
        $colors = Color::all();
        return view('item.edit', compact('item','types','colors'));
    }
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'color' => 'required',
            'quantity' => 'required|integer',
        ]);
        $item->update([
            'name' => $request->name,
            'type_id' => $request->type,
            'color_id' => $request->color,
            'quantity' => $request->quantity,
        ]);
        return redirect()->route('home');
    }
    public function destroy(Item $item)
    {
        $item->delete();
        return back();
    }
}

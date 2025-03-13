<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::paginate(10);
        //colors sbb data dari databse banyak
        return view('color.index' , compact('colors'));
    }

    public function create()
    {

        return view('color.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255', //validate the name field
        ]);

        // dd($request->name);

        Color::create([
            'name'=> $request->name,  //store the name field in the database
        ]);

        return redirect()->route('color.index');
    }

    public function edit(Color $color)//color adalah nama model yang sama di route
    {
        return view('color.edit', compact('color'));
    }

    public function update(Request $request, Color $color) {

        $request->validate([
            'name'=> 'required|string|max:255',
        ]);

        $color->update([
            'name'=> $request->name,
        ]);

        return redirect()->route('color.index');
    }
    public function destroy(Color $color) {
        $color->delete();
        return back();
    }
}

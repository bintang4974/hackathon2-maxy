<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $position = Position::all();

        return view('position.index', [
            // 'pageTitle' => $pageTitle,
            'position' => $position
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('position.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            // 'desc' => 'required',
            // 'location' => 'required',
            // 'price' => 'required|numeric',
            // 'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // $imageName = time() . '.' . $request->photo->extension();
        // $request->photo->move(public_path('images'), $imageName);

        Position::create([
            'code' => $request->code,
            'name' => $request->name,
            // 'desc' => $request->desc,
            // 'location' => $request->location,
            // 'price' => $request->price,
            // 'photo' => $imageName,
        ]);

        return redirect()->route('position.index')->with('success', 'Event berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $position = Position::find($id);

        return view('position.show', compact('position'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $position = Position::find($id);

        return view('position.edit', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
        ]);

        $position = Position::find($id);
        $position->code = $request->code;
        $position->name = $request->name;
        $position->save();

        return redirect()->route('position.index')->with('success', 'Event berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Position::find($id)->delete();

        return redirect()->route('position.index');
    }
}

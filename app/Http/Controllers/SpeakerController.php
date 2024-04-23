<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $speaker = Speaker::all();
        return view('speaker.index', compact('speaker'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $position = Position::all();
        return view('speaker.create', compact('position'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'sosmed' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);

        Speaker::create([
            'code' => $request->code,
            'name' => $request->name,
            'sosmed' => $request->sosmed,
            'photo' => $imageName,
            'position_id' => $request->position_id
        ]);

        return redirect()->route('speaker.index')->with('success', 'Event berhasil dibuat.');
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
    public function edit(string $id)
    {
        $speaker = Speaker::find($id);
        $position = Position::all();

        return view('speaker.edit', compact('speaker', 'position'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'sosmed' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $speakers = Speaker::find($id);
        $imageName = $speakers->photo;

        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
        }

        $speaker = Speaker::find($id);
        $speaker->code = $request->code;
        $speaker->name = $request->name;
        $speaker->sosmed = $request->sosmed;
        $speaker->position_id = $request->position_id;
        $speaker->photo = $imageName;
        $speaker->save();

        return redirect()->route('speaker.index')->with('success', 'Event berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $speaker = Speaker::find($id);

        $photoPath = public_path('images/' . $speaker->photo);
        if (file_exists($photoPath)) {
            unlink($photoPath);
        }

        $speaker->delete();

        return redirect()->route('speaker.index')->with('success', 'Event berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speaker;
use App\Models\Position;

class SpeakerController extends Controller
{
    public function index()
    {
        $speakers = Speaker::all();
        return view('speakers.index', compact('speakers'));
    }

    public function create()
    {
        return view('speakers.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'sosmed' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);

        $speaker = Speaker::create([
            'code' => $request->code,
            'name' => $request->name,
            'sosmed' => $request->sosmed,
            'photo' => $imageName,
        ]);

        if ($speaker) {
            return redirect()->route('speakers.index')->with('success', 'Speaker berhasil ditambahkan.');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan speaker. Silakan coba lagi.');
        }
    }

    public function show(Speaker $speaker)
    {
        return view('speakers.show', compact('speaker'));
    }
    public function edit(Speaker $speaker)
    {
        $positions = Position::all();
        return view('speakers.edit', compact('speaker', 'positions'));
    }


    public function update(Request $request, Speaker $speaker)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'sosmed' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = $speaker->photo;

        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
        }

        $speaker->update([
            'code' => $request->code,
            'name' => $request->name,
            'sosmed' => $request->sosmed,
            'photo' => $imageName,
        ]);

        if ($speaker) {
            return redirect()->route('speakers.index')->with('success', 'Speaker berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui speaker. Silakan coba lagi.');
        }
    }

    public function destroy(Speaker $speaker)
    {
        // Lakukan pengecekan apakah speaker terkait dengan agenda
        if ($speaker->agendas()->exists()) {
            return redirect()->route('speakers.index')->with('error', 'Maaf, speaker ini tidak dapat dihapus karena terkait dengan agenda.');
        }

        $photoPath = public_path('images/' . $speaker->photo);
        if (file_exists($photoPath)) {
            unlink($photoPath);
        }

        if ($speaker->delete()) {
            return redirect()->route('speakers.index')->with('success', 'Speaker berhasil dihapus.');
        } else {
            return redirect()->route('speakers.index')->with('error', 'Gagal menghapus speaker. Silakan coba lagi.');
        }
    }
}

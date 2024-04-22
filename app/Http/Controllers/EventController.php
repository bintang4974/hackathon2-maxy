<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'location' => 'required',
            'price' => 'required|numeric',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $imageName);

        $event = Event::create([
            'code' => $request->code,
            'title' => $request->title,
            'desc' => $request->desc,
            'location' => $request->location,
            'price' => $request->price,
            'photo' => $imageName,
        ]);

        return redirect()->route('events.index')->with('success', 'Event berhasil dibuat.');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'code' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'location' => 'required',
            'price' => 'required|numeric',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = $event->photo;

        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
        }

        $event->update([
            'code' => $request->code,
            'title' => $request->title,
            'desc' => $request->desc,
            'location' => $request->location,
            'price' => $request->price,
            'photo' => $imageName,
        ]);

        return redirect()->route('events.index')->with('success', 'Event berhasil diperbarui.');
    }

    public function destroy(Event $event)
    {
        $photoPath = public_path('images/' . $event->photo);
        if (file_exists($photoPath)) {
            unlink($photoPath);
        }

        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event berhasil dihapus.');
    }

}

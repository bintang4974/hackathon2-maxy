<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventUser;

class EventUserController extends Controller
{
    // Menampilkan semua data event_user
    public function index()
    {
        $eventUsers = EventUser::all();
        return view('event_users.index', compact('eventUsers'));
    }

    // Menampilkan detail event_user
    public function show($id)
    {
        $eventUser = EventUser::findOrFail($id);
        return view('event_users.show', compact('eventUser'));
    }

    // Menampilkan form untuk mengedit event_user
    public function edit($id)
    {
        $eventUser = EventUser::findOrFail($id);
        return view('event_users.edit', compact('eventUser'));
    }

    // Memperbarui data event_user
    public function update(Request $request, $id)
    {
        $request->validate([
            'event_id' => 'required',
            'user_id' => 'required',
            'is_paid' => 'required',
        ]);

        $eventUser = EventUser::findOrFail($id);
        $eventUser->update($request->all());

        return redirect()->route('event_users.index')
            ->with('success', 'Event User updated successfully');
    }

    // Menghapus data event_user
    public function destroy($id)
    {
        $eventUser = EventUser::findOrFail($id);
        $eventUser->delete();

        return redirect()->route('event_users.index')
            ->with('success', 'Event User deleted successfully');
    }

    public function updatePaymentStatus($id)
    {
        $eventUser = EventUser::findOrFail($id);
        $eventUser->is_paid = !$eventUser->is_paid;
        $eventUser->save();
        return redirect()->route('event_users.index')
        ->with('success', 'Status pembayaran berhasil diperbarui.');
    }
}

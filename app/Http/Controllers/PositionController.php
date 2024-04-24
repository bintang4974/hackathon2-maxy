<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::all();
 
        return view('position.index', compact('positions'));
    }

    public function create()
    {
        return view('position.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi input
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'speaker_id' => 'required',
        ]);

        // Mulai transaksi database
        DB::beginTransaction();

        try {
            // Simpan data ke dalam tabel positions menggunakan model Position
            $position = new Position();
            $position->code = $request->code;
            $position->name = $request->name;
            $position->speaker_id = $request->speaker_id;
            $position->save();

            // Commit transaksi
            DB::commit();

            // Redirect dengan pesan sukses
            return redirect()->route('speakers.show', ['speaker' => $request->speaker_id])->with('success', 'Position berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi kesalahan
            DB::rollback();
 
            // Redirect dengan pesan kesalahan
            return redirect()->back()->with('error', 'Gagal menambahkan position. Silakan coba lagi.');
        }
    }




    public function show(Position $position)
    {
        return view('position.show', compact('positions'));
    }

    public function edit(string $id)
    {
        $position = Position::all();
        return view('position.edit', compact('position'));
    }

    public function update(Request $request, Position $position)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'speaker_id' => 'required',
        ]);

        try {
            $position->update($request->all());
            return redirect()->route('speakers.index', ['speaker' => $request->speaker_id])->with('success', 'Position berhasil diperbaharui.');
        } catch (\Exception $e) {
            return redirect()->route('speakers.index', ['speaker' => $request->speaker_id])->with('error', 'Gagal memperbaharui position. Silakan coba lagi.');
        }
    }
    public function destroy(Position $position)
        {
            try {
                $speakerID = $position->event_id; 
                $position->delete();
                return redirect()->route('speakers.index', ['speaker' => $speakerID])->with('success', 'Position berhasil dihapus.');
            } catch (\Exception $e) {
                return redirect()->route('speakers.index', ['speaker' => $speakerID])->with('error', 'Gagal menghapus position. Silakan coba lagi.');
            }
        }
}


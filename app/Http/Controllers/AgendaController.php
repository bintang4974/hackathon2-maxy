<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Support\Facades\DB;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::all(); 
        return view('agendas.index', compact('agendas'));
    }

    public function create()
    {
        return view('agendas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'title' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'desc' => 'required',
            'event_id' => 'required',
        ]);

        // Gabungkan waktu mulai dan waktu selesai menjadi satu rentang waktu
        $timeRange = $request->time_start . ' - ' . $request->time_end;

        // Gunakan transaksi untuk memastikan integritas data
        DB::beginTransaction();

        try {
            // Simpan rentang waktu ke basis data
            Agenda::create([
                'code' => $request->code,
                'title' => $request->title,
                'time' => $timeRange,
                'desc' => $request->desc,
                'event_id' => $request->event_id,
                'speaker_id' => $request->speaker_id,
            ]);

            DB::commit();

            return redirect()->route('events.show', ['event' => $request->event_id])->with('success', 'Agenda berhasil ditambahkan.');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->back()->with('error', 'Gagal menambahkan agenda. Silakan coba lagi.');
        }
    }


    public function show(Agenda $agenda)
    {
        return view('agendas.show', compact('agenda'));
    }

    public function edit(Agenda $agenda)
    {
        return view('agendas.edit', compact('agenda'));
    }

    public function update(Request $request, Agenda $agenda)
    {
        $request->validate([
            'code' => 'required',
            'title' => 'required',
            'time' => 'required',
            'desc' => 'required',
            'event_id' => 'required',
        ]);

        try {
            $agenda->update($request->all());
            return redirect()->route('events.show', ['event' => $request->event_id])->with('success', 'Agenda berhasil diperbaharui.');
        } catch (\Exception $e) {
            return redirect()->route('events.show', ['event' => $request->event_id])->with('error', 'Gagal memperbaharui agenda. Silakan coba lagi.');
        } 
    }

    public function destroy(Agenda $agenda)
    {
        try {
            $eventId = $agenda->event_id; 
            $agenda->delete();
            return redirect()->route('events.show', ['event' => $eventId])->with('success', 'Agenda berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('events.show', ['event' => $eventId])->with('error', 'Gagal menghapus agenda. Silakan coba lagi.');
        }
    }

}

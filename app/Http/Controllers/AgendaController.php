<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

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
            'time' => 'required',
            'desc' => 'required',
            'event_id' => 'required',
            'speaker_id' => 'required',
        ]);

        Agenda::create($request->all());

        return redirect()->route('agendas.index')->with('success', 'Agenda berhasil ditambahkan.');
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
            'speaker_id' => 'required',
        ]);

        $agenda->update($request->all());

        return redirect()->route('agendas.index')->with('success', 'Agenda berhasil diperbarui.');
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();

        return redirect()->route('agendas.index')->with('success', 'Agenda berhasil dihapus.');
    }
}

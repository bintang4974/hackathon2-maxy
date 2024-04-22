@extends('layouts.app')

@section('content')
    <h1>Detail Agenda</h1>

    <p><strong>Code:</strong> {{ $agenda->code }}</p>
    <p><strong>Title:</strong> {{ $agenda->title }}</p>
    <p><strong>Time:</strong> {{ $agenda->time }}</p>
    <p><strong>Description:</strong> {{ $agenda->desc }}</p>
    <p><strong>Event ID:</strong> {{ $agenda->event_id }}</p>
    <p><strong>Speaker ID:</strong> {{ $agenda->speaker_id }}</p>

    <a href="{{ route('agendas.edit', $agenda->id) }}" class="btn btn-primary">Edit</a>

    <form action="{{ route('agendas.destroy', $agenda->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus?')">Hapus</button>
    </form>
@endsection

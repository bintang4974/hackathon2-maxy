@extends('layouts.template')

@section('content')
    <h1>Edit Agenda</h1>

    <form action="{{ route('agendas.update', ['agenda' => $agenda->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Code:</label>
            <input type="text" name="code" id="code" class="form-control" value="{{ $agenda->code }}" required>
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $agenda->title }}" required>
        </div>
        <div class="form-group">
            <label for="time">Time:</label>
            <input type="text" name="time" id="time" class="form-control" value="{{ $agenda->time }}" required>
        </div>
        <div class="form-group">
            <label for="desc">Description:</label>
            <textarea name="desc" id="desc" class="form-control" required>{{ $agenda->desc }}</textarea>
        </div>
        <div class="form-group">
            <label for="event_id">Event ID:</label>
            <input type="text" name="event_id" id="event_id" class="form-control" value="{{ $agenda->event_id }}" required>
        </div>
        <div class="form-group">
            <label for="speaker_id">Speaker ID:</label>
            <input type="text" name="speaker_id" id="speaker_id" class="form-control" value="{{ $agenda->speaker_id }}">
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
    </form>
@endsection

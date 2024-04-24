@extends('layouts.template')

@section('content')
    <h1>Tambah Agenda Baru</h1>

    <form action="{{ route('agendas.store') }}" method="POST">
        @csrf
        <input type="hidden" name="event_id" value="{{ request()->query('event_id') }}">
        <div class="form-group">
            <label for="code">Code:</label>
            <input type="text" name="code" id="code" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="time_start">Start Time:</label>
            <input type="time" name="time_start" id="time_start" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="time_end">End Time:</label>
            <input type="time" name="time_end" id="time_end" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="desc">Description:</label>
            <textarea name="desc" id="desc" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="speaker_id">Speaker:</label>
            <select name="speaker_id" id="speaker_id" class="form-control">
                <option value="">Pilih Speaker</option>
                @foreach(\App\Models\Speaker::pluck('name', 'id') as $speakerId => $speakerName)
                    <option value="{{ $speakerId }}">{{ $speakerName }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection

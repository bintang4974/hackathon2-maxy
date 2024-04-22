@extends('layouts.app')

@section('content')
    <h1>Detail Event</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $event->title }}</h5>
            <p class="card-text"><strong>Kode:</strong> {{ $event->code }}</p>
            <p class="card-text"><strong>Lokasi:</strong> {{ $event->location }}</p>
            <p class="card-text"><strong>Harga:</strong> {{ $event->price }}</p>
            <p class="card-text"><strong>Deskripsi:</strong> {{ $event->desc }}</p>
            <img src="{{ asset('images/' . $event->photo) }}" alt="{{ $event->title }}" class="img-fluid">

            <!-- Detail Agenda -->
            <h5 class="mt-4">Agenda</h5>
            @if ($event->agendas->isEmpty())
                <p>Tidak ada agenda untuk event ini.</p>
            @else
                <ul class="list-group">
                    @foreach ($event->agendas as $agenda)
                        <li class="list-group-item">
                            <strong>Title:</strong> {{ $agenda->title }} <br>
                            <strong>Waktu:</strong> {{ $agenda->time }} <br>
                            <strong>Deskripsi:</strong> {{ $agenda->speaker->name }} <br>
                            <strong>Deskripsi:</strong> {{ $agenda->desc }}
                        </li>
                    @endforeach
                </ul>
            @endif

            <a href="{{ route('events.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>
@endsection

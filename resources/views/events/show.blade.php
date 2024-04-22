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
            <a href="{{ route('events.index') }}" class="btn btn-primary mt-3">Kembali</a>
        </div>
    </div>
@endsection

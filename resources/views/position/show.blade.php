@extends('layouts.template')

@section('content')
    <h1>Detail Event</h1>

    <div class="card">
        <div class="card-body">
            {{-- <h5 class="card-title">{{ $event->title }}</h5> --}}
            <p class="card-text"><strong>Kode:</strong> {{ $position->code }}</p>
            <p class="card-text"><strong>Nama:</strong> {{ $position->name }}</p>
            {{-- <img src="{{ asset('images/' . $event->photo) }}" alt="{{ $event->title }}" class="img-fluid"> --}}
            <a href="{{ route('position.index') }}" class="btn btn-primary mt-3">Back</a>
        </div>
    </div>
@endsection

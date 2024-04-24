@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Informasi Event</h6>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-text"><strong>Kode:</strong> {{ $event->code }}</p>
                        <p class="card-text"><strong>Tanggal:</strong> {{ $event->date }}</p>
                        <p class="card-text"><strong>Lokasi:</strong> {{ $event->location }}</p>
                        <p class="card-text"><strong>Harga:</strong> {{ $event->price }}</p>
                        <p class="card-text"><strong>Deskripsi:</strong> {{ $event->desc }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Detail Event</h6>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('images/' . $event->photo) }}" alt="{{ $event->title }}" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Agenda</h6>
                <a href="{{ route('agendas.create', ['event_id' => $event->id]) }}" class="btn btn-primary btn-sm mt-3">Tambah</a>
                <a href="{{ route('events.index') }}" class="btn btn-secondary btn-sm mt-3">Kembali</a>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if ($event->agendas->isEmpty())
                    <p class="card-text">Tidak ada agenda untuk event ini.</p>
                @else
                    <ul class="list-group">
                        @foreach ($event->agendas as $agenda)
                            <li class="list-group-item">
                                <strong>Title:</strong> {{ $agenda->title }} <br> 
                                <strong>Time:</strong> {{ $agenda->time }} <br>
                                @if ($agenda->speaker) 
                                    <strong>Speaker:</strong> {{ $agenda->speaker->name }} <br>
                                    @if ($agenda->speaker->position)
                                        <strong>Posisi:</strong> {{ $agenda->speaker->position->name }} <br>
                                    @endif
                                @endif

                                <strong>Deskripsi:</strong> {{ $agenda->desc }}
                                <br>
                                <a href="{{ route('agendas.edit', ['agenda' => $agenda->id]) }}" class="btn btn-primary btn-sm" style="padding: 0.25rem 0.5rem; font-size: 0.75rem; margin-right: 5px;">Edit</a>

                                <form action="{{ route('agendas.destroy', $agenda->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" style="padding: 0.25rem 0.5rem; font-size: 0.75rem; margin-right: 5px;" onclick="return confirm('Apakah Anda yakin ingin menghapus agenda ini?')">Hapus</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection

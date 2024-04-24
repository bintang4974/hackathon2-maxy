@extends('layouts.template')

@section('content')
    <div class="container">
        <h3 class="mb-4">Detail Speaker</h3>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $speaker->name }}</h5>
                <p class="card-text"><strong>Kode:</strong> {{ $speaker->code }}</p>
                <p class="card-text"><strong>Sosmed:</strong> {{ $speaker->sosmed }}</p>
                <p class="card-text"><strong>Posisi:</strong></p>
                <a href="{{ route('position.create', ['speaker_id' => $speaker->id]) }}" class="btn btn-success btn-sm">Tambah Posisi</a>
                <ul class="list-group mt-3">
                    @foreach ($speaker->positions as $position)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $position->name }}
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="{{ route('position.destroy', ['speaker' => $speaker->id, 'position' => $position->id]) }}" method="POST" class="mr-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jabatan ini dari speaker?')">Hapus</button>
                                </form>
                                <a href="{{ route('position.edit', ['speaker' => $speaker->id, 'position' => $position->id]) }}" class="btn btn-sm btn-warning">Edit</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <p class="card-text mt-3"><strong>Foto:</strong></p>
                <img src="{{ asset('images/' . $speaker->photo) }}" alt="{{ $speaker->name }}" class="img-fluid rounded" style="max-width: 200px;">
                <div class="mt-4">
                    <a href="{{ route('speakers.index') }}" class="btn btn-primary btn-sm">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection

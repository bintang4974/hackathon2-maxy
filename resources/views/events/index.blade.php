@extends('layouts.app')

@section('content')
    <h1>Daftar Event</h1>
    <a href="{{ route('events.create') }}" class="btn btn-primary mb-3">Tambah Event Baru</a>

    @if (count($events) > 0)
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Lokasi</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->code }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->location }}</td>
                                <td>{{ $event->price }}</td>
                                <td>
                                    <a href="{{ route('events.show', $event->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('events.destroy', $event->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus event ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <p>Tidak ada event.</p>
    @endif
@endsection

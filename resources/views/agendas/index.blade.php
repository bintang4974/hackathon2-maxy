@extends('layouts.app')

@section('content')
    <h1>Daftar Agenda</h1>
    <a href="{{ route('agendas.create') }}" class="btn btn-primary mb-3">Tambah Agenda Baru</a>

    @if (count($agendas) > 0)
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Waktu</th>
                            <th>Deskripsi</th>
                            <th>ID Event</th>
                            <th>ID Speaker</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agendas as $agenda)
                            <tr>
                                <td>{{ $agenda->id }}</td>
                                <td>{{ $agenda->code }}</td>
                                <td>{{ $agenda->title }}</td>
                                <td>{{ $agenda->time }}</td>
                                <td>{{ $agenda->desc }}</td>
                                <td>{{ $agenda->event->title }}</td>
                                <td>{{ $agenda->speaker->name }}</td>
                                <td>
                                    <a href="{{ route('agendas.show', $agenda->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                    <a href="{{ route('agendas.edit', $agenda->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('agendas.destroy', $agenda->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus agenda ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <p>Tidak ada agenda.</p>
    @endif
@endsection

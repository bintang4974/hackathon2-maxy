@extends('layouts.app')

@section('content')
    <h1>Daftar Event</h1>
    <a href="{{ route('position.create') }}" class="btn btn-primary mb-3">Tambah</a>

    @if (count($position) > 0)
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode</th>
                            <th>name</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($position as $position)
                            <tr>
                                <td>{{ $position->id }}</td>
                                <td>{{ $position->code }}</td>
                                <td>{{ $position->name }}</td>
                                <td>
                                    <a href="{{ route('position.show', $position->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                    <a href="{{ route('position.edit', $position->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('position.destroy', $position->id) }}" method="POST" class="d-inline">
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
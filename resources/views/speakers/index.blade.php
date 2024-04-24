@extends('layouts.template')

@section('content')
<h4>Daftar Speaker</h4>
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
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <a href="{{ route('speakers.create') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
        </div>
        <div class="card-body">
        @if ($speakers->isEmpty())
        <p>Tidak ada speaker.</p>
        @else
        <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Sosmed</th>
                        <th>Posisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($speakers as $speaker)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $speaker->code }}</td>
                            <td>{{ $speaker->name }}</td>
                            <td>{{ $speaker->sosmed }}</td>
                            <td>
                                <ul>
                                    @foreach ($speaker->positions as $position)
                                        <li>{{ $position->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <a href="{{ route('speakers.show', ['speaker' => $speaker->id]) }}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{ route('speakers.edit', ['speaker' => $speaker->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('speakers.destroy', ['speaker' => $speaker->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE') 
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus speaker ini?')">Hapus</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

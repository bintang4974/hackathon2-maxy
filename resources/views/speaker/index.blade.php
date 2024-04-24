@extends('layouts.app')

@section('content')
    <h3>Daftar Speaker</h3>

    @if (count($speaker) > 0)

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('speaker.create') }}" class="btn btn-primary btn-sm">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode</th>
                                <th>name</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($speaker as $speaker)
                            <tr>
                                <td>{{ $speaker->id }}</td>
                                <td>{{ $speaker->code }}</td>
                                <td>{{ $speaker->name }}</td>
                                <td>
                                    <a href="{{ route('speaker.show', $speaker->id) }}"
                                        class="btn btn-sm btn-info">Lihat</a>
                                    <a href="{{ route('speaker.edit', $speaker->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('speaker.destroy', $speaker->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus event ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <p>Tidak ada speaker.</p>
    @endif
@endsection

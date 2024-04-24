@extends('layouts.template')

@section('content')
    <h4>Daftar Event</h4>
     @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('events.create') }}" class="btn btn-primary btn-sm">Tambah</a>
        </div> 
        <div class="card-body">
            @if (count($events) > 0)
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
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
                                    <td>{{ $event->date }}</td>
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
                                        @php
                                            $userId = auth()->user()->id;
                                        @endphp
                                        <a href="{{ route('events.register', ['eventId' => $event->id]) }}" class="btn btn-sm btn-success" onclick="return confirm('Apakah Anda yakin ingin mendaftar pada event ini?')">Daftar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p>Tidak ada event.</p>
            @endif
        </div>
    </div>
@endsection

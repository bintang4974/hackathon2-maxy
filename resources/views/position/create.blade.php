@extends('layouts.app')

@section('content')
    <h1>Tambah Event Baru</h1>

    <form action="{{ route('position.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Kode:</label>
            <input type="text" name="code" id="code" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" id="title" class="form-control" required>
        </div>
        {{-- <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" name="photo" id="photo" class="form-control-file" required>
        </div> --}}
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

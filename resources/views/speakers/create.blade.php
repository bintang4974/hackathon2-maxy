@extends('layouts.template')

@section('content')
    <div class="container">
        <h1>Tambah Speaker Baru</h1>

        <form action="{{ route('speakers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="code">Kode:</label>
                <input type="text" name="code" id="code" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="sosmed">Sosmed:</label>
                <input type="text" name="sosmed" id="sosmed" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="photo">Foto:</label>
                <input type="file" name="photo" id="photo" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection

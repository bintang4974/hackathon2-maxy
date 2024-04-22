@extends('layouts.app')

@section('content')
    <h1>Edit Event</h1>

    <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Kode:</label>
            <input type="text" name="code" id="code" class="form-control" value="{{ $event->code }}" required>
        </div>
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $event->title }}" required>
        </div>
        <div class="form-group">
            <label for="desc">Deskripsi:</label>
            <textarea name="desc" id="desc" class="form-control" required>{{ $event->desc }}</textarea>
        </div>
        <div class="form-group">
            <label for="location">Lokasi:</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ $event->location }}" required>
        </div>
        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $event->price }}" required>
        </div>
        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" name="photo" id="photo" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection

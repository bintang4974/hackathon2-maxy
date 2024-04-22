@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <h1>Tambah Event Baru</h1>

    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="code">Kode:</label>
            <input type="text" name="code" id="code" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="desc">Deskripsi:</label>
            <textarea name="desc" id="desc" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="location">Lokasi:</label>
            <input type="text" name="location" id="location" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="text" name="price" id="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="photo">Foto:</label>
            <input type="file" name="photo" id="photo" class="form-control-file" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    @endsection
    
    @section('js')
      
    @endsection
    
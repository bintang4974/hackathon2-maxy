@extends('layouts.template')

@section('css')
<style>
    .form-preview {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #preview {
        width: 450px; 
        height: 300px; 
        margin-top: 10px;
        object-fit: cover; 
        transition: all 0.3s ease; 
        border-radius: 10px; 
    }

    #preview:hover {
        transform: scale(1.1); /* Efek hover untuk memperbesar gambar */
    }
</style>
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4>Edit Event</h4>
    </div> 
    <div class="card-body">
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
                <label for="date">Tanggal:</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ $event->date }}" required>
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
                <input type="file" name="photo" id="photo" class="form-control-file" onchange="previewImage(event)">
                <div class="form-preview">
                    <img id="preview" src="{{ asset('images/' . $event->photo) }}" alt="Preview Foto">
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
        </form>
    </div>
</div>
@endsection

@section('js')
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection

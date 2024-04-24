@extends('layouts.template')

@section('content')
    <div class="container">
        <h1>Edit Speaker</h1>

        <form action="{{ route('speakers.update', ['speaker' => $speaker->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="position_id" value="{{ $speaker->position_id }}">
            @method('PUT')
            <div class="form-group">
                <label for="code">Kode:</label>
                <input type="text" name="code" id="code" class="form-control" value="{{ $speaker->code }}" required>
            </div>
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $speaker->name }}" required>
            </div>
            <div class="form-group">
                <label for="sosmed">Sosmed:</label>
                <input type="text" name="sosmed" id="sosmed" class="form-control" value="{{ $speaker->sosmed }}" required>
            </div>

            <div class="form-group">
                <label for="photo">Foto:</label>
                <input type="file" name="photo" id="photo" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
